<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Todo;
use App\Models\logfilelogin;

class User extends Authenticatable
{
	use HasFactory, Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'email',
		'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];
	protected $table = 'users';
	protected $primaryKey = 'id';
	public function logfile()
	{
		// $year = '2564';
		return $this->hasMany(logfilelogin::class, 'id', 'user_id');
	}
	public function usertodo()
	{

		// $year = '2564';
		return $this->hasMany(Todo::class, 'id', 'user_id');
	}
}
