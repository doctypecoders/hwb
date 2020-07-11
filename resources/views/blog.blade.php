@extends("layouts.master", ['title'=> "Blog"])
@section("container")
	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			<div class="nav-right">
				<a href="connect"><i class="fa fa-user"></i></a>
			</div>
			<ul class="main-menu">
				<li ><a href="home">HOME</a></li>
				<li class="active"><a href="blog">BLOG</a></li>
			</ul>
		</div>
	</nav>
	<!-- Header section end -->
	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Blog</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->
	<section class="blog-page-section spad pt-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 post-list">
					<div class="post-item">
						<div class="post-content">
							<h3><a href="single-blog.html">Le livre ethical hacking c'est pourqui, au juste ?</a></h3>
							<div class="post-meta">
								<span><i class="fa fa-calendar-o"></i> 23 Mar 2018</span>
								<span><i class="fa fa-user"></i> {{ $user1 }}</span>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel urna eget lectus molestie rhoncus sed in nunc. Vestib tincidunt facilisis ligula sed viverra. Duis porttitor sapien maximus, volutpat massa malesuada. Curabitur orci est, molestie eget orci, tincidunt dictum felis. Cras ante nunc, pharetra eu rutrum aliquet, gestas eget ex. Suspendisse potenti vietlott Quisque asvitae eros efficitur lacus viverra molestie at ut mi. Quisque id mollis nibh...</p>
						</div>
					</div>
					<div class="post-item">
						<div class="post-content">
							<h3><a href="single-blog.html">Comment passer l'examen de ethical hacking?</a></h3>
							<div class="post-meta">
								<span><i class="fa fa-calendar-o"></i> 23 Mar 2018</span>
								<span><i class="fa fa-user"></i> {{ $user2 }}</span>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel urna eget lectus molestie rhoncus sed in nunc. Vestibulum tincidunt facilisis ligula sed viverra. Duis porttitor sapien maximus, volutpat massa malesuada. Curabitur orci est, ut molestie eget orci, tincidunt dictum felis. Cras ante nunc, pharetra eu rutrum aliquet, egestas eget ex. Suspendisse potenti. Quisque asvitae eros efficitur lacus viverra molestie at ut mi. Quisque id mollis nibh...</p>
						</div>
					</div>
					<div class="post-item">
						<div class="post-content">
							<h3><a href="single-blog.html">Pourquoi laravel ?</a></h3>
							<div class="post-meta">
								<span><i class="fa fa-calendar-o"></i> 23 Mar 2018</span>
								<span><i class="fa fa-user"></i> {{ $user3 }} </span>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel urna eget lectus molestie rhoncus sed in nunc. Vestibulum tincidunt facilisis ligula sed viverra. Duis porttitor sapien maximus, volutpat massa malesuada. Curabitur orci est, ut molestie eget orci, tincidunt dictum felis. Cras ante nunc, pharetra eu rutrum aliquet, egestas eget ex. Suspendisse potenti. Quisque asvitae eros efficitur lacus viverra molestie at ut mi. Quisque id mollis nibh...</p>
						</div>
					</div>
					<ul class="site-pageination">
						<li><a href="#" class="active">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
					</ul>
				</div>
				<!-- sidebar -->
				<div class="col-sm-8 col-md-5 col-lg-4 col-xl-3 offset-xl-1 offset-0 pl-xl-0 sidebar">
					<!-- widget -->
					<div class="widget">
						<form class="search-widget">
							<input type="text" placeholder="Search...">
							<button><i class="ti-search"></i></button>
						</form>
					</div>
					<!-- widget -->
					<div class="widget">
						<h4 class="widget-title">Catégories</h4>
						<ul>
							<li><a href="">Comptia</a>(10)</li>

						</ul>
					</div>
					<!-- widget -->
					<div class="widget">
						<img src="img/ad.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection