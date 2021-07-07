{{-- หน้า reporttodolist --}}
@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection
@section('header')

<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0">รายงาน todolist </h1>
	</div>

</div>
	
@endsection
@section('title')
รายงาน todolist
@endsection
@section('content')


<br>
<div style="text-align:center;margin-top:10px;">
<strong >รายงาน todolist วันที่ <?php echo date("d/m/Y");?>  </strong><br>
</div>
<br>


<a href={{url('genreportTodolist')}}>
<img src={{asset('asset\imagesproject\report\member\logo-excel.png')}}  width="50" >Excel</img></a>
<div class="card-body" >
	<table class="table table-bordered table-striped">
		<thead>
		<tr>
			<th>#</th>
			<th>ชื่อหัวข้อ</th>
			<th>สถานะ</th>
			<th>ผู้รับมอบหมายงาน</th>
			<th>ชื่อ-นามสกุล</th>
		
		</tr>
		</thead>
		<tbody>
	
@foreach ($todolist as $key=>$todolists )
		<tr>
			<td>{{$key+1}}</td>
			<td>{{$todolists->title}} </td>
			<td>@if($todolists->completed==0) <h4 style="color:black;">Not progress</h4> @elseif($todolists->completed==1) <h4 style="color:rgb(255, 174, 0);">In progress</h4> @else <h4 style="color:green;">Completed</h4>  @endif</td>
			<td>{{$todolists->todouser->email}}</td>
			<td>{{$todolists->todouser->firstname}} {{$todolists->todouser->lastname}}</td>
		</tr>
		@endforeach 
		
		
		</tbody>
	
	</table>
	<div>
		{{$todolist->links('pagination::bootstrap-4')}}
	
	</div>
   


</div>

@endsection
