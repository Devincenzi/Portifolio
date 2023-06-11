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
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->json('category');
            $table->boolean('duasMaos');
            $table->boolean('usaMunicao');
            $table->boolean('municao');
            $table->boolean('amount');
            $table->integer('price');
            $table->integer('diceAmount');
            $table->json('diceType');
            $table->json('damageType');
            $table->integer('criticRange');
            $table->integer('criticMultiplier');
            $table->integer('weight');
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
        Schema::dropIfExists('weapons');
    }
};
