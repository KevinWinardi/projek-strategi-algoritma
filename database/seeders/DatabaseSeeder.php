<?php

namespace Database\Seeders;

use App\Models\Product as ModelsProduct;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $data = [
            [
                'name' => 'Kamera',
                'weight' => 1,
                'value' => 8
            ],
            [
                'name' => 'Router',
                'weight' => 2,
                'value' => 19
            ],
            [
                'name' => 'Headphone',
                'weight' => 3,
                'value' => 24
            ],
            [
                'name' => 'Laptop',
                'weight' => 5,
                'value' => 38
            ],
        ];

        foreach ($data as $item) {
            ModelsProduct::create($item);
        }
    }
}
