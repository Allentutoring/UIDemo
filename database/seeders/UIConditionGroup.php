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
        $target = '#main-title';
        $lang = 'en';

        $this->store($information, $target, $lang);

        $lang = 'kr';
        $this->store($information, $target, $lang);
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
