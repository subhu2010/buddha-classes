@extends('frontend.layout.welcome')



@section('content')

<!-- home carousel -->
<div id="homeCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="{{url('images/1.jpg')}}" class="d-block w-100" alt="" onerror="this.src='{{ URL::asset('images/no-image.jpg') }}';">
			<div class="banner-content banner-two-content">
				<span>20+ Years Of Experience</span>
				<h1>Meet Our Experts &amp; Get Better Result &amp; Success</h1>
				<form class="d-flex justify-conetnt-center align-items-center">
					<input class="form-control border-0 rounded-0" type="search" placeholder="Search" aria-label="Search">
					<div class="banner-btn">
						<button class="btn contact-btn">Search</button>
					</div>
				</form>
			</div>
		</div>
		<div class="carousel-item">
			<img src="{{url('images/2.jpg')}}" class="d-block w-100" alt="" onerror="this.src='{{ URL::asset('images/no-image.jpg') }}';">
			<div class="banner-content banner-two-content">
				<span>20+ Years Of Experience</span>
				<h1>Meet Our Experts &amp; Get Better Result &amp; Success</h1>
				<form class="d-flex justify-conetnt-center align-items-center">
					<input class="form-control border-0 rounded-0" type="search" placeholder="Search" aria-label="Search">
					<div class="banner-btn">
						<button class="btn contact-btn">Search</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-target="#homeCarousel" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-target="#homeCarousel" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</button>
</div>

<!-- home about -->
<div class="about-area pa-t" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="about-content">
					<span>About Us</span>
					<h2>We Are Standing With <b>30+</b> Years Of Experience</h2>
					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h3>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.


					</p>
					<p>Dignissim arcu sit amet finibus.Aenean pulvinar ornare erat. Donec a massa sed ipsum fringilla rhoncus.</p>
					<div class="row">
						<div class="col-lg-4 col-md-4 pe-0">
							<div class="about-counter">
								<i class="fas fa-medal"></i>
								<div class="content">
									<h3>1200+</h3>
									<span>Award Winner</span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 pe-0">
							<div class="about-counter">
								<i class="fas fa-users"></i>
								<div class="content">
									<h3>30+</h3>
									<span>Years Experience</span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 pe-0">
							<div class="about-counter">
								<i class="fas fa-briefcase"></i>
								<div class="content">
									<h3>5000+</h3>
									<span>Business Guide</span>
								</div>
							</div>
						</div>
					</div>
					<div class="about-btn">
						<a href="{{url('about-us')}}" class="learn-btn">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about-img-2">
					<img src="{{url('images/3.jpg')}}" class="img-fluid" alt="Images" onerror="this.src='{{ URL::asset('images/no-image.jpg') }}';">
					<div class="about-img-small-2">
						<img src="{{url('images/4.jpg')}}" class="img-fluid" alt="Images" onerror="this.src='{{ URL::asset('images/no-image.jpg') }}';">
					</div>
					<div class="about-dots d-none d-lg-block">
						<img src="{{url('images/about-dots.png')}}" class="img-fluid" alt="Images" onerror="this.src='{{ URL::asset('images/no-image.jpg') }}';">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- home service -->
<div class="service-area-two pa-tb">
	<div class="container">
		<div class="section-title text-center">
			<span>Our Services</span>
			<h2>Our Best Consulting Services Make You To Reach Your Goal</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rhoncus mauris ac urna finibus pellentesque. Sed pellentesque augue sit amet mauris porta suscipit.</p>
		</div>
		<div class="row mt-5">
			<div class="col-lg-4 col-md-6">
				<div class="service-item">
					<div class="images">
						<a href="{{url('service-detail')}}">
							<img src="{{url('images/5.jpg')}}" alt="Images">
						</a>
						<a href="{{url('service-detail')}}" class="service-item-more">
							<i class="fas fa-angle-double-right"></i>
						</a>
					</div>
					<div class="content">
						<h3><a href="{{url('service-detail')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h3>
						<p>Sed vel risus a sem cursus fermentum. Aliquam a fermentum velit. Sed varius nisl libero, at tempor lectus mollis.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-item">
					<div class="images">
						<a href="{{url('service-detail')}}">
							<img src="{{url('images/6.jpg')}}" alt="Images">
						</a>
						<a href="{{url('service-detail')}}" class="service-item-more">
							<i class="fas fa-angle-double-right"></i>
						</a>
					</div>
					<div class="content">
						<h3><a href="{{url('service-detail')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h3>
						<p>Sed vel risus a sem cursus fermentum. Aliquam a fermentum velit. Sed varius nisl libero, at tempor lectus mollis.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-item">
					<div class="images">
						<a href="{{url('service-detail')}}">
							<img src="{{url('images/7.jpg')}}" alt="Images">
						</a>
						<a href="{{url('service-detail')}}" class="service-item-more">
							<i class="fas fa-angle-double-right"></i>
						</a>
					</div>
					<div class="content">
						<h3><a href="{{url('service-detail')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h3>
						<p>Sed vel risus a sem cursus fermentum. Aliquam a fermentum velit. Sed varius nisl libero, at tempor lectus mollis.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-item">
					<div class="images">
						<a href="{{url('service-detail')}}">
							<img src="{{url('images/8.jpg')}}" alt="Images">
						</a>
						<a href="{{url('service-detail')}}" class="service-item-more">
							<i class="fas fa-angle-double-right"></i>
						</a>
					</div>
					<div class="content">
						<h3><a href="{{url('service-detail')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h3>
						<p>Sed vel risus a sem cursus fermentum. Aliquam a fermentum velit. Sed varius nisl libero, at tempor lectus mollis.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-item">
					<div class="images">
						<a href="{{url('service-detail')}}">
							<img src="{{url('images/6.jpg')}}" alt="Images">
						</a>
						<a href="{{url('service-detail')}}" class="service-item-more">
							<i class="fas fa-angle-double-right"></i>
						</a>
					</div>
					<div class="content">
						<h3><a href="{{url('service-detail')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h3>
						<p>Sed vel risus a sem cursus fermentum. Aliquam a fermentum velit. Sed varius nisl libero, at tempor lectus mollis.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-item">
					<div class="images">
						<a href="{{url('service-detail')}}">
							<img src="{{url('images/7.jpg')}}" alt="Images">
						</a>
						<a href="{{url('service-detail')}}" class="service-item-more">
							<i class="fas fa-angle-double-right"></i>
						</a>
					</div>
					<div class="content">
						<h3><a href="{{url('service-detail')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h3>
						<p>Sed vel risus a sem cursus fermentum. Aliquam a fermentum velit. Sed varius nisl libero, at tempor lectus mollis.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="service-view-btn text-center">
			<a href="{{url('service')}}" class="view-btn">View More</a>
		</div>
	</div>
</div>

<!-- home program -->
<div class="service-area-two pa-t">
	<div class="container">
		<div class="section-title text-center">
			<span>Our Program</span>
			<h2>Some Of Our Program</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rhoncus mauris ac urna finibus pellentesque. Sed pellentesque augue sit amet mauris porta suscipit.</p>
		</div>
		<div class="row mt-5">
			<div class="col-lg-4 col-md-6">
				<div class="project-card">
					<a href="{{url('program-detail')}}">
						<div class="project-card-img">
							<img src="{{url('images/6.jpg')}}" alt="Images">
						</div>
					</a>
					<div class="project-content project-content-bg">
						<h3><a href="{{url('program-detail')}}">Title goes here</a></h3>
						<div class="content">
							<p>Sed vel risus a sem cursus fermentum. Aliquam a fermentum velit. Sed varius nisl libero, at tempor lectus mollis.</p>
							<a href="{{url('program-detail')}}" class="project-more">
								<i class="fas fa-angle-double-right"></i>
							</a>
						</div>
						<div class="project-card-bottom"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="project-card">
					<a href="{{url('program-detail')}}">
						<div class="project-card-img">
							<img src="{{url('images/7.jpg')}}" alt="Images">
						</div>
					</a>
					<div class="project-content project-content-bg">
						<h3><a href="{{url('program-detail')}}">Title goes here</a></h3>
						<div class="content">
							<p>Sed vel risus a sem cursus fermentum. Aliquam a fermentum velit. Sed varius nisl libero, at tempor lectus mollis.</p>
							<a href="{{url('program-detail')}}" class="project-more">
								<i class="fas fa-angle-double-right"></i>
							</a>
						</div>
						<div class="project-card-bottom"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="project-card">
					<a href="{{url('program-detail')}}">
						<div class="project-card-img">
							<img src="{{url('images/5.jpg')}}" alt="Images">
						</div>
					</a>
					<div class="project-content project-content-bg">
						<h3><a href="{{url('program-detail')}}">Title goes here</a></h3>
						<div class="content">
							<p>Sed vel risus a sem cursus fermentum. Aliquam a fermentum velit. Sed varius nisl libero, at tempor lectus mollis.</p>
							<a href="{{url('program-detail')}}" class="project-more">
								<i class="fas fa-angle-double-right"></i>
							</a>
						</div>
						<div class="project-card-bottom"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="project-card">
					<a href="{{url('program-detail')}}">
						<div class="project-card-img">
							<img src="{{url('images/8.jpg')}}" alt="Images">
						</div>
					</a>
					<div class="project-content project-content-bg">
						<h3><a href="{{url('program-detail')}}">Title goes here</a></h3>
						<div class="content">
							<p>Sed vel risus a sem cursus fermentum. Aliquam a fermentum velit. Sed varius nisl libero, at tempor lectus mollis.</p>
							<a href="{{url('program-detail')}}" class="project-more">
								<i class="fas fa-angle-double-right"></i>
							</a>
						</div>
						<div class="project-card-bottom"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="project-card">
					<a href="{{url('program-detail')}}">
						<div class="project-card-img">
							<img src="{{url('images/5.jpg')}}" alt="Images">
						</div>
					</a>
					<div class="project-content project-content-bg">
						<h3><a href="{{url('program-detail')}}">Title goes here</a></h3>
						<div class="content">
							<p>Sed vel risus a sem cursus fermentum. Aliquam a fermentum velit. Sed varius nisl libero, at tempor lectus mollis.</p>
							<a href="{{url('program-detail')}}" class="project-more">
								<i class="fas fa-angle-double-right"></i>
							</a>
						</div>
						<div class="project-card-bottom"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="project-card">
					<a href="{{url('program-detail')}}">
						<div class="project-card-img">
							<img src="{{url('images/6.jpg')}}" alt="Images">
						</div>
					</a>
					<div class="project-content project-content-bg">
						<h3><a href="{{url('program-detail')}}">Title goes here</a></h3>
						<div class="content">
							<p>Sed vel risus a sem cursus fermentum. Aliquam a fermentum velit. Sed varius nisl libero, at tempor lectus mollis.</p>
							<a href="{{url('program-detail')}}" class="project-more">
								<i class="fas fa-angle-double-right"></i>
							</a>
						</div>
						<div class="project-card-bottom"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- home blog -->
