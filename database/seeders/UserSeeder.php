<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =        [
            ['name' => 'Krysia Hernandez', 'email' => 'krysialee023@gmail.com', 'password' => Hash::make('password')]
        ];
        foreach ($data as $item) {
            User::create($item);
        }
    }
}
