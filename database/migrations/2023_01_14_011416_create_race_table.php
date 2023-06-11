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
        Schema::create('race', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('strBonus');
            $table->integer('dexBonus');
            $table->integer('conBonus');
            $table->integer('intBonus');
            $table->integer('wisBonus');
            $table->integer('chaBonus');
            $table->longText('raceTraits');
            $table->string('alignment');
            $table->string('size');
            $table->json('sizeCategory');
            $table->double('movement', 3,1);
            $table->longText('history');
            $table->integer('matureAge');
            $table->integer('maxAge');
            $table->string('maleNames');
            $table->string('femaleNames');
            $table->string('familyNames');
            $table->string('languages');
            $table->json('subRaces');
            $table->json('raceRelations');
            $table->longText('notes');
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
        Schema::dropIfExists('race');
    }
};
