<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required'],
            'slug' => ['required'],
            'url' => ['required'],
            'description' => ['required'],
            'is_active' => ['required'],
        ];
    }
}
