<?php

namespace Database\Seeders;

use App\Models\service;
use Illuminate\Database\Seeder;

class serviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['service' => 'Diagnostic test'],
            ['service' => 'dental prophylaxis'],
            ['service' => 'surgery'],
            ['service' => 'grooming'],
            ['service' => 'ultrasound'],
            ['service' => 'deworming'],
            ['service' => 'progesterone test'],
            ['service' => 'confinement'],
            ['service' => 'vaccination'],
            ['service' => 'consultation'],
        ];
        foreach ($data as $item) {
            service::create($item);
        }
    }
}
