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

            /* FOOD */
            [
                'product_name' => 'Goats Milk',
                'brand_name' => 'Howbone',
                'category_id' => 1,
                'date' => '2022-09-01',
                'price' => 250,
                'stock' => 15,
            ],
            [
                'product_name' => 'Dog Snacks',
                'brand_name' => 'Howbone',
                'category_id' => 1,
                'date' => '2022-09-01',
                'price' => 100,
                'stock' => 15,
            ],
            [
                'product_name' => 'Pets Milk',
                'brand_name' => 'Cosi',
                'category_id' => 1,
                'date' => '2022-09-01',
                'price' => 200,
                'stock' => 14, // 14 lang kasi 1 na naka sell
            ],

            /* TREATS*/
           [
                'product_name' => 'Food and Vegetables',
                'brand_name' => 'Smart Heart',
                'category_id' => 2,
                'date' => '2022-09-01',
                'price' => 79,
                'stock' => 15,
            ],
            [
                'product_name' => 'Tasty Bites (Cube Lambs)',
                'brand_name' => 'Pedigree',
                'category_id' => 2,
                'date' => '2022-09-01',
                'price' => 99.75,
                'stock' => 15,
            ],
            [
                'product_name' => 'Tasty Bites (Chewy Bones Beef)',
                'brand_name' => 'Pedigree',
                'category_id' => 2,
                'date' => '2022-09-01',
                'price' => 99.75,
                'stock' => 14,
            ],
            [
                'product_name' => 'Long Lasting Dentak Bar',
                'brand_name' => 'Goodies',
                'category_id' => 2,
                'date' => '2022-09-01',
                'price' => 89,
                'stock' => 14,
            ],

            /* MEDECINE */
            [
                'product_name' => 'Pet Multivitamins in Syrup',
                'brand_name' => 'LC-Vit t',
                'category_id' => 3,
                'date' => '2022-09-01',
                'price' => 177,
                'stock' => 15,
            ],
            [
                'product_name' => 'Nutriplus Gel',
                'brand_name' => 'Virbac ',
                'category_id' => 3,
                'date' => '2022-09-01',
                'price' => 749,
                'stock' => 15,
            ],
            [
                'product_name' => 'Tick and Flea Dog Soap ',
                'brand_name' => 'Bayopet ',
                'category_id' => 3,
                'date' => '2022-09-01',
                'price' => 109,
                'stock' => 14,
            ],
            [
                'product_name' => 'Ascorbic Acid',
                'brand_name' => 'PetSure',
                'category_id' => 2,
                'date' => '2022-09-01',
                'price' => 149,
                'stock' => 14,
            ],

            /* GROOMING */
            [
                'product_name' => 'Dog Trainer Toilet Set',
                'brand_name' => 'Puppy Love',
                'category_id' => 4,
                'date' => '2022-09-01',
                'price' => 649,
                'stock' => 15,
            ],
            [
                'product_name' => 'Floral Bloom Pet Disinfectant',
                'brand_name' => 'Kleen Kenel ',
                'category_id' => 4,
                'date' => '2022-09-01',
                'price' => 299,
                'stock' => 15,
            ],
            [
                'product_name' => 'Anti Tick and Flea Pet Shampoo ',
                'brand_name' => 'Play Pets ',
                'category_id' => 4,
                'date' => '2022-09-01',
                'price' => 335,
                'stock' => 14,
            ],
            [
                'product_name' => 'Anti Tick and Flea Dog Soap',
                'brand_name' => 'Pampered Pooch ',
                'category_id' => 4,
                'date' => '2022-09-01',
                'price' => 87,
                'stock' => 14,
            ],

            /* ACCESSORIES */
            [
                'product_name' => 'Air Tennis Balls Dog Toy Extra Small',
                'brand_name' => 'Kong Squeak ',
                'category_id' => 5,
                'date' => '2022-09-01',
                'price' => 183,
                'stock' => 15,
            ],
            [
                'product_name' => 'Triangle Cat Litter Box Blue',
                'brand_name' => 'Jolly ',
                'category_id' => 5,
                'date' => '2022-09-01',
                'price' => 640,
                'stock' => 15,
            ],
            [
                'product_name' => 'Action Dumbbell Dog Toy Small Blue',
                'brand_name' => 'Kong Squeezz',
                'category_id' => 5,
                'date' => '2022-09-01',
                'price' => 543,
                'stock' => 14,
            ],
            [
                'product_name' => 'UAAP Collection UST Dog Apparel',
                'brand_name' => 'Pawsh Couture ',
                'category_id' => 5,
                'date' => '2022-09-01',
                'price' => 179,
                'stock' => 14,
            ],
            /* SUPPLIES*/
            [
                'product_name' => 'Rectangular Plush ',
                'brand_name' => 'Pet Pals',
                'category_id' => 6,
                'date' => '2022-09-01',
                'price' => 314,
                'stock' => 15,
            ],
            [
                'product_name' => 'Orange Cooling Mat for Small Breed',
                'brand_name' => 'Pet Pals ',
                'category_id' => 6,
                'date' => '2022-09-01',
                'price' => 640,
                'stock' => 15,
            ],
            [
                'product_name' => 'Sprinkler Fun Mat ',
                'brand_name' => 'Pet Pals ',
                'category_id' => 6,
                'date' => '2022-09-01',
                'price' => 950,
                'stock' => 14,
            ],
        ];
        foreach ($data as $key => $value) {
            product::create($value);
        }
    }
}
