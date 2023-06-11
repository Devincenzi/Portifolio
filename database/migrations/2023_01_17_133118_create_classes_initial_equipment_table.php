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
        Schema::create('class_initial_equipment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idClass')->references('id')->on('classes');
            $table->json('typeItem');

            $table->integer('idItem');
            $table->integer('amounttItem');
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
        Schema::dropIfExists('class_initial_equipment');
    }
};
