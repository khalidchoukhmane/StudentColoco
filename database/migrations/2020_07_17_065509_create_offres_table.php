<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imgPath1')->nullable();
            $table->string('imgPath2')->nullable();
            $table->string('imgPath3')->nullable();
            $table->string('titre')->nullable();
            $table->float('prix');
            $table->integer('capacite');
            $table->float('latitude');
            $table->float('langitude');
            $table->boolean('wifi');
            $table->boolean('lave_ligne');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('offres');
    }
}
