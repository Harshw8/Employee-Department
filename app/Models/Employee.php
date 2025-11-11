<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    
    protected $fillable = [
        'first_name',
        'last_name',
        'department_id',
        'sub_department_id',
        'salary',
        'gender',
        'birth_date',
    ];
}
