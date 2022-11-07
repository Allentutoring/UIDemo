<?php

namespace App\Http\Request\UI;

use App\Http\Request\BaseRequest;
use App\Models\Lang;
use App\Models\UIInformation;

class UIRequest extends BaseRequest
{
    protected $redirect = false;

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
