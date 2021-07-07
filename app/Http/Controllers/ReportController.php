<?php

namespace App\Http\Controllers;

use App\Exports\LogfileloginExport;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Exports\UserExport;
use App\Models\logfilelogin;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Todo;

class ReportController extends Controller
{
	//
	public function member()
	{

		$user = DB::table('users')->paginate('1');
		return view('report.member', compact('user'));
	}
	public function logfilelogin()
	{

		$logfilelogin = logfilelogin::with('user')->paginate('3');
		return view('report.logfilelogin', compact('logfilelogin'));
	}
	public function todolist()
	{


		$todolist = Todo::with('todouser')->paginate('3');

		return view('report.todolist', compact('todolist'));
	}
	public function exportexceluser()
	{
		return Excel::download(new UserExport, 'ReportUsers.xlsx');
	}
	public function exportexcelLogfilelogin()
	{
		return Excel::download(new LogfileloginExport, 'ReportLogfilelogin.xlsx');
	}
	public function exportexceltodolist()
	{
		return Excel::download(new TodolistExport, 'ReportTodolist.xlsx');
	}
}
