<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnneauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anneaux', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->float('age');
            $table->float('diametre');
            $table->float('ordre');
            $table->float('epaisseur');
            $table->float('distance');
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
        Schema::dropIfExists('anneaux');
    }
}
