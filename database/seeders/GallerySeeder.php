<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
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

                'title' => 'Dog',
                'type' => 0,

            ],
            [

                'title' => 'Logo',
                'path' => 'images/pet_5.jpg',
                'type' => 1,


            ]

        ];

        foreach ($data as  $value) {
            Gallery::create($value);
        }
    }
}
