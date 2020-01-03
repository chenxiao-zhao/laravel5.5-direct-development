<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'name' => 'required|string|unique:user',
            'email' => 'required|email|unique:user',
            'password' => 'required|string|min:6',
            'phone' => 'unique:user'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.unique' => '用户名已存在!',
            'email.unique' => '邮箱已存在!',
            'phone.unique' => '电话已存在!',
            'email.email' => '邮箱格式错误!',
        ];
    }
}
