@extends('layouts.app')

@section('title', 'Proyectos | Cooling Energy')

@section('content')

<section class="projects-page">

    {{-- =========================================================
         ENCABEZADO
    ========================================================== --}}
    <section class="projects-hero">

        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-8">

            <div class="projects-header">

                {{-- LÍNEA SUPERIOR --}}
                <div class="projects-topbar">

                    <div class="projects-section-label">

                        <span>
                            Proyectos
                        </span>

                        <i></i>

                    </div>

                    <span class="projects-archive">
                        Archivo / 06
                    </span>

                </div>


                {{-- TÍTULO --}}
                <div class="projects-heading">

                    <div class="projects-heading-title">

                        <h1>
                            Ingeniería Aplicada

                            <span>
                                En Proyectos Reales.
                            </span>
                        </h1>

                    </div>


                    <div class="projects-heading-copy">

                        <span class="projects-copy-label">
                            Experiencia en campo
                        </span>

                        <p>
                            Una selección de proyectos donde
                            experiencia técnica, coordinación
                            y capacidad operativa se convierten
                            en soluciones ejecutadas en obra.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
         LISTADO DE PROYECTOS
    ========================================================== --}}


    <section class="projects-list-section">

        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-8">

            {{-- =================================================
                 CABECERA DEL LISTADO
            ================================================== --}}
            <div class="projects-list-heading project-reveal">

                <div>

                    <span class="projects-list-kicker">
                        Portafolio
                    </span>

                    <h2>
                        Proyectos
                        <span>Seleccionados.</span>
                    </h2>

                </div>


                <div class="projects-total">

                    <strong>
                        {{ str_pad(count($proyectos), 2, '0', STR_PAD_LEFT) }}
                    </strong>

                    <span>
                        Proyectos
                    </span>

                </div>

            </div>


            {{-- =================================================
                 CABECERA DE COLUMNAS
            ================================================== --}}
            <div class="projects-columns">

                <span>
                    No.
                </span>

                <span>
                    Proyecto
                </span>

                <span>
                    Especialidad
                </span>

                <span>
                    Ubicación
                </span>

                <span>
                    Año
                </span>

                <span></span>

            </div>


            {{-- =================================================
                 FILAS
            ================================================== --}}
            <div class="projects-list">

                @foreach($proyectos as $index => $proyecto)

                    <a
                        href="{{ route('proyectos.show', ['slug' => $proyecto['slug']]) }}"
                        class="project-row project-reveal"
                        data-project-image="{{ asset($proyecto['imagen']) }}"
                        data-project-name="{{ $proyecto['nombre'] }}"
                    >

                        {{-- FONDO HOVER --}}
                        <span class="project-row-background"></span>


                        {{-- NÚMERO --}}
                        <span class="project-number">

                            {{ $proyecto['numero'] }}

                        </span>


                        {{-- NOMBRE --}}
                        <span class="project-name">

                            {{ $proyecto['nombre'] }}

                            <small>
                                {{ $proyecto['ubicacion'] }}
                            </small>

                        </span>


                        {{-- ESPECIALIDAD --}}
                        <span class="project-type">

                            {{ $proyecto['tipo'] }}

                        </span>


                        {{-- UBICACIÓN --}}
                        <span class="project-location">

                            {{ $proyecto['ubicacion'] }}

                        </span>


                        {{-- AÑO --}}
                        <span class="project-year">

                            {{ $proyecto['year'] }}

                        </span>


                        {{-- FLECHA --}}
                        <span class="project-arrow">

                            ↗

                        </span>

                    </a>

                @endforeach

            </div>


            {{-- =================================================
                 TEXTO INFERIOR
            ================================================== --}}
            <div class="projects-list-footer project-reveal">

                <span>
                    Cooling Energy
                </span>

                <p>
                    Ingeniería, ejecución y coordinación
                    especializada para proyectos que exigen
                    precisión técnica y capacidad operativa.
                </p>

            </div>

        </div>

    </section>



    {{-- =========================================================
         PREVIEW FLOTANTE EN DESKTOP
    ========================================================== --}}
    <div
        id="project-preview"
        class="project-preview"
        aria-hidden="true"
    >

        <div class="project-preview-image">

            <img
                id="project-preview-img"
                src=""
                alt=""
            >

            <div class="project-preview-overlay"></div>


            <span class="project-preview-label">
                Ver proyecto
            </span>

        </div>

    </div>



    {{-- =========================================================
         MENSAJE
    ========================================================== --}}
    <section class="projects-statement">

        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-8">

            <div class="statement-grid project-reveal">

                <div class="statement-label">

                    <span>
                        Experiencia
                    </span>

                    <i></i>

                </div>


                <div class="statement-content">

                    <p>

                        Cada proyecto representa
                        <strong>
                            una necesidad diferente.
                        </strong>

                        <span>
                            Nuestra ingeniería se adapta
                            para responder a ella.
                        </span>

                    </p>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
         CTA
    ========================================================== --}}
    <section class="projects-cta-section">

        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-8">

            <a
                href="{{ route('contacto') }}"
                class="projects-cta"
            >

                <div>

                    <span class="projects-cta-label">
                        Nuevo proyecto
                    </span>

                    <h2>

                        Hablemos de

                        <strong>
                            tu proyecto.
                        </strong>

                    </h2>

                </div>


                <div class="projects-cta-arrow">

                    →

                </div>

            </a>

        </div>

    </section>

