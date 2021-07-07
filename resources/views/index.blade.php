{{-- หน้าแรก --}}
@extends('layouts.master')
@section('header')
<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0">หน้าแรก</h1>
	</div>
	
</div>
	
@endsection
@section('title')
หน้าแรก
@endsection
@section('content')

<div class="clearfix" style="margin-top:50px;"></div>

<header class="header">
		<div class="container">
				<div class="header_area">
						<h1>Welcome to my Login_Project</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
				</div>
		</div>
</header>

<section class="info1">
		<div class="container">
				<div class="info1_area">
						<img src={{asset("asset/imagesproject/index/car.jpg")}}  width="300" alt="car">
						<div class="info1_text">
								<h1>We working with performance</h1>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
						</div>
				</div>
		</div>
</section>

<section class="info2">
		<div class="container">
				<div class="info2_area">
						<div class="info2_text">
							<img src={{asset("asset/imagesproject/index/car1.jpg")}} width="300" alt="car1">
								
						</div>
					
				</div>
		</div>
</section>

<div class="clearfix"></div>





@endsection
