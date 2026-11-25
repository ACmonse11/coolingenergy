<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Editar proyecto | Cooling Energy</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen bg-slate-100">

    <!-- ENCABEZADO -->
    <header class="bg-[#044C7F] text-white shadow-sm">

        <div class="max-w-6xl mx-auto
                    px-4 sm:px-6 lg:px-8
                    py-4 sm:py-5
                    flex flex-col sm:flex-row
                    sm:items-center sm:justify-between
                    gap-4">

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

            <a href="{{ route('admin.proyectos.index') }}"
               class="inline-flex items-center justify-center
                      w-full sm:w-auto min-h-[44px]
                      rounded-lg bg-white/10
                      border border-white/20
                      px-4 sm:px-5 py-2.5
                      text-sm font-medium
                      hover:bg-white/20 transition">

                Volver a proyectos

            </a>

        </div>

    </header>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="w-full max-w-5xl mx-auto
                 px-4 sm:px-6 lg:px-8
                 py-6 sm:py-8 lg:py-10">

        <!-- TÍTULO -->
        <div class="mb-6 sm:mb-8">

            <p class="text-[10px] sm:text-xs
                      font-bold uppercase
                      tracking-widest text-[#009ABD]
                      mb-2">

                Panel administrativo

            </p>

            <h2 class="text-2xl sm:text-3xl lg:text-4xl
                       font-bold text-[#044C7F]
                       leading-tight">

                Editar proyecto

            </h2>

            <p class="text-sm sm:text-base
                      text-gray-500 mt-2 break-words">

                {{ $proyecto->nombre }}

            </p>

        </div>

        <!-- MENSAJES DE VALIDACIÓN -->
        @if ($errors->any())

            <div role="alert"
                 class="mb-6 rounded-xl
                        border border-red-200
                        bg-red-50
                        p-4 sm:p-5
                        text-red-700 break-words">

                <p class="font-semibold text-sm sm:text-base mb-2">

                    Revisa los siguientes errores:

                </p>

                <ul class="list-disc pl-5 text-sm space-y-1">

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <!-- FORMULARIO -->
        <form action="{{ route('admin.proyectos.update', $proyecto) }}"
              method="POST"
              enctype="multipart/form-data"
              class="w-full min-w-0 space-y-4 sm:space-y-6">

            @csrf
            @method('PUT')


            <!-- ====================================== -->
            <!-- INFORMACIÓN GENERAL                    -->
            <!-- ====================================== -->

            <section class="min-w-0 rounded-xl sm:rounded-2xl
                            bg-white
                            p-4 sm:p-6 lg:p-8
                            shadow-sm border border-gray-100">

                <h3 class="text-lg sm:text-xl
                           font-bold text-[#044C7F]
                           mb-5 sm:mb-6">

                    Información general

                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2
                            gap-4 sm:gap-6">

                    <!-- NOMBRE -->
                    <div class="min-w-0 md:col-span-2">

                        <label for="nombre"
                               class="block text-sm font-semibold
                                      text-gray-700 mb-2">

                            Nombre del proyecto
                            <span class="text-red-500">*</span>

                        </label>

                        <input
                            id="nombre"
                            type="text"
                            name="nombre"
                            required
                            maxlength="255"
                            value="{{ old('nombre', $proyecto->nombre) }}"
                            class="block w-full min-w-0
                                   min-h-[48px]
                                   rounded-lg border border-gray-300
                                   px-3 sm:px-4 py-3 text-base
                                   focus:outline-none
                                   focus:border-[#009ABD]
                                   focus:ring-2 focus:ring-[#009ABD]/30"
                        >

                    </div>

                    <!-- UBICACIÓN -->
                    <div class="min-w-0">

                        <label for="ubicacion"
                               class="block text-sm font-semibold
                                      text-gray-700 mb-2">

                            Ubicación

                        </label>

                        <input
                            id="ubicacion"
                            type="text"
                            name="ubicacion"
                            value="{{ old('ubicacion', $proyecto->ubicacion) }}"
                            class="block w-full min-w-0
                                   min-h-[48px]
                                   rounded-lg border border-gray-300
                                   px-3 sm:px-4 py-3 text-base
                                   focus:outline-none
                                   focus:border-[#009ABD]
                                   focus:ring-2 focus:ring-[#009ABD]/30"
                        >

                    </div>

                    <!-- PERIODO -->
                    <div class="min-w-0">

                        <label for="periodo"
                               class="block text-sm font-semibold
                                      text-gray-700 mb-2">

                            Año o periodo

                        </label>

                        <input
                            id="periodo"
                            type="text"
                            name="periodo"
                            maxlength="50"
                            value="{{ old('periodo', $proyecto->periodo) }}"
                            class="block w-full min-w-0
                                   min-h-[48px]
                                   rounded-lg border border-gray-300
                                   px-3 sm:px-4 py-3 text-base
                                   focus:outline-none
                                   focus:border-[#009ABD]
                                   focus:ring-2 focus:ring-[#009ABD]/30"
                        >

                    </div>

                    <!-- ESPECIALIDAD -->
                    <div class="min-w-0">

                        <label for="especialidad"
                               class="block text-sm font-semibold
                                      text-gray-700 mb-2">

                            Especialidad

                        </label>

                        <select
                            id="especialidad"
                            name="especialidad"
                            class="block w-full min-w-0
                                   min-h-[48px]
                                   rounded-lg border border-gray-300
                                   bg-white
                                   px-3 sm:px-4 py-3 text-base
                                   focus:outline-none
                                   focus:border-[#009ABD]
                                   focus:ring-2 focus:ring-[#009ABD]/30">

                            <option value="">
                                Selecciona una especialidad
                            </option>

                            @foreach ([
                                'HVAC',
                                'PCI',
                                'Mantenimiento',
                                'HVAC y PCI',
                                'Instalaciones especializadas'
                            ] as $opcion)

                                <option
                                    value="{{ $opcion }}"
                                    @selected(old('especialidad', $proyecto->especialidad) === $opcion)>

                                    {{ $opcion }}

                                </option>

                            @endforeach

                        </select>

                    </div>

                    <!-- TIPO DE PROYECTO -->
                    <div class="min-w-0">

                        <label for="tipo"
                               class="block text-sm font-semibold
                                      text-gray-700 mb-2">

                            Tipo de proyecto

                        </label>

                        <select
                            id="tipo"
                            name="tipo"
                            class="block w-full min-w-0
                                   min-h-[48px]
                                   rounded-lg border border-gray-300
                                   bg-white
                                   px-3 sm:px-4 py-3 text-base
                                   focus:outline-none
                                   focus:border-[#009ABD]
                                   focus:ring-2 focus:ring-[#009ABD]/30">

                            <option value="">
                                Selecciona un tipo
                            </option>

                            @foreach ([
                                'Hotelero',
                                'Comercial',
                                'Residencial',
                                'Industrial',
                                'Educativo',
                                'Institucional',
                                'Otro'
                            ] as $opcion)

                                <option
                                    value="{{ $opcion }}"
                                    @selected(old('tipo', $proyecto->tipo) === $opcion)>

                                    {{ $opcion }}

                                </option>

                            @endforeach

                        </select>

                    </div>

                    <!-- CATEGORÍA -->
                    <div class="min-w-0 md:col-span-2">

                        <label for="categoria"
                               class="block text-sm font-semibold
                                      text-gray-700 mb-2">

                            Categoría

                        </label>

                        <input
                            id="categoria"
                            type="text"
                            name="categoria"
                            value="{{ old('categoria', $proyecto->categoria) }}"
                            class="block w-full min-w-0
                                   min-h-[48px]
                                   rounded-lg border border-gray-300
                                   px-3 sm:px-4 py-3 text-base
                                   focus:outline-none
                                   focus:border-[#009ABD]
                                   focus:ring-2 focus:ring-[#009ABD]/30"
                        >

                    </div>

                </div>

            </section>


            <!-- ====================================== -->
            <!-- DESCRIPCIÓN Y ALCANCE                  -->
            <!-- ====================================== -->

            <section class="min-w-0 rounded-xl sm:rounded-2xl
                            bg-white
                            p-4 sm:p-6 lg:p-8
                            shadow-sm border border-gray-100">

                <h3 class="text-lg sm:text-xl
                           font-bold text-[#044C7F]
                           mb-5 sm:mb-6">

                    Descripción y alcance

                </h3>

                <div class="space-y-4 sm:space-y-6">

                    <!-- DESCRIPCIÓN -->
                    <div class="min-w-0">

                        <label for="descripcion"
                               class="block text-sm font-semibold
                                      text-gray-700 mb-2">

                            Descripción

                        </label>

                        <textarea
                            id="descripcion"
                            name="descripcion"
                            rows="5"
                            class="block w-full min-w-0
                                   min-h-[140px]
                                   rounded-lg border border-gray-300
                                   px-3 sm:px-4 py-3
                                   text-base leading-relaxed
                                   resize-y
                                   focus:outline-none
                                   focus:border-[#009ABD]
                                   focus:ring-2 focus:ring-[#009ABD]/30"
                        >{{ old('descripcion', $proyecto->descripcion) }}</textarea>

                    </div>

                    <!-- ALCANCE -->
                    <div class="min-w-0">

                        <label for="alcance"
                               class="block text-sm font-semibold
                                      text-gray-700 mb-2">

                            Alcance de los trabajos

                        </label>

                        <textarea
                            id="alcance"
                            name="alcance"
                            rows="4"
                            class="block w-full min-w-0
                                   min-h-[120px]
                                   rounded-lg border border-gray-300
                                   px-3 sm:px-4 py-3
                                   text-base leading-relaxed
                                   resize-y
                                   focus:outline-none
                                   focus:border-[#009ABD]
                                   focus:ring-2 focus:ring-[#009ABD]/30"
                        >{{ old('alcance', $proyecto->alcance) }}</textarea>

                    </div>

                </div>

            </section>


            <!-- ====================================== -->
            <!-- IMAGEN PRINCIPAL                       -->
            <!-- ====================================== -->

            <section class="min-w-0 rounded-xl sm:rounded-2xl
                            bg-white
                            p-4 sm:p-6 lg:p-8
                            shadow-sm border border-gray-100">

                <h3 class="text-lg sm:text-xl
                           font-bold text-[#044C7F]
                           mb-4 sm:mb-5">

                    Imagen principal

                </h3>

                <!-- BANNER ACTUAL -->
                @if ($proyecto->imagen_principal)

                    <div class="mb-5">

                        <p class="text-xs font-semibold
                                  uppercase tracking-wider
                                  text-[#009ABD] mb-3">

                            Banner actual

                        </p>

                        <div class="w-full overflow-hidden
                                    rounded-xl bg-slate-100">

                            <img
                                src="{{ asset(ltrim(str_replace('\\', '/', $proyecto->imagen_principal), '/')) }}"
                                alt="{{ $proyecto->nombre }}"
                                class="block w-full h-auto
                                       max-h-[320px]
                                       object-contain"
                            >

                        </div>

                    </div>

                @endif

                <!-- REEMPLAZAR BANNER -->
                <label for="imagen_principal"
                       class="block text-sm font-semibold
                              text-gray-700 mb-2">

                    Reemplazar banner

                </label>

                <input
                    id="imagen_principal"
                    type="file"
                    name="imagen_principal"
                    accept=".webp,.jpg,.jpeg,.png"
                    class="block w-full min-w-0 max-w-full
                           rounded-xl
                           border border-dashed border-gray-300
                           bg-slate-50
                           p-3 sm:p-5
                           text-xs sm:text-sm text-gray-500
                           file:mr-2 sm:file:mr-4
                           file:rounded-lg
                           file:border-0
                           file:bg-cyan-50
                           file:px-3 sm:file:px-4
                           file:py-3
                           file:text-xs sm:file:text-sm
                           file:font-semibold
                           file:text-[#044C7F]
                           hover:file:bg-cyan-100
                           file:cursor-pointer"
                >

                <p class="text-xs text-gray-500
                          mt-3 leading-relaxed">

                    Si no seleccionas otra imagen,
                    se conservará el banner actual.

                    Máximo 10 MB.

                </p>

            </section>


            <!-- ====================================== -->
            <!-- GALERÍA DE FOTOGRAFÍAS                 -->
            <!-- ====================================== -->

            <section class="min-w-0 rounded-xl sm:rounded-2xl
                            bg-white
                            p-4 sm:p-6 lg:p-8
                            shadow-sm border border-gray-100">

                <h3 class="text-lg sm:text-xl
                           font-bold text-[#044C7F]
                           mb-2">

                    Galería de fotografías

                </h3>

                <p class="text-sm text-gray-500
                          leading-relaxed mb-5 sm:mb-6">

                    Selecciona las fotografías que deseas
                    retirar o agrega nuevas imágenes.

                </p>

                @if (count($proyecto->galeria ?? []) > 0)

                    <!-- CONTADOR DE FOTOGRAFÍAS -->
                    <div class="mb-4">

                        <span class="inline-flex items-center
                                     rounded-lg bg-cyan-50
                                     px-3 py-2 text-xs
                                     font-semibold text-[#044C7F]">

                            {{ count($proyecto->galeria) }}
                            fotografías registradas

                        </span>

                    </div>

                    <!-- GALERÍA RESPONSIVA -->
                    <div class="grid grid-cols-1
                                sm:grid-cols-2
                                lg:grid-cols-3
                                gap-3 sm:gap-5
                                mb-6 sm:mb-8">

                        @foreach ($proyecto->galeria as $indice => $imagen)

                            <div class="min-w-0 rounded-xl
                                        border border-gray-200
                                        overflow-hidden
                                        bg-white">

                                <!-- FOTOGRAFÍA -->
                                <div class="aspect-[16/10]
                                            bg-slate-100
                                            overflow-hidden">

                                    <img
                                        src="{{ asset(ltrim(str_replace('\\', '/', $imagen), '/')) }}"
                                        alt="Fotografía {{ $indice + 1 }}"
                                        loading="lazy"
                                        class="block w-full h-full
                                               object-cover"
                                    >

                                </div>

                                <!-- SELECCIONAR PARA RETIRAR -->
                                <label class="flex items-center
                                              gap-3 p-3 sm:p-4
                                              min-h-[48px]
                                              text-xs sm:text-sm
                                              text-gray-600
                                              cursor-pointer
                                              hover:bg-red-50
                                              transition">

                                    <input
                                        type="checkbox"
                                        name="eliminar_galeria[]"
                                        value="{{ $indice }}"
                                        @checked(in_array($indice, old('eliminar_galeria', [])))
                                        class="w-5 h-5 shrink-0
                                               rounded border-gray-300
                                               accent-red-600
                                               cursor-pointer"
                                    >

                                    <span class="leading-snug">

                                        Retirar fotografía

                                    </span>

                                </label>

                            </div>

                        @endforeach

                    </div>

                    <!-- AVISO -->
                    <div class="mb-6 rounded-lg
                                border border-amber-200
                                bg-amber-50
                                p-3 sm:p-4
                                text-xs sm:text-sm
                                text-amber-800
                                leading-relaxed">

                        Las fotografías seleccionadas se
                        retirarán al guardar los cambios.

                    </div>

                @else

                    <div class="rounded-xl
                                border border-dashed
                                border-gray-200
                                bg-slate-50
                                px-4 py-8
                                text-center mb-6">

                        <p class="text-sm text-gray-500">

                            Este proyecto todavía no tiene
                            fotografías en su galería.

                        </p>

                    </div>

                @endif

                <!-- AGREGAR FOTOGRAFÍAS -->
                <label for="galeria"
                       class="block text-sm font-semibold
                              text-gray-700 mb-2">

                    Agregar fotografías

                </label>

                <input
                    id="galeria"
                    type="file"
                    name="galeria[]"
                    accept=".webp,.jpg,.jpeg,.png"
                    multiple
                    class="block w-full min-w-0 max-w-full
                           rounded-xl
                           border border-dashed border-gray-300
                           bg-slate-50
                           p-3 sm:p-5
                           text-xs sm:text-sm text-gray-500
                           file:mr-2 sm:file:mr-4
                           file:rounded-lg
                           file:border-0
                           file:bg-cyan-50
                           file:px-3 sm:file:px-4
                           file:py-3
                           file:text-xs sm:file:text-sm
                           file:font-semibold
                           file:text-[#044C7F]
                           hover:file:bg-cyan-100
                           file:cursor-pointer"
                >

                <p class="text-xs text-gray-500
                          mt-3 leading-relaxed">

                    Máximo 30 fotografías en total
                    y 10 MB por archivo.

                </p>

            </section>


            <!-- ====================================== -->
            <!-- BOTONES DE ACCIÓN                      -->
            <!-- ====================================== -->

            <div class="grid grid-cols-1 sm:grid-cols-2
                        gap-3 sm:gap-4
                        pt-2 sm:pt-3">

                <!-- GUARDAR CAMBIOS -->
                <button
                    type="submit"
                    class="order-1 sm:order-2
                           inline-flex items-center justify-center
                           w-full min-h-[48px]
                           rounded-lg bg-[#044C7F]
                           px-5 sm:px-8 py-3.5
                           text-sm sm:text-base
                           font-semibold text-white
                           hover:bg-[#009ABD]
                           transition cursor-pointer">

                    Guardar cambios

                </button>

                <!-- CANCELAR -->
                <a href="{{ route('admin.proyectos.index') }}"
                   class="order-2 sm:order-1
                          inline-flex items-center justify-center
                          w-full min-h-[48px]
                          rounded-lg
                          border border-gray-200
                          bg-white
                          px-5 sm:px-8 py-3.5
                          text-sm sm:text-base
                          font-semibold text-gray-600
                          hover:bg-slate-50
                          hover:text-[#044C7F]
                          transition">

                    Cancelar

                </a>

            </div>

        </form>

        <!-- PIE DE PÁGINA -->
        <footer class="mt-6 sm:mt-8
                       pt-5 border-t border-gray-200
                       flex flex-col sm:flex-row
                       sm:items-center sm:justify-between
                       gap-2 sm:gap-4
                       text-center sm:text-left">

            <p class="text-xs text-gray-400">

                Cooling Energy · Administración de proyectos

            </p>

            <p class="text-xs text-gray-400">

                Acceso exclusivo para administradores

            </p>

        </footer>

    </main>

</body>
</html>
