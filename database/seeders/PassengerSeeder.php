<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run($Faker): void
    {
        $passengers=[];
        for ($i=0; $i < 10; $i++) {
            $newPassenger = new passenger();
            $newPassenger->first_name = $faker->name;
        }
    }
}