</section>



<style>

/* =========================================================
   BASE
========================================================= */

.projects-page {

    position: relative;

    background:
        #F7F9FA;

    overflow:
        hidden;

}



/* =========================================================
   HERO
========================================================= */

.projects-hero {

    position:
        relative;

    padding:
        145px 0 80px;

}


.projects-header {

    opacity:
        0;

    transform:
        translateY(25px);

    animation:
        projectsHeader
        .9s
        forwards
        cubic-bezier(.16,1,.3,1);

}


@keyframes projectsHeader {

    to {

        opacity:
            1;

        transform:
            translateY(0);

    }

}



/* =========================================================
   TOP BAR
========================================================= */

.projects-topbar {

    display:
        flex;

    align-items:
        center;

    justify-content:
        space-between;

    gap:
        30px;

    padding-bottom:
        25px;

    border-bottom:
        1px solid
        rgba(4,76,127,.14);

}


.projects-section-label {

    display:
        flex;

    align-items:
        center;

    gap:
        14px;

}


.projects-section-label span {

    color:
        #009ABD;

    font-size:
        10px;

    font-weight:
        700;

    text-transform:
        uppercase;

    letter-spacing:
        .28em;

}


.projects-section-label i {

    display:
        block;

    width:
        40px;

    height:
        1px;

    background:
        #009ABD;

}


.projects-archive {

    color:
        rgba(4,76,127,.35);

    font-size:
        9px;

    font-weight:
        700;

    text-transform:
        uppercase;

    letter-spacing:
        .18em;

}



/* =========================================================
   ENCABEZADO
========================================================= */

.projects-heading {

    display:
        grid;

    grid-template-columns:
        minmax(0,2fr)
        minmax(270px,.7fr);

    align-items:
        end;

    gap:
        70px;

    padding-top:
        42px;

}


.projects-heading h1 {

    color:
        #044C7F;

    font-size:
        clamp(50px,6.8vw,88px);

    font-weight:
        500;

    line-height:
        .94;

    letter-spacing:
        -.055em;

}


.projects-heading h1 span {

    display:
        block;

    color:
        rgba(4,76,127,.20);

}


.projects-heading-copy {

    padding-left:
        28px;

    border-left:
        1px solid
        rgba(4,76,127,.14);

}


.projects-copy-label {

    display:
        block;

    margin-bottom:
        15px;

    color:
        #009ABD;

    font-size:
        9px;

    font-weight:
        700;

    text-transform:
        uppercase;

    letter-spacing:
        .18em;

}


.projects-heading-copy p {

    color:
        #65737C;

    font-size:
        13px;

    line-height:
        1.9;

}



/* =========================================================
   LISTADO
========================================================= */

.projects-list-section {

    position:
        relative;

    padding:
        55px 0 120px;

}



/* =========================================================
   CABECERA LISTADO
========================================================= */

.projects-list-heading {

    display:
        flex;

    align-items:
        flex-end;

    justify-content:
        space-between;

    gap:
        40px;

    margin-bottom:
        50px;

}


.projects-list-kicker {

    display:
        block;

    margin-bottom:
        13px;

    color:
        #009ABD;

    font-size:
        9px;

    font-weight:
        700;

    text-transform:
        uppercase;

    letter-spacing:
        .22em;

}


