<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Administración | Cooling Energy</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen min-h-[100dvh]
             bg-slate-100 flex flex-col
             px-4 sm:px-6 lg:px-8
             py-6 sm:py-10">

    <!-- CONTENEDOR PRINCIPAL -->
    <main class="w-full flex flex-1
                 items-center justify-center">

        <!-- TARJETA DE INICIO DE SESIÓN -->
        <div class="w-full max-w-md min-w-0
                    bg-white rounded-xl sm:rounded-2xl
                    shadow-lg sm:shadow-xl
                    overflow-hidden">

            <!-- ENCABEZADO -->
            <div class="bg-[#044C7F]
                        px-4 sm:px-8
                        py-7 sm:py-10
                        text-center">

                <h1 class="text-white
                           text-2xl sm:text-3xl
                           font-bold tracking-wide
                           leading-tight">

                    COOLING ENERGY

                </h1>

                <p class="text-cyan-100
                          text-xs sm:text-sm mt-2">

                    Panel de administración

                </p>

            </div>

            <!-- CONTENIDO DEL FORMULARIO -->
            <div class="p-5 sm:p-8">

                <h2 class="text-xl sm:text-2xl
                           font-bold text-[#044C7F]
                           mb-2">

                    Iniciar sesión

                </h2>

                <p class="text-gray-500
                          text-sm leading-relaxed
                          mb-5 sm:mb-7">

                    Ingresa tus credenciales para continuar.

                </p>

                <!-- MENSAJES DE ERROR -->
                @if ($errors->any())

                    <div role="alert"
                         class="bg-red-50
                                border border-red-100
                                text-red-700
                                p-3 sm:p-4
                                rounded-lg mb-5
                                text-sm break-words">

                        {{ $errors->first() }}

                    </div>

                @endif

                <!-- FORMULARIO -->
                <form action="{{ route('admin.login.submit') }}"
                      method="POST"
                      class="w-full">

                    @csrf

                    <!-- CORREO ELECTRÓNICO -->
                    <div class="mb-4 sm:mb-5">

                        <label for="email"
                               class="block text-sm
                                      font-semibold
                                      text-gray-700 mb-2">

                            Correo electrónico

                        </label>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="username"
                            autocapitalize="none"
                            spellcheck="false"
                            inputmode="email"
                            placeholder="Correo administrativo"
                            class="block w-full min-w-0
                                   min-h-[48px]
                                   border border-gray-300
                                   rounded-lg
                                   px-3 sm:px-4 py-3
                                   text-base
                                   text-gray-700
                                   placeholder:text-gray-400
                                   focus:outline-none
                                   focus:border-[#009ABD]
                                   focus:ring-2
                                   focus:ring-[#009ABD]/30
                                   transition"
                        >

                    </div>

                    <!-- CONTRASEÑA -->
                    <div class="mb-6 sm:mb-7">

                        <label for="password"
                               class="block text-sm
                                      font-semibold
                                      text-gray-700 mb-2">

                            Contraseña

                        </label>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="Ingresa tu contraseña"
                            class="block w-full min-w-0
                                   min-h-[48px]
                                   border border-gray-300
                                   rounded-lg
                                   px-3 sm:px-4 py-3
                                   text-base
                                   text-gray-700
                                   placeholder:text-gray-400
                                   focus:outline-none
                                   focus:border-[#009ABD]
                                   focus:ring-2
                                   focus:ring-[#009ABD]/30
                                   transition"
                        >

                    </div>

                    <!-- BOTÓN DE ACCESO -->
                    <button
                        type="submit"
                        class="w-full min-h-[48px]
                               bg-[#044C7F]
                               hover:bg-[#009ABD]
                               active:bg-[#033B63]
                               text-white
                               text-sm sm:text-base
                               font-semibold
                               px-4 py-3
                               rounded-lg
                               transition-colors
                               cursor-pointer
                               focus-visible:outline-2
                               focus-visible:outline-offset-2
                               focus-visible:outline-[#009ABD]"
                    >

                        Iniciar sesión

                    </button>

                </form>

            </div>

            <!-- PIE DE PÁGINA -->
            <footer class="border-t border-gray-100
                           px-4 py-4 sm:py-5
                           text-center">

                <p class="text-xs text-gray-400
                          leading-relaxed">

                    © {{ date('Y') }} Cooling Energy

                </p>

            </footer>

        </div>

    </main>

</body>
</html>
