<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset=UTF-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=Description content="A fat free flat responsive corporate agency templae">
    <meta name=keywords content="Agency, Corporate, Flat, Responsive">
    <title> @yield('title')</title>
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
    <link rel=apple-touch-icon sizes=57x57 href="assets/images/favicons/apple-icon-57x57.png">
    <link rel=apple-touch-icon sizes=60x60 href="assets/images/favicons/apple-icon-60x60.png">
    <link rel=apple-touch-icon sizes=72x72 href="assets/images/favicons/apple-icon-72x72.png">
    <link rel=apple-touch-icon sizes=76x76 href="assets/images/favicons/apple-icon-76x76.png">
    <link rel=apple-touch-icon sizes=114x114 href="assets/images/favicons/apple-icon-114x114.png">
    <link rel=apple-touch-icon sizes=120x120 href="assets/images/favicons/apple-icon-120x120.png">
    <link rel=apple-touch-icon sizes=144x144 href="assets/images/favicons/apple-icon-144x144.png">
    <link rel=apple-touch-icon sizes=152x152 href="assets/images/favicons/apple-icon-152x152.png">
    <link rel=apple-touch-icon sizes=180x180 href="assets/images/favicons/apple-icon-180x180.png">
    <link rel=icon type=image/png sizes=192x192 href="assets/images/favicons/android-icon-192x192.png">
    <link rel=icon type=image/png sizes=32x32 href="assets/images/favicons/favicon-32x32.png">
    <link rel=icon type=image/png sizes=96x96 href="assets/images/favicons/favicon-96x96.png">
    <link rel=icon type=image/png sizes=16x16 href="assets/images/favicons/favicon-16x16.png">
    <link rel=manifest href="http://markup.themewagon.com/reign/preview/assets/images/favicons/manifest.json">
    <meta name=msapplication-TileColor content=#000000>
    <meta name=msapplication-TileImage content=assets/images/favicons/ms-icon-144x144.png>
    <meta name=theme-color content=#000000>
    <link rel=stylesheet href="assets/lib/bootstrap/dist/css/bootstrap.css">
    <link rel=stylesheet href="assets/lib/fontawesome/css/font-awesome.min.css">
    <link rel=stylesheet href="assets/lib/ionicons/css/ionicons.css">
    <link rel=stylesheet href="assets/lib/owlcarousel/owl-carousel/owl.carousel.css">
    <link rel=stylesheet href="assets/lib/owlcarousel/owl-carousel/owl.theme.css">
    <link rel=stylesheet href="assets/lib/FlexSlider/flexslider.css">
    <link rel=stylesheet href="assets/lib/magnific-popup/dist/magnific-popup.css">
    <link rel=stylesheet href="http://fonts.googleapis.com/css?family=Raleway:100,300,400">
    <link rel=stylesheet href="http://fonts.googleapis.com/css?family=Roboto:100,300,400">
    <link rel=stylesheet href="assets/css/main.css">
    <link rel=stylesheet href="assets/css/ie_fix.css">
    <script src="assets/lib/components-modernizr/modernizr.js"></script>
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.js"></script>
</head>

<body data-spy=scroll data-target=#main-nav-collapse data-offset=100>
<!--<div class=page-loader>
    <div class=loader>Loading...</div>
</div>-->
@section('navbar')

@show

@yield('content')


<footer id=footer class=footer>
    <div class=container>
        <div class=row>
            <div class="col-md-3 col-sm-4">
                <p class="copyright text-xs-center">&copy; 2015 Your company name</p>
            </div>
            <div class="col-md-5 col-sm-4">
                <ul class=footer-social-block>
                    <li>
                        <a href="index__op__slider_classic.html#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="index__op__slider_classic.html#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="index__op__slider_classic.html#">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </li>
                    <li>
                        <a href="index__op__slider_classic.html#">
                            <i class="fa fa-behance"></i>
                        </a>
                    </li>
                    <li>
                        <a href="index__op__slider_classic.html#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a href="index__op__slider_classic.html#">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="footer-menu text-xs-center">
                    <a href="index__op__slider_classic.html#">Privacy Policy</a> |
                    <a>Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<a id=totop href="index__op__slider_classic.html#totop">
    <i class="fa fa-angle-double-up"></i>
</a>
<script src="assets/lib/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/lib/isotope/dist/isotope.pkgd.min.js"></script>
<script src="assets/lib/owlcarousel/owl-carousel/owl.carousel.js"></script>
<script type=text/javascript src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="assets/lib/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="assets/lib/waypoints/lib/shortcuts/inview.min.js"></script>
<script src="assets/lib/FlexSlider/jquery.flexslider.js"></script>
<script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.js"></script>
<script src="assets/lib/jquery.mb.YTPlayer/dist/jquery.mb.YTPlayer.min.js"></script>
<script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
<script src="assets/js/main.js"></script>
<!--[if lt IE 10]>
<script>
    $('input, textarea').placeholder();
</script>
<![endif]-->
</body>

</html>