<?php

namespace App\Containers\Marvel\Models;

use App\Ship\Parents\Models\Model;

class Ability extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'abilities';

    protected $fillable = [];

    protected $hidden = [];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
