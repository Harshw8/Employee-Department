<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StickyNote extends Model
{
    protected $table = 'sticky_notes';

    protected $fillable = [
        'title',
        'description',
    ];
}
