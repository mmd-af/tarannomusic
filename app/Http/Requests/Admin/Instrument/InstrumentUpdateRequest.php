<?php

namespace App\Http\Requests\Admin\Instrument;

use Illuminate\Foundation\Http\FormRequest;

class InstrumentUpdateRequest extends FormRequest
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
            'description' => ['required'],
            'is_active' => ['required']
        ];
    }
}
