@extends('layout.layout')
<link href="{{ asset('css/card.css') }}" rel="stylesheet">
<link href="{{ asset('css/flipycard.css') }}" rel="stylesheet">
@section('content')
<div class="cardeck" style="padding-left: 3%;">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <div class="col-sm-5 col-md-6">
            <div class="">
                <div class="card">
                    <div class="card__title">
                    VISIÓN
                    </div>
                    <div class="card__descr-wrapper">
                    Ser un exponente de calidad, prestigio y transformación educativa a nivel nacional,
                    ofrecer un asesorías y capacitaciones innovadoras para la educación y especialización de docentes,
                    estar a la vanguardia del impulso enfocado al desarrollo de comunidades educativas y directivos,
                    avanzar juntos a un futuro de educación accesible,
                    de calidad y orientada a la creación de Personas responsables.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-5 col-md-6">
            <div class="">
                <div class="card">
                    <p class="card__title">
                    MISIÓN
                    </p>
                    <div class="card__descr-wrapper">
                    Ser un aporte a la educación generando mejoras estratégicas de aprendizaje,
                    capacitar y asesorar a los equipos educativos de manera técnica,
                    en la creación de metodologías nuevas,
                    así como la asistencia enfocada en gestión para equipos directivos ligados a la educación.
                    </div>
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
                        <p class="title">BACK</p>
                        <p>Fomentar el desarrollo de valores que influyen personal como profesionalmente,
                            apoyar el desarrollo de la autoconciencia ética y responsabilidad de los individuos.</p>
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
                        <p class="title">BACK</p>
                        <p>impulsar la capacidad de aprendizaje,
                        adaptabilidad en búsqueda de nuevos conocimientos para el desarrollo personal y profesional,
                        aportando a la cultura de la educación.</p>
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
                        <p class="title">BACK</p>
                        <p>Promovemos la experiencia que permite enfrentar los retos del futuro con otra mirada,
                            buscando enfatizar en la importancia del trabajo personal ,
                            colaborativo y la eficacia en cada  proyecto.</p>
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
                        <p class="title">BACK</p>
                        <p>Buscamos impulsar el desarrollo del respeto mutuo y empatía en las colaboraciones,
                        comprometiéndonos a fomentar la creación de ambientes colaborativos e inclusivos,
                        valorando las voces de los individuos tanto profesional como socialmente.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

