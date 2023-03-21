<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\Characteristic;

class CaracteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Characteristic::create(['name'=>'Vue sur le jardin']);
        Characteristic::create(['name'=>'Climatisation']);
        Characteristic::create(['name'=>'Parking gratuit']);
        Characteristic::create(['name'=>'Connexion Wi-Fi gratuite']);
        Characteristic::create(['name'=>'Baignoire']);
        Characteristic::create(['name'=>'Terrasse']);
        Characteristic::create(['name'=>'Piscine extérieure']);
        Characteristic::create(['name'=>'Front de mer']);
    }
}
