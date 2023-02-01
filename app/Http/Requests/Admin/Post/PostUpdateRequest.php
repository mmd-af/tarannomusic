<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title' => ['required'],
            'url' => ['required'],
            'description' => ['required'],
            'is_active' => ['required'],
        ];
    }
}
