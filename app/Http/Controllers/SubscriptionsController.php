<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class SubscriptionsController extends Controller
{

    public function index() {
        $planNameFromSession = request()->session()->get('plan');
        $plan = Plan::where('name', $planNameFromSession)->first();
        $plans = Plan::all();

        return view('subscriptions.subscribe', compact('plan', 'plans'));
    }

}
