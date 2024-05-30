@extends('layouts.app')

@section('content')


  <section class="home-1">
    <div class="container">
        <div class="uk-child-width-expand@s" uk-grid>
            <div>
                <div class="uk-width-expand@m">
                    <p class="color_mlight mb-0"> <span class="icon_minus"  uk-icon="icon: minus; ratio: 1.4"></span>Científicamente medible,</p>
                    <h1 style="color: #8562A0;margin: 0;font-family: Claston !Important">La Activación <br><span style="color: #513369;">te regula</span></h1>
                    <p class="p_satoshi">cuerpo, pensamientos y emociones en segundos porque tu sexto sentido es un mecanismo de afrontamiento universal.</p>
                    <div>
                        <a href="" class="btn_custom btn btn-dark mb-4" style="background: #FFB646;">
                            Comienza con tu <b>Demostración</b>
                            <p class="mb-0" style="margin-top: 12px"><b>Siente otra dimensión por 11 minutos (gratis)</b></p>
                            <i class="ml-4 fa-solid fa-arrow-up"></i>
                        </a>
                    </div>
                    <div>
                        <a href="" class="btn_custom btn btn-outline-dark" style="background:#8562A0; color: #fff">
                            Continua con tu <b>Activación</b>
                            <p class="mb-0"style="margin-top: 12px"><b>Armonizate de por vida ($888)</b></p>
                            <i class="ml-4 fa-solid fa-arrow-up"></i>
                        </a>
                    </div>
                    <div>
                        <p class="text-top">
                            <span class="yellow">Estás a 1 hora de tener energía cuántica en las manos que produce armonía. Estás a 1 hora de lograr maestría de la técnica. <b>Activa tu sexto sentido hoy desde casa y eleva tu estado vibratorio por siempre.</b> Emana armonía todos los días, cambiando todo tu entorno con tu sexto sentido.</span>
                        </p>
                    </div>

                </div>
            </div>
            <div class="uk-width-1-2@m">
                <img src="{{ url('img/mano.png') }}" alt="" class="img-fluid rounded-circle img_custom">
            </div>
        </div>

{{--      <div class="row align-items-top justify-content-between">--}}
{{--        <div class="col-lg-4">--}}
{{--          <p class="mb-0"> <span class="icon_minus"  uk-icon="icon: minus; ratio: 1.4"></span>Científicamente medible,</p>--}}
{{--          <h1 style="color: #fff;margin: 0">La Activación <br><span style="color: #513369;">te regula</span></h1>--}}
{{--          <p >emociones y pensamientos en segundos.</p>--}}
{{--          <div>--}}
{{--            <a href="" class="btn btn-dark mb-4" style="background: #FFB646;">--}}
{{--              Comienza con tu <b>Demostración</b>--}}
{{--              <p class="mb-0">Siente otra dimensión por 15 minutos (gratis)</p>--}}
{{--              <i class="ml-4 fa-solid fa-arrow-up"></i>--}}
{{--            </a>--}}
{{--          </div>--}}
{{--          <div>--}}
{{--            <a href="" class="btn btn-outline-dark" style="background:#8562A0; color: #fff">--}}
{{--              Continua con tu <b>Activación</b>--}}
{{--              <p class="mb-0">Posee un sexto sentido de por vida</p>--}}
{{--              <i class="ml-4 fa-solid fa-arrow-up"></i>--}}
{{--            </a>--}}
{{--          </div>--}}

