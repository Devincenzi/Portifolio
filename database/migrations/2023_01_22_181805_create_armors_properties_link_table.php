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
        Schema::create('armors_properties_link', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idArmor')->references('id')->on('armors');
            $table->foreignId('idProperties')->references('id')->on('armors_properties');
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
        Schema::dropIfExists('armors_properties_link');
    }
};
