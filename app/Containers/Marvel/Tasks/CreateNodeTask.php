<?php

namespace App\Containers\Marvel\Tasks;

use App\Containers\Marvel\Data\Repositories\NodeRepository;
use Illuminate\Support\Facades\App;
use App\Ship\Parents\Tasks\Task;

class CreateNodeTask extends Task
{

    public function __construct()
    {
        // ..
    }

    /**
     * @param number int
     * @param $buffs array
     *
     * @return \App\Containers\Marvel\Models\Champion
     */
    public function run($number, $buffs = null)
    {
        /** @var \App\Containers\Marvel\Models\Node $node */
        $node = App::make(NodeRepository::class)->create([
            'number' => $number
        ]);
        if ($buffs) {
            $node->buffs()->attach($buffs);
        }
        return $node;
    }
}
