<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'price',
        'diceAmount',
        'diceType',
        'damageType',
        'criticRange',
        'criticMultiplier',
        'weight',
    ];
        /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'name'=>'string',
        'category' => 'json',
        'duasMaos' => 'boolean',
        'usaMunicao' => 'boolean',
        'municao' => 'boolean',
        'amount' => 'boolean',
        'price' => 'integer',
        'diceAmount' => 'integer',
        'diceType' => 'json',
        'damageType' => 'json',
        'criticRange' => 'integer',
        'criticMultiplier' => 'integer',
        'weight' => 'integer',
    ];
}