{{--        </div>--}}
{{--        <div class="col-lg-5">--}}
{{--          <img src="{{ url('img/mano.png') }}" alt="" class="img-fluid rounded-circle">--}}
{{--        </div>--}}
{{--        <div class="col-lg-6">--}}
{{--          <p><span class="yellow">--}}
{{--            Estás a 1 hora de tener un sexto sentido en las manos que se siente. La Luz te armonizará en segundos. Estás a 1 semana de maestría de la técnica y conceptos. Responder en lugar de reaccionar hace un mundo de diferencia. Activa tu sexto sentido hoy desde casa por siempre.--}}
{{--          </span></p>--}}
{{--        </div>--}}
{{--      </div>--}}
    </div>
  </section>
  <div class="collapse" id="collapseExample">
      <div class="card card-body">
          Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
      </div>
  </div>


  <!-- This is the modal -->
  <section class="home-4">
    <div class="container">
      <div class="row align-items-center justify-content-between mb-4 pb-4">
        <div class="col-md-2">
          <h2><b>Videos</b></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-4" >
          <a class="" href="#modal-1" uk-toggle>
            <div class="box-video" style="background-image: url({{ url('img/video1.png') }});">
              <span class="time">1:23</span>
              <p class="mb-0"><span class="">¿Qué es 6o Sentido?</span><i class="ml-4 fa-solid fa-play"></i></p>
            </div>
          </a>
        </div>
        <div class="col-md-3 mb-4">
          <a class="" href="#modal-2" uk-toggle>
            <div class="box-video" style="background-image: url({{ url('img/video2.png') }});">
              <span class="time">1:23</span>
              <p class="mb-0"><span class="">Demostración</span><i class="ml-4 fa-solid fa-play"></i></p>
            </div>
          </a>
        </div>
        <div class="col-md-3 mb-4">
          <a>
            <div class="box-video" style="background-image: url({{ url('img/video3.png') }});">
              <span class="time">1:23</span>
              <p class="mb-0"><span class="yellow">Activación</span><i class="ml-4 fa-solid fa-play"></i></p>
            </div>
          </a>
        </div>
        <div class="col-md-3 mb-4">
          <a href="">
            <div class="box-video" style="background-image: url({{ url('img/video4.png') }});">
              <span class="time">1:23</span>
              <p class="mb-0"><span class="">Reiki y similares vs. 6o Sentido (la Luz)</span><i class="ml-4 fa-solid fa-play"></i></p>
            </div>
          </a>
        </div>
        <div class="col-md-3 mb-4">
          <a href="">
            <div class="box-video" style="background-image: url({{ url('img/video5.png') }});">
              <span class="time">1:23</span>
              <p class="mb-0"><span class="">¿Qué es un Canal de Luz?</span><i class="ml-4 fa-solid fa-play"></i></p>
            </div>
          </a>
        </div>
        <div class="col-md-3 mb-4">
          <a href="">
            <div class="box-video" style="background-image: url({{ url('img/video6.png') }});">
              <span class="time">1:23</span>
              <p class="mb-0"><span class="">Testimonios</span><i class="ml-4 fa-solid fa-play"></i></p>
            </div>
          </a>
        </div>
        <div class="col-md-3 mb-4">
          <a href="">
            <div class="box-video" style="background-image: url({{ url('img/video7.png') }});">
              <span class="time">1:23</span>
              <p class="mb-0"><span class="">Fundación</span><i class="ml-4 fa-solid fa-play"></i></p>
            </div>
          </a>
        </div>
        <div class="col-md-3 mb-4">
          <a href="">
            <div class="box-video" style="background-image: url({{ url('img/video1.png') }});">
              <span class="time">1:23</span>
              <p class="mb-0"><span class="">Posturas de las Manos y Aplicaciones</span><i class="ml-4 fa-solid fa-play"></i></p>
            </div>
          </a>
        </div>
      </div>
    </div>
      <div id="modal-1" uk-modal>
          <div class="uk-modal-dialog uk-modal-body">
              <div class="uk-margin-bottom">
                  <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
              </div>
              <div class="uk-child-width-expand@s" uk-grid>
                  <div>
                      <button class="uk-button uk-button-default uk-margin-small-right button_prev_block" type="button"><span uk-icon="chevron-left" style="color: white"></span> Previo</button>
                  </div>
                  <div>
                      <button class="uk-button uk-button-default uk-margin-small-right button_next" type="button" uk-toggle="target: #modal-2"><b>Siguiente <span uk-icon="chevron-right"></span></b></button>
                  </div>
              </div>
              <button class="uk-button uk-button-default uk-modal-close button_close uk-margin-top" type="button"><span style="color: white">Cierra</span> el reproductor de video <span uk-icon="icon: arrow-right; ratio: 1.2" style="float: right;margin-top: 10px !important"></span></button>
          </div>
      </div>
      <div id="modal-2" uk-modal>
          <div class="uk-modal-dialog uk-modal-body">
              <div class="uk-margin-bottom">
                  <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
              </div>
              <div class="uk-child-width-expand@s" uk-grid>
                  <div>
                      <button class="uk-button uk-button-default uk-margin-small-right button_prev" type="button"uk-toggle="target: #modal-1"><span uk-icon="chevron-left"></span> Previo</button>
                  </div>
                  <div>
                      <button class="uk-button uk-button-default uk-margin-small-right button_next" type="button" uk-toggle="target: #modal-2"><b>Siguiente <span uk-icon="chevron-right"></span></b></button>
                  </div>
              </div>
              <button class="uk-button uk-button-default uk-modal-close button_close uk-margin-top" type="button"><span style="color: white">Cierra</span> el reproductor de video <span uk-icon="icon: arrow-right; ratio: 1.2" style="float: right;margin-top: 10px !important"></span></button>
          </div>
      </div>
  </section>

  <section class="home-5">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5">
            <a href="#modal-canal-luz" uk-toggle>
                <img src="{{ url('img/hector.jpg') }}" alt="" class="img-fluid">
            </a>
        </div>
        <div class="col-lg-6">
          <h2 class="mb-4 h1" style="color: #513369;font-family: Claston">Un Canal</h2>
          <p class="color_m">
              Mi nombres sembrados son Iyawankan Tatanka (Buffalo Saltando) y Surya (Sol) y te ofrezco el mejor regalo que te darás en toda tu vida y no tienes que venir por el.
          </p>
            <p class="color_m">
                Te voy a enseñar muchas maneras prácticas de armonizar a lo largo
                del día, seas niño, padre, profesional o sanador. También te daré las bases para aprender lo que significa ser un Canal. Tu sexto sentido te guiará todo el resto de tus días.
            </p>
            <p class="color_m">
                <b>Cuando estés acostado para recibir la Luz durante tu Demostración o Activación, yo estaré contigo a distancia. Activo 126 Puntos Axiotonales en todos los participantes de cada Activación.</b>
            </p>
            <p class="color_m">
                Al estar en contacto con la armonía tocas a la dimensión cuántica y sientes una paz que no proviene de este mundo. Regresarás con una experiencia mística que contar y por eso te pido que grabes tu experiencia.
            </p>
            <p class="color_m">
                Cada vez que usas la armonía en tus manos, te regulas y
                regulas a los demás con una energía armónica que se siente instantáneamente.
                Aparte del sexto sentido en las manos y el sentimiento que lo acompaña, podrás ver cambios en tí y en los demás.
            </p>
            <p class="color_m">
                No me necesitarás después de que aprendas la técnica, la practiques y respondas preguntas básicas. Estás a 3 videos de ser un Canal capaz de afectar tu estado interno, externo y el de tus relaciones.
            </p>
        </div>
      </div>
    </div>
      <div id="modal-canal-luz" uk-modal>
          <div class="uk-modal-dialog uk-modal-body">
              <div class="uk-margin-bottom">
                  <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
              </div>
              <button class="uk-button uk-button-default uk-modal-close button_close uk-margin-top" type="button"><span style="color: white">Cierra</span> el reproductor de video <span uk-icon="icon: arrow-right; ratio: 1.2" style="float: right;margin-top: 10px !important"></span></button>
          </div>
      </div>
  </section>
  <section class="home-6">
    <div class="container">
        <h2 class="h1 mb-0" style="font-family: Claston;color:#513369">Glosario</h2>
        <p style="font-size: .9rem;" class="mb-4 pb-1 p_satoshi_li">Lee esto antes y después haber recibido la Luz</p>
      <div class="row">
        <div class="col-lg-5">
            <ul class="uk-subnav uk-subnav-pill" uk-switcher="connect: .switcher-container">
                <li><a class="height_45" href="">LUZ / VIBRACIÓN ARMÓNICA<i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                <li><a class="height_45" href="">CANAL DE LUZ <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                <li><a class="height_45" href="">ENERGÍA CUÁNTICA<i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                <li><a class="height_45" href="">INICIACIÓN<i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                <li><a class="height_45" href="" class="mb-0">PORTAL<i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
            </ul>
        </div>
        <div class="uk-switcher switcher-container col-lg-7 ">
            <div>
                <p style="font-size: 1.1rem" class="mb-0">Energía cuántica palpable por las manos.<br><br>
                    A partir de 2023, esto sigue siendo una especulación, ya que calcular la <span class="yellow">energía del punto cero</span> del espacio está más allá de la capacidad actual de los físicos. Sin embargo, los campos cuánticos deben considerarse reales, ya que transportan energía y tienen efectos tanto calculables como mensurables sobre la luz y la materia del Universo. <br><br>
                    Se puede ver la energía que sale de las manos de los Iniciados con un instrumento llamado <span class="yellow">Kirlian</span> que es capaz de medir la <span class="yellow">descarga eléctrica coronal</span>. Muchos Canales de Luz podemos ver la Luz cuando se la damos a otros.
                </p>
            </div>
            <div>
                <p style="font-size: 1.1rem" class="mb-0">
                    2
                </p>
            </div>
            <div>
                <p style="font-size: 1.1rem" class="mb-0">
                    3
                </p>
            </div>
            <div>
                <p style="font-size: 1.1rem" class="mb-0">
                   4
                </p>
            </div>
            <div>
                <p style="font-size: 1.1rem" class="mb-0">
                   5
                </p>
            </div>

        </div>
      </div>
    </div>
  </section>
  <section class="home-7 resenas">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">

          <h2 class="h1">
            <span style="color: #8562A0;margin: 0;font-family: Claston !Important">Reseñas<br> de la<br> Demostraciòn</span>
          </h2>
        </div>
        <div class="col-lg-3">
           <img src="{{ url('img/comilla.png') }}" alt="" class="img-fluid">
          <p style="font-size: .9rem">Entró una luz por mis pies y salió por mi cabeza. Pude percibir muchas luces de diferentes colores y hormigueo en las manos.</p>
            <p class="text-right"><span style="color: white !important;" class="icon_minus"  uk-icon="icon: minus; ratio: 1.4"></span><b>Diana Gonzalez</b></p>
        </div>
        <div class="col-lg-3">
           <img src="{{ url('img/comilla.png') }}" alt="" class="img-fluid">
          <p style="font-size: .9rem">Sentí unas manos tocar mi cabeza, ojos y pecho con ligera presión y calor donde me estaban tocando.<br><br></p>
          <p class="text-right"><span style="color: white !important;" class="icon_minus"  uk-icon="icon: minus; ratio: 1.4"></span><b>Socorro Torres</b></p>
        </div>
        <div class="col-lg-3">
           <img src="{{ url('img/comilla.png') }}" alt="" class="img-fluid">
          <p style="font-size: .9rem">Paré de sentir mi cuerpo y sentí mucha paz. Después sentí punzaciones en mi colon, que me duele seguido.<br><br></p>
          <p class="text-right"><span style="color: white !important;" class="icon_minus"  uk-icon="icon: minus; ratio: 1.4"></span><b>Antonio Castro</b></p>
        </div>
      </div>
    </div>
  </section>
 <section class="home-6-faq ">
    <div class="container">
        <h2 class="h1 mb-0"style="font-family: Claston;color: #513369">Preguntas Frecuentes</h2>
        <p style="font-size: .9rem;" class="mb-4 pb-1 p_satoshi_li">Lee esto antes y después de haber recibido la Luz</p>
      <div class="row">
        <div class="col-lg-5">
            <div style=" overflow: auto;height: 300px">
                <ul class="uk-subnav uk-subnav-pill" uk-switcher="connect: .switcher-container-faq">
                    <li><a class="height_45" href="">¿Qué pasa si al finalizar mi Activación no puedo sentir sensación en mis manos?<i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Qué pasa si llego tarde a mi sesión?<i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Qué es la autorregulación? <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Cómo se sienten mis manos al activar mi sexto sentido?<i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Cuáles son los beneficios de armonizar?<i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="" class="mb-0">¿Con qué frecuencia debo armonizar?<i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Puedo abusar de esta energía?<i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="" class="mb-0">¿Puedo armonizar sin que me noten?
                            <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="" class="mb-0">
                            ¿Cómo le muestro a la gente que tengo un sexto sentido?
                            <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="" class="mb-0">¿Cómo hago una demostración?
                            <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Qué pasa si los inactivos no sanan al armonizarlos?<i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Cómo hablar de curación?
                            <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Cómo armonizar situaciones tensas?
                            <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Cómo generar interés por armonizar?
                            <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Cómo recomendar el sexto sentido a otros?<i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Cómo puedo presentarles a otros el sexto sentido?<i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Por qué el Ho'oponopono es fundamental para la armonización?
                            <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Por qué debería someterme a la Activación?
                            <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Cuánto dura la Activación?
                            <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Qué preparativos necesito hacer antes de cualquier<br> sesión?
                            <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Qué conocimientos previos debo tener?<i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Se puede repetir una Activación?
                            <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Tengo que ser creyente para ser Activado?
                            <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Qué hago con los tratamientos y medicamentos que<br> me ha recetado mi médico?
                            <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Puedo tomar una sesión de Demostración o  <br>Activación si estoy embarazada?
                            <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Qué métodos de pago aceptan?
                            <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>
                    <li><a class="height_45" href="">¿Cuáles son sus horarios de atención?

                            <i class="ml-4 fa-solid fa-arrow-up"></i></a></li>


                </ul>
            </div>
        </div>
        <div class="uk-switcher switcher-container-faq col-lg-7">
            <div>
                <p style="font-size: 1.1rem" class="mb-0">
                    Te acostaste después de que el video te indicará que lo hicieras, te moviste excesivamente mientras estabas acostado o te levantaste antes de que sonaran las campanadas.<br>
                    Puedes reprogramar una vez más sin costo adicional. Si por alguna extraña razón no recibes la Activación en tu segunda sesión, se te reembolsará el monto total del pago.
                </p>
            </div>
             <div class="mb-0">
                 <p style="font-size: 1.1rem" >
                     Si llegas tarde a tu sesión, ya no podrás continuar con ella.<br>
                     Tendrás que reprogramar sin costo extra.
                 </p>
             </div>
            <div>
                <p>
                    La autorregulación implica gestionar tu comportamiento y tus reacciones ante sentimientos y eventos externos. Abarca el control de las respuestas a emociones fuertes como la frustración, la excitación, la ira y la vergüenza.
                    Sexto Sentido utiliza el término "Armonización" para describir la autorregulación porque activar tu Sexto Sentido conduce a la Armonía.

                </p>
            </div>
            <div>
                <p>
                    Cada persona experimenta la sensación de una manera única, pero puedes esperar lo siguiente:<br>
                    <ul>
                        <li>
                            Vibración/hormigueo
                        </li>
                        <li>
                            Una suave brisa de viento
                        </li>
                        <li>
                            Caliente / Frío
                        </li>
                        <li>
                            Plasma

                        </li>
                     </ul>
                </p>
            </div>
            <div>
                <p>
                    Reducción del estrés y la ansiedad, alivio del dolor, curación emocional y claridad mental.
                </p>
            </div>
            <div>
                <p>
                    Para traumatismos grandes, la armonización tarda aproximadamente 1 minuto, mientras que la autorregulación normal tarda 15 segundos. La mayoría de las personas mantienen todo el día su Armonía activando su Sexto Sentido 10 veces al día.
                </p>
            </div>
            <div>
                <p>
                    Esta forma de energía cuántica es segura y carece de efectos nocivos con un uso prolongado.
                </p>
            </div>
            <div>
                <p>
                    Sí, es fácil armonizar discretamente en público. Para obtener instrucciones detalladas, consulte el vídeo sobre aplicaciones y posturas de las manos.

                </p>
            </div>
            <div>
                <p>
                    Invita a alguien a experimentarlo: "¿Te gustaría sentir una Armonía instantánea?". Una demostración de 5 minutos acostado deja a todos boquiabiertos.
                </p>
            </div>
            <div>
                <p>
                    <b>Antes:</b> "Te voy a ayudar a relajarte en sólo cinco minutos". "Estarás en un estado alterado en menos de un minuto". “Quítate los zapatos, acuéstate y cierra los ojos”. "Mi voz te despertará cuando hayamos terminado".<br>

                    <b>Durante:</b> Mantenga un ambiente tranquilo sin distracciones como hablar o escuchar música. Puedes bajar un brazo cuando estés armonizando para darle un descanso si es necesario.
                        <br>
                    <b>Después:</b> "Devuelve tu conciencia a tu cuerpo y comparte lo que sentiste. Mantén los ojos cerrados hasta que estés listo para abrirlos". “Cuando estés listo, describe lo que sentiste”. “¿Qué más recuerdas?”
                </p>
            </div>
            <div>
                <p>
                    Habiendo sido Activados, respetamos el libre albedrío de cada inactivo y nos distanciamos de la tentación de juzgar las experiencias de los demás. También debemos evitar atribuirnos el mérito de curar a otros cuando los síntomas desaparecen. La curación es una elección personal.
                </p>
            </div>
            <div>
                <p>
                    La curación es un proceso personal que requiere que los individuos abracen la Armonización sin resistencia. Las creencias dan forma a nuestras experiencias y resaltan la importancia de una mentalidad abierta para facilitar la curación.
                </p>
            </div>
            <div>
                <p>
                    En momentos de tensión, utiliza cualquier postura que se te ocurra. Respira profundamente para recuperar la paz, puedes afectar el ambiente y calmar a los demás en un minuto. Renuncia a juzgar sobre el resultado durante 1 minuto.
                </p>
            </div>
            <div>
                <p>
                    Ofrécele a una persona una sesión, ya sea presencial o remota. Explícale que también pueden Activarse con un compromiso de una hora y Armonizarse a partir de ese momento
                </p>
            </div>
            <div>
                <p>
                    Mencionale que tienes un 10% de descuento para amigos, pueden participar desde la comodidad de su casa y pueden probarlo antes de comprar. “Armonízate instantáneamente por el resto de tu vida”.
                </p>
            </div>
            <div>
                <p>
                    "Hice la mejor inversión en mí mismo en años". "Acabo de tener un sexto sentido en mis manos". "Puedo armonizar mi vibra en cualquier momento".
                </p>
            </div>
            <div>
                <p>
                    Muchas escuelas de pensamiento coinciden en la idea de que el perdón es la clave de la felicidad.
                </p>
            </div>
            <div>
                <p>
                    Porque te otorga un valioso Sexto Sentido para toda la vida. A menudo expresó gratitud a la persona que me activó y me bendijo con un regalo tan reconfortante.
                </p>
            </div>
            <div>
                <p>
                    La Activación tiene una duración de una hora. Tienes unos minutos de introducción y preparación, seguido de 30 minutos acostado, con los ojos cerrados y finalmente 30 minutos de plática.
                </p>
            </div>
            <div>
                <p>
                    Ninguno.
                </p>
            </div>
            <div>
                <p>
                    Ninguno.
                </p>
            </div>
            <div>
                <p>
                    Es totalmente innecesario. La activación es un evento único en la vida para todos.


                </p>
            </div>
            <div>
                <p>
                    Todo el mundo tiene la misma experiencia cuando se despierta después de su Activación, ya sea un escéptico, un ateo o una persona religiosa. Todos experimentan la energía en sus manos al generarla conscientemente. No se requiere fe ni habilidades especiales.

                </p>
            </div>
            <div>
                <p>
                    Armonizar es compatible con cualquier tipo de tratamiento existente. Es muy probable que el medicamento te funcione mejor y que con el tiempo el médico reduzca o retire la prescripción. La responsabilidad de tomar o no medicamentos prescritos por los médicos recae
                    consigo mismo.

                </p>
            </div>
            <div>
                <p>
                    La armonización se puede practicar durante el embarazo. Las activaciones son recibidas por el niño y la madre, lo cual es una doble bendición. Tu hijo nacerá con un sexto sentido.
                </p>
            </div>
            <div>
                <p>
                    Puedes pagar a través de Paypal, Stripe y MercadoPago.
                    MercadoPago ofrece transferencias, tarjetas y depósitos en efectivo en tiendas selectas de Latinoamérica.

                </p>
            </div>
            <div>
                <p>
                    Contamos con 3 Demostraciones seguidas de 3 Activaciones diarias.<br>
                    Las Activaciones comienzan 30 minutos después de las Demostraciones.<br>
                    Las Demostraciones comienzan puntualmente a las 7:30 am, 1:30 pm y 7:30 pm CDT (Horario de verano central). Aunque en el sitio web los horarios se convierten automáticamente a tu zona horaria local.

                </p>
            </div>
        </div>
      </div>
    </div>
  </section>
  <section class="home-7 resenas">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">

          <h2 class="h1">
              <span style="color: #8562A0;margin: 0;font-family: Claston !Important">Reseñas después de 1 semana</span>
          </h2>
        </div>
        <div class="col-lg-3">
           <img src="{{ url('img/comilla.png') }}" alt="" class="img-fluid">
          <p style="font-size: .9rem">Sentí desde los primeros días que mis emociones las podía controlar mejor. Me siento mas centrado.<br><br></p>
          <p class="text-right"><span style="color: white !important;" class="icon_minus"  uk-icon="icon: minus; ratio: 1.4"></span><b>Yohan Ludwig</b></p>
        </div>
        <div class="col-lg-3">
           <img src="{{ url('img/comilla.png') }}" alt="" class="img-fluid">
          <p style="font-size: .9rem">SSe lo doy a mi bebe y lo relaja. Es divertido y en sólo unos cuantos segundos mi energía cambia para bien.<br><br></p>
          <p class="text-right"><span style="color: white !important;" class="icon_minus"  uk-icon="icon: minus; ratio: 1.4"></span><b>Julieta Rojas</b></p>
        </div>
        <div class="col-lg-3">
           <img src="{{ url('img/comilla.png') }}" alt="" class="img-fluid">
          <p style="font-size: .9rem">Como psicólogo mi día acaba con menos cansancio cuando uso la Luz durante llamadas. Pacientes mencionan mi nueva paz y tranquilidad.</p>
          <p class="text-right"><span style="color: white !important;" class="icon_minus"  uk-icon="icon: minus; ratio: 1.4"></span><b>Antonio Castro</b></p>
        </div>
      </div>
    </div>
  </section>
  <section class="home-9">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center mb-4 pb-4"style="color: #8562A0;margin: 0;font-family: Claston !Important">Recuentos Típicos al sentir la luz</h1>
        </div>
        <div class="col-md-3">
          <a href="">
            <div class="box-video">
                <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" width="1800" height="1200" loop muted playsinline uk-video="autoplay: hover"></video>
                <span class="time">1:23</span>
              <p class="mb-0"><span class="">Demostración</span><i class="ml-4 fa-solid fa-play" aria-hidden="true"></i></p>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="">
            <div class="box-video" style="background-image: url({{ url('img/people1.svg') }});">
              <span class="time">1:23</span>
              <p class="mb-0"><span class="">Demostración</span><i class="ml-4 fa-solid fa-play" aria-hidden="true"></i></p>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="">
            <div class="box-video" style="background-image: url({{ url('img/people1.svg') }});">
              <span class="time">1:23</span>
              <p class="mb-0"><span class="">Demostración</span><i class="ml-4 fa-solid fa-play" aria-hidden="true"></i></p>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="">
            <div class="box-video" style="background-image: url({{ url('img/people1.svg') }});">
              <span class="time">1:23</span>
              <p class="mb-0"><span class="">Demostración</span><i class="ml-4 fa-solid fa-play" aria-hidden="true"></i></p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="home-10">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center"style="color: #8562A0;margin: 0;font-family: Claston !Important">Próximos horarios de la Introducción</h1>
          <p class="text-center mb-4 pb-4" style="color: #fff; font-size: 1.2rem">La sesión durará 15 minutos </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="horarios">
            <a href=""><img src="{{ url('img/horarios.png') }}" alt="" class="img-fluid"></a>
            <div class="info-horario container">
              <div class="row">
                <div class="col-6">
                    <p><i class="fa-solid fa-user-group"></i> <b>333</b> Registrados</p>
                </div>
                <div class="col-6">
                    <p class="text-right"><i class="fa-regular fa-calendar"></i> <b>Hoy - 7:30 PM</b></p>
                </div>
              </div>
              <a href="" class="btn btn-dark" style="background: #FFB646;"><span style="color: white">Agenda</span> <b>ahora</b> <i class="ml-4 fa-solid fa-arrow-up"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="horarios">
            <a href=""><img src="{{ url('img/horarios.png') }}" alt="" class="img-fluid"></a>
            <div class="info-horario container">
              <div class="row">
                <div class="col-6">
                  <p><i class="fa-solid fa-user-group"></i><b> 333</b> Registrados</p>
                </div>
                <div class="col-6"style="padding-left: 0">
                  <p class="text-right"><i class="fa-regular fa-calendar"></i><b> Mañana - 7:30 PM</b></p>
                </div>
              </div>
              <a href="" class="btn btn-dark" style="background: #FFB646;"><span style="color: white">Agenda</span> <b>ahora</b> <i class="ml-4 fa-solid fa-arrow-up"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="horarios">
            <a href=""><img src="{{ url('img/horarios.png') }}" alt="" class="img-fluid"></a>
            <div class="info-horario container">
              <div class="row">
                <div class="col-6">
                  <p><i class="fa-solid fa-user-group"></i> 333 Registrados</p>
                </div>
                <div class="col-6"style="padding-left: 0">
                    <p class="text-right"><i class="fa-regular fa-calendar"></i><b>Mañana- 7:30 PM</b></p>
                </div>
              </div>
              <a href="" class="btn btn-dark" style="background: #FFB646;"><span style="color: white">Agenda</span> <b>ahora</b> <i class="ml-4 fa-solid fa-arrow-up"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--<section class="home-11">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="text-center mb-0"><span class="yellow" style="font-size: .9rem">Iniciaciones  masivas</span></p>
          <h1 class="text-center mb-4 pb-4" style="color: #8562A0">Los <span style="color: #fff">11 de cada mes</span> la fundación<br>regala a los que más lo necesitan</h1>
        </div>
        <div class="col-12 text-center">
          <ul class="d-flex justify-content-center">
            <li>
              <h3>167</h3>
              <p>K-12</p>
            </li>
            <li>
              <h3>17</h3>
              <p>Orfanatos</p>
            </li>
            <li>
              <h3>45</h3>
              <p>Prisiones</p>
            </li>
            <li>
              <h3>129</h3>
              <p>Hospitales</p>
            </li>
            <li>
              <h3>31</h3>
              <p>Asilos</p>
            </li>
            <li>
              <h3>112</h3>
              <p>Animales</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>-->
@stop
