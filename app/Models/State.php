<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';
    
    protected $fillable = [
        'country_id',
        'name',
    ];

    public function country()
    {
        return $this->hasOne(Country::class,'id','country_id');
    }
}
