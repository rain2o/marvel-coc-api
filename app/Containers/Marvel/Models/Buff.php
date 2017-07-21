<?php

namespace App\Containers\Marvel\Models;

use App\Ship\Parents\Models\Model;

class Buff extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'buffs';

    protected $fillable = [];

    protected $hidden = [];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function abilities()
    {
        return $this->belongsToMany('App\Containers\Marvel\Models\Ability')
            ->withTimestamps();
    }
}
