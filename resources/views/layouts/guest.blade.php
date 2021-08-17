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

    @yield('content')
    
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