{{-- หน้า logfilelogin --}}
@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection
@section('header')

<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0">รายงานสถานะผู้ใช้ล็อกอิน</h1>
	</div>

</div>
	
@endsection
@section('title')
รายงานสถานะผู้ใช้ล็อกอิน
@endsection
@section('content')


<br>
<div style="text-align:center;margin-top:10px;">
<strong >รายงานสถานะผู้ใช้ล็อกอิน วันที่ <?php echo date("d/m/Y");?>  </strong><br>
</div>
<br>


<a href={{url('genreportlogfile')}}>
<img src={{asset('asset\imagesproject\report\member\logo-excel.png')}}  width="50" >Excel</img></a>
<div class="card-body" >
	<table class="table table-bordered table-striped">
		<thead>
		<tr>
			<th>#</th>
			<th>ชื่อ</th>
			<th>อีเมล์</th>
			<th>เวลาเข้าใช้ระบบ</th>
			<th>สถานะ</th>
		
		</tr>
		</thead>
		<tbody>
	
@foreach ($logfilelogin as $key=>$logfilelogins )
		<tr>
			<td>{{$key+1}}</td>
			<td>{{$logfilelogins->user->firstname}} {{$logfilelogins->user->lastname}}</td>
			<td>{{$logfilelogins->user->email}}</td>
			<td>{{$logfilelogins->logdate}}</td>
			<td>{{$logfilelogins->statuslog}}</td>
		</tr>
		@endforeach 
		
		
		</tbody>
	
	</table>
	<div>
		{{$logfilelogin->links('pagination::bootstrap-4')}}
	
	</div>
   


</div>

@endsection
