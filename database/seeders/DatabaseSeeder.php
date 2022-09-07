<?php

namespace Database\Seeders;

use App\Models\Record;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            serviceSeeder::class,
            DoctorSeeder::class,
            AppointmentSeeder::class,
            ContactSeeder::class,
            UserSeeder::class,
        ]);
    }
}
