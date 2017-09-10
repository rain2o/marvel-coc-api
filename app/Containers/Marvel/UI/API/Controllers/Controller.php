<?php

namespace App\Containers\Marvel\UI\API\Controllers;

use App\Containers\Marvel\Actions\GetNodesAction;
use App\Containers\Marvel\Actions\ListAndSearchChampionsAction;
use App\Containers\Marvel\UI\API\Requests\GetAllChampionsRequest;
use App\Containers\Marvel\UI\API\Requests\GetNodesByAbilitiesRequest;
use App\Containers\Marvel\UI\API\Transformers\ChampionTransformer;
use App\Containers\Marvel\UI\API\Transformers\NodeTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Support\Facades\Log;

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

    /**
     * @param GetNodesByAbilitiesRequest $request
     * @return mixed
     */
    public function getNodesByAbilities(GetNodesByAbilitiesRequest $request)
    {
        $nodes = $this->call(GetNodesAction::class, [$request]);

        return $this->transform($nodes, NodeTransformer::class);
    }

}
