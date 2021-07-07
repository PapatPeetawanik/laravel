<?php

namespace App\Exports;

namespace App\Http\Controllers;

use App\Exports\LogfileloginExport;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Http\Request;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TodolistExport;
use App\user;

class GenReportViewController extends Controller
{
	public function view()
	{
		return Excel::download(new UserExport, 'ReportUser.xlsx');
	}
	public function viewlogfilelogin()
	{
		return Excel::download(new LogfileloginExport, 'Reportlogfilelogin.xlsx');
	}
	public function viewtodolist()
	{
		return Excel::download(new TodolistExport, 'ReportTodolist.xlsx');
	}
}
