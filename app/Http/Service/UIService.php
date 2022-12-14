<?php

namespace App\Http\Service;

use App\Http\Resources\UIElements;
use App\Models\UIInformation;

class UIService
{
    public function getUI($validated)
    {
        $lang = $validated['lang'] ?? 'kr';
        $code = $validated['code'];

        $model = UIInformation::with([
            'elements' => function ($query) use ($lang) {
                $query->lang($lang);
            }
            , 'elements.conditionGroup.conditions'
            , 'elements.conditionGroup.behaviors'
        ])->findOrFail($code);
        return UIElements::collection($model->elements);
    }
}
