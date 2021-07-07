<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
	//
	public function index()
	{
		return view('register');
	}


	public function checkregister(Request $request)
	{
		//validate
		$validate = Validator::make($request->all(), [
			'txtFirstName' => 'required',
			'txtLastName' => 'required',
			'txtEmail' => 'required|unique:users,email|email:rfc,dns',
			'txtConfirmPassword' => 'same:txtPassword'


		], [
			'txtFirstName.required' => 'กรุณากรอกชื่อ',
			'txtLastName.required' => 'กรุณากรอกนามสกุล',
			'txtEmail.required' => 'กรุณากรอก email',
			'txtEmail.unique' => 'มี email นี้ในระบบแล้ว',
			'txtConfirmPassword.same' => 'รหัสผ่านใหม่ไม่ตรงกับยืนยันรหัสผ่าน',
		]);

		//เช็คค่า valid
		if ($validate->passes()) {
			//ต้องผ่านตามขั้นตอน
			DB::beginTransaction();
			$user = new User();
			$user->firstname = $request->txtFirstName;
			$user->lastname = $request->txtLastName;
			$user->email = $request->txtEmail;
			$user->password = bcrypt($request->txtPassword);
			$user->save();
			DB::commit();
			//ต้องยืนยันตัวตน อีเมล์ พาสเวิด
			if (Auth::attempt(['email' => $request->txtEmail, 'password' => $request->txtPassword])) {

				return redirect()->intended('/index');
			}
		} else {
			//ตีกลับ Error
			return redirect()->back()->withErrors($validate->errors())->withInput($request->all());
		}
	}
}
