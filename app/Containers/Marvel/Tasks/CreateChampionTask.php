<?php

namespace App\Containers\Marvel\Tasks;

use Illuminate\Support\Facades\App;
use App\Containers\Marvel\Data\Repositories\ChampionRepository;
use App\Ship\Parents\Tasks\Task;

class CreateChampionTask extends Task
{

    public function __construct()
    {
        // ..
    }

    /**
     * @param $name string
     * @param $class string
     * @param $abilities array
     *
     * @return \App\Containers\Marvel\Models\Champion
     */
    public function run($name, $class, $abilities = null)
    {
        /** @var \App\Containers\Marvel\Models\Champion $champ */
        $champ = App::make(ChampionRepository::class)->create([
            'name' => $name,
            'class' => $class
        ]);
        if ($abilities) {
            $champ->abilities()->attach($abilities);
        }
        return $champ;
    }
}
