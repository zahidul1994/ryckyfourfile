<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videocount extends Model
{
    protected $fillable=[
        'view',
        'user_id',
        'earning'
    ];
}
