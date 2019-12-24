<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtoilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etoiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->float('age');
            $table->date('date_decouverte');
            $table->string('decouvreur');
            $table->float('masse');
            $table->float('diametre');
            $table->string('type');
            $table->float('vitesse_de_rotation');
            $table->string('image');
            $table->string('description');
            $table->string('systeme');
            $table->string('galaxie');
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
        Schema::dropIfExists('etoiles');
    }
}
