<?php

namespace App\Containers\Marvel\Models;

use App\Ship\Parents\Models\Model;

class Champion extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'champions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    protected $hidden = [];

    protected $casts = [];

    /**
     * The dates attributes.
     *
     * @var array
     */
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
