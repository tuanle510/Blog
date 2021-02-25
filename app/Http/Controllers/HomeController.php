<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view ('Client.index');
    }

    public function single()
    {
        return view('Client.single');
    }

    public function categogy()
    {
        // echo("hello");
        return view('Client.categories');
    }
}