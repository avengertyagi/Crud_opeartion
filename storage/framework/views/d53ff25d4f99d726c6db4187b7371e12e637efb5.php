<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('Madecss/assets/img/favicon.png')); ?>">
    <title>Register</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(asset('Madecss/assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Morries chart CSS -->
    <link href="<?php echo e(asset('Madecss/assets/css/morris.css')); ?>" rel="stylesheet">
    
    
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('Madecss/assets/css/style.css')); ?>" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo e(asset('Madecss/assets/css/blue.css')); ?>" id="theme" rel="stylesheet">
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
        <div class="login-register" style="background-image:url('./Madecss/assets/images/login-register.jpg')">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>
                        <h3 class="box-title m-b-20">Sign In</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" placeholder="Username">
                                 <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                 <strong><?php echo e($message); ?></strong>
                                   <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                 </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required autocomplete="name"  name="email" value="<?php echo e(old('email')); ?>" placeholder="Email">
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
                                <input class="form-control" type="Password"name="password" required autocomplete="name" placeholder="Password">
                                 <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                 <strong><?php echo e($message); ?></strong>
                                  <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                 </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="Password"name="password_confirmation" required autocomplete="name"  placeholder=" Confirmpassword"> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit"><?php echo e(__('Register')); ?></button>
                            </div>
                        </div>
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
    <script src="<?php echo e(asset('Madecss.assets/js/jquery.min.js')); ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo e(asset('Madecss/assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Madecss/assets/js/bootstrap.min.js')); ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo e(asset('Madecssassets/js/jquery.slimscroll.js')); ?>"></script>
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
    <script src="./Madecss/assets/jQuery.style.switcher.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Crud_opeartion\resources\views/auth/register.blade.php ENDPATH**/ ?>