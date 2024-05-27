@extends('layouts.app_account_activation')

@section('content')

@php
	date_default_timezone_set('America/Mexico_City');
@endphp
<style>
        .increment-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 150px;
            padding: 10px;
            margin-top: 2rem;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.22);
        }

        .number-display {
            font-size: 24px;
            color: #c1a5e5;
            font-weight: bold;
        }

        .increment-button, .decrement-button {
            background-color: transparent;
            border: none;
            font-size: 24px;
            color: #c1a5e5;
            cursor: pointer;
        }

        .increment-button:focus, .decrement-button:focus {
            outline: none;
        }
    </style>
<section class="scheduler-2">
	<div class="container-fluid">
     <div class="row twopart justify-content-center align-items-center">
         <div class="col-md-6 text-center part-1">
             <h2>Eric Haddad,</h2>
             <p style="font-size: 1.1rem">nunca te olvidarás de hoy</p>
             <div class="container">
                 <div class="row justify-content-center mb-2 mt-2">
                     <div class="col-md-6 text-right" style="border-right: 1px solid #fff;">
                         <i class="fa-regular fa-clock"></i><div id="contador" class="contador-mini text-center"></div>
                     </div>
                     <div class="col-md-6 d-flex align-items-center">
                         <p class="mb-0"><i class="fa-solid fa-user-group" aria-hidden="true"></i> 3,333</p>
                     </div>
                 </div>
                 <div class="row justify-content-center">
                     <div class="col-lg-7 text-center">
                            <h2>¿Cuantos participarán en la Activación?</h2>
                            <div class="d-flex justify-content-center">
                                 <div class="increment-container">
                                    <button class="decrement-button" id="decrement-button">-</button>
                                    <span class="number-display" id="number-display">01</span>
                                    <button class="increment-button" id="increment-button">+</button>
                                </div>
                            </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-6 d-flex justify-content-center">
             <form class="form-payment">
                  <div class="form-row align-items-end">
                    <div class="col-12 text-center">
                        <img src="{{ url('img/tarjetas.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-12">
                        <div class="row pasarelas mt-4 mb-4">
                            <div class="col-4 text-right"><a href="">Paypal</a></div>
                            <div class="col-4"><a href="">Mercado Pago</a></div>
                            <div class="col-4 text-left"><a href="">Stripe</a></div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="idiomaPrincipal">Nombre del titular de la tarjeta</label>
                      <div class="input-icon">
                        <i class="fa-regular fa-user"></i>
                        <input type="text" class="form-control" id="idiomaPrincipal" placeholder="Escribe tu idioma principal">
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="tarjeta">Número de Tarjeta <span>*</span></label>
                      <div class="input-icon">
                        <i class="fa-regular fa-user"></i>
                        <input type="number" class="form-control" id="tarjeta" placeholder="Escribe el número">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="expiracion">Expiración <span>*</span></label>
                      <div class="input-icon">
                        <i class="fa-regular fa-user"></i>
                        <input type="number" class="form-control" id="expiracion" placeholder="MM / AA">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="codigo">Código <span>*</span></label>
                      <div class="input-icon">
                        <i class="fa-regular fa-user"></i>
                        <input type="number" class="form-control" id="codigo" placeholder="****">
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="postal">Código Postal <span>*</span></label>
                      <div class="input-icon">
                        <i class="fa-regular fa-user"></i>
                        <input type="number" class="form-control" id="postal" placeholder="Escribe tu código">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="codigo">Código de Descuento</label>
                      <div class="input-icon">
                        <i class="fa-regular fa-user"></i>
                        <input type="number" class="form-control" id="codigo" placeholder="Escribe tu código">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                        <a class="btn btn-dark button-b disabled d-inline-block" style="width: 200px"><span style="color: #fff">Aplicar</span></a>
                    </div>
                  </div>
                  
                </form>
         </div>
     </div>   
    </div>
</section>
 <script>

             $(document).ready(function() {
                //script button
                const displayElement = document.getElementById('number-display');
                const incrementButton = document.getElementById('increment-button');
                const decrementButton = document.getElementById('decrement-button');

                incrementButton.addEventListener('click', () => {
                    let currentNumber = parseInt(displayElement.textContent, 10);
                    currentNumber++;
                    displayElement.textContent = currentNumber.toString().padStart(2, '0');
                });

                decrementButton.addEventListener('click', () => {
                    let currentNumber = parseInt(displayElement.textContent, 10);
                    if (currentNumber > 1) { // Prevents the number from going below 01
                        currentNumber--;
                        displayElement.textContent = currentNumber.toString().padStart(2, '0');
                    }
                });
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