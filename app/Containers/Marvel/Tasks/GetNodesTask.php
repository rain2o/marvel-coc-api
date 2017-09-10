<?php

namespace App\Containers\Marvel\Tasks;

use App\Containers\Marvel\Data\Repositories\NodeRepository;
use App\Containers\Marvel\Models\Buff;
use App\Containers\Marvel\Models\Node;
use App\Ship\Parents\Tasks\Task;

class GetNodesTask extends Task
{

    /** @var \App\Containers\Marvel\Data\Repositories\NodeRepository  */
    private $nodeRepository;

    /**
     * GetNodesTask constructor.
     * @param NodeRepository $nodeRepository
     */
    public function __construct(NodeRepository $nodeRepository)
    {
        $this->nodeRepository = $nodeRepository;
    }

    /**
     * @param $abilities array
     *
     * @return mixed
     */
    public function run($abilities)
    {
        try {
            $buffs = Buff::whereHas('abilities', function($q) use ($abilities) {
                $q->whereIn('ability_buff.ability_id', $abilities);
            });
            $buffs = $buffs->paginate(50)->toArray();

            $buffIds = array();
            foreach ($buffs['data'] as $buff) {
                $buffIds[] = $buff['id'];
            }
            $nodes = Node::whereHas('buffs', function($q) use($buffIds) {
                $q->whereIn('buff_node.buff_id', $buffIds);
            })->get();
            return $nodes;

        } catch (Exception $e) {
            throw new UserNotFoundException();
        }

        return $this->nodeRepository->first();
    }

}
