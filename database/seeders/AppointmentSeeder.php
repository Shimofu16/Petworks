<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Owner;
use App\Models\Pet;
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
        $owner = [
            'name' => 'Krysia Hernandez',
            'address' => '158 silangan, St. Brgy. Dayap, Calaan, Laguna',
            'email' => 'krysialee023@gmail.com',
            'number' => '09655271032',
        ];

        $pet = [
            'owner_id' => 1,
            'pet_name' => 'chum',
            'age' => 1,
            'breed' => 'K9',
            'pet_type' => 'Dog',
        ];

        $appointment = [
            'owner_id' => 1,
            'pet_id' => 1,
            'reason' => 'grooming',
            'date' => '22-10-22',
            'time' => '1:00',
            'status' => 0,
        ];


        Owner::create($owner);
        Pet::create($pet);
        Appointment::create($appointment);
    }
}
