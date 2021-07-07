<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportController;

use App\Http\Controllers\GenReportViewController;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TodoController;
use App\Models\Todo;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//หลังจาการล็อกอิน
Route::group(['middleware' => 'checksessionafterlogin'], function () {
	Route::get('/', function () {
		return view('login');
	});
	//viewlogin
	Route::get('/login', function () {
		return view('login');
	});
	//viewregister
	Route::get('/register', [RegisterController::class, 'index'])->name('register');
	//saveregister	
	Route::post('/registeruser', [RegisterController::class, 'checkregister'])->name('checkregister');
});
//login ยืนยันตัวตน
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

//ก่อนการล็อกอิน
Route::group(['middleware' => 'checksessionbeforelogin'], function () {
	//exceluser
	Route::get('/exportexceluser', [ReportController::class, 'exportexceluser']);
	//reportuser
	Route::get('/report/member', [ReportController::class, 'member'])->name('report.member');
	//reportlogfilelogin
	Route::get('/report/logfilelogin', [ReportController::class, 'logfilelogin'])->name('report.logfilelogin');
	//reportlogfilelogin
	Route::get('/report/todolist', [ReportController::class, 'todolist'])->name('report.todolist');
	//genexcelview
	Route::get('/genreportuser', [GenReportViewController::class, 'view'])->name('genreportuser');
	Route::get('/genreportlogfile', [GenReportViewController::class, 'viewlogfilelogin'])->name('genreportlogfile');
	Route::get('/genreportTodolist', [GenReportViewController::class, 'viewtodolist'])->name('genreportTodolist');
	//index
	Route::get('/index', function () {
		return view('index');
	});


	//updateinprogresstodo
	Route::patch('/todo/updateinprogress/{id}', [TodoController::class, 'updateinprogress'])->name('updateinprogresstodo');
	//updatecompletetodo
	Route::patch('/todo/updatecomplete/{id}', [TodoController::class, 'updatecomplete'])->name('updatecompletetodo');
	//deletetodo
	Route::delete('/todo/delete/{id}', [TodoController::class, 'delete'])->name('deletetodo');


	//todo
	Route::get('/todo', [TodoController::class, 'view'])->name('viewtodo');

	Route::post('/todo/create', [TodoController::class, 'create'])->name('createtodo');
});


//logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
