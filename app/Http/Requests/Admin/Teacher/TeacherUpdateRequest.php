<?php

namespace App\Http\Requests\Admin\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class TeacherUpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => ['required'],
            'url' => ['required'],
            'bio' => ['required'],
            'teach' => ['required'],
            'is_active' => ['required']
        ];
    }
}
