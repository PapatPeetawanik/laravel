<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Todo extends Model
{
	use HasFactory;
	protected $table = 'todos';
	protected $primaryKey = 'id';
	protected $fillable = [
		'title', 'completed', 'user_id'
	];
	public function todouser()
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}
}
