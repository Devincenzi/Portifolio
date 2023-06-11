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
        Schema::create('classes_levels', function (Blueprint $table) {
            $table->id();
            $table->integer('level');
            $table->foreignId('idClasse')->references('id')->on('classes');
            $table->json('features');
            
            $table->integer('zeroCircleKnow');
            $table->integer('firstCircleKnow');
            $table->integer('secondCircleKnow');
            $table->integer('thirdCircleKnow');
            $table->integer('fourthCircleKnow');
            $table->integer('fifthCircleKnow');
            $table->integer('sixthCircleKnow');
            $table->integer('seventhCircleKnow');
            $table->integer('eighthCircleKnow');
            $table->integer('ninethCircleKnow');
            
            $table->integer('zeroCircleDay');
            $table->integer('firstCircleDay');
            $table->integer('secondCircleDay');
            $table->integer('thirdCircleDay');
            $table->integer('fourthCircleDay');
            $table->integer('fifthCircleDay');
            $table->integer('sixthCircleDay');
            $table->integer('seventhCircleDay');
            $table->integer('eighthCircleDay');
            $table->integer('ninethCircleDay');
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
        Schema::dropIfExists('classes_levels');
    }
};
