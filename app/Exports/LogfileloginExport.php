<?php

namespace App\Exports;


use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\logfilelogin;

class LogfileloginExport implements FromView
{
	public function view(): View
	{
		return view('report.viewreport.viewreportlogfilelogin', [
			'logfilelogin' => logfilelogin::with('user')->get()
		]);
	}
}
