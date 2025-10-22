<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\DasarBladeController;

Route::get('/dasar', [DasarBladeController::class, 'showData']);

use App\Http\Controllers\LogicController;

Route::get('/logic', [LogicController::class, 'show']);

use App\Http\Controllers\PageController;

Route::get('/admin', [PageController::class, 'admin']);
Route::get('/user', [PageController::class, 'user']);


