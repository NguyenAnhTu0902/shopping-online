<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function add(UserRequest $request)
    {
        $data = $request->only(
            'name',
            'email',
            'role',
            'phone',
        );
        try {
            if($request->password != $request->password_confirm)
            {
                return $this->errorForbiddenResponse('Kiểm tra lại mật khẩu !');
            }
            $data['password'] = Hash::make($request->pasword);
            $user = $this->userService->findByAttrFirst('email', $request->email);
            if($user){
                return $this->errorForbiddenResponse('Email này đã tồn tại !');
            }
            $response['data'] = $this->userService->create($data);
            $response['message'] = __('messages.SM-001');
            return $this->successResponse($response);
        } catch (\Exception $e) {
            return $this->badRequestErrorResponse($e);
        }
    }
    public function detail($id)
    {
        $response['data'] = $this->userService->findOneOrFail($id);
        return $this->successResponse($response);
    }

    public function update(UserRequest $request)
    {
        $data = $request->only(
            'id',
            'name',
            'phone',
            'role',
        );
        try {
            $id = $data['id'];
            $user = $this->userService->findOneOrFail($id);
            $response['data'] = $user->update($data);
            $response['message'] = __('messages.SM-002');
            return $this->successResponse($response);
        } catch (\Exception $e) {
            return $this->badRequestErrorResponse($e);
        }
    }

    public function delete(Request $request)
    {
        try {
            $id = $request->input('id');
            $user = $this->userService->findOneOrFail($id);
            $response['data'] = $user->delete();
            return $this->deleteSuccessResponse($response);
        } catch (\Exception $e) {
            return $this->badRequestErrorResponse($e);
        }
    }
}
