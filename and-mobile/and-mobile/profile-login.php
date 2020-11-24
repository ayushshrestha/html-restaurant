
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
<body>
    <div class="svg-sprite" style="display:none;">
        <?php include("images/svg-sprite.svg"); ?>
    </div>
    <div class="global-menu-wrap">
        <div id="global-menu">
            <span class="icon-bar upper-menu"></span>
            <span class="icon-bar mid-menu"></span>
            <span class="icon-bar bottom-menu"></span>
        </div>
    </div>
    <div class="menu-box-bg"></div>
<!-- main nav -->
<section class="header-section">
    <div class="container">
        <div class="main-header text-center">
            <!-- <div class="logo">
                <h1><a href="#"><img src="images/logo.png" alt="Hamro News"></a></h1>
            </div> -->
            
                <div class="main-nav " id="menu">
                    <ul class="nav">
                        <li>
                            <a href="index.php" class="ripplelink"> </a>
                            <svg class="icon icon--home">
                                <use xlink:href="#home"></use>
                            </svg></li>
                        <li >
                            <a href="#" class="ripplelink"></a>
                            <svg class="icon icon--publisher">
                                <use xlink:href="#publisher"></use>
                            </svg>
                        </li>
                        <li>
                            <a href="horoscopes.php" class="ripplelink"></a>
                            <svg class="icon icon--horoscope">
                                <use xlink:href="#horoscope"></use>
                            </svg>
                        </li>
                        <li>
                            <a href="search.php" class="ripplelink"></a>
                             <svg class="icon icon--search">
                                <use xlink:href="#search"></use>
                            </svg>
                        </li>
                        <li class="active ">
                            <a href="#" class="ripplelink"></a>
                            <svg class="icon icon--profile">
                                <use xlink:href="#profile"></use>
                            </svg>
                        </li>
                    </ul>
                </div>
            
        </div>
    </div>
</section>
<!-- main nav End -->

<section class="logo-section">
    <div class="container">
        <div class="logo">
            <h1><a href="#"><img src="images/logo.svg" alt="Hamro News"></a></h1>
        </div>
    </div>
</section>
<section class="login-section d-flex h-100 align-items-center pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-6">
                <div class="login-header">
                    <h2>Welocme!</h2>
                    <p>Please login to continue</p>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group show_hide_password" id="show_hide_password">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                            <a href="#" class="forgot-pw">Forgot the password?</a>
                        </div>
                    <button type="submit" class="btn-primary ripplelink">login</button>
                    </form>
                </div>  
                <div class="social-login">
                    <p class="text-center">or login with</p>
                    <button class="google-btn ripplelink">
                        <svg class="icon icon--google"> <use xlink:href="#google"></use></svg>
                        Google
                    </button>
                    <button class="facebook-btn ripplelink">
                        <svg class="icon icon--facebook"> <use xlink:href="#facebook"></use></svg>
                        Facebook
                    </button>
                    <button class="twitter-btn ripplelink">
                        <svg class="icon icon--twitter"> <use xlink:href="#twitter"></use></svg>
                        Twitter
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/popover.js" type="text/javascript"></script>
<script src="js/jquery.touchSwipe.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/swiper-bundle.min.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>
</body>



</html>