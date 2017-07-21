<?php

namespace App\Containers\Marvel\Tasks;

use App\Containers\Marvel\Data\Repositories\ChampionRepository;
use App\Ship\Parents\Tasks\Task;

class ListChampionsTask extends Task
{

    /**
     * @var  \App\Containers\Marvel\Data\Repositories\ChampionRepository
     */
    private $championRepository;

    /**
     * ListChampionsTask constructor.
     * @param \App\Containers\Marvel\Data\Repositories\ChampionRepository $championRepository
     */
    public function __construct(ChampionRepository $championRepository)
    {
        $this->championRepository = $championRepository;
    }

    /**
     * @return mixed
     */
    public function run()
    {
        return $this->championRepository->paginate();
    }

//    public function ordered()
//    {
//        $this->championRepository->pushCriteria(new OrderByCreationDateDescendingCriteria());
//    }
}