.projects-list-heading h2 {

    color:
        #044C7F;

    font-size:
        clamp(34px,4.2vw,55px);

    font-weight:
        500;

    line-height:
        1;

    letter-spacing:
        -.045em;

}


.projects-list-heading h2 span {

    color:
        rgba(4,76,127,.22);

}



/* =========================================================
   TOTAL
========================================================= */

.projects-total {

    display:
        flex;

    align-items:
        baseline;

    gap:
        10px;

}


.projects-total strong {

    color:
        #044C7F;

    font-size:
        34px;

    font-weight:
        500;

    letter-spacing:
        -.04em;

}


.projects-total span {

    color:
        rgba(4,76,127,.35);

    font-size:
        8px;

    font-weight:
        700;

    text-transform:
        uppercase;

    letter-spacing:
        .16em;

}



/* =========================================================
   COLUMNAS
========================================================= */

.projects-columns {

    display:
        grid;

    grid-template-columns:
        55px
        minmax(0,1.6fr)
        160px
        190px
        70px
        40px;

    align-items:
        center;

    min-height:
        45px;

    padding:
        0 18px;

    border-top:
        1px solid
        rgba(4,76,127,.14);

    border-bottom:
        1px solid
        rgba(4,76,127,.14);

}


.projects-columns span {

    color:
        rgba(4,76,127,.30);

    font-size:
        8px;

    font-weight:
        700;

    text-transform:
        uppercase;

    letter-spacing:
        .15em;

}



/* =========================================================
   FILA
========================================================= */

.project-row {

    position:
        relative;

    isolation:
        isolate;

    display:
        grid;

    grid-template-columns:
        55px
        minmax(0,1.6fr)
        160px
        190px
        70px
        40px;

    align-items:
        center;

    min-height:
        105px;

    padding:
        0 18px;

    border-bottom:
        1px solid
        rgba(4,76,127,.13);

    overflow:
        hidden;

    transition:
        padding-left
        .45s
        cubic-bezier(.16,1,.3,1);

}



/* =========================================================
   FONDO HOVER
========================================================= */

.project-row-background {

    position:
        absolute;

    z-index:
        -1;

    inset:
        0;

    background:
        #044C7F;

    transform:
        scaleY(0);

    transform-origin:
        bottom;

    transition:
        transform
        .45s
        cubic-bezier(.16,1,.3,1);

}


.project-row:hover
.project-row-background {

    transform:
        scaleY(1);

}



/* =========================================================
   LÍNEA CYAN
========================================================= */

.project-row::after {

    content:
        "";

    position:
        absolute;

    left:
        0;

    bottom:
        -1px;

    width:
        0;

    height:
        2px;

    background:
        #009ABD;

    transition:
        width
        .55s
        cubic-bezier(.16,1,.3,1);

}


.project-row:hover::after {

    width:
        100%;

}



/* =========================================================
   NÚMERO
========================================================= */

.project-number {

    position:
        relative;

    color:
        rgba(4,76,127,.35);

    font-size:
        9px;

    font-weight:
        700;

    transition:
        color
        .35s ease;

}


.project-row:hover
.project-number {

    color:
        #009ABD;

}



/* =========================================================
   NOMBRE
========================================================= */

.project-name {

    position:
        relative;

    color:
        #044C7F;

    font-size:
        clamp(18px,2vw,23px);

    font-weight:
        600;

    line-height:
        1.2;

    letter-spacing:
        -.025em;

    transition:
        color .35s ease,
        transform
        .45s
        cubic-bezier(.16,1,.3,1);

}


.project-name small {

    display:
        none;

    margin-top:
        7px;

    color:
        rgba(4,76,127,.42);

    font-size:
        9px;

    font-weight:
        600;

    text-transform:
        uppercase;

    letter-spacing:
        .10em;

}


.project-row:hover
.project-name {

    color:
        white;

    transform:
        translateX(7px);

}



/* =========================================================
   TIPO / UBICACIÓN / AÑO
========================================================= */

.project-type,
.project-location,
.project-year {

    position:
        relative;

    color:
        rgba(4,76,127,.42);

    font-size:
        9px;

    font-weight:
        700;

    text-transform:
        uppercase;

    letter-spacing:
        .11em;

    transition:
        color
        .35s ease;

}


