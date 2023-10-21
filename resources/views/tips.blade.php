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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wp_event_text full">
                        <div class="wp_heading">
                            <h2>Recomendaciones</h2>
                        </div>
                        <h5>Estamos encantados de que hayas optado por disfrutar tu día con nosotros en Asiri Park. Tenemos
                            como objetivo brindarte una experiencia divertida y entretenida junto a tus seres queridos. A
                            continuación, te proporcionamos algunas pautas para que aproveches al máximo tu visita.
                        </h5>
                        <p><span class="number-bold">1. </span>Con tu entrada, tienes acceso a todas nuestras atracciones
                            (zona acuática, área de selfies, canchas de futbol, juegos para los más pequeños). Se puede
                            elegir entre 1/4 pollo con papas, salchipapas, nuggets con papas, chicken fingers con papas.
                        </p>
                        <p><span class="number-bold">2. </span>Tu entrada es válida únicamente para el día de tu visita. Si
                            decides salir de nuestras instalaciones, no podrás regresar posteriormente.
                        </p>
                        <p><span class="number-bold">3. </span>Por motivos de seguridad, te recomendamos seguir las
                            instrucciones del personal asignado quienes te guiarán para estacionar tu vehículo de acuerdo
                            con tu hora de llegada.
                        </p>
                        <p><span class="number-bold">4. </span>Nuestro personal llevará a cabo una revisión de todas las
                            mochilas y bolsos que entren al parque, con el objetivo de asegurar un día completamente seguro
                            para todos los visitantes.
                        </p>
                        <p><span class="number-bold">5. </span>Con fines de seguridad, no se permite la entrada al parque
                            con alimentos, bebidas, mascotas, armas, pelotas, globos, inflables, neveras portátiles,
                            cigarrillos, instrumentos musicales, alfombras, pistolas de agua, juguetes que puedan presentar
                            riesgos, silbatos, trompetas, megáfonos, objetos ruidosos, triciclos, bicicletas, scooters,
                            patinetas, carros, fósforos, objetivos inflamables, tijeras, navajas, cuchillos u otros objetos
                            cortantes, ni envases de vidrio.
                        </p>
                        <p><span class="number-bold">6. </span>Está permitido el uso de palos seflie, tripodes, flotadores
                            tipo chaleco o picaron (no colchonetas ni flotadores grandes).
                        </p>
                        <p><span class="number-bold">7. </span>Una vez que los visitantes ingresan a nuestras instalaciones.
                            Asiri Park asume responsabilidad de su seguridad durante su estadía. No nos hacemos cargo de los
                            productos alimenticios que elaboramos y servimos. Sin embargo, no podemos asumir responsabilidad
                            por los alimentos que provienen de fuentes extremas, ya que desconocemos sus procesos de
                            preparación y almacenamiento.
                        </p>
                        <p><span class="number-bold">8. </span>Se permite la entrada de una botella de plástico sellada de
                            hasta 1 litro por persona. En cuanto alimentos como papillas, leche en polvo, fórmula y termos
                            de agua hervida que no contengan vidrio en su interior (hasta un máximo de 750 ml), pueden ser
                            ingresados sin problemas. Los alimentos que se encuentren en envases o termos de vidrio, o si se
                            trata de refrigerios que forman parte de dietas especiales, su ingreso está sujeto a la
                            activación de un protocolo especial en la oficina de RRPP.
                        </p>
                        <p><span class="number-bold">9. </span>Con el fin de garantizar la seguridad tanto de los visitantes
                            como otros presentes en nuestras instalaciones, se prohíbe el acceso a aquellos visitantes que
                            muestren signos de enfermedades eruptivas o infecciosas. Esta medida se toma para salvaguardar
                            la salud de nuestra comunidad y del propio visitante.
                        </p>
                        <p><span class="number-bold">10. </span>Por respeto a la privacidad de otras personas, no está
                            permitido tomar fotografías ni realizar grabaciones de visitantes que no formen parte de nuestro
                            círculo de amistad o familiares.

                        </p>
                        <p><span class="number-bold">11. </span>Nuestro horario de atención es de 10 a.m a 6 p.m.
                        </p>
                        <p><span class="number-bold">12. </span>Contamos con agua certificada como saludable por parte de DIGESA. Para mantener este alto estándar de calidad, es obligatorio que los visitantes se duchen antes de ingresar a las piscinas y que utilicen exclusivamente ropa de baño de lycra o material impermeable, conforme con la normativa DS 007-2003-SA del 03 de abrir del 2003 de la DISA. Queda estrictamente prohibido ingresar a las piscinas con ropa interior, camisetas o pantalones cortos, ya sean deportivos o de algodón.

                        </p>
                        <p><span class="number-bold">13. </span>El ingreso a la zona acuática es de 10 a.m a 5:15 p.m.
                        </p>
                        <p><span class="number-bold">14. </span>Recomendamos utilizar protector solar, especialmente durante
                            la temporada de verano, como media preventiva para protegerse de las quemaduras solares. Además,
                            se recomienda el uso de repelente.
                        </p>
                        <p><span class="number-bold">15. </span>Asiri Park no asume responsabilidad por las variaciones
                            climáticas que puedan ocurrir a diario.

                        </p>
                        <p><span class="number-bold">16. </span>Para efectuar pagos con tarjetas de crédito, es necesario
                            mostrar su documento de identidad (DNI), o en el caso de visitantes extranjeros, el pasaporte o
                            carnet de extranjería.

                        </p>
                        <p><span class="number-bold">17. </span>La venta de cualquier tipo de mercadería dentro de las
                            instalaciones de Asiri Park está prohibida.
                        </p>
                        <br>
                        <p>Agradecemos tu elección y te deseamos un día maravilloso. ¡Disfruta al máximo!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')

@section('scripts')
@endsection
