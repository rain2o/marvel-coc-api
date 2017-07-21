<?php

namespace App\Containers\Marvel\Tasks;

use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\App;
use App\Containers\Marvel\Data\Repositories\BuffRepository;

class FindBuffsByAttributeTask extends Task
{

    public function __construct()
    {
        // ..
    }

    /**
     * @param array  $buffs
     * @param string $attr
     * @return mixed
     * @throws Exception
     */
    public function run($buffs, $attr='name')
    {
        try {
            /** @var BuffRepository $repo */
            $repo = App::make(BuffRepository::class);
            $buffs = $repo->findWhereIn($attr, $buffs);
        } catch (Exception $e) {
            throw new Exception($e);
        }

        return $buffs;
    }
}