.project-row:hover
.project-type,

.project-row:hover
.project-location,

.project-row:hover
.project-year {

    color:
        rgba(255,255,255,.60);

}



/* =========================================================
   FLECHA
========================================================= */

.project-arrow {

    position:
        relative;

    width:
        35px;

    height:
        35px;

    display:
        flex;

    align-items:
        center;

    justify-content:
        center;

    color:
        #009ABD;

    font-size:
        17px;

    opacity:
        .25;

    transform:
        translateX(-5px);

    transition:
        color .35s ease,
        background-color .35s ease,
        opacity .35s ease,
        transform
        .4s
        cubic-bezier(.16,1,.3,1);

}


.project-row:hover
.project-arrow {

    background:
        #009ABD;

    color:
        white;

    opacity:
        1;

    transform:
        translateX(0)
        rotate(45deg);

}



/* =========================================================
   PIE DEL LISTADO
========================================================= */

.projects-list-footer {

    display:
        grid;

    grid-template-columns:
        1fr 1fr;

    gap:
        50px;

    margin-top:
        40px;

    padding-top:
        25px;

    border-top:
        1px solid
        rgba(4,76,127,.10);

}


.projects-list-footer span {

    color:
        #009ABD;

    font-size:
        8px;

    font-weight:
        700;

    text-transform:
        uppercase;

    letter-spacing:
        .20em;

}


.projects-list-footer p {

    max-width:
        420px;

    justify-self:
        end;

    color:
        rgba(4,76,127,.50);

    font-size:
        11px;

    line-height:
        1.8;

}



/* =========================================================
   PREVIEW FLOTANTE
========================================================= */

.project-preview {

    position:
        fixed;

    z-index:
        100;

    top:
        0;

    left:
        0;

    width:
        330px;

    height:
        215px;

    pointer-events:
        none;

    opacity:
        0;

    visibility:
        hidden;

    transform:
        translate3d(0,15px,0)
        scale(.96);

    transition:
        opacity .25s ease,
        visibility .25s ease,
        transform .35s
        cubic-bezier(.16,1,.3,1);

}


.project-preview.active {

    opacity:
        1;

    visibility:
        visible;

    transform:
        translate3d(0,0,0)
        scale(1);

}


.project-preview-image {

    position:
        relative;

    width:
        100%;

    height:
        100%;

    overflow:
        hidden;

    background:
        #DDE5E9;

    box-shadow:
        0 25px 60px
        rgba(2,47,79,.18);

}


.project-preview-image img {

    width:
        100%;

    height:
        100%;

    object-fit:
        cover;

}


.project-preview-overlay {

    position:
        absolute;

    inset:
        0;

    background:
        linear-gradient(
            to top,
            rgba(2,47,79,.55),
            transparent 65%
        );

}


.project-preview-label {

    position:
        absolute;

    left:
        18px;

    bottom:
        16px;

    color:
        white;

    font-size:
        8px;

    font-weight:
        700;

    text-transform:
        uppercase;

    letter-spacing:
        .17em;

}



/* =========================================================
   REVEAL
========================================================= */

.project-reveal {

    opacity:
        0;

    transform:
        translateY(25px);

    transition:
        opacity
        .8s
        cubic-bezier(.16,1,.3,1),
        transform
        .8s
        cubic-bezier(.16,1,.3,1);

}


.project-reveal.visible {

    opacity:
        1;

    transform:
        translateY(0);

}



/* =========================================================
   MENSAJE
========================================================= */

.projects-statement {

    background:
        white;

    border-top:
        1px solid
        rgba(4,76,127,.10);

    border-bottom:
        1px solid
        rgba(4,76,127,.10);

}


.statement-grid {

    display:
        grid;

    grid-template-columns:
        3fr 8fr;

    gap:
        80px;

    padding:
        105px 0;

}


.statement-label {

    display:
        flex;

    align-items:
        flex-start;

    gap:
        14px;

    padding-top:
        9px;

}


.statement-label span {

    color:
        #009ABD;

    font-size:
        9px;

    font-weight:
        700;

    text-transform:
        uppercase;

    letter-spacing:
        .22em;

}


.statement-label i {

    width:
        35px;

    height:
        1px;

    margin-top:
        5px;

    background:
        rgba(0,154,189,.45);

}


.statement-content p {

    max-width:
        850px;

    color:
        #044C7F;

    font-size:
        clamp(31px,4.2vw,54px);

    font-weight:
        500;

    line-height:
        1.17;

    letter-spacing:
        -.04em;

}


.statement-content strong {

    font-weight:
        500;

}


.statement-content span {

    color:
        rgba(4,76,127,.22);

}



/* =========================================================
   CTA
========================================================= */

.projects-cta-section {

    background:
        #022F4F;

}


.projects-cta {

    min-height:
        245px;

    display:
        flex;

    align-items:
        center;

    justify-content:
        space-between;

    gap:
        40px;

}


.projects-cta-label {

    color:
        #009ABD;

    font-size:
        9px;

    font-weight:
        700;

    text-transform:
        uppercase;

    letter-spacing:
        .22em;

}


.projects-cta h2 {

    margin-top:
        14px;

    color:
        white;

    font-size:
        clamp(32px,4.5vw,56px);

    font-weight:
        500;

    line-height:
        1;

    letter-spacing:
        -.04em;

}


.projects-cta h2 strong {

    color:
        rgba(255,255,255,.30);

    font-weight:
        500;

}


.projects-cta-arrow {

    width:
        70px;

    height:
        70px;

    flex-shrink:
        0;

    display:
        flex;

    align-items:
        center;

    justify-content:
        center;

    background:
        #009ABD;

    color:
        white;

    font-size:
        25px;

    transition:
        transform
        .4s
        cubic-bezier(.16,1,.3,1),
        background-color
        .35s ease;

}


.projects-cta:hover
.projects-cta-arrow {

    transform:
        translateX(10px);

    background:
        #E31F1E;

}



/* =========================================================
   TABLET
========================================================= */

@media(max-width:1024px) {

    .projects-heading {

        grid-template-columns:
            1fr;

        gap:
            35px;

    }


    .projects-heading-copy {

        max-width:
            500px;

        padding-left:
            0;

        border-left:
            0;

    }


    .projects-columns {

        grid-template-columns:
            45px
            minmax(0,1fr)
            140px
            70px
            40px;

    }


    .projects-columns
    span:nth-child(4) {

        display:
            none;

    }


    .project-row {

        grid-template-columns:
            45px
            minmax(0,1fr)
            140px
            70px
            40px;

    }


    .project-location {

        display:
            none;

    }


    .statement-grid {

        grid-template-columns:
            1fr;

        gap:
            35px;

    }


    .project-preview {

        display:
            none;

    }

}



/* =========================================================
   MÓVIL
========================================================= */

@media(max-width:767px) {

    .projects-hero {

        padding:
            115px 0 55px;

    }


    .projects-heading {

        padding-top:
            32px;

    }


    .projects-heading h1 {

        font-size:
            47px;

    }


    .projects-heading-copy p {

        font-size:
            12px;

    }


    .projects-list-section {

        padding:
            35px 0 75px;

    }


    .projects-list-heading {

        align-items:
            flex-start;

        flex-direction:
            column;

        gap:
            20px;

        margin-bottom:
            30px;

    }


    .projects-list-heading h2 {

        font-size:
            38px;

    }


    .projects-columns {

        display:
            none;

    }


    .projects-list {

        border-top:
            1px solid
            rgba(4,76,127,.14);

    }


    .project-row {

        grid-template-columns:
            35px
            minmax(0,1fr)
            42px;

        min-height:
            95px;

        padding:
            0;

    }


    .project-number {

        align-self:
            start;

        margin-top:
            27px;

    }


    .project-name {

        font-size:
            18px;

    }


    .project-name small {

        display:
            block;

    }


    .project-type,
    .project-location,
    .project-year {

        display:
            none;

    }


    .project-arrow {

        justify-self:
            end;

        opacity:
            1;

        transform:
            none;

    }


    .project-row:hover
    .project-name {

        transform:
            none;

    }


    .project-row:hover
    .project-name small {

        color:
            rgba(255,255,255,.55);

    }


    .projects-list-footer {

        grid-template-columns:
            1fr;

        gap:
            15px;

    }


    .projects-list-footer p {

        justify-self:
            start;

    }


    .statement-grid {

        padding:
            75px 0;

    }


    .projects-cta {

        min-height:
            220px;

    }


    .projects-cta-arrow {

        width:
            58px;

        height:
            58px;

    }

}



