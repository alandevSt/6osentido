@extends('layouts.app_account_activation')

@section('content')

@php
	date_default_timezone_set('America/Mexico_City');
@endphp

<section class="scheduler-1">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-9 mb-4">
				<h1 class="text-center">Si llegas 1 segundo tarde a tu Activación tendrás que reagendar</h1>
			</div>
            <div class="col-12">
                <p class="text-center">
                    Te enviamos un correo con la liga para que acceses a tu Activación. También podrás accesar desde tu perfil.<br>
                    Al hacer click en el botón de Google Calendar crearás un nuevo evento en tu calendario.<br>
                    Te enviaremos un segundo correo 6 minutos antes de iniciar tu Activación.
                </p>
            </div>
            <div class="col-lg-6 text-center scheduled-session-box bg-white">
                <img src="{{ url('img/google_calendar.png') }}" alt="" class="img-fluid">
                <a href="" target="_blank" class="btn btn-dark button-b"><span style="color: #fff;" class="">Entra</span> a tu sesión de Activación <i class="ml-4 fa-solid fa-arrow-up"></i></a>
            </div>
			 <div class="col-12">
                <p class="text-center mb-0">Tu Activación comenzará en</p>
			 	<div id="contador" class="text-center"></div>
			 </div>
		</div>
	</div>
</section>
 <script>

             $(document).ready(function() {
            // Define los horarios en formato "HH:MM:SS"
             var horarios = ["07:30:00"];
            var indiceActual = 0;

            // Función para calcular el tiempo restante en segundos hasta el siguiente horario
            function calcularTiempoRestante(horario) {
                var ahora = new Date();
                var [horas, minutos, segundos] = horario.split(":").map(Number);
                var proximaFecha = new Date(ahora.getFullYear(), ahora.getMonth(), ahora.getDate(), horas, minutos, segundos);

                // Si el próximo horario ya pasó hoy, se ajusta para el día siguiente
                if (proximaFecha <= ahora) {
                    proximaFecha.setDate(proximaFecha.getDate() + 1);
                }

                var tiempoRestante = Math.floor((proximaFecha - ahora) / 1000);
                return tiempoRestante;
            }

            // Función para encontrar el índice del horario más próximo
            function encontrarHorarioMasProximo() {
                var ahora = new Date();
                var tiempoMinimo = Infinity;
                var indiceMasProximo = 0;

                horarios.forEach((horario, indice) => {
                    var tiempoRestante = calcularTiempoRestante(horario);
                    if (tiempoRestante < tiempoMinimo) {
                        tiempoMinimo = tiempoRestante;
                        indiceMasProximo = indice;
                    }
                });

                return indiceMasProximo;
            }

            // Función para actualizar el contador
            function actualizarContador() {
                var tiempoRestante = calcularTiempoRestante(horarios[indiceActual]);

                if (tiempoRestante <= 0) {
                    indiceActual = (indiceActual + 1) % horarios.length;
                    tiempoRestante = calcularTiempoRestante(horarios[indiceActual]);
                }

                var horas = Math.floor(tiempoRestante / 3600);
                var minutos = Math.floor((tiempoRestante % 3600) / 60);
                var segundos = tiempoRestante % 60;

                // Formato de dos dígitos para horas, minutos y segundos
                horas = horas < 10 ? "0" + horas : horas;
                minutos = minutos < 10 ? "0" + minutos : minutos;
                segundos = segundos < 10 ? "0" + segundos : segundos;

                $("#contador").text(horas + ":" + minutos + ":" + segundos);
            }

            // Encontrar el horario más próximo al cargar la página
            indiceActual = encontrarHorarioMasProximo();

            // Actualizar el contador cada segundo
            setInterval(actualizarContador, 1000);

            // Inicializar el contador
            actualizarContador();
        });
       
 </script>
@stop