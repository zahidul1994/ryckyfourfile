<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $fillable=[
        'admin_id',
        'user_id',
        'amount',
        'moneyinout',
        'earnuser_id',
        'note',
        'view',
        'status'
    ];
}
