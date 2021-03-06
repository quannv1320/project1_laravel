<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BrandRequest extends FormRequest
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
            'name' => [
                'required',
                'min:4',
                Rule::unique('brands')->ignore($this->id)
            ],
            'logo' => [
                'required',
            ],
            'description' => [
                'required',
                'min:10',
            ]
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>"Hãy nhập tên danh mục",
            'name.min'=>"Tên phải lớn hơn 5 ký tự",

            'logo.required'=>'Hãy upload logo',
    
            'description.required'=>"Hãy nhập mô tả",
            'description.min'=>"Miêu tả phải lớn hơn 10 ký tự",           
        ];
    }
}
