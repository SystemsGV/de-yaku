@extends('layout')

@section('content')

    <!-- breadcrumb section start -->
    <div class="wp_bread_wrapper">
        <img src="images/shape2.png" alt="" class="img-responsive shape2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_bread_caption">
                        <h1>{{ $title }}</h1>
                        <ul class="breadcrumb">
                            <li><a href="{{ url('/') }}">Inicio</a></li>
                            <li>{{ $title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- event section start -->
    <div class="wp_event_wrapper wp_top_padder100 wp_bottom_padder50">
        <div class="container">
            <div class="row">
                <H1>CONTENIDO</H1>
            </div>
        </div>
    </div>



@endsection('content')

@section('scripts')
@endsection



