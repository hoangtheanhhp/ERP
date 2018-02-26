<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Holiday extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'date','content',
    ];

    protected $dates=[
        'date','created_at','updated_at','deleted_at',
    ];
}
