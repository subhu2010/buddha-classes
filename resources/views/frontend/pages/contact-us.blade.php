@extends('frontend.layout.welcome')



@section('content')

<div class="inner-banner inner-bg2">
	<div class="container">
		<div class="inner-title text-center">
			<h3>Contact Us</h3>
			<ul>
				<li>
					<a href="{{url('/')}}">Home</a>
				</li>
				<li>
					<i class="fas fa-chevron-right"></i>
				</li>
				<li>Contact Us</li>
			</ul>
		</div>
	</div>
</div>

<div class="contact-section pa-tb">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-sm-6 col-md-4">
				<div class="contact-card">
					<i class="fas fa-mobile-alt"></i>
					<div class="content">
						<h3>Contact Number</h3>
						<p><a href="tel:+0123456789">+0123456789</a></p>
						<span><a href="tel:+9685743021">+9685743021</a></span>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-md-4">
				<div class="contact-card">
					<i class="fas fa-map-marker"></i>
					<div class="content">
						<h3>Address</h3>
						<p>Kathmandu, Bagmati</p>
						<span>Nepal</span>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-md-4 offset-lg-0 offset-md-0 offset-sm-3">
				<div class="contact-card">
					<i class="fas fa-envelope"></i>
					<div class="content">
						<h3>Email</h3>
						<p><a href="mailto:info@gmail.com">info@gmail.com</a></p>
						<span><a href="hello@gmail.com">hello@gmail.com</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="leader-area">
	<div class="container">
		<div class="leader-content">
			<div class="section-title text-center">
				<h2>Expand Your Presence And Be A Leader Of The World</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla amet bibendum ante.
					Vestibulum ante ipsum primis in faucibus orci
				</p>
			</div>
		</div>
	</div>
</div>

<div class="contact-area">
	<div class="container">
		<div class="contact-area-bg">
			<div class="row">
				<div class="col-lg-6">
					<div class="contact-form">
						<div class="section-title text-center">
							<h2>Consulting Quote</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ante nisi, feugiat vel leo eget, dictum.</p>
						</div>
						<form id="contactForm" novalidate="true">
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name" placeholder="Name">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Email">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="text" name="phone_number" id="phone_number" required="" data-error="Please enter your number" class="form-control" placeholder="Phone">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="text" name="msg_subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject" placeholder="Your Subject">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<textarea name="message" class="form-control" id="message" cols="30" rows="8" required="" data-error="Write your message" placeholder="Your Message"></textarea>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 text-center">
									<button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">
										Submit
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="map-area">
	<div class="container-fluid m-0 p-0">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14132.6123100282!2d85.3321332!3d27.6816633!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x75da09407eccb7d1!2sSoftbenz%20Infosys%3A%20IT%20Company%20in%20Nepal!5e0!3m2!1sen!2snp!4v1638458495759!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
</div>

@endsection