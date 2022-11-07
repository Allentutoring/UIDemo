<?php

namespace Database\Seeders;

use App\Models\UIConditionGroup as Model;
use Illuminate\Database\Seeder;

class UIConditionGroup extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $information = '/test';
        $langs = [
            'en',
            'kr',
        ];

        collect($langs)->each(function ($lang) use ($information) {
            collect(UIElements::TARGETS)->each(function ($target) use ($information, $lang) {
                $this->store($information, $target, $lang);
            });
        });
    }

    private function store($information, $target, $lang)
    {
        $element = \App\Models\UIElements::where([
            'target' => $target,
            'lang' => $lang,
        ])->first();
        Model::create([
            'ui_element_id' => $element->id,
        ]);
    }
}
