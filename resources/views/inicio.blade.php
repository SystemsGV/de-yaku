<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Yaku Park</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta property="title" content="Yaku Park" />
    <meta property="description" content="Parque acuatico YAKUPARK" />
    <meta property="image" content="https://demo.yakupark.com.pe/images/yakupark.png" />
    <meta property="url" content="https://demo.yakupark.com.pe/" />
    <meta name="keywords" content="pool, responsive, swimming, swimming pool, training, underwater, agua, parque acuatico, water slides, beach, Beach Club, booking, events, family, holiday, outdoor activities, resort, summer, vacation" />
    <meta name="author" content="gv" />
    <meta name="MobileOptimized" content="320" />
    <!-- end meta tags -->

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/aos.css') }}" />

    <!-- Favicon Icons -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/yakupark.png') }}" />

</head>

<body>
    <!-- loader section start -->
    <div id="loader">
        <h1 id="status">YAKU PARK</h1>
    </div>
    <!-- header section start -->
    <div class="wp_header_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="wp_logo">
                        <a href="index.html"><img src="images/yakupark.png" class="img-logo" alt="water-park-logo" /></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="wp_toggle">
                        <button class="wp_toggle_btn"><i class="fa fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sidenav section start -->
    <div class="wp_navigation_menu">
        <button class="wp_close_btn"><i class="fa fa-times"></i></button>
        <div class="wp_nav_logo">
            <a href="index.html">
                <img src="images/yakupark.png" class="img-logo" alt="water-park-nav-menu-logo" />
            </a>
        </div>
        <ul>
            <li class="active">
                <a href="#"><i class="fa fa-home" aria-hidden="true"></i>Inicio</a>
            </li>
            <li>
                <a href="about.html"><i class="fa fa-user" aria-hidden="true"></i>Nosotros</a>
            </li>
            <li>
                <a href="gallery.html"><i class="fa fa-picture-o" aria-hidden="true"></i>Galeria</a>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>Eventos<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                <ul class="sub-menu">
                    <li>
                        <a href="event.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Events</a>
                    </li>
                    <li>
                        <a href="event_single.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Event
                            Single</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="contact.html"><i class="fa fa-book" aria-hidden="true"></i>Contactanos</a>
            </li>
        </ul>
    </div>
    <!-- banner section start -->
    <div class="wp_banner_wrapper">
        <img src="images/shape2.png" alt="water-park-banner-shape1" class="img-responsive shape2" />
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-lg-offset-3 col-md-offset-2 col-sm-12 col-xs-12">
                    <div class="wp_banner_caption">
                        <div class="wp_banner_text">
                            <p>Bienvenido a</p>
                            <h1 id="title">
                                <span style="
                      color: #2d4bf3;
                      font-family: 'Water-Galon', sans-serif;
                    ">YAKU</span><span style="
                      color: #0e7205;
                      font-family: 'Water-Galon', sans-serif;
                    ">PARK</span>
                            </h1>
                        </div>
                        <p>
                            <span>Donde la Diversión Acuática se Convierte en Recuerdos
                                Inolvidables para Familias</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section start -->
    <div class="wp_about_wrapper wp_top_padder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wp_bottom_padder50">
                    <div class="wp_about_caption" data-aos="fade-up">
                        <h2>
                            Sumérgete en la Diversión Familiar: Nuestra Aventura Acuática en
                            el Norte
                        </h2>
                        <p>
                            Somos una empresa de entretenimiento sano y familiar,
                            especializados en diversión acuática.
                        </p>
                        <p>
                            En el 2023, decidimos empezar un proyecto para la zona norte de
                            la capital. Creemos en dar las herramientas necesarias para que
                            las familias construyan sus propias experiencias, y así, sean
                            momentos memorables que lleven siempre en sus corazones.
                        </p>
                        <p>
                            Nos dedicamos a ofrecer diversión en un entorno seguro, limpio y
                            natural, capturando momentos especiales en familia, disfrutando
                            de la serenidad de la naturaleza y el placer de estar juntos.
                        </p>
                        <button class="wp_button">Saber Más</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wp_bottom_padder50" data-aos="fade-up">
                    <div class="wp_about_img">
                        <img src="images/new/about.webp" alt="water-park-about" class="img-responsive" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery section start -->
    <div class="wp_gallery_wrapper wp_top_padder100">
        <img src="images/shape1.png" alt="water-park-gallery" class="img-responsive shape1" />
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_heading">
                        <h2>Gallery</h2>
                    </div>
                    <div class="wp_button_group">
                        <button class="wp_button active" data-filter="all">All</button>
                        <button class="wp_button" data-filter="swimming">Swimming</button>
                        <button class="wp_button" data-filter="kids">Kids</button>
                        <button class="wp_button" data-filter="party">Pool Party</button>
                        <button class="wp_button" data-filter="adults">Adults</button>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="wp_gallery">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter adults" data-value="1" data-aos="zoom-in-right">
                                <div class="wp_gallery_img">
                                    <img src="images/new/psicinaint.webp" alt="water-park-gallery1" class="img-responsive" />
                                    <div class="wp_gallery_overlay popup-gallery">
                                        <a href="images/new/psicinaint.webp"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter kids swimming" data-value="6" data-aos="zoom-in-right">
                                <div class="wp_gallery_img">
                                    <img src="images/new/piscina1.webp" alt="water-park-gallery6" class="img-responsive" />
                                    <div class="wp_gallery_overlay popup-gallery">
                                        <a href="images/new/piscina1.webp"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter kids" data-value="3" data-aos="zoom-in-right">
                                <div class="wp_gallery_img">
                                    <img src="images/new/rioLento.webp" alt="water-park-gallery3" class="img-responsive" />
                                    <div class="wp_gallery_overlay popup-gallery">
                                        <a href="images/new/rioLento.webp"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter kids swimming" data-value="6" data-aos="zoom-in-right">
                                <div class="wp_gallery_img">
                                    <img src="images/new/carrera1.webp" alt="water-park-gallery6" class="img-responsive" />
                                    <div class="wp_gallery_overlay popup-gallery">
                                        <a href="images/new/carrera1.webp"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter kids swimming" data-value="6" data-aos="zoom-in-right">
                                <div class="wp_gallery_img">
                                    <img src="images/new/remo.webp" alt="water-park-gallery6" class="img-responsive" />
                                    <div class="wp_gallery_overlay popup-gallery">
                                        <a href="images/new/remo.webp"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter kids party" data-value="5" data-aos="zoom-in-right">
                                <div class="wp_gallery_img">
                                    <img src="images/new/yakubaby.webp" alt="water-park-gallery5" class="img-responsive" />
                                    <div class="wp_gallery_overlay popup-gallery">
                                        <a href="images/new/yakubaby.webp"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming" data-value="7" data-aos="zoom-in-right">
                                <div class="wp_gallery_img">
                                    <img src="images/new/cancha1.webp" alt="water-park-gallery7" class="img-responsive" />
                                    <div class="wp_gallery_overlay popup-gallery">
                                        <a href="images/new/cancha1.webp"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service section start -->
    <div class="wp_service_wrapper wp_top_padder100 wp_bottom_padder30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_heading">
                        <h2>Services</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder80" data-aos="flip-left">
                    <div class="wp_service_caption">
                        <img src="images/service/01.png" alt="water-park-service1" class="img-responsive" />
                        <h4>Water Park</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                            consectetur adipiscing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder80" data-aos="flip-right">
                    <div class="wp_service_caption">
                        <img src="images/service/02.png" alt="water-park-service2" class="img-responsive" />
                        <h4>Spa</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                            consectetur adipiscing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder80" data-aos="flip-left">
                    <div class="wp_service_caption">
                        <img src="images/service/03.png" alt="water-park-service3" class="img-responsive" />
                        <h4>Yoga</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                            consectetur adipiscing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder80" data-aos="flip-right">
                    <div class="wp_service_caption">
                        <img src="images/service/04.png" alt="water-park-service4" class="img-responsive" />
                        <h4>Resort</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                            consectetur adipiscing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder80" data-aos="flip-left">
                    <div class="wp_service_caption">
                        <img src="images/service/05.png" alt="water-park-service5" class="img-responsive" />
                        <h4>Gym</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                            consectetur adipiscing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder80" data-aos="flip-right">
                    <div class="wp_service_caption">
                        <img src="images/service/06.png" alt="water-park-service6" class="img-responsive" />
                        <h4>Sports</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                            consectetur adipiscing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- price section start -->
    <div class="wp_pricing_wrapper wp_top_padder100 wp_bottom_padder50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_heading">
                        <h2>Pricing Table</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder50" data-aos="zoom-in-up">
                    <div class="wp_pricing_caption">
                        <div class="wp_pricing_header">
                            <h2>Basic Plan</h2>
                            <h1><small>$ </small>0.99</h1>
                            <h3>Per Month</h3>
                        </div>
                        <div class="wp_pricing_body">
                            <div class="body_icon">
                                <i class="fa fa-tint"></i>
                            </div>
                            <ul class="basic">
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>Swimming
                                    Charge
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>Costume Charge
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>Snacks Charge
                                </li>
                                <li>
                                    <i class="fa fa-times" aria-hidden="true"></i>Stay Charge
                                </li>
                                <li>
                                    <i class="fa fa-times" aria-hidden="true"></i>Food Charge
                                </li>
                            </ul>
                            <button class="wp_button">GET</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder50" data-aos="zoom-in">
                    <div class="wp_pricing_caption">
                        <div class="wp_pricing_header">
                            <h2>Premium</h2>
                            <h1><small>$ </small>1.99</h1>
                            <h3>Per Month</h3>
                        </div>
                        <div class="wp_pricing_body">
                            <div class="body_icon">
                                <i class="fa fa-tint"></i>
                            </div>
                            <ul class="premium">
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>Swimming
                                    Charge
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>Costume Charge
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>Snacks Charge
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>Stay Charge
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>Food Charge
                                </li>
                            </ul>
                            <button class="wp_button">GET</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-lg-offset-0 col-md-offset-0 col-sm-offset-3 col-xs-12 wp_bottom_padder50" data-aos="zoom-in-up">
                    <div class="wp_pricing_caption">
                        <div class="wp_pricing_header">
                            <h2>Standard</h2>
                            <h1><small>$ </small>3.99</h1>
                            <h3>Per Month</h3>
                        </div>
                        <div class="wp_pricing_body">
                            <div class="body_icon">
                                <i class="fa fa-tint"></i>
                            </div>
                            <ul class="standard">
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>Swimming
                                    Charge
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>Costume Charge
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>Snacks Charge
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>Stay Charge
                                </li>
                                <li>
                                    <i class="fa fa-times" aria-hidden="true"></i>Food Charge
                                </li>
                            </ul>
                            <button class="wp_button">GET</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- event section start -->
    <div class="wp_event_wrapper wp_top_padder100 wp_bottom_padder50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_heading">
                        <h2>Upcoming Events</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50" data-aos="zoom-in-right">
                    <div class="wp_event_caption">
                        <div class="wp_event_img">
                            <img src="images/new/empresas.webp" alt="water-park-event1" class="img-responsive" style="border-radius: 15px" />
                            <a href="event_single.html">19<br />Sept</a>
                        </div>
                        <div class="wp_event_text">
                            <h4>
                                <a href="event_single.html">Pool Party on the seak all are welcome</a>
                            </h4>
                            <h5>
                                <a href="event_single.html">Organised By: Divid Carlo</a>
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur.It aliquip ex ea commodo
                                consequat.
                            </p>
                            <a href="event_single.html" class="wp_button">GET NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50" data-aos="fade-down" data-offset="200">
                    <div class="wp_event_caption left_img">
                        <div class="wp_left_event_img">
                            <img src="images/new/COLE.webp" alt="water-park-event2" class="img-responsive" style="border-radius: 15px" />
                            <a href="event_single.html">20<br />Sept</a>
                        </div>
                        <div class="wp_event_text">
                            <h4>
                                <a href="event_single.html">Pool Side Night Party Please Join Us & Have Fun</a>
                            </h4>
                            <h5>
                                <a href="event_single.html">Organised By: Divid Carlo</a>
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur.It aliquip ex ea commodo
                                consequat.
                            </p>
                            <a href="event_single.html" class="wp_button">GET NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50" data-aos="zoom-in-right" data-offset="200">
                    <div class="wp_event_caption">
                        <div class="wp_event_img">
                            <img src="images/new/CUMPLE.webp" alt="water-park-event3" class="img-responsive" style="border-radius: 15px" />
                            <a href="event_single.html">26<br />Sept</a>
                        </div>
                        <div class="wp_event_text">
                            <h4>
                                <a href="event_single.html">Kids Pool Inaugration Programme Please Join us</a>
                            </h4>
                            <h5>
                                <a href="event_single.html">Organised By: Divid Carlo</a>
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur.It aliquip ex ea commodo
                                consequat.
                            </p>
                            <a href="event_single.html" class="wp_button">GET NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section start -->
    <div class="wp_footer_wrapper wp_top_padder100 wp_bottom_padder50">
        <img src="images/shape1.png" alt="water-park-footer-shape" class="img-responsive shape1" />
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_footer_content">
                        <img src="images/yakupark.png" class="img-logo" alt="water-park-footer-logo" />
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="event.html">Events</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-aos="zoom-in">
                    <div class="wp_footer_contact">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h2>Address</h2>
                        <p>1 N. Cactus Ave.<br />Green Bay, WI 54302</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-aos="zoom-in">
                    <div class="wp_footer_contact">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h2>Phone</h2>
                        <p>+44 7700 900023<br />+44 7700 900023</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-aos="zoom-in">
                    <div class="wp_footer_contact">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h2>Email</h2>
                        <a href="#">Info@youremail.com<br />Info@youremail.com</a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_social_icons">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright section start -->
    <div class="wp_copyright_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_copyright_content">
                        <h5>Copyright © 2021, All Rights Reserved by</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js files -->

    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pie-chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/magnific-popup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>

    <script>
        AOS.init({
            offset: 130,
        });
    </script>

</body>

</html>