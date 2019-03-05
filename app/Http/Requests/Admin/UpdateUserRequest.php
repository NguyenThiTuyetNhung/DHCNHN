<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'username' => 'required|max:50',
            'password' => 'required|max:30',
            'name' => 'required|max:50',
            'birthday' => 'required',
            'gender' => 'required',
            'email' => 'required|max:100',
            'address' => 'required|max:100',
            'phone' => 'required|max:15',
            'status' => 'required',
        ];
    }
     public function messages()
    {
        return [
            'username.required' => 'Tài khoản không được để trống.',
            'username.username' => 'Tài khoản không để trống',
        ];
    }
}
