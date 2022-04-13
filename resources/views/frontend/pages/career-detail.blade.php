@extends('frontend.layout.welcome')



@section('content')

<div class="inner-banner inner-bg2">
	<div class="container">
		<div class="inner-title text-center">
			<h3>Career</h3>
			<ul>
				<li>
					<a href="{{url('/')}}">Home</a>
				</li>
				<li>
					<i class="fas fa-chevron-right"></i>
				</li>
				<li>Career Detail</li>
			</ul>
		</div>
	</div>
</div>

<div class="faq-area pa-tb">
	<div class="container">
		<div class="section-title text-center">
			<h2>Careers</h2>
		</div>
	</div>
	<div class="container">
		<div class="career-detail">
			<h3>Job Description</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		</div>
		<div class="section-title text-center mt-5">
			<h2>Apply Now</h2>
		</div>
		<div class="row mt-4">
			<div class="col-md-12">
				<div class="job-submit-form">
					<form>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="name" class="form-control" placeholder="Enter Name" required="">
								</div>
								<div class="form-group">
									<input type="number" name="phone_no" class="form-control" placeholder="Enter Phone Number" required="">
								</div>
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Enter Email Address" required="">
								</div>
								<div class="custom-file form-group">
									<input type="file" class="custom-file-input" id="customFile">
									<label class="custom-file-label " for="customFile">Choose file</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group view-more">
									<textarea class="form-control" placeholder="Message" name="message" required="" rows="8"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group view-more mb-0">
									<button type="submit" class="btn contact-form default-btn">Submit</button>
								</div>
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	$(".custom-file-input").on("change", function() {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	});
</script>

@endsection