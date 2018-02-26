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
        'deleted_at', 'start_time',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
