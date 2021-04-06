<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view ('Admin.Auth.login');
    }

    public function login(LoginRequest $r){
        // dd($r->all());
    }
}
