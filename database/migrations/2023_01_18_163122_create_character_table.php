<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $table = 'character';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('player')->references('id')->on('users');
            $table->integer('xp');
            $table->integer('nep');
            $table->json('classes');
            $table->integer('attributesPointsAvaliable');
            $table->integer('featsAvaliable');
            $table->integer('skillPointsAvaliable');
            $table->boolean('pdm');
            $table->json('visibleTo');
            $table->json('controllableBy');

            $table->integer('strBase');
            $table->integer('dexBase');
            $table->integer('conBase');
            $table->integer('intBase');
            $table->integer('wisBase');
            $table->integer('chaBase');
            $table->integer('armorClass');
            $table->integer('initiative');
            $table->integer('maxHp');
            $table->integer('currentHp');
            $table->integer('temporaryHp');
            $table->integer('contusiveDamage');
            $table->integer('casterLevel');

            $table->integer('strLevelBonus');
            $table->integer('dexLevelBonus');
            $table->integer('conLevelBonus');
            $table->integer('intLevelBonus');
            $table->integer('wisLevelBonus');
            $table->integer('chaLevelBonus');
            
            $table->integer('strRaceBonus');
            $table->integer('dexRaceBonus');
            $table->integer('conRaceBonus');
            $table->integer('intRaceBonus');
            $table->integer('wisRaceBonus');
            $table->integer('chaRaceBonus');
            
            $table->integer('strModelBonus');
            $table->integer('dexModelBonus');
            $table->integer('conModelBonus');
            $table->integer('intModelBonus');
            $table->integer('wisModelBonus');
            $table->integer('chaModelBonus');
            
            $table->integer('strItemBonus');
            $table->integer('dexItemBonus');
            $table->integer('conItemBonus');
            $table->integer('intItemBonus');
            $table->integer('wisItemBonus');
            $table->integer('chaItemBonus');

            $table->double('movement', 3, 1);

            $table->integer('pc');
            $table->integer('pp');
            $table->integer('po');
            $table->integer('pl');
            $table->integer('totalMoney');
            $table->integer('totalWeight');
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
        Schema::dropIfExists('character');
    }
};
