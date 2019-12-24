<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingularitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singularites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->float('age');
            $table->float('masse');
            $table->string('image');
            $table->string('description');
            $table->string('systeme');
            $table->string('galaxie');
            $table->float('vitesse_de_rotation');
            $table->float('distance_relative');
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
        Schema::dropIfExists('singularites');
    }
}
