<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        return view ('Admin.blogs.blog');
    }

    public function create(){
        return view('Admin.blogs.addblog');
    }

    public function store(){
        
    }

    public function edit(){
        return view('Admin.blogs.editblog');
    }
}
