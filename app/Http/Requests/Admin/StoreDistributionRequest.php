<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreDistributionRequest extends FormRequest
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
            'name' => 'required|max:100',
            'tax' => 'required|max:50',
            'phone' => 'required|max:15',
            'email' => 'required|max:100',
            'representation' => 'required|max:50',
            'status' => 'required',
        ];
    }
     public function messages()
    {
        return [
           'name.required'=>'Không cho phép bỏ trống',
           'name.name'=>'Tên nhà cung cấp',
        ];
    }
}
