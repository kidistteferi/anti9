<?php

namespace App\Models\Head;

use Illuminate\Database\Eloquent\Model;



class Head extends Model
{

    public $table = 'head';
    


    protected $fillable = [
        'c_id',
       'e_id',
        'mid',
        'approve',
        'reject',
        'feedback',
        'reason',
        'comment',
        'status_bar',
        'status',
        'comment_rec',
        
    ];

   protected $casts = [
        'c_id'=>'integer',
        'e_id' => 'integer',
        'mid' => 'integer',
        'approve' => 'string',
        'feedback' => 'string',
        'reason' => 'string',
        'comment' => 'string',
        'status_bar' => 'string',
        'status' => 'string',
        'comment_rec' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
