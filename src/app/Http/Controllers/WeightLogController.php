<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightLog;

class WeightLogController extends Controller
{
    public function index()
    {
        $logs = WeightLog::where('user_id', auth()->id())->orderBy('date', 'desc')->paginate(8);
        return view('index', compact('logs'));
    }
}
