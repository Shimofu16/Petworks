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
        /*
        palitan mo lang yung product_id sa baba 
        it depends on the product_id sa product table
         */
        $data = [
            [
                'product_id' => 1,
                'remain' => 15,

            ],
            [
                'product_id' => 2,
                'remain' => 15,

            ],
            [
                'product_id' => 3,
                'remain' => 15,

            ],


        ];
        foreach ($data as $key => $value) {
            sale::create($value);
        }
    }
}
