<?php

namespace App\Http\Requests\Admin;

class ProductImageRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'image' => 'required|image',
        ];
    }

    public function attributes()
    {
        return [
            'image' => 'Hình ảnh'
        ];
    }

    public function messages()
    {
        return [
            'required' => __('messages.EM-002'),
            'image'           => __('messages.EM-009'),
        ];
    }
}
