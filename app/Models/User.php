<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Haruncpi\LaravelIdGenerator\IdGenerator;
class User extends Authenticatable
{
    use HasFactory, Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'reffer',
        'phone',
        'address',
        'status',
        'ytstatus',
        'password'
    ];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
           $model->reffer = IdGenerator::generate(['table' => 'users','field'=>'reffer', 'length' => 8, 'prefix' =>'ryc-']);
        });
    }
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = ['deleted_at'];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
