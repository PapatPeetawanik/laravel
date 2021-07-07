<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class logfilelogin extends Model
{
	use HasFactory;
	protected $table = 'logfilelogin';
	protected $primaryKey = 'id';
	protected $fillable = [
		'statuslog', 'logdate',  'user_id'
	];
	public function user()
	{
		// $year = '2564';
		return $this->belongsTo(User::class, 'user_id', 'id');
	}
}
