<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();

            //nome pachetto, città, stato, descrizione, data, partenza, ritorno, numero pacchetti disponibili, costo

            $table->string('journey_pack_name', 50); //nome pachetto
            $table->string('city', 50); //città
            $table->string('state', 30); //stato
            $table->text('description'); //descrizione
            $table->date('partenza'); //partenza
            $table->date('ritorno'); //ritorno
            $table->unsignedSmallInteger('numero_pachetti_disponibili'); //numero pachetti disponibili
            $table->unsignedSmallInteger('costo'); //costo

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
