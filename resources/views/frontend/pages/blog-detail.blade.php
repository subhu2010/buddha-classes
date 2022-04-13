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


<div class="blog-details-area mt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="blog-article">
					<div class="blog-article-img">
						<img src="{{url('images/1.jpg')}}" alt="Images">
					</div>
					<div class="blog-status">
						<div class="row">
							<div class="col-lg-7 col-sm-7">
								<ul>
									<li>Written by <a href="#">Admin</a></li>
									<li>21 August, 2021</li>
								</ul>
							</div>
							<div class="col-lg-5 col-sm-5">
								<div class="blog-comment">
									<h3><i class='bx bxs-message-detail'></i> 32 Comments</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="article-content">
						<h2>Good Planning and Strategy is the Kye of a Successful Business</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
							et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
							ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
							nulla pariatur.
						</p>
						<p>
							Ecespiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
							eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
							ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
							ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quci velit modi tempora incidunt
							ut labore et dolore magnam aliquam quaerat voluptatem.
						</p>
					</div>
					<div class="blog-article-share">
						<ul class="social-icon">
							<li>
								Share This Post
							</li>
							<li>
								<a href="#">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="comments-wrap">
						<h3 class="title">Comments</h3>
						<ul>
							<li>
								<img src="https://source.unsplash.com/random/300x200?sig=11">
								<h3>John Doe</h3>
								<span>17th May,2021</span>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
									magna aliqua. Ut enim ad minim.
								</p>
								<a href="#"> Reply</a>
							</li>
							<li>
								<img src="https://source.unsplash.com/random/300x200?sig=10">
								<h3>Henry Lana</h3>
								<span>17th May,2021</span>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
									magna aliqua. Ut enim ad minim.
								</p>
								<a href="#"> Reply</a>
							</li>
							<li>
								<img src="https://source.unsplash.com/random/300x200?sig=9">
								<h3>Alina Decros</h3>
								<span>17th May,2021</span>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
									magna aliqua. Ut enim ad minim.
								</p>
								<a href="#"> Reply</a>
							</li>
						</ul>
					</div>
					<div class="comments-form">
						<div class="contact-form">
							<div class="section-title">
								<h2>Leave a comment</h2>
							</div>
							<form id="contactForm">
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<button type="submit" class="default-btn">
											Post A Comment
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="side-bar-wrap">
					<div class="side-bar-widget">
						<h3 class="title">Recent Posts</h3>
						<div class="widget-popular-post">
							<article class="item">
								<a href="{{url('blog-detail')}}" class="thumb">
									<span class="full-image cover bg1" role="img">
										<img src="https://source.unsplash.com/random/300x200?sig=1">
									</span>
								</a>
								<div class="info">
									<h4 class="title-text">
										<a href="{{url('blog-detail')}}">
											Success Depends on Strategy and Plan
										</a>
									</h4>
									<p>March 20, 2021</p>
								</div>
							</article>
							<article class="item">
								<a href="{{url('blog-detail')}}" class="thumb">
									<span class="full-image cover bg2" role="img">
										<img src="https://source.unsplash.com/random/300x200?sig=2">
									</span>
								</a>
								<div class="info">
									<h4 class="title-text">
										<a href="{{url('blog-detail')}}">
											Reaching the Goal With Best Consulting
										</a>
									</h4>
									<p>June 11, 2021</p>
								</div>
							</article>
							<article class="item">
								<a href="{{url('blog-detail')}}" class="thumb">
									<span class="full-image cover bg3" role="img">
										<img src="https://source.unsplash.com/random/300x200?sig=3">
									</span>
								</a>
								<div class="info">
									<h4 class="title-text">
										<a href="{{url('blog-detail')}}">
											Aim is to Reach My Goal With Best Plan
										</a>
									</h4>
									<p>August 10, 2021</p>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection