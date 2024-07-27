<?php

namespace App\Repositories\Head;

use App\Models\Head\Head;
use InfyOm\Generator\Common\BaseRepository;

class HeadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Head::class;
    }
}
