@extends('layout.layout')
<link href="{{ asset('css/card.css') }}" rel="stylesheet">
<link href="{{ asset('css/flipycard.css') }}" rel="stylesheet">
<link href="{{ asset('css/bookcard.css') }}" rel="stylesheet">
@section('content')

<div class="cardeck">
    <div class="row justify-content-center text-center">
        <div class="col-sm-5 col-md-4">
            <div class="card">
                <div class="content">
                    <p class="heading">Vision</p>
                    <p class="para">
                    Ser Exponente de Calidad, prestigio y transformación educativa a nivel nacional, ofreciendo asesorías y capacitaciones innovadoras.
                    Especializar docentes, directivos y paradocentes manteniéndolos a la vanguardia del desarrollo como comunidad educativa.
                    Avanzar buscando una educación de calidad accesible orientándonos a ser personas responsable y éticas.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-5 col-md-4">
            <div class="card">
                <div class="content">
                    <p class="heading">Mision</p>
                    <p class="para">
                    Aportar a la educación generando estrategias de aprendizaje y capacitando equipos educativos,
                    asesorar técnicamente durante la creación de metodologías nuevas.
                    Asistir en gestión para equipos directivos y paradocentes,
                    mejorar el proceso de evolución profesional con programas innovadores,
                    integrando nuevas tecnologías, permitiendo mejor desempeño y desarrollo de las lecciones impartidas al alumnado.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class=" bg-gradient-primary-to-secondary6 text-white py-3">
</section>

<div class="cardeck">
    <div class="row  justify-content- center row-cols-1 row-cols-sm-2 row-cols-md-4">
        <div class="col">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">Aprender a Ser</p>
                        <p>Volteame</p>
                    </div>
                    <div class="flip-card-back">
                        <p>Fomentar el desarrollo de valores que influyan personal y profesionalmente, apoyando la autoconciencia, ética y responsabilidad de cada individuo.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">Aprender a Aprender</p>
                        <p>Volteame</p>
                    </div>
                    <div class="flip-card-back">
                        <p>Impulsar la capacidad del aprendizaje, la adaptabilidad en la búsqueda de conocimientos nuevos para el desarrollo, aportando a la cultura educacional de manera profesional y personal.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">Aprender a Hacer</p>
                        <p>Volteame</p>
                    </div>
                    <div class="flip-card-back">
                        <p>Proveer la experiencia que permite enfrentar retos con otra mirada hacia el futuro, buscando el énfasis en la importancia del trabajo personal al igual que el colaborativo y la eficacia para cada proyecto.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">Aprender a Convivir</p>
                        <p>Volteame</p>
                    </div>
                    <div class="flip-card-back">
                        <p>Buscar el impulso al desarrollo de respeto mutuo y empatía en cada colaboración, fomentar el compromiso a la creación de ambientes más colaborativos e inclusivos, valorando la voz de los individuos de manera profesional y social.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class=" bg-gradient-primary-to-secondary6 text-white py-3">
</section>

<div class="cardeck">
    <div class="row row-cols-8 row-cols-sm-2 row-cols-md-4">
        <div class="col">
            <div class="book">
                <p>Responsabilidad</p>
                <div class="cover">
                    <p>buscamos fomentar la creación de ciudadanos éticos comprometidos con ellos mismos y
                    con la sociedad a través de valores que se refuerza a las comunidades educativas como
                    honestidad, justicia y solidaridad.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="book">
                <p>Resiliencia</p>
                <div class="cover">
                    <p>creemos que los desafíos nos catapultan a un mejor futuro al enfrentarlos
                    y superarlo por eso buscamos apoyar a aquellas comunidades educativas que día
                    a día buscan mejorar con la resiliencia como bandera para ello.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="book">
                <p>Integridad</p>
                <div class="cover">
                    <p>nuestra corporación considera que la integridad de los individuos
                    e instituciones están interconectados de manera en que reforzando dicho
                    valor podemos aspirar a la transparencia en los métodos educativos que se usan.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="book">
                <p>Innovación</p>
                <div class="cover">
                    <p>buscamos de manera dinámica evolucionar constantemente,
                    con tal de ofrecer metodologías e ideas más frescas que
                    aporten a la comunidad educativa.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="book">
                <p>Ética</p>
                <div class="cover">
                    <p>Creemos firmemente que la ética se compone de la honestidad,
                    transparencia y responsabilidad que buscamos inculcar a las comunidades
                    educativas en refuerzo a los valores de cada individuo para su desarrollo moral.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="book">
                <p>Creatividad</p>
                <div class="cover">
                    <p>fomentamos el pensamiento creativo que permite encontrar nuevas maneras de enseñar
                    y reforzar conocimientos a través del uso de tecnologías nuevas.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="book">
                <p>Calidad</p>
                <div class="cover">
                    <p>contamos con la capacidad de capacitar docentes a través de metodologías innovadoras
                    y la información más reciente en cuanto a la educación buscando así la excelencia en la educación.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="book">
                <p>Compromiso</p>
                <div class="cover">
                    <p>Cómo corporación nos comprometemos con asesorar,
                    enseñar y guiar a aquellos que ayudan a las jóvenes mentes
                    en los establecimientos educacionales a evolucionar,
                    buscando generar un ambiente seguro y equitativo.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
