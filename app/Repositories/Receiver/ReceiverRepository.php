<?php

namespace App\Repositories\Receiver;

use App\Models\Receiver\Receiver;
use InfyOm\Generator\Common\BaseRepository;

class ReceiverRepository extends BaseRepository
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
        return Receiver::class;
    }
}
