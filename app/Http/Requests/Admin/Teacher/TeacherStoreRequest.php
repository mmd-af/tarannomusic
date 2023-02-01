<?php

namespace App\Http\Requests\Admin\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class TeacherStoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required'],
            'slug' => ['required'],
            'url' => ['required'],
            'bio' => ['required'],
            'teach' => ['required'],
            'is_active' => ['required']
        ];
    }
}
