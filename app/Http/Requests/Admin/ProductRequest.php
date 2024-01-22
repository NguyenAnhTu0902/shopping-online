<?php

namespace App\Http\Requests\Admin;

use App\Constants\CommonConstants;
use Illuminate\Validation\Rule;

class ProductRequest extends BaseRequest
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
            'brand_id' => 'required',
            'category_id' => 'required',
            'description' => [
                'nullable',
                'string'
            ],
            'price' => ['required', 'bail', 'nullable', 'numeric', 'digits_between:1,10', 'regex:/^[0-9]+$/'],
            'discount' => ['bail', 'nullable', 'numeric', 'digits_between:1,10', 'regex:/^[0-9]+$/']
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên sản phẩm',
            'brand_id' => 'Hãng',
            'category_id' => 'Loại sản phẩm',
            'description' => 'Mô tả sản phẩm',
            'price' => 'Giá sản phẩm',
            'discount' => 'Giá khuyến mãi',
        ];
    }

    public function messages()
    {
        return [
            'regex' => __('messages.EM-005'),
            'digits_between' => __('messages.EM-007'),
            'required' => __('messages.EM-002'),
            'max' => __('messages.EM-007'),
            'string' => __('messages.EM-003'),
            'numeric'           => __('messages.EM-003'),
        ];
    }
}
