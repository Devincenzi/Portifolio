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
        Schema::create('weapons_properties_link', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idWeapon')->references('id')->on('weapons');
            $table->foreignId('idPropertie')->references('id')->on('weapons_properties');
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
        Schema::dropIfExists('weapons_properties_link');
    }
};
