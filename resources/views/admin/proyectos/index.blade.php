<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Administrar proyectos | Cooling Energy</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen bg-slate-100">

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

                <p class="text-xs sm:text-sm
                          text-cyan-100 mt-1">

                    Administración de proyectos

                </p>

            </div>

            <!-- ACCIONES DEL ENCABEZADO -->
            <div class="grid grid-cols-2 sm:flex
                        sm:items-center
                        gap-2 sm:gap-4
                        w-full sm:w-auto">

                <a href="{{ route('admin.dashboard') }}"
                   class="inline-flex items-center
                          justify-center min-h-[44px]
                          rounded-lg border border-white/20
                          px-3 sm:px-5 py-2.5
                          text-xs sm:text-sm
                          font-medium text-center
                          hover:bg-white/10 transition">

                    Dashboard

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
    <main class="w-full max-w-7xl mx-auto
                 px-4 sm:px-6 lg:px-8
                 py-6 sm:py-8 lg:py-10">

        <!-- TÍTULO Y ACCIONES -->
        <div class="flex flex-col lg:flex-row
                    lg:items-center lg:justify-between
                    gap-5 mb-6 sm:mb-8">

            <div class="min-w-0">

                <p class="text-[10px] sm:text-xs
                          font-bold uppercase
                          tracking-[0.2em]
                          text-[#009ABD] mb-2">

                    Gestión de contenido

                </p>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl
                           font-bold text-[#044C7F]">

                    Mis proyectos

                </h2>

                <p class="text-sm sm:text-base
                          text-gray-500 mt-2
                          leading-relaxed">

                    Consulta los proyectos registrados
                    en Cooling Energy.

                </p>

            </div>

            <!-- TOTAL Y NUEVO PROYECTO -->
            <div class="grid grid-cols-1 sm:grid-cols-2
                        gap-3 w-full lg:w-auto
                        lg:shrink-0">

                <div class="flex items-center justify-center
                            gap-2 min-h-[48px]
                            bg-white border border-gray-200
                            rounded-lg px-5 py-3
                            text-sm text-gray-600">

                    Total:

                    <span class="font-bold text-[#044C7F]">

                        {{ $proyectos->count() }}

                    </span>

                </div>

                <a href="{{ route('admin.proyectos.create') }}"
                   class="inline-flex items-center
                          justify-center gap-2
                          min-h-[48px]
                          rounded-lg bg-[#044C7F]
                          hover:bg-[#009ABD]
                          px-5 py-3 text-sm
                          font-semibold text-white
                          transition">

                    <span class="text-lg leading-none">
                        +
                    </span>

                    Nuevo proyecto

                </a>

            </div>

        </div>

        <!-- MENSAJE DE ÉXITO -->
        @if (session('success'))

            <div role="status"
                 class="mb-6 rounded-xl
                        border border-green-200
                        bg-green-50
                        px-4 sm:px-5 py-4
                        text-sm font-medium
                        text-green-800 break-words">

                {{ session('success') }}

            </div>

        @endif

        <!-- MENSAJE DE ERROR -->
        @if (session('error'))

            <div role="alert"
                 class="mb-6 rounded-xl
                        border border-red-200
                        bg-red-50
                        px-4 sm:px-5 py-4
                        text-sm font-medium
                        text-red-800 break-words">

                {{ session('error') }}

            </div>

        @endif


        <!-- ====================================== -->
        <!-- VISTA PARA CELULARES Y TABLETS          -->
        <!-- ====================================== -->

        <div class="grid grid-cols-1 sm:grid-cols-2
                    gap-4 sm:gap-5 xl:hidden">

            @forelse ($proyectos as $proyecto)

                <article class="min-w-0 bg-white
                                rounded-xl sm:rounded-2xl
                                shadow-sm border
                                border-gray-100
                                overflow-hidden
                                flex flex-col">

                    <!-- IMAGEN DEL PROYECTO -->
                    <div class="relative bg-slate-100
                                aspect-[16/9]">

                        @if ($proyecto->imagen_principal)

                            <img
                                src="{{ asset(ltrim(str_replace('\\', '/', $proyecto->imagen_principal), '/')) }}"
                                alt="{{ $proyecto->nombre }}"
                                loading="lazy"
                                class="w-full h-full object-cover"
                            >

                        @else

                            <div class="w-full h-full
                                        flex items-center
                                        justify-center
                                        text-sm text-gray-400">

                                Sin imagen disponible

                            </div>

                        @endif

                        <!-- ESTADO -->
                        <div class="absolute top-3 right-3">

                            @if ($proyecto->publicado)

                                <span class="inline-flex
                                             rounded-full
                                             bg-green-100
                                             px-3 py-1.5
                                             text-xs font-semibold
                                             text-green-700
                                             shadow-sm">

                                    Publicado

                                </span>

                            @else

                                <span class="inline-flex
                                             rounded-full
                                             bg-gray-100
                                             px-3 py-1.5
                                             text-xs font-semibold
                                             text-gray-600
                                             shadow-sm">

                                    Oculto

                                </span>

                            @endif

                        </div>

                    </div>

                    <!-- INFORMACIÓN -->
                    <div class="p-4 sm:p-5 flex-1">

                        <h3 class="text-lg font-bold
                                   text-[#044C7F]
                                   leading-snug break-words">

                            {{ $proyecto->nombre }}

                        </h3>

                        <p class="text-xs text-gray-400
                                  mt-1 break-all">

                            {{ $proyecto->slug }}

                        </p>

                        <!-- DATOS DEL PROYECTO -->
                        <div class="mt-4 pt-4
                                    border-t border-gray-100
                                    space-y-3">

                            <div>

                                <p class="text-[10px]
                                          uppercase tracking-wider
                                          font-semibold
                                          text-[#009ABD]">

                                    Ubicación

                                </p>

                                <p class="text-sm
                                          text-gray-600 mt-1
                                          break-words">

                                    {{ $proyecto->ubicacion ?: 'No especificada' }}

                                </p>

                            </div>

                            <div>

                                <p class="text-[10px]
                                          uppercase tracking-wider
                                          font-semibold
                                          text-[#009ABD]">

                                    Especialidad

                                </p>

                                <p class="text-sm
                                          text-gray-600 mt-1
                                          break-words">

                                    {{ $proyecto->especialidad ?: 'No especificada' }}

                                </p>

                            </div>

                        </div>

                    </div>

                    <!-- ACCIONES DEL PROYECTO -->
                    <div class="border-t border-gray-100
                                p-4 sm:p-5">

                        <div class="grid grid-cols-2 gap-2">

                            <!-- EDITAR -->
                            <a href="{{ route('admin.proyectos.edit', $proyecto) }}"
                               class="inline-flex items-center
                                      justify-center
                                      min-h-[44px] w-full
                                      rounded-lg bg-blue-50
                                      px-3 py-2.5
                                      text-sm font-semibold
                                      text-[#044C7F]
                                      hover:bg-blue-100
                                      transition">

                                Editar

                            </a>

                            <!-- PUBLICAR / OCULTAR -->
                            <form
                                action="{{ route('admin.proyectos.estado', $proyecto) }}"
                                method="POST"
                                class="w-full">

                                @csrf
                                @method('PATCH')

                                <button type="submit"
                                        class="w-full min-h-[44px]
                                               rounded-lg
                                               px-3 py-2.5
                                               text-sm font-semibold
                                               transition cursor-pointer
                                               {{ $proyecto->publicado
                                                   ? 'bg-amber-50 text-amber-700 hover:bg-amber-100'
                                                   : 'bg-green-50 text-green-700 hover:bg-green-100' }}">

                                    {{ $proyecto->publicado ? 'Ocultar' : 'Publicar' }}

                                </button>

                            </form>

                            <!-- ELIMINAR -->
                            <form
                                action="{{ route('admin.proyectos.destroy', $proyecto) }}"
                                method="POST"
                                class="col-span-2"
                                onsubmit="return confirm('¿Estás seguro de eliminar este proyecto? Esta acción no se puede deshacer.');">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="w-full min-h-[44px]
                                               rounded-lg
                                               border border-red-100
                                               bg-red-50
                                               px-3 py-2.5
                                               text-sm font-semibold
                                               text-red-700
                                               hover:bg-red-100
                                               transition cursor-pointer">

                                    Eliminar proyecto

                                </button>

                            </form>

                        </div>

                    </div>

                </article>

            @empty

                <div class="col-span-full bg-white
                            rounded-2xl border
                            border-gray-100 shadow-sm
                            px-5 py-12 text-center">

                    <p class="text-gray-500 text-sm">

                        Todavía no hay proyectos registrados.

                    </p>

                    <a href="{{ route('admin.proyectos.create') }}"
                       class="inline-flex items-center
                              justify-center mt-5
                              rounded-lg bg-[#044C7F]
                              px-5 py-3 text-sm
                              font-semibold text-white
                              hover:bg-[#009ABD] transition">

                        + Crear primer proyecto

                    </a>

                </div>

            @endforelse

        </div>


        <!-- ====================================== -->
        <!-- VISTA DE TABLA PARA COMPUTADORAS        -->
        <!-- ====================================== -->

        <div class="hidden xl:block
                    bg-white rounded-2xl
                    shadow-sm border border-gray-100
                    overflow-hidden">

            <div class="overflow-x-auto">

                <table class="w-full min-w-[1000px] text-left">

                    <!-- ENCABEZADOS -->
                    <thead class="bg-slate-50
                                  border-b border-gray-200">

                        <tr class="text-xs uppercase
                                   tracking-wider
                                   text-gray-500">

                            <th scope="col" class="px-4 py-4">
                                Imagen
                            </th>

                            <th scope="col" class="px-4 py-4">
                                Proyecto
                            </th>

                            <th scope="col" class="px-4 py-4">
                                Ubicación
                            </th>

                            <th scope="col" class="px-4 py-4">
                                Especialidad
                            </th>

                            <th scope="col" class="px-4 py-4">
                                Estado
                            </th>

                            <th scope="col"
                                class="px-4 py-4 text-right">

                                Acciones

                            </th>

                        </tr>

                    </thead>

                    <!-- PROYECTOS -->
                    <tbody class="divide-y divide-gray-100">

                        @forelse ($proyectos as $proyecto)

                            <tr class="hover:bg-slate-50
                                       transition">

                                <!-- IMAGEN -->
                                <td class="px-4 py-4">

                                    @if ($proyecto->imagen_principal)

                                        <img
                                            src="{{ asset(ltrim(str_replace('\\', '/', $proyecto->imagen_principal), '/')) }}"
                                            alt="{{ $proyecto->nombre }}"
                                            loading="lazy"
                                            class="w-24 h-16
                                                   object-cover
                                                   rounded-lg"
                                        >

                                    @else

                                        <div class="w-24 h-16
                                                    bg-slate-100
                                                    rounded-lg
                                                    flex items-center
                                                    justify-center
                                                    text-xs
                                                    text-gray-400">

                                            Sin imagen

                                        </div>

                                    @endif

                                </td>

                                <!-- NOMBRE -->
                                <td class="px-4 py-4">

                                    <p class="font-semibold
                                              text-[#044C7F]
                                              break-words">

                                        {{ $proyecto->nombre }}

                                    </p>

                                    <p class="text-xs
                                              text-gray-400
                                              mt-1 break-all">

                                        {{ $proyecto->slug }}

                                    </p>

                                </td>

                                <!-- UBICACIÓN -->
                                <td class="px-4 py-4
                                           text-sm text-gray-600
                                           break-words">

                                    {{ $proyecto->ubicacion ?: 'No especificada' }}

                                </td>

                                <!-- ESPECIALIDAD -->
                                <td class="px-4 py-4
                                           text-sm text-gray-600
                                           break-words">

                                    {{ $proyecto->especialidad ?: 'No especificada' }}

                                </td>

                                <!-- ESTADO -->
                                <td class="px-4 py-4">

                                    @if ($proyecto->publicado)

                                        <span class="inline-flex
                                                     rounded-full
                                                     bg-green-50
                                                     px-3 py-1.5
                                                     text-xs
                                                     font-semibold
                                                     text-green-700">

                                            Publicado

                                        </span>

                                    @else

                                        <span class="inline-flex
                                                     rounded-full
                                                     bg-gray-100
                                                     px-3 py-1.5
                                                     text-xs
                                                     font-semibold
                                                     text-gray-600">

                                            Oculto

                                        </span>

                                    @endif

                                </td>

                                <!-- ACCIONES -->
                                <td class="px-4 py-4">

                                    <div class="flex items-center
                                                justify-end
                                                gap-2">

                                        <!-- EDITAR -->
                                        <a href="{{ route('admin.proyectos.edit', $proyecto) }}"
                                           class="inline-flex
                                                  items-center
                                                  justify-center
                                                  min-h-[40px]
                                                  rounded-lg
                                                  bg-blue-50
                                                  px-3 py-2
                                                  text-xs
                                                  font-semibold
                                                  text-[#044C7F]
                                                  hover:bg-blue-100
                                                  transition">

                                            Editar

                                        </a>

                                        <!-- PUBLICAR / OCULTAR -->
                                        <form
                                            action="{{ route('admin.proyectos.estado', $proyecto) }}"
                                            method="POST">

                                            @csrf
                                            @method('PATCH')

                                            <button
                                                type="submit"
                                                class="inline-flex
                                                       items-center
                                                       justify-center
                                                       min-h-[40px]
                                                       rounded-lg
                                                       px-3 py-2
                                                       text-xs
                                                       font-semibold
                                                       transition
                                                       cursor-pointer
                                                       {{ $proyecto->publicado
                                                           ? 'bg-amber-50 text-amber-700 hover:bg-amber-100'
                                                           : 'bg-green-50 text-green-700 hover:bg-green-100' }}">

                                                {{ $proyecto->publicado ? 'Ocultar' : 'Publicar' }}

                                            </button>

                                        </form>

                                        <!-- ELIMINAR -->
                                        <form
                                            action="{{ route('admin.proyectos.destroy', $proyecto) }}"
                                            method="POST"
                                            onsubmit="return confirm('¿Estás seguro de eliminar este proyecto? Esta acción no se puede deshacer.');">

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="inline-flex
                                                       items-center
                                                       justify-center
                                                       min-h-[40px]
                                                       rounded-lg
                                                       bg-red-50
                                                       px-3 py-2
                                                       text-xs
                                                       font-semibold
                                                       text-red-700
                                                       hover:bg-red-100
                                                       transition
                                                       cursor-pointer">

                                                Eliminar

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="6"
                                    class="px-6 py-16
                                           text-center
                                           text-gray-500">

                                    Todavía no hay proyectos registrados.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

        <!-- PIE DE PÁGINA -->
        <footer class="mt-6 sm:mt-8
                       pt-5 border-t border-gray-200
                       flex flex-col sm:flex-row
                       sm:items-center sm:justify-between
                       gap-2 sm:gap-4
                       text-center sm:text-left">

            <p class="text-xs text-gray-400
                      leading-relaxed">

                Los proyectos se consultan directamente
                desde la base de datos.

            </p>

            <p class="text-xs text-gray-400">

                Cooling Energy · Administración de proyectos

            </p>

        </footer>

    </main>

</body>
</html>
