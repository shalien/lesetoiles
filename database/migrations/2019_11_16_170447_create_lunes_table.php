<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lunes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->float('age');
            $table->float('diametre');
            $table->date('date_decouverte');
            $table->string('decouvreur');
            $table->float('masse');
            $table->float('vitesse_de_rotation');
            $table->float('revolution');
            $table->float('ratio');
            $table->string('image');
            $table->string('cartographie');
            $table->string('description');
            $table->float('distance_relative');
            $table->string('planete');
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
        Schema::dropIfExists('lunes');
    }
}
