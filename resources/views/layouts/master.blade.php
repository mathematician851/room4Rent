
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmlguru.net/house-rent/index03.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jan 2022 12:31:57 GMT -->
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="glimmer is a modern presentation HTML5 Blog template.">
    <meta name="keywords" content="HTML5, Template, Design, Development, Blog" />
    <meta name="author" content="">

    <!-- Titles
    ================================================== -->
    <title>
        @yield('title');
    </title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="/assets/images/house-logo.png">
    <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-touch-icon-114x114.html">

    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i%7cPoppins:300,400,500,600,700" rel="stylesheet">


    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/assets/css/plugins.css">
    <link rel="stylesheet" href="/assets/css/colors.css">
    <link rel="stylesheet" href="/style.css">
    <!-- Modernizr
    ================================================== -->
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!-- ====== Header Mobile Area ====== -->
<header class="mobile-header-area nevy-blue-bg hidden-md hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 tb">
                <div class="mobile-header-block">
                    <div class="menu-area tb-cell">
                        <!--Mobile Main Menu-->
                        <div class="mobile-menu-main hidden-md hidden-lg">
                            <div class="menucontent overlaybg"></div>
                            <div class="menuexpandermain slideRight">
                                <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                    <span></span>
                                </a>
                                <span id="menu-marker"></span>
                            </div><!--/.menuexpandermain-->
                            <div id="mobile-main-nav" class="main-navigation slideLeft">
                                <div class="menu-wrapper">
                                    <div id="main-mobile-container" class="menu-content clearfix"></div>
                                    <div class="left-content">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-phone-square"></i>Call Us - 024838484</a>
                                            </li>
                                            <li>
                                                <a href="{{route('user.login')}}" class="cd-signin"><i class="fa fa-address-book"></i>Login / Register</a>
                                            </li>
                                        </ul>
                                    </div><!-- /.left-content -->
                                </div>
                            </div><!--/#mobile-main-nav-->
                        </div><!--/.mobile-menu-main-->
                    </div><!-- /.menu-area -->
                    <div class="logo-area tb-cell">
                        <div class="site-logo">
                            <a href="/">
                                <h1 style="color: #FCA22A">ROOM4RENT</h1>
                            </a>
                        </div><!-- /.site-logo -->
                    </div><!-- /.logo-area -->
                    <div class="search-block tb-cell">
                        <a href="#" class="main-search"><i class="fa fa-search"></i></a>
                    </div><!-- /.search-block -->

                </div><!-- /.mobile-header-block -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</header><!-- /.mobile-header-area -->

<!-- ====== Header Top Area ====== -->
<header class="header-area nevy-blue-bg hidden-xs hidden-sm">
    <div class="container">
        <div class="header-top-content">
            <div class="row">
                <div class="col-md-7 col-sm-7 mobile-center">
                    <div class="site-logo">
                        <a href="/">
                            <h3 style="color: #FCA22A">ROOM4RENT</h3>
                        </a>
                    </div><!-- /.site-logo -->
                </div><!-- /.col-md-8 -->
                <div class="col-md-5 col-sm-5 mobile-center">
                    <div class="left-content">
                        <ul>
                            <li>
                                <a  href="tel:0695948493"><i class="fa fa-phone-square"></i>Call Us - 057762034</a>
                            </li>
                            <li>
                                <a href="{{route('user.login')}}" ><i class="fa fa-address-book"></i>Login / Register</a>
                            </li>

                        </ul>
                    </div><!-- /.left-content -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.header-top-content -->
    </div><!-- /.container -->
</header><!-- /.head-area -->

<!-- ====== Header Bottom Content ====== -->
<header class="header-bottom-content nevy-blue-bg hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-10">
                <nav id="main-nav" class="site-navigation top-navigation">
                    <div class="menu-wrapper">
                        <div class="menu-content">
                            <ul class="menu-list">
                                <li>
                                    <a href="#">Home</a>

                                </li>


                                <li>
                                    <a href="{{route('about')}}">About</a>
                                </li>

                                <li>
                                    <a href="{{route('contact')}}">Contact</a>
                                </li>
                            </ul> <!-- /.menu-list -->
                        </div> <!-- /.menu-content-->
                    </div> <!-- /.menu-wrapper -->
                </nav><!-- /.site-navigation -->
            </div><!-- /.col-md-10 -->

            <div class="col-md-2 col-sm-2">
                <div class="booking">
                    <span><a href="{{route('booking')}}">Booking</a></span>
                </div><!-- /.Booking -->
            </div><!-- /.col-md-2 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</header><!-- /.header-bottom-content -->

