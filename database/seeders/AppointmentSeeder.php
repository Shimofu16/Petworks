<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            'name' => 'Krysia Hernandez',
            'pet_name' => 'chum',
            'pet_type' => 'Dog',
            'age' => '1yr old',
            'breed' => 'K9',
            'reason' => 'grooming',
            'date' => '22-10-22',
            'time' => '1:00',
            'address' => '158 silangan, St. Brgy. Dayap, Calaan, Laguna',
            'email' => 'krysialee023@gmail.com',
            'number' => '09655271032',
            'message' => 'Hi',
            'status' => 0,

        ];
        Appointment::create($data);
    }
}
