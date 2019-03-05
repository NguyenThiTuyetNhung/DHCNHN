<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    protected $fillable = [
        'username', 'name', 'birthday', 'gender', 'email', 'address', 'phone', 'status', 'password'
    ];

    public $timestamps = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
     public function statistics()
    {
        return $this->hasMany(statistics::class, 'user_id', 'id');
    }
     public function orders()
    {
        return $this->hasMany(Order::class, 'user_id', 'id');
    }
}
