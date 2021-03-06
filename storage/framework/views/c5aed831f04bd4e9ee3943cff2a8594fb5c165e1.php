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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('Madecss/assets/img/favicon.png')); ?>">
    <title>Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(asset('Madecss/assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
   <!--<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <!-- Morries chart CSS -->
    <link href="<?php echo e(asset('Madecss/assets/morris.css')); ?>" rel="stylesheet">
    
    
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('Madecss/assets/css/style.css')); ?>"rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo e(asset('Madecss/assets/css/blue.css')); ?>" id="theme" rel="stylesheet">
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
                    <form class="form-horizontal form-material" id="loginform" method="POST"action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <h3 class="box-title m-b-20">Sign In</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" 
                                name="email" value="<?php echo e(old('email')); ?>" placeholder="Username">
                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                <strong><?php echo e($message); ?></strong>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                 </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password"  
                                name="password"required autocomplete="current-password"placeholder="Password">
                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                 <strong><?php echo e($message); ?></strong>
                                  <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                 </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 font-14">
                                <div class="checkbox checkbox-primary pull-left p-t-0">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> Remember me </label>
                                </div>  <?php if(Route::has('password.request')): ?><a href=""><!-- <i class="fa fa-lock m-r-5"></i> --> <?php echo e(__('Forgot Your Password?')); ?></a> 
                                 <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>type="
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
                            <div class="col-sm-12 text-center"> <?php if(auth()->guard()->guest()): ?>
                                <?php if(Route::has('register')): ?>
                                <div>Don't have an account? <a href="<?php echo e(route('register')); ?>">
                                <b>
                                </b>Sign Up
                            </a>
                            <?php endif; ?>
                        <?php else: ?></div>
                            </div>
                             <?php endif; ?>
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
    <script src="<?php echo e(asset('Madecss/assets/js/jquery.min.js')); ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo e(asset('Madecss/assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Madecss/assets/js/bootstrap.min.js')); ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo e(asset('Madecss/assets/js/jquery.slimscroll.js')); ?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo e(asset('Madecss/assets/js/waves.js')); ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo e(asset('Madecss/assets/js/sidebarmenu.js')); ?>"></script>
    <!--stickey kit -->
    <script src="<?php echo e(asset('Madecss/assets/js/sticky-kit.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Madecss/assets/js/jquery.sparkline.min.js')); ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo e(asset('Madecss/assets/js/custom.min.js')); ?>"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo e(asset('Madecss/assets/jQuery.style.switcher.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Crud_opeartion\resources\views/auth/login.blade.php ENDPATH**/ ?>