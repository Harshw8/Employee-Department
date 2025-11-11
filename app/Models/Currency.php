<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'currencies';
    
    protected $fillable = [
        'country',
        'currency_name',
        'currency_symbol',
    ];
}
