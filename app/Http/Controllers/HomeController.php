<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Site;
use Stripe\Stripe;

class HomeController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function home(Request $request)
    {
        // return view('user.home');
        
        // User Sites
        Stripe::setApiKey(env("STRIPE_SECRET"));
        $planlist = Cache::remember('stripe.planlist', 60*24, function () { 
            $planlist = [];
            $plans = \Stripe\Plan::all()->data;
            foreach($plans as $plan) {
                $plan->product = \Stripe\Product::retrieve($plan->product);
                $planlist[$plan->id] = $plan->product->name;
            }

            return $planlist;
        });
        
        $sites = Site::where('user_id', Auth::id())->get();
        foreach($sites as $site) {
            $site->stripe_plan = $planlist[$site->stripe_plan];
        }

        // Invoices
        $invoices = Auth::user()->invoices();
        
        return view('user.home', compact('sites', 'invoices'));
    }
}
