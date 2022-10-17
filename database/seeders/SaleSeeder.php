<?php

namespace Database\Seeders;

use App\Models\sale;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'product_name' => 'dog food',
            'brand_name' => 'howbone',
            'category_id' => '1',
            'date' => '2022-09-01',
            'price' => '250.00',
            'stock' => 15,
            'sold' => 8,
            'remain' => 7,
            'sale' => 2000,

        ];
        sale::create($data);
    }
}
