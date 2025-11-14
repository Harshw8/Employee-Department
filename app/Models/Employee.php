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
        'subdepartment_id',
        'salary',
        'profile_image',
        'gender',
        'birth_date',
    ];

    public function department()
    {
        return $this->hasOne(Department::class,'id','department_id');
    }

    public function subdepartment()
    {
        return $this->hasOne(SubDepartment::class,'id','subdepartment_id');
    }

}