/* =========================================================
   REDUCIR MOVIMIENTO
========================================================= */

@media(prefers-reduced-motion: reduce) {

    .projects-header,
    .project-reveal {

        opacity:
            1;

        transform:
            none;

        animation:
            none;

        transition:
            none;

    }

}

</style>



<script>

document.addEventListener(
    'DOMContentLoaded',
    function () {


        /* =====================================================
           ANIMACIONES AL HACER SCROLL
        ====================================================== */

        const revealElements =
            document.querySelectorAll(
                '.project-reveal'
            );


        if (
            'IntersectionObserver'
            in window
        ) {

            const observer =
                new IntersectionObserver(

                    function (entries) {

                        entries.forEach(
                            function (entry) {

                                if (
                                    entry.isIntersecting
                                ) {

                                    entry.target
                                        .classList
                                        .add(
                                            'visible'
                                        );

                                    observer.unobserve(
                                        entry.target
                                    );

                                }

                            }
                        );

                    },

                    {
                        threshold:
                            .08
                    }

                );


            revealElements.forEach(
                function (element) {

                    observer.observe(
                        element
                    );

                }
            );

        }

        else {

            revealElements.forEach(
                function (element) {

                    element
                        .classList
                        .add(
                            'visible'
                        );

                }
            );

        }



        /* =====================================================
           PREVIEW DE IMAGEN EN ESCRITORIO
        ====================================================== */

        const rows =
            document.querySelectorAll(
                '.project-row'
            );


        const preview =
            document.getElementById(
                'project-preview'
            );


        const previewImage =
            document.getElementById(
                'project-preview-img'
            );


        /*
        |--------------------------------------------------------------------------
        | SOLO ESCRITORIO
        |--------------------------------------------------------------------------
        */

        if (
            window.matchMedia(
                '(min-width: 1025px)'
            ).matches
        ) {


            rows.forEach(
                function (row) {


                    /*
                    |--------------------------------------------------------------------------
                    | ENTRAR
                    |--------------------------------------------------------------------------
                    */

                    row.addEventListener(
                        'mouseenter',
                        function () {

                            const image =
                                row.dataset.projectImage;

                            const name =
                                row.dataset.projectName;


                            if (
                                !image
                            ) {

                                return;

                            }


                            previewImage.src =
                                image;

                            previewImage.alt =
                                name || 'Proyecto Cooling Energy';


                            preview.classList.add(
                                'active'
                            );

                        }
                    );



                    /*
                    |--------------------------------------------------------------------------
                    | MOVER
                    |--------------------------------------------------------------------------
                    */

                    row.addEventListener(
                        'mousemove',
                        function (event) {

                            const previewWidth =
                                330;

                            const previewHeight =
                                215;

                            const spacing =
                                25;


                            let x =
                                event.clientX +
                                spacing;


                            let y =
                                event.clientY -
                                previewHeight / 2;


                            /*
                            |--------------------------------------------------------------------------
                            | EVITAR SALIR POR LA DERECHA
                            |--------------------------------------------------------------------------
                            */

                            if (
                                x +
                                previewWidth >
                                window.innerWidth -
                                20
                            ) {

                                x =
                                    event.clientX -
                                    previewWidth -
                                    spacing;

                            }


                            /*
                            |--------------------------------------------------------------------------
                            | EVITAR SALIR ARRIBA
                            |--------------------------------------------------------------------------
                            */

                            if (
                                y < 20
                            ) {

                                y =
                                    20;

                            }


                            /*
                            |--------------------------------------------------------------------------
                            | EVITAR SALIR ABAJO
                            |--------------------------------------------------------------------------
                            */

                            if (
                                y +
                                previewHeight >
                                window.innerHeight -
                                20
                            ) {

                                y =
                                    window.innerHeight -
                                    previewHeight -
                                    20;

                            }


                            preview.style.left =
                                x + 'px';

                            preview.style.top =
                                y + 'px';

                        }
                    );



                    /*
                    |--------------------------------------------------------------------------
                    | SALIR
                    |--------------------------------------------------------------------------
                    */

                    row.addEventListener(
                        'mouseleave',
                        function () {

                            preview.classList.remove(
                                'active'
                            );

                        }
                    );

                }
            );

        }

    }
);

</script>

@endsection
