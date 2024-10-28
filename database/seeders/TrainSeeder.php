<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain->Azienda = $faker->word();
            $newTrain->Stazione_di_partenza = $faker->word();
            $newTrain->Stazione_di_arrivo = $faker->word();
            $newTrain->Data_di_partenza = $faker->date();
            $newTrain->Orario_di_partenza = $faker->time();
            $newTrain->Orario_di_arrivo = $faker->time();
            $newTrain->Codice_treno = $faker->randomNumber(5, true);
            $newTrain->Numero_carrozze = $faker->numberBetween(5, 12);
            $newTrain->In_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->save();
        }

    }
}
