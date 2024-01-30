<?php

namespace App\Http\Requests\Client;

use App\Constants\CommonConstants;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

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
            'password_confirmation' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name'      => 'Họ tên',
            'phone'     => 'Số điện thoại',
            'email'     => 'Email',
            'password'   => 'Mật khẩu',
            'password_confirmation' => 'Xác nhận mật khẩu'
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
