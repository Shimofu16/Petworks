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
            ['service' => 'Diagnostic Test'],
            ['service' => 'Dental Prophylaxis'],
            ['service' => 'Surgery'],
            ['service' => 'Grooming'],
            ['service' => 'Ultrasound'],
            ['service' => 'Deworming'],
            ['service' => 'Progesterone Test'],
            ['service' => 'Confinement'],
            ['service' => 'Vaccination'],
            ['service' => 'Consultation'],
        ];
        foreach ($data as $item) {
            service::create($item);
        }
    }
}
