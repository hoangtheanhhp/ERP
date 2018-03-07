<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;

class DepartmentRole extends Model
{
    //
    const TRUE = 1;
    const FALSE = 0;

    protected $fillable = [
        'department_id', 'create', 'read', 'update', 'delete',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
