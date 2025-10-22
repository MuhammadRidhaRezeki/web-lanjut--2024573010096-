<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route ::get('/hello', [DemoController::class, 'hello']);
Route ::get('/greet/{name}', [DemoController::class, 'greet']);
Route ::get('/search', [DemoController::class, 'search']);
Route::get('/', function () {
    return view('welcome');
});
