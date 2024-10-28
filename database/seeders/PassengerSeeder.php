<?php

namespace Database\Seeders;

use App\Models\Passenger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10; $i++) {
            $newPassenger = new Passenger();
            $newPassenger->first_name = $faker->word();
            $newPassenger->last_name = $faker->word();
            $newPassenger->passenger_code = $faker->randomNumber(5, true);
            $newPassenger->save();
        }
    }
}
