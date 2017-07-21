<?php

namespace App\Containers\Marvel\Actions;

use App\Containers\Marvel\Tasks\ListChampionsTask;
use App\Ship\Parents\Actions\Action;

class ListAndSearchChampionsAction extends Action
{
    /**
     * @return mixed
     */
    public function run()
    {
         return $this->call(ListChampionsTask::class, []);
    }

}
