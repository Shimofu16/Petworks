<?php

namespace Database\Seeders;

use App\Models\model\Photos;
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
         /*    [
                'album_id' => 2,
                'title' => 'Christmas Concert 01',
                'photo' => 'Christmas Concert 01',
                'path' => 'uploads/gallery/photos/bca-christmas-concert/christmas-concert-01.jpg',
            ] */

        ];
        foreach ($data as  $value) {
            Photos::create($value);
        }
    }
}
