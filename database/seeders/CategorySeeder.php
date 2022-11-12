<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            [
                'category_name' => 'Food',
            ],
            [
                'category_name' => 'Treats',
            ],
            [
                'category_name' => 'Medecine',
            ],
            [
                'category_name' => 'Grooming',
            ],
            [
                'category_name' => 'Accessories',
            ],
            [
                'category_name' => 'Supplies',
            ],

            /* dito sia */
        ];
        foreach ($data as $key => $value) {
            category::create($value);
        }
    }
}
