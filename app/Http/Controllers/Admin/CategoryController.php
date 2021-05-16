<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view ('Admin.categories.category');
    }

    public function create(){
        return view('Admin.categories.addcategory');
    }

    public function store(request $r){
        dd($r->all());
    }
}
