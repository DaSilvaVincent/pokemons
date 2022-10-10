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
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->default('A Faire')->nullable(false);
            $table->string('extension')->default('A Faire')->nullable(false);
            $table->integer('vie')->default(0)->nullable(false);
            $table->string('type')->default('A Faire')->nullable(false);;
            $table->string('faiblesse')->default('A Faire')->nullable(false);;
            $table->integer('degat')->default(0)->nullable(false);
            $table->string('url_media')->default('images/no_image.png')->nullable(false);
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
        Schema::dropIfExists('pokemons');
    }
};
