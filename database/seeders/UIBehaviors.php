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
        $this->store(1, 'text', 'Start Bootstrap');
        $this->store(2, 'text', 'Portfolio');
        $this->store(3, 'text', 'About');
        $this->store(4, 'text', 'Contact');

        $this->store(5, 'text', '부트스트랩 시작');
        $this->store(6, 'text', '포트폴리오');
        $this->store(7, 'text', '대하여');
        $this->store(8, 'text', '연락처');
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
