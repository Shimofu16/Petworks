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
        /* 
        sa pag add ng product dapat same ng category_id yung id ng product sa category
        sundan mo lang yung mga sample sa baba
        */
        $data = [
            [
                'product_name' => 'Dog Food',
                'brand_name' => 'Howbone',
                'category_id' => 1,
                'date' => '2022-09-01',
                'price' => 250,
                'stock' => 15,
            ],
            [
                'product_name' => 'Dog Vaccine',
                'brand_name' => 'Dog Vac',
                'category_id' => 2,
                'date' => '2022-09-01',
                'price' => 100,
                'stock' => 15,
            ],
            [
                'product_name' => 'Dog Treat',
                'brand_name' => 'Dog treats',
                'category_id' => 3,
                'date' => '2022-09-01',
                'price' => 200,
                'stock' => 14, // 14 lang kasi 1 na naka sell
            ],
        ];
        foreach ($data as $key => $value) {
            product::create($value);
        }
    }
}
