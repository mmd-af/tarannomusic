<?php

namespace App\Http\Requests\Admin\Instrument;

use Illuminate\Foundation\Http\FormRequest;

class InstrumentStoreRequest extends FormRequest
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
            'description' => ['required'],
            'is_active' => ['required']
        ];
    }
}
