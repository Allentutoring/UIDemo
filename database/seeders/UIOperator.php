<?php

namespace Database\Seeders;

use App\Models\UIOperator as Model;
use Illuminate\Database\Seeder;

class UIOperator extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->store('exists');
        $this->store('not exists');
        $this->store('include');
        $this->store('exclude');
        $this->store('equals');
        $this->store('not equals');
        $this->store('empty');
        $this->store('not empty');
    }

    private function store($code)
    {
        try {
            Model::create([
                'code' => $code
            ]);
        } catch (\Throwable $t) {

        }
    }
}
