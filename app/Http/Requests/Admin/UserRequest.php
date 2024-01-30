<?php

namespace App\Http\Requests\Admin;

use App\Constants\CommonConstants;

class UserRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'phone' => 'required|'.CommonConstants::RULES_PHONE,
            'email' => 'required|bail|email:rfc,dns|',
            'password' => 'required',
            'role' => 'required',
            'password_confirm' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name'      => 'Họ tên',
            'phone'     => 'Số điện thoại',
            'email'     => 'Email',
            'password'   => 'Mật khẩu',
            'role'      => 'Cấp độ',
            'password_confirm' => 'Xác nhận mật khẩu'
        ];
    }
    public function messages()
    {
        return [
            'required'          => ':attribute không được để trống.',
            'max'               => ':attribute không được quá :max ký tự.',
            'email'             => 'Email không đúng định dạng email (abc@gmail.com).',
            'regex'             => ':attribute không đúng định dạng.',
            'numeric'           => ':attribute không đúng định dạng.',
            'min_digits'        => ':attribute không đúng định dạng.',
            'max_digits'        => ':attribute không được quá :max ký tự.',
        ];
    }
}
