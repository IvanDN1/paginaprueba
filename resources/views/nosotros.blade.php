@extends('layout.layout')
<link href="{{ asset('css/card.css') }}" rel="stylesheet">
<link href="{{ asset('css/flipycard.css') }}" rel="stylesheet">
<link href="{{ asset('css/bookcard.css') }}" rel="stylesheet">
@section('content')



<div class="cardeck row justify-content-center text-center" id="mycardeck1">
    <div class="card1 col-sm-4 col-md-4">
        <div class="content">
            <p class="heading">Vision</p>
            <p class="para">
            Ser Exponente de Calidad, prestigio y transformación educativa a nivel nacional,
            ofreciendo asesorías y capacitaciones innovadoras.
            Especializar docentes, directivos y paradocentes manteniéndolos a la vanguardia del
            desarrollo como comunidad educativa.</p>
        </div>
    </div>
    <div class="card1 col-sm-4 col-md-4">
        <div class="content">
            <p class="heading">Mision</p>
            <p class="para">
            Aportar a la educación generando estrategias de aprendizaje,
            asesoramiento técnico en creación de metodologías,
            asistencia en gestión de equipos , capacitaciones de equipo para directivos y paradocentes.
            </p>
        </div>
    </div>
</div>

<section class=" bg-gradient-primary-to-secondary6 text-white py-3">
</section>

<div class="content">
    <div class="cardeck row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <div class="card2 col">
            <div class="content">
                <p class="heading">Aprender a Ser</p>
                <p class="para">
                Fomentar el desarrollo de valores que influyan personal y profesionalmente,
                apoyando la autoconciencia, ética y responsabilidad de cada individuo.
                </p>
            </div>
        </div>
        <div class="card2 col">
            <div class="content">
                <p class="heading">Aprender a Aprender</p>
                <p class="para">
                Impulsar la capacidad del aprendizaje, la adaptabilidad en la búsqueda de conocimientos
                nuevos para el desarrollo, aportando a la cultura educacional de manera profesional y personal.
                </p>
            </div>
        </div>
        <div class="card2 col">
            <div class="content">
                <p class="heading">Aprender a Hacer</p>
                <p class="para">
                    Proveer la experiencia que permite enfrentar retos con otra mirada hacia el futuro,
                    buscando el énfasis en la importancia del trabajo personal al igual que el colaborativo y
                    la eficacia para cada proyecto.
                </p>
            </div>
        </div>
        <div class="card2 col">
            <div class="content">
                <p class="heading">Aprender a Convivir</p>
                <p class="para">
                    Buscar el impulso al desarrollo de respeto mutuo y empatía en cada colaboración,
                    fomentar el compromiso a la creación de ambientes más colaborativos e inclusivos,
                    valorando la voz de los individuos de manera profesional y social.
                </p>
            </div>
        </div>
    </div>
</div>

<section class=" bg-gradient-primary-to-secondary6 text-white py-3">
</section>

<div class="content">
    <div class="cardeck row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <div class="card3 col">
            <div class="content">
                <p class="heading">Responsabilidad</p>
                <p class="para">
                    buscamos fomentar la creación de ciudadanos éticos comprometidos con ellos mismos y
                    con la sociedad a través de valores que se refuerza a las comunidades educativas como
                    honestidad, justicia y solidaridad.
                </p>
            </div>
        </div>
        <div class="card3 col">
            <div class="content">
                <p class="heading">Resiliencia</p>
                <p class="para">
                    creemos que los desafíos nos catapultan a un mejor futuro al enfrentarlos
                    y superarlo por eso buscamos apoyar a aquellas comunidades educativas que día
                    a día buscan mejorar con la resiliencia como bandera para ello.
                </p>
            </div>
        </div>
        <div class="card3 col">
            <div class="content">
                <p class="heading">Integridad</p>
                <p class="para">
                    nuestra corporación considera que la integridad de los individuos
                    e instituciones están interconectados de manera en que reforzando dicho
                    valor podemos aspirar a la transparencia en los métodos educativos que se usan.
                </p>
            </div>
        </div>
        <div class="card3 col">
            <div class="content">
                <p class="heading">Innovación</p>
                <p class="para">
                    buscamos de manera dinámica evolucionar constantemente,
                    con tal de ofrecer metodologías e ideas más frescas que
                    aporten a la comunidad educativa.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="cardeck row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <div class="card3 col">
            <div class="content">
                <p class="heading">Ética</p>
                <p class="para">
                    Creemos firmemente que la ética se compone de la honestidad,
                    transparencia y responsabilidad que buscamos inculcar a las comunidades
                    educativas en refuerzo a los valores de cada individuo para su desarrollo moral.
                </p>
            </div>
        </div>
        <div class="card3 col">
            <div class="content">
                <p class="heading">Creatividad</p>
                <p class="para">
                    fomentamos el pensamiento creativo que permite encontrar nuevas maneras de enseñar
                    y reforzar conocimientos a través del uso de tecnologías nuevas.
                </p>
            </div>
        </div>
        <div class="card3 col">
            <div class="content">
                <p class="heading">Calidad</p>
                <p class="para">
                    contamos con la capacidad de capacitar docentes a través de metodologías innovadoras
                    y la información más reciente en cuanto a la educación buscando así la excelencia en la educación.
                </p>
            </div>
        </div>
        <div class="card3 col">
            <div class="content">
                <p class="heading">Compromiso</p>
                <p class="para">
                    Cómo corporación nos comprometemos con asesorar,
                    enseñar y guiar a aquellos que ayudan a las jóvenes mentes
                    en los establecimientos educacionales a evolucionar,
                    buscando generar un ambiente seguro y equitativo.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    function myFunction() {
      var x = document.getElementById("mycardeck1");
      if (x.className === "cardeck") {
        x.className += " responsive";
      } else {
        x.className = "cardeck";
      }
    }
 </script>
