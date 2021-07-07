
	{{-- view export user ต้องเป็นหน้าตารางเพียวๆ --}}
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

   


