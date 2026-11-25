<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Nuevo proyecto | Cooling Energy</title>

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
                      tracking-[0.2em]
                      text-[#009ABD] mb-2">

                Panel administrativo

            </p>

            <h2 class="text-2xl sm:text-3xl lg:text-4xl
                       font-bold text-[#044C7F]
                       leading-tight">

                Nuevo proyecto

            </h2>

            <p class="text-sm sm:text-base
                      text-gray-500 mt-2 leading-relaxed">

                Completa la información y selecciona
                las fotografías del proyecto.

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

                    Revisa los siguientes campos:

                </p>

                <ul class="list-disc pl-5 text-sm space-y-1">

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <!-- FORMULARIO -->
        <form action="{{ route('admin.proyectos.store') }}"
              method="POST"
              enctype="multipart/form-data"
              class="w-full min-w-0 space-y-4 sm:space-y-6">

            @csrf


            <!-- ====================================== -->
            <!-- INFORMACIÓN GENERAL                    -->
            <!-- ====================================== -->

            <section class="min-w-0 bg-white
                            rounded-xl sm:rounded-2xl
                            border border-gray-100
                            shadow-sm
                            p-4 sm:p-6 lg:p-8">

                <h3 class="text-lg sm:text-xl
                           font-bold text-[#044C7F]
                           mb-5 sm:mb-6">

                    Información general

                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2
                            gap-4 sm:gap-6">

                    <!-- NOMBRE DEL PROYECTO -->
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
                            value="{{ old('nombre') }}"
                            required
                            maxlength="255"
                            placeholder="Ej. Instalación HVAC - Hotel Riviera Maya"
                            class="block w-full min-w-0
                                   min-h-[48px]
                                   rounded-lg border border-gray-300
                                   px-3 sm:px-4 py-3 text-base
                                   focus:outline-none
                                   focus:border-[#009ABD]
                                   focus:ring-2 focus:ring-[#009ABD]/30
                                   transition"
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
                            value="{{ old('ubicacion') }}"
                            placeholder="Ej. Cancún, Quintana Roo"
                            class="block w-full min-w-0
                                   min-h-[48px]
                                   rounded-lg border border-gray-300
                                   px-3 sm:px-4 py-3 text-base
                                   focus:outline-none
                                   focus:border-[#009ABD]
                                   focus:ring-2 focus:ring-[#009ABD]/30
                                   transition"
                        >

                    </div>

                    <!-- AÑO O PERIODO -->
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
                            value="{{ old('periodo') }}"
                            maxlength="50"
                            placeholder="Ej. 2025-2026"
                            class="block w-full min-w-0
                                   min-h-[48px]
                                   rounded-lg border border-gray-300
                                   px-3 sm:px-4 py-3 text-base
                                   focus:outline-none
                                   focus:border-[#009ABD]
                                   focus:ring-2 focus:ring-[#009ABD]/30
                                   transition"
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
                                   focus:ring-2 focus:ring-[#009ABD]/30
                                   transition">

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
                                    @selected(old('especialidad') === $opcion)>

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
                                   focus:ring-2 focus:ring-[#009ABD]/30
                                   transition">

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
                                    @selected(old('tipo') === $opcion)>

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

                            Categoría (opcional)

                        </label>

                        <input
                            id="categoria"
                            type="text"
                            name="categoria"
                            value="{{ old('categoria') }}"
                            placeholder="Ej. Sistemas de climatización"
                            class="block w-full min-w-0
                                   min-h-[48px]
                                   rounded-lg border border-gray-300
                                   px-3 sm:px-4 py-3 text-base
                                   focus:outline-none
                                   focus:border-[#009ABD]
                                   focus:ring-2 focus:ring-[#009ABD]/30
                                   transition"
                        >

                    </div>

                </div>

            </section>


            <!-- ====================================== -->
            <!-- DESCRIPCIÓN Y ALCANCE                  -->
            <!-- ====================================== -->

            <section class="min-w-0 bg-white
                            rounded-xl sm:rounded-2xl
                            border border-gray-100
                            shadow-sm
                            p-4 sm:p-6 lg:p-8">

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

                            Descripción del proyecto

                        </label>

                        <textarea
                            id="descripcion"
                            name="descripcion"
                            rows="5"
                            placeholder="Describe los trabajos realizados..."
                            class="block w-full min-w-0
                                   min-h-[140px]
                                   rounded-lg border border-gray-300
                                   px-3 sm:px-4 py-3
                                   text-base leading-relaxed
                                   resize-y
                                   focus:outline-none
                                   focus:border-[#009ABD]
                                   focus:ring-2 focus:ring-[#009ABD]/30"
                        >{{ old('descripcion') }}</textarea>

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
                            placeholder="Ej. Ingeniería, suministro, instalación y puesta en marcha..."
                            class="block w-full min-w-0
                                   min-h-[120px]
                                   rounded-lg border border-gray-300
                                   px-3 sm:px-4 py-3
                                   text-base leading-relaxed
                                   resize-y
                                   focus:outline-none
                                   focus:border-[#009ABD]
                                   focus:ring-2 focus:ring-[#009ABD]/30"
                        >{{ old('alcance') }}</textarea>

                    </div>

                </div>

            </section>


            <!-- ====================================== -->
            <!-- FOTOGRAFÍAS DEL PROYECTO               -->
            <!-- ====================================== -->

            <section class="min-w-0 bg-white
                            rounded-xl sm:rounded-2xl
                            border border-gray-100
                            shadow-sm
                            p-4 sm:p-6 lg:p-8">

                <h3 class="text-lg sm:text-xl
                           font-bold text-[#044C7F]
                           mb-2">

                    Fotografías del proyecto

                </h3>

                <p class="text-sm text-gray-500
                          leading-relaxed mb-5 sm:mb-7">

                    Utiliza fotografías de buena calidad
                    y preferentemente en formato WEBP.

                </p>

                <div class="space-y-5 sm:space-y-7">

                    <!-- IMAGEN PRINCIPAL -->
                    <div class="min-w-0">

                        <label for="imagen_principal"
                               class="block text-sm font-semibold
                                      text-gray-700 mb-2">

                            Imagen principal / Banner
                            <span class="text-red-500">*</span>

                        </label>

                        <input
                            id="imagen_principal"
                            type="file"
                            name="imagen_principal"
                            accept=".webp,.jpg,.jpeg,.png,image/webp,image/jpeg,image/png"
                            required
                            class="block w-full min-w-0 max-w-full
                                   rounded-xl
                                   border border-dashed border-gray-300
                                   bg-slate-50
                                   p-3 sm:p-5
                                   text-xs sm:text-sm text-gray-600
                                   file:mr-2 sm:file:mr-4
                                   file:rounded-lg
                                   file:border-0
                                   file:bg-[#044C7F]
                                   file:px-3 sm:file:px-4
                                   file:py-3
                                   file:text-xs sm:file:text-sm
                                   file:font-semibold
                                   file:text-white
                                   hover:file:bg-[#009ABD]
                                   file:cursor-pointer"
                        >

                        <p class="text-xs text-gray-500
                                  mt-3 leading-relaxed">

                            Recomendado: 2560 × 1080 px.
                            Máximo: 10 MB.

                        </p>

                    </div>

                    <!-- SEPARADOR -->
                    <div class="border-t border-gray-100"></div>

                    <!-- GALERÍA -->
                    <div class="min-w-0">

                        <label for="galeria"
                               class="block text-sm font-semibold
                                      text-gray-700 mb-2">

                            Galería de fotografías

                        </label>

                        <input
                            id="galeria"
                            type="file"
                            name="galeria[]"
                            accept=".webp,.jpg,.jpeg,.png,image/webp,image/jpeg,image/png"
                            multiple
                            class="block w-full min-w-0 max-w-full
                                   rounded-xl
                                   border border-dashed border-gray-300
                                   bg-slate-50
                                   p-3 sm:p-5
                                   text-xs sm:text-sm text-gray-600
                                   file:mr-2 sm:file:mr-4
                                   file:rounded-lg
                                   file:border-0
                                   file:bg-[#044C7F]
                                   file:px-3 sm:file:px-4
                                   file:py-3
                                   file:text-xs sm:file:text-sm
                                   file:font-semibold
                                   file:text-white
                                   hover:file:bg-[#009ABD]
                                   file:cursor-pointer"
                        >

                        <p class="text-xs text-gray-500
                                  mt-3 leading-relaxed">

                            Puedes seleccionar hasta 30 imágenes.
                            Máximo: 10 MB por archivo.

                        </p>

                    </div>

                </div>

            </section>


            <!-- ====================================== -->
            <!-- AVISO DE PUBLICACIÓN                   -->
            <!-- ====================================== -->

            <div class="rounded-xl
                        border border-cyan-100
                        bg-cyan-50
                        p-4 sm:p-5">

                <p class="text-sm font-semibold
                          text-[#044C7F] mb-1">

                    Estado del nuevo proyecto

                </p>

                <p class="text-xs sm:text-sm
                          text-gray-600 leading-relaxed">

                    El proyecto se guardará como oculto
                    hasta que decidas publicarlo desde
                    la administración de proyectos.

                </p>

            </div>


            <!-- ====================================== -->
            <!-- BOTONES DE ACCIÓN                      -->
            <!-- ====================================== -->

            <div class="grid grid-cols-1 sm:grid-cols-2
                        gap-3 sm:gap-4
                        pt-2 sm:pt-3">

                <!-- GUARDAR PROYECTO -->
                <button
                    type="submit"
                    class="order-1 sm:order-2
                           inline-flex items-center justify-center
                           w-full min-h-[48px]
                           rounded-lg bg-[#044C7F]
                           px-5 sm:px-8 py-3.5
                           text-sm sm:text-base
                           font-semibold text-white
                           shadow-sm
                           hover:bg-[#009ABD]
                           transition cursor-pointer">

                    Guardar proyecto

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
