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
                /* 'title' => 'BCA Camping',
                'photo' => 'BCA Camping',
                'path' => 'uploads/gallery/albums/bca-camping/bca-camping.jpg',
                'date' => now(), */
            ]
        ];
        foreach ($data as  $value) {
            Album::create($value);
        }
    }
}
