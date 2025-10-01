<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeightTargetController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function register_step2(Request $request)
    {
        $weight_targets = WeightTarget::all();
        return view('register_step2', compact('weight_logs', 'weight_targets'));
    }
}
