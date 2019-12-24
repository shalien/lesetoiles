<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupernovaeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supernovae', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->float('age');
            $table->float('diametre');
            $table->string('image');
            $table->date('date_decouverte');
            $table->string('decouvreur');
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
        Schema::dropIfExists('supernovae');
    }
}
