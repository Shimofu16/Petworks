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
            ['service' => 'Diagnostic Test','price'=>200],
            ['service' => 'Dental Prophylaxis','price'=>300],
            ['service' => 'Surgery','price'=>2000],
            ['service' => 'Grooming','price'=>500],
            ['service' => 'Ultrasound','price'=>700],
            ['service' => 'Deworming','price'=>150],
            ['service' => 'Progesterone Test','price'=>1500],
            ['service' => 'Confinement','price'=>800],
            ['service' => 'Vaccination','price'=>100],
            ['service' => 'Consultation','price'=>300],
        ];
        foreach ($data as $item) {
            service::create($item);
        }
    }
}
