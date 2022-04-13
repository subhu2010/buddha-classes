@extends('frontend.layout.welcome')



@section('content')

<div class="inner-banner inner-bg2">
	<div class="container">
		<div class="inner-title text-center">
			<h3>About Us</h3>
			<ul>
				<li>
					<a href="{{url('/')}}">Home</a>
				</li>
				<li>
					<i class="fas fa-chevron-right"></i>
				</li>
				<li>About Us</li>
			</ul>
		</div>
	</div>
</div>

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


<div class="choose-area pa-tb">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="mission-img">
					<img src="{{url('images/3.jpg')}}" class="img-fluid" alt="Images" onerror="this.src='{{ URL::asset('images/no-image.jpg') }}';">
				</div>
			</div>
			<div class="col-lg-7">
				<div class="section-title">
					<span>Why Choose Us</span>
					<h2>Trusted Consulting Company To Give You Right Guideline</h2>
				</div>
				<!-- Nav tabs -->
				<ul class="nav nav-pills custom-nav-pills mt-4" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="mission-tab" data-toggle="tab" href="#mission" role="tab" aria-controls="mission" aria-selected="true">Mission</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="vission-tab" data-toggle="tab" href="#vission" role="tab" aria-controls="vission" aria-selected="false">Vission</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content mt-3">
					<div class="tab-pane fade show active" id="mission" role="tabpanel" aria-labelledby="mission-tab">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<div class="tab-pane fade" id="vission" role="tabpanel" aria-labelledby="vission-tab">
						<p>Donec eleifend ex erat, quis posuere augue laoreet et. Praesent elit nunc, dictum in condimentum vel, luctus eleifend lacus. Cras eleifend purus et augue scelerisque, eu suscipit arcu pellentesque. Morbi molestie tellus libero, et tincidunt ex viverra vitae. Sed vitae ligula erat. Fusce a arcu et mi scelerisque scelerisque. Aenean hendrerit consequat dolor a sagittis. Vivamus vel nunc semper odio sodales pretium. Curabitur interdum elementum turpis, in congue neque imperdiet quis. Quisque iaculis, magna et condimentum sodales, elit felis aliquet nibh, id auctor mauris orci sed mi</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

@endsection