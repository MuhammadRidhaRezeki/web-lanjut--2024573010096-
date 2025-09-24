<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomecontroller extends Controller
{
    public function show()
    {  
        $message = "welcome to laravel";
        return view('mywelcome', ['message' => $message]);
    }
}
