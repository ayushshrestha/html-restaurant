
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- animation -->
    <link href="./css/animation.css" rel="stylesheet" type="text/css">
    <!-- main style -->
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <title>Hamro News</title>
    <link rel="icon" type="image/png" href="images/favicon.png"/>

 </head>
<body>
    <div class="global-menu-wrap">
        <div id="global-menu">
            <span class="icon-bar upper-menu"></span>
            <span class="icon-bar mid-menu"></span>
            <span class="icon-bar bottom-menu"></span>
        </div>
    </div>
    <div class="menu-box-bg"></div>
<!-- Header -->
<section class="header-section">
    <div class="container">
        <div class="main-header d-flex align-items-center">
            <div class="logo">
                <h1><a href="#"><img src="images/logo.png" alt="Hamro News"></a></h1>
            </div>
            
                <div class="main-nav mr-auto menu-top-menu-container clearfix" id="menu">
                <div class="responsive-menu-header">
                    <div class="menu-logo"><img src="images/menu-logo.svg" alt=""></div>
                    <div class="btn-close-menu"><img src="images/close.svg" alt="close"></div>
                </div>
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="#"> Horoscopes</a></li>
                        <li class="active"><a href="unicode.php">Nepali Unicode</a></li>
                    </ul>
                </div>
            <div class="apperence-setting">
            <a href="#"  data-toggle="modal" data-target="#exampleModal"><img src="images/setting.svg" alt="Apperence Setting" ></a> 
            


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered preferences">
                    <div class="modal-content">
                        
                        <div class="text-center modal-title">
                            <h2>Save your preferences</h2>
                            <p>Select topics you are interested in:</p>
                            
                        </div>
                        <div class="modal-body">
                            <!-- apperence setting option -->
                            <div class="select-form">
                                <form id="select-form" method="post">
                                    <ul class="text-center">
                                        <li>
                                            <!-- travel -->
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" id="news--travel" name="news" value="travel">
                                                <label class="form-check-label btn btn-select" for="news--travel">Travel</label>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- travel -->
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" id="news--culture" name="news" value="culture">
                                                <label class="form-check-label btn btn-select" for="news--culture">Culture & Arts</label>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- travel -->
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" id="news--Books" name="news" value="Books">
                                                <label class="form-check-label btn btn-select" for="news--Books">Books</label>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- travel -->
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" id="news--Bagmati" name="news" value="Bagmati">
                                                <label class="form-check-label btn btn-select" for="news--Bagmati">Bagmati Province</label>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- travel -->
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" id="news--Cricket" name="news" value="Cricket">
                                                <label class="form-check-label btn btn-select" for="news--Cricket">Cricket  </label>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- travel -->
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" id="news--Sports" name="news" value="Sports">
                                                <label class="form-check-label btn btn-select" for="news--Sports">Sports</label>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- travel -->
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" id="news--Movies" name="news" value="Movies">
                                                <label class="form-check-label btn btn-select" for="news--Movies">Movies</label>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- travel -->
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" id="news--gandagi" name="news" value="gandagi">
                                                <label class="form-check-label btn btn-select" for="news--gandagi">Gandaki Province</label>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- travel -->
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" id="news--Politics" name="news" value="Politics">
                                                <label class="form-check-label btn btn-select" for="news--Politics">Politics</label>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- travel -->
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" id="news--Briefing" name="news" value="Briefing">
                                                <label class="form-check-label btn btn-select" for="news--Briefing">Briefing</label>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- travel -->
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" id="news--covid" name="news" value="covid">
                                                <label class="form-check-label btn btn-select" for="news--covid">Covid - 19</label>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- travel -->
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" id="news--lifestyle" name="news" value="lifestyle">
                                                <label class="form-check-label btn btn-select" for="news--lifestyle">Life style & Fashion</label>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- travel -->
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" id="news--Football" name="news" value="Football">
                                                <label class="form-check-label btn btn-select" for="news--Football">Football</label>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- submit or cancel -->
                                    <div class="bodal-buttons text-center ">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>
                                    </div>
                                       
                                </form>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>

            <!-- modal end -->
            </div>
        </div>
    </div>
</section>
<!-- header End -->

<section class="unicode-heading">
    <div class="container ">
        <div class="unicode-title d-flex justify-content-between align-items-center">
            <div class="horoscope-date">
                <h2>
                    Kantipur to Unicode Converter
                </h2>
                <p>Note : This converter works only for Kantipur Font</p>
            </div>
        </div>
    </div>
</section>

