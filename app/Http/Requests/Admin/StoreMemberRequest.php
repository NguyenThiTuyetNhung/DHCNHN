<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
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
            'username' => 'required|max:100',
            'password' => 'required|max:36',
            'name' => 'required|max:100',
            'birthday' => 'date',
            'gender' => 'required',
            'email' => 'required|max:100',
            'address' => 'required|max:100',
            'phone' => 'required|max:15',
            'rule' => 'required',
            'status' => 'required',
        ];
    }
}
