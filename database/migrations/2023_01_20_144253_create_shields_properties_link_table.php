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
        Schema::create('shields_properties_link', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idShield')->references('id')->on('shields');
            $table->foreignId('idPropertie')->references('id')->on('shields_properties');
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
        Schema::dropIfExists('shields_properties_link');
    }
};
