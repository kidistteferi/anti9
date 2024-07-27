<?php

namespace App\Repositories;

use App\Models\Complaints;
use InfyOm\Generator\Common\BaseRepository;

class ComplaintsRepository extends BaseRepository
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
        return Complaints::class;
    }
}
