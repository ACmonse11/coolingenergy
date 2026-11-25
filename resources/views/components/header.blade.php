{{-- =========================================================
    HEADER RESPONSIVE COMPACTO — COOLING ENERGY
========================================================= --}}

<header
    id="main-header"
    class="fixed top-0 left-0 w-full z-50
           bg-white/95 backdrop-blur-md
           border-b border-slate-100"
>

    <div class="max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-10">

        {{-- BARRA PRINCIPAL --}}
        <div class="h-[64px] sm:h-[68px] lg:h-24
                    flex items-center justify-between">

            {{-- =================================================
                LOGO
            ================================================== --}}
            <a
                href="{{ route('inicio') }}"
                class="inline-flex items-center flex-shrink-0"
                aria-label="Cooling Energy - Inicio"
            >
                <img
                    src="{{ asset('images/Logo_1.webp') }}"
                    alt="Cooling Energy Ingeniería & Mantenimiento"
                    class="h-9
                           sm:h-10
                           md:h-11
                           lg:h-16
                           w-auto
                           max-w-[170px]
                           sm:max-w-[190px]
                           lg:max-w-none
                           object-contain"
                >
            </a>


            {{-- =================================================
                MENÚ ESCRITORIO
            ================================================== --}}
            <nav
                class="hidden lg:flex
                       items-center justify-center
                       gap-6 xl:gap-9
                       text-[13px] xl:text-[14px]
                       font-medium
                       text-slate-600"
                aria-label="Navegación principal"
            >

                <a
                    href="{{ route('inicio') }}"
                    class="header-link relative py-2
                           transition-colors duration-300
                           hover:text-[#044C7F]
                           {{ request()->routeIs('inicio') ? 'active' : '' }}"
                >
                    Inicio
                </a>

                <a
                    href="{{ route('nosotros') }}"
                    class="header-link relative py-2
                           transition-colors duration-300
                           hover:text-[#044C7F]
                           {{ request()->routeIs('nosotros') ? 'active' : '' }}"
                >
                    Nosotros
                </a>

                <a
                    href="{{ route('servicios') }}"
                    class="header-link relative py-2
                           transition-colors duration-300
                           hover:text-[#044C7F]
                           {{ request()->routeIs('servicios') ? 'active' : '' }}"
                >
                    Servicios
                </a>

                <a
                    href="{{ route('proyectos') }}"
                    class="header-link relative py-2
                           transition-colors duration-300
                           hover:text-[#044C7F]
                           {{ request()->routeIs('proyectos') || request()->routeIs('proyectos.*') ? 'active' : '' }}"
                >
                    Proyectos
                </a>


{{-- PROVEEDORES --}}
<a
    href="{{ route('proveedores') }}"
    class="header-link relative py-2
           transition-colors duration-300
           hover:text-[#044C7F]
           {{ request()->routeIs('proveedores') ? 'active' : '' }}"
>
    Proveedores
</a>


                <a
                    href="{{ route('contacto') }}"
                    class="header-link relative py-2
                           transition-colors duration-300
                           hover:text-[#044C7F]
                           {{ request()->routeIs('contacto') ? 'active' : '' }}"
                >
                    Contacto
                </a>

            </nav>


            {{-- =================================================
                LOGIN ESCRITORIO
            ================================================== --}}
            <div class="hidden lg:flex items-center justify-end">

                <a
                    href="#"
                    class="group inline-flex
                           items-center gap-3
                           text-sm font-medium
                           text-[#044C7F]"
                >


                </a>

            </div>


            {{-- =================================================
                BOTÓN MÓVIL
            ================================================== --}}
            <button
                id="mobile-menu-button"
                type="button"
                class="lg:hidden
                       relative
                       w-9 h-9
                       sm:w-10 sm:h-10
                       flex items-center justify-center
                       text-[#044C7F]
                       border border-slate-200
                       transition-all duration-300
                       hover:border-[#009ABD]
                       hover:text-[#009ABD]"
                aria-label="Abrir menú"
                aria-expanded="false"
                aria-controls="mobile-menu"
            >

                <span
                    id="menu-line-1"
                    class="absolute
                           w-[18px] h-[1.5px]
                           bg-current
                           -translate-y-[5px]
                           transition-all duration-300"
                ></span>

                <span
                    id="menu-line-2"
                    class="absolute
                           w-[18px] h-[1.5px]
                           bg-current
                           transition-all duration-300"
                ></span>

                <span
                    id="menu-line-3"
                    class="absolute
                           w-[18px] h-[1.5px]
                           bg-current
                           translate-y-[5px]
                           transition-all duration-300"
                ></span>

            </button>

        </div>

    </div>


    {{-- =========================================================
        MENÚ MÓVIL COMPACTO
    ========================================================== --}}
    <div
        id="mobile-menu"
        class="lg:hidden
               absolute
               top-full left-0
               w-full
               bg-white
               border-t border-slate-100
               shadow-[0_18px_45px_rgba(2,47,79,0.10)]
               opacity-0
               invisible
               pointer-events-none
               -translate-y-2
               transition-all duration-300"
    >

        <div class="max-w-[1500px] mx-auto px-4 sm:px-6">

            <div class="py-4 sm:py-5">

                {{-- ETIQUETA --}}
                <div class="flex items-center gap-2 mb-3">

                    <span class="w-5 h-px bg-[#009ABD]"></span>

                    <span
                        class="text-[9px]
                               uppercase
                               tracking-[0.22em]
                               font-bold
                               text-[#009ABD]"
                    >
                        Menú
                    </span>

                </div>


                {{-- NAVEGACIÓN --}}
                <nav
                    class="flex flex-col"
                    aria-label="Navegación móvil"
                >

                    <a
                        href="{{ route('inicio') }}"
                        class="mobile-nav-link
                               {{ request()->routeIs('inicio') ? 'active' : '' }}"
                    >
                        <span>Inicio</span>
                        <span class="mobile-arrow">→</span>
                    </a>


                    <a
                        href="{{ route('nosotros') }}"
                        class="mobile-nav-link
                               {{ request()->routeIs('nosotros') ? 'active' : '' }}"
                    >
                        <span>Nosotros</span>
                        <span class="mobile-arrow">→</span>
                    </a>


                    <a
                        href="{{ route('servicios') }}"
                        class="mobile-nav-link
                               {{ request()->routeIs('servicios') ? 'active' : '' }}"
                    >
                        <span>Servicios</span>
                        <span class="mobile-arrow">→</span>
                    </a>


                    <a
                        href="{{ route('proyectos') }}"
                        class="mobile-nav-link
                               {{ request()->routeIs('proyectos') || request()->routeIs('proyectos.*') ? 'active' : '' }}"
                    >
                        <span>Proyectos</span>
                        <span class="mobile-arrow">→</span>
                    </a>


{{-- PROVEEDORES MÓVIL --}}
<a
    href="{{ route('proveedores') }}"
    class="mobile-nav-link
           {{ request()->routeIs('proveedores') ? 'active' : '' }}"
>
    <span>Proveedores</span>
    <span class="mobile-arrow">→</span>
</a>



                    <a
                        href="{{ route('contacto') }}"
                        class="mobile-nav-link
                               {{ request()->routeIs('contacto') ? 'active' : '' }}"
                    >
                        <span>Contacto</span>
                        <span class="mobile-arrow">→</span>
                    </a>

                </nav>


                {{-- LOGIN --}}
                <div class="pt-4 mt-1">

                    <a
                        href="#"
                        class="group
                               w-full
                               h-[46px]
                               flex items-center
                               justify-between
                               bg-[#044C7F]
                               text-white
                               px-4
                               transition-colors duration-300
                               hover:bg-[#009ABD]"
                    >

                        <div class="flex items-center gap-3">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.7"
                                class="w-[18px] h-[18px]"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15.75 6.75a3.75 3.75 0 11-7.5 0
                                       3.75 3.75 0 017.5 0z
                                       M4.5 20.25a7.5 7.5 0 0115 0"
                                />
                            </svg>

                            <span class="text-[13px] font-medium">
                                Iniciar sesión
                            </span>

                        </div>

                        <span class="text-base">
                            →
                        </span>

                    </a>

                </div>

            </div>

        </div>

    </div>

</header>


{{-- =========================================================
    ESTILOS
========================================================= --}}
<style>

    #main-header {
        max-width: 100vw;
    }


    /* =========================================================
       MENÚ ESCRITORIO
    ========================================================== */

    .header-link::after {
        content: "";

        position: absolute;

        left: 50%;
        bottom: 0;

        width: 0;
        height: 2px;

        background: #009ABD;

        transform: translateX(-50%);

        transition: width .3s ease;
    }

    .header-link:hover::after,
    .header-link.active::after {
        width: 100%;
    }

    .header-link.active {
        color: #044C7F;
    }


    /* =========================================================
       MENÚ MÓVIL
    ========================================================== */

    #mobile-menu.mobile-menu-open {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
        transform: translateY(0);
    }


    .mobile-nav-link {
        position: relative;

        min-height: 46px;

        display: flex;
        align-items: center;
        justify-content: space-between;

        padding: 10px 4px;

        border-bottom: 1px solid #f1f5f9;

        color: #475569;

        font-size: 14px;
        font-weight: 500;

        transition:
            color .25s ease,
            padding-left .25s ease;
    }


    .mobile-nav-link:last-child {
        border-bottom: none;
    }


    .mobile-nav-link .mobile-arrow {
        color: rgba(4, 76, 127, .25);

        font-size: 14px;

        transition:
            transform .25s ease,
            color .25s ease;
    }


    .mobile-nav-link:hover,
    .mobile-nav-link.active {
        color: #044C7F;
        padding-left: 9px;
    }


    .mobile-nav-link:hover .mobile-arrow,
    .mobile-nav-link.active .mobile-arrow {
        color: #009ABD;
        transform: translateX(3px);
    }


    .mobile-nav-link.active::before {
        content: "";

        position: absolute;

        left: 0;
        top: 50%;

        width: 2px;
        height: 20px;

        background: #009ABD;

        transform: translateY(-50%);
    }


    /* =========================================================
       HAMBURGUESA → X
    ========================================================== */

    #mobile-menu-button.menu-active #menu-line-1 {
        transform: rotate(45deg);
    }

    #mobile-menu-button.menu-active #menu-line-2 {
        opacity: 0;
        transform: scaleX(0);
    }

    #mobile-menu-button.menu-active #menu-line-3 {
        transform: rotate(-45deg);
    }


    /* =========================================================
       TELÉFONOS MUY PEQUEÑOS
    ========================================================== */

    @media (max-width: 374px) {

        .mobile-nav-link {
            min-height: 43px;
            padding-top: 8px;
            padding-bottom: 8px;
            font-size: 13px;
        }

    }


    /* =========================================================
       TABLET
    ========================================================== */

    @media (min-width: 640px) and (max-width: 1023px) {

        #mobile-menu > div {
            max-width: 720px;
        }

        .mobile-nav-link {
            font-size: 15px;
        }

    }


    /* =========================================================
       REDUCIR MOVIMIENTO
    ========================================================== */

    @media (prefers-reduced-motion: reduce) {

        #mobile-menu,
        #mobile-menu-button span,
        .header-link::after,
        .mobile-nav-link,
        .mobile-arrow {
            transition: none !important;
        }

    }

</style>


{{-- =========================================================
    JAVASCRIPT
========================================================= --}}
<script>

document.addEventListener('DOMContentLoaded', function () {

    const menuButton =
        document.getElementById('mobile-menu-button');

    const mobileMenu =
        document.getElementById('mobile-menu');

    const mobileLinks =
        document.querySelectorAll('.mobile-nav-link');


    if (!menuButton || !mobileMenu) {
        return;
    }


    function openMenu() {

        mobileMenu.classList.add('mobile-menu-open');

        menuButton.classList.add('menu-active');

        menuButton.setAttribute(
            'aria-expanded',
            'true'
        );

        menuButton.setAttribute(
            'aria-label',
            'Cerrar menú'
        );

    }


    function closeMenu() {

        mobileMenu.classList.remove('mobile-menu-open');

        menuButton.classList.remove('menu-active');

        menuButton.setAttribute(
            'aria-expanded',
            'false'
        );

        menuButton.setAttribute(
            'aria-label',
            'Abrir menú'
        );

    }


    menuButton.addEventListener('click', function () {

        const isOpen =
            mobileMenu.classList.contains('mobile-menu-open');

        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }

    });


    mobileLinks.forEach(function (link) {

        link.addEventListener('click', function () {
            closeMenu();
        });

    });


    document.addEventListener('keydown', function (event) {

        if (
            event.key === 'Escape' &&
            mobileMenu.classList.contains('mobile-menu-open')
        ) {
            closeMenu();
        }

    });


    /* Cerrar al tocar fuera del menú */
    document.addEventListener('click', function (event) {

        if (
            !mobileMenu.contains(event.target) &&
            !menuButton.contains(event.target)
        ) {
            closeMenu();
        }

    });


    /* Cerrar al cambiar a escritorio */
    window.addEventListener('resize', function () {

        if (window.innerWidth >= 1024) {
            closeMenu();
        }

    });

});

</script>