<div class="service-area-two pa-tb">
	<div class="container">
		<div class="section-title text-center">
			<span>Our Blog</span>
			<h2>Some Of Our Blog</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rhoncus mauris ac urna finibus pellentesque. Sed pellentesque augue sit amet mauris porta suscipit.</p>
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

<!-- home testimonial -->
<div class="service-area-two pa-tb">
	<div class="container">
		<div class="section-title text-center mb-5">
			<span>Clients Review</span>
			<h2>Our Lovely Clients Get Helped From Our Company</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et amet bibendum ante.
				Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
				curae pellentesque .
			</p>
		</div>

		<div class="owl-carousel owl-theme owl-testimonial">
			<div class="item p-2">
				<div class="client-card">
					<h3>Sinthy Alina</h3>
					<span>CEO Of Finec</span>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non ullamcorper
						tortor, vel mattis mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
					<i class="fas fa-quote-left client-card-quote"></i>
					<div class="client-card-img">
						<img src="{{url('images/agents-01.jpg')}}" alt="Images">
					</div>
				</div>
			</div>
			<div class="item p-2">
				<div class="client-card">
					<h3>Sinthy Alina</h3>
					<span>CEO Of Finec</span>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non ullamcorper
						tortor, vel mattis mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
					<i class="fas fa-quote-left client-card-quote"></i>
					<div class="client-card-img">
						<img src="{{url('images/agents-01.jpg')}}" alt="Images">
					</div>
				</div>
			</div>
			<div class="item p-2">
				<div class="client-card">
					<h3>Sinthy Alina</h3>
					<span>CEO Of Finec</span>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non ullamcorper
						tortor, vel mattis mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
					<i class="fas fa-quote-left client-card-quote"></i>
					<div class="client-card-img">
						<img src="{{url('images/agents-01.jpg')}}" alt="Images">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- our partner -->
<div class="service-area-two pa-tb">
	<div class="container">
		<div class="section-title text-center mb-5">
			<span>Clients Review</span>
			<h2>Our Lovely Clients Get Helped From Our Company</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et amet bibendum ante.
				Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
				curae pellentesque .
			</p>
		</div>

		<div class="owl-carousel owl-theme owl-partner">
			<div class="item">
				<div class="partner-logo">
					<a href="#" target="_blank">
						<img src="https://source.unsplash.com/random/300x200?sig=1">
					</a>
				</div>
			</div>
			<div class="item">
				<div class="partner-logo">
					<a href="#" target="_blank">
						<img src="https://source.unsplash.com/random/300x200?logo=2">
					</a>
				</div>
			</div>
			<div class="item">
				<div class="partner-logo">
					<a href="#" target="_blank">
						<img src="https://source.unsplash.com/random/300x200?sig=3">
					</a>
				</div>
			</div>
			<div class="item">
				<div class="partner-logo">
					<a href="#" target="_blank">
						<img src="https://source.unsplash.com/random/300x200?sig=4">
					</a>
				</div>
			</div>
			<div class="item">
				<div class="partner-logo">
					<a href="#" target="_blank">
						<img src="https://source.unsplash.com/random/300x200?sig=5">
					</a>
				</div>
			</div>
			<div class="item">
				<div class="partner-logo">
					<a href="#" target="_blank">
						<img src="https://source.unsplash.com/random/300x200?sig=6">
					</a>
				</div>
			</div>
			<div class="item">
				<div class="partner-logo">
					<a href="#" target="_blank">
						<img src="https://source.unsplash.com/random/300x200?sig=7">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection