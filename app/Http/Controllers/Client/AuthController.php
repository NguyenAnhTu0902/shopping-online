<?php

namespace App\Http\Controllers\Client;

use App\Constants\CommonConstants;
use App\Http\Controllers\Controller;
use App\Http\Requests\Client\UserRequest;
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
            return back()->with('notification','Lỗi: Email hoặc mật khẩu không đúng!');
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

    public function checkRegister(UserRequest $request)
    {
        if($request->password != $request->password_confirmation)
        {
            return back()->with('notification','Xác nhận lại mật khẩu!!');
        }
        $user = $this->userService->findByAttrFirst('email', $request->email);
        if($user){
            return back()->with('notification','Email này đã tồn tại !');
        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => CommonConstants::role_client,
            'phone' => $request->phone,
        ];
        $this->userService->create($data);

        return redirect('/dang-nhap')->with('notification','Register Success!! Please check your email.');
    }
}
