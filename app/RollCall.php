<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RollCall extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'start_time','user_id',
    ];

    protected $dates=[
        'deleted_at', 'start_time', 'created_at', 'updated_at',
    ];

}
