<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UIElements as Model;

class UIElements extends Seeder
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
        $this->store($information, $lang, '#main-title');
        $this->store($information, $lang, '#nav-portfolio');
        $this->store($information, $lang, '#nav-about');
        $this->store($information, $lang, '#nav-contact');

        $lang = 'kr';
        $this->store($information, $lang, '#main-title');
        $this->store($information, $lang, '#nav-portfolio');
        $this->store($information, $lang, '#nav-about');
        $this->store($information, $lang, '#nav-contact');
    }

    private function store($parent, $lang, $target)
    {
        try {
            Model::create([
                'ui_information_code' => $parent,
                'lang' => $lang,
                'target' => $target,
            ]);
        } catch (\Throwable $t) {

        }
    }
}
