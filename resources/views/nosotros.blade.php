@extends('layouts.app')

@section('title', 'Nosotros | Cooling Energy')

@section('content')

<div id="cooling-about">

{{-- =========================================================
    HERO — COOLING ENERGY
========================================================= --}}
<section id="cooling-hero"
         class="relative bg-[#F4F7F8] overflow-hidden
                min-h-[88vh] flex items-center">

    {{-- CE GIGANTE / PARALLAX --}}
    <div id="hero-ce"
         class="absolute
                right-[-4%]
                top-1/2
                -translate-y-1/2
                text-[#044C7F]/[0.035]
                text-[220px]
                sm:text-[340px]
                md:text-[430px]
                lg:text-[540px]
                xl:text-[650px]
                font-black
                leading-none
                tracking-[-0.10em]
                select-none
                pointer-events-none
                will-change-transform">
        CE
    </div>

    {{-- LÍNEA SUPERIOR ANIMADA --}}
    <div class="hero-line
                absolute
                top-0 left-0
                w-[34%]
                h-[6px]
                bg-[#009ABD]">
    </div>

    {{-- DETALLE VERTICAL --}}
    <div class="hidden lg:block
                absolute
                left-[7%]
                top-[22%]
                bottom-[20%]
                w-px
                bg-[#044C7F]/10">
    </div>

    <div class="relative z-10
                max-w-7xl
                w-full
                mx-auto
                px-5 sm:px-8 lg:px-8
                py-32 lg:py-40">

        <div class="grid
                    lg:grid-cols-12
                    gap-10 lg:gap-12
                    items-end">

            {{-- =================================================
                TÍTULO
            ================================================== --}}
            <div class="lg:col-span-8">

                <div class="hero-eyebrow
                            flex
                            items-center
                            gap-4">

                    <span class="text-[#009ABD]
                                 text-xs
                                 font-bold
                                 tracking-[0.30em]
                                 uppercase">
                        Cooling Energy
                    </span>

                    <span class="hidden sm:block
                                 w-16
                                 h-px
                                 bg-[#009ABD]">
                    </span>

                </div>


                <h1 class="mt-7
                           text-[#044C7F]
                           text-5xl
                           sm:text-6xl
                           md:text-7xl
                           lg:text-[92px]
                           xl:text-[110px]
                           font-bold
                           tracking-[-0.055em]
                           leading-[0.88]">

                    <span class="hero-title-line">
                        <span class="hero-title-inner">
                            Somos
                        </span>
                    </span>

                    <span class="hero-title-line">
                        <span class="hero-title-inner">
                            ingeniería.
                        </span>
                    </span>

                </h1>

            </div>


            {{-- =================================================
                DESCRIPCIÓN
            ================================================== --}}
            <div class="lg:col-span-4
                        lg:pb-3
                        hero-description">

                <div class="border-t
                            border-[#044C7F]/25
                            pt-6">

                    <p class="text-gray-600
                              text-base
                              sm:text-lg
                              leading-8">

                        Experiencia técnica, planeación y
                        capacidad operativa aplicadas a
                        soluciones de ingeniería para
                        proyectos exigentes.

                    </p>

                    <div class="mt-8
                                flex
                                items-center
                                gap-3">

                        <span class="relative
                                     flex
                                     w-3 h-3">

                            <span class="absolute
                                         inline-flex
                                         h-full w-full
                                         rounded-full
                                         bg-[#E31F1E]
                                         opacity-40
                                         animate-ping">
                            </span>

                            <span class="relative
                                         inline-flex
                                         rounded-full
                                         w-3 h-3
                                         bg-[#E31F1E]">
                            </span>

                        </span>

                        <span class="text-[#044C7F]
                                     text-xs
                                     uppercase
                                     tracking-[0.18em]
                                     font-semibold">
                            Cancún · México
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- INDICADOR SCROLL --}}
    <div class="hidden sm:flex
                absolute
                bottom-24
                right-8 lg:right-12
                items-center
                gap-3
                rotate-90
                origin-right">

        <span class="text-[#044C7F]/45
                     text-[10px]
                     uppercase
                     tracking-[0.25em]
                     font-semibold">
            Explorar
        </span>

        <span class="scroll-line
                     block
                     w-14
                     h-px
                     bg-[#044C7F]/25
                     overflow-hidden">

            <span class="scroll-line-inner
                         block
                         w-full
                         h-full
                         bg-[#009ABD]">
            </span>

        </span>

    </div>


    {{-- BARRA BLANCA INFERIOR --}}
    <div class="absolute
                bottom-0
                left-0
                right-0
                h-10 sm:h-14
                bg-white">
    </div>

</section>


{{-- =========================================================
    MANIFIESTO
========================================================= --}}
<section class="bg-white py-20 sm:py-28 lg:py-36">

    <div class="max-w-7xl mx-auto
                px-5 sm:px-8 lg:px-8">

        <div class="grid
                    lg:grid-cols-12
                    gap-10 lg:gap-8">

            <div class="lg:col-span-2 reveal-left">

                <div class="flex items-center gap-3">

                    <span class="w-8 h-px bg-[#009ABD]"></span>

                    <span class="text-[#009ABD]
                                 text-xs
                                 font-bold
                                 tracking-[0.25em]">
                        01
                    </span>

                </div>

            </div>


            <div class="lg:col-span-7 reveal-up">

                <p class="text-[#044C7F]
                          text-3xl
                          sm:text-4xl
                          lg:text-5xl
                          leading-[1.25]
                          font-medium">

                    No solo instalamos sistemas.

                    <span class="text-[#044C7F]/35">
                        Integramos soluciones capaces de responder
                        a las necesidades reales de cada proyecto.
                    </span>

                </p>

            </div>


            <div class="lg:col-span-3
                        lg:pt-2
                        reveal-right">

                <p class="text-gray-500
                          text-sm
                          leading-7">

                    Cooling Energy desarrolla soluciones
                    especializadas de ingeniería, instalación
                    y mantenimiento para proyectos residenciales,
                    comerciales, hoteleros e industriales.

                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    QUIÉNES SOMOS — BLOQUE DINÁMICO
========================================================= --}}
<section class="relative
                bg-[#044C7F]
                overflow-hidden">

    <div class="grid
                lg:grid-cols-[minmax(0,42fr)_minmax(0,58fr)]">

        {{-- =====================================================
            PANEL IZQUIERDO
        ====================================================== --}}
        <div class="relative
                    min-h-[420px]
                    sm:min-h-[520px]
                    lg:min-h-[720px]
                    bg-[#022F4F]
                    p-7 sm:p-12 lg:p-16
                    flex
                    flex-col
                    justify-between
                    overflow-hidden
                    reveal-left">

            {{-- Líneas decorativas --}}
            <div class="absolute
                        top-[28%]
                        left-0
                        right-0
                        h-px
                        bg-white/[0.05]">
            </div>

            <div class="absolute
                        left-[25%]
                        top-0
                        bottom-0
                        w-px
                        bg-white/[0.05]">
            </div>


            <div class="relative z-10">

                <span class="text-[#009ABD]
                             text-xs
                             tracking-[0.25em]
                             uppercase
                             font-bold">
                    Nuestra esencia
                </span>

            </div>


            <div class="relative z-10">

                <p class="floating-ce
                          text-white/[0.08]
                          text-[100px]
                          sm:text-[140px]
                          lg:text-[180px]
                          font-bold
                          leading-none
                          tracking-[-0.08em]">
                    CE
                </p>

                <p class="text-white
                          text-2xl
                          sm:text-3xl
                          lg:text-4xl
                          font-light
                          leading-tight
                          mt-4
                          max-w-sm">

                    Técnica para resolver.
                    <br>
                    Experiencia para ejecutar.

                </p>

                <div class="mt-8
                            w-14
                            h-[3px]
                            bg-[#E31F1E]">
                </div>

            </div>

        </div>


        {{-- =====================================================
            PANEL DERECHO
        ====================================================== --}}
        <div class="relative
                    min-h-[560px]
                    sm:min-h-[620px]
                    lg:min-h-[720px]
                    flex
                    items-center
                    px-7 sm:px-12
                    lg:px-20 xl:px-24
                    py-14 sm:py-20
                    overflow-hidden">

            {{-- Fondo geométrico --}}
            <div class="absolute
                        top-0
                        left-[32%]
                        w-px
                        h-full
                        bg-white/[0.06]">
            </div>

            <div class="absolute
                        top-[28%]
                        left-0
                        w-full
                        h-px
                        bg-white/[0.06]">
            </div>

            <div class="absolute
                        -right-32
                        -bottom-32
                        text-white/[0.025]
                        text-[260px]
                        font-bold
                        leading-none
                        pointer-events-none">
                01
            </div>


            <div class="relative
                        z-10
                        max-w-2xl
                        reveal-right">

                <span class="text-[#009ABD]
                             text-xs
                             uppercase
                             tracking-[0.25em]
                             font-bold">
                    Quiénes somos
                </span>

                <h2 class="text-white
                           text-4xl
                           sm:text-5xl
                           lg:text-6xl
                           font-semibold
                           leading-[1.08]
                           mt-7">

                    La ingeniería comienza
                    entendiendo el proyecto.

                </h2>

                <p class="text-white/60
                          text-base
                          sm:text-lg
                          leading-8
                          mt-8">

                    Cooling Energy Ingeniería & Mantenimiento es una empresa especializada en ingeniería HVAC, instalación y mantenimiento de aire acondicionado y sistemas de protección contra incendios.
                     Desde Cancún atendemos proyectos que requieren coordinación técnica, ejecución en obra y seguimiento operativo, con capacidad de servicio a nivel nacional.

                </p>

                <p class="text-white/60
                          text-base
                          leading-7
                          mt-5">

                    Trabajamos con desarrolladores, constructoras, hoteles, residenciales, comercios e industria. Nuestro enfoque parte de entender la operación del cliente para proponer soluciones funcionales,
                     seguras y mantenibles. Más que instalar equipos, buscamos que cada sistema responda correctamente cuando el proyecto entra en operación.

                </p>


                {{-- INDICADORES --}}
                <div class="mt-12
                            grid
                            grid-cols-3
                            border-t
                            border-white/15
                            pt-8">

                    <div class="indicator-item">

                        <p class="text-white
                                  text-2xl
                                  sm:text-3xl
                                  font-bold">
                            HVAC
                        </p>

                        <p class="text-white/40
                                  text-xs
                                  mt-2">
                            Ingeniería
                        </p>

                    </div>


                    <div class="indicator-item">

                        <p class="text-white
                                  text-2xl
                                  sm:text-3xl
                                  font-bold">
                            PCI
                        </p>

                        <p class="text-white/40
                                  text-xs
                                  mt-2">
                            Protección
                        </p>

                    </div>


                    <div class="indicator-item">

                        <p class="text-white
                                  text-2xl
                                  sm:text-3xl
                                  font-bold">
                            MX
                        </p>

                        <p class="text-white/40
                                  text-xs
                                  mt-2">
                            Cobertura
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    HISTORIA
========================================================= --}}
<section class="bg-[#F4F7F8]
                py-20 sm:py-28 lg:py-36
                overflow-hidden">

    <div class="max-w-7xl mx-auto
                px-5 sm:px-8 lg:px-8">

        <div class="grid
                    lg:grid-cols-12
                    gap-12 lg:gap-16">

            {{-- TÍTULO --}}
            <div class="lg:col-span-5 reveal-left">

                <div class="lg:sticky lg:top-28">

                    <span class="text-[#009ABD]
                                 text-xs
                                 uppercase
                                 tracking-[0.25em]
                                 font-bold">
                        02 — Historia
                    </span>

                    <h2 class="text-[#044C7F]
                               text-4xl
                               sm:text-5xl
                               lg:text-6xl
                               font-semibold
                               leading-[1.05]
                               mt-7">

                        Una empresa
                        construida
                        en campo.

                    </h2>

                    <div class="mt-8
                                flex
                                items-center
                                gap-4">

                        <span class="w-14
                                     h-[3px]
                                     bg-[#E31F1E]">
                        </span>

                        <span class="text-gray-400
                                     text-xs
                                     uppercase
                                     tracking-[0.18em]">
                            Evolución constante
                        </span>

                    </div>

                </div>

            </div>


            {{-- HISTORIA --}}
            <div class="lg:col-span-7
                        lg:pt-20">

                {{-- 01 --}}
                <article class="history-item
                                grid
                                sm:grid-cols-[90px_1fr]
                                gap-6
                                py-10
                                border-t
                                border-gray-300
                                reveal-right">

                    <div>

                        <span class="history-number
                                     text-[#009ABD]
                                     text-sm
                                     font-bold">
                            01
                        </span>

                    </div>

                    <div>

                        <p class="text-gray-400
                                  text-xs
                                  uppercase
                                  tracking-[0.18em]">
                            Origen
                        </p>

                        <h3 class="text-[#044C7F]
                                   text-2xl
                                   sm:text-3xl
                                   font-semibold
                                   mt-3">

                            El conocimiento como
                            punto de partida.

                        </h3>

                        <p class="text-gray-600
                                  leading-7
                                  mt-5">

                            Cooling Energy Ingeniería & Mantenimiento nace de la experiencia práctica en proyectos de construcción que requieren coordinación entre distintas especialidades.
                             Con base en Cancún, la empresa participa en instalaciones eléctricas, instalaciones hidrosanitarias,
                            instalaciones de gas, trabajos de albañilería, instalaciones y equipamiento, trabajos especializados para la
                             construcción, sistemas de aire acondicionado y calefacción y acabados en edificaciones.

                        </p>

                    </div>

                </article>


                {{-- 02 --}}
                <article class="history-item
                                grid
                                sm:grid-cols-[90px_1fr]
                                gap-6
                                py-10
                                border-t
                                border-gray-300
                                reveal-right">

                    <div>

                        <span class="history-number
                                     text-[#009ABD]
                                     text-sm
                                     font-bold">
                            02
                        </span>

                    </div>

                    <div>

                        <p class="text-gray-400
                                  text-xs
                                  uppercase
                                  tracking-[0.18em]">
                            Experiencia
                        </p>

                        <h3 class="text-[#044C7F]
                                   text-2xl
                                   sm:text-3xl
                                   font-semibold
                                   mt-3">

                            De la ingeniería
                            a la obra.

                        </h3>

                        <p class="text-gray-600
                                  leading-7
                                  mt-5">

                            El trabajo en campo, la coordinación
                            entre especialidades y la atención
                            a diferentes necesidades han fortalecido
                            nuestra capacidad de respuesta.

                        </p>

                    </div>

                </article>


                {{-- 03 --}}
                <article class="history-item
                                grid
                                sm:grid-cols-[90px_1fr]
                                gap-6
                                py-10
                                border-y
                                border-gray-300
                                reveal-right">

                    <div>

                        <span class="history-number
                                     text-[#E31F1E]
                                     text-sm
                                     font-bold">
                            03
                        </span>

                    </div>

                    <div>

                        <p class="text-gray-400
                                  text-xs
                                  uppercase
                                  tracking-[0.18em]">
                            Presente
                        </p>

                        <h3 class="text-[#044C7F]
                                   text-2xl
                                   sm:text-3xl
                                   font-semibold
                                   mt-3">

                            Capacidad para
                            nuevos retos.

                        </h3>

                        <p class="text-gray-600
                                  leading-7
                                  mt-5">

                            Actualmente contamos con capacidad para
                            participar en proyectos de diferentes
                            sectores y escalas, desde Cancún hacia
                            distintas regiones de México.

                        </p>

                    </div>

                </article>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    MISIÓN + VISIÓN
========================================================= --}}
<section class="relative
                bg-white
                py-20 sm:py-28 lg:py-36
                overflow-hidden">

    <div class="max-w-7xl mx-auto
                px-5 sm:px-8 lg:px-8">

        {{-- ENCABEZADO --}}
        <div class="mb-14 lg:mb-20 reveal-up">

            <span class="text-[#009ABD]
                         text-xs
                         uppercase
                         tracking-[0.25em]
                         font-bold">
                03 — Dirección
            </span>

            <h2 class="text-[#044C7F]
                       text-4xl
                       sm:text-5xl
                       lg:text-6xl
                       font-semibold
                       mt-6">

                Lo que nos mueve.

            </h2>

        </div>


        <div class="relative space-y-4 xl:space-y-0">

            {{-- =================================================
                MISIÓN
            ================================================== --}}
            <article class="mission-block
                            reveal-left
                            relative
                            z-10
                            w-full
                            xl:w-[62%]
                            bg-[#044C7F]
                            p-8 sm:p-12 lg:p-16
                            min-h-[440px]
                            flex
                            flex-col
                            justify-between
                            overflow-hidden">

                <div class="absolute
                            -right-12
                            -top-20
                            text-white/[0.035]
                            text-[220px]
                            font-bold
                            leading-none">
                    M
                </div>

                <div class="relative z-10">

                    <span class="text-[#009ABD]
                                 text-sm
                                 font-bold">
                        MISIÓN / 01
                    </span>

                </div>


                <div class="relative z-10
                            mt-20">

                    <p class="text-white/60
                              leading-8
                              mt-6
                              max-w-lg">

                        En Cooling Energy Ingeniería & Mantenimiento hacemos que la climatización y la protección contra incendios funcionen como deben: con ingeniería, orden y atención cercana. Diseñamos, instalamos y damos mantenimiento a soluciones HVAC, aire acondicionado y sistemas PCI para hoteles, desarrollos residenciales, comercios e industria.
                         Nuestro compromiso es entregar instalaciones seguras, eficientes y confiables, cuidando cada etapa del proyecto desde Cancún y con capacidad de atención en distintos puntos de México.

                    </p>

                </div>

            </article>


            {{-- =================================================
                VISIÓN
            ================================================== --}}
            <article class="vision-block
                            reveal-right
                            relative
                            xl:ml-auto
                            z-20
                            w-full
                            xl:w-[53%]
                            bg-[#009ABD]
                            p-8 sm:p-12 lg:p-16
                            min-h-[410px]
                            flex
                            flex-col
                            justify-between
                            overflow-hidden">

                <div class="absolute
                            -right-12
                            -top-20
                            text-white/[0.06]
                            text-[220px]
                            font-bold
                            leading-none">
                    V
                </div>

                <div class="relative z-10">

                    <span class="text-white/65
                                 text-sm
                                 font-bold">
                        VISIÓN / 02
                    </span>

                </div>


                <div class="relative z-10
                            mt-20">

                    <p class="text-white/75
                              leading-8
                              mt-6
                              max-w-lg">

                        Consolidarnos como una empresa mexicana de referencia en ingeniería HVAC, aire acondicionado y protección contra incendios, reconocida por resolver proyectos complejos con capacidad técnica,
                         cumplimiento y servicio. Buscamos crecer a nivel nacional sin perder la cercanía con cada cliente,
                         incorporando mejores prácticas, tecnología y procesos que hagan más eficientes, seguras y sostenibles las instalaciones que entregamos.

                    </p>

                </div>

            </article>

        </div>

    </div>

</section>


{{-- =========================================================
    VALORES
========================================================= --}}
<section class="bg-[#F4F7F8]
                py-20 sm:py-28 lg:py-36">

    <div class="max-w-7xl mx-auto
                px-5 sm:px-8 lg:px-8">

        <div class="grid
                    lg:grid-cols-12
                    gap-12 lg:gap-16">

            {{-- TÍTULO --}}
            <div class="lg:col-span-4 reveal-left">

                <span class="text-[#009ABD]
                             text-xs
                             uppercase
                             tracking-[0.25em]
                             font-bold">
                    04 — Valores
                </span>

                <h2 class="text-[#044C7F]
                           text-4xl
                           sm:text-5xl
                           font-semibold
                           leading-tight
                           mt-6">

                    Nuestra forma
                    de actuar.

                </h2>

                <p class="text-gray-500
                          leading-7
                          mt-6
                          max-w-sm">

                    Principios que orientan nuestras
                    decisiones y la forma en la que
                    desarrollamos cada proyecto.

                </p>

            </div>


            {{-- VALORES --}}
            <div class="lg:col-span-8">

                @php

                    $valores = [

                        [
                            '01',
                            'Seguridad',
                            'Tomamos decisiones pensando primero en las personas, las instalaciones y la operación del cliente.'
                        ],

                        [
                            '02',
                            'Responsabilidad',
                            'Cumplimos compromisos, documentamos avances y respondemos por la calidad de nuestro trabajo.'
                        ],

                        [
                            '03',
                            'Transparencia',
                            'Comunicamos alcances, avances, hallazgos y soluciones de manera clara y verificable.'
                        ],

                        [
                            '04',
                            'Trabajo en equipo',
                            'Coordinamos personal técnico, supervisión, proveedores y cliente para ejecutar con orden.'
                        ],

                        [
                            '05',
                            'Mejora continua',
                            'Aprendemos de cada proyecto e incorporamos procesos y tecnología que eleven el desempeño.'
                        ],

                        [
                            '06',
                            'Orientación al cliente',
                            'Entendemos la operación antes de proponer; buscamos soluciones útiles, mantenibles y rentables.'
                        ]

                    ];

                @endphp


                @foreach($valores as $valor)

                    <article class="value-row
                                    group
                                    grid
                                    grid-cols-[45px_1fr]
                                    md:grid-cols-[40px_minmax(0,1fr)_minmax(0,1.5fr)_24px]
                                    gap-4 sm:gap-6
                                    items-center
                                    py-7 sm:py-8
                                    border-t
                                    border-gray-300
                                    reveal-right">

                        <span class="text-[#009ABD]
                                     text-xs
                                     font-bold">
                            {{ $valor[0] }}
                        </span>


                        <h3 class="text-[#044C7F]
                                   text-xl
                                   sm:text-2xl
                                   font-semibold">

                            {{ $valor[1] }}

                        </h3>


                        <p class="col-start-2
                                  md:col-start-auto
                                  text-gray-500
                                  text-sm
                                  leading-6
                                  max-w-md">

                            {{ $valor[2] }}

                        </p>


                        <span class="hidden md:block
                                     value-plus
                                     text-[#044C7F]/20
                                     text-2xl
                                     text-right">
                            +
                        </span>

                    </article>

                @endforeach


                <div class="border-t border-gray-300"></div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    PROCESO
========================================================= --}}
<section id="process-section"
         class="bg-white
                py-20 sm:py-28 lg:py-36
                overflow-hidden">

    <div class="max-w-7xl mx-auto
                px-5 sm:px-8 lg:px-8">

        {{-- ENCABEZADO --}}
        <div class="flex
                    flex-col
                    lg:flex-row
                    lg:justify-between
                    lg:items-end
                    gap-8">

            <div class="reveal-left">

                <span class="text-[#009ABD]
                             text-xs
                             uppercase
                             tracking-[0.25em]
                             font-bold">
                    05 — Nuestro proceso
                </span>

                <h2 class="text-[#044C7F]
                           text-4xl
                           sm:text-5xl
                           lg:text-6xl
                           font-semibold
                           leading-tight
                           mt-6">

                    Del análisis
                    <br>
                    a la ejecución.

                </h2>

            </div>


            <p class="text-gray-500
                      max-w-md
                      leading-7
                      reveal-right">

                Organizamos cada proyecto mediante etapas
                que permiten mantener coordinación,
                control técnico y seguimiento.

            </p>

        </div>


        {{-- LÍNEA DE PROGRESO --}}
        <div class="relative
                    mt-16 lg:mt-24">

            <div class="hidden lg:block
                        absolute
                        top-[31px]
                        left-0
                        right-0
                        h-px
                        bg-gray-200">

                <div id="process-progress"
                     class="h-full
                            bg-[#009ABD]
                            w-0">
                </div>

            </div>


            <div class="grid
                        grid-cols-1
                        md:grid-cols-2
                        lg:grid-cols-4">

                @php

                    $proceso = [

                        [
                            '01',
                            'Análisis',
                            'Entendemos las condiciones, requerimientos y objetivos técnicos del proyecto.'
                        ],

                        [
                            '02',
                            'Planeación',
                            'Organizamos recursos, procesos y estrategias para desarrollar cada etapa.'
                        ],

                        [
                            '03',
                            'Ejecución',
                            'Coordinamos y desarrollamos los trabajos mediante supervisión técnica.'
                        ],

                        [
                            '04',
                            'Seguimiento',
                            'Verificamos resultados, funcionamiento y continuidad de las soluciones.'
                        ]

                    ];

                @endphp


                @foreach($proceso as $item)

                    <article class="process-card
                                    relative
                                    min-h-[360px]
                                    p-7 sm:p-9
                                    border
                                    border-gray-200
                                    -mt-px
                                    -ml-px
                                    overflow-hidden
                                    reveal-up">

                        {{-- Número fondo --}}
                        <span class="process-number
                                     absolute
                                     -right-3
                                     -top-10
                                     text-[150px]
                                     font-bold
                                     text-[#044C7F]/[0.035]
                                     leading-none
                                     pointer-events-none">

                            {{ $item[0] }}

                        </span>


                        <div class="relative z-10
                                    h-full
                                    flex
                                    flex-col
                                    justify-between">

                            <div class="process-point
                                        w-[62px]
                                        h-[62px]
                                        bg-white
                                        border
                                        border-[#044C7F]/20
                                        flex
                                        items-center
                                        justify-center
                                        text-[#009ABD]
                                        text-xs
                                        font-bold">

                                {{ $item[0] }}

                            </div>


                            <div>

                                <h3 class="text-[#044C7F]
                                           text-2xl
                                           font-semibold">

                                    {{ $item[1] }}

                                </h3>

                                <p class="text-gray-500
                                          text-sm
                                          leading-6
                                          mt-4">

                                    {{ $item[2] }}

                                </p>

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    COBERTURA NACIONAL
========================================================= --}}
<section class="relative
                bg-[#022F4F]
                py-20 sm:py-28 lg:py-36
                overflow-hidden">

    {{-- MX GRANDE --}}
    <div class="coverage-mx
                absolute
                right-[-3%]
                top-1/2
                -translate-y-1/2
                text-white/[0.025]
                text-[220px]
                sm:text-[320px]
                lg:text-[470px]
                font-bold
                leading-none
                pointer-events-none
                select-none">
        MX
    </div>


    <div class="relative z-10
                max-w-7xl mx-auto
                px-5 sm:px-8 lg:px-8">

        <div class="grid
                    lg:grid-cols-12
                    gap-12 lg:gap-16
                    items-center">

            <div class="lg:col-span-7 reveal-left">

                <span class="text-[#009ABD]
                             text-xs
                             uppercase
                             tracking-[0.25em]
                             font-bold">
                    06 — Cobertura
                </span>

                <h2 class="text-white
                           text-5xl
                           sm:text-6xl
                           lg:text-7xl
                           xl:text-8xl
                           font-semibold
                           tracking-[-0.04em]
                           leading-[0.95]
                           mt-7">

                    Desde

                    <span class="text-[#009ABD]">
                        Cancún
                    </span>

                    <span class="block
                                 text-white/30">
                        hacia México.
                    </span>

                </h2>

            </div>


            <div class="lg:col-span-5
                        lg:border-l
                        border-white/15
                        lg:pl-12
                        reveal-right">

                <div class="flex
                            items-center
                            gap-4">

                    <div class="location-dot
                                relative
                                w-4 h-4
                                bg-[#E31F1E]
                                rounded-full">

                        <span class="absolute
                                     inset-0
                                     bg-[#E31F1E]
                                     rounded-full
                                     animate-ping
                                     opacity-40">
                        </span>

                    </div>


                    <div>

                        <p class="text-white
                                  text-lg
                                  font-semibold">
                            Cancún, Quintana Roo
                        </p>

                        <p class="text-white/40
                                  text-xs
                                  mt-1">
                            Base operativa
                        </p>

                    </div>

                </div>


                <p class="text-white/55
                          text-base
                          sm:text-lg
                          leading-8
                          mt-8
                          max-w-lg">

                    Contamos con capacidad operativa para
                    participar en proyectos dentro y fuera
                    de Quintana Roo, adaptando equipos,
                    recursos y procesos a las características
                    de cada obra.

                </p>


                <div class="mt-10
                            pt-8
                            border-t
                            border-white/10">

                    <p class="text-[#009ABD]
                              text-xs
                              uppercase
                              tracking-[0.20em]
                              font-bold">
                        Capacidad nacional
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    CTA FINAL
========================================================= --}}
<section class="bg-white
                py-16 sm:py-20 lg:py-24">

    <div class="max-w-7xl mx-auto
                px-5 sm:px-8 lg:px-8">

        <a href="{{ route('contacto') }}"
           class="cta-group
                  group
                  relative
                  block
                  bg-[#009ABD]
                  overflow-hidden">

            {{-- Fondo animado --}}
            <div class="cta-background
                        absolute
                        inset-0
                        bg-[#044C7F]">
            </div>


            {{-- CE decorativo --}}
            <div class="absolute
                        right-[-20px]
                        bottom-[-70px]
                        text-white/[0.05]
                        text-[220px]
                        sm:text-[300px]
                        font-bold
                        leading-none
                        pointer-events-none">
                CE
            </div>


            <div class="relative z-10
                        px-7 sm:px-10 lg:px-16
                        py-12 sm:py-16 lg:py-20">

                <div class="flex
                            flex-col
                            sm:flex-row
                            sm:items-center
                            sm:justify-between
                            gap-10">

                    <div>

                        <span class="text-white/60
                                     text-xs
                                     uppercase
                                     tracking-[0.25em]
                                     font-bold">
                            ¿Tienes un proyecto?
                        </span>

                        <h2 class="text-white
                                   text-3xl
                                   sm:text-4xl
                                   lg:text-5xl
                                   font-semibold
                                   leading-tight
                                   mt-4">

                            Hablemos de ingeniería.

                        </h2>

                    </div>


                    <div class="cta-arrow
                                w-14 h-14
                                sm:w-16 sm:h-16
                                bg-white
                                flex
                                items-center
                                justify-center
                                text-[#044C7F]
                                text-2xl">

                        →

                    </div>

                </div>

            </div>

        </a>

    </div>

</section>


{{-- =========================================================
    INDICADOR LATERAL DE PROGRESO
========================================================= --}}
<div id="page-progress"
     class="hidden lg:block
            fixed
            right-0
            top-0
            w-[3px]
            h-full
            z-40
            pointer-events-none">

    <div id="page-progress-bar"
         class="w-full
                h-0
                bg-[#009ABD]">
    </div>

</div>


{{-- =========================================================
    ESTILOS
========================================================= --}}
</div>

<style>

/* =========================================================
   RESPONSIVE GLOBAL — VISTA NOSOTROS
========================================================= */
#cooling-about { width: 100%; min-width: 0; overflow-x: clip; }

#cooling-hero *,
 #cooling-about section * {
    box-sizing: border-box;
}

 #cooling-about section img,
 #cooling-about section video,
 #cooling-about section svg {
    max-width: 100%;
}

#cooling-hero {
    width: 100%;
    min-height: 720px;
}

/* Evita que Grid/Flex provoquen scroll horizontal */
#cooling-hero .grid > *,
 #cooling-about section .grid > *,
 #cooling-about section .flex > * {
    min-width: 0;
}

/* Textos descriptivos */
.hero-description p,
.history-item p:not(.text-gray-400),
.mission-block p,
.vision-block p,
.value-row p,
.process-card p {
    text-align: justify;
    text-justify: inter-word;
}

/* =========================================================
   TABLET — MENOS DE 1024PX
========================================================= */
@media (max-width: 1023px) {
    #cooling-hero {
        min-height: auto;
    }

    #cooling-hero > .relative {
        padding-top: 130px;
        padding-bottom: 130px;
    }

    #hero-ce {
        right: -10%;
        opacity: .75;
    }

    .mission-block,
    .vision-block {
        width: 100%;
        min-height: 400px;
    }

    .vision-block {
        margin-top: 0;
    }

    .process-card {
        min-height: 330px;
    }
}

/* =========================================================
   MÓVIL — MENOS DE 640PX
========================================================= */
@media (max-width: 639px) {
    #cooling-hero {
        min-height: auto;
        display: block;
    }

    #cooling-hero > .relative {
        padding-top: 110px;
        padding-bottom: 115px;
    }

    #hero-ce {
        font-size: 190px !important;
        right: -18%;
        top: 48%;
        opacity: .65;
    }

    .hero-line {
        width: 42%;
        height: 4px;
    }

    .hero-eyebrow {
        gap: 10px;
    }

    .hero-eyebrow span:first-child {
        font-size: 10px;
        letter-spacing: .22em;
    }

    #cooling-hero h1 {
        font-size: clamp(2.8rem, 14vw, 4rem);
        line-height: .93;
        letter-spacing: -.045em;
        overflow-wrap: break-word;
    }

    .hero-description {
        margin-top: 35px;
    }

    .hero-description p {
        font-size: 15px;
        line-height: 1.75;
    }

    .floating-ce {
        font-size: 90px !important;
        max-width: 100%;
    }

    .indicator-item {
        min-width: 0;
    }

    .indicator-item p:first-child {
        font-size: 1.35rem;
    }

    .indicator-item p:last-child {
        font-size: 10px;
    }

    .history-item {
        grid-template-columns: 1fr;
        gap: 18px;
        padding-top: 32px;
        padding-bottom: 32px;
    }

    .history-item h3 {
        font-size: 1.5rem;
        line-height: 1.25;
    }

    .mission-block,
    .vision-block {
        width: 100%;
        min-height: 360px;
        padding: 28px;
    }

    .mission-block h3,
    .vision-block h3 {
        font-size: 1.8rem;
        line-height: 1.15;
    }

    .mission-block p,
    .vision-block p {
        font-size: 14px;
        line-height: 1.75;
    }

    .value-row {
        grid-template-columns: 35px minmax(0, 1fr);
        gap: 12px;
        align-items: start;
        padding-top: 24px;
        padding-bottom: 24px;
    }

    .value-row h3 {
        min-width: 0;
        font-size: 1.25rem;
        line-height: 1.25;
    }

    .value-row p {
        grid-column: 2;
        min-width: 0;
        font-size: 13px;
        line-height: 1.65;
    }

    .process-card {
        min-height: 300px;
        padding: 26px;
    }

    .process-number {
        font-size: 115px;
    }

    .process-point {
        width: 54px;
        height: 54px;
    }

    .process-card h3 {
        font-size: 1.5rem;
    }

    .coverage-mx {
        font-size: 180px !important;
        right: -15%;
        opacity: .7;
    }

    .cta-group {
        width: 100%;
    }

    .cta-arrow {
        width: 52px;
        height: 52px;
        flex-shrink: 0;
    }
}

/* =========================================================
   CELULARES PEQUEÑOS — 320/360PX
========================================================= */
@media (max-width: 374px) {
    #cooling-hero > .relative {
        padding-left: 18px;
        padding-right: 18px;
    }

    #cooling-hero h1 {
        font-size: 2.65rem;
    }

    #hero-ce {
        font-size: 165px !important;
    }

    .mission-block,
    .vision-block {
        padding: 24px;
    }

    .process-card {
        padding: 22px;
    }

    .coverage-mx {
        font-size: 155px !important;
    }
}

/* En móvil angosto evitamos huecos grandes del justificado */
@media (max-width: 479px) {
    .hero-description p,
    .history-item p:not(.text-gray-400),
    .mission-block p,
    .vision-block p,
    .value-row p,
    .process-card p {
        text-align: left;
    }
}

/* Hover únicamente donde existe un puntero real */
@media (hover: none) {
    .indicator-item:hover,
    .mission-block:hover,
    .vision-block:hover,
    .value-row:hover h3,
    .process-card:hover,
    .process-card:hover .process-point,
    .cta-group:hover .cta-arrow {
        transform: none;
    }
}

#cooling-hero h1,
#cooling-about section h1,
#cooling-about section h2,
#cooling-about section h3,
#cooling-about section p,
#cooling-about section span {
    overflow-wrap: break-word;
}

@media (max-width: 767px) {
    .reveal-left {
        transform: translateX(-25px);
    }

    .reveal-right {
        transform: translateX(25px);
    }

    .reveal-up {
        transform: translateY(30px);
    }
}


/* =========================================================
   REVEAL
========================================================= */

.reveal-up,
.reveal-left,
.reveal-right,
.reveal-scale {

    opacity: 0;

    transition:
        opacity .9s cubic-bezier(.16, 1, .3, 1),
        transform .9s cubic-bezier(.16, 1, .3, 1);

}


.reveal-up {
    transform: translateY(50px);
}


.reveal-left {
    transform: translateX(-55px);
}


.reveal-right {
    transform: translateX(55px);
}


.reveal-scale {
    transform: scale(.94);
}


.reveal-up.visible,
.reveal-left.visible,
.reveal-right.visible,
.reveal-scale.visible {

    opacity: 1;

    transform:
        translate(0, 0)
        scale(1);

}


/* =========================================================
   HERO
========================================================= */

.hero-line {

    transform-origin: left center;

    transform: scaleX(0);

    animation:
        coolingHeroLine
        1.4s
        .15s
        forwards
        cubic-bezier(.16, 1, .3, 1);

}


@keyframes coolingHeroLine {

    to {
        transform: scaleX(1);
    }

}


.hero-eyebrow {

    opacity: 0;

    transform:
        translateY(18px);

    animation:
        coolingEyebrow
        .8s
        .25s
        forwards
        cubic-bezier(.16, 1, .3, 1);

}


@keyframes coolingEyebrow {

    to {

        opacity: 1;

        transform:
            translateY(0);

    }

}


.hero-title-line {

    display: block;

    overflow: hidden;

    padding-bottom: .05em;

}


.hero-title-inner {

    display: block;

    transform:
        translateY(115%);

    animation:
        coolingTitle
        1.05s
        forwards
        cubic-bezier(.16, 1, .3, 1);

}


.hero-title-line:nth-child(1)
.hero-title-inner {

    animation-delay: .35s;

}


.hero-title-line:nth-child(2)
.hero-title-inner {

    animation-delay: .52s;

}


@keyframes coolingTitle {

    to {

        transform:
            translateY(0);

    }

}


.hero-description {

    opacity: 0;

    transform:
        translateY(30px);

    animation:
        coolingDescription
        .9s
        .85s
        forwards
        cubic-bezier(.16, 1, .3, 1);

}


@keyframes coolingDescription {

    to {

        opacity: 1;

        transform:
            translateY(0);

    }

}


/* =========================================================
   SCROLL INDICATOR
========================================================= */

.scroll-line-inner {

    transform-origin: left;

    animation:
        coolingScrollLine
        2s
        infinite
        cubic-bezier(.4,0,.2,1);

}


@keyframes coolingScrollLine {

    0% {

        transform:
            translateX(-100%);

    }

    50% {

        transform:
            translateX(0);

    }

    100% {

        transform:
            translateX(100%);

    }

}


/* =========================================================
   INDICADORES HVAC / PCI / MX
========================================================= */

.indicator-item {

    transition:
        transform .35s ease;

}


.indicator-item:hover {

    transform:
        translateY(-6px);

}


.indicator-item p:first-child {

    transition:
        color .3s ease;

}


.indicator-item:hover
p:first-child {

    color: #009ABD;

}


/* =========================================================
   HISTORIA
========================================================= */

.history-item {

    position: relative;

    transition:
        padding-left .4s
        cubic-bezier(.16,1,.3,1);

}


.history-item::after {

    content: "";

    position: absolute;

    left: 0;
    bottom: -1px;

    width: 0;
    height: 2px;

    background: #009ABD;

    transition:
        width .6s
        cubic-bezier(.16,1,.3,1);

}


.history-item:hover::after {

    width: 100%;

}


@media (min-width: 768px) {

    .history-item:hover {

        padding-left: 15px;

    }

}


.history-number {

    transition:
        transform .35s ease,
        color .35s ease;

}


.history-item:hover
.history-number {

    display: inline-block;

    transform:
        translateX(6px);

}


/* =========================================================
   MISIÓN / VISIÓN
========================================================= */

.mission-block,
.vision-block {

    transition:
        transform .65s
        cubic-bezier(.16,1,.3,1),
        box-shadow .65s ease;

}


.mission-block:hover {

    transform:
        translateY(-8px);

}


.vision-block:hover {

    transform:
        translateY(-8px)
        translateX(-5px);

}


/* =========================================================
   VALORES
========================================================= */

.value-row {

    position: relative;

    overflow: hidden;

    transition:
        padding-left .4s
        cubic-bezier(.16,1,.3,1),
        background-color .35s ease;

}


.value-row::after {

    content: "";

    position: absolute;

    left: 0;
    bottom: 0;

    width: 0;
    height: 2px;

    background: #009ABD;

    transition:
        width .55s
        cubic-bezier(.16,1,.3,1);

}


.value-row:hover::after {

    width: 100%;

}


@media (min-width: 768px) {

    .value-row:hover {

        padding-left: 14px;

    }

}


.value-row h3 {

    transition:
        color .3s ease,
        transform .35s ease;

}


.value-row:hover h3 {

    color: #009ABD;

    transform:
        translateX(5px);

}


.value-plus {

    transition:
        color .3s ease,
        transform .4s
        cubic-bezier(.16,1,.3,1);

}


.value-row:hover
.value-plus {

    color: #E31F1E;

    transform:
        rotate(90deg);

}


/* =========================================================
   PROCESO
========================================================= */

#process-progress {

    transition:
        width .2s linear;

}


.process-card {

    transform-style:
        preserve-3d;

    transition:
        background-color .4s ease,
        transform .25s ease,
        border-color .4s ease;

}


.process-card:hover {

    background-color: #F4F7F8;

    border-color:
        rgba(0,154,189,.35);

}


.process-number {

    transition:
        color .5s ease,
        transform .5s
        cubic-bezier(.16,1,.3,1);

}


.process-card:hover
.process-number {

    color:
        rgba(0,154,189,.09);

    transform:
        translateY(15px)
        scale(1.08);

}


.process-point {

    transition:
        background-color .35s ease,
        color .35s ease,
        border-color .35s ease,
        transform .35s
        cubic-bezier(.16,1,.3,1);

}


.process-card:hover
.process-point {

    background-color:
        #009ABD;

    color:
        #ffffff;

    border-color:
        #009ABD;

    transform:
        translateY(-5px);

}


/* =========================================================
   COBERTURA
========================================================= */

.location-dot {

    animation:
        coolingLocation
        2.4s
        infinite
        ease-in-out;

}


@keyframes coolingLocation {

    0%,
    100% {

        transform:
            scale(1);

    }

    50% {

        transform:
            scale(1.22);

    }

}


/* =========================================================
   CTA
========================================================= */

.cta-background {

    transform:
        translateX(-101%);

    transition:
        transform .7s
        cubic-bezier(.16,1,.3,1);

}


.cta-group:hover
.cta-background {

    transform:
        translateX(0);

}


.cta-arrow {

    transition:
        transform .45s
        cubic-bezier(.16,1,.3,1),
        background-color .35s ease,
        color .35s ease;

}


.cta-group:hover
.cta-arrow {

    transform:
        translateX(10px);

    background-color:
        #009ABD;

    color:
        #ffffff;

}


/* =========================================================
   SELECCIÓN
========================================================= */

::selection {

    background:
        #009ABD;

    color:
        white;

}


/* =========================================================
   REDUCIR ANIMACIONES
========================================================= */

@media
(prefers-reduced-motion: reduce) {

    *,
    *::before,
    *::after {

        animation-duration:
            .01ms !important;

        animation-iteration-count:
            1 !important;

        scroll-behavior:
            auto !important;

        transition-duration:
            .01ms !important;

    }


    .reveal-up,
    .reveal-left,
    .reveal-right,
    .reveal-scale,
    .hero-description,
    .hero-eyebrow {

        opacity: 1;

        transform: none;

    }


    .hero-title-inner {

        transform: none;

    }

}


/* Ajustes finales: mobile first, limitados a Nosotros */
#cooling-about { overflow-x: clip; }
#cooling-about .grid > *, #cooling-about .flex > * { min-width: 0; }
#cooling-about #cooling-hero { min-height: min(720px, 88svh); }
#cooling-about #cooling-hero h1 { font-size: clamp(2.25rem, 8.1vw, 6.875rem); line-height: 1.02; }
#cooling-about .hero-title-line { padding-bottom: .12em; }
#cooling-about .mission-block, #cooling-about .vision-block { min-height: 0; }
#cooling-about .mission-block > div:last-child, #cooling-about .vision-block > div:last-child { margin-top: clamp(1rem, 4vw, 3rem); }
#cooling-about .process-card > div { gap: 1.5rem; }
#cooling-about .process-card { display: flex; }
#cooling-about .process-card > div { flex: 1; height: auto; }
@media (min-width: 1280px) {
  #cooling-about .vision-block { margin-top: -1.5rem; }
}
@media (max-width: 1279px) {
  #cooling-about .mission-block, #cooling-about .vision-block { width: 100%; position: relative; }
}
@media (max-width: 1023px) {
  #cooling-about #cooling-hero { min-height: 0; }
  #cooling-about #cooling-hero > .relative { padding-block: 4rem 5rem; }
  #cooling-about section:not(#cooling-hero) { padding-top: min(8vw, 4rem); padding-bottom: min(8vw, 4rem); }
  #cooling-about section:has(.floating-ce) { padding-block: 0; }
  #cooling-about .floating-ce { font-size: clamp(5rem, 15vw, 9rem); }
  #cooling-about .floating-ce, #cooling-about .coverage-mx, #cooling-about #hero-ce { will-change: auto; }
  #cooling-about .floating-ce { transform: none !important; }
  #cooling-about #hero-ce, #cooling-about .coverage-mx { transform: translateY(-50%) !important; }
  #cooling-about .process-card { min-height: 240px; }
  #cooling-about .reveal-left, #cooling-about .reveal-right { transform: translateY(18px); }
  #cooling-about .reveal-up { transform: translateY(18px); }
  #cooling-about .visible { transform: none; }
}
@media (max-width: 767px) {
  #cooling-about .value-row { grid-template-columns: 32px minmax(0,1fr); gap: .75rem; }
  #cooling-about .value-row p { grid-column: 2; max-width: none; }
  #cooling-about .value-plus { display: none; }
  #cooling-about .history-item p, #cooling-about .mission-block p, #cooling-about .vision-block p, #cooling-about .value-row p, #cooling-about .process-card p, #cooling-about .hero-description p { text-align: left; font-size: 1rem; line-height: 1.65; }
}
@media (max-width: 639px) {
  #cooling-about #cooling-hero > .relative { padding: 3.5rem 1rem 4.5rem; }
  #cooling-about #cooling-hero h1 { font-size: clamp(2.4rem, 11vw, 4rem); }
  #cooling-about .hero-description { margin-top: 0; }
  #cooling-about #cooling-hero .grid { gap: 1.5rem; }
  #cooling-about section h2 { font-size: clamp(1.75rem, 7.5vw, 2.75rem); line-height: 1.12; }
  #cooling-about section > .max-w-7xl { padding-inline: 1rem; }
  #cooling-about section:has(.floating-ce) > .grid > div { min-height: 0; padding: 2rem 1rem; gap: 1.5rem; }
  #cooling-about .indicator-item p:first-child { font-size: clamp(1rem, 5vw, 1.5rem); }
  #cooling-about .indicator-item p:last-child { font-size: .7rem; }
  #cooling-about .mission-block, #cooling-about .vision-block { padding: 1.25rem; }
  #cooling-about .process-card { min-height: 0; padding: 1.25rem; margin-left: 0; }
  #cooling-about .cta-group > .relative { padding: 1.5rem 1rem; }
  #cooling-about .cta-group .flex { gap: 1.25rem; }
}
@media (hover: none), (pointer: coarse), (prefers-reduced-motion: reduce) {
  #cooling-about .reveal-up, #cooling-about .reveal-left, #cooling-about .reveal-right, #cooling-about .reveal-scale, #cooling-about .hero-description, #cooling-about .hero-eyebrow, #cooling-about .hero-title-inner { opacity: 1; transform: none !important; animation: none; transition: none; }
  #cooling-about .hero-line { transform: none; animation: none; }
  #cooling-about .process-card { transform: none !important; }
  #cooling-about .floating-ce { transform: none !important; }
  #cooling-about #hero-ce, #cooling-about .coverage-mx { transform: translateY(-50%) !important; }
  #cooling-about .location-dot, #cooling-about .animate-ping, #cooling-about .scroll-line-inner { animation: none; }
}

</style>


{{-- =========================================================
    JAVASCRIPT
========================================================= --}}
<script>

document.addEventListener(
    'DOMContentLoaded',
    function () {


/* =========================================================
   ELEMENTOS
========================================================= */

const revealElements =
document.querySelectorAll(
    '.reveal-up,' +
    '.reveal-left,' +
    '.reveal-right,' +
    '.reveal-scale'
);


const hero =
document.getElementById(
    'cooling-hero'
);


const heroCE =
document.getElementById(
    'hero-ce'
);


const floatingCE =
document.querySelector(
    '.floating-ce'
);


const coverageMX =
document.querySelector(
    '.coverage-mx'
);


const processSection =
document.getElementById(
    'process-section'
);


const processProgress =
document.getElementById(
    'process-progress'
);


const pageProgress =
document.getElementById(
    'page-progress-bar'
);


/* =========================================================
   1. REVEAL AL HACER SCROLL
========================================================= */

if (
    'IntersectionObserver'
    in window
) {

    const observer =
    new IntersectionObserver(

        function(entries) {

            entries.forEach(
                function(entry) {

                    if (
                        entry.isIntersecting
                    ) {

                        entry.target
                        .classList
                        .add('visible');


                        observer
                        .unobserve(
                            entry.target
                        );

                    }

                }
            );

        },

        {

            threshold: .10,

            rootMargin:
                '0px 0px -40px 0px'

        }

    );


    revealElements
    .forEach(
        function(element, index) {

            element.style
            .transitionDelay =

                ((index % 4) * 70)
                + 'ms';


            observer.observe(
                element
            );

        }
    );

}

else {

    revealElements
    .forEach(
        function(element) {

            element
            .classList
            .add('visible');

        }
    );

}


/* =========================================================
   2. PARALLAX
========================================================= */

let ticking = false;


function updateEffects() {

    const scrollY = window.scrollY;
    const motionOK = window.matchMedia('(min-width: 1024px) and (hover: hover) and (pointer: fine) and (prefers-reduced-motion: no-preference)').matches;


    /*
    |--------------------------------------------------------------------------
    | HERO CE
    |--------------------------------------------------------------------------
    */

    if (
        motionOK && heroCE &&
        hero
    ) {

        const heroHeight =
        hero.offsetHeight;


        if (
            scrollY <=
            heroHeight + 300
        ) {

            const movement =
                scrollY * .08;


            heroCE.style.transform =

                'translateY(calc(-50% + ' +
                movement +
                'px))';

        }

    }


    /*
    |--------------------------------------------------------------------------
    | CE BLOQUE QUIÉNES SOMOS
    |--------------------------------------------------------------------------
    */

    if (motionOK && floatingCE) {

        const rect =
        floatingCE
        .getBoundingClientRect();


        if (
            rect.top <
            window.innerHeight &&
            rect.bottom > 0
        ) {

            const movement =
                (
                    window.innerHeight -
                    rect.top
                ) * .035;


            floatingCE.style.transform =

                'translateY(' +
                movement +
                'px)';

        }

    }


    /*
    |--------------------------------------------------------------------------
    | MX COBERTURA
    |--------------------------------------------------------------------------
    */

    if (motionOK && coverageMX) {

        const rect =
        coverageMX
        .getBoundingClientRect();


        if (
            rect.top <
            window.innerHeight &&
            rect.bottom > 0
        ) {

            const movement =
                (
                    window.innerHeight -
                    rect.top
                ) * .025;


            coverageMX.style.transform =

                'translateY(calc(-50% + ' +
                movement +
                'px))';

        }

    }


    /*
    |--------------------------------------------------------------------------
    | PROGRESO DEL PROCESO
    |--------------------------------------------------------------------------
    */

    if (
        processSection &&
        processProgress
    ) {

        const rect =
        processSection
        .getBoundingClientRect();


        const viewport =
        window.innerHeight;


        let progress =
            (
                viewport -
                rect.top
            )
            /
            (
                rect.height +
                viewport * .2
            );


        progress =
            Math.max(
                0,
                Math.min(
                    1,
                    progress
                )
            );


        processProgress
        .style
        .width =

            (progress * 100)
            + '%';

    }


    /*
    |--------------------------------------------------------------------------
    | PROGRESO GENERAL DE PÁGINA
    |--------------------------------------------------------------------------
    */

    if (pageProgress) {

        const documentHeight =

            document
            .documentElement
            .scrollHeight

            -

            window.innerHeight;


        let progress =
            documentHeight > 0
            ?
            scrollY /
            documentHeight
            :
            0;


        progress =
            Math.max(
                0,
                Math.min(
                    1,
                    progress
                )
            );


        pageProgress
        .style
        .height =

            (progress * 100)
            + '%';

    }


    ticking = false;

}


/* =========================================================
   SCROLL OPTIMIZADO
========================================================= */

window.addEventListener(
    'scroll',
    function () {

        if (!ticking) {

            window
            .requestAnimationFrame(
                updateEffects
            );

            ticking = true;

        }

    },
    {
        passive: true
    }
);


updateEffects();


/* =========================================================
   3. EFECTO 3D PROCESO
========================================================= */

const cards =
document.querySelectorAll(
    '.process-card'
);


cards.forEach(
    function(card) {


        card.addEventListener(
            'mousemove',
            function(event) {


                /*
                |--------------------------------------------------------------------------
                | SOLO ESCRITORIO
                |--------------------------------------------------------------------------
                */

                if (
                    !window.matchMedia('(min-width: 1024px) and (hover: hover) and (pointer: fine) and (prefers-reduced-motion: no-preference)').matches
                ) {

                    return;

                }


                const rect =
                card
                .getBoundingClientRect();


                const x =
                event.clientX -
                rect.left;


                const y =
                event.clientY -
                rect.top;


                const centerX =
                rect.width / 2;


                const centerY =
                rect.height / 2;


                const rotateX =
                    (
                        centerY -
                        y
                    ) / 50;


                const rotateY =
                    (
                        x -
                        centerX
                    ) / 50;


                card.style.transform =

                    'perspective(1000px) ' +

                    'rotateX(' +
                    rotateX +
                    'deg) ' +

                    'rotateY(' +
                    rotateY +
                    'deg) ' +

                    'translateY(-8px)';

            }
        );


        card.addEventListener(
            'mouseleave',
            function () {

                card.style
                .transform = '';

            }
        );

    }
);


/* =========================================================
   4. MOVIMIENTO MUY SUTIL DEL HERO CON MOUSE
========================================================= */

if (hero && heroCE) {

    hero.addEventListener(
        'mousemove',
        function(event) {

            if (
                !window.matchMedia('(min-width: 1024px) and (hover: hover) and (pointer: fine) and (prefers-reduced-motion: no-preference)').matches
            ) {

                return;

            }


            const rect =
            hero
            .getBoundingClientRect();


            const x =
                (
                    event.clientX -
                    rect.left
                )
                /
                rect.width;


            const y =
                (
                    event.clientY -
                    rect.top
                )
                /
                rect.height;


            const moveX =
                (
                    x - .5
                ) * 18;


            const moveY =
                (
                    y - .5
                ) * 12

                +

                window.scrollY * .08;


            heroCE.style.transform =

                'translate(' +
                moveX +
                'px, calc(-50% + ' +
                moveY +
                'px))';

        }
    );


    hero.addEventListener(
        'mouseleave',
        function () {

            const movement =
                window.scrollY
                * .08;


            heroCE.style.transform =

                'translate(0, calc(-50% + ' +
                movement +
                'px))';

        }
    );

}

});
</script>

@endsection
