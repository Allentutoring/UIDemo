<?php

namespace Database\Seeders;

use App\Models\UIElements as Model;
use Illuminate\Database\Seeder;

class UIElements extends Seeder
{
    const TARGETS = [
        '#main-title',
        '#nav-portfolio',
        '#nav-about',
        '#nav-contract',
        '#content-top-title',
        '#content-top-content',
        '.portfolio-item:eq(0) img',
        '.portfolio-item:eq(1) img',
        '.portfolio-item:eq(2) img',
        '.portfolio-item:eq(3) img',
        '.portfolio-item:eq(4) img',
        '.portfolio-item:eq(5) img',
    ];

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
            collect(self::TARGETS)->each(function ($target) use ($information, $lang) {
                $this->store($information, $lang, $target);
            });
        });
    }

    private function store($parent, $lang, $target)
    {
        Model::create([
            'ui_information_code' => $parent,
            'lang' => $lang,
            'target' => $target,
        ]);
    }
}
