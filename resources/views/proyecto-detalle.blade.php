@extends('layouts.app')

@section('title', $proyecto['nombre'] . ' | Cooling Energy')

@section('content')

<section class="project-detail-page bg-white overflow-hidden">


    {{-- =========================================================
         CABECERA
    ========================================================== --}}
    <section class="bg-[#F6F8F9]">

        <div class="max-w-7xl mx-auto
                    px-5 sm:px-8 lg:px-8
                    pt-28 sm:pt-32 lg:pt-36
                    pb-10 sm:pb-14">

            {{-- VOLVER --}}
            <div class="detail-enter">

                <a href="{{ route('proyectos') }}"
                   class="back-projects">

                    <span>←</span>

                    <span>
                        Volver a proyectos
                    </span>

                </a>

            </div>


            {{-- TÍTULO --}}
            <div class="grid
                        lg:grid-cols-12
                        gap-8 lg:gap-12
                        items-end
                        mt-10
                        pb-10
                        border-b
                        border-[#044C7F]/15">

                <div class="lg:col-span-8 detail-enter">

                    <div class="flex
                                items-center
                                gap-4">

                        <span class="text-[#009ABD]
                                     text-[10px]
                                     uppercase
                                     tracking-[.25em]
                                     font-bold">

                            Proyecto {{ $proyecto['numero'] }}

                        </span>

                        <span class="w-10
                                     h-px
                                     bg-[#009ABD]">
                        </span>

                        <span class="text-[#044C7F]/35
                                     text-[10px]
                                     uppercase
                                     tracking-[.18em]">

                            {{ $proyecto['categoria'] }}

                        </span>

                    </div>


                    <h1 class="text-[#044C7F]
                               text-4xl
                               sm:text-5xl
                               lg:text-6xl
                               xl:text-[72px]
                               font-semibold
                               tracking-[-.045em]
                               leading-[1]
                               mt-6">

                        {{ $proyecto['nombre'] }}

                    </h1>

                </div>


                <div class="lg:col-span-4 detail-enter">

                    <div class="flex
                                items-center
                                gap-3">

                        <span class="location-pulse"></span>

                        <span class="text-[#044C7F]
                                     text-xs
                                     font-semibold">

                            {{ $proyecto['ubicacion'] }}

                        </span>

                    </div>


                    <p class="text-gray-500
                              text-sm
                              leading-7
                              mt-5">

                        {{ $proyecto['descripcion'] }}

                    </p>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
         IMAGEN PRINCIPAL
    ========================================================== --}}
    <section class="project-cover
                    relative
                    bg-[#022F4F]
                    overflow-hidden">

        <div class="project-cover-image">

            <img
                src="{{ asset($proyecto['imagen_principal']) }}"
                alt="{{ $proyecto['nombre'] }}"
                class="w-full
                       h-[460px]
                       sm:h-[600px]
                       lg:h-[760px]
                       object-cover"
            >

        </div>


        {{-- DEGRADADO --}}
        <div class="absolute
                    inset-0
                    bg-gradient-to-t
                    from-[#022F4F]/45
                    via-transparent
                    to-transparent">
        </div>


        {{-- NÚMERO --}}
        <div class="absolute
                    right-4
                    sm:right-8
                    lg:right-12
                    bottom-[-30px]
                    text-white/10
                    text-[150px]
                    sm:text-[220px]
                    lg:text-[320px]
                    font-black
                    leading-none
                    pointer-events-none">

            {{ $proyecto['numero'] }}

        </div>


        {{-- ESPECIALIDAD --}}
        <div class="absolute
                    left-5
                    sm:left-8
                    lg:left-12
                    bottom-6
                    sm:bottom-9">

            <div class="bg-white
                        px-5 py-4
                        flex
                        items-center
                        gap-3">

                <span class="w-2
                             h-2
                             rounded-full
                             bg-[#009ABD]">
                </span>

                <span class="text-[#044C7F]
                             text-[10px]
                             uppercase
                             tracking-[.18em]
                             font-bold">

                    {{ $proyecto['especialidad'] }}

                </span>

            </div>

        </div>

    </section>



    {{-- =========================================================
         FICHA TÉCNICA
    ========================================================== --}}
    <section class="bg-white">

        <div class="max-w-7xl mx-auto
                    px-5 sm:px-8 lg:px-8
                    py-16 sm:py-20 lg:py-28">

            <div class="grid
                        lg:grid-cols-12
                        gap-12 lg:gap-16">


                {{-- IZQUIERDA --}}
                <div class="lg:col-span-4
                            project-reveal">

                    <span class="text-[#009ABD]
                                 text-[10px]
                                 uppercase
                                 tracking-[.25em]
                                 font-bold">

                        Expediente de obra

                    </span>


                    <h2 class="text-[#044C7F]
                               text-3xl
                               sm:text-4xl
                               font-semibold
                               tracking-[-.035em]
                               leading-[1.1]
                               mt-5">

                        Ingeniería
                        aplicada

                        <span class="text-[#044C7F]/25">
                            en campo.
                        </span>

                    </h2>

                </div>


                {{-- DERECHA --}}
                <div class="lg:col-span-8
                            project-reveal">

                    <div class="project-info-grid">


                        <div class="project-info">

                            <span>
                                Proyecto
                            </span>

                            <strong>
                                {{ $proyecto['nombre'] }}
                            </strong>

                        </div>


                        <div class="project-info">

                            <span>
                                Ubicación
                            </span>

                            <strong>
                                {{ $proyecto['ubicacion'] }}
                            </strong>

                        </div>


                        <div class="project-info">

                            <span>
                                Periodo
                            </span>

                            <strong>
                                {{ $proyecto['periodo'] }}
                            </strong>

                        </div>


                        <div class="project-info">

                            <span>
                                Especialidad
                            </span>

                            <strong>
                                {{ $proyecto['especialidad'] }}
                            </strong>

                        </div>

                    </div>


                    {{-- ALCANCE --}}
                    <div class="mt-12
                                pt-10
                                border-t
                                border-[#044C7F]/10">

                        <span class="text-[#044C7F]/35
                                     text-[10px]
                                     uppercase
                                     tracking-[.20em]
                                     font-bold">

                            Alcance

                        </span>


                        <p class="text-[#044C7F]
                                  text-2xl
                                  sm:text-3xl
                                  lg:text-4xl
                                  leading-[1.3]
                                  font-medium
                                  tracking-[-.025em]
                                  mt-5">

                            {{ $proyecto['alcance'] }}

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
         GALERÍA GENERAL DEL PROYECTO
    ========================================================== --}}
    <section class="project-gallery-section">

        <div class="max-w-7xl mx-auto
                    px-5 sm:px-8 lg:px-8">


            {{-- CABECERA --}}
            <div class="gallery-header project-reveal">


                <div class="gallery-header-left">

                    <div class="gallery-eyebrow">

                        <span class="gallery-eyebrow-number">
                            {{ $proyecto['numero'] }}
                        </span>

                        <span class="gallery-eyebrow-line"></span>

                        <span class="gallery-eyebrow-text">
                            Registro fotográfico
                        </span>

                    </div>


                    <h2 class="gallery-title">

                        Galería del

                        <span>
                            proyecto.
                        </span>

                    </h2>

                </div>


                <div class="gallery-header-right">

                    <p>
                        Una selección visual de los trabajos,
                        instalaciones y soluciones ejecutadas
                        durante el desarrollo del proyecto.
                    </p>


                    @if(count($proyecto['galeria'] ?? []) > 0)

                        <div class="gallery-counter">

                            <strong>

                                {{ str_pad(
                                    count($proyecto['galeria']),
                                    2,
                                    '0',
                                    STR_PAD_LEFT
                                ) }}

                            </strong>

                            <span>
                                Fotografías
                            </span>

                        </div>

                    @endif

                </div>

            </div>



            {{-- =================================================
                 FOTOGRAFÍAS
            ================================================== --}}

            @if(count($proyecto['galeria'] ?? []) > 0)


                <div class="editorial-gallery">


                    @foreach($proyecto['galeria'] as $index => $foto)

                        @php

                            $position = $index % 7;

                            $galleryClass = match($position) {

                                0 => 'gallery-featured',

                                1 => 'gallery-vertical',

                                2 => 'gallery-standard',

                                3 => 'gallery-standard',

                                4 => 'gallery-wide',

                                5 => 'gallery-standard',

                                6 => 'gallery-standard',

                                default => 'gallery-standard',

                            };

                        @endphp


                        <button
                            type="button"
                            class="editorial-image
                                   {{ $galleryClass }}
                                   project-reveal"
                            data-image="{{ asset($foto) }}"
                            aria-label="Ampliar fotografía {{ $index + 1 }}"
                        >


                            <img
                                src="{{ asset($foto) }}"
                                alt="{{ $proyecto['nombre'] }} - Fotografía {{ $index + 1 }}"
                                loading="lazy"
                            >


                            {{-- OVERLAY --}}
                            <span class="editorial-overlay"></span>


                            {{-- NÚMERO --}}
                            <span class="editorial-number">

                                {{ str_pad(
                                    $index + 1,
                                    2,
                                    '0',
                                    STR_PAD_LEFT
                                ) }}

                            </span>


                            {{-- VER --}}
                            <span class="editorial-expand">

                                <span>
                                    Ver
                                </span>

                                <strong>
                                    ↗
                                </strong>

                            </span>

                        </button>

                    @endforeach


                </div>


            @else


                {{-- SIN FOTOGRAFÍAS --}}
                <div class="gallery-no-images project-reveal">


                    <span class="gallery-no-images-number">

                        {{ $proyecto['numero'] }}

                    </span>


                    <div>

                        <strong>
                            Registro fotográfico
                        </strong>

                        <p>
                            La galería correspondiente a este
                            proyecto se encuentra en actualización.
                        </p>

                    </div>


                </div>


            @endif


        </div>

    </section>



    {{-- =========================================================
         NAVEGACIÓN ENTRE PROYECTOS
    ========================================================== --}}
    <section class="bg-[#022F4F]">

        <div class="max-w-7xl mx-auto
                    px-5 sm:px-8 lg:px-8">

            <div class="project-navigation">


                {{-- ANTERIOR --}}
                @if($anterior)

                    <a
                        href="{{ route('proyectos.show', $anterior) }}"
                        class="project-nav-link"
                    >

                        <span>
                            ← Proyecto anterior
                        </span>

                        <strong>

                            {{ $proyectoAnterior['nombre'] ?? str_replace('-', ' ', $anterior) }}

                        </strong>

                    </a>

                @else

                    <div class="project-nav-link
                                opacity-25
                                pointer-events-none">

                        <span>
                            ← Proyecto anterior
                        </span>

                        <strong>
                            Inicio
                        </strong>

                    </div>

                @endif



                {{-- SIGUIENTE --}}
                @if($siguiente)

                    <a
                        href="{{ route('proyectos.show', $siguiente) }}"
                        class="project-nav-link
                               project-nav-next"
                    >

                        <span>
                            Siguiente proyecto →
                        </span>

                        <strong>

                            {{ $proyectoSiguiente['nombre'] ?? str_replace('-', ' ', $siguiente) }}

                        </strong>

                    </a>

                @else

                    <a
                        href="{{ route('proyectos') }}"
                        class="project-nav-link
                               project-nav-next"
                    >

                        <span>
                            Finalizar →
                        </span>

                        <strong>
                            Ver proyectos
                        </strong>

                    </a>

                @endif


            </div>

        </div>

    </section>



{{-- =========================================================
     VISOR DE GALERÍA / ÁLBUM
========================================================== --}}

<div
    id="gallery-lightbox"
    class="gallery-lightbox"
    aria-hidden="true"
>

    {{-- FONDO --}}
    <div class="lightbox-backdrop"></div>


    {{-- CABECERA --}}
    <div class="lightbox-topbar">

        <div class="lightbox-project-info">

            <span>
                PROYECTO {{ $proyecto['numero'] }}
            </span>

            <strong>
                {{ $proyecto['nombre'] }}
            </strong>

        </div>


        {{-- CONTADOR --}}
        <div class="lightbox-counter">

            <span id="lightbox-current">
                01
            </span>

            <span class="lightbox-counter-line"></span>

            <span id="lightbox-total">
                {{ str_pad(
                    count($proyecto['galeria'] ?? []),
                    2,
                    '0',
                    STR_PAD_LEFT
                ) }}
            </span>

        </div>


        {{-- CERRAR --}}
        <button
            type="button"
            id="close-lightbox"
            class="lightbox-close"
            aria-label="Cerrar galería"
        >
            <span></span>
            <span></span>
        </button>

    </div>


    {{-- VISOR --}}
    <div class="lightbox-viewer">

        {{-- ANTERIOR --}}
        <button
            type="button"
            id="lightbox-prev"
            class="lightbox-arrow lightbox-prev"
            aria-label="Fotografía anterior"
        >
            <span>←</span>
        </button>


        {{-- IMAGEN --}}
        <div class="lightbox-stage">

            <div
                id="lightbox-image-wrapper"
                class="lightbox-image-wrapper"
            >

                <img
                    id="lightbox-image"
                    src=""
                    alt="{{ $proyecto['nombre'] }}"
                >

            </div>

        </div>


        {{-- SIGUIENTE --}}
        <button
            type="button"
            id="lightbox-next"
            class="lightbox-arrow lightbox-next"
            aria-label="Fotografía siguiente"
        >
            <span>→</span>
        </button>

    </div>


    {{-- PIE --}}
    <div class="lightbox-footer">

        <span>
            Registro fotográfico
        </span>

        <div class="lightbox-progress">

            <div
                id="lightbox-progress-bar"
                class="lightbox-progress-bar"
            ></div>

        </div>

        <span>
            Usa ← → para navegar
        </span>

    </div>

</div>


</section>



<style>

/* =========================================================
   ENTRADA
========================================================= */

.detail-enter {

    opacity: 0;

    transform:
        translateY(25px);

    animation:
        detailEnter
        .85s
        forwards
        cubic-bezier(.16,1,.3,1);

}


.detail-enter:nth-child(2) {

    animation-delay:
        .12s;

}


@keyframes detailEnter {

    to {

        opacity: 1;

        transform:
            translateY(0);

    }

}



/* =========================================================
   VOLVER
========================================================= */

.back-projects {

    display: inline-flex;

    align-items: center;

    gap: 12px;

    color:
        rgba(4,76,127,.50);

    font-size: 10px;

    font-weight: 700;

    text-transform:
        uppercase;

    letter-spacing:
        .16em;

    transition:
        color .3s ease;

}


.back-projects span:first-child {

    transition:
        transform .3s ease;

}


.back-projects:hover {

    color:
        #009ABD;

}


.back-projects:hover span:first-child {

    transform:
        translateX(-5px);

}



/* =========================================================
   UBICACIÓN
========================================================= */

.location-pulse {

    position: relative;

    width: 8px;

    height: 8px;

    flex-shrink: 0;

    border-radius: 50%;

    background:
        #E31F1E;

}


.location-pulse::after {

    content: "";

    position: absolute;

    inset: -5px;

    border:
        1px solid
        rgba(227,31,30,.4);

    border-radius: 50%;

    animation:
        locationPulse
        2s
        infinite;

}


@keyframes locationPulse {

    0% {

        opacity: 1;

        transform:
            scale(.7);

    }

    100% {

        opacity: 0;

        transform:
            scale(1.8);

    }

}



/* =========================================================
   COVER
========================================================= */

.project-cover-image {

    animation:
        coverReveal
        1.1s
        cubic-bezier(.16,1,.3,1);

}


@keyframes coverReveal {

    from {

        opacity: 0;

        transform:
            scale(1.03);

    }

    to {

        opacity: 1;

        transform:
            scale(1);

    }

}



/* =========================================================
   REVEAL
========================================================= */

.project-reveal {

    opacity: 0;

    transform:
        translateY(35px);

    transition:
        opacity .85s
        cubic-bezier(.16,1,.3,1),
        transform .85s
        cubic-bezier(.16,1,.3,1);

}


.project-reveal.visible {

    opacity: 1;

    transform:
        translateY(0);

}



/* =========================================================
   FICHA DE INFORMACIÓN
========================================================= */

.project-info-grid {

    display: grid;

    grid-template-columns:
        repeat(2,1fr);

    border-top:
        1px solid
        rgba(4,76,127,.12);

}


.project-info {

    min-height: 130px;

    padding:
        25px 0;

    border-bottom:
        1px solid
        rgba(4,76,127,.12);

}


.project-info:nth-child(odd) {

    padding-right:
        30px;

    border-right:
        1px solid
        rgba(4,76,127,.12);

}


.project-info:nth-child(even) {

    padding-left:
        30px;

}


.project-info span {

    display: block;

    color:
        rgba(4,76,127,.35);

    font-size:
        9px;

    font-weight:
        700;

    text-transform:
        uppercase;

    letter-spacing:
        .16em;

}


.project-info strong {

    display: block;

    margin-top:
        25px;

    color:
        #044C7F;

    font-size:
        clamp(17px,2vw,23px);

    font-weight:
        600;

}



/* =========================================================
   GALERÍA
========================================================= */

.project-gallery-section {

    position: relative;

    padding:
        110px 0 120px;

    background:
        #F6F8F9;

    overflow: hidden;

}



/* =========================================================
   CABECERA GALERÍA
========================================================= */

.gallery-header {

    display: grid;

    grid-template-columns:
        minmax(0,1.5fr)
        minmax(260px,.5fr);

    gap: 80px;

    align-items: end;

    margin-bottom:
        60px;

}


.gallery-eyebrow {

    display: flex;

    align-items: center;

    gap: 14px;

}


.gallery-eyebrow-number {

    color:
        #009ABD;

    font-size:
        10px;

    font-weight:
        700;

    letter-spacing:
        .15em;

}


.gallery-eyebrow-line {

    width:
        35px;

    height:
        1px;

    background:
        rgba(0,154,189,.45);

}


.gallery-eyebrow-text {

    color:
        rgba(4,76,127,.45);

    font-size:
        10px;

    font-weight:
        700;

    text-transform:
        uppercase;

    letter-spacing:
        .22em;

}



/* =========================================================
   TÍTULO GALERÍA
========================================================= */

.gallery-title {

    margin-top:
        22px;

    color:
        #044C7F;

    font-size:
        clamp(42px,6vw,76px);

    font-weight:
        600;

    line-height:
        .95;

    letter-spacing:
        -.05em;

}


.gallery-title span {

    display: block;

    color:
        rgba(4,76,127,.22);

}



/* =========================================================
   TEXTO GALERÍA
========================================================= */

.gallery-header-right {

    padding-left:
        30px;

    border-left:
        1px solid
        rgba(4,76,127,.12);

}


.gallery-header-right p {

    color:
        #6B7780;

    font-size:
        13px;

    line-height:
        1.9;

}



/* =========================================================
   CONTADOR
========================================================= */

.gallery-counter {

    display: flex;

    align-items:
        baseline;

    gap:
        12px;

    margin-top:
        28px;

}


.gallery-counter strong {

    color:
        #044C7F;

    font-size:
        34px;

    font-weight:
        500;

    letter-spacing:
        -.04em;

}


.gallery-counter span {

    color:
        rgba(4,76,127,.35);

    font-size:
        9px;

    font-weight:
        700;

    text-transform:
        uppercase;

    letter-spacing:
        .16em;

}



/* =========================================================
   GRID EDITORIAL
========================================================= */

.editorial-gallery {

    display: grid;

    grid-template-columns:
        repeat(12,1fr);

    grid-auto-flow:
        dense;

    gap:
        12px;

}



/* =========================================================
   FOTOGRAFÍA BASE
========================================================= */

.editorial-image {

    position: relative;

    grid-column:
        span 4;

    height:
        330px;

    padding: 0;

    overflow: hidden;

    border: 0;

    background:
        #DDE5E9;

    cursor:
        pointer;

    text-align:
        left;

}



/* =========================================================
   DISTRIBUCIÓN EDITORIAL
========================================================= */

.editorial-image.gallery-featured {

    grid-column:
        span 8;

    grid-row:
        span 2;

    height:
        672px;

}


.editorial-image.gallery-vertical {

    grid-column:
        span 4;

    grid-row:
        span 2;

    height:
        672px;

}


.editorial-image.gallery-standard {

    grid-column:
        span 4;

    height:
        330px;

}


.editorial-image.gallery-wide {

    grid-column:
        span 8;

    height:
        380px;

}



/* =========================================================
   IMAGEN
========================================================= */

.editorial-image img {

    width:
        100%;

    height:
        100%;

    object-fit:
        cover;

    transition:
        transform
        1s
        cubic-bezier(.16,1,.3,1),
        filter
        .5s ease;

}


.editorial-image:hover img {

    transform:
        scale(1.045);

}



/* =========================================================
   OVERLAY
========================================================= */

.editorial-overlay {

    position:
        absolute;

    inset:
        0;

    background:
        linear-gradient(
            to top,
            rgba(2,47,79,.60),
            rgba(2,47,79,0) 55%
        );

    opacity:
        .45;

    transition:
        opacity
        .4s ease;

}


.editorial-image:hover
.editorial-overlay {

    opacity:
        .85;

}



/* =========================================================
   NÚMERO FOTO
========================================================= */

.editorial-number {

    position:
        absolute;

    left:
        20px;

    top:
        20px;

    color:
        white;

    font-size:
        9px;

    font-weight:
        700;

    letter-spacing:
        .16em;

    opacity:
        .75;

}



/* =========================================================
   BOTÓN VER
========================================================= */

.editorial-expand {

    position:
        absolute;

    right:
        20px;

    bottom:
        20px;

    display:
        flex;

    align-items:
        center;

    gap:
        13px;

    color:
        white;

    opacity:
        0;

    transform:
        translateY(10px);

    transition:
        opacity .35s ease,
        transform .4s
        cubic-bezier(.16,1,.3,1);

}


.editorial-expand span {

    font-size:
        9px;

    font-weight:
        700;

    text-transform:
        uppercase;

    letter-spacing:
        .18em;

}


.editorial-expand strong {

    width:
        42px;

    height:
        42px;

    display:
        flex;

    align-items:
        center;

    justify-content:
        center;

    background:
        white;

    color:
        #044C7F;

    font-size:
        16px;

    font-weight:
        400;

}


.editorial-image:hover
.editorial-expand {

    opacity:
        1;

    transform:
        translateY(0);

}



/* =========================================================
   SIN FOTOS
========================================================= */

.gallery-no-images {

    position:
        relative;

    min-height:
        280px;

    display:
        flex;

    align-items:
        center;

    justify-content:
        center;

    gap:
        40px;

    overflow:
        hidden;

    border-top:
        1px solid
        rgba(4,76,127,.12);

    border-bottom:
        1px solid
        rgba(4,76,127,.12);

}


.gallery-no-images-number {

    color:
        rgba(4,76,127,.07);

    font-size:
        130px;

    font-weight:
        700;

    line-height:
        1;

}


.gallery-no-images strong {

    display:
        block;

    color:
        #044C7F;

    font-size:
        20px;

    font-weight:
        600;

}


.gallery-no-images p {

    max-width:
        350px;

    margin-top:
        10px;

    color:
        #78858C;

    font-size:
        12px;

    line-height:
        1.8;

}



/* =========================================================
   NAVEGACIÓN
========================================================= */

.project-navigation {

    display:
        grid;

    grid-template-columns:
        repeat(2,1fr);

}


.project-nav-link {

    min-height:
        230px;

    padding:
        45px 0;

    display:
        flex;

    flex-direction:
        column;

    justify-content:
        space-between;

    color:
        white;

    transition:
        background-color .35s ease,
        padding .4s
        cubic-bezier(.16,1,.3,1);

}


.project-nav-link:first-child {

    padding-right:
        40px;

    border-right:
        1px solid
        rgba(255,255,255,.10);

}


.project-nav-next {

    padding-left:
        40px;

    text-align:
        right;

}


.project-nav-link span {

    color:
        rgba(255,255,255,.35);

    font-size:
        9px;

    text-transform:
        uppercase;

    letter-spacing:
        .18em;

}


.project-nav-link strong {

    color:
        white;

    font-size:
        clamp(20px,3vw,32px);

    font-weight:
        500;

}


.project-nav-link:hover {

    background:
        rgba(255,255,255,.035);

}



/* =========================================================
   LIGHTBOX / VISOR TIPO ÁLBUM
========================================================= */

.gallery-lightbox {
    position: fixed;
    inset: 0;
    z-index: 9999;

    display: flex;
    flex-direction: column;

    background: #021f34;

    opacity: 0;
    visibility: hidden;
    pointer-events: none;

    transition:
        opacity .45s ease,
        visibility .45s ease;
}

.gallery-lightbox.active {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
}


/* =========================================================
   FONDO
========================================================= */

.lightbox-backdrop {
    position: absolute;
    inset: 0;

    background:
        radial-gradient(
            circle at center,
            rgba(4, 76, 127, .28),
            rgba(2, 31, 52, .97) 65%
        );

    pointer-events: none;
}


/* =========================================================
   CABECERA
========================================================= */

.lightbox-topbar {
    position: relative;
    z-index: 5;

    min-height: 100px;

    display: grid;
    grid-template-columns: 1fr auto 1fr;
    align-items: center;

    padding: 20px 40px;

    border-bottom:
        1px solid rgba(255,255,255,.10);
}


/* INFORMACIÓN PROYECTO */

.lightbox-project-info {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.lightbox-project-info span {
    color: #009ABD;

    font-size: 9px;
    font-weight: 700;

    text-transform: uppercase;
    letter-spacing: .20em;
}

.lightbox-project-info strong {
    color: rgba(255,255,255,.75);

    font-size: 13px;
    font-weight: 500;
}


/* =========================================================
   CONTADOR
========================================================= */

.lightbox-counter {
    display: flex;
    align-items: center;
    gap: 14px;

    color: white;
}

#lightbox-current {
    font-size: 22px;
    font-weight: 500;
}

#lightbox-total {
    color: rgba(255,255,255,.35);

    font-size: 12px;
}

.lightbox-counter-line {
    width: 35px;
    height: 1px;

    background:
        rgba(255,255,255,.20);
}


/* =========================================================
   CERRAR
========================================================= */

.lightbox-close {
    justify-self: end;

    position: relative;

    width: 50px;
    height: 50px;

    border:
        1px solid rgba(255,255,255,.15);

    background: transparent;

    cursor: pointer;

    transition:
        background-color .3s ease,
        border-color .3s ease,
        transform .4s cubic-bezier(.16,1,.3,1);
}

.lightbox-close span {
    position: absolute;

    left: 50%;
    top: 50%;

    width: 18px;
    height: 1px;

    background: white;
}

.lightbox-close span:first-child {
    transform:
        translate(-50%, -50%)
        rotate(45deg);
}

.lightbox-close span:last-child {
    transform:
        translate(-50%, -50%)
        rotate(-45deg);
}

.lightbox-close:hover {
    background: #009ABD;
    border-color: #009ABD;

    transform:
        rotate(90deg);
}


/* =========================================================
   VISOR
========================================================= */

.lightbox-viewer {
    position: relative;
    z-index: 2;

    flex: 1;

    min-height: 0;

    display: grid;
    grid-template-columns: 100px minmax(0, 1fr) 100px;

    align-items: center;
}


/* =========================================================
   ESCENARIO
========================================================= */

.lightbox-stage {
    position: relative;

    width: 100%;
    height: 100%;

    min-height: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    overflow: hidden;

    padding: 35px;
}


/* =========================================================
   IMAGEN
========================================================= */

.lightbox-image-wrapper {
    position: relative;

    width: 100%;
    height: 100%;

    display: flex;
    align-items: center;
    justify-content: center;

    will-change:
        transform,
        opacity;
}


.lightbox-image-wrapper img {
    display: block;

    max-width: 100%;
    max-height: 100%;

    width: auto;
    height: auto;

    object-fit: contain;

    box-shadow:
        0 30px 80px
        rgba(0,0,0,.25);

    user-select: none;

    -webkit-user-drag: none;
}


/* =========================================================
   EFECTO CAMBIO DE PÁGINA
========================================================= */

.lightbox-image-wrapper.page-exit-left {
    animation:
        pageExitLeft
        .30s
        cubic-bezier(.4,0,.2,1)
        forwards;
}

.lightbox-image-wrapper.page-enter-right {
    animation:
        pageEnterRight
        .48s
        cubic-bezier(.16,1,.3,1)
        forwards;
}


.lightbox-image-wrapper.page-exit-right {
    animation:
        pageExitRight
        .30s
        cubic-bezier(.4,0,.2,1)
        forwards;
}

.lightbox-image-wrapper.page-enter-left {
    animation:
        pageEnterLeft
        .48s
        cubic-bezier(.16,1,.3,1)
        forwards;
}


@keyframes pageExitLeft {

    from {
        opacity: 1;
        transform:
            translateX(0)
            scale(1);
    }

    to {
        opacity: 0;
        transform:
            translateX(-90px)
            scale(.97);
    }

}


@keyframes pageEnterRight {

    from {
        opacity: 0;
        transform:
            translateX(100px)
            scale(.97);
    }

    to {
        opacity: 1;
        transform:
            translateX(0)
            scale(1);
    }

}


@keyframes pageExitRight {

    from {
        opacity: 1;
        transform:
            translateX(0)
            scale(1);
    }

    to {
        opacity: 0;
        transform:
            translateX(90px)
            scale(.97);
    }

}


@keyframes pageEnterLeft {

    from {
        opacity: 0;
        transform:
            translateX(-100px)
            scale(.97);
    }

    to {
        opacity: 1;
        transform:
            translateX(0)
            scale(1);
    }

}


/* =========================================================
   FLECHAS
========================================================= */

.lightbox-arrow {
    position: relative;

    width: 60px;
    height: 60px;

    display: flex;
    align-items: center;
    justify-content: center;

    justify-self: center;

    border:
        1px solid rgba(255,255,255,.15);

    background:
        rgba(255,255,255,.03);

    color: white;

    cursor: pointer;

    transition:
        background-color .3s ease,
        border-color .3s ease,
        transform .35s cubic-bezier(.16,1,.3,1);
}

.lightbox-arrow span {
    font-size: 22px;

    transition:
        transform .3s ease;
}

.lightbox-arrow:hover {
    background: #009ABD;
    border-color: #009ABD;
}

.lightbox-prev:hover {
    transform:
        translateX(-5px);
}

.lightbox-next:hover {
    transform:
        translateX(5px);
}

.lightbox-prev:hover span {
    transform:
        translateX(-3px);
}

.lightbox-next:hover span {
    transform:
        translateX(3px);
}


/* =========================================================
   PIE
========================================================= */

.lightbox-footer {
    position: relative;
    z-index: 5;

    min-height: 75px;

    display: grid;
    grid-template-columns:
        auto minmax(100px, 300px) auto;

    align-items: center;
    justify-content: center;

    gap: 25px;

    padding:
        15px 40px;

    border-top:
        1px solid rgba(255,255,255,.08);
}

.lightbox-footer > span {
    color:
        rgba(255,255,255,.35);

    font-size: 8px;
    font-weight: 700;

    text-transform: uppercase;
    letter-spacing: .17em;
}


/* =========================================================
   PROGRESO
========================================================= */

.lightbox-progress {
    width: 100%;
    height: 1px;

    overflow: hidden;

    background:
        rgba(255,255,255,.12);
}

.lightbox-progress-bar {
    width: 0%;
    height: 100%;

    background:
        #009ABD;

    transition:
        width .45s
        cubic-bezier(.16,1,.3,1);
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1024px) {

    .lightbox-viewer {
        grid-template-columns:
            75px minmax(0,1fr) 75px;
    }

    .lightbox-arrow {
        width: 50px;
        height: 50px;
    }

}


/* =========================================================
   MÓVIL
========================================================= */

@media (max-width: 767px) {

    .lightbox-topbar {
        min-height: 75px;

        grid-template-columns:
            1fr auto;

        padding:
            12px 15px;
    }

    .lightbox-project-info strong {
        max-width: 180px;

        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .lightbox-counter {
        position: absolute;

        left: 50%;
        bottom: -35px;

        transform:
            translateX(-50%);
    }

    .lightbox-close {
        width: 43px;
        height: 43px;
    }


    .lightbox-viewer {
        display: block;

        position: relative;

        padding:
            55px 0 70px;
    }


    .lightbox-stage {
        height: 100%;

        padding:
            15px;
    }


    .lightbox-arrow {
        position: absolute;

        bottom: 15px;

        z-index: 10;

        width: 50px;
        height: 50px;
    }


    .lightbox-prev {
        left:
            calc(50% - 65px);
    }


    .lightbox-next {
        right:
            calc(50% - 65px);
    }


    .lightbox-footer {
        display: none;
    }

}

</style>



<script>
document.addEventListener('DOMContentLoaded', function () {

    /* =====================================================
       GALERÍA
    ====================================================== */

    const galleryImages =
        Array.from(
            document.querySelectorAll('.editorial-image')
        );

    const lightbox =
        document.getElementById('gallery-lightbox');

    const lightboxImage =
        document.getElementById('lightbox-image');

    const imageWrapper =
        document.getElementById('lightbox-image-wrapper');

    const closeLightbox =
        document.getElementById('close-lightbox');

    const prevButton =
        document.getElementById('lightbox-prev');

    const nextButton =
        document.getElementById('lightbox-next');

    const currentCounter =
        document.getElementById('lightbox-current');

    const totalCounter =
        document.getElementById('lightbox-total');

    const progressBar =
        document.getElementById('lightbox-progress-bar');


    let currentIndex = 0;

    let isAnimating = false;

    let touchStartX = 0;

    let touchEndX = 0;


    /* =====================================================
       UTILIDAD NÚMERO
    ====================================================== */

    function formatNumber(number) {

        return String(number)
            .padStart(2, '0');

    }


    /* =====================================================
       ACTUALIZAR CONTADOR
    ====================================================== */

    function updateCounter() {

        currentCounter.textContent =
            formatNumber(currentIndex + 1);

        totalCounter.textContent =
            formatNumber(galleryImages.length);


        const progress =
            galleryImages.length > 0
                ? ((currentIndex + 1) / galleryImages.length) * 100
                : 0;

        progressBar.style.width =
            progress + '%';

    }


    /* =====================================================
       OBTENER IMAGEN
    ====================================================== */

    function getImage(index) {

        return galleryImages[index]
            .dataset
            .image;

    }


    /* =====================================================
       ABRIR GALERÍA
    ====================================================== */

    function openGallery(index) {

        currentIndex = index;

        lightboxImage.src =
            getImage(currentIndex);

        updateCounter();

        lightbox.classList.add(
            'active'
        );

        lightbox.setAttribute(
            'aria-hidden',
            'false'
        );

        document.body.style.overflow =
            'hidden';

    }


    /* =====================================================
       CAMBIAR IMAGEN
    ====================================================== */

    function changeImage(direction) {

        if (
            isAnimating ||
            galleryImages.length <= 1
        ) {
            return;
        }


        isAnimating = true;


        /*
        |--------------------------------------------------------------------------
        | CALCULAR SIGUIENTE ÍNDICE
        |--------------------------------------------------------------------------
        */

        let newIndex;

        if (direction === 'next') {

            newIndex =
                currentIndex + 1;

            /*
            | Al llegar a la última,
            | regresamos a la primera.
            */

            if (
                newIndex >=
                galleryImages.length
            ) {
                newIndex = 0;
            }

        }
        else {

            newIndex =
                currentIndex - 1;

            /*
            | Al estar en la primera,
            | regresamos a la última.
            */

            if (newIndex < 0) {

                newIndex =
                    galleryImages.length - 1;

            }

        }


        /*
        |--------------------------------------------------------------------------
        | ANIMACIÓN DE SALIDA
        |--------------------------------------------------------------------------
        */

        const exitClass =
            direction === 'next'
                ? 'page-exit-left'
                : 'page-exit-right';


        const enterClass =
            direction === 'next'
                ? 'page-enter-right'
                : 'page-enter-left';


        imageWrapper.classList.add(
            exitClass
        );


        /*
        |--------------------------------------------------------------------------
        | CAMBIAR FOTOGRAFÍA
        |--------------------------------------------------------------------------
        */

        setTimeout(function () {

            currentIndex =
                newIndex;


            lightboxImage.src =
                getImage(currentIndex);


            updateCounter();


            imageWrapper.classList.remove(
                'page-exit-left',
                'page-exit-right'
            );


            imageWrapper.classList.add(
                enterClass
            );


            /*
            |--------------------------------------------------------------------------
            | TERMINAR ANIMACIÓN
            |--------------------------------------------------------------------------
            */

            setTimeout(function () {

                imageWrapper.classList.remove(
                    'page-enter-right',
                    'page-enter-left'
                );

                isAnimating = false;

            }, 480);


        }, 300);

    }


    /* =====================================================
       SIGUIENTE
    ====================================================== */

    function nextImage() {

        changeImage(
            'next'
        );

    }


    /* =====================================================
       ANTERIOR
    ====================================================== */

    function previousImage() {

        changeImage(
            'prev'
        );

    }


    /* =====================================================
       CERRAR
    ====================================================== */

    function closeGallery() {

        lightbox.classList.remove(
            'active'
        );

        lightbox.setAttribute(
            'aria-hidden',
            'true'
        );

        document.body.style.overflow =
            '';

        setTimeout(function () {

            if (
                !lightbox.classList.contains(
                    'active'
                )
            ) {

                lightboxImage.src =
                    '';

            }

        }, 450);

    }


    /* =====================================================
       CLICK EN LAS FOTOGRAFÍAS
    ====================================================== */

    galleryImages.forEach(
        function (item, index) {

            item.addEventListener(
                'click',
                function () {

                    openGallery(
                        index
                    );

                }
            );

        }
    );


    /* =====================================================
       BOTONES
    ====================================================== */

    if (nextButton) {

        nextButton.addEventListener(
            'click',
            nextImage
        );

    }


    if (prevButton) {

        prevButton.addEventListener(
            'click',
            previousImage
        );

    }


    if (closeLightbox) {

        closeLightbox.addEventListener(
            'click',
            closeGallery
        );

    }


    /* =====================================================
       CERRAR AL TOCAR FONDO
    ====================================================== */

    lightbox.addEventListener(
        'click',
        function (event) {

            if (
                event.target.classList.contains(
                    'lightbox-backdrop'
                )
            ) {

                closeGallery();

            }

        }
    );


    /* =====================================================
       TECLADO
    ====================================================== */

    document.addEventListener(
        'keydown',
        function (event) {

            if (
                !lightbox.classList.contains(
                    'active'
                )
            ) {
                return;
            }


            if (event.key === 'Escape') {

                closeGallery();

            }


            if (event.key === 'ArrowRight') {

                nextImage();

            }


            if (event.key === 'ArrowLeft') {

                previousImage();

            }

        }
    );


    /* =====================================================
       SWIPE EN CELULAR
    ====================================================== */

    lightbox.addEventListener(
        'touchstart',
        function (event) {

            touchStartX =
                event.changedTouches[0]
                    .screenX;

        },
        {
            passive: true
        }
    );


    lightbox.addEventListener(
        'touchend',
        function (event) {

            touchEndX =
                event.changedTouches[0]
                    .screenX;


            const difference =
                touchStartX -
                touchEndX;


            /*
            |--------------------------------------------------------------------------
            | DESLIZÓ A LA IZQUIERDA
            |--------------------------------------------------------------------------
            */

            if (difference > 50) {

                nextImage();

            }


            /*
            |--------------------------------------------------------------------------
            | DESLIZÓ A LA DERECHA
            |--------------------------------------------------------------------------
            */

            if (difference < -50) {

                previousImage();

            }

        },
        {
            passive: true
        }
    );


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
                    threshold: .10
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

                element.classList.add(
                    'visible'
                );

            }
        );

    }

});
</script>

@endsection
