<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50;$i++){
            $newTravel = new Travel();

            $newTravel->destinazione = $faker->city();
            $newTravel->nazione = $faker->country();
            $newTravel->descrizione = $faker->paragraph(5, true);
            $newTravel->prezzo = $faker->randomFloat(2,2000, 5000);
            $newTravel->image = $faker->imageUrl(360, 360, 'animals', true);
    
            $newTravel->save();
        }

    }
}


