<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Absence extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'start_time','end_time','content','user_id',
    ];

    protected $dates=[
        'created_at','update_at','deleted_at','start_time','end_time',
    ];

}
