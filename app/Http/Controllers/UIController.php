<?php

namespace App\Http\Controllers;

use App\Http\Request\UI\UIRequest;
use App\Http\Response\ResponseTemplate;
use App\Http\Service\UIService;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class UIController extends BaseController
{
    public function contents(UIRequest $request, UIService $service)
    {
        $validated = $request->validated();
        $result = $service->getUI($validated);
        return new ResponseTemplate(ResponseAlias::HTTP_OK, $result);
    }
}
