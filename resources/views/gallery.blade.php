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
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
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
                <a href="{{url('/')}}" id="branding">
                    <img src="{{asset('land/images/log2.jpg')}}" alt="" class="logo">
                    <div class="logo-copy">
                        <h1 class="site-title">AWARD</h1>
                        <small class="site-description">FOR Music & Movie</small>
                    </div>
                </a> <!-- #branding -->

                <div class="main-navigation">
                    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu">
                        <li class="menu-item"><a href="{{url('/')}}">Home</a></li>
                        @guest
                        <li class="menu-item"><a onclick="openLoginModal()">Login</a></li>
                        <li class="menu-item"><a href="{{url('register')}}">register</a></li>
                        @else
                        <li class="menu-item"><a href="{{url('home')}}">My votes</a></li>
                        @endguest
                        <li class="menu-item"><a href="{{url('contact-us')}}	">Contact</a></li>
                    </ul> <!-- .menu -->

                    
                </div> <!-- .main-navigation -->

                <div class="mobile-navigation"></div>
            </div>
        </header>
        <main class="main-content">
            <div class="container">
                <div class="page">
                   
                            <div class="col-sm-6 col-md-12">
                               
                                <div class="row">
                                    <div class="col">
                            
                                        <h1>Image Gallery</h1> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="row">
                                        @foreach($images as $img)
                                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                                <a class="thumbnail" href="#">
                                                    <img class="img-thumbnail"
                                                         src="{{asset('image/')."/". $img->image}}"
                                                         alt="Another alt text">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="row">
                                        {{ $images->links() }}
                                    </div>
                            
                                    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="image-gallery-title"></h4>
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                                                                class="sr-only">Close</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i
                                                                class="fa fa-arrow-left"></i>
                                                    </button>
                            
                                                    <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i
                                                                class="fa fa-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> <!-- .row -->
                   
        </main>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">About Us</h3>
                            </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">Recent Review</h3>
                            
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">Help Center</h3>
                            
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">Social Media</h3>
                           
                        </div>
                    </div>
                   
                </div> <!-- .row -->

                <div class="colophon">Copyright 2021 CPU, Designed by CPU  Students. All rights reserved</div>
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