<?php

namespace App\Containers\Marvel\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class AbilityRepository
 */
class AbilityRepository extends Repository
{

    /**
     * the container name. Must be set when the model has different name than the container
     *
     * @var  string
     */
    protected $container = 'Marvel';

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id'    => '=',
        'name'  => 'like',
    ];

    public function boot()
    {
		parent::boot();
        // probably do some stuff here ...
    }
}
