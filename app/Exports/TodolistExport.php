<?php

namespace App\Exports;


use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Todo;

class TodolistExport implements FromView
{
	public function view(): View
	{
		return view('report.viewreport.viewreportTodolist', [
			'todolist' => Todo::with('todouser')->get()

		]);
	}
}
