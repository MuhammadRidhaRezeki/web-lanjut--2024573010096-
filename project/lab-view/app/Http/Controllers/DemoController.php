<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //simple data passsing 
    public function hello()
    {
        $name = 'Laravel Leaner';
        return view('hello', ['name' => $name]);
    }

    //parameterized route
    public function greet($name)
    {
        return view('greet', ['name' => ucfirst(($name))]);
    }

    //query string
    public function search(Request $request)
    {
        $keyword = $request ->query('p', 'none');
        return view('search', ['keyword' => $keyword]);
    }
}