<!-- ====== Header Overlay Content ====== -->
<div class="header-overlay-content">
    <!-- overlay-menu-item -->
    <div class="overlay overlay-hugeinc gradient-transparent overlay-menu-item">
        <button type="button" class="overlay-close">Close</button>

    </div> <!-- /.overlay-menu-item -->

    <!-- header-search-content -->
    <div class="gradient-transparent overlay-search">
        <button type="button" class="overlay-close">Close</button>
        <div class="header-search-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="#" method="get" class="searchform">
                            <div class="input-group" id="adv-search">
                                <input type="text" class="form-controller" placeholder="Search for snippets" />
                                <div class="input-group-btn">
                                    <div class="btn-group" role="group">
                                        <div class="dropdown dropdown-lg">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="fa fa-caret-down"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <div class="form-horizontal">
                                                    <div class="checkbox">
                                                        <label><input type="checkbox"> From Blog</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox">Find Your Apartment</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            <span class="fa fa-search" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.header-search-content -->

    <!-- Registrar Or Sign In-content -->
    <div class="cd-user-modal">
        <div class="cd-user-modal-container">
            <ul class="cd-switcher">
                <li><a href="#0">Sign in</a></li>
                <li><a href="#0">New account</a></li>
            </ul>

            <!-- log in form -->
            <div id="cd-login">
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signin-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signin-password">Password</label>
                        <input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
                        <a href="#0" class="hide-password">Hide</a>
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input type="checkbox" id="remember-me" checked>
                        <label for="remember-me">Remember me</label>
                    </p>

                    <p class="fieldset">
                        <input class="full-width" type="submit" value="Login">
                    </p>
                </form>

                <p class="cd-form-bottom-message">
                    <a href="#0">Forgot your password?</a>
                </p>
                <a href="#0" class="cd-close-form">Close</a>
            </div> <!-- cd-login -->

            <!-- sign up form -->
            <div id="cd-signup">
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">Username</label>
                        <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Password</label>
                        <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
                        <a href="#0" class="hide-password">Hide</a>
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input type="checkbox" id="accept-terms">
                        <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                    </p>

                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Create account">
                    </p>
                </form>

                <a href="#0" class="cd-close-form">Close</a>
            </div> <!-- cd-signup -->

            <!-- reset password form -->
            <div id="cd-reset-password">
                <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="reset-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>
                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Reset password">
                    </p>
                </form>

                <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
            </div> <!-- cd-reset-password -->
            <a href="#0" class="cd-close-form">Close</a>
        </div> <!-- cd-user-modal-container -->
    </div> <!-- cd-user-modal -->
</div><!-- /.header-overlay-content -->

@yield('content')
<!-- ====== Fun Facts Area======= -->
<div class="fun-fects-area" style="background-image:url(assets/images/count-down-image.png)">
    <div class="container">
        <div class="stat">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <h3 class="stat-count highlight" data-form="1" data-to="2500" data-speed="3000">2500</h3>
                    <div class="milestone-details">Clients</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <h3 class="stat-count highlight" data-form="1" data-to="3055" data-speed="3000">3055</h3>
                    <div class="milestone-details">Booking</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <h3 class="stat-count highlight" data-form="1" data-to="50" data-speed="3000">50</h3>
                    <div class="milestone-details">Swimming</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <h3 class="stat-count highlight" data-form="1" data-to="1530" data-speed="3000">1530</h3>
                    <div class="milestone-details">Apartment</div>
                </div>
            </div>
        </div><!-- stat -->
    </div><!-- /.container -->
</div><!-- /.fun-fects-area -->

<!-- ====== Gallery Area ====== -->
<div class="gallery-area">
    <div class="container-fluid">
        <div class="container-large-device">
            <div class="row">
                <div class="col-md-7">
                    <div class="gallery-left-content">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <a class="image-pop-up" href="assets/images/gallery/gallery-one.png">
                                    <img src="/assets/images/gallery/gallery-one.png" alt="gallery" />
                                </a>
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <a class="image-pop-up" href="assets/images/gallery/gallery-two.png">
                                    <img src="/assets/images/gallery/gallery-two.png" alt="gallery" />
                                </a>
                            </div><!-- /.col-md-4 -->
                            <div class="clearfix visible-xs-block"></div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <a class="image-pop-up" href="assets/images/gallery/gallery-three.png">
                                    <img src="/assets/images/gallery/gallery-three.png" alt="gallery" />
                                </a>
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <a class="image-pop-up" href="assets/images/gallery/gallery-four.png">
                                    <img src="/assets/images/gallery/gallery-four.png" alt="gallery" />
                                </a>
                            </div><!-- /.col-md-4 -->
                            <div class="clearfix visible-xs-block"></div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <a class="image-pop-up" href="assets/images/gallery/gallery-five.png">
                                    <img src="/assets/images/gallery/gallery-five.png" alt="gallery" />
                                </a>
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <a class="image-pop-up" href="#">
                                    <img src="/assets/images/gallery/gallery-six.png" alt="gallery" />
                                </a>
                            </div><!-- /.col-md-4 -->
                        </div><!-- /.row -->
                    </div><!-- /.left-content -->
                </div><!-- /.col-md-7 -->
                <div class="col-md-5">
                    <div class="gallery-right-content">
                        <h2>Our<br/> Photo Gallery</h2>
                        <h3>Best of our <br/>Event portfolio Photos</h3>
                        <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p>
                        <a href="gallery.html" class="button nevy-button">All Photos &amp; Video</a>
                    </div><!-- /.right-content -->
                </div><!-- /.col-md-5 -->
            </div><!-- /.row -->
        </div><!-- /.container-large-device  -->
    </div><!-- /.container-fluid-->
</div><!-- /.gallery-area -->



<!-- ====== Footer Area ====== -->
<footer class="footer-area" style="background-image:url(assets/images/footer-bg.png)">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="bottom-content">
                    <p>Copyright  &copy;{{date('Y')}} <a href="/">room4rent</a></p>
                </div><!-- /.bottom-top-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</footer><!-- /.footer-area -->

<!-- All The JS Files
================================================== -->
<script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/main.js"></script> <!-- main-js -->
</body>

<!-- Mirrored from htmlguru.net/house-rent/index03.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jan 2022 12:32:02 GMT -->
</html>