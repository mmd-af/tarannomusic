<?php

namespace App\Http\Requests\Site\Message;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessageRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'mobile_number' => ['required'],
            'description' => ['required'],
        ];
    }
}
