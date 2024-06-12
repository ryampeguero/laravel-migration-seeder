<?php

namespace Database\Seeders;

use Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 40; $i++) {
            $newTrain = new Train();
            $faker = Faker\Factory::create('it_IT');
            $newTrain->azienda = $faker->randomElement(["Trenitalia", "Italo", "EuroTrain"]);
            $newTrain->id_capotreno = $faker->numberBetween(0, 4000);
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->isbn10(); //Solo per test
            $newTrain->numero_carrozze = $faker->numberBetween(3, 10);
            $newTrain->numero_passeggeri = $faker->numberBetween(0, 200);
            $newTrain->in_orario = $faker->numberBetween(0, 1);
            $newTrain->cancellato = $faker->numberBetween(0, 1);
            $newTrain->data_partenza = $faker->dateTimeBetween('now', '+1 month');
            $newTrain->save();
        }
    }
}
