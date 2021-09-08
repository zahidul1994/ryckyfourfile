<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;
     protected $fillable=[
        'admin_id',
        'rankname',
        'rankbonus'
    ];
     
     public function admin()
    {
        return $this->belongsTo('App\Models\Admin');
    } 

   
}
