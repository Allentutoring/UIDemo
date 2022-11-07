<?php

namespace App\Http\Controllers;

use App\Http\FormRequest\UI\UIRequest;
use App\Models\UIElements;
use App\Models\UIInformation;

class UIController extends BaseController
{
    public function contents(UIRequest $request)
    {
        $validated = $request->validated();
        $lang = $validated['lang'] ?? 'kr';
        dump($lang);
        $model = UIInformation::with('elements')->findOrFail($validated['key']);
        // dump(UIElements::with(['information'])->lang($lang)->get());
        dump($model->elements);
        dump($model);
    }
}
