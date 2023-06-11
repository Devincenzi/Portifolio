<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'dv',
        'caster',
        'bba',
        'fortitude',
        'reflexos',
        'vontade',
        'skillPoints',
        'strIsPrimary',
        'dexIsPrimary',
        'conIsPrimary',
        'intIsPrimary',
        'wisIsPrimary',
        'chaIsPrimary',
    ];
        /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'name'=>'string',
        'description'=>'string',
        'dv'=>'json',
        'caster'=>'json',
        'bba'=>'json',
        'fortitude'=>'json',
        'reflexos'=>'json',
        'vontade'=>'json',
        'skillPoints'=>'integer',
        'strIsPrimary' => 'boolean',
        'dexIsPrimary' => 'boolean',
        'conIsPrimary' => 'boolean',
        'intIsPrimary' => 'boolean',
        'wisIsPrimary' => 'boolean',
        'chaIsPrimary' => 'boolean',
    ];
}
