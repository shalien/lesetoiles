<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planetes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->float('age');
            $table->float('diametre');
            $table->string('type');
            $table->float('masse');
            $table->float('vitesse_de_rotation');
            $table->float('revolution');
            $table->float('ratio');
            $table->date('date_decouverte');
            $table->string('decouvreur');
            $table->string('etoile');
            $table->string('systeme');
            $table->string('galaxie');
            $table->string('image');
            $table->string('cartographie');
            $table->string('description');

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
        Schema::dropIfExists('planetes');
    }
}
