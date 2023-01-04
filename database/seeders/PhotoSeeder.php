<?php

namespace Database\Seeders;

use App\Models\Photos;
use App\Models\Photos as ModelsPhotos;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
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
                'album_id' => 1,
                'photo' => 'petworks client-0',
                'path' => 'uploads/gallery/petworks-client/Petworks Client-1.jpg',
            ],
            [
                'album_id' => 1,
                'photo' => 'petworks client-1',
                'path' => 'uploads/gallery/petworks-client/Petworks Client-2.jpg',
            ],
            [
                'album_id' => 1,
                'photo' => 'petworks client-2',
                'path' => 'uploads/gallery/petworks-client/Petworks Client-3.jpg',
            ],

            /* ------------------------------- */

            [
                'album_id' => 2,
                'photo' => 'petworks puppies-0',
                'path' => 'uploads/gallery/petworks-puppies/Petworks Puppies-2.jpg',
            ],
            [
                'album_id' => 2,
                'photo' => 'petworks puppies-1',
                'path' => 'uploads/gallery/petworks-puppies/Petworks Puppies-2.jpg',
            ],
            [
                'album_id' => 2,
                'photo' => 'petworks puppies-2',
                'path' => 'uploads/gallery/petworks-puppies/Petworks Puppies-3.jpg',
            ],
            /* -------------- */
            [
                'album_id' => 3,
                'photo' => 'petworks dogs-0',
                'path' => 'uploads/gallery/petworks-dogs/Petworks Dogs-1.jpg',
            ],
            [
                'album_id' => 3,
                'photo' => 'petworks dogs-1',
                'path' => 'uploads/gallery/petworks-dogs/Petworks Dogs-2.jpg',
            ],
        ];
        foreach ($data as  $value) {
            Photos::create($value);
        }
    }
}
