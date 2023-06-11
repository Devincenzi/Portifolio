<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillClasse extends Model
{
    use HasFactory;

    protected $fillable = [
        'idSkill',
        'idClasse'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

     protected $casts = [
        'idSkill'=>'integer',
        'idClasse'=>'integer'
     ];
}
