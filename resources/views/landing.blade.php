<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Movie Review</title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="{{asset('land/fonts/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="{{asset('land/style.css')}}">

    <!--[if lt IE 9]>
		<script src="{{asset('land/js/ie-support/html5.js')}}"></script>
		<script src="{{asset('land/js/ie-support/respond.js')}}"></script>
		<![endif]-->

    <style>
        .login-wrapper {
            z-index: 1000;
            height: 100%;
            width: 100%;
            position: fixed;
            background-color: rgba(174, 171, 171, 0.8);
            display: none;
        }

        .card {
            background-color: white;
            width: 40%;
            margin: auto;
            margin-top: 10%;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.5);
            padding: 30px;
        }

        .row {
            display: flex;
            padding: 0px 15px;
        }

        .card-header {}

        .text-right {
            text-align: right;
            float: right;
        }

        .form-control {
            width: 100%;
            display: block;
            margin-top: 5px;
        }

        .form-group {
            margin: 20px 0px;
        }

        .login-btn {
            min-width: 150px;
        }

        .remember-span {
            margin-left: 5px
        }

        .remember {
            margin-left: 5px;
        }

        .close-btn {
            background-color: rgb(199, 60, 60);
            color: white;
        }
    </style>
</head>


<body>

    <div class="login-wrapper" id="login-content">
        <div class="login-content card">
            <div class="card-header">
                <div class="row">
                    <h3>Login</h3>
                    <div class="text-right">
                        <a onclick="closeLoginModal()" class="close text-right">x</a>
                    </div>
                </div>
                <hr>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="username">
                        Username:
                    </label>

                    <input type="email" class="form-control" @error('email') is-invalid @enderror name="email"
                        value="{{ old('email') }}" placeholder="Enter email address" required="required" />

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">
                        Password:
                    </label>
                    <input type="password" class="form-control" @error('password') is-invalid @enderror" name="password"
                        required autocomplete="current-password" required="required" />

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="remember">
                        <div>
                            <input type="checkbox" name="remember" value="Remember me"><span
                                class="remember-span">Remember me</span>
                        </div>
                        {{-- <a href="#">Forget password ?</a> --}}
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" onclick="closeLoginModal()" class="close-btn">Close</button>
                    <button type="submit" class="login-btn">Login</button>
                </div>
            </form>
        </div>
    </div>


    <div id="site-content">
        <header class="site-header">
            <div class="container">
                <a href="index.html" id="branding">
                    <img src="{{asset('land/images/logo.png')}}" alt="" class="logo">
                    <div class="logo-copy">
                        <h1 class="site-title">AWARD</h1>
                        <small class="site-description">FOR Music & Movie</small>
                    </div>
                </a> <!-- #branding -->

                <div class="main-navigation">
                    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu">
                        <li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
                        <li class="menu-item"><a href="{{url('gallery')}}">Gallery</a></li>
                        @guest
                        <li class="menu-item"><a onclick="openLoginModal()">Login</a></li>
                        <li class="menu-item"><a href="{{url('register')}}">register</a></li>
                        @else
                        <li class="menu-item"><a href="{{url('home')}}">My votes</a></li>
                        @endguest
                        <li class="menu-item"><a href="{{url('contact')}}	">Contact</a></li>
                    </ul> <!-- .menu -->

                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search...">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div> <!-- .main-navigation -->

                <div class="mobile-navigation"></div>
            </div>
        </header>
        <main class="main-content">
            <div class="container">
                <div class="page">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="slider">
                                <ul class="slides">
                                    <li><a href="#"><img src="{{asset('land/dummy/b5.jpeg')}}" alt="Slide 1"></a></li>
                                    <li><a href="#"><img src="{{asset('land/dummy/b2.jpg')}}" alt="Slide 2"></a></li>
                                    <li><a href="#"><img src="{{asset('land/dummy/a12.jpg')}}" alt="Slide 3"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-sm-6 col-md-12">
                                    <div class="latest-movie">
                                        <a href="#"><img src="{{asset('land/dummy/a1.jpg')}}" alt="Movie 1"></a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="latest-movie">
                                        <a href="#"><img src="{{asset('land/dummy/a4.jpg')}}" alt="Movie 2"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .row -->
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="latest-movie">
                                <a href="#"><img src="{{asset('land/dummy/a14.jpg')}}" alt="Movie 3"></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="latest-movie">
                                <a href="#"><img src="{{asset('land/dummy/b3.jpg')}}" alt="Movie 4"></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="latest-movie">
                                <a href="#"><img src="{{asset('land/dummy/b5.jpeg')}}" alt="Movie 5"></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="latest-movie">
                                <a href="#"><img src="{{asset('land/dummy/a11.jpg')}}" alt="Movie 6"></a>
                            </div>
                        </div>
                    </div> <!-- .row -->
                    <!-- .container -->
        </main>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">About Us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia tempore vitae mollitia
                                nesciunt saepe cupiditate</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">Recent Review</h3>
                            <ul class="no-bullet">
                                <li><a href="#">Lorem ipsum dolor</a></li>
                                <li><a href="#">Sit amet consecture</a></li>
                                <li><a href="#">Dolorem respequem</a></li>
                                <li><a href="#">Invenore veritae</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">Help Center</h3>
                            <ul class="no-bullet">
                                <li><a href="#">Lorem ipsum dolor</a></li>
                                <li><a href="#">Sit amet consecture</a></li>
                                <li><a href="#">Dolorem respequem</a></li>
                                <li><a href="#">Invenore veritae</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">Join Us</h3>
                            <ul class="no-bullet">
                                <li><a href="#">Lorem ipsum dolor</a></li>
                                <li><a href="#">Sit amet consecture</a></li>
                                <li><a href="#">Dolorem respequem</a></li>
                                <li><a href="#">Invenore veritae</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">Social Media</h3>
                            <ul class="no-bullet">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Google+</a></li>
                                <li><a href="#">Pinterest</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">Newsletter</h3>
                            <form action="#" class="subscribe-form">
                                <input type="text" placeholder="Email Address">
                            </form>
                        </div>
                    </div>
                </div> <!-- .row -->

                <div class="colophon">Copyright 2014 Company name, Designed by Themezy. All rights reserved</div>
            </div> <!-- .container -->

        </footer>
    </div>
    <!-- Default snippet for navigation -->


    <script>
        function closeLoginModal() {
            document.getElementById('login-content').style.display = "none"
        }
        
        function openLoginModal() {
            document.getElementById('login-content').style.display = "block"
        }
    </script>

    <script src="{{asset('land/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('land/js/plugins.js')}}"></script>
    <script src="{{asset('land/js/app.js')}}"></script>

</body>

</html>