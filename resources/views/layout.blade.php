<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Yaku Park | {{ $title }}</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta property="title" content="Yaku Park" />
    <meta name="description"
        content="¡Bienvenido a YAKU PARK! Disfruta de emocionantes toboganes de agua, relájate en piscinas cristalinas y sumérgete en una experiencia acuática inolvidable. Ofrecemos diversión para toda la familia, desde áreas de juegos infantiles hasta atracciones de alta velocidad. ¡Ven y disfruta del sol y la diversión en Comas!">
    <meta property="image" content="https://laravel.yakupark.com.pe/images/asirix220.png" />
    <meta property="url" content="https://laravel.yakupark.com.pe/" />
    <meta name="keywords"
        content="parque acuático, toboganes de agua, piscinas, atracciones acuáticas, diversión en el agua, parque temático acuático, parque de diversiones, parque de agua, área de juegos acuáticos, entretenimiento acuático, atracciones familiares, toboganes, chapoteaderos, parque infantil, parque de verano, actividades acuáticas, relajación, parque de agua para niños, parque de agua para adultos, zona de relajación, parque recreativo acuático, paseo en balsa, toboganes de alta velocidad, piscina de olas, río lento, parque acuático familiar, áreas de picnic, comida y bebida, entretenimiento en agua, parque de agua para niños pequeños, juegos acuáticos, área de descanso, diversión bajo el sol, aventura acuática, actividades para toda la familia">
    <meta name="author" content="gv" />
    <meta name="MobileOptimized" content="320" />
    <!-- end meta tags -->

    <!-- Fonts -->
    <link rel="preload" href="{{ asset('fonts/Montserrat-Bold.otf') }}" as="font" type="font/otf" crossorigin>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/aos.css') }}" />

    <!-- Favicon Icons -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/asirix220.png') }}" />

</head>

<body>
    <!-- loader section start -->
    <div id="loader">
        <h1 id="status">ASIRI PARK</h1>
    </div>
    <!-- header section start -->
    <div class="wp_header_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="wp_logo">
                        <a href="/"><img src="images/asirix220.png" class="img-logo" alt="water-park-logo" /></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="wp_toggle">
                        <button class="wp_toggle_btn" alt="abrir barra de navegación"><i
                                class="fa fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sidenav section start -->
    <div class="wp_navigation_menu">
        <button class="wp_close_btn" alt="Cerrar barra ed navegación"><i class="fa fa-times"></i></button>
        <div class="wp_nav_logo">
            <a href="{{ url('/') }}">
                <img src="images/asirix220.png" class="img-logo" alt="water-park-nav-menu-logo" />
            </a>
        </div>
        <ul>
            <li>
                <a href="{{ url('/') }}" class="nav-link"><i class="fa fa-home" aria-hidden="true"></i>Inicio</a>
            </li>
            <li>
                <a href="/Nosotros"><i class="fa fa-user" aria-hidden="true"></i>Nosotros</a>
            </li>
            <li>
                <a href="/Galeria"><i class="fa fa-picture-o" aria-hidden="true"></i>Galeria</a>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>Eventos<span class="fa fa-angle-down"
                        aria-hidden="true"></span></a>
                <ul class="sub-menu">
                    <li>
                        <a href="/Eventos"><i class="fa fa-angle-right" aria-hidden="true"></i>Events</a>
                    </li>
                    <li>
                        <a href="event_single.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Event
                            Single</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/Contactanos"><i class="fa fa-book" aria-hidden="true"></i>Contactanos</a>
            </li>
            <div class="text-center mg-top">
                <div class="btn-group">
                    <a href="/Recomendaciones" class="wp_button_reverse"
                        aria-label="Ir a recomendaciones">Recomendaciones</a>
                </div>
            </div>
        </ul>
    </div>
    <!-- banner section start -->

    @yield('content')

    <!-- footer section start -->
    <div class="wp_footer_wrapper wp_top_padder100 wp_bottom_padder50">
        <img src="images/shape1.png" alt="water-park-footer-shape" class="img-responsive shape1" />
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_footer_content">
                        <img src="images/asirix220.png" class="img-logo" alt="water-park-footer-logo" />
                        <ul>
                            <li><a href="/">Inicio</a></li>
                            <li><a href="/Nosotros">Nosotros</a></li>
                            <li><a href="/Galeria">Galeria</a></li>
                            <li><a href="/Servicios">Servicios</a></li>
                            <li><a href="/Contactanos">Contactanos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                    <div class="wp_footer_contact">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h2>Dirección</h2>
                        <p>Av.Condorcanqui 2751<br />Urb. Chacra Cerro - Comas,Lima, Peru , Lima, Peru
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                    <div class="wp_footer_contact">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h2>Telefonos</h2>
                        <p>Por verse</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                    <div class="wp_footer_contact">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h2>Correo</h2>
                        <a href="mailto:atencionalcliente@asiripark.com.pe"
                            aria-label="Envianos un correo">atencionalcliente@asiripark.com.pe</a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_social_icons">
                        <ul>
                            <li>
                                <a href="#" aria-label="Visitar Twitter"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" aria-label="Visitar Facebook"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" aria-label="Visitar Google plus"><i class="fa fa-google-plus"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" aria-label="Visitar Linkedin"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a>
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

    <!--- Btn Sidebar Static -->
    <button data-aos="zoom-in" onclick="topFunction()" id="myBtn" title="Volver arriba">↑</button>

    <!-- js files -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pie-chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/magnific-popup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init({
            offset: 40,
        });
    </script>
    @yield('scripts')


</body>

</html>
