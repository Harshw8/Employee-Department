<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubDepartment extends Model
{
    protected $table = 'sub_departments';
    
    protected $fillable = [
        'department_id',
        'name',
    ];
}
