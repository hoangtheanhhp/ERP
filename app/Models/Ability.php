<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    //
    const DYNAMIC = 1;
    const NONE = 2;

    protected $fillable = [
        'name', 'number',
    ];

    public function levels()
    {
        return $this->hasMany(Level::class);
    }
}
