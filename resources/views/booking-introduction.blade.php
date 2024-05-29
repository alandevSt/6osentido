@extends('layouts.app_account')

@section('content')


    @php
        // Zona horaria de origen para los horarios específicos
        $zonaHorariaOrigen = 'America/Mexico_City';

        // Horarios específicos en la zona horaria de origen
        $horarios = [
            '07:30', // 7:30 am
            '13:30', // 1:00 pm
            '19:30', // 7:30 pm
        ];

        $count = 0;

        // Zona horaria de destino para los próximos 30 días
        $zonaHorariaDestino = 'America/Mexico_City';

        // Crear objeto DateTime actual en la zona horaria de origen
        $fechaActual = new DateTime('now', new DateTimeZone($zonaHorariaOrigen));

        // Arreglo para almacenar los horarios por día
        $horariosPorDia = [];

        // Iterar para los próximos 30 días
        for ($i = 0; $i < 30; $i++) {
            // Clonar el objeto DateTime actual para mantenerlo intacto en cada iteración
            $fechaProxima = clone $fechaActual;

            // Añadir días según el índice actual del ciclo
            $fechaProxima->modify("+$i day");

            // Convertir y almacenar los horarios definidos en la zona horaria de destino
            foreach ($horarios as $horario) {
                // Concatenar la fecha con el horario definido
                $fechaHora = $fechaProxima->format('Y-m-d') . ' ' . $horario;

                // Crear un nuevo objeto DateTime para el horario combinado
                $fechaHoraConvertida = DateTime::createFromFormat(
                    'Y-m-d H:i',
                    $fechaHora,
                    new DateTimeZone($zonaHorariaOrigen),
                );

                // Convertir el horario a la zona horaria de destino
                $fechaHoraConvertida->setTimezone(new DateTimeZone($zonaHorariaDestino));

                // Obtener la fecha en formato Y-m-d para usar como índice del arreglo
                $fecha = $fechaHoraConvertida->format('Y-m-d');

                // Almacenar el horario en el arreglo agrupado por día
                $horariosPorDia[$fecha][] = $fechaHoraConvertida->format('Y-m-d H:i:s');
            }
        }
    @endphp

    <style>
        .slick-prev,
        .slick-next {
            top: 10%;
        }

        .slick-prev:before,
        .slick-next:before {
            font-family: 'slick';
            font-size: 40px;
            line-height: 1;
            opacity: .75;
            color: #ED8721;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>

    <section class="scheduler-1">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 mb-4">
                    <h1 class="text-center">Prepárate para sentir una paz de otro mundo</h1>
                </div>
                <div class="col-12">
                    <p class="text-center">
                        Siente la Luz por 11 minutos para que conozcas el poder que estará en tus manos después de tu
                        Activación. <br>
                        Tenemos registrada tu hora local como Lunes a las 8:30am CDT. Toda sesión se encuentra en tu horario
                        local.
                    </p>
                </div>
                <div class="col-12">
                    <div class="multiple-items">
                        @foreach ($horariosPorDia as $día)
                            @php
                                $fecha = new DateTime($día[0]);
                                $dayOfWeek = $fecha->format('l');
                                $currentDate = new DateTime('now', new DateTimeZone($zonaHorariaOrigen));

                                $dayOfWeekInSpanish = getDayOfWeekInSpanish($dayOfWeek);
                            @endphp
                            <div style="padding-left: 1rem; padding-right: 1rem;">
                                <div class="fecha-box text-center {{ $currentDate->diff($fecha)->days === 0 ? 'selected' : '' }}"
                                    id="d{{ $fecha->format('d') }}">
                                    <p>{{ $fecha->format('d') }}</p>
                                    <span>{{ $dayOfWeekInSpanish }}</span>

                                </div>
                                @foreach ($día as $horario)
                                    @php
                                        $horario = new DateTime($horario);
                                    @endphp
                                    <div class="horario-box">
                                        <input id="date{{ $count }}" day="{{ $fecha->format('d') }}"
                                            class="dateIntroduction d-none" value="{{ $horario->format('Y-m-d H:i:s') }}"
                                            type="radio" name="date">
                                        <label for="date{{ $count }}">{{ $horario->format('h:i A') }}</label>
                                    </div>

                                    @php
                                        $count++;
                                    @endphp
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <a href="{{ route('register-account-introduction') }}" disabled
                        class="disabled btn btn-dark button-b"><span style="color: #fff;" class="">Haz click</span> en
                        el horario deseado y oprime este botón para continuar<i class="ml-4 fa-solid fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section>
    </section>
    <script>
        $(document).ready(function() {
            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 6,
                slidesToScroll: 1
            });

            // Detecta cuando se selecciona un campo de tipo radio
            $('input[type=radio][name=date]').change(function() {
                // Remove the selected class from all label containers
                $('.fecha-box').removeClass('selected');
                $('.button-b').removeClass('disabled');
                $('.button-b').removeAttr('disabled');
                // Add the selected class to the associated label container
                var labelId = $(this).attr('day');
                $('#d' + labelId).addClass('selected');
            });

        });
    </script>
@stop
