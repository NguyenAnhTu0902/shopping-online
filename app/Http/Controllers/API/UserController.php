<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function list(Request $request)
    {
        $response = $this->userService->list($request->get('data'), true);
        return view('layouts.admin.elements.user.search-result', $response)->render();
    }
    public function detail()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
