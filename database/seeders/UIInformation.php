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

    private function store($code)
    {
        if (!Model::where('key',$code)->exists()) {
            Model::create([
                'code' => $code
            ]);
        }
    }
}
