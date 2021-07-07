<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckSessionAfterLogin
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	//แจกว่ามีการล็อกอินหรือป่าวถ้ามีให้กลับไปหน้าแรก
	public function handle(Request $request, Closure $next)
	{

		
		if (Auth::check()) {
			return redirect('/index');
		}


		return $next($request);
	}
}
