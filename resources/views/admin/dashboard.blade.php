<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dashboard | Cooling Energy</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-100 flex flex-col">

    <!-- ENCABEZADO -->
    <header class="bg-[#044C7F] text-white shadow-sm">

        <div class="max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8
                    py-4 sm:py-5
                    flex flex-col sm:flex-row
                    sm:items-center sm:justify-between
                    gap-4">

            <!-- IDENTIDAD -->
            <div class="min-w-0">

                <h1 class="text-lg sm:text-xl
                           font-bold tracking-wide">
                    COOLING ENERGY
                </h1>

                <p class="text-xs sm:text-sm text-cyan-100 mt-1">
                    Panel administrativo
                </p>

            </div>

            <!-- ACCIONES -->
            <div class="grid grid-cols-2 sm:flex
                        sm:items-center
                        gap-2 sm:gap-4
                        w-full sm:w-auto">

                <a href="{{ route('inicio') }}"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="inline-flex items-center justify-center
                          min-h-[44px]
                          rounded-lg border border-white/20
                          px-3 sm:px-5 py-2.5
                          text-xs sm:text-sm font-medium
                          text-center
                          hover:bg-white/10 transition">

                    Ver sitio web

                </a>

                <form action="{{ route('admin.logout') }}"
                      method="POST"
                      class="w-full sm:w-auto">

                    @csrf

                    <button type="submit"
                            class="w-full min-h-[44px]
                                   rounded-lg bg-white/10
                                   px-3 sm:px-5 py-2.5
                                   text-xs sm:text-sm
                                   font-medium
                                   hover:bg-white/20
                                   transition cursor-pointer">

                        Cerrar sesión

                    </button>

                </form>

            </div>

        </div>

    </header>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="w-full max-w-7xl mx-auto flex-1
                 px-4 sm:px-6 lg:px-8
                 py-6 sm:py-9 lg:py-12">

        <!-- BIENVENIDA -->
        <div class="mb-6 sm:mb-8 lg:mb-10">

            <p class="text-[10px] sm:text-xs
                      font-bold uppercase
                      tracking-[0.2em]
                      text-[#009ABD] mb-2 sm:mb-3">

                Panel de control

            </p>

            <h2 class="text-2xl sm:text-3xl lg:text-4xl
                       font-bold text-[#044C7F]
                       leading-tight break-words">

                Bienvenido, administrador

            </h2>

            <p class="text-sm sm:text-base
                      text-gray-500 mt-3
                      leading-relaxed">

                Gestiona los proyectos de Cooling Energy
                desde un solo lugar.

            </p>

        </div>

        <!-- ESTADÍSTICAS -->
        <div class="grid grid-cols-1
                    md:grid-cols-3
                    gap-3 sm:gap-5
                    mb-6 sm:mb-8">

            <!-- TOTAL DE PROYECTOS -->
            <div class="min-w-0 bg-white
                        rounded-xl sm:rounded-2xl
                        border border-gray-100
                        shadow-sm
                        p-5 lg:p-6">

                <div class="flex items-center
                            justify-between gap-3
                            mb-3 sm:mb-5">

                    <span class="text-sm text-gray-500">
                        Total de proyectos
                    </span>

                    <span class="shrink-0
                                 flex items-center justify-center
                                 w-10 h-10 rounded-xl
                                 bg-cyan-50 text-[#009ABD]
                                 text-xl">

                        &#9635;

                    </span>

                </div>

                <p class="text-3xl lg:text-4xl
                          font-bold text-[#044C7F]">

                    {{ $totalProyectos }}

                </p>

                <p class="text-xs text-gray-400 mt-2">

                    Registrados en la base de datos

                </p>

            </div>

            <!-- PROYECTOS PUBLICADOS -->
            <div class="min-w-0 bg-white
                        rounded-xl sm:rounded-2xl
                        border border-gray-100
                        shadow-sm
                        p-5 lg:p-6">

                <div class="flex items-center
                            justify-between gap-3
                            mb-3 sm:mb-5">

                    <span class="text-sm text-gray-500">
                        Proyectos publicados
                    </span>

                    <span class="shrink-0
                                 flex items-center justify-center
                                 w-10 h-10 rounded-xl
                                 bg-green-50 text-green-600
                                 text-xl">

                        &#10003;

                    </span>

                </div>

                <p class="text-3xl lg:text-4xl
                          font-bold text-[#044C7F]">

                    {{ $publicados }}

                </p>

                <p class="text-xs text-gray-400 mt-2">

                    Visibles en el sitio web

                </p>

            </div>

            <!-- PROYECTOS OCULTOS -->
            <div class="min-w-0 bg-white
                        rounded-xl sm:rounded-2xl
                        border border-gray-100
                        shadow-sm
                        p-5 lg:p-6">

                <div class="flex items-center
                            justify-between gap-3
                            mb-3 sm:mb-5">

                    <span class="text-sm text-gray-500">
                        Proyectos ocultos
                    </span>

                    <span class="shrink-0
                                 flex items-center justify-center
                                 w-10 h-10 rounded-xl
                                 bg-amber-50 text-amber-500
                                 text-xl">

                        &#9679;

                    </span>

                </div>

                <p class="text-3xl lg:text-4xl
                          font-bold text-[#044C7F]">

                    {{ $ocultos }}

                </p>

                <p class="text-xs text-gray-400 mt-2">

                    No visibles al público

                </p>

            </div>

        </div>

        <!-- ADMINISTRACIÓN DE PROYECTOS -->
        <section class="bg-white
                        rounded-xl sm:rounded-2xl
                        border border-gray-100
                        shadow-sm
                        p-5 sm:p-7 lg:p-9">

            <div class="flex flex-col lg:flex-row
                        lg:items-center lg:justify-between
                        gap-5 lg:gap-8">

                <!-- INFORMACIÓN -->
                <div class="min-w-0 lg:max-w-xl">

                    <p class="text-[10px] sm:text-xs
                              uppercase tracking-widest
                              font-semibold text-[#009ABD]
                              mb-2 sm:mb-3">

                        Gestión de contenido

                    </p>

                    <h3 class="text-xl sm:text-2xl
                               font-bold text-[#044C7F]
                               leading-tight">

                        Administración de proyectos

                    </h3>

                    <p class="text-gray-500 text-sm
                              leading-relaxed mt-3">

                        Agrega nuevos proyectos, edita su
                        información, administra fotografías
                        y controla cuáles se muestran
                        en el sitio web.

                    </p>

                </div>

                <!-- BOTONES -->
                <div class="grid grid-cols-1 sm:grid-cols-2
                            gap-3 w-full lg:w-auto
                            lg:shrink-0">

                    <a href="{{ route('admin.proyectos.index') }}"
                       class="inline-flex items-center
                              justify-center
                              w-full min-h-[48px]
                              rounded-lg
                              bg-[#044C7F]
                              px-5 lg:px-6 py-3
                              text-sm font-semibold text-white
                              text-center
                              hover:bg-[#009ABD]
                              transition">

                        Ver proyectos

                    </a>

                    <a href="{{ route('admin.proyectos.create') }}"
                       class="inline-flex items-center
                              justify-center
                              w-full min-h-[48px]
                              rounded-lg
                              bg-cyan-50
                              px-5 lg:px-6 py-3
                              text-sm font-semibold
                              text-[#044C7F]
                              text-center
                              hover:bg-cyan-100
                              transition">

                        + Nuevo proyecto

                    </a>

                </div>

            </div>

        </section>

        <!-- PIE DE PÁGINA -->
        <footer class="mt-6 sm:mt-10
                       pt-5 sm:pt-6
                       border-t border-gray-200
                       flex flex-col sm:flex-row
                       sm:items-center sm:justify-between
                       gap-2 sm:gap-3
                       text-center sm:text-left">

            <p class="text-[11px] sm:text-xs
                      text-gray-400 leading-relaxed">

                Cooling Energy · Administración de contenido

            </p>

            <p class="text-[11px] sm:text-xs
                      text-gray-400 leading-relaxed">

                Acceso exclusivo para administradores

            </p>

        </footer>

    </main>

</body>
</html>
