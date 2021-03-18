<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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