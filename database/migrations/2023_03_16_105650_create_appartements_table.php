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
        Schema::create('appartements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('localisation_id');
            $table->foreign('localisation_id')->references('id')->on('localisations');
            $table->unsignedBigInteger('personne_id');
            $table->foreign('personne_id')->references('id')->on('people');
            $table->unsignedBigInteger('image_id');
            $table->foreign('image_id')->references('id')->on('images');
            $table->text('description');
            $table->string('space');
            $table->integer('no_chambre');
            $table->float('prix');
            $table->date('date');
            $table->string('status')->default('NonAlloue');
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
        Schema::dropIfExists('appartements');
    }
};
