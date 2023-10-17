@extends('layout')


@section('content')

<!-- breadcrumb section start -->
<div class="wp_bread_wrapper">
	<img src="images/shape2.png" alt="" class="img-responsive shape2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="wp_bread_caption">
					<h1>Nosotros</h1>
					<ul class="breadcrumb">
						<li><a href="{{ url('/') }}">Inicio</a></li>
						<li>Nosotros</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- about section start -->
<div class="wp_about_wrapper wp_top_padder100 wp_bottom_padder50">
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

<!-- copyright section start -->
<div class="wp_progress_wrapper wp_top_padder100 wp_bottom_padder50">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
				<div class="wp_progress_content">
					<div class="pie" data-percent="92"> <span class="pie-value"></span></div>
					<h3>Satisfied<br>Visits</h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
				<div class="wp_progress_content">
					<div class="pie" data-percent="100"> <span class="pie-value"></span></div>
					<h3>Pool<br>Cleanliness</h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
				<div class="wp_progress_content">
					<div class="pie" data-percent="90"> <span class="pie-value"></span></div>
					<h3>Staff<br>Attentions</h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wp_bottom_padder50">
				<div class="wp_progress_content">
					<div class="pie" data-percent="96"> <span class="pie-value"></span></div>
					<h3>Life Gaurd<br>Protection</h3>
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
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
				<div class="wp_service_caption">
					<img src="images/service/01.png" alt="" class="img-responsive">
					<h4>Water Park</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
				<div class="wp_service_caption">
					<img src="images/service/02.png" alt="" class="img-responsive">
					<h4>Spa</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
				<div class="wp_service_caption">
					<img src="images/service/03.png" alt="" class="img-responsive">
					<h4>Yoga</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
				<div class="wp_service_caption">
					<img src="images/service/04.png" alt="" class="img-responsive">
					<h4>Resort</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
				<div class="wp_service_caption">
					<img src="images/service/05.png" alt="" class="img-responsive">
					<h4>Gym</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wp_bottom_padder70">
				<div class="wp_service_caption">
					<img src="images/service/06.png" alt="" class="img-responsive">
					<h4>Sports</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection('content')

@section('scripts')
@endsection