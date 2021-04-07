<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddBlogRequest;

class BlogController extends Controller
{
    public function blog()
    {
        return view ('Admin.blogs.blog');
    }

    public function create(){
        return view('Admin.blogs.addblog');
    }

    public function store(AddBlogRequest $r){
        // dd($r->all());
    }

    public function edit(){
        return view('Admin.blogs.editblog');
    }
}
