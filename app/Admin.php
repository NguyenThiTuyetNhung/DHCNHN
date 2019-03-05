<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
	protected $guard = 'admin';

	protected $table = 'admins';
	
	protected $fillable = [
		'username', 'password', 'name', 'birthday', 'gender', 'email', 'address', 'rule', 'phone', 'status', 
	];

	protected $hidden = [
		'password',
	];

	public $timestamps = true;

	public function setPasswordAttribute($value)
	{
		return $this->attributes['password'] = bcrypt($value);
	}
}
