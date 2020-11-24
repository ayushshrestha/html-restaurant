
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
    <section class="logo-section">
        <div class="container">
            <div class="logo">
                <h1><a href="#"><img src="images/logo.svg" alt="Hamro News"></a></h1>
            </div>
        </div>
    </section>
    
<!-- select cateogyr -->
<section class="select-category pt-4">
   <div class="container">
        <div class="cat-heading">
            <h2>What do you love reading about?</h2>
            <span>Follow 3 or more topics</span>
        </div>
        <div class="select-cat">
        <form id="select-form" method="post">
            <ul>
                <li>
                    <!-- travel -->
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="news--travel" name="news" value="travel">
                        <label class="form-check-label btn btn-select" for="news--travel">#Travel</label>
                    </div>
                </li>
                <li>
                    <!-- travel -->
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="news--culture" name="news" value="culture">
                        <label class="form-check-label btn btn-select" for="news--culture">#Culture</label>
                    </div>
                </li>
                <li>
                    <!-- travel -->
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="news--Books" name="news" value="Books">
                        <label class="form-check-label btn btn-select" for="news--Books">#Books</label>
                    </div>
                </li>
                <li>
                    <!-- travel -->
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="news--Bagmati" name="news" value="Bagmati">
                        <label class="form-check-label btn btn-select" for="news--Bagmati">#Bagmati</label>
                    </div>
                </li>
                <li>
                    <!-- travel -->
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="news--Cricket" name="news" value="Cricket">
                        <label class="form-check-label btn btn-select" for="news--Cricket">#Cricket  </label>
                    </div>
                </li>
                <li>
                    <!-- travel -->
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="news--Sports" name="news" value="Sports">
                        <label class="form-check-label btn btn-select" for="news--Sports">#Sports</label>
                    </div>
                </li>
                <li>
                    <!-- travel -->
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="news--Movies" name="news" value="Movies">
                        <label class="form-check-label btn btn-select" for="news--Movies">#Movies</label>
                    </div>
                </li>
                <li>
                    <!-- travel -->
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="news--gandagi" name="news" value="gandagi">
                        <label class="form-check-label btn btn-select" for="news--gandagi">#Gandaki </label>
                    </div>
                </li>
                <li>
                    <!-- travel -->
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="news--Politics" name="news" value="Politics">
                        <label class="form-check-label btn btn-select" for="news--Politics">#Politics</label>
                    </div>
                </li>
                <li>
                    <!-- travel -->
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="news--Briefing" name="news" value="Briefing">
                        <label class="form-check-label btn btn-select" for="news--Briefing">#Briefing</label>
                    </div>
                </li>
                <li>
                    <!-- travel -->
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="news--covid" name="news" value="covid">
                        <label class="form-check-label btn btn-select" for="news--covid">#Covid-19</label>
                    </div>
                </li>
                <li>
                    <!-- travel -->
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="news--lifestyle" name="news" value="lifestyle">
                        <label class="form-check-label btn btn-select" for="news--lifestyle">#Life style</label>
                    </div>
                </li>
                <li>
                    <!-- travel -->
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="news--Football" name="news" value="Football">
                        <label class="form-check-label btn btn-select" for="news--Football">#Football</label>
                    </div>
                </li>
                <li>
                    <!-- travel -->
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="news--music" name="news" value="Music">
                        <label class="form-check-label btn btn-select" for="news--Music">#music</label>
                    </div>
                </li>
                <li>
                    <!-- travel -->
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="news--art" name="news" value="art">
                        <label class="form-check-label btn btn-select" for="news--art">#art</label>
                    </div>
                </li>
                <li>
                    <!-- travel -->
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="news--food" name="news" value="food">
                        <label class="form-check-label btn btn-select" for="news--food">#food</label>
                    </div>
                </li>
            </ul>
            <!-- submit or cancel -->
            <div class="bodal-buttons text-center ">
                <button class="btn btn-primary ripplelink disable" >continue</button>
            </div>
                
        </form>
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