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
        $lang = 'en';

        $this->store($information, '#main-title', $lang);
        $this->store($information, '#nav-portfolio', $lang);
        $this->store($information, '#nav-about', $lang);
        $this->store($information, '#nav-contact', $lang);

        $lang = 'kr';
        $this->store($information, '#main-title', $lang);
        $this->store($information, '#nav-portfolio', $lang);
        $this->store($information, '#nav-about', $lang);
        $this->store($information, '#nav-contact', $lang);
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
