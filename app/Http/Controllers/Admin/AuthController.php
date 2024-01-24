<?php

namespace App\Http\Controllers\Admin;

use App\Constants\CommonConstants;
use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function login()
    {
        return view('layouts.admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $remember = $request->remember;

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('admin');
        }else
        {
            return back()->with('notification','ERROR: Email or password is wrong!');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('admin/dang-nhap');
    }
}
