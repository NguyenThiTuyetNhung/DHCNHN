<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
             'image' => 'required|image',
            'name' => 'required|max:100',
            'detail' => 'required|max:150',
            'status' => 'required',
            'view' => 'required|max:10',
            'price' => 'required|max:15',
            'price_new' => 'required|max:15',
            'Distribution_id' => 'required',
            'Group_product_id' => 'required',
            'note' => 'nullable|max:200',
        ];
    }
     public function messages()
    {
        return [
            'image.required' => 'Ảnh không được để trống.',
            'image.image' => 'Ảnh phải là ảnh.',
        ];
    }
}
