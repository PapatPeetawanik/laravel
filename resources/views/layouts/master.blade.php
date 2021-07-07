{{-- master page --}}
<?
date_default_timezone_set("Asia/Bangkok");
echo date_default_timezone_get();
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{csrf_token()}}" />
	<head>
  <title>	@yield('title')</title>
	<link href={{asset("asset/bootstrap-5.0.2/dist/css/bootstrap.min.css")}} rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	@yield('css')
	<style>
	.footer {
		position: fixed;
		left: 0;
		bottom: 0;
		width: 100%;
		height: 50px;
		background-color: black;
		color: white;
		text-align: center;
	}
	
</style>


	

		
	
			

</head>
	


<body>
    
		@include('layouts.navbar')
		@yield('content')
	
		
		@include('layouts.footer')
		
		
		
				
		
			
		
</body>
<script src={{asset("asset/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js")}}></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

	  @yield('script')




</body>
</html>
