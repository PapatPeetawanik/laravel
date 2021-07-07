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