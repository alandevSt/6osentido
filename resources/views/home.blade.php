@extends('layouts.app')

@section('content')

  <section class="home-1">
    <div class="container">
      <div class="row align-items-top justify-content-between">
        <div class="col-lg-4">
          <p class="line mb-0">Científicamente medible,</p>
          <h1 style="color: #fff">la Luz <br><span style="color: #513369;">te regula</span></h1>
          <p s>emociones y pensamientos en segundos.</p>
          <div>
            <a href="" class="btn btn-dark mb-4" style="background: #FFB646;">
              Comienza con tu <b>Demostración</b>
              <p class="mb-0">Siente otra dimensión por 15 minutos (gratis)</p>
              <i class="ml-4 fa-solid fa-arrow-up"></i>
            </a>
          </div>
          <div>
            <a href="" class="btn btn-outline-dark" style="background:#8562A0; color: #fff">
              Continua con tu <b>Activación</b>
              <p class="mb-0">Posee un sexto sentido de por vida</p>
              <i class="ml-4 fa-solid fa-arrow-up"></i>
            </a>
          </div>

        </div>
        <div class="col-lg-5">
          <img src="{{ url('img/mano.png') }}" alt="" class="img-fluid rounded-circle">
        </div>
        <div class="col-lg-6">
          <p><span class="yellow">
            Estás a 1 hora de tener un sexto sentido en las manos que se siente. La Luz te armonizará en segundos. Estás a 1 semana de maestría de la técnica y conceptos. Responder en lugar de reaccionar hace un mundo de diferencia. Activa tu sexto sentido hoy desde casa por siempre.
          </span></p>
        </div>
      </div>
    </div>
  </section>
  <div class="collapse" id="collapseExample">
      <div class="card card-body">
          Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
      </div>
  </div>
  <section class="home-4">
    <div class="container">
      <div class="row align-items-center justify-content-between mb-4 pb-4">
        <div class="col-md-2">
          <h2>Videos</h2>
        </div>
        <div class="col-md-10">
          <p class="mb-0">Tomar control de tu estado vibratorio después de tu Iniciación es fácil. El mundo te necesita en tu centro.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-4" uk-lightbox>
          <a class="" href="https://www.youtube.com/watch?v=c2pz2mlSfXA" data-caption="YouTube">
            <div class="box-video" style="background-image: url({{ url('img/video1.png') }});">
              <span class="time">1:23</span>
              <p class="mb-0"><span class="">¿Qué es 6o Sentido?</span><i class="ml-4 fa-solid fa-play"></i></p>
            </div>
          </a>
        </div>
        <div class="col-md-3 mb-4">
          <a href="">
            <div class="box-video" style="background-image: url({{ url('img/video2.png') }});">
              <span class="time">1:23</span>
              <p class="mb-0"><span class="">Demostración</span><i class="ml-4 fa-solid fa-play"></i></p>
            </div>
          </a>
        </div>
        <div class="col-md-3 mb-4">
          <a href="">
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
  </section>
  <section class="home-5">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5">
          <img src="{{ url('img/hector.jpg') }}" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6">
          <h2 class="mb-4 h1" style="color: #513369">Un Canal de Luz</h2>
          <p style="color: #2D082E">Te voy a enseñar muchas maneras prácticas de jugar con la Luz a lo largo
            del día, seas niño, padre, profesional o sanador. Todos tenemos la
            misma lección delante de nosotros: ama a tu prójimo cómo quieres ser amado.
            Produce amor en tí y tus relaciones por jugar con la Luz. Conviértete en la
            Luz del Mundo con tu sexto sentido.  <br><br>

            Mientras te acuestas para recibir la Luz, sea tu Introducción o Iniciación, yo estaré contigo. Todos entramos a la dimensión cuántica al estar en contacto
            con la Luz. Puedes esperar sentir una paz que no proviene de este mundo. También,
            todos regresan con una experiencia mística que contar y por eso pedimos que grabes
            tu recuento.<br><br>

            Siempre podrás acudir a ese estado al recibir la Luz. Cuando la das, tu te regulas y
            regulas a los demás con una vibración armónica que se siente instantáneamente.<br><br>

            No me necesitarás después de aprender la técnica, practicar la técnica y poder responder
            preguntas básicas. Estás a 3 videos de ser un Canal de Luz capaz de afectar tu estado interno, externo y el de tus relaciones.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="home-6">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">


          <h2 class="h1 mb-0">Glosario</h2>
          <p style="font-size: .9rem;" class="mb-4 pb-1">Lee esto antes y después haber recibido la Luz</p>
          <a href="" class="active">LUZ / VIBRACIÓN ARMÓNICA<i class="ml-4 fa-solid fa-arrow-up"></i></a>
          <a href="">CANAL DE LUZ <i class="ml-4 fa-solid fa-arrow-up"></i></a>
          <a href="">ENERGÍA CUÁNTICA<i class="ml-4 fa-solid fa-arrow-up"></i></a>
          <a href="">INICIACIÓN<i class="ml-4 fa-solid fa-arrow-up"></i></a>
          <a href="" class="mb-0">PORTAL<i class="ml-4 fa-solid fa-arrow-up"></i></a>
        </div>
        <div class="col-lg-7">

          <p style="font-size: 1.1rem" class="mb-0">Energía cuántica palpable por las manos.<br><br>

            A partir de 2023, esto sigue siendo una especulación, ya que calcular la <span class="yellow">energía del punto cero</span> del espacio está más allá de la capacidad actual de los físicos. Sin embargo, los campos cuánticos deben considerarse reales, ya que transportan energía y tienen efectos tanto calculables como mensurables sobre la luz y la materia del Universo. <br><br>

             Se puede ver la energía que sale de las manos de los Iniciados con un instrumento llamado <span class="yellow">Kirlian</span> que es capaz de medir la <span class="yellow">descarga eléctrica coronal</span>. Muchos Canales de Luz podemos ver la Luz cuando se la damos a otros.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="home-7 resenas">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">

          <h2 class="h1">
            <span style="color: #8562A0">Reseñas<br> de la<br> Introducción</span>
          </h2>
        </div>
        <div class="col-lg-3">
           <img src="{{ url('img/comilla.png') }}" alt="" class="img-fluid">
          <p style="font-size: .9rem">Entró una luz por mis pies y salió por mi cabeza. Pude percibir muchas luces de diferentes colores y hormigueo en las manos.</p>
          <p class="text-right"><b>Diana Gonzalez</b></p>
        </div>
        <div class="col-lg-3">
           <img src="{{ url('img/comilla.png') }}" alt="" class="img-fluid">
          <p style="font-size: .9rem">Sentí unas manos tocar mi cabeza, ojos y pecho con ligera presión y calor donde me estaban tocando.<br><br></p>
          <p class="text-right"><b>Socorro Torres</b></p>
        </div>
        <div class="col-lg-3">
           <img src="{{ url('img/comilla.png') }}" alt="" class="img-fluid">
          <p style="font-size: .9rem">Paré de sentir mi cuerpo y sentí mucha paz. Después sentí punzaciones en mi colon, que me duele seguido.<br><br></p>
          <p class="text-right"><b>Antonio Castro</b></p>
        </div>
      </div>
    </div>
  </section>
 <section class="home-6">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">


          <h2 class="h1 mb-0">Preguntas Frecuentes</h2>
          <p style="font-size: .9rem;" class="mb-4 pb-1">Lee esto antes y después de haber recibido la Luz</p>
          <a href="" class="active">¿Qué rol ocupa el Canal de Luz en la sanación?<i class="ml-4 fa-solid fa-arrow-up"></i></a>
          <a href="">¿Cuáles son los beneficios de poseer la Luz?<i class="ml-4 fa-solid fa-arrow-up"></i></a>
          <a href="">¿Cómo se sienten las manos al jugar con la Luz? <i class="ml-4 fa-solid fa-arrow-up"></i></a>
          <a href="">¿Cómo se distingue 6o Sentido del Reiki y otras téc...<i class="ml-4 fa-solid fa-arrow-up"></i></a>
          <a href="">¿La Luz es magia o milagro?<i class="ml-4 fa-solid fa-arrow-up"></i></a>
          <a href="" class="mb-0">¿Que es la Luz?<i class="ml-4 fa-solid fa-arrow-up"></i></a>
        </div>
        <div class="col-lg-7">

          <p style="font-size: 1.1rem" class="mb-0">
            Un mero canal; un reflejo de Luz. Sostiene y fortalece la conexión hasta que la Luz haya terminado su proceso de armonización. <br><br>

            Entre menos se juega al sanador, más efectiva la sanación.<br><br>

            Practicantes con la Luz abren una portal por medio del cual pasa energía que no es de éste mundo, es benevolente y suprémamente inteligente.<br><br>

            Es una energía que pasa por ti, pero no es tuya.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="home-7 resenas">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">

          <h2 class="h1">
            <span style="color: #513369">Reseñas<br></span>después de 1 semana
          </h2>
        </div>
        <div class="col-lg-3">
           <img src="{{ url('img/comilla.png') }}" alt="" class="img-fluid">
          <p style="font-size: .9rem">Sentí desde los primeros días que mis emociones las podía controlar mejor. Me siento mas centrado.<br><br></p>
          <p class="text-right"><b>Yohan Ludwig</b></p>
        </div>
        <div class="col-lg-3">
           <img src="{{ url('img/comilla.png') }}" alt="" class="img-fluid">
          <p style="font-size: .9rem">SSe lo doy a mi bebe y lo relaja. Es divertido y en sólo unos cuantos segundos mi energía cambia para bien.<br><br></p>
          <p class="text-right"><b>Julieta Rojas</b></p>
        </div>
        <div class="col-lg-3">
           <img src="{{ url('img/comilla.png') }}" alt="" class="img-fluid">
          <p style="font-size: .9rem">Como psicólogo mi día acaba con menos cansancio cuando uso la Luz durante llamadas. Pacientes mencionan mi nueva paz y tranquilidad.</p>
          <p class="text-right"><b>Antonio Castro</b></p>
        </div>
      </div>
    </div>
  </section>
  <section class="home-9">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center mb-4 pb-4">Recuentos Típicos al sentir la luz</h1>
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
          <h1 class="text-center">Próximos horarios de la Introducción</h1>
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
                  <p><i class="fa-solid fa-user-group"></i> 333 Registrados</p>
                </div>
                <div class="col-6">
                  <p class="text-right"><i class="fa-regular fa-calendar"></i> Hoy - 7:30 PM</p>
                </div>
              </div>
              <a href="" class="btn btn-dark" style="background: #FFB646;">Agenda <b>ahora</b> <i class="ml-4 fa-solid fa-arrow-up"></i></a>
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
                <div class="col-6">
                  <p class="text-right"><i class="fa-regular fa-calendar"></i> Hoy - 7:30 PM</p>
                </div>
              </div>
              <a href="" class="btn btn-dark" style="background: #FFB646;">Agenda <b>ahora</b> <i class="ml-4 fa-solid fa-arrow-up"></i></a>
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
                <div class="col-6">
                  <p class="text-right"><i class="fa-regular fa-calendar"></i> Hoy - 7:30 PM</p>
                </div>
              </div>
              <a href="" class="btn btn-dark" style="background: #FFB646;">Agenda <b>ahora</b> <i class="ml-4 fa-solid fa-arrow-up"></i></a>
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
