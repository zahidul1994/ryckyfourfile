<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matching extends Model
{
    use HasFactory;

     protected $fillable=[
        'admin_id',
        'matchingname',
        'matchingbonus'

    ];
    public function admin()
    {
        return $this->belongsTo('App\Models\Admin');
    } 
   
}
