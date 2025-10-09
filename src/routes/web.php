<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeightTargetController;
use App\Http\Controllers\WeightLogController;
use App\Http\Controllers\RegisterController;

Route::get('/register_step1', [RegisterController::class, 'showStep1'])->name('register.step1');
Route::post('/register_step1', [RegisterController::class, 'storeStep1'])->name('register.step1.store');

Route::get('/register_step2', [RegisterController::class, 'showStep2'])->name('register.step2');
Route::post('/register_step2', [RegisterController::class, 'storeStep2']);
