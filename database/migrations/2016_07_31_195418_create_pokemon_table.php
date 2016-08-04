<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->string('exp');
            $table->string('name');
            $table->string('hp');
            $table->string('attack');
            $table->string('defense');
            $table->string('sp_attack');
            $table->string('sp_defense');
            $table->string('speed');
            $table->string('total');
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
        Schema::drop('pokemon');
    }
}
