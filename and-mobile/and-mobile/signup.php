
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./css/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <!-- animation -->
    <link href="./css/animation.css" rel="stylesheet" type="text/css">
    <!-- main style -->
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <title>ALl News Desk</title>
    <link rel="icon" type="image/png" href="images/favicon.png"/>

 </head>
<body class="login-page">
    <div class="svg-sprite" style="display:none;">
        <?php include("images/svg-sprite.svg"); ?>
    </div>
    
<!-- login -->
<section class="login-section d-flex h-100 align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-6 ">
                    <div class="skip-btn">
                        <a href="Select-category.php">Skip for now!</a>
                   </div>
                <div class="login-header">
                    <h2>Welocme!</h2>
                    <p>Please login to continue</p>
                </div>
                
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="fullName" aria-describedby="emailHelp" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group show_hide_password" id="show_hide_password">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                            <div class="input-group-addon">
                                <a href="#">
                                    <svg class="icon icon--eye ">
                                        <use xlink:href="#eye"></use>
                                    </svg>
                                    <svg class="icon icon--eye-slash d-none">
                                        <use xlink:href="#eye-slash"></use>
                                    </svg>
                                </a>
                            </div>
                            
                        </div>
                        <div class="form-group show_hide_password" id="show_hide_password_confirm">
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                            <div class="input-group-addon">
                                <a href="#">
                                    <svg class="icon icon--eye ">
                                        <use xlink:href="#eye"></use>
                                    </svg>
                                    <svg class="icon icon--eye-slash d-none">
                                        <use xlink:href="#eye-slash"></use>
                                    </svg>
                                </a>
                            </div>
                            
                        </div>
                    <button type="submit" class="btn-primary ripplelink">login</button>
                    </form>
                </div>  
                <div class="social-login">
                    <div class="sign-up text-center pt-3">
                        <p>Already have an account?<a href="login.php" class="sign-up-btn">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login -->


  
  
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/popover.js" type="text/javascript"></script>
<script src="js/jquery.touchSwipe.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/swiper-bundle.min.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>
</body>



</html>