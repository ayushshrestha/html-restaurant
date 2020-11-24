
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
<section class="profile-section pt-4">
    <div class="container">
        <div class="profile-containt">
            <div class="profile-heading  d-flex justify-content-between align-items-center w-100">
                <div class="profile-image">
                <img src="images/placeholder.svg" alt="">
                </div>  
                
            </div>
            <div class="profile-title">
                <h2>John Due</h2>
                <span>john@samplemail.com</span>
            </div>
            <!-- Profile-menu -->
            <div class="profile-menu">
                <ul>
                    <li>
                        <a href="#"  data-toggle="modal" data-target="#apperence-setting">
                            <svg class="icon icon--setting">
                                <use xlink:href="#setting"></use>
                            </svg>
                            Preference Setting
                        </a>
                        <div class="profile-setting">
                            <!-- Modal -->
                            <div class="modal fade" id="apperence-setting" tabindex="-1" aria-labelledby="apperence-setting" aria-hidden="true">
                                <div class="modal-dialog modal-lg preferences">
                                    <div class="modal-content">
                                        
                                        <div class="modal-title px-3">
                                            <h2>Save your preferences</h2>
                                            <p>Select topics you are interested in:</p>
                                            
                                        </div>
                                        <div class="modal-body">
                                            <!-- apperence setting option -->
                                            <div class="select-form">
                                                <form id="select-form" method="post">
                                                    <ul class=" pb-4">
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
                                                    <div class="bodal-buttons text-center pt-3">
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
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

                </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#account-setting">
                            <svg class="icon icon--profile">
                                <use xlink:href="#profile"></use>
                            </svg>
                            Account Setting
                        </a>
                        <div class="profile-setting">
                            <!-- Modal -->
                            <div class="modal fade" id="account-setting" tabindex="-1" aria-labelledby="apperence-setting" aria-hidden="true">
                                <div class="modal-dialog modal-lg preferences">
                                    <div class="modal-content">
                                        
                                        <div class="modal-body">
                                            <!-- apperence setting option -->
                                            <div class="select-form">
                                                <form id="select-form" method="post">
                                                    <!-- first name -->
                                                    <div class="form-group">
                                                        <label for="first-name-input">First Name</label>
                                                        <input type="email" class="form-control" id="first-name-input" aria-describedby="emailHelp" placeholder="First Name">
                                                    </div>
                                                    <!-- last name -->
                                                    <div class="form-group">
                                                        <label for="last-name-input">Last Name</label>
                                                        <input type="email" class="form-control" id="last-name-input" aria-describedby="emailHelp" placeholder="Last Name">
                                                    </div>
                                                    <!-- Email -->
                                                    <div class="form-group">
                                                        <label for="InputEmail">Email Address</label>
                                                        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Email">
                                                    </div>
                                                    
                                                    <!-- submit or cancel -->
                                                    <div class="bodal-buttons text-center pt-3">
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
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
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#changePassword">
                            <svg class="icon icon--security">
                                <use xlink:href="#security"></use>
                            </svg>
                            Change Password
                        </a>
                        <div class="profile-setting">
                            <!-- Modal -->
                            <div class="modal fade" id="changePassword" tabindex="-1" aria-labelledby="apperence-setting" aria-hidden="true">
                                <div class="modal-dialog modal-lg preferences">
                                    <div class="modal-content">
                                        
                                        <div class="modal-body">
                                            <!-- apperence setting option -->
                                            <div class="select-form">
                                                <form id="select-form" method="post">
                                                    <!-- Existing Password -->
                                                    <div class="form-group show_hide_password" id="show_hide_password">
                                                        <label for="existingPassword">Existing Password</label>
                                                        <input type="password" class="form-control" id="existingPassword" placeholder="Existing Password">
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
                                                    <!-- New Password -->
                                                    <div class="form-group show_hide_password" id="show_hide_password">
                                                        <label for="newPassword">New Password</label>
                                                        <input type="password" class="form-control" id="newPassword" placeholder="New Password">
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
                                                    
                                                    <!-- submit or cancel -->
                                                    <div class="bodal-buttons text-center pt-3">
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
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
                    </li>
                    <li>
                        <a href="#">
                        <svg class="icon icon--logout">
                                <use xlink:href="#logout"></use>
                            </svg>
                            Logout
                        </a>
                    </li>
                </ul>
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