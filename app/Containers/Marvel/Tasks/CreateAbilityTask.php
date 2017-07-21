<?php

namespace App\Containers\Marvel\Tasks;

use App\Containers\Marvel\Data\Repositories\AbilityRepository;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class CreateAbilityTask extends Task
{

    public function __construct()
    {
        // ..
    }

    /**
     * @param  $name
     *
     * @return  mixed
     */
    public function run($name)
    {
        return App::make(AbilityRepository::class)->create([
            'name' => $name
        ]);
    }
}
