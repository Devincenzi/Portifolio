<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassesLevels extends Model
{
    use HasFactory;

    protected $fillable = [
        'level',
        'idClasse',
        'features',
        'zeroCircleKnow',
        'firstCircleKnow',
        'secondCircleKnow',
        'thirdCircleKnow',
        'fourthCircleKnow',
        'fifthCircleKnow',
        'sixthCircleKnow',
        'seventhCircleKnow',
        'eighthCircleKnow',
        'ninethCircleKnow',
        'zeroCircleDay',
        'firstCircleDay',
        'secondCircleDay',
        'thirdCircleDay',
        'fourthCircleDay',
        'fifthCircleDay',
        'sixthCircleDay',
        'seventhCircleDay',
        'eighthCircleDay',
        'ninethCircleDay',
    ];

    protected $casts = [
        'level'=>'integer',
        'idClasse'=>'integer',
        'features'=>'json',
        'zeroCircleKnow'=>'integer',
        'firstCircleKnow'=>'integer',
        'secondCircleKnow'=>'integer',
        'thirdCircleKnow'=>'integer',
        'fourthCircleKnow'=>'integer',
        'fifthCircleKnow'=>'integer',
        'sixthCircleKnow'=>'integer',
        'seventhCircleKnow'=>'integer',
        'eighthCircleKnow'=>'integer',
        'ninethCircleKnow'=>'integer',
        'zeroCircleDay'=>'integer',
        'firstCircleDay'=>'integer',
        'secondCircleDay'=>'integer',
        'thirdCircleDay'=>'integer',
        'fourthCircleDay'=>'integer',
        'fifthCircleDay'=>'integer',
        'sixthCircleDay'=>'integer',
        'seventhCircleDay'=>'integer',
        'eighthCircleDay'=>'integer',
        'ninethCircleDay'=>'integer',
    ];
}
