<?php

namespace App\Containers\Marvel\UI\API\Transformers;

use App\Containers\Marvel\Models\Node;
use App\Ship\Parents\Transformers\Transformer;

class NodeTransformer extends Transformer
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
     * @param Node $entity
     * @return array
     */
    public function transform(Node $entity)
    {
        $response = [

            'object' => 'Node',
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,
            'number' => $entity->number,
            'buffs' => $entity->buffs()->getResults()
        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
        ], $response);

        return $response;
    }
}
