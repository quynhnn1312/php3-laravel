<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:products,name,'.$this->id.'id',
            'price' => 'required',
            'count' => 'required',
            'short_desc' => 'required',
            'cate_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được để trống !',
            'name.unique' => 'Tên sản phẩm đã tồn tại !',
            'price.required' => 'Giá sản phẩm không được để trống !',
            'count.required' => 'Số lượng phẩm không được để trống !',
            'short_desc.required' => 'Trường này không để trống !',
            'cate_id.required' => 'Trường này không để trống !',
        ];
    }
}
