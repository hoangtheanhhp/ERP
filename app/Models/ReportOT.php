<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReportOT extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'starts_at','ends_at','content','user_id',
    ];

    protected $dates=[
        'deleted_at','starts_at','ends_at',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
