<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use App\Http\Requests\SubscriptionRequest;
use Stripe\Stripe;
use DB;
use Exception;
use App\User;
use App\Site;
use App\DeployWebtheory;
use App\Notifications\SiteDeployment as SiteDeploymentNotification;

class SubscriptionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function __construct()
    {
        $this->middleware('auth');
        // Set the API Key
        Stripe::setApiKey(env("STRIPE_SECRET"));
    }

    public function create()
    {
        $user = Auth::user();
        
        $plans = $this->plans();

        $user->createOrGetStripeCustomer($this->customer($user));
        
        $paymentMethods = $user->paymentMethods();

        if ($paymentMethods)
            $intent = $user->createSetupIntent();
        
        $site_name = null;
        $subscribed_plan = null;
        $mode = 'create';

        return view('subscription.form', compact('plans', 'intent', 'site_name', 'subscribed_plan', 'mode'));
    }

    public function store(SubscriptionRequest $request)
    {
        $user = Auth::user();
        
        try {
            // Check if user has any subscription
            if ($user->subscribed('main')) {            
                if ($user->subscribedToPlan($request->plan_id, 'main')) {
                    // It's a new site with an existing subscribed plan
                    $user->subscription('main')->incrementQuantity(1, $request->plan_id);
                } else {
                    // It's a new site with a new plan
                    $user->subscription('main')->addPlanAndInvoice($request->plan_id);
                }
            } else {
                // Create a new subscription
                $user->newSubscription('main', $request->plan_id)->create($request->stripeToken, $this->customer($user));
            }

            $site = $this->createSite($request);
        } catch (\Exception $e) {
            return redirect()->back()->with('flash', $e->getMessage());
        }

        // Subscribed successfully
        return redirect()->route('home')->with('flash', 'Subscription successful. Site build is in progress');
    }

    public function edit(Request $request, $site_uid)
    {
        $user = Auth::user();
        
        $plans = $this->plans();

        $user->createOrGetStripeCustomer($this->customer($user));
        
        $paymentMethods = $user->paymentMethods();

        if ($paymentMethods)
            $intent = $user->createSetupIntent();
        
        $site = Site::where([['user_id', Auth::id()],['site_uid', $site_uid]])->first();
        $site_name = $site->name;
        $subscribed_plan = $site->stripe_plan;
        $mode = 'edit';

        return view('subscription.form', compact('plans', 'intent', 'site_name', 'subscribed_plan', 'mode', 'site_uid'));
    }

    public function update(SubscriptionRequest $request, $site_uid)
    {
        $user = Auth::user();
        
        $site = Site::where([['user_id', Auth::id()],['site_uid', $site_uid]])->first();

        try {
            if ($user->subscribedToPlan($request->plan_id, 'main')) {
                // There is an existing subscribed plan, increment for new site
                $user->subscription('main')->incrementQuantity(1, $request->plan_id);
            } else {
                // There is no existing subscription plan, create for new site
                $user->subscription('main')->addPlanAndInvoice($request->plan_id);
            }
            
            // Remove existing subscription plan for the site
            $subscriptionItem = $user->subscription('main')->findItemOrFail($site->stripe_plan);
            if ($subscriptionItem->quantity > 1) {
                $user->subscription('main')->decrementQuantity(1, $site->stripe_plan);
            } else {
                $user->subscription('main')->removePlan($site->stripe_plan);
            }

            $site = $this->modifySite($request, $site);
        } catch (\Exception $e) {
            return redirect()->back()->with('flash', $e->getMessage());
        }

        // Subscribed successfully
        return redirect()->route('home')->with('flash', 'Subscription change successful. Site rebuild is in progress');
    }
    
    public function destroy($site_uid)
    {
        $user = Auth::user();

        $site = Site::where([['user_id', Auth::id()],['site_uid', $site_uid]])->first();

        try {
            // Remove existing subscription plan for the site
            $subscriptionItem = $user->subscription('main')->findItemOrFail($site->stripe_plan);
            if ($subscriptionItem->quantity > 1) {
                $user->subscription('main')->decrementQuantity(1, $site->stripe_plan);
            } else {
                $subscriptionItem = $user->subscription('main')->items->first();
                if ($subscriptionItem->stripe_plan <> $site->stripe_plan) {
                    $user->subscription('main')->removePlan($site->stripe_plan);
                } else {
                    $user->subscription('main')->cancelNow();
                }
                    
            }

            $site = $this->deleteSite($site);
        } catch (\Exception $e) {
            return redirect()->back()->with('flash', $e->getMessage());
        }

        return redirect()->route('home')->with('flash', 'Subscription deleted. Site has been destroyed');
    }

    public function plans()
    {
        return Cache::remember('stripe.plans', 60*24, function () { 
            $plans = \Stripe\Plan::all()->data;
            foreach($plans as $plan) {
                $plan->product = \Stripe\Product::retrieve($plan->product);
            }

            return $plans;
        });
    }

    private function customer($user)
    {
        return [
            'name' => $user->name,
            'email' => $user->email,
            'description' => $user->id . '-' . strtolower($user->name)
        ];
    }

    private function createSite($request)
    {
        $site = new Site([
            'site_uid' => Str::random(30),
            'user_id' => Auth::id(),
            'stripe_plan' => $request->plan_id,
            'name' => $request->site_name,
            'status' => 'active',
        ]);
        $site->save();
        
        // Deploy a webtheory booty
        // DeployWebtheory::createBooty($site);
        Auth::user()->notify(new SiteDeploymentNotification($site));

        return $site;
    }

    private function modifySite($request, $site)
    {
        $site->stripe_plan = $request->plan_id;
        $site->save();
        
        // Re-Deploy a webtheory booty
        // DeployWebtheory::recreateBooty($site);
        return $site;
    }

    private function deleteSite($site)
    {
        $site->status = 'cancelled';
        $site->save();
        $site->delete();
        // Destroy a webtheory booty
        // DeployWebtheory::deleteBooty($site);
        return $site;
    }
}
