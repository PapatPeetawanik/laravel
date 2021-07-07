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