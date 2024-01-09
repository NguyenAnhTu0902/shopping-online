<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('layouts.client.page.login');
    }

    public function checkLogin(Request $request)
    {
        //logic
    }

    public function register()
    {
        return view('layouts.client.page.register');
    }

    public function checkRegister(Request $request)
    {
        //logic
    }
}
