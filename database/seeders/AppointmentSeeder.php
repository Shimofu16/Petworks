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
            [
                'name' => 'Krysia Hernandez',
                'address' => '158 silangan, St. Brgy. Dayap, Calaan, Laguna',
                'email' => 'krysialee023@gmail.com',
                'number' => '09655271032',
            ],
            [
                'name' => 'Glenard Hernandez',
                'address' => '158 silangan, St. Brgy. Dayap, Calaan, Laguna',
                'email' => 'glenard23@gmail.com',
                'number' => '09655271032',
            ],
        ];

        $pet = [
            [
                'owner_id' => 1,
                'pet_name' => 'chum',
                'age' => 2,
                'birthdate' => '2020-08-09',
                'gender' => 'Female',
                'breed' => 'K9',
                'pet_type' => 'Dog',
            ],
            [
                'owner_id' => 1,
                'pet_name' => 'raily',
                'age' => 2,
                'birthdate' => '2020-02-09',
                'gender' => 'Male',
                'breed' => 'K9',
                'pet_type' => 'Dog',
            ],
            [
                'owner_id' => 1,
                'pet_name' => 'Kaido',
                'age' => 2,
                'birthdate' => '2020-02-09',
                'gender' => 'Male',
                'breed' => 'K9',
                'pet_type' => 'Dog',
            ]
        ];
        $appointment = [
            [
                'owner_id' => 1,
                'pet_id' => 1,
                'reason_id' => 1,
                'doctor_id' => 1,
                'date' => '22-10-22',
                'time' => '1:00',
                'status' => 0,
            ],
            [
                'owner_id' => 1,
                'pet_id' => 2,
                'reason_id' => 2,
                'doctor_id' => 2,
                'date' => '22-10-22',
                'time' => '1:00',
                'status' => 0,
            ],
            [
                'owner_id' => 1,
                'pet_id' => 3,
                'reason_id' => 3,
                'doctor_id' => 3,
                'date' => '22-10-22',
                'time' => '1:00',
                'status' => 0,
            ],
        ];


        foreach ($owner as $item) {
            Owner::create($item);
        }
        foreach ($pet as $item) {
            Pet::create($item);
        }
        foreach ($appointment as $item) {
            Appointment::create($item);
        }
    }
}
