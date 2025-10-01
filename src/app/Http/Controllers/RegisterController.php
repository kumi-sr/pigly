<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterStep1Request;
use App\Http\Requests\RegisterStep2Request;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showStep1()
    {
        return view('auth.register_step1');
    }

    public function storeStep1(RegisterStep1Request $request)
    {
        session(['register.step1' => $request->validated()]);
        return redirect()->route('register.step2');
    }

    public function showStep2()
    {
        return view('auth.register_steps');
    }

    public function storeStep2(RegisterStep2Request $request)
    {
        session(['register.step2' => $request->validated()]);
    }
}
