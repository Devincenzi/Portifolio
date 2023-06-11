<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $table = 'character';

    protected $fillable = [
        'name',
        'player',
        'xp',
        'nep',
        'classes',
        'attributesPointsAvaliable',
        'skillPointsAvaliable',
        'pdm',
        'visibleTo',
        'controllableBy',
        'strBase',
        'dexBase',
        'conBase',
        'intBase',
        'wisBase',
        'chaBase',
        'armorClass',
        'initiative',
        'maxHp',
        'currentHp',
        'temporaryHp',
        'contusiveDamage',
        'casterLevel',
        
        'strLevelBonus',
        'dexLevelBonus',
        'conLevelBonus',
        'intLevelBonus',
        'wisLevelBonus',
        'chaLevelBonus',

        'strRaceBonus',
        'dexRaceBonus',
        'conRaceBonus',
        'intRaceBonus',
        'wisRaceBonus',
        'chaRaceBonus',

        'strModelBonus',
        'dexModelBonus',
        'conModelBonus',
        'intModelBonus',
        'wisModelBonus',
        'chaModelBonus',

        'strItemBonus',
        'dexItemBonus',
        'conItemBonus',
        'intItemBonus',
        'wisItemBonus',
        'chaItemBonus',
        'movement',
        'pc',
        'pp',
        'po',
        'pl',
        'totalMoney',
        'totalWeight',
    ];
    protected $casts = [
        'name'=>'string',
        'player'=>'integer',
        'xp'=>'integer',
        'nep'=>'integer',
        'classes'=>'json',
        'attributesPointsAvaliable'=>'integer',
        'skillPointsAvaliable'=>'integer',
        'pdm'=>'boolean',
        'visibleTo'=>'json',
        'controllableBy'=>'json',
        'strBase'=>'integer',
        'dexBase'=>'integer',
        'conBase'=>'integer',
        'intBase'=>'integer',
        'wisBase'=>'integer',
        'chaBase'=>'integer',
        'armorClass'=>'integer',
        'initiative'=>'integer',
        'maxHp'=>'integer',
        'currentHp'=>'integer',
        'temporaryHp'=>'integer',
        'contusiveDamage'=>'integer',
        'casterLevel'=>'integer',

        'strLevelBonus'=>'integer',
        'dexLevelBonus'=>'integer',
        'conLevelBonus'=>'integer',
        'intLevelBonus'=>'integer',
        'wisLevelBonus'=>'integer',
        'chaLevelBonus'=>'integer',

        'strRaceBonus'=>'integer',
        'dexRaceBonus'=>'integer',
        'conRaceBonus'=>'integer',
        'intRaceBonus'=>'integer',
        'wisRaceBonus'=>'integer',
        'chaRaceBonus'=>'integer',

        'strModelBonus'=>'integer',
        'dexModelBonus'=>'integer',
        'conModelBonus'=>'integer',
        'intModelBonus'=>'integer',
        'wisModelBonus'=>'integer',
        'chaModelBonus'=>'integer',

        'strItemBonus'=>'integer',
        'dexItemBonus'=>'integer',
        'conItemBonus'=>'integer',
        'intItemBonus'=>'integer',
        'wisItemBonus'=>'integer',
        'chaItemBonus'=>'integer',

        'movement'=>'double',
        'pc'=>'integer',
        'pp'=>'integer',
        'po'=>'integer',
        'pl'=>'integer',
        'totalMoney'=>'integer',
        'totalWeight'=>'integer',
    ];
}
