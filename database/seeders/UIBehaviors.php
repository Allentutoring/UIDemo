<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UIBehaviors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = 1;
        $this->store($id, 'text', 'Start Bootstrap');
        $this->store($id, 'text', 'Portfolio');
        $this->store($id, 'text', 'About');
        $this->store($id, 'text', 'Contact');

        $id = 2;
        $this->store($id, 'text', '부트스트랩 시작');
        $this->store($id, 'text', '포트폴리오');
        $this->store($id, 'text', '대하여');
        $this->store($id, 'text', '연락처');
    }

    private function store($id, $attribute, $value)
    {
        \App\Models\UIBehaviors::create([
            'ui_condition_group_id' => $id,
            'attribute' => $attribute,
            'value' => $value,
        ]);
    }
}
