<?php

namespace App\Containers\Marvel\Tasks;

use App\Containers\Marvel\Data\Repositories\AbilityRepository;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\App;

class FindAbilitiesByNameTask extends Task
{

    public function __construct()
    {
        // ..
    }

    public function run($abilityNames)
    {
        try {
            /** @var AbilityRepository $repo */
            $repo = App::make(AbilityRepository::class);
            $abilities = $repo->findWhereIn('name', $abilityNames);
        } catch (Exception $e) {
            throw new Exception();
        }

        return $abilities;
    }
}
