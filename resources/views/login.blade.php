@extends("layouts.master", ['title'=> "Login"])
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
			<span>Login</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->
@endsection