<!DOCTYPE html>
<html lang="fr">
<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Sivahera {{ $title }}</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/pogo-slider.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    {{-- Custom --}}
    <link rel="stylesheet" href="css/main.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="">
</head>



<body>
    <div id="preloader"></div>
    <!-- header-start -->
    <header>
        @include('layouts/_pre-header')
        @yield('header')
    </header>


    @yield('container')
    {{-- </div>
</div> --}}
    <!-- contact-details-area-start -->
    <div class="contact-details-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-contact-details">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="single-contact-details">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <h4 class="title">{{ __("Email") }}</h4>
                                    <a class="desc" href="mailto:info@sivahera.com">info@sivahera.com</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="single-contact-details">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <h4 class="title">{{ __("Adresse")}}</h4>
                                    <p class="desc">Rue de Lausanne 94</p>
                                    <p class="desc">1202 Genève – Suisse</p>
                                    {{-- <h4 class="title">{{ __("Transport")}}</h4>
                                    <p class="desc">{{ __("Ligne de tram n°15,") }}</p>
                                    <p class="desc">{{ __("Direction Nation, Arrêt : Butini") }}</p> --}}
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-12">
                                <div class="single-contact-details">
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <h4 class="title">{{ __("Telephone") }}</h4>
                                    <a class="desc" href="tel:+00-015-152-1002">Phone: +41 (0) 22 548 12 60</a>
                                    <a class="desc" href="fax:+358.555.1234567">Port: +41 (0) 78 618 97 07</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer-start -->
    <footer>
        <div class="footer-top-area" style="min-height: 150px"></div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="fba-left">
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="fba-right">
                            <p><a style="color: white; font-size: 1em" href="//comon-real.fr?linkedin" target="_BLANK">Com'On Réal </a> - Agence de Communication Digitale - © 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Scripts -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/animated.headline.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/imagesLoaded-PACKAGED.js"></script>
    <script src="js/isotope-packaged.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>
    
    <script>
        jQuery(document).ready(function($) {

        $('.scroll').on('click',function (e) {
            e.preventDefault();

            var target = this.hash,
            $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 800, 'swing', function () {
                window.location.hash = target;
            });
        });

        });
        TweenMax.staggerFrom(".heading", 0.8, {opacity: 0, y: 20, delay: 0.2}, 0.4);
    </script>
</body>

</html>