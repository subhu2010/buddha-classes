@extends('frontend.layout.welcome')



@section('content')

<div class="inner-banner inner-bg2">
	<div class="container">
		<div class="inner-title text-center">
			<h3>Blog</h3>
			<ul>
				<li>
					<a href="{{url('/')}}">Home</a>
				</li>
				<li>
					<i class="fas fa-chevron-right"></i>
				</li>
				<li>Blog</li>
			</ul>
		</div>
	</div>
</div>

<div class="service-area-two pa-tb">
	<div class="container">
		<div class="section-title text-center">
			<h2>Our Blog</h2>
		</div>
		<div class="row mt-5">
			<div class="col-lg-4 col-md-6">
				<div class="blog-card">
					<a href="{{url('blog-detail')}}">
						<div class="blog-card-img">
							<img src="{{url('images/3.jpg')}}" alt="Images">
						</div>
					</a>
					<div class="content">
						<h3><a href="{{url('blog-detail')}}">Blog Title</a></h3>
						<ul>
							<li>By <a href="#">ADMIN </a> /</li>
							<li><span>20</span> COMMENTS /</li>
							<li><span>28</span> VIEWS</li>
						</ul>
						<p>Sed vel risus a sem cursus fermentum. Aliquam a fermentum velit. Sed varius nisl libero, at tempor lectus mollis. </p>
						<a href="{{url('blog-detail')}}" class="learn-btn text-center">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="blog-card">
					<a href="{{url('blog-detail')}}">
						<div class="blog-card-img">
							<img src="{{url('images/8.jpg')}}" alt="Images">
						</div>
					</a>
					<div class="content">
						<h3><a href="{{url('blog-detail')}}">Blog Title</a></h3>
						<ul>
							<li>By <a href="#">ADMIN </a> /</li>
							<li><span>20</span> COMMENTS /</li>
							<li><span>28</span> VIEWS</li>
						</ul>
						<p>Sed vel risus a sem cursus fermentum. Aliquam a fermentum velit. Sed varius nisl libero, at tempor lectus mollis. </p>
						<a href="{{url('blog-detail')}}" class="learn-btn text-center">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="blog-card">
					<a href="{{url('blog-detail')}}">
						<div class="blog-card-img">
							<img src="{{url('images/6.jpg')}}" alt="Images">
						</div>
					</a>
					<div class="content">
						<h3><a href="{{url('blog-detail')}}">Blog Title</a></h3>
						<ul>
							<li>By <a href="#">ADMIN </a> /</li>
							<li><span>20</span> COMMENTS /</li>
							<li><span>28</span> VIEWS</li>
						</ul>
						<p>Sed vel risus a sem cursus fermentum. Aliquam a fermentum velit. Sed varius nisl libero, at tempor lectus mollis. </p>
						<a href="{{url('blog-detail')}}" class="learn-btn text-center">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection