<?php

use App\Trip;
use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $trip = new Trip();

        $trip->journey_pack_name = 'Istambul da scoprire'; //nome pachetto
        $trip->city = 'Istambul'; //città
        $trip->state = 'Turchia'; //stato
        $trip->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati exercitationem alias magni voluptatibus nihil incidunt officia, aut, sequi repellendus ullam quos expedita tenetur ex. Sit ex minima unde ullam asperiores.' ; //descrizione
        $trip->partenza = date('Y-m-d', strtotime('2022-07-17')); //partenza
        $trip->ritorno = date('Y-m-d', strtotime('2022-07-24')); //ritorno
        $trip->numero_pachetti_disponibili = 32; //numero pachetti disponibili
        $trip->costo = 1700; //costo

        $trip->save();

    }
}
