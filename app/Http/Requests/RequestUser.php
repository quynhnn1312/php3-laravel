<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUser extends FormRequest
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
            'email' => 'required|unique:users,email,'.$this->id,
            'password' => 'required|confirmed',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            'address' => 'required',
            'role_id' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Trường này không để trống',
            'email.required' => 'Trường này không để trống',
            'email.unique' => 'Email đã tồn tại !',
            'password.required' => 'Trường này không để trống',
            'password.confirmed' => 'Xác nhận mật khẩu không đúng !',
            'phone.required' => 'Trường này không để trống',
            'phone.regex' => 'Số điện thoại không đúng !',
            'address.required' => 'Trường này không để trống',
            'role_id.required' => 'Trường này không để trống',

        ];
    }
}
