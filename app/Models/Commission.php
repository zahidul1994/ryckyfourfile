<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model 
{
    use HasFactory;
    protected $fillable=[
        'admin_id',
        'rank_id',
        'videocommisson',
        'sponsercommisson',
        'matchingcommisson',
    ];
    public function admin()
    {
        return $this->belongsTo('App\Models\Admin');
    } 
    public function rank()
    {
        return $this->belongsTo('App\Models\Rank');
    } 
}
