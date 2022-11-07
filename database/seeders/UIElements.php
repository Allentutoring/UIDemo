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
        $information = '/render';
        $lang = 'en';
        $this->store($information, $lang, '#main-title', 'Start Bootstrap');
        $this->store($information, $lang, '#nav-portfolio', 'Portfolio');
        $this->store($information, $lang, '#nav-about', 'About');
        $this->store($information, $lang, '#nav-contact', 'Contact');

        $lang = 'kr';
        $this->store($information, $lang, '#main-title', '부트스트랩 시작');
        $this->store($information, $lang, '#nav-portfolio', '포트폴링로');
        $this->store($information, $lang, '#nav-about', '대하여');
        $this->store($information, $lang, '#nav-contact', '연락');
    }

    private function store($parent, $lang, $target, $val)
    {
        try {
            Model::create([
                'ui_information_code' => $parent,
                'lang' => $lang,
                'target' => $target,
                'val' => $val,
            ]);
        } catch (\Throwable $t) {

        }
    }
}
