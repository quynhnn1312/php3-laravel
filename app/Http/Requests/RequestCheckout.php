<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCheckout extends FormRequest
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
            'name' => 'required',
            'email' => 'required|regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',
            'address' => 'required',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Yêu cầu nhập họ tên',
            'email.required' => 'Yêu cầu nhập địa chỉ email',
            'email.regex' => 'Trường này phải là email',
            'address.required' => 'Yêu cầu nhập địa chỉ giao hàng',
            'phone.required' => 'Yêu cầu nhập số điện thoại',
            'phone.regex' => 'Số điện thoại không chinh xác',
        ];
    }

}
