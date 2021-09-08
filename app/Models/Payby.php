<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payby extends Model
{
    use HasFactory;
    protected $fillable=[
        'admin_id',
        'payby',
        'note',
    ];
    public function admin()
    {
        return $this->belongsTo('App\Models\Admin');
    } 
   
}