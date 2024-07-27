<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Message extends Model
{

    public $table = 'messages';
    


    protected $fillable = [
        'c_id',
       'corruption_type',
        'corruption_person_name',
        'corruption_conducted_Org',
        'corruption_conducted_place',
        'beneficiary_person',
        'victim_person',
        'damage_valued_bymoney',
        'time',
        'age',
        'tittle',
        'address',
        'signed',
        'loan',
        'tax',
        'file',
        'audio',
        'video',
        'image',
        'paper',
    ];

   protected $casts = [
        'c_id'=>'integer',
        'corruption_type' => 'string',
        'corruption_person_name' => 'string',
        'corruption_conducted_Org' => 'string',
        'corruption_conducted_place' => 'string',
        'beneficiary_person' => 'string',
        'victim_person' => 'string',
        'damage_valued_bymoney' => 'string',
        'time' => 'string',
        'age' => 'integer',
        'time' => 'string',
        'tittle' => 'string',
        'address' => 'string',
        'signed' => 'string',
        'loan' => 'string',
        'tax' => 'string',
        'file' => 'string',
        'audio' => 'string',
        'video' => 'string',
        'image' => 'string',
        'paper' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
