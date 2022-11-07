<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UIInformation as Model;

class UIInformation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->store('/test');
        $this->store('/render');
    }

    private function store($key)
    {
        if (!Model::where('key',$key)->exists()) {
            Model::create([
                'key' => $key
            ]);
        }
    }
}
