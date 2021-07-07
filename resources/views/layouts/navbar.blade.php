{{-- navbar --}}
<header>
	<div class="collapse bg-dark" id="navbarHeader">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-7 py-4">
					<h4 class="text-white">Menu</h4>
					<ul class="list-unstyled">
						<li><a href={{url("index")}} class="text-white">หน้าแรก</a></li>
						<li><a href={{url("todo")}} class="text-white">Todo List</a></li>
					</ul>
				</div>
				<div class="col-sm-4 offset-md-1 py-4">
					<h4 class="text-white">Report</h4>
					<ul class="list-unstyled">
						<li><a href={{route("report.member")}} class="text-white">รายงานข้อมูลสมาชิก</a></li>
						
					</ul>
					<ul class="list-unstyled">
						<li><a href={{route("report.logfilelogin")}} class="text-white">รายงานสถานะผู้ใช้ล็อกอิน</a></li>
						
					</ul>
					<ul class="list-unstyled">
						<li><a href={{route("report.todolist")}} class="text-white">รายงาน todolist</a></li>
						
					</ul>
				</div>
				
			</div>
		</div>
	</div>
	<div class="navbar navbar-dark bg-dark shadow-sm">
		<div class="container">
			<a href="#" class="navbar-brand d-flex align-items-center">
				
				<img width="40" height="40" src={{asset("asset\imagescontrolweb\logo-login.png" )}}>
				<strong>Project Login->{{Auth::user()->firstname.' '.Auth::user()->lastname;}}</strong>
				
			</a>
			<a href={{route("logout")}} class="navbar-brand d-flex align-items-center">
				
				<img width="40" height="40" src={{asset("asset\imagescontrolweb\logo-logout.png" )}}>
				<strong>Logout</strong>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
	</div>
</header>