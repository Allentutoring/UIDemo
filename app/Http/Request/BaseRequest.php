<?php

namespace App\Http\Request;

use App\Http\Response\ResponseTemplate;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class BaseRequest extends FormRequest
{
    protected bool $isFailedRedirect = false;

    /**
     * @throws ValidationException
     */
    protected function failedValidationRedirectTo(Validator $validator)
    {
        throw (new ValidationException($validator))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }

    protected function failedValidationHttpResponse(Validator $validator): void
    {
        throw new HttpResponseException(new ResponseTemplate(ResponseAlias::HTTP_BAD_REQUEST, "", $validator->getMessageBag()->first()));
    }

    protected function failedValidation(Validator $validator)
    {
        if ($this->isFailedRedirect) {
            $this->failedValidationRedirectTo($validator);
        } else {
            $this->failedValidationHttpResponse($validator);
        }
    }
}
