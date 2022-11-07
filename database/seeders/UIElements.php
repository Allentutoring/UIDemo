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
        $parent = '/render';
        $lang = 'en';
        $this->store($parent, $lang, '#main-title', 'Start Bootstrap');
        $this->store($parent, $lang, '#nav-portfolio', 'Portfolio');
        $this->store($parent, $lang, '#nav-about', 'About');
        $this->store($parent, $lang, '#nav-contact', 'Contact');

        $lang = 'kr';
        $this->store($parent, $lang, '#main-title', '부트스트랩 시작');
        $this->store($parent, $lang, '#nav-portfolio', '포트폴링로');
        $this->store($parent, $lang, '#nav-about', '대하여');
        $this->store($parent, $lang, '#nav-contact', '연락');
    }

    private function store($parent, $lang, $target, $val)
    {
        try {
            Model::create([
                'parent' => $parent,
                'lang' => $lang,
                'target' => $target,
                'val' => $val,
            ]);
        } catch (\Throwable $t) {

        }
    }
}
