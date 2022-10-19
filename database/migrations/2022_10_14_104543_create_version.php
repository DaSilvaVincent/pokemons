<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('version', function (Blueprint $table) {
            $table->unsignedBigInteger('pokemon_id');
            $table->unsignedBigInteger('jeu_id');
            $table->primary(['pokemon_id','jeu_id']);
            $table->foreign('jeu_id')->references('id')->on('jeux')
                ->onDelete('cascade');
            $table->foreign('pokemon_id')->references('id')->on('pokemons')
                ->onDelete('cascade');
            $table->string('numero', 50);
            $table->date('date_sortie');
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
        Schema::dropIfExists('version');
    }
};
