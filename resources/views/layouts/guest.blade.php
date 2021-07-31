<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- homev2_light16:29-->

<head>
  <!-- Basic need -->
  <title>Open Pediatrics</title>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="profile" href="#">

  <!--Google Font-->
  <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
  <!-- Mobile specific meta -->
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone-no">

  <!-- CSS files -->
  <link rel="stylesheet" href="{{asset('landing/css/plugins.css')}}">
  <link rel="stylesheet" href="{{asset('landing/css/style.css')}}">

</head>

<body>>
  <!--login form popup-->
  <div class="login-wrapper" id="login-content">
    <div class="login-content">
      <a href="#" class="close">x</a>
      <h3>Login</h3>
      <form method="post" action="#">
        <div class="row">
          <label for="username">
            Username:
            <input type="text" name="username" id="username" placeholder="Hugh Jackman"
              pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
          </label>
        </div>

        <div class="row">
          <label for="password">
            Password:
            <input type="password" name="password" id="password" placeholder="******"
              pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
          </label>
        </div>
        <div class="row">
          <div class="remember">
            <div>
              <input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
            </div>
            {{-- <a href="#">Forget password ?</a> --}}
          </div>
        </div>
        <div class="row">
          <button type="submit">Login</button>
        </div>
      </form>
    </div>
  </div>
  <!--end of login form popup-->
  <!--signup form popup-->
  <div class="login-wrapper" id="signup-content">
    <div class="login-content">
      <a href="#" class="close">x</a>
      <h3>sign up</h3>
      <form method="post" action="#">
        <div class="row">
          <label for="username-2">
            Username:
            <input type="text" name="username" id="username-2" placeholder="Hugh Jackman"
              pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
          </label>
        </div>

        <div class="row">
          <label for="email-2">
            your email:
            <input type="password" name="email" id="email-2" placeholder=""
              pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
          </label>
        </div>
        <div class="row">
          <label for="password-2">
            Password:
            <input type="password" name="password" id="password-2" placeholder=""
              pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
          </label>
        </div>
        <div class="row">
          <label for="repassword-2">
            re-type Password:
            <input type="password" name="password" id="repassword-2" placeholder=""
              pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
          </label>
        </div>
        <div class="row">
          <button type="submit">sign up</button>
        </div>
      </form>
    </div>
  </div>
  <!--end of signup form popup-->

  <!-- BEGIN | Header -->
  <header class="ht-header full-width-hd" id="header-light">
    <div class="row">
      <nav id="mainNav" class="navbar navbar-default navbar-custom">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header logo">
          <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <div id="nav-icon1">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <a href="{{url('/')}}"><img class="logo" src="{{asset('landing/images/logo2.png')}}" alt="" width="119"
              height="58"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav flex-child-menu menu-left">
            <li class="hidden">
              <a href="#page-top"></a>
            </li>
            <li class="dropdown first">
              <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                movies
              </a>
            </li>

            <li class="dropdown first">
              <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                Music
              </a>
            </li>
          </ul>
          <ul class="nav navbar-nav flex-child-menu menu-right">
            <li><a href="#">Help</a></li>
            <li class="loginLink"><a href="{{url('login')}}">LOG In</a></li>
            <li class="btn signupLink"><a href="{{url('register')}}">sign up</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
      <!-- search form -->
    </div>

  </header>
  <!-- END | Header -->

  @yield('content')
  <!-- footer v2 section-->
  <footer class="ht-footer full-width-ft">
    <div class="row">
      <div class="flex-parent-ft">
        <div class="flex-child-ft item1">
          <a href="{{url('/')}}"><img class="logo" src="{{asset('landing/images/logo1.png"')}} alt=""></a>
				 <p>Ethiopia Addis Ababa<br>
				Asko, Addis sefer</p>
				<p>Call us: <a href=" #">(+251) 923760796</a></p>
        </div>
        <div class="flex-child-ft item2">
          <h4>Resources</h4>
          <ul>
            <li><a href="#">Movies</a></li>
            <li><a href="#">Musics</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Help Center</a></li>
          </ul>
        </div>
        <div class="flex-child-ft item3">
          <h4>Legal</h4>
          <ul>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Security</a></li>
          </ul>
        </div>
        <div class="flex-child-ft item4">
          <h4>Account</h4>
          <ul>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Change password</a></li>
          </ul>
        </div>
      </div>
      <div class="ft-copyright">
        <div class="ft-left">
          <p><a target="_blank" href="#">አዋርድ</a></p>
        </div>
        <div class="backtotop">
          <p><a href="#" id="back-to-top">Back to top <i class="ion-ios-arrow-thin-up"></i></a></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- end of footer v2 section-->

  <script src="{{asset('landing/js/jquery.js')}}"></script>
  <script src="{{asset('landing/js/plugins.js')}}"></script>
  <script src="{{asset('landing/js/plugins2.js')}}"></script>
  <script src="{{asset('landing/js/custom.js')}}"></script>
</body>

<!-- homev2_light16:30-->

</html>