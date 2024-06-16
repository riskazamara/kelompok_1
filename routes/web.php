<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorControl;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/calculate', [CalculatorControl::class, 'calculate']);
