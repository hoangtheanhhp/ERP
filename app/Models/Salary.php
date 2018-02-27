<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $fillable=[
        'user_id','salary','salary_per_hour','insurance_money','final_payment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
