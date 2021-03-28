<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class ProductRequest extends FormRequest
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
                Rule::unique('categories')->ignore($this->id)
            ],
            'image' => [
                'required',
            ],
            'price' => [
                'required',
                'integer'
            ],
            'quantity' => [
                'required',
                'integer'
            ],
            'short_desc' => [
                'required',
            ],
            'detail' => [
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
            
            'image.required'=>"Hãy thêm ảnh",

            'price.required'=>"Hãy nhập giá",
            'price.integer'=>"Giá tiền phải là số",

            'quantity.required'=>"Hãy nhập số lượng",
            'quantity.integer'=>"Hãy nhập số",

            'short_desc.required'=>"Hãy nhập miêu tả ngắn",

            'detail.required'=>"Hãy nhập miêu tả sản phẩm",
    
            'description.required'=>"Hãy nhập mô tả",
            'description.min'=>"Miêu tả phải lớn hơn 10 ký tự",           
        ];
    }
}
