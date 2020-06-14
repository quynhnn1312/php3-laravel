<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'cate_name' => 'required|unique:categories,cate_name'
        ];
    }

    public function messages()
    {
        return [
            'cate_name.required' => 'Trường này không được để trống!',
            'cate_name.unique' => 'Tên danh mục đã tồn tại!'
        ];
    }
}
