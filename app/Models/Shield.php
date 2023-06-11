<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shield extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'armorClass',
        'weight',
        'price'
    ];

    protected $casts = [
        'name'=>'string',
        'armorClass'=>'integer',
        'weight'=>'integer',
        'price'=>'integer'
    ];
}
