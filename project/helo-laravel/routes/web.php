<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomecontroller;


Route ::get('/', function()
{
    return view("welcome");
});

Route ::get('/welcome', [welcomecontroller::class,'show']);

