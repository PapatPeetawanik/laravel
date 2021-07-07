<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckSessionBeforeLogin
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	//ถ้าไม่เท่ากับการล็อกอินให้กลับไปล็อกอิน
	public function handle(Request $request, Closure $next)
	{


		if (!Auth::check()) {
			return redirect('/login');
		}

		return $next($request);
	}
}
