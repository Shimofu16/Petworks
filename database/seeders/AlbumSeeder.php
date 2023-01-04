<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
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
               'title' => 'Petworks Clients',
                'base_path' => 'uploads/gallery/petworks-client',
                'path' => 'uploads/gallery/petworks-client/petworks-client-.jpg',
                'date' => now(),
            ],
            [
               'title' => 'Petworks Puppies',
                'base_path' => 'uploads/gallery/petworks-puppies',
                'path' => 'uploads/gallery/petworks-puppies/petworks-puppies-.jpg',
                'date' => now(),
            ],
            [
               'title' => 'Petworks Dogs',
                'base_path' => 'uploads/gallery/petworks-dogs',
                'path' => 'uploads/gallery/petworks-dogs/petworks-dogs-.jpg',
                'date' => now(),
            ]
        ];
        foreach ($data as  $value) {
            Album::create($value);
        }
    }
}
