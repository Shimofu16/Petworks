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
                'address' => 'Brgy. Dayap, Calauan, Laguna',
                'email' => 'krysialee023@gmail.com',
                'number' => '09655271032',
            ],
            [
                'name' => 'Ryan Danday',
                'address' => ' Brgy. Mabacan, Calauan, Laguna',
                'email' => 'shainedanday@gmail.com',
                'number' => '09355563898',
            ],

            [
                'name' => 'Glenard Hernandez',
                'address' => ' Brgy. Dayap, Calauan, Laguna',
                'email' => 'glenardhernandez8@gmail.com',
                'number' => '09123456890',
            ],
            [
                'name' => 'Roy Joseph Latayan',
                'address' => ' Brgy. Lamot, Calaan, Laguna',
                'email' => 'royjosephlatayan16@gmail.com',
                'number' => '09512370553',
            ],
        ];

        $pet = [
            [
                'owner_id' => 1,
                'pet_name' => 'chum',
                'age' => 2,
                'birthdate' => '2020-08-09',
                'gender' => 'Female',
                'breed' => 'pomeranian',
                'pet_type' => 'Dog',
                'color' => 'black',
            ],

            [
                'owner_id' => 2,
                'pet_name' => 'snow',
                'age' => 1,
                'birthdate' => '2020-02-09',
                'gender' => 'female',
                'breed' => 'beagle',
                'pet_type' => 'Dog',
                'color' => 'brown',
            ],
            [
                'owner_id' => 3,
                'pet_name' => 'Kaido',
                'age' => 2,
                'birthdate' => '2020-10-09',
                'gender' => 'Male',
                'breed' => 'beagle',
                'pet_type' => 'Dog',
                'color' => 'gray',
            ],
            [
                'owner_id' => 4,
                'pet_name' => 'garry',
                'age' => 1,
                'birthdate' => '2020-03-05',
                'gender' => 'female',
                'breed' => 'beagle',
                'pet_type' => 'Dog',
                'color' => 'brown',
            ],

        ];


        $appointment = [
            [
                'owner_id' => 1,
                'pet_id' => 1,
                'reason_id' => 1,
                'date' => '22-10-22',
                'time' => '1:00',
            ],


            [
                'owner_id' => 2,
                'pet_id' => 2,
                'reason_id' => 6,
                'date' => '22-10-22',
                'time' => '2:00',
            ],


            [
                'owner_id' => 3,
                'pet_id' => 3,
                'reason_id' => 3,
                'date' => '22-10-22',
                'time' => '12:00',
            ],

            [
                'owner_id' => 4,
                'pet_id' => 4,
                'reason_id' => 1,
                'date' => '22-10-22',
                'time' => '3:00',
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
