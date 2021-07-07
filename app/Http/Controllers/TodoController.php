<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Carbon;

class TodoController extends Controller
{
	//
	public function view()
	{
		$todo = Todo::with('todouser')->paginate('5');



		$user = User::all();
		return view('todolist.todo', compact('todo', 'user'));
	}
	public function index()
	{
	}
	public function create(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'txtTitle' => 'required|max:255',
			'ddlUser' => 'required',
		], [
			'txtTitle.required' => 'กรุณากรอกชื่อหัวข้อ',
			'ddlUser.required' => 'โปรดเลือกชื่อสมาชิก'
		]);

		if ($validator->fails()) {
			return redirect('/todo')
				->withInput()
				->withErrors($validator);
		}

		Todo::create([
			'title' => $request->txtTitle,
			'completed' => 0,
			'user_id' => $request->ddlUser,

		]);

		return redirect()->intended('/todo');
	}

	public function updateinprogress($id)
	{
		//
		$todo = Todo::find($id);
		$todo->completed = 1;
		$todo->save();
		return 'update เรียบร้อย';
	}
	public function updatecomplete($id)
	{
		//
		$todo = Todo::find($id);
		$todo->completed = 2;
		$todo->save();
		return 'update เรียบร้อย';
	}

	public function delete($id)
	{

		Todo::findOrFail($id)->delete();
		return 'delete เรียบร้อย';
		return redirect('/todo');
	}
}
