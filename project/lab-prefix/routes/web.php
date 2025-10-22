<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function ()
{
    Route::get('/dashboard', [DashboardController::Class, 'index']) ->name('admin.dashboard');
    Route::get('/users', [DashboardController::Class, 'index']) ->name('admin.users');
    Route::get('/users/{id}', [DashboardController::Class, 'show']) ->name('admin.show');
});

Route::get('/', function () {
    return view('welcome');
});
