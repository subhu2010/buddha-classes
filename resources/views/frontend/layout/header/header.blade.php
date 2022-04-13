<div class="top-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="header-left">
                    <div class="header-left-card">
                        <ul>
                            <li>
                                <div class="head-icon">
                                    <i class="fas fa-map-marker"></i>
                                </div>
                                <a href="#">Kathmandu, Nepal</a>
                            </li>
                            <li>
                                <div class="head-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <a href="mailto:info@gmail.com">info@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 clearfix">
                <div class="header-right">
                    <div class="top-social-link">
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button type="button" class="btn request-btn" data-toggle="modal" data-target="#requestCall">Request A Callback</button>
                </div>
            </div>
        </div>
    </div>
</div>



<header class="home-menu bg-custom"  id="navbar">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{url('/')}}">
                <div class="logo">
                    <img src="{{url('images/logo.png')}}" class="img-fluid" alt="">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ (request()->is('/*')) ? 'active' : '' }}">
                        <a class="nav-link menu-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item {{ (request()->is('about-us*')) ? 'active' : '' }}">
                        <a class="nav-link menu-link" href="{{url('about-us')}}">About Us</a>
                    </li>
                    <li class="nav-item {{ (request()->is('our-program*')) ? 'active' : '' }} dropdown">
                        <a class="nav-link menu-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Our Program
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">Program One</a>
                            <a class="dropdown-item" href="">Program Two</a>
                            <a class="dropdown-item" href="">Program Three</a>
                        </div>
                    </li>
                    <li class="nav-item {{ (request()->is('service*')) ? 'active' : '' }}">
                        <a class="nav-link menu-link" href="{{url('service')}}">Services</a>
                    </li>
                    <li class="nav-item {{ (request()->is('blog*')) ? 'active' : '' }}">
                        <a class="nav-link menu-link" href="{{url('blog')}}">Blog</a>
                    </li>
                    <li class="nav-item {{ (request()->is('contact-us*')) ? 'active' : '' }}">
                        <a class="nav-link menu-link" href="{{url('contact-us')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>


<div class="modal fade" id="requestCall" tabindex="-1" aria-labelledby="requestCallLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="requestCallLabel">Request For Call</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="contactForm" novalidate="true">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group has-error">
                                <input type="text" name="name" id="name" class="form-control" required="" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="phone_number" id="phone_number" required=""class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required="" placeholder="Your Subject">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                               <textarea name="message" class="form-control" id="message" cols="30" rows="8" required="" placeholder="Your Message"></textarea>
                           </div>
                       </div>
                       <div class="col-lg-12 col-md-12 text-center">
                        <button type="submit" class="btn default-btn disabled">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>