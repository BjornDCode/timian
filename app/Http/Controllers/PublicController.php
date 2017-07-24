<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PublicController extends Controller
{

    public function __construct() {
        $this->middleware('guest');
    }

    public function home() {
        return view('public.home');
    }

    public function plans() {
        $plans = Plan::all();

        return view('public.plans', compact('plans'));
    }

    public function selectPlan() {
        session(['plan' => request('plan')]);

        return redirect()->route('register');
    }

}
