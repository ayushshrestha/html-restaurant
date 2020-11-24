
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
                        <li class="active ">
                            <a href="search.php" class="ripplelink"></a>
                             <svg class="icon icon--search">
                                <use xlink:href="#search"></use>
                            </svg>
                        </li>
                        <li>
                            <a href="profile.php" class="ripplelink"></a>
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
<!-- Search containt section -->
<section class="search-section">
    <div class="container">
        <div class="search-form">
            <form>
                <div class="form-group">
                    <input type="email" class="form-control" id="search-input" aria-describedby="emailHelp" placeholder="Search news on AND...">
                 </div>
            </form>
            <button onClick="window.location='search-result.php';" type="submit" class="search-btn">
                <svg class="icon icon--search">
                    <use xlink:href="#search"></use>
                </svg>
            </button>
        </div>
    </div>
</section>
<!-- suggestion -->
<section class="suggestion-section">
    <div class="container">
           <!-- News Nows -->
            <div class="suggestion-news">
                <h4>In the news now</h4>
                <ul>
                    <li><a href="#"> Covid - 19</a></li>
                    <li><a href="#">Us election 2020</a></li>
                    <li><a href="#">Donald Trump</a></li>
                    <li><a href="#">Nice footbal</a></li>
                    <li><a href="#">Nepal</a></li>
                    
                </ul>
            </div>
            <!-- News Nows -->
            <div class="suggestion-news">
                <h4>More Topics</h4>
                <ul>
                    <li><a href="#">World News</a></li>
                    <li><a href="#">United State</a></li>
                    <li><a href="#">Asia</a></li>
                    <li><a href="#">US and Canada</a></li>
                    <li><a href="#">Business</a></li>
                </ul>
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