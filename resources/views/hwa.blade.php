@extends("layouts.master", ['title'=> "HWB - Home"])
@section("container")
	<nav class="nav-section">
		<div class="container">
			<div class="nav-right">
				<a href="connect"><i class="fa fa-user"></i></a>
			</div>
			<ul class="main-menu">
				<li class="active"><a href="#">HOME</a></li>
				<li><a href="blog">BLOG</a></li>
			</ul>
		</div>
	</nav>
	<!-- Header section end -->

	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-down"></i>
			<span>Ebooks</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
	<section class="full-courses-section spad pt-0">
		<div class="container">
			<div class="row">
				<!-- ebooks -->
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="img/ebook/pwk2020.png" alt="">
						<div class="course-cat">
							<span>Pentest</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 6 Sat 2020</div>
						<h4>Learn hacking<br>with offensive security</h4>
						<h4 class="cource-price"><a href="https://mega.nz/file/fQJjBIrZ#frWlbYEic4IeCMDbn9Izk5CLhwsWOuHNSC09sNgPBZ8">FREE<span>/Download</span></a></h4>
					</div>
				</div>
				<!-- ebooks -->
			</div>
			<div class="text-center">
				<ul class="site-pageination">
					<li><a href="#" class="active">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
		</div>
	</section>
@endsection