<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Stripe\Stripe;
use DB;
use Exception;
use App\User;
use App\Plan;
use App\Http\Resources\Plan as PlanResource;

class ZSubscriptionController extends Controller
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
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Check is subscribed
        $account = Auth::user()->accounts; // Account

        if ($account->subscribed('main')) {
            // If subscribed get the subscription
            $subscription = $account->subscription('main');
            $plan = Plan::where('stripe_plan', $subscription->stripe_plan)->first();
            $plan = new PlanResource($plan);
            $is_subscribed = true;
        } elseif (!empty($account->stripe_id)) {
            $plan = DB::table('plans')
                ->join('subscriptions', 'plans.stripe_plan', '=', 'subscriptions.stripe_plan')
                ->select('plans.name', 'plans.description', 'plans.cost', 'plans.currency', 'plans.cycle', 'plans.slug')
                ->where('account_id', Auth::user()->account_id)
                ->first();
            $is_subscribed = false;
        } else {
            $plan = '';
            $is_subscribed = false;
        }

        return view('subscription.index', compact('plan', 'is_subscribed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        // $plans = Cache::remember('stripe.plans', 60*24, function () { return $plans });
        // Set the API Key
        Stripe::setApiKey(env("STRIPE_SECRET"));
        $plans = \Stripe\Plan::all()->data;
        foreach($plans as $plan) {
            $plan->product = \Stripe\Product::retrieve($plan->product);
        }
        
        // Check if user is subscribed
        $is_subscribed = $user->subscribed('main');
        if ($is_subscribed) {
            $subscribed_plan = $user->subscription('main')->stripe_plan;
        } else {
            $subscribed_plan = null;
        }

        $user->createOrGetStripeCustomer([
            'name' => $user->name,
            'email' => $user->email,
            'description' => $user->id . '-' . strtolower($user->name)
        ]);
        
        $paymentMethods = $user->paymentMethods();

        if ($paymentMethods)
            $intent = $user->createSetupIntent();
        
        return view('subscription.form', compact('plans', 'subscribed_plan', 'intent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate Request
        $this->validate($request, [
            'stripeToken' => 'required', 
            'plan_id' => 'required',
        ]);
        
        $user = Auth::user();

        try {
            // Check already subscribed and if already subscribed with picked plan
            if ($user->subscribed('main')) {
                if ($user->subscribedToPlan($request->plan_id, 'main')) {
                    return redirect()->back()->with('flash', 'You are already subscribed to this plan!');
                } else {
                    // Swap to a different plan
                    $user->subscription('main')->swap($request->plan_id);
                }
            } else {
                // It's a new subscription
                // if user has a coupon, create new subscription with coupon applied
                if ($coupon = $request->get('coupon')) {
                    $user->newSubscription('main', $request->plan_id)
                        ->withCoupon($coupon)
                        ->create($request->stripeToken, [
                            'name' => $user->name,
                            'email' => $user->email,
                            'description' => $user->id . '-' . strtolower($user->name)
                        ]);
                } else {
                    // Create subscription
                    $user->newSubscription('main', $request->plan_id)->create($request->stripeToken, [
                        'name' => $user->name,
                        'email' => $user->email,
                        'description' => $user->id . '-' . strtolower($user->name)
                    ]);
                }
            }
        } catch (\Exception $e) {
            // Catch any error from Stripe API request and show
            return redirect()->back()->with('flash', $e->getMessage());
        }

        // Subscribed successfully
        return redirect()->back()->with('flash', 'You are now subscribed to ' . $request->plan_id);
    }

    /**
     * Update the specified resource in storage.
     * Handle Resume subscription
     *
     * @param  \Illuminate\Http\Request  $request
     * @param string $plan_slug
     * @return @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $plan_slug)
    {
        $user = Auth::user();

        try {
            $user->subscription('main')->resume();
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 422);
        }

        return response()->json(['flash' => 'Glad to see you back. Your Subscription has been resumed.'], 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $plan_slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($plan_slug)
    {
        $user = Auth::user;

        try {
            $user->subscription('main')->cancel();
        } catch (\Exception $e) {
            return redirect()->back()->with('flash', $e->getMessage());
        }

        return response()->json(null, 204);
    }
}
