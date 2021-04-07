<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBlogRequest extends FormRequest
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
            
            'name' => 'required|min:10|unique:blog,name',
            'img' => 'image'
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'Không được để trống mã bài viết',
            'name.min' => 'Tiêu đề bài viêt quá ngắn',
            'name.unique' => 'Tiêu đề đã tồn tại',

            'img.image' => 'Ảnh sản phẩm không đúng định dạng',
        ];
    }
}
