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
            'code' => [
                'required',
                'exists:'.UIInformation::class.',code',
            ],
            'lang' => [
                'nullable',
                'exists:'.Lang::class.',code',
            ],
        ];
    }
}
