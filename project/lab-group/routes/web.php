<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class) ->group(function ()
{
    Route::get('/home   ', 'home') ->name('home');
    Route::get('/about', 'about') ->name('about');
    Route::get('/contact', 'contact') ->name('contact');
});

Route::get('/', function () {
    return view('welcome');
});
