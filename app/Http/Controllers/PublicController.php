<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function __construct() {
        $this->middleware('guest');
    }

    public function home() {
        return view('public.home');
    }

    public function plans() {
        return view('public.plans');
    }

}
