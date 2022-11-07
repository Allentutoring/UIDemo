<?php

namespace Database\Seeders;

use App\Models\Lang as Model;
use Illuminate\Database\Seeder;

class Lang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->store('kr');
        $this->store('en');
        $this->store('cn');
    }

    private function store($code)
    {
        try {
            Model::create([
                'key' => $code
            ]);
        } catch (\Throwable $t) {

        }
    }
}
