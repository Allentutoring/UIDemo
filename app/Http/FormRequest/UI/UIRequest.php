<?php

namespace App\Http\FormRequest\UI;

use App\Models\Lang;
use App\Models\UIInformation;
use Illuminate\Foundation\Http\FormRequest;

class UIRequest extends FormRequest
{
    public function rules()
    {
        return [
            'key' => [
                'required',
                'exists:'.UIInformation::class.',key',
            ],
            'lang' => [
                'nullable',
                'exists:'.Lang::class.',key',
            ],
        ];
    }
}
