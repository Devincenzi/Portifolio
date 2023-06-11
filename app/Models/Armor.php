<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'price',
        'ca',
        'maxDex',
        'furtivity',
        'weight',
        'wearingTime',
    ];
        /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'name'=>'string',
        'category'=>'json',
        'price'=>'integer',
        'ca'=>'integer',
        'maxDex'=>'integer',
        'penality'=>'integer',
        'weight'=>'integer',
        'wearingTime'=>'integer',
    ];
}