<section class="unicode">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="input-kantipur">
                    <h3>Paste Kantipur Font font here</h3>
                    <div class="comment-form">
                    <textarea onkeyup="convert();" rows="13" id="kantipur-input"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="output-unicode">
                    <h3>Convert to Unicode</h3>
                    <div class="comment-form">
                    <textarea onkeyup="convert();" rows="13" id="kantipur-input"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Foter section -->
<section class="footer">
    <!-- top footer -->
    <div class="top-foter ">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="footer-logo">
                <img src="images/footer-logo.png" alt="Foter Logo">
            </div>
            <div class="social-links d-flex align-items-center">
                <span>Find us here</span>
                <ul>
                    
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="7.498" height="14" viewBox="0 0 7.498 14"><defs><style>.a{fill:#121213;}</style></defs><path class="a" d="M3.258-4.375l.389-2.534H1.215V-8.553A1.267,1.267,0,0,1,2.644-9.922H3.749v-2.157a13.479,13.479,0,0,0-1.962-.171A3.093,3.093,0,0,0-1.524-8.84v1.931H-3.749v2.534h2.226V1.75H1.215V-4.375Z" transform="translate(3.749 12.25)"/></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="11.371" viewBox="0 0 14 11.371"><defs><style>.a{fill:#121213;}</style></defs><path class="a" d="M5.561-8.1A6.168,6.168,0,0,0,7-9.585a5.752,5.752,0,0,1-1.652.444,2.862,2.862,0,0,0,1.261-1.581,5.649,5.649,0,0,1-1.821.693,2.862,2.862,0,0,0-2.1-.906A2.868,2.868,0,0,0-.178-8.066a3.239,3.239,0,0,0,.071.657,8.156,8.156,0,0,1-5.916-3,2.848,2.848,0,0,0-.391,1.448,2.867,2.867,0,0,0,1.279,2.39,2.889,2.889,0,0,1-1.3-.364V-6.9a2.87,2.87,0,0,0,2.3,2.816,3.034,3.034,0,0,1-.755.1,3.616,3.616,0,0,1-.542-.044,2.874,2.874,0,0,0,2.683,1.99A5.746,5.746,0,0,1-6.307-.817,5.938,5.938,0,0,1-7-.853,8.108,8.108,0,0,0-2.594.435,8.108,8.108,0,0,0,5.57-7.728C5.57-7.853,5.57-7.977,5.561-8.1Z" transform="translate(7 10.935)"/></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="13.647" viewBox="0 0 10.5 13.647"><defs><style>.a{fill:#121213;}</style></defs><path class="a" d="M.328-12.072c-2.805,0-5.578,1.87-5.578,4.9,0,1.925,1.083,3.019,1.739,3.019.271,0,.427-.755.427-.968,0-.254-.648-.8-.648-1.854A3.7,3.7,0,0,1,.107-10.735a2.921,2.921,0,0,1,3.24,3c0,1.452-.582,4.175-2.469,4.175a1.214,1.214,0,0,1-1.263-1.2c0-1.034.722-2.034.722-3.1,0-1.81-2.568-1.482-2.568.705a3.212,3.212,0,0,0,.262,1.386A29.932,29.932,0,0,0-3.117-.046c0,.517.074,1.025.123,1.542.093.1.046.093.189.041C-1.427-.35-1.477-.719-.853-3.188A2.218,2.218,0,0,0,1.042-2.2c2.9,0,4.208-2.83,4.208-5.381A4.653,4.653,0,0,0,.328-12.072Z" transform="translate(5.25 12.072)"/></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.933" height="10.5" viewBox="0 0 14.933 10.5"><defs><style>.a{fill:#121213;}</style></defs><path class="a" d="M7.155-8.857a1.876,1.876,0,0,0-1.32-1.329A44.342,44.342,0,0,0,0-10.5a44.342,44.342,0,0,0-5.834.314,1.876,1.876,0,0,0-1.32,1.329,19.684,19.684,0,0,0-.312,3.618,19.684,19.684,0,0,0,.312,3.618A1.848,1.848,0,0,0-5.834-.314,44.342,44.342,0,0,0,0,0,44.342,44.342,0,0,0,5.834-.314a1.848,1.848,0,0,0,1.32-1.308,19.684,19.684,0,0,0,.312-3.618A19.684,19.684,0,0,0,7.155-8.857ZM-1.527-3.019V-7.46l3.9,2.22Z" transform="translate(7.467 10.5)"/></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Bottom Footer -->
    <div class="footer-bottom">
        <div class="container d-flex justify-content-between">
            <div class="footer-menu">
                <ul>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Horoscopes</a></li>
                    <li><a href="#">Nepali Unicode</a></li>
                </ul>
            </div>
            <div class="copyright">
                <p>© 2020. All rights reserved by Hamro News</p>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/popover.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>
</body>



</html>