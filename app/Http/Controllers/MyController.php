<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function showProduct()
    {
//        var_dump('test');
        return view('product');
    }

    function showHome()
    {
        return view('home');
    }


}
