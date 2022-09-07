<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Doctor 1'],
            ['name' => 'Doctor 2'],
            ['name' => 'Doctor 3'],
            ['name' => 'Doctor 4'],
            ['name' => 'Doctor 5'],
        ];
        foreach ($data as $item) {
            Doctor::create($item);
        }
    }
}
