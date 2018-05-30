<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmActorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_film_actor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('film')->unsigned();
            $table->integer('actor')->unsigned();
            $table->timestamps();

            $table->foreign('actor')->references('id')->on('actor');
            $table->foreign('film')->references('id')->on('film');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_film_actor');
    }
}
