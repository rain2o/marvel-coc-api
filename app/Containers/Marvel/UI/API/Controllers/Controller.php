<?php

namespace App\Containers\Marvel\UI\API\Controllers;

use App\Containers\Marvel\Actions\ListAndSearchChampionsAction;
use App\Containers\Marvel\UI\API\Requests\GetAllChampionsRequest;
use App\Containers\Marvel\UI\API\Transformers\ChampionTransformer;
use App\Ship\Parents\Controllers\ApiController;

class Controller extends ApiController
{

    /**
     * @param \App\Containers\Marvel\UI\API\Requests\GetAllChampionsRequest $request
     * @return mixed
     */
    public function getAllChampions(GetAllChampionsRequest $request)
    {
        $champions = $this->call(ListAndSearchChampionsAction::class);

        return $this->transform($champions, ChampionTransformer::class);
    }

}
