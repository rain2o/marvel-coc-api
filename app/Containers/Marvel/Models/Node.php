<?php

namespace App\Containers\Marvel\Models;

use App\Ship\Parents\Models\Model;

class Node extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nodes';

    protected $fillable = [];

    protected $hidden = [];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function buffs()
    {
        return $this->belongsToMany('App\Containers\Marvel\Models\Buff')
            ->withTimestamps();
    }
}
