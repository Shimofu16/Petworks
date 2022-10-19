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
                'category_name' => 'Vaccine',
            ],
            [
                'category_name' => 'Treets',
            ],
        ];
        foreach ($data as $key => $value) {
            category::create($value);
        }
    }
}
