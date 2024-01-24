<?php

namespace App\Http\Controllers\Client;

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
        return view('layouts.client.page.login');
    }

    /**
     * Check login
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $remember = $request->remember;

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('');
        }else
        {
            return back()->with('notification','ERROR: Email or password is wrong!');
        }
    }
    /**
     * Logout
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect('');
    }

    public function register()
    {
        return view('layouts.client.page.register');
    }

    public function checkRegister(Request $request)
    {
        if($request->password != $request->password_confirmation)
        {
            return back()->with('notification','ERROR: Confirm password does not match!!');
        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => CommonConstants::role_client,
            'phone' => $request->phone,
            'address' => $request->address,
        ];
        $this->userService->create($data);

        return redirect('/dang-nhap')->with('notification','Register Success!! Please check your email.');
    }
}
