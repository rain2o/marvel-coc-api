<?php

namespace App\Containers\Marvel\Tasks;

use App\Containers\Marvel\Data\Repositories\BuffRepository;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class CreateBuffTask extends Task
{

    public function __construct()
    {
        // ..
    }

    /**
     * @param $title string
     * @param $description string
     * @param $abilities array
     *
     * @return  mixed
     */
    public function run($title, $description=null, $abilities = null)
    {
        $buff = App::make(BuffRepository::class)->create([
            'title' => $title,
            'description' => $description
        ]);
        if ($abilities) {
            $buff->abilities()->attach($abilities);
        }
        return $buff;
    }
}
