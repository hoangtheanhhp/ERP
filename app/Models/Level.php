<?php

namespace App\Models;

use App\Models\Department;
use App\Models\UserLevel;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //
    const DIRECTOR = 4;
    const MANAGER = 3;
    const DEV = 2;
    const INTERSHIP = 1;

    protected $fillable = [
        'name', 'department_id', 'number', 'ability_id',
    ];

    public function ability()
    {
        return $this->belongsTo(Ability::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function users(){
        return $this->belongsToMany(User::class,'user_levels');
    }

}
