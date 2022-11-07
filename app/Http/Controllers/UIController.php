<?php

namespace App\Http\Controllers;

use App\Http\Request\UI\UIRequest;
use App\Http\Response\ResponseTemplate;
use App\Models\UIElements;
use App\Models\UIInformation;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class UIController extends BaseController
{
    public function contents(UIRequest $request)
    {
        $validated = $request->validated();
        $lang = $validated['lang'] ?? 'kr';
        $model = UIInformation::with([
            'elements' => function ($query) use ($lang) {
                $query->lang($lang);
            }
        ])->findOrFail($validated['key']);
        return new ResponseTemplate(ResponseAlias::HTTP_OK, $model->elements);
    }
}
