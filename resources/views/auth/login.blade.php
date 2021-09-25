<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Madecss/assets/img/favicon.png')}}">
    <title>Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('Madecss/assets/css/bootstrap.min.css')}}" rel="stylesheet">
   <!--<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <!-- Morries chart CSS -->
    <link href="{{asset('Madecss/assets/morris.css')}}" rel="stylesheet">
    
    
    <!-- Custom CSS -->
    <link href="{{asset('Madecss/assets/css/style.css')}}"rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('Madecss/assets/css/blue.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url('./Madecss/assets/images/login-register.jpg');">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" method="POST"action="{{ route('login') }}">
                        @csrf
                        <h3 class="box-title m-b-20">Sign In</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" 
                                name="email" value="{{ old('email') }}" placeholder="Username">
                                @error('email')
                                <strong>{{ $message }}</strong>
                                @enderror
                                 </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password"  
                                name="password"required autocomplete="current-password"placeholder="Password">
                                @error('password')
                                 <strong>{{ $message }}</strong>
                                  @enderror
                                 </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 font-14">
                                <div class="checkbox checkbox-primary pull-left p-t-0">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> Remember me </label>
                                </div>  @if (Route::has('password.request'))<a href=""><!-- <i class="fa fa-lock m-r-5"></i> --> {{ __('Forgot Your Password?') }}</a> 
                                 @endif
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}type="
                                submit">Log In</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                <div class="social">
                                    <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                    <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center"> @guest
                                @if (Route::has('register'))
                                <div>Don't have an account? <a href="{{ route('register') }}">
                                <b>
                                </b>Sign Up
                            </a>
                            @endif
                        @else</div>
                            </div>
                             @endguest
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('Madecss/assets/js/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('Madecss/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('Madecss/assets/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('Madecss/assets/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('Madecss/assets/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('Madecss/assets/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('Madecss/assets/js/sticky-kit.min.js')}}"></script>
    <script src="{{asset('Madecss/assets/js/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('Madecss/assets/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('Madecss/assets/jQuery.style.switcher.js')}}"></script>
</body>

</html>
