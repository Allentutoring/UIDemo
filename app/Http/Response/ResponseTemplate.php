<?php

namespace App\Http\Response;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Response;
use Illuminate\Http\ResponseTrait;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class ResponseTemplate extends Response implements Responsable, Arrayable
{
    use ResponseTrait;

    protected string $httpCode;
    protected string $code;
    protected string $message;
    protected $data;
    protected $header;
    protected $option;

    public function __construct(
        $httpCode = ResponseAlias::HTTP_OK,
        $data = null,
        $message = "",
        $code = "",
        $header = [],
        $option = 0
    ) {
        $this->httpCode = $httpCode;
        $this->data = $data;
        $this->message = $message;
        $this->code = $code;
        $this->header = $header;
        $this->option = $option;
        $this->init();
    }

    protected function init()
    {

    }


    public function toResponse($request): \Illuminate\Http\JsonResponse|ResponseAlias
    {
        return response()->json($this->toArray(), $this->httpCode, $this->header, $this->option);
    }

    public function toArray(): array
    {
        return [
            "code" => $this->code,
            "message" => $this->message,
            "data" => $this->data,
        ];
    }
}
