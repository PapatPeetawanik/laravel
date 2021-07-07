<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\logfilelogin;

class LoginController extends Controller
{



	public function authenticate(Request $request)
	{


		if (Auth::attempt(['email' => $request->txtEmail, 'password' => $request->txtPassword])) {

			logfilelogin::create([

				'logdate' => now(),
				'statuslog' => 'เข้าสู่ระบบ',
				'user_id' => Auth::user()->id

			]);
			return redirect()->intended('/index');
		} else {
			return redirect('/login')->with('errorlogin', 'ไม่สามารถ Login ได้ กรุณาใส่ username กับ password ใหม่');
		}
	}

	public function logout(Request $request)
	{
		logfilelogin::create([

			'logdate' => now(),
			'statuslog' => 'ออกระบบ',
			'user_id' => Auth::user()->id

		]);


		Auth::logout();

		$request->session()->invalidate();

		$request->session()->regenerateToken();

		return redirect('/');
	}
}
