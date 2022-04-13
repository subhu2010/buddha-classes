@extends('frontend.layout.welcome')



@section('content')

<div class="inner-banner inner-bg2">
	<div class="container">
		<div class="inner-title text-center">
			<h3>Service</h3>
			<ul>
				<li>
					<a href="{{url('/')}}">Home</a>
				</li>
				<li>
					<i class="fas fa-chevron-right"></i>
				</li>
				<li>Service</li>
			</ul>
		</div>
	</div>
</div>

<div class="container my-5">
	<div class="section-title text-center">
		<h2>Our Services</h2>
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
</div>

@endsection