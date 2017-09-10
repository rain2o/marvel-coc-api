<?php

namespace App\Containers\Marvel\Actions;

use App\Containers\Marvel\Tasks\GetNodesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetNodesAction extends Action
{
    /**
     * @param \App\Ship\Parents\Requests\Request $request
     * @return array
     */
    public function run(Request $request)
    {
        $abilities = \GuzzleHttp\json_decode($request->abilities);
        $nodes = $this->call(
            GetNodesTask::class,
            [$abilities]
        );

        return $nodes;
    }

}
