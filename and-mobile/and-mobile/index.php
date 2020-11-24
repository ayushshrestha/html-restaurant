
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
    
<!-- main nav -->
<section class="header-section">
    <div class="container">
        <div class="main-header text-center">
            <!-- <div class="logo">
                <h1><a href="#"><img src="images/logo.png" alt="Hamro News"></a></h1>
            </div> -->
            
                <div class="main-nav " id="menu">
                    <ul class="nav">
                        <li class="active ">
                            <a href="index.php" class="ripplelink"> </a>
                            <svg class="icon icon--home">
                                <use xlink:href="#home"></use>
                            </svg></li>
                        <li >
                            <a href="publisher.php" class="ripplelink"></a>
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
<!-- First news section start here -->
<section class="news-section">
<div class="swiper-container main-tab-nav">
        <div class="swiper-wrapper">
            <div class="swiper-slide">For You</div>
            <div class="swiper-slide">Today's News</div>
            <div class="swiper-slide">Categories</div>
        </div>
  </div>
<div class="swiper-container main-tab-content">
      <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="news-secton">
                <div class="container">
                    <div class="section-body">
                        <div class="row">
                            <!-- large thumnail news -->
                            <div class="col-md-6">
                                <div class="swiper-container large-news-swiper">
                                    <div class="swiper-wrapper">
                                        <!-- news-1 -->
                                        <article class="large-news swiper-slide" >
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/large-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                
                                                <h3><a href="#">With Court Prize in Sight, Republicans Unite Behind Trump Once Again</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">2h</a>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- news-2 -->
                                        <article class="large-news swiper-slide" >
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/large-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                               <h3><a href="#">With Court Prize in Sight, Republicans Unite Behind Trump Once Again</a></h3>
                                               <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">3h</a>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- news-3 -->
                                        <article class="large-news swiper-slide" >
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/large-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="#">With Court Prize in Sight, Republicans Unite Behind Trump Once Again</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">3h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <!-- Thumbnail News -->
                            <div class="thumbnail-news col-md-6">
                                <article>
                                    <div class="news-img">
                                        <a href="#">
                                            <img src="images/small-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="news-content">
                                        <h3> <a href="#"> US city on edge before decision on police shooting</a></h3>
                                        <div class="entry-content">
                                            <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">4h</a>
                                        </div>
                                    </div>
                                </article>
                                <article>
                                    <div class="news-img">
                                        <a href="#">
                                            <img src="images/small-4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="news-content">
                                        <h3> <a href="#"> US city on edge before decision on police shooting</a></h3>
                                        <div class="entry-content">
                                            <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">4h</a>
                                        </div>
                                    </div>
                                </article>
                                <article>
                                    <div class="news-img">
                                        <a href="#">
                                            <img src="images/small-6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="news-content">
                                        <h3> <a href="#"> US city on edge before decision on police shooting</a></h3>
                                        <div class="entry-content">
                                            <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">4h</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- small thumnail news -->
                            <div class="col-md-12 small-news-section">
                                <!-- thumbnail news -->
                                <div class="row">
                                    <div class="col-6 col-sm-6 col-md-3">
                                        <article class="small-news" >
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                               <h3> <a href="#"> US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">4h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-3">
                                        <article class="small-news" >
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="#">US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">2h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-3">
                                        <article class="small-news" >
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3> <a href="#"> US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">5h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-3">
                                        <article class="small-news" >
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="#">US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">5h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- List News -->
                    <div class="list-news">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <article>
                                    <div class="news-img">
                                        <a href="#">
                                            <img src="images/small-4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="news-content">
                                        <h3><a href="#">US city on edge before decision on police shooting</a></h3>
                                        <div class="entry-content">
                                            <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">5h</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 col-12">
                                <article>
                                    <div class="news-img">
                                        <a href="#">
                                            <img src="images/small-5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="news-content">
                                        <h3><a href="#">US city on edge before decision on police shooting</a></h3>
                                        <div class="entry-content">
                                            <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">5h</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 col-12">
                                <article>
                                    <div class="news-img">
                                        <a href="#">
                                            <img src="images/small-6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="news-content">
                                        <h3><a href="#">US city on edge before decision on police shooting</a></h3>
                                        <div class="entry-content">
                                            <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">5h</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 col-12">
                                <article>
                                    <div class="news-img">
                                        <a href="#">
                                            <img src="images/small-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="news-content">
                                        <h3><a href="#">US city on edge before decision on police shooting</a></h3>
                                        <div class="entry-content">
                                            <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">5h</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 col-12">
                                <article>
                                    <div class="news-img">
                                        <a href="#">
                                            <img src="images/small-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="news-content">
                                        <h3><a href="#">US city on edge before decision on police shooting</a></h3>
                                        <div class="entry-content">
                                            <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">5h</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 col-12">
                                <article>
                                    <div class="news-img">
                                        <a href="#">
                                            <img src="images/small-5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="news-content">
                                        <h3><a href="#">US city on edge before decision on police shooting</a></h3>
                                        <div class="entry-content">
                                            <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">5h</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
          </div>
          <!-- slide to (Today's News) -->
          <div class="swiper-slide">
                <div class="news-secton">
                    <div class="container">
                        <div class="section-body">
                            <!-- List News -->
                            <div class="list-news">
                                <!-- news-type-title -->
                                <div class="news-type-title d-flex justify-content-between">
                                    <h2>Latest News</h2>
                                    <div class="view-all">
                                        <a href="#">All</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <article>
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="#">US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">5h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <article>
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="#">US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">5h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <article>
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="#">US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">5h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                </div>

                            </div>
                            <div class="row">
                                <!-- Thumbnail News -->
                                <div class="col-sm-12">
                                    <div class="thumbnail-news row">
                                        <div class="col-md-6">
                                            <article>
                                                <div class="news-img">
                                                    <a href="#">
                                                        <img src="images/small-1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="news-content">
                                                    <h3> <a href="#"> US city on edge before decision on police shooting</a></h3>
                                                    <div class="entry-content">
                                                        <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">4h</a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-md-6">
                                            <article>
                                                <div class="news-img">
                                                    <a href="#">
                                                        <img src="images/small-4.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="news-content">
                                                    <h3> <a href="#"> US city on edge before decision on police shooting</a></h3>
                                                    <div class="entry-content">
                                                        <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">4h</a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-md-6">
                                            <article>
                                                <div class="news-img">
                                                    <a href="#">
                                                        <img src="images/small-6.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="news-content">
                                                    <h3> <a href="#"> US city on edge before decision on police shooting</a></h3>
                                                    <div class="entry-content">
                                                        <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">4h</a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-md-6">
                                            <article>
                                                <div class="news-img">
                                                    <a href="#">
                                                        <img src="images/small-4.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="news-content">
                                                    <h3> <a href="#"> US city on edge before decision on police shooting</a></h3>
                                                    <div class="entry-content">
                                                        <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">4h</a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <!-- large thumnail news -->
                                <div class="large-news-wrapper col-md-12">
                                    <div class="swiper-container large-news-swiper-2">
                                        <!-- news-type-title -->
                                        <div class="news-type-title d-flex justify-content-between">
                                                <h2>Popular News</h2>
                                                <div class="view-all">
                                                    <a href="#">All</a>
                                                </div>
                                            </div>
                                        <div class="swiper-wrapper">
                                            
                                            <!-- news-1 -->
                                            <article class="large-news swiper-slide" >
                                                <div class="news-img">
                                                    <a href="#">
                                                        <img src="images/large-1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="news-content">
                                                    
                                                    <h3><a href="#">With Court Prize in Sight, Republicans Unite Behind Trump Once Again</a></h3>
                                                    <div class="entry-content">
                                                        <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">2h</a>
                                                    </div>
                                                </div>
                                            </article>
                                            <!-- news-2 -->
                                            <article class="large-news swiper-slide" >
                                                <div class="news-img">
                                                    <a href="#">
                                                        <img src="images/large-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="news-content">
                                                <h3><a href="#">With Court Prize in Sight, Republicans Unite Behind Trump Once Again</a></h3>
                                                <div class="entry-content">
                                                        <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">3h</a>
                                                    </div>
                                                </div>
                                            </article>
                                            <!-- news-3 -->
                                            <article class="large-news swiper-slide" >
                                                <div class="news-img">
                                                    <a href="#">
                                                        <img src="images/large-3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="news-content">
                                                    <h3><a href="#">With Court Prize in Sight, Republicans Unite Behind Trump Once Again</a></h3>
                                                    <div class="entry-content">
                                                        <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">3h</a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <!-- Thumbnail News -->
                                <div class="col-md-12">
                                <div class="thumbnail-news row">
                                    <!-- news-type-title -->
                                    <div class=" col-md-12 news-type-title d-flex justify-content-between">
                                        <h2>Sports News</h2>
                                        <div class="view-all">
                                            <a href="#">All</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <article>
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3> <a href="#"> US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">4h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article>
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3> <a href="#"> US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">4h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article>
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3> <a href="#"> US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">4h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article>
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3> <a href="#"> US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">4h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article>
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3> <a href="#"> US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">4h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article>
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3> <a href="#"> US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">4h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <!-- List News -->
                            <div class="list-news">
                                <!-- news-type-title -->
                                <div class="news-type-title d-flex justify-content-between">
                                    <h2>More Recommendations</h2>
                                    <div class="view-all">
                                        <a href="#">All</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <article>
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="#">US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">5h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <article>
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="#">US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">5h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <article>
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="#">US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">5h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <article>
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="#">US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">5h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <article>
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="#">US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">5h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <article>
                                            <div class="news-img">
                                                <a href="#">
                                                    <img src="images/small-5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <h3><a href="#">US city on edge before decision on police shooting</a></h3>
                                                <div class="entry-content">
                                                    <a class="news-source" href="#">nytimes.com</a> <a href="#" class="date">5h</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>
          </div>
          <div class="swiper-slide">
            <div class="container">
                <div class="category-list">
                    <ul>
                        <li><a href="#">World <span>1236 Views</span></a></li>
                        <li><a href="#">Sports <span>1236 Views</span></a></li>
                        <li><a href="#">Travel <span>1236 Views</span></a></li>
                        <li><a href="#">Science <span>1236 Views</span></a></li>
                        <li><a href="#">Design <span>1236 Views</span></a></li>
                        <li><a href="#">Technology <span>1236 Views</span></a></li>
                        <li><a href="#">Asia <span>1236 Views</span></a></li>
                        <li><a href="#">Footbal <span>1236 Views</span></a></li>
                        <li><a href="#">Politics <span>1236 Views</span></a></li>
                        <li><a href="#">Android <span>1236 Views</span></a></li>
                        <li><a href="#">MObile <span>1236 Views</span></a></li>
                        <li><a href="#">Beauty <span>1236 Views</span></a></li>
                        <li><a href="#">Economy <span>1236 Views</span></a></li>
                        <li><a href="#">Music <span>1236 Views</span></a></li>
                        <li><a href="#">Videos <span>1236 Views</span></a></li>
                        <li><a href="#">Movies <span>1236 Views</span></a></li>
                    </ul>
                </div>
            </div>
          </div>

      </div>
  </div>
    
</section>
<!-- First news section End -->


<!-- Foter section -->
<section class="footer">
    <!-- top footer -->
    <div class="top-foter ">
        <div class="container d-sm-flex justify-content-between align-items-center">
            <div class="footer-logo">
                <img src="images/logo.svg" alt="Foter Logo">
            </div>
            <div class="social-links d-sm-flex align-items-center">
                <span>Find us here</span>
                <ul>
                    
                    <li>
                        <a href="#">
                            <svg class="icon icon--facebook">
                                <use xlink:href="#facebook"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="icon icon--twitter">
                                <use xlink:href="#twitter"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="icon icon--pintrest">
                                <use xlink:href="#pintrest"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="icon icon--youtube">
                                <use xlink:href="#youtube"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Bottom Footer -->
    <div class="footer-bottom">
        <div class="container d-sm-flex justify-content-between">
            <div class="footer-menu">
                <ul>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="copyright">
                <p>© 2020. All rights reserved by Hamro News</p>
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