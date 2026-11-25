{{-- =========================================================
    FOOTER RESPONSIVE — COOLING ENERGY
========================================================= --}}

<footer
    class="cooling-footer
           relative
           bg-[#033A61]
           text-white
           overflow-hidden"
>

    {{-- =====================================================
        DECORACIÓN
    ====================================================== --}}
    <div
        class="absolute
               -right-32
               -top-32
               sm:-right-40
               sm:-top-40
               w-[280px]
               h-[280px]
               sm:w-[420px]
               sm:h-[420px]
               border
               border-white/5
               rounded-full
               pointer-events-none"
    ></div>

    <div
        class="absolute
               -right-16
               -top-16
               sm:-right-24
               sm:-top-24
               w-[180px]
               h-[180px]
               sm:w-[260px]
               sm:h-[260px]
               border
               border-[#009ABD]/10
               rounded-full
               pointer-events-none"
    ></div>


    {{-- =====================================================
        PARTE SUPERIOR
    ====================================================== --}}
    <div
        class="relative
               z-10
               max-w-7xl
               mx-auto
               px-5
               sm:px-6
               lg:px-8"
    >

        <div class="py-12 sm:py-16 lg:py-20">

            <div
                class="grid
                       grid-cols-1
                       sm:grid-cols-2
                       lg:grid-cols-12
                       gap-y-10
                       sm:gap-y-12
                       gap-x-8
                       lg:gap-8"
            >

                {{-- =================================================
                    COLUMNA 1 — MARCA
                ================================================== --}}
                <div
                    class="min-w-0
                           sm:col-span-2
                           lg:col-span-5"
                >

                    {{-- LOGO --}}
                    <a
                        href="{{ route('inicio') }}"
                        class="inline-flex
                               items-center
                               max-w-full"
                        aria-label="Cooling Energy - Inicio"
                    >

                        <img
                            src="{{ asset('images/cooling-energy_-logo-final-07.webp') }}"
                            alt="Cooling Energy Ingeniería & Mantenimiento"
                            class="h-12
                                   min-[375px]:h-14
                                   sm:h-16
                                   lg:h-[72px]
                                   w-auto
                                   max-w-[230px]
                                   sm:max-w-[280px]
                                   lg:max-w-[330px]
                                   object-contain"
                        >

                    </a>


                    {{-- DESCRIPCIÓN --}}
                    <p
                        class="footer-description
                               mt-5
                               sm:mt-6
                               text-white/60
                               text-sm
                               sm:text-base
                               leading-7
                               max-w-md"
                    >
                        Ingeniería especializada en sistemas HVAC,
                        aire acondicionado y Protección Contra Incendios
                        para proyectos residenciales, comerciales,
                        hoteleros e industriales.
                    </p>


                    {{-- ESPECIALIDADES --}}
                    <div
                        class="mt-6
                               sm:mt-7
                               flex
                               flex-wrap
                               gap-2"
                    >

                        <span
                            class="inline-flex
                                   items-center
                                   border
                                   border-white/10
                                   text-white/70
                                   text-[11px]
                                   sm:text-xs
                                   px-3
                                   sm:px-4
                                   py-2
                                   rounded-full"
                        >
                            HVAC
                        </span>


                        <span
                            class="inline-flex
                                   items-center
                                   border
                                   border-white/10
                                   text-white/70
                                   text-[11px]
                                   sm:text-xs
                                   px-3
                                   sm:px-4
                                   py-2
                                   rounded-full"
                        >
                            Aire acondicionado
                        </span>


                        <span
                            class="inline-flex
                                   items-center
                                   border
                                   border-white/10
                                   text-white/70
                                   text-[11px]
                                   sm:text-xs
                                   px-3
                                   sm:px-4
                                   py-2
                                   rounded-full"
                        >
                            PCI
                        </span>

                    </div>

                </div>


                {{-- =================================================
                    COLUMNA 2 — NAVEGACIÓN
                ================================================== --}}
                <div
                    class="min-w-0
                           sm:col-span-1
                           lg:col-span-3"
                >

                    <div class="footer-section-line">

                        <p
                            class="text-[#009ABD]
                                   uppercase
                                   tracking-[0.20em]
                                   text-[11px]
                                   sm:text-xs
                                   font-bold
                                   mb-5
                                   sm:mb-6"
                        >
                            Navegación
                        </p>


                        <nav
                            class="flex
                                   flex-col
                                   gap-3
                                   sm:gap-4"
                            aria-label="Navegación del footer"
                        >

                            <a
                                href="{{ route('inicio') }}"
                                class="footer-link
                                       text-white/65
                                       text-sm
                                       sm:text-base
                                       transition
                                       duration-300
                                       hover:text-white"
                            >
                                Inicio
                            </a>


                            <a
                                href="{{ route('nosotros') }}"
                                class="footer-link
                                       text-white/65
                                       text-sm
                                       sm:text-base
                                       transition
                                       duration-300
                                       hover:text-white"
                            >
                                Nosotros
                            </a>


                            <a
                                href="{{ route('servicios') }}"
                                class="footer-link
                                       text-white/65
                                       text-sm
                                       sm:text-base
                                       transition
                                       duration-300
                                       hover:text-white"
                            >
                                Servicios
                            </a>


                            <a
                                href="{{ route('proyectos') }}"
                                class="footer-link
                                       text-white/65
                                       text-sm
                                       sm:text-base
                                       transition
                                       duration-300
                                       hover:text-white"
                            >
                                Proyectos
                            </a>


                            <a
                                href="{{ route('contacto') }}"
                                class="footer-link
                                       text-white/65
                                       text-sm
                                       sm:text-base
                                       transition
                                       duration-300
                                       hover:text-white"
                            >
                                Contacto
                            </a>

                        </nav>

                    </div>

                </div>


                {{-- =================================================
                    COLUMNA 3 — CONTACTO
                ================================================== --}}
                <div
                    class="min-w-0
                           sm:col-span-1
                           lg:col-span-4"
                >

                    <div class="footer-section-line">

                        <p
                            class="text-[#009ABD]
                                   uppercase
                                   tracking-[0.20em]
                                   text-[11px]
                                   sm:text-xs
                                   font-bold
                                   mb-5
                                   sm:mb-6"
                        >
                            Contacto
                        </p>


                        {{-- UBICACIÓN --}}
                        <div class="mb-5 sm:mb-6">

                            <p
                                class="text-white/40
                                       uppercase
                                       tracking-wider
                                       text-[10px]
                                       sm:text-[11px]
                                       mb-2"
                            >
                                Oficina
                            </p>


                            <p
                                class="text-white/75
                                       text-sm
                                       sm:text-base
                                       leading-6"
                            >
                                Cancún, Quintana Roo
                            </p>


                            <p
                                class="text-white/45
                                       text-xs
                                       sm:text-sm
                                       leading-6
                                       mt-1"
                            >
                                Capacidad operativa a nivel nacional
                            </p>

                        </div>


                        {{-- TELÉFONO --}}
                        <div class="mb-5 sm:mb-6">

                            <p
                                class="text-white/40
                                       uppercase
                                       tracking-wider
                                       text-[10px]
                                       sm:text-[11px]
                                       mb-2"
                            >
                                Teléfono
                            </p>


                            <a
                                href="tel:+529981553625"
                                class="inline-flex
                                       text-white/75
                                       text-sm
                                       sm:text-base
                                       hover:text-[#009ABD]
                                       transition
                                       duration-300"
                            >
                                +52 (998) 155 3625
                            </a>

                        </div>


                        {{-- CORREO --}}
                        <div class="min-w-0">

                            <p
                                class="text-white/40
                                       uppercase
                                       tracking-wider
                                       text-[10px]
                                       sm:text-[11px]
                                       mb-2"
                            >
                                Correo
                            </p>


                            <a
                                href="mailto:juan.manuel@coolingenergyhvac.com"
                                class="footer-email
                                       inline-block
                                       max-w-full
                                       text-white/75
                                       text-[13px]
                                       min-[375px]:text-sm
                                       sm:text-base
                                       leading-6
                                       hover:text-[#009ABD]
                                       transition
                                       duration-300"
                            >
                                juan.manuel@coolingenergyhvac.com
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =========================================================
        CTA INTERMEDIO
    ========================================================== --}}
    <div
        class="relative
               z-10
               border-t
               border-white/10"
    >

        <div
            class="max-w-7xl
                   mx-auto
                   px-5
                   sm:px-6
                   lg:px-8"
        >

            <div
                class="py-7
                       sm:py-8
                       flex
                       flex-col
                       md:flex-row
                       md:items-center
                       md:justify-between
                       gap-6
                       md:gap-8"
            >

                <div class="min-w-0">

                    <p
                        class="text-white
                               text-lg
                               sm:text-xl
                               font-semibold
                               leading-snug"
                    >
                        ¿Tienes un proyecto en desarrollo?
                    </p>


                    <p
                        class="text-white/45
                               text-sm
                               leading-6
                               mt-2
                               max-w-xl"
                    >
                        Conversemos sobre los requerimientos de ingeniería.
                    </p>

                </div>


                <div
                    class="w-full
                           md:w-auto
                           flex-shrink-0"
                >

                    <a
                        href="{{ route('contacto') }}"
                        class="group
                               w-full
                               md:w-auto
                               min-h-[48px]
                               inline-flex
                               items-center
                               justify-center
                               bg-[#009ABD]
                               text-white
                               px-6
                               py-3
                               text-sm
                               font-semibold
                               transition
                               duration-300
                               hover:bg-white
                               hover:text-[#044C7F]"
                    >

                        <span>
                            Iniciar un proyecto
                        </span>

                        <span
                            class="ml-3
                                   transition-transform
                                   duration-300
                                   group-hover:translate-x-1"
                        >
                            →
                        </span>

                    </a>

                </div>

            </div>

        </div>

    </div>


    {{-- =========================================================
        COPYRIGHT
    ========================================================== --}}
    <div
        class="relative
               z-10
               bg-[#022F4F]
               border-t
               border-white/5"
    >

        <div
            class="max-w-7xl
                   mx-auto
                   px-5
                   sm:px-6
                   lg:px-8"
        >

            <div
                class="py-5
                       sm:py-6
                       flex
                       flex-col
                       sm:flex-row
                       items-center
                       sm:justify-between
                       gap-4
                       text-center
                       sm:text-left"
            >

                <p
                    class="text-white/35
                           text-[11px]
                           sm:text-sm
                           leading-5
                           sm:leading-6"
                >
                    © {{ date('Y') }} Cooling Energy Ingeniería & Mantenimiento.
                    <span class="hidden md:inline">
                        Todos los derechos reservados.
                    </span>

                    <span class="block md:hidden mt-1">
                        Todos los derechos reservados.
                    </span>
                </p>


                {{-- DETALLE GRÁFICO --}}
                <div
                    class="flex
                           items-center
                           justify-center
                           gap-2
                           flex-shrink-0"
                    aria-hidden="true"
                >

                    <span
                        class="w-8
                               h-[2px]
                               bg-[#009ABD]"
                    ></span>

                    <span
                        class="w-2
                               h-[2px]
                               bg-[#E31F1E]"
                    ></span>

                </div>

            </div>

        </div>

    </div>

</footer>


{{-- =========================================================
    ESTILOS RESPONSIVE DEL FOOTER
========================================================= --}}
<style>

    /* =========================================================
       PROTECCIÓN GENERAL
    ========================================================== */

    .cooling-footer {
        width: 100%;
        max-width: 100%;
    }

    .cooling-footer *,
    .cooling-footer *::before,
    .cooling-footer *::after {
        box-sizing: border-box;
    }


    /* =========================================================
       DESCRIPCIÓN
    ========================================================== */

    .footer-description {
        text-align: justify;
        text-justify: inter-word;
    }


    /* =========================================================
       LINKS
    ========================================================== */

    .footer-link {
        position: relative;
        width: fit-content;
    }

    .footer-link::after {
        content: "";

        position: absolute;

        left: 0;
        bottom: -3px;

        width: 0;
        height: 1px;

        background: #009ABD;

        transition: width .3s ease;
    }

    .footer-link:hover::after {
        width: 100%;
    }


    /* =========================================================
       CORREO
       Evita que rompa el footer en celulares pequeños
    ========================================================== */

    .footer-email {
        overflow-wrap: anywhere;
        word-break: break-word;
    }


    /* =========================================================
       MÓVIL
    ========================================================== */

    @media (max-width: 639px) {

        /*
            En celular dejamos de justificar la descripción
            porque una columna angosta genera espacios excesivos.
        */
        .footer-description {
            text-align: left;
        }


        /*
            Separadores entre bloques para que el footer
            sea más fácil de leer en móvil.
        */
        .footer-section-line {
            border-top: 1px solid rgba(255, 255, 255, .08);
            padding-top: 30px;
        }

    }


    /* =========================================================
       MÓVILES MUY PEQUEÑOS
    ========================================================== */

    @media (max-width: 374px) {

        .cooling-footer {
            overflow-x: clip;
        }

        .footer-email {
            font-size: 12px;
        }

    }


    /* =========================================================
       HOVER SOLO DONDE EXISTE MOUSE
    ========================================================== */

    @media (hover: none) {

        .footer-link:hover::after {
            width: 0;
        }

    }


    /* =========================================================
       REDUCCIÓN DE MOVIMIENTO
    ========================================================== */

    @media (prefers-reduced-motion: reduce) {

        .cooling-footer *,
        .cooling-footer *::before,
        .cooling-footer *::after {
            transition-duration: .01ms !important;
        }

    }

</style>
