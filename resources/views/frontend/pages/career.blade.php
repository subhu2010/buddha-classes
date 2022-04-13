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
				<li>Career</li>
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
		<ul class="career-list">
			<li>
				<a href="{{url('career-detail')}}">
					<strong class="job-title">
						Job Title
						<span>Kathmandu, Nepal</span>
					</strong>
					<span class="btn learn-btn">Apply</span>
				</a>
			</li>
			<li>
				<a href="{{url('career-detail')}}">
					<strong class="job-title">
						Job Title
						<span>Kathmandu, Nepal</span>
					</strong>
					<span class="btn learn-btn">Apply</span>
				</a>
			</li>
			<li>
				<a href="{{url('career-detail')}}">
					<strong class="job-title">
						Job Title
						<span>Kathmandu, Nepal</span>
					</strong>
					<span class="btn learn-btn">Apply</span>
				</a>
			</li>
		</ul>
	</div>
</div>


@endsection