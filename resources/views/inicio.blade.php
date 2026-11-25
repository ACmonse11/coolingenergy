@extends('layouts.app')

@section('title', 'Cooling Energy | Ingeniería HVAC y PCI')

@section('content')

<style>
    /* =========================================================
       PROTECCIÓN RESPONSIVE GENERAL DE INICIO
    ========================================================== */

    .cooling-home {
        width: 100%;
        max-width: 100%;
        overflow-x: clip;
    }

    .cooling-home *,
    .cooling-home *::before,
    .cooling-home *::after {
        box-sizing: border-box;
    }

    .cooling-home img,
    .cooling-home video,
    .cooling-home svg {
        max-width: 100%;
    }

    /*
        Evita que textos largos obliguen a las columnas
        de Grid/Flex a crecer más que la pantalla.
    */
    .cooling-home .responsive-item {
        min-width: 0;
    }

    /* =========================================================
       HERO
    ========================================================== */

    .cooling-hero {
        min-height: 620px;
        height: min(900px, 100svh);
    }

    .cooling-hero-image {
        position: absolute;
        inset: 0;
    }

    .cooling-hero-image img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    /*
        En celulares evitamos títulos excesivamente grandes
        y mantenemos espacio para los botones e indicadores.
    */
    @media (max-width: 639px) {
        .cooling-hero {
            min-height: 640px;
            height: 100svh;
            max-height: 820px;
        }

        .cooling-hero-image img {
            object-position: center center;
        }
    }

    @media (max-width: 374px) {
        .cooling-hero {
            min-height: 620px;
        }
    }

    /* =========================================================
       TEXTO JUSTIFICADO
    ========================================================== */

    .cooling-home .justify-copy {
        text-align: justify;
        text-justify: inter-word;
    }

    /*
        En pantallas muy pequeñas el justificado puede producir
        huecos demasiado grandes entre palabras.
    */
    @media (max-width: 479px) {
        .cooling-home .justify-copy {
            text-align: left;
        }
    }

    /* =========================================================
       ANIMACIONES HERO
    ========================================================== */

    #hero-eyebrow,
    #hero-title,
    #hero-description {
        will-change: opacity, transform;
    }

    .hero-image {
        will-change: opacity;
    }

    /* =========================================================
       ACCESIBILIDAD / REDUCCIÓN DE MOVIMIENTO
    ========================================================== */

    @media (prefers-reduced-motion: reduce) {
        .cooling-home *,
        .cooling-home *::before,
        .cooling-home *::after {
            scroll-behavior: auto !important;
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }
    }
    /* ANIMACIONES AL HACER SCROLL */

.cooling-home .scroll-reveal {
    opacity: 0;
    transform: translateY(35px);
    transition:
        opacity 0.8s ease,
        transform 0.8s ease;
}

.cooling-home .scroll-reveal.is-visible {
    opacity: 1;
    transform: translateY(0);
}

/* Animaciones adaptadas a celulares */

@media (max-width: 767px) {
    .cooling-home .scroll-reveal {
        transform: translateY(20px);
        transition-duration: 0.6s;
    }

    .cooling-home .scroll-reveal.is-visible {
        transform: translateY(0);
    }
}

/* Accesibilidad */

@media (prefers-reduced-motion: reduce) {
    .cooling-home .scroll-reveal {
        opacity: 1;
        transform: none;
        transition: none;
    }
}
</style>


<div class="cooling-home">

    {{-- =========================================================
        HERO SLIDER
    ========================================================== --}}
    <section
        id="hero-slider"
        class="cooling-hero relative w-full bg-[#044C7F] flex items-center justify-center overflow-hidden"
    >

        {{-- =====================================================
            IMÁGENES
        ====================================================== --}}

        {{-- SLIDE 1 - PCI --}}
        <div
            class="hero-image cooling-hero-image opacity-100 transition-opacity duration-1000"
            data-slide="0"
        >
            <img
                src="{{ asset('images/banners/cooling-energy-ejecucion-hvac.webp') }}"
                alt="Ingeniería PCI - Sistemas contra incendios"
                class="w-full h-full object-cover object-center"
            >
        </div>


        {{-- SLIDE 2 - HVAC --}}
        <div
            class="hero-image cooling-hero-image opacity-0 transition-opacity duration-1000"
            data-slide="1"
        >
            <img
                src="{{ asset('images/banners/cooling-energy-ingenieria-hvac-.webp') }}"
                alt="Ingeniería HVAC Cooling Energy"
                class="w-full h-full object-cover object-center"
            >
        </div>

         {{-- SLIDE 3 - HVAC --}}
        <div
            class="hero-image cooling-hero-image opacity-0 transition-opacity duration-1000"
            data-slide="2"
        >
            <img
                src="{{ asset('images/banners/cooling-energy-mantenimiento-preventivo-correctivo.webp') }}"
                alt="Ingeniería HVAC Cooling Energy"
                class="w-full h-full object-cover object-center"
            >
        </div>

         {{-- SLIDE 4 - HVAC --}}
        <div
            class="hero-image cooling-hero-image opacity-0 transition-opacity duration-1000"
            data-slide="3"
        >
            <img
                src="{{ asset('images/banners/cooling-energy-proteccion-contra-incendio-2560x1080.webp') }}"
                alt="Ingeniería HVAC Cooling Energy"
                class="w-full h-full object-cover object-center"
            >
        </div>

         {{-- SLIDE 5 - HVAC --}}
        <div
            class="hero-image cooling-hero-image opacity-0 transition-opacity duration-1000"
            data-slide="4"
        >
            <img
                src="{{ asset('images/banners/cooling-energy-redes-hidraulicas-hidrosanitarias.webp') }}"
                alt="Ingeniería HVAC Cooling Energy"
                class="w-full h-full object-cover object-center"
            >
        </div>


        {{-- =====================================================
            OVERLAYS
        ====================================================== --}}
        <div class="absolute inset-0 bg-[#3F4448]/60 z-[1]"></div>

        <div
            class="absolute inset-0
                   bg-gradient-to-t
                   from-[#022F4F]/70
                   via-[#022F4F]/10
                   to-[#044C7F]/25
                   z-[1]">
        </div>


        {{-- =====================================================
            ELEMENTOS DECORATIVOS
        ====================================================== --}}
        <div
            class="absolute z-[2]
                   -top-20 -right-24
                   w-[220px] h-[220px]
                   sm:-top-28 sm:-right-28
                   sm:w-[360px] sm:h-[360px]
                   md:w-[430px] md:h-[430px]
                   lg:w-[520px] lg:h-[520px]
                   border border-white/10
                   rounded-full
                   pointer-events-none">
        </div>

        <div
            class="absolute z-[2]
                   -bottom-28 -left-28
                   w-[260px] h-[260px]
                   sm:w-[400px] sm:h-[400px]
                   md:w-[480px] md:h-[480px]
                   lg:w-[600px] lg:h-[600px]
                   border border-[#009ABD]/30
                   rounded-full
                   pointer-events-none">
        </div>


        {{-- =====================================================
            CONTENIDO HERO
        ====================================================== --}}
        <div
            class="relative z-10
                   w-full
                   max-w-6xl
                   mx-auto
                   px-5
                   sm:px-6
                   md:px-8
                   lg:px-10
                   pt-20
                   pb-24
                   sm:pt-24
                   sm:pb-28
                   text-center"
        >

            {{-- Texto superior --}}
            <p
                id="hero-eyebrow"
                class="text-[#009ABD]
                       uppercase
                       tracking-[0.14em]
                       min-[375px]:tracking-[0.18em]
                       sm:tracking-[0.28em]
                       text-[11px]
                       sm:text-xs
                       md:text-sm
                       font-semibold
                       mb-3
                       sm:mb-4
                       transition-all
                       duration-500"
            >
                Protección Contra Incendios
            </p>


            {{-- Título --}}
            <h1
                id="hero-title"
                class="text-white
                       text-[2.25rem]
                       min-[375px]:text-[2.6rem]
                       sm:text-5xl
                       md:text-6xl
                       lg:text-7xl
                       xl:text-8xl
                       font-bold
                       leading-[1.02]
                       tracking-[-0.025em]
                       break-words
                       transition-all
                       duration-500"
            >
                Ingeniería PCI
            </h1>


            {{-- Descripción --}}
            <p
                id="hero-description"
                class="text-white/80
                       mt-4
                       sm:mt-6
                       text-sm
                       min-[375px]:text-base
                       sm:text-lg
                       md:text-xl
                       max-w-[92%]
                       sm:max-w-2xl
                       md:max-w-3xl
                       mx-auto
                       leading-6
                       sm:leading-7
                       md:leading-8
                       transition-all
                       duration-500"
            >
                Sistemas de protección contra incendios diseñados
                para brindar seguridad, eficiencia y confiabilidad.
            </p>


            {{-- BOTONES --}}
            <div
                class="mt-7
                       sm:mt-10
                       flex
                       flex-col
                       sm:flex-row
                       gap-3
                       sm:gap-4
                       justify-center
                       items-stretch
                       sm:items-center
                       max-w-md
                       sm:max-w-none
                       mx-auto"
            >

                <a
                    href="{{ route('servicios') }}"
                    class="w-full
                           sm:w-auto
                           min-h-[48px]
                           inline-flex
                           items-center
                           justify-center
                           bg-[#009ABD]
                           text-white
                           px-6
                           sm:px-8
                           py-3.5
                           rounded-md
                           text-sm
                           sm:text-base
                           font-semibold
                           transition
                           duration-300
                           hover:bg-white
                           hover:text-[#044C7F]"
                >
                    Conocer servicios
                </a>


                <a
                    href="{{ route('contacto') }}"
                    class="w-full
                           sm:w-auto
                           min-h-[48px]
                           inline-flex
                           items-center
                           justify-center
                           border
                           border-white/40
                           text-white
                           px-6
                           sm:px-8
                           py-3.5
                           rounded-md
                           text-sm
                           sm:text-base
                           font-semibold
                           backdrop-blur-sm
                           transition
                           duration-300
                           hover:bg-white
                           hover:text-[#044C7F]"
                >
                    Contactar
                </a>

            </div>

        </div>


        {{-- =====================================================
            INDICADORES HERO
            SOLO EXISTEN DOS SLIDES ACTIVOS
        ====================================================== --}}
        <div
            class="absolute
                   z-20
                   bottom-6
                   sm:bottom-8
                   md:bottom-9
                   left-1/2
                   -translate-x-1/2
                   flex
                   items-center
                   justify-center
                   gap-3"
        >

            <button
                type="button"
                data-hero-dot="0"
                aria-label="Ver banner PCI"
                class="hero-dot
                       min-h-[44px]
                       flex
                       items-center"
            >
                <span
                    class="hero-dot-line
                           block
                           w-10
                           h-[3px]
                           bg-[#009ABD]
                           transition-all
                           duration-300">
                </span>
            </button>


            <button
                type="button"
                data-hero-dot="1"
                aria-label="Ver banner HVAC"
                class="hero-dot
                       min-h-[44px]
                       flex
                       items-center"
            >
                <span
                    class="hero-dot-line
                           block
                           w-6
                           h-[3px]
                           bg-white/40
                           transition-all
                           duration-300">
                </span>
            </button>

        </div>

    </section>



    {{-- =========================================================
        INDICADORES
    ========================================================== --}}
    <section class="bg-white border-b border-gray-100">

        <div
            class="max-w-7xl
                   mx-auto
                   px-5
                   sm:px-6
                   lg:px-8
                   py-10
                   sm:py-12
                   lg:py-14"
        >

            <div
                class="grid
                       grid-cols-2
                       lg:grid-cols-4
                       gap-y-9
                       gap-x-4
                       sm:gap-x-8"
            >

                <div class="responsive-item text-center">
                    <p
                        class="text-2xl
                               sm:text-3xl
                               font-bold
                               text-[#044C7F]
                               !text-center"
                    >
                        HVAC
                    </p>

                    <p
                        class="text-gray-500
                               text-xs
                               sm:text-sm
                               mt-2
                               !text-center"
                    >
                        Ingeniería especializada
                    </p>
                </div>


                <div class="responsive-item text-center">
                    <p
                        class="text-2xl
                               sm:text-3xl
                               font-bold
                               text-[#044C7F]
                               !text-center"
                    >
                        PCI
                    </p>

                    <p
                        class="text-gray-500
                               text-xs
                               sm:text-sm
                               mt-2
                               !text-center"
                    >
                        Protección contra incendios
                    </p>
                </div>


                <div class="responsive-item text-center">
                    <p
                        class="text-2xl
                               sm:text-3xl
                               font-bold
                               text-[#044C7F]
                               !text-center"
                    >
                        360°
                    </p>

                    <p
                        class="text-gray-500
                               text-xs
                               sm:text-sm
                               mt-2
                               !text-center"
                    >
                        Soluciones integrales
                    </p>
                </div>


                <div class="responsive-item text-center">
                    <p
                        class="text-2xl
                               sm:text-3xl
                               font-bold
                               text-[#044C7F]
                               !text-center"
                    >
                        México
                    </p>

                    <p
                        class="text-gray-500
                               text-xs
                               sm:text-sm
                               mt-2
                               !text-center"
                    >
                        Capacidad operativa nacional
                    </p>
                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
        QUIÉNES SOMOS
    ========================================================== --}}
    <section class="bg-[#F7F9FA] py-14 sm:py-20 lg:py-24">

        <div
            class="max-w-7xl
                   mx-auto
                   px-5
                   sm:px-6
                   lg:px-8"
        >

            <div
                class="grid
                       grid-cols-1
                       lg:grid-cols-2
                       gap-8
                       sm:gap-10
                       lg:gap-16
                       items-center"
            >

                {{-- Columna izquierda --}}
                <div class="responsive-item">

                    <p
                        class="text-[#009ABD]
                               uppercase
                               tracking-[0.18em]
                               sm:tracking-[0.25em]
                               text-xs
                               font-bold
                               mb-3
                               sm:mb-4"
                    >
                        Cooling Energy
                    </p>


                    <h2
                        class="text-[1.9rem]
                               min-[375px]:text-3xl
                               sm:text-4xl
                               lg:text-5xl
                               font-bold
                               text-[#044C7F]
                               leading-[1.12]
                               tracking-[-0.02em]"
                    >
                        Ingeniería que convierte desafíos en soluciones.
                    </h2>

                </div>


                {{-- Columna derecha --}}
                <div class="responsive-item">

                    <p
                        class="justify-copy
                               text-gray-600
                               text-[15px]
                               sm:text-lg
                               leading-7
                               sm:leading-8"
                    >
                        Desarrollamos soluciones especializadas de ingeniería,
                        instalación y mantenimiento para sistemas HVAC y
                        Protección Contra Incendios, atendiendo proyectos
                        residenciales, comerciales, hoteleros e industriales.
                    </p>


                    <p
                        class="justify-copy
                               text-gray-600
                               mt-4
                               sm:mt-5
                               text-[15px]
                               sm:text-base
                               leading-7"
                    >
                        Desde Cancún, contamos con capacidad operativa para
                        participar en proyectos a nivel nacional, integrando
                        experiencia técnica, planeación y ejecución.
                    </p>


                    <a
                        href="{{ route('nosotros') }}"
                        class="inline-flex
                               mt-7
                               sm:mt-8
                               text-[#044C7F]
                               font-bold
                               border-b-2
                               border-[#009ABD]
                               pb-1
                               transition
                               hover:text-[#009ABD]"
                    >
                        Conocer Cooling Energy →
                    </a>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
        SERVICIOS
    ========================================================== --}}
    <section class="bg-white py-14 sm:py-20 lg:py-24">

        <div
            class="max-w-7xl
                   mx-auto
                   px-5
                   sm:px-6
                   lg:px-8"
        >

            {{-- Encabezado --}}
            <div class="max-w-3xl mb-8 sm:mb-12 lg:mb-14">

                <p
                    class="text-[#009ABD]
                           uppercase
                           tracking-[0.18em]
                           sm:tracking-[0.25em]
                           text-xs
                           font-bold
                           mb-3"
                >
                    Especialidades
                </p>


                <h2
                    class="text-[1.9rem]
                           min-[375px]:text-3xl
                           sm:text-4xl
                           lg:text-5xl
                           font-bold
                           text-[#044C7F]
                           leading-[1.12]
                           tracking-[-0.02em]"
                >
                    Ingeniería especializada para proyectos exigentes.
                </h2>

            </div>


            {{-- Tarjetas --}}
            <div
                class="grid
                       grid-cols-1
                       lg:grid-cols-2
                       gap-5
                       sm:gap-6"
            >

                {{-- HVAC --}}
                <article
                    class="group
                           responsive-item
                           relative
                           bg-[#044C7F]
                           min-h-[330px]
                           sm:min-h-[390px]
                           lg:min-h-[420px]
                           p-6
                           min-[375px]:p-7
                           sm:p-10
                           lg:p-12
                           overflow-hidden"
                >

                    <div
                        class="absolute
                               -right-28
                               -top-28
                               w-[230px]
                               h-[230px]
                               sm:w-[320px]
                               sm:h-[320px]
                               rounded-full
                               border
                               border-white/10
                               pointer-events-none">
                    </div>


                    <div
                        class="relative
                               z-10
                               h-full
                               min-h-[280px]
                               sm:min-h-[330px]
                               flex
                               flex-col
                               justify-between"
                    >

                        <div>

                            <span class="text-[#009ABD] text-sm font-bold">
                                01
                            </span>


                            <h3
                                class="text-white
                                       text-3xl
                                       sm:text-4xl
                                       font-bold
                                       mt-4
                                       sm:mt-5"
                            >
                                HVAC
                            </h3>


                            <p
                                class="justify-copy
                                       text-white/70
                                       mt-4
                                       sm:mt-5
                                       text-sm
                                       sm:text-base
                                       max-w-md
                                       leading-7"
                            >
                                Diseño, instalación, mantenimiento y optimización
                                de sistemas de climatización y aire acondicionado
                                para proyectos de distintas escalas.
                            </p>

                        </div>


                        <a
                            href="{{ route('servicios') }}"
                            class="inline-flex
                                   self-start
                                   mt-8
                                   sm:mt-12
                                   text-white
                                   font-semibold
                                   transition
                                   group-hover:text-[#009ABD]"
                        >
                            Explorar soluciones →
                        </a>

                    </div>

                </article>


                {{-- PCI --}}
                <article
                    class="group
                           responsive-item
                           relative
                           bg-[#F3F6F8]
                           min-h-[330px]
                           sm:min-h-[390px]
                           lg:min-h-[420px]
                           p-6
                           min-[375px]:p-7
                           sm:p-10
                           lg:p-12
                           overflow-hidden"
                >

                    <div
                        class="absolute
                               -bottom-28
                               -right-24
                               w-[240px]
                               h-[240px]
                               sm:w-[320px]
                               sm:h-[320px]
                               rounded-full
                               border
                               border-[#044C7F]/10
                               pointer-events-none">
                    </div>


                    <div
                        class="relative
                               z-10
                               h-full
                               min-h-[280px]
                               sm:min-h-[330px]
                               flex
                               flex-col
                               justify-between"
                    >

                        <div>

                            <span class="text-[#E31F1E] text-sm font-bold">
                                02
                            </span>


                            <h3
                                class="text-[#044C7F]
                                       text-[1.75rem]
                                       min-[375px]:text-3xl
                                       sm:text-4xl
                                       font-bold
                                       mt-4
                                       sm:mt-5
                                       leading-tight
                                       break-words"
                            >
                                Protección Contra Incendios
                            </h3>


                            <p
                                class="justify-copy
                                       text-gray-600
                                       mt-4
                                       sm:mt-5
                                       text-sm
                                       sm:text-base
                                       max-w-md
                                       leading-7"
                            >
                                Ingeniería e instalación de sistemas especializados
                                orientados a la seguridad y protección contra incendios.
                            </p>

                        </div>


                        <a
                            href="{{ route('servicios') }}"
                            class="inline-flex
                                   self-start
                                   mt-8
                                   sm:mt-12
                                   text-[#044C7F]
                                   font-semibold
                                   transition
                                   group-hover:text-[#009ABD]"
                        >
                            Explorar soluciones →
                        </a>

                    </div>

                </article>

            </div>

        </div>

    </section>



    {{-- =========================================================
        DIFERENCIADORES
    ========================================================== --}}
    <section class="bg-[#044C7F] py-14 sm:py-20 lg:py-24">

        <div
            class="max-w-7xl
                   mx-auto
                   px-5
                   sm:px-6
                   lg:px-8"
        >

            <div
                class="grid
                       grid-cols-1
                       lg:grid-cols-3
                       gap-9
                       sm:gap-10
                       lg:gap-14"
            >

                {{-- Título --}}
                <div class="responsive-item">

                    <p
                        class="text-[#009ABD]
                               uppercase
                               tracking-[0.18em]
                               sm:tracking-[0.25em]
                               text-xs
                               font-bold
                               mb-4"
                    >
                        Nuestra capacidad
                    </p>


                    <h2
                        class="text-white
                               text-[1.9rem]
                               min-[375px]:text-3xl
                               sm:text-4xl
                               lg:text-5xl
                               font-bold
                               leading-[1.12]
                               tracking-[-0.02em]"
                    >
                        De la ingeniería a la ejecución.
                    </h2>

                </div>


                {{-- Beneficios --}}
                <div
                    class="responsive-item
                           lg:col-span-2
                           grid
                           grid-cols-1
                           sm:grid-cols-2
                           gap-x-8
                           lg:gap-x-12
                           gap-y-7
                           sm:gap-y-10"
                >

                    <div class="responsive-item border-t border-white/20 pt-5 sm:pt-6">

                        <h3 class="text-white text-lg sm:text-xl font-semibold">
                            Ingeniería
                        </h3>

                        <p
                            class="justify-copy
                                   text-white/65
                                   mt-3
                                   text-sm
                                   sm:text-base
                                   leading-7"
                        >
                            Planeación técnica enfocada en las necesidades
                            específicas de cada proyecto.
                        </p>

                    </div>


                    <div class="responsive-item border-t border-white/20 pt-5 sm:pt-6">

                        <h3 class="text-white text-lg sm:text-xl font-semibold">
                            Instalación
                        </h3>

                        <p
                            class="justify-copy
                                   text-white/65
                                   mt-3
                                   text-sm
                                   sm:text-base
                                   leading-7"
                        >
                            Ejecución especializada mediante procesos organizados,
                            supervisión y control técnico.
                        </p>

                    </div>


                    <div class="responsive-item border-t border-white/20 pt-5 sm:pt-6">

                        <h3 class="text-white text-lg sm:text-xl font-semibold">
                            Mantenimiento
                        </h3>

                        <p
                            class="justify-copy
                                   text-white/65
                                   mt-3
                                   text-sm
                                   sm:text-base
                                   leading-7"
                        >
                            Programas preventivos y correctivos para conservar
                            el rendimiento y operación de los sistemas.
                        </p>

                    </div>


                    <div class="responsive-item border-t border-white/20 pt-5 sm:pt-6">

                        <h3 class="text-white text-lg sm:text-xl font-semibold">
                            Cobertura nacional
                        </h3>

                        <p
                            class="justify-copy
                                   text-white/65
                                   mt-3
                                   text-sm
                                   sm:text-base
                                   leading-7"
                        >
                            Capacidad operativa para desarrollar proyectos
                            en Cancún y diferentes regiones de México.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
        PROYECTO / EXPERIENCIA
    ========================================================== --}}
    <section class="bg-[#F7F9FA] py-14 sm:py-20 lg:py-24">

        <div
            class="max-w-7xl
                   mx-auto
                   px-5
                   sm:px-6
                   lg:px-8"
        >

            <div
                class="grid
                       grid-cols-1
                       lg:grid-cols-2
                       gap-9
                       sm:gap-12
                       lg:gap-16
                       items-center"
            >

                {{-- Imagen --}}
                <div class="responsive-item relative">

                    <div
                        class="aspect-[4/3]
                               sm:aspect-[16/10]
                               bg-[#DCE4E8]
                               overflow-hidden"
                    >




                            <img
                                src="{{ asset('images/ingenieria-pci-sistemas-contra-incendios.webp') }}"
                                alt="Proyecto HVAC Cooling Energy"
                                class="w-full h-full object-cover object-center"
                            >


                        <div
                            class="w-full
                                   h-full
                                   flex
                                   items-center
                                   justify-center
                                   text-center
                                   px-5
                                   sm:px-6"
                        >

                        </div>

                    </div>


                    <div
                        class="hidden
                               sm:block
                               absolute
                               -bottom-5
                               -right-5
                               w-20
                               h-20
                               lg:w-24
                               lg:h-24
                               bg-[#009ABD]
                               -z-10">
                    </div>

                </div>


                {{-- Texto --}}
                <div class="responsive-item">

                    <p
                        class="text-[#009ABD]
                               uppercase
                               tracking-[0.18em]
                               sm:tracking-[0.25em]
                               text-xs
                               font-bold
                               mb-4"
                    >
                        Experiencia
                    </p>


                    <h2
                        class="text-[1.9rem]
                               min-[375px]:text-3xl
                               sm:text-4xl
                               lg:text-5xl
                               font-bold
                               text-[#044C7F]
                               leading-[1.12]
                               tracking-[-0.02em]"
                    >
                        Ingeniería aplicada en obra.
                    </h2>


                    <p
                        class="justify-copy
                               text-gray-600
                               mt-5
                               text-[15px]
                               sm:text-lg
                               leading-7
                               sm:leading-8"
                    >
                        Cada proyecto requiere coordinación técnica, planeación,
                        supervisión y capacidad de respuesta. Nuestro enfoque busca
                        integrar soluciones funcionales desde la ingeniería hasta
                        su implementación.
                    </p>


                    <a
                        href="{{ route('proyectos') }}"
                        class="inline-flex
                               mt-7
                               sm:mt-8
                               items-center
                               text-[#044C7F]
                               font-bold
                               border-b-2
                               border-[#009ABD]
                               pb-1
                               transition
                               hover:text-[#009ABD]"
                    >
                        Ver proyectos →
                    </a>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
        CTA FINAL
    ========================================================== --}}
    <section class="bg-white py-14 sm:py-20 lg:py-24">

        <div
            class="max-w-7xl
                   mx-auto
                   px-5
                   sm:px-6
                   lg:px-8"
        >

            <div
                class="relative
                       bg-[#009ABD]
                       overflow-hidden
                       px-5
                       min-[375px]:px-6
                       sm:px-10
                       lg:px-16
                       py-10
                       sm:py-16
                       lg:py-20"
            >

                {{-- Decoración --}}
                <div
                    class="absolute
                           -right-32
                           -top-32
                           w-[260px]
                           h-[260px]
                           sm:w-[340px]
                           sm:h-[340px]
                           lg:w-[420px]
                           lg:h-[420px]
                           border
                           border-white/20
                           rounded-full
                           pointer-events-none">
                </div>


                <div
                    class="relative
                           z-10
                           grid
                           grid-cols-1
                           lg:grid-cols-2
                           gap-7
                           sm:gap-8
                           lg:gap-10
                           items-center"
                >

                    <div class="responsive-item">

                        <p
                            class="text-white/75
                                   uppercase
                                   tracking-[0.16em]
                                   sm:tracking-[0.25em]
                                   text-[11px]
                                   sm:text-xs
                                   font-bold
                                   mb-3
                                   sm:mb-4"
                        >
                            Hablemos de tu proyecto
                        </p>


                        <h2
                            class="text-white
                                   text-[1.85rem]
                                   min-[375px]:text-3xl
                                   sm:text-4xl
                                   lg:text-5xl
                                   font-bold
                                   leading-[1.12]
                                   tracking-[-0.02em]"
                        >
                            Ingeniería preparada para el siguiente reto.
                        </h2>

                    </div>


                    <div
                        class="responsive-item
                               w-full
                               lg:text-right"
                    >

                        <a
                            href="{{ route('contacto') }}"
                            class="w-full
                                   sm:w-auto
                                   min-h-[50px]
                                   inline-flex
                                   items-center
                                   justify-center
                                   bg-white
                                   text-[#044C7F]
                                   px-6
                                   sm:px-8
                                   py-4
                                   text-sm
                                   sm:text-base
                                   font-bold
                                   transition
                                   duration-300
                                   hover:bg-[#044C7F]
                                   hover:text-white"
                        >
                            Solicitar información
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>



{{-- =========================================================
    JAVASCRIPT HERO SLIDER
========================================================= --}}
<script>
document.addEventListener('DOMContentLoaded', function () {

    const reduceMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    );

    /* =========================================================
       ANIMACIONES AL HACER SCROLL
    ========================================================= */

    function initScrollAnimations() {

        if (
            !('IntersectionObserver' in window) ||
            reduceMotion.matches
        ) {
            return;
        }

        const elements = document.querySelectorAll(
            '.cooling-home section:not(#hero-slider) .responsive-item, ' +
            '.cooling-home section:not(#hero-slider) .max-w-3xl'
        );

        const observer = new IntersectionObserver(
            function (entries) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        entry.target.classList.add('is-visible');

                        observer.unobserve(entry.target);

                    }

                });

            },
            {
                threshold: 0.08,
                rootMargin: '0px 0px -15px 0px'
            }
        );

        elements.forEach(function (element, index) {

            element.classList.add('scroll-reveal');

            element.style.transitionDelay =
                `${(index % 4) * 90}ms`;

            observer.observe(element);

        });

    }

    initScrollAnimations();


    /* =========================================================
       INFORMACIÓN DE LOS CINCO BANNERS
    ========================================================= */

    const slides = [
        {
            eyebrow: 'Ingeniería y Ejecución',
            title: 'Ingeniería HVAC para tu proyecto',
            description:
                'Diseño, instalación y ejecución de sistemas de climatización y aire acondicionado para proyectos residenciales, comerciales, hoteleros e industriales.'
        },
        {
            eyebrow: 'Climatización y Confort',
            title: 'Instalación HVAC para cada espacio',
            description:
                'Desarrollamos soluciones de ingeniería HVAC para optimizar el confort térmico, la eficiencia energética y el funcionamiento de instalaciones.'
        },
        {
            eyebrow: 'Operación y Mantenimiento',
            title: 'Mantenimiento para tus sistemas y equipos',
            description:
                'Servicios de mantenimiento preventivo y correctivo para sistemas de aire acondicionado y climatización, orientados a conservar su rendimiento y continuidad operativa.'
        },
        {
            eyebrow: 'Seguridad y Protección',
            title: 'Redes contra incendio para tu inmueble',
            description:
                'Diseño e instalación de sistemas de protección contra incendios para proyectos comerciales, hoteleros e industriales.'
        },
        {
            eyebrow: 'Instalaciones Especializadas',
            title: 'Redes hidráulicas e hidrosanitarias',
            description:
                'Instalación de redes hidráulicas e hidrosanitarias para proyectos de construcción, integrando soluciones funcionales y eficientes.'
        }
    ];


    /* =========================================================
       ELEMENTOS DEL SLIDER
    ========================================================= */

    const slider = document.getElementById('hero-slider');

    if (!slider) {
        return;
    }

    const images = Array.from(
        slider.querySelectorAll('.hero-image')
    );

    const eyebrow = document.getElementById('hero-eyebrow');
    const title = document.getElementById('hero-title');
    const description = document.getElementById('hero-description');

    const slideCount = Math.min(
        slides.length,
        images.length
    );

    let currentSlide = 0;
    let interval = null;
    let textTimeout = null;


    /* =========================================================
       VALIDACIÓN
    ========================================================= */

    if (
        slideCount === 0 ||
        !eyebrow ||
        !title ||
        !description
    ) {
        return;
    }


    /* =========================================================
       GENERAR LOS CINCO INDICADORES AUTOMÁTICAMENTE
    ========================================================= */

    const firstDot = slider.querySelector('.hero-dot');

    const dotsContainer = firstDot
        ? firstDot.parentElement
        : null;

    if (dotsContainer) {

        dotsContainer.innerHTML = '';

        for (let i = 0; i < slideCount; i++) {

            const button = document.createElement('button');

            button.type = 'button';

            button.dataset.heroDot = i;

            button.setAttribute(
                'aria-label',
                `Ver banner ${i + 1}: ${slides[i].eyebrow}`
            );

            button.className =
                'hero-dot min-h-[44px] flex items-center justify-center';

            const line = document.createElement('span');

            line.className =
                'hero-dot-line block w-6 h-[3px] bg-white/40 transition-all duration-300';

            button.appendChild(line);

            dotsContainer.appendChild(button);

        }

    }

    const dots = Array.from(
        slider.querySelectorAll('.hero-dot')
    );


    /* =========================================================
       ACTUALIZAR INDICADORES
    ========================================================= */

    function updateDots(index) {

        dots.forEach(function (dot, dotIndex) {

            const line = dot.querySelector('.hero-dot-line');

            if (!line) {
                return;
            }

            const active = dotIndex === index;

            line.classList.toggle('w-10', active);
            line.classList.toggle('w-6', !active);

            line.classList.toggle('bg-[#009ABD]', active);
            line.classList.toggle('bg-white/40', !active);

            if (active) {

                dot.setAttribute('aria-current', 'true');

            } else {

                dot.removeAttribute('aria-current');

            }

        });

    }


    /* =========================================================
       ACTUALIZAR CONTENIDO DEL BANNER
    ========================================================= */

    function updateText(index) {

        eyebrow.textContent = slides[index].eyebrow;

        title.textContent = slides[index].title;

        description.textContent = slides[index].description;

        eyebrow.classList.remove(
            'opacity-0',
            'translate-y-3'
        );

        title.classList.remove(
            'opacity-0',
            'translate-y-5'
        );

        description.classList.remove(
            'opacity-0',
            'translate-y-3'
        );

    }


    /* =========================================================
       CAMBIAR SLIDE
    ========================================================= */

    function changeSlide(index, force = false) {

        if (
            !Number.isInteger(index) ||
            index < 0 ||
            index >= slideCount
        ) {
            return;
        }

        if (index === currentSlide && !force) {
            return;
        }

        if (textTimeout) {

            clearTimeout(textTimeout);

            textTimeout = null;

        }

        currentSlide = index;


        /* CAMBIAR IMAGEN */

        images.forEach(function (image, imageIndex) {

            const active = imageIndex === index;

            image.classList.toggle('opacity-100', active);

            image.classList.toggle('opacity-0', !active);

            image.setAttribute(
                'aria-hidden',
                active ? 'false' : 'true'
            );

        });


        /* ACTUALIZAR INDICADORES */

        updateDots(index);


        /* CAMBIO INMEDIATO SIN ANIMACIÓN */

        if (reduceMotion.matches || force) {

            updateText(index);

            return;

        }


        /* OCULTAR TEXTO */

        eyebrow.classList.add(
            'opacity-0',
            'translate-y-3'
        );

        title.classList.add(
            'opacity-0',
            'translate-y-5'
        );

        description.classList.add(
            'opacity-0',
            'translate-y-3'
        );


        /* MOSTRAR NUEVO TEXTO */

        textTimeout = setTimeout(function () {

            updateText(index);

            textTimeout = null;

        }, 400);

    }


    /* =========================================================
       CAMBIO AUTOMÁTICO
    ========================================================= */

    function startSlider() {

        stopSlider();

        if (
            slideCount <= 1 ||
            reduceMotion.matches ||
            document.hidden
        ) {
            return;
        }

        interval = setInterval(function () {

            const nextSlide =
                (currentSlide + 1) % slideCount;

            changeSlide(nextSlide);

        }, 6000);

    }


    /* =========================================================
       DETENER SLIDER
    ========================================================= */

    function stopSlider() {

        if (interval !== null) {

            clearInterval(interval);

            interval = null;

        }

    }


    /* =========================================================
       CLIC EN INDICADORES
    ========================================================= */

    dots.forEach(function (dot) {

        dot.addEventListener('click', function () {

            const index = Number(this.dataset.heroDot);

            if (
                !Number.isInteger(index) ||
                index < 0 ||
                index >= slideCount
            ) {
                return;
            }

            stopSlider();

            changeSlide(index);

            startSlider();

        });

    });


    /* =========================================================
       NAVEGACIÓN TÁCTIL EN CELULARES Y TABLETS
    ========================================================= */

    let touchStartX = 0;
    let touchStartY = 0;

    slider.addEventListener('touchstart', function (event) {

        touchStartX = event.changedTouches[0].screenX;

        touchStartY = event.changedTouches[0].screenY;

    }, { passive: true });


    slider.addEventListener('touchend', function (event) {

        const touchEndX = event.changedTouches[0].screenX;

        const touchEndY = event.changedTouches[0].screenY;

        const differenceX = touchStartX - touchEndX;

        const differenceY = touchStartY - touchEndY;

        if (
            Math.abs(differenceX) < 60 ||
            Math.abs(differenceX) <= Math.abs(differenceY)
        ) {
            return;
        }

        stopSlider();

        if (differenceX > 0) {

            changeSlide(
                (currentSlide + 1) % slideCount
            );

        } else {

            changeSlide(
                (currentSlide - 1 + slideCount) % slideCount
            );

        }

        startSlider();

    }, { passive: true });


    /* =========================================================
       PAUSAR CUANDO LA PESTAÑA NO ESTÁ VISIBLE
    ========================================================= */

    document.addEventListener('visibilitychange', function () {

        if (document.hidden) {

            stopSlider();

        } else {

            startSlider();

        }

    });


    /* =========================================================
       RESPETAR PREFERENCIAS DE MOVIMIENTO
    ========================================================= */

    reduceMotion.addEventListener('change', function () {

        if (reduceMotion.matches) {

            stopSlider();

            if (textTimeout) {

                clearTimeout(textTimeout);

                textTimeout = null;

            }

            updateText(currentSlide);

            document.querySelectorAll(
                '.cooling-home .scroll-reveal'
            ).forEach(function (element) {

                element.classList.add('is-visible');

            });

        } else {

            startSlider();

        }

    });


    /* =========================================================
       INICIALIZACIÓN
    ========================================================= */

    changeSlide(0, true);

    startSlider();

});
</script>

@endsection
