<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeLetter extends Model
{
    protected $table = 'employee_letters';

    protected $fillable = [
        'title',
        'description',
    ];
}
