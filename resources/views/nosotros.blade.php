@extends('layout.layout')
<link href="{{ asset('css/card.css') }}" rel="stylesheet">
<link href="{{ asset('css/flipycard.css') }}" rel="stylesheet">
<link href="{{ asset('css/bookcard.css') }}" rel="stylesheet">
@section('content')
<div class="cardeck">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <div class="col-sm-5 col-md-6">
            <div class="card">
                <div class="content">
                    <p class="heading">Vision</p>
                    <p class="para">
                    Ser un exponente de calidad, prestigio y transformación educativa a nivel nacional.
                    Ofrecer asesorías y capacitaciones innovadoras que la educación requiere a traves de la Especialización de docentes,
                    directivos y paradocentes.
                    Mentenerse a la vanguardia del impulso al desarrollo enfocandose en comunidades educativas completas buscando avanzar,
                    a un futuro de educación accesible para todos donde la calidad y orientacion generen personas responsables para el mañana.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-5 col-md-6">
            <div class="card">
                <div class="content">
                    <p class="heading">Mision</p>
                    <p class="para">
                    Ser un aporte a la educación generando mejoras estratégicas de aprendizaje y capacitando a los equipos educativos,
                    asesorar de manera técnica en la creación de metodologías nuevas.
                    Asistencia enfocada en gestión para equipos de docentes, directivos y paradocentes.
                    Mejorar la educación a travez de la continua evolucion de los profesionales con programas innovadores,
                    integrando nuevas tecnologias que permitan mejoras en el desempeño y desarrollo de las lecciones.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class=" bg-gradient-primary-to-secondary6 text-white py-3">
</section>
<div class="cardeck">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
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
                <p>Hello</p>
                <div class="cover">
                    <p>Hover Me</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="book">
                <p>Hello</p>
                <div class="cover">
                    <p>Hover Me</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="book">
                <p>Hello</p>
                <div class="cover">
                    <p>Hover Me</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="book">
                <p>Hello</p>
                <div class="cover">
                    <p>Hover Me</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="book">
                <p>Hello</p>
                <div class="cover">
                    <p>Hover Me</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="book">
                <p>Hello</p>
                <div class="cover">
                    <p>Hover Me</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="book">
                <p>Hello</p>
                <div class="cover">
                    <p>Hover Me</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="book">
                <p>Hello</p>
                <div class="cover">
                    <p>Hover Me</p>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

