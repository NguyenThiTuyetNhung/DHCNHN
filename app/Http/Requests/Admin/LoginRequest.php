<?php

namespace App\Http\Requests\Admin;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use App\Admin;

class LoginRequest extends FormRequest
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
            'username' => 'bail|required|exists:admins,username',
            'password' => 'bail|required',
        ];
    }

    public function withValidator($validator)
    {
        if ($validator->fails()) return;

        $validator->after(function ($validator) {
            $admin = Admin::where('rule', 0)->where('username', request('username'))->first();
            if (is_null($admin)) {
                $validator->errors()->add('username', 'Tài khoản không chính xác.');
                return;
            }
            if (!Hash::check(request('password'), $admin->password)) {
                $validator->errors()->add('password', 'Mật khẩu không chính xác.');
                return;
            }
        });
    }
}
