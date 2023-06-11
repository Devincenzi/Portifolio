<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShieldProperties extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'enhancementCost'
    ];

    protected $casts = [
        'name'=>'string',
        'description'=>'string',
        'price'=>'integer',
        'enchancementCost'=>'integer'
    ];
}
