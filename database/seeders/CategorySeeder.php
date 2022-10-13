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


            'no' => '1',
            'prd_id' => '001',
            'prd_name' => 'goat milks powder',
            'brand' => 'howbone',
            'category' => 'food',
            'date' => '09-10-22',
            'price' => '250',

    ];
    category::create($data);
    }
}
