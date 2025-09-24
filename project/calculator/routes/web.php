<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\calculatorcontroller;

Route::get("/calculator",[calculatorcontroller::class, 'index']);
Route::post("/calculator", [calculatorcontroller::class, 'calculate'])->name('calculator.calculate'); 



