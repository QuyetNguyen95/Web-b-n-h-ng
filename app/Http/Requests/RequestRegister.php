<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRegister extends FormRequest
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
            'name'  => 'required',
            'email'  => 'required',
            'phone'  => 'required',
            'password'  => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'Trường này không được để trống',
            'email.required'     => 'Trường này không được để trống',
            'phone.required' => 'Trường này không được để trống',
            'password.required' => 'Mật khẩu xác nhận không đúng'
        ];
    }
}
