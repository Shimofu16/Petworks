<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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

        ];
        product::create($data);
    }
}
