<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Complaints extends Model
{

    public $table = 'complaints';
    


    public $fillable = [
        'complaint_id',
        'complaint_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'complaint_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
