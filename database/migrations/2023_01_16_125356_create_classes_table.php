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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('dv');
            $table->double('caster', 3, 2);
            $table->double('bba', 3, 2);
            $table->double('fortitude', 3, 2);
            $table->double('reflexos', 3, 2);
            $table->double('vontade', 3, 2);
            $table->integer('skillPoints');
            $table->boolean('strIsPrimary');
            $table->boolean('dexIsPrimary');
            $table->boolean('conIsPrimary');
            $table->boolean('intIsPrimary');
            $table->boolean('wisIsPrimary');
            $table->boolean('chaIsPrimary');
            
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
        Schema::dropIfExists('class');
    }
};
