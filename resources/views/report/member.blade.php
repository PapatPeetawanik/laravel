{{-- หน้า reportmember --}}
@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection
@section('header')

<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0">รายงานข้อมูลสมาชิก</h1>
	</div>

</div>
	
@endsection
@section('title')
รายงานสมาชิก
@endsection
@section('content')


<br>
<div style="text-align:center;margin-top:10px;">
<strong >รายงานสมาชิก วันที่ <?php echo date("d/m/Y");?>  </strong><br>
</div>
<br>


<a href={{url('genreportuser')}}>
<img src={{asset('asset\imagesproject\report\member\logo-excel.png')}}  width="50" >Excel</img></a>
<div class="card-body" >
	<table class="table table-bordered table-striped">
		<thead>
		<tr>
			<th>#</th>
			<th>ชื่อ</th>
			<th>อีเมล์</th>
			<th>วันที่สมัครสมาชิก</th>
		
		</tr>
		</thead>
		<tbody>
	
@foreach ($user as $key=>$users )
		<tr>
			<td>{{$key+1}}</td>
			<td>{{$users->firstname.' '.$users->lastname }}</td>
			<td>{{$users->email}}</td>
			<td>{{$users->created_at}}</td>
		
		</tr>
		@endforeach 
		
		
		</tbody>
	
	</table>
	<div>
		{{$user->links('pagination::bootstrap-4')}}
	
	</div>
   


</div>

@endsection
