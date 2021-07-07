{{-- หน้า todo --}}
@extends('layouts.master')
@section('css')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection
@section('header')

<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0">Todo List</h1>
	</div>

</div>
	
@endsection
@section('css')
<style>
	.app-container {
        height: 100vh;
        width: 100%;
      }
      .complete {
        text-decoration: line-through;
      }
</style>
		
@endsection
@section('title')
Todo List
@endsection
@section('content')
<div class="container" style="margin-top:10px;">
  <div class="row justify-content-center align-items-center main-row">
    <div class="col shadow main-col bg-white">
      <div class="row bg-primary text-white">
        <div class="col  p-2">
          <h4>Todo List</h4>
			
        </div>
      </div>
			<form action="{{route('createtodo')}}" method="POST">
				{{ csrf_field() }}
      <div class="row justify-content-between text-white p-2">
        <div class="form-group flex-fill mb-2">
				
          <input  type="text" name="txtTitle" class="form-control" placeholder="หัวข้อ">
					@if($errors->has('txtTitle'))
					<span ><h3 style="color:red;">{{ $errors->first('txtTitle'); }}</h3></span>
					@endif
					<br/>
					<select id="ddlUser" name="ddlUser" class="form-control">
					
						<option value="" disabled="disabled" selected="selected">โปรดเลือก</option>
						@foreach ($user as $users )
						<option value="{{$users->id}}">{{$users->email}}</option>
						@endforeach 
					 
					 </select>
					 @if($errors->has('ddlUser'))
					 <span ><h3 style="color:red;">{{ $errors->first('ddlUser'); }}</h3></span>
					 @endif

        </div>
			
				
        <button type="submit"  class="btn btn-primary ">Add todo</button>
			</form>
			<div class="card-body" >
			
				<div>
				
      </div>
      <div class="row" id="todo-container">
					<table class="table table-bordered table-striped">
					<thead>
					<tr>
						<th>#</th>
						<th>หัวข้อ</th>
						<th>สถานะ</th>
						<th>ผู้รับมอบหมายงาน</th>
						<th>การกระทำ</th>
					
					</tr>
					</thead>
					<tbody>
				
			    @foreach ($todo as $key=>$todos )
		
					<tr>
						<td>{{$key+1 }}</td>
						<td>{{$todos->title }}</td>
						<td>@if($todos->completed==0) <h4 style="color:black;">Not progress</h4> @elseif($todos->completed==1) <h4 style="color:rgb(255, 174, 0);">In progress</h4> @else <h4 style="color:green;">Completed</h4>  @endif</td>
						<td>{{$todos->todouser->email}}</td>
						
						<td>
						
						
							
					
						<button type="button" class="btn btn-danger" onclick="deletetodo({{$todos->id}})"><i class="fa fa-trash"  aria-hidden="true"></i> Delete Todo</button>
					
						@if($todos->completed!=1 && $todos->completed!=2)
						<button type="button" class="btn btn-warning" onclick="updateinprogress({{$todos->id}})"><i class="fa fa-spinner" aria-hidden="true"></i> In progress</button>
						@endif
						@if($todos->completed!=2)
						<button type="button" class="btn btn-success" onclick="updatecompleted({{$todos->id}})"><i class="fa fa-check"  aria-hidden="true"></i> Completed</button>
						@endif
							
					
						</td>
				
					</tr>
					@endforeach 
					
					
					</tbody>
				
				</table>
      </div>
			<div >
				{{$todo->links('pagination::bootstrap-4')}}
			
			</div>
    </div>
  </div>
</div>



@endsection
@section('script')
<script>

	function deletetodo(id){
		Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
   }).then((result) => {
     if (result.isConfirmed) {
				$.ajax(`{{ url('todo/delete/${id}') }}`, {
				type: 'DELETE',  // http method
				headers: {
						'X-CSRF-TOKEN' : $('meta[name=csrf-token]').attr('content')
				},
 
			success: function (data, status, xhr) {
			
				if(data=='delete เรียบร้อย'){
			
					window.location.reload();
				}
			},
			error: function (jqXhr, textStatus, errorMessage) {
		
			}
	});
  }
 })
}
	function updateinprogress(id){
	
	$.ajax(`{{ url('todo/updateinprogress/${id}') }}`, {
	type: 'PATCH',  // http method
	headers: {
		'X-CSRF-TOKEN' : $('meta[name=csrf-token]').attr('content')
	},
 
	success: function (data, status, xhr) {
			
			if(data=='update เรียบร้อย'){
					window.location.reload();
			}
	},
	error: function (jqXhr, textStatus, errorMessage) {
		
	}
 });
}

function updatecompleted(id){
	
	$.ajax(`{{ url('todo/updatecomplete/${id}') }}`, {
	type: 'PATCH',  // http method
	headers: {
		'X-CSRF-TOKEN' : $('meta[name=csrf-token]').attr('content')
	},
 
	success: function (data, status, xhr) {
			
			if(data=='update เรียบร้อย'){
					window.location.reload();
			}
	},
	error: function (jqXhr, textStatus, errorMessage) {
		
	}
 });
}


	
</script>
@endsection
