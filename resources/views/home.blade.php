    @extends('layout')


    @section('content')
        <!-- banner section start -->
        <div class="wp_banner_wrapper">
            <img src="images/shape2.png" alt="water-park-banner-shape1" class="img-responsive shape2" />
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-lg-offset-3 col-md-offset-2 col-sm-12 col-xs-12">
                        <div class="wp_banner_caption">
                            <div class="wp_banner_text text-shadow">
                                <p>BIENVENIDO A</p>
                                <h1 id="title">
                                    ASIRI PARK
                                </h1>
                            </div>
                            <p>
                                <span class="text-shadow">DONDE LAS RISAS HACEN <b class="text-splash">SPLASH</b></span>
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
                            <p></p>
                            <a href="/Nosotros" class="wp_button">Saber Más</a>
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
                            <h2>Galeria de Fotos</h2>
                        </div>
                        <div class="wp_button_group">
                            <button class="wp_button active" data-filter="all">Todos</button>
                            <button class="wp_button" data-filter="swimming">Piscinas</button>
                            <button class="wp_button" data-filter="games">Juegos</button>
                            <button class="wp_button" data-filter="photons">Fotones</button>
                            <button class="wp_button" data-filter="futbol">Futbol</button>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="wp_gallery">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming" data-value="1"
                                    >
                                    <div class="wp_gallery_img">
                                        <img src="images/new/psicinaint.webp" alt="Parque acuatico piscina 1"
                                            class="img-responsive" />
                                        <div class="wp_gallery_overlay popup-gallery">
                                            <a href="images/new/psicinaint.webp" aria-label="Parque acuatico piscina"><i
                                                    class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter  swimming" data-value="6"
                                    >
                                    <div class="wp_gallery_img">
                                        <img src="images/new/piscina1.webp" alt="Parque acuatico piscina 2"
                                            class="img-responsive" />
                                        <div class="wp_gallery_overlay popup-gallery">
                                            <a href="images/new/piscina1.webp" aria-label="Parque acuatico piscina"><i
                                                    class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming" data-value="3"
                                   >
                                    <div class="wp_gallery_img">
                                        <img src="images/new/rioLento.webp" alt="Parque acuatico piscina 3"
                                            class="img-responsive" />
                                        <div class="wp_gallery_overlay popup-gallery">
                                            <a href="images/new/rioLento.webp" aria-label="Parque acuatico piscina"><i
                                                    class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter swimming" data-value="6"
                                    >
                                    <div class="wp_gallery_img">
                                        <img src="images/new/carrera1.webp" alt="Parque acuatico piscina 4"
                                            class="img-responsive" />
                                        <div class="wp_gallery_overlay popup-gallery">
                                            <a href="images/new/carrera1.webp" aria-label="Parque acuatico piscina"><i
                                                    class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter kids games" data-value="6"
                                    ">
                                    <div class="wp_gallery_img">
                                        <img src="images/new/remo.webp" alt="Parque acuatico piscina 5"
                                            class="img-responsive" />
                                        <div class="wp_gallery_overlay popup-gallery">
                                            <a href="images/new/remo.webp" aria-label="Parque acuatico piscina"><i
                                                    class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter games" data-value="5"
                                    >
                                    <div class="wp_gallery_img">
                                        <img src="images/new/yakubaby.webp" alt="Parque acuatico piscina 6"
                                            class="img-responsive" />
                                        <div class="wp_gallery_overlay popup-gallery">
                                            <a href="images/new/yakubaby.webp" aria-label="Parque acuatico piscina"><i
                                                    class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter futbol" data-value="7"
                                    >
                                    <div class="wp_gallery_img">
                                        <img src="images/new/cancha1.webp" alt="Parque acuatico piscina 7"
                                            class="img-responsive" />
                                        <div class="wp_gallery_overlay popup-gallery">
                                            <a href="images/new/cancha1.webp" aria-label="Parque acuatico piscina"><i
                                                    class="fa fa-search-plus"></i></a>
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
                            <h2>Instalaciones</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder80" data-aos="flip-left">
                        <div class="wp_service_caption">
                            <img src="images/service/01.png" alt="water-park-service1" class="img-responsive" />
                            <h4>Piscinas</h4>
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
                            <h4>Fotones</h4>
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
                            <h4>Juegos</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                                consectetur adipiscing.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-2 col-md-offset-2  wp_bottom_padder80" data-aos="flip-right">
                        <div class="wp_service_caption">
                            <img src="images/service/04.png" alt="water-park-service4" class="img-responsive" />
                            <h4>Canchas de Futbol</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt Lorem ipsum dolor sit amet,
                                consectetur adipiscing.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12   wp_bottom_padder80" data-aos="flip-left">
                        <div class="wp_service_caption">
                            <img src="images/service/05.png" alt="water-park-service5" class="img-responsive" />
                            <h4>Asiri Food</h4>
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
                            <h2>Tarifas</h2> <br>
                            <div><span class="schedule">Abierto: De lunes a domingos 10 a.m - 6 p.m</span></div>
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
                    <div class="col-lg-4 col-md-4 col-sm-6 col-lg-offset-0 col-md-offset-0 col-sm-offset-3 col-xs-12 wp_bottom_padder50"
                        data-aos="zoom-in-up">
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
                            <h2>Servicios</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50" data-aos="zoom-in-right"
                        data-aos-offset="10">
                        <div class="wp_event_caption">
                            <div class="wp_event_img">
                                <img src="images/new/empresas.webp" alt="water-park-event1" class="img-responsive"
                                    style="border-radius: 15px" />
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50" data-aos="fade-down"
                        data-aos-offset="50">
                        <div class="wp_event_caption left_img">
                            <div class="wp_left_event_img">
                                <img src="images/new/COLE.webp" alt="water-park-event2" class="img-responsive"
                                    style="border-radius: 15px" />
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50" data-aos="zoom-in-right"
                        data-aos-offset="50">
                        <div class="wp_event_caption">
                            <div class="wp_event_img">
                                <img src="images/new/CUMPLE.webp" alt="water-park-event3" class="img-responsive"
                                    style="border-radius: 15px" />
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
    @endsection('content')

    @section('scripts')
    @endsection
