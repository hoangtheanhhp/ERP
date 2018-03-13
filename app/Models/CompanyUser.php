<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyUser extends Model
{
    //
    protected $fillable=[
        'user_id', 'rule',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}