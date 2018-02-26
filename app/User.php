<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates=[
        'birthday','created_at','deleted_at','updated_at'
    ];

    public function absences()
    {
        $this->hasMany('App\Absence');
    }
    public function reports()
    {
        $this->hasMany('App\Report');
    }
    public function reportOTs()
    {
        $this->hasMany('App\ReportOT');
    }
    public function rollCalls()
    {
        $this->hasMany('App\RollCall');
    }
}
