<?php

namespace App\Containers\Marvel\UI\API\Transformers;

use App\Containers\Marvel\Models\Champion;
use App\Ship\Parents\Transformers\Transformer;

class ChampionTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [
    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [
    ];

    /**
     * @param Champion $champion
     * @return array
     */
    public function transform(Champion $champion)
    {
        $response = [

            'object' => 'Champion',
            'id' => $champion->getHashedKey(),
            'name' => $champion->name,
            'class' => $champion->class,
            'abilities' => $champion->abilities()->getResults(),
            'created_at' => $champion->created_at,
            'updated_at' => $champion->updated_at,


        ];

        $response = $this->ifAdmin([
            'real_id'    => $champion->id,
        ], $response);

        return $response;
    }
}
