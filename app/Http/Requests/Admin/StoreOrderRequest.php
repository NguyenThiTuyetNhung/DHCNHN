<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'user_id' => 'required',
            'Total_memory' => 'required|max:15',
            'Request' => 'required|max:150',
            'Delivered' => 'required|max:100',
            'Address' => 'required|max:100',
        ];
    }
     public function messages()
    {
        return [
            'user_id.required' => 'Không được để trống tên người dùng',
            'user_id.user_id' => 'Không được để trống tên người dùng',
        ];
    }
}
