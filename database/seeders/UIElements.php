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
        $this->store('/render', 'en', 'main-title', 'Start Bootstrap');
        $this->store('/render', 'en', 'nav-portfolio', 'Portfolio');
        $this->store('/render', 'en', 'nav-about', 'About');
        $this->store('/render', 'en', 'nav-contact', 'Contact');
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
