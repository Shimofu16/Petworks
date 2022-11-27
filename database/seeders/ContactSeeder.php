<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
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

                'name' => 'Krysia Hernandez',
                'email' => 'krysialee023@gmail.com',
                'message' => 'Hi',
            ],

            [
                'name' => 'Ryan Danday',
                'email' => 'shainedanday@gmail.com',
                'message' => 'Goodafternoon',
            ],

            [
                'name' => 'Mark Anjelo',
                'email' => 'krysialee023@gmail.com',
                'message' => 'hello',
            ]


        ];
        foreach ($data as $key => $value) {
            # code...
            Contact::create($value);
        }
    }
}
