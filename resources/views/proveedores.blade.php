
@extends('layouts.app')

@section('title', 'Proveedores | Cooling Energy')

@section('description', 'Forma parte de nuestra red de proveedores. Comparte la información de tu empresa y tu catálogo comercial con Cooling Energy.')

@section('content')

<section class="ce-proveedores bg-[#F5F7F9] text-[#044C7F]">

    {{-- HERO --}}
    <div class="relative overflow-hidden bg-[#044C7F] text-white">

        <div class="absolute inset-0 pointer-events-none opacity-20"
             style="background-image:linear-gradient(rgba(255,255,255,.12) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.12) 1px,transparent 1px);background-size:70px 70px;">
        </div>

        <div class="relative mx-auto max-w-7xl px-6 lg:px-8 pt-16 pb-12 lg:pt-20 lg:pb-16">

            <div class="flex flex-wrap justify-between gap-4 text-[10px] font-bold uppercase tracking-[.25em] text-[#80DDEA]">
                <span>Cooling Energy / Alianzas comerciales</span>
                <span>Red de proveedores</span>
            </div>

            <div class="grid lg:grid-cols-12 gap-10 items-center mt-12">

                <div class="lg:col-span-7">

                    <span class="inline-flex items-center gap-3 text-xs font-semibold uppercase tracking-[.2em] text-[#80DDEA]">
                        <span class="h-[2px] w-9 bg-[#E31F1E]"></span>
                        Crezcamos Juntos
                    </span>

                    <h1 class="mt-7 text-4xl sm:text-5xl lg:text-[66px] font-semibold leading-[1.03] tracking-[-.045em]">
                        Grandes Proyectos.
                        <span class="block text-[#69D6E8]">
                            Mejores Aliados.
                        </span>
                    </h1>

                    <p class="mt-7 max-w-xl text-base leading-8 text-white/75">
                        Conecta tu empresa con nuevas oportunidades.
                        Presenta tus productos, equipos y servicios
                        a Cooling Energy.
                    </p>

                    <a href="#registro-proveedores"
                       class="mt-9 inline-flex items-center gap-5 border border-white/30 px-6 py-4 text-xs font-bold uppercase tracking-[.12em] transition hover:border-[#69D6E8] hover:bg-white/10">
                        Presentar mi empresa
                        <span class="text-xl font-normal">↗</span>
                    </a>

                </div>

                <div class="lg:col-span-5">

                    <div class="relative overflow-hidden border border-white/15 bg-[#023657]">

                        {{-- Sustituye esta ruta por una fotografía real de Cooling Energy --}}
                        <img
                            src="{{ asset('images/ingenieria-pci-sistemas-contra-incendios.webp') }}"
                            alt="Instalaciones y equipos industriales HVAC"
                            class="h-[270px] sm:h-[350px] lg:h-[420px] w-full object-cover"
                            onerror="this.style.display='none';this.parentElement.classList.add('ce-image-fallback')"
                        >

                        <div class="absolute inset-0 bg-gradient-to-t from-[#023657]/65 via-transparent to-transparent pointer-events-none"></div>

                        <div class="absolute bottom-5 left-6 right-6 flex items-center justify-between text-white">
                            <span class="text-[10px] font-bold uppercase tracking-[.18em]">
                                Ingeniería & Mantenimiento
                            </span>
                            <span class="text-[#69D6E8] text-xl">+</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="h-[4px] w-24 bg-[#E31F1E]"></div>

    </div>

    {{-- PRESENTACIÓN --}}
    <div class="mx-auto max-w-7xl px-6 lg:px-8 pt-16 lg:pt-24">

        <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-start">

            <div class="lg:col-span-5">

                <div class="flex items-center gap-3">
                    <span class="h-[2px] w-8 bg-[#009ABD]"></span>
                    <span class="text-[11px] font-bold uppercase tracking-[.22em] text-[#009ABD]">
                        Nuestra red comercial
                    </span>
                </div>

                <h2 class="mt-6 text-3xl sm:text-4xl lg:text-[46px] leading-[1.12] font-semibold tracking-[-.04em]">
                    Tu Empresa Puede Ser Parte De
                    <span class="text-[#009ABD]">
                        Nuestros Proyectos.
                    </span>
                </h2>

                <p class="mt-7 text-sm leading-8 text-slate-600">
                    Buscamos conocer empresas que ofrezcan
                    soluciones para la industria HVAC,
                    protección contra incendios, materiales,
                    suministros y servicios especializados.
                </p>

                <p class="mt-4 text-sm leading-8 text-slate-600">
                    Comparte tu catálogo comercial y permite
                    que nuestro equipo conozca lo que tu empresa
                    puede aportar a nuestros proyectos.
                </p>

                <div class="mt-10 border-t border-[#044C7F]/15">

                    <div class="ce-benefit">
                        <span>01</span>
                        <div>
                            <strong>Presenta tu empresa</strong>
                            <p>Comparte tus datos de contacto y especialidad.</p>
                        </div>
                    </div>

                    <div class="ce-benefit">
                        <span>02</span>
                        <div>
                            <strong>Comparte tus soluciones</strong>
                            <p>Adjunta tu catálogo comercial en PDF.</p>
                        </div>
                    </div>

                    <div class="ce-benefit">
                        <span>03</span>
                        <div>
                            <strong>Conectemos comercialmente</strong>
                            <p>Tu información llegará a nuestro equipo para revisión.</p>
                        </div>
                    </div>

                </div>

                <p class="mt-8 text-xs leading-6 text-slate-400">
                    El envío de información no garantiza la
                    incorporación a nuestra red de proveedores
                    ni constituye una contratación.
                </p>

            </div>

            {{-- FORMULARIO --}}
            <div id="registro-proveedores" class="lg:col-span-7 scroll-mt-28">

                <div class="bg-white border border-[#044C7F]/10">

                    <div class="border-t-[5px] border-[#009ABD] px-6 sm:px-9 lg:px-11 pt-9 pb-8">

                        <div class="flex items-center justify-between gap-5">
                            <span class="text-[10px] uppercase tracking-[.22em] font-bold text-[#009ABD]">
                                Registro comercial
                            </span>
                            <span class="text-[10px] font-semibold text-[#044C7F]/40">
                                CE / PROVEEDORES
                            </span>
                        </div>

                        <h2 class="mt-5 text-2xl sm:text-3xl font-semibold tracking-[-.035em]">
                            Presenta tu empresa
                        </h2>

                        <p class="mt-3 text-sm leading-7 text-slate-500">
                            Completa el formulario y adjunta tu catálogo.
                            Los campos marcados con * son obligatorios.
                        </p>

                    </div>

                    @if(session('success'))
                        <div role="status" class="mx-6 sm:mx-9 lg:mx-11 mb-5 border-l-4 border-[#009ABD] bg-cyan-50 p-4 text-sm text-[#044C7F]">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div role="alert" class="mx-6 sm:mx-9 lg:mx-11 mb-5 border-l-4 border-red-500 bg-red-50 p-4 text-sm text-red-700">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div role="alert" class="mx-6 sm:mx-9 lg:mx-11 mb-5 border-l-4 border-red-500 bg-red-50 p-4 text-sm text-red-700">
                            <strong>Revisa la información:</strong>
                            <ul class="mt-2 list-disc pl-5 space-y-1">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form
                        id="ce-form-proveedores"
                        action="{{ route('proveedores.enviar') }}"
                        method="POST"
                        enctype="multipart/form-data"
                        class="px-6 sm:px-9 lg:px-11 pb-10"
                    >
                        @csrf

                        <div class="ce-form-section">
                            <span>01 / Datos de la empresa</span>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-x-7 gap-y-7 mt-7">

                            <div class="ce-field sm:col-span-2">
                                <label for="empresa">Nombre de la empresa *</label>
                                <input
                                    type="text"
                                    id="empresa"
                                    name="empresa"
                                    value="{{ old('empresa') }}"
                                    maxlength="255"
                                    autocomplete="organization"
                                    placeholder="Razón social o nombre comercial"
                                    required
                                >
                            </div>

                            <div class="ce-field">
                                <label for="contacto">Nombre del contacto *</label>
                                <input
                                    type="text"
                                    id="contacto"
                                    name="contacto"
                                    value="{{ old('contacto') }}"
                                    maxlength="255"
                                    autocomplete="name"
                                    placeholder="Nombre completo"
                                    required
                                >
                            </div>

                            <div class="ce-field">
                                <label for="telefono">Teléfono *</label>
                                <input
                                    type="tel"
                                    id="telefono"
                                    name="telefono"
                                    value="{{ old('telefono') }}"
                                    maxlength="30"
                                    autocomplete="tel"
                                    placeholder="Número de contacto"
                                    required
                                >
                            </div>

                            <div class="ce-field sm:col-span-2">
                                <label for="email">Correo electrónico *</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    maxlength="255"
                                    autocomplete="email"
                                    placeholder="correo@empresa.com"
                                    required
                                >
                            </div>

                        </div>

                        <div class="ce-form-section mt-11">
                            <span>02 / Productos y servicios</span>
                        </div>

                        <div class="mt-7 ce-field">
                            <label for="categoria">Especialidad de la empresa *</label>
                            <select id="categoria" name="categoria" required>
                                <option value="">Selecciona una categoría</option>

                                @foreach([
                                    'Equipos HVAC',
                                    'Protección contra incendios',
                                    'Materiales y suministros',
                                    'Instalaciones y servicios especializados',
                                    'Herramientas y refacciones',
                                    'Otros'
                                ] as $categoria)
                                    <option
                                        value="{{ $categoria }}"
                                        @selected(old('categoria') === $categoria)
                                    >
                                        {{ $categoria }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-7 ce-field">
                            <label for="mensaje">Información adicional (opcional)</label>
                            <textarea
                                id="mensaje"
                                name="mensaje"
                                rows="4"
                                maxlength="3000"
                                placeholder="Describe brevemente los productos o servicios de tu empresa...">{{ old('mensaje') }}</textarea>
                        </div>

                        <div class="ce-form-section mt-11">
                            <span>03 / Catálogo comercial</span>
                        </div>

                        <div class="mt-7 border border-dashed border-[#009ABD]/40 bg-[#F4FAFC] p-5 sm:p-7">

                            <div class="flex items-center gap-4">
                                <div class="flex h-12 w-12 shrink-0 items-center justify-center bg-white text-[#009ABD]">
                                    <svg width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                                        <path d="M12 16V4m0 0L7 9m5-5 5 5"/>
                                        <path d="M4 16v3a1 1 0 001 1h14a1 1 0 001-1v-3"/>
                                    </svg>
                                </div>

                                <div>
                                    <label for="catalogo" class="block text-sm font-semibold">
                                        Adjuntar catálogo PDF *
                                    </label>
                                    <p class="mt-1 text-xs text-slate-500">
                                        PDF · Tamaño máximo de 2 MB
                                    </p>
                                </div>
                            </div>

                            <input
                                type="file"
                                id="catalogo"
                                name="catalogo"
                                accept=".pdf,application/pdf"
                                required
                                class="mt-5 block w-full text-xs text-slate-600
                                       file:mr-4 file:border-0 file:bg-[#044C7F]
                                       file:px-4 file:py-3 file:font-semibold
                                       file:text-white file:cursor-pointer
                                       hover:file:bg-[#009ABD]"
                            >

                            <p id="ce-archivo-nombre" class="mt-3 text-xs text-slate-500" aria-live="polite">
                                Ningún archivo seleccionado.
                            </p>
                        </div>

                        <div class="mt-8">
                            <label class="flex items-start gap-3 text-xs leading-6 text-slate-500">
                                <input
                                    type="checkbox"
                                    name="privacidad"
                                    value="1"
                                    required
                                    @checked(old('privacidad'))
                                    class="mt-1 accent-[#044C7F]"
                                >
                                <span>
                                    Acepto el tratamiento de mis datos personales
                                    conforme al aviso de privacidad de Cooling Energy. *
                                </span>
                            </label>
                        </div>

                        <div class="mt-9 border-t border-[#044C7F]/10 pt-7">

                            <button
                                type="submit"
                                id="ce-enviar-proveedor"
                                class="group flex w-full items-center justify-between bg-[#044C7F] text-white transition hover:bg-[#023657]"
                            >
                                <span class="px-6 py-5 text-xs font-bold uppercase tracking-[.16em]">
                                    Enviar catálogo
                                </span>
                                <span class="flex h-[60px] w-[60px] items-center justify-center bg-[#009ABD] text-xl transition group-hover:bg-[#0088A8]">
                                    ↗
                                </span>
                            </button>

                            <p class="mt-4 text-center text-xs leading-6 text-slate-400">
                                Tu información se enviará directamente
                                al equipo comercial de Cooling Energy.
                            </p>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    {{-- CIERRE --}}
    <div class="mt-20 lg:mt-28 bg-[#023657] text-white">

        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-12 lg:py-16">

            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-8">

                <div>
                    <span class="text-[#69D6E8] text-[10px] font-bold uppercase tracking-[.2em]">
                        Cooling Energy / México
                    </span>

                    <h2 class="mt-4 text-2xl sm:text-3xl font-semibold tracking-[-.03em]">
                        Las grandes soluciones comienzan
                        <span class="text-[#69D6E8]">con buenas alianzas.</span>
                    </h2>
                </div>

                <a href="#registro-proveedores"
                   class="inline-flex shrink-0 items-center justify-center gap-4 border border-white/30 px-6 py-4 text-xs font-bold uppercase tracking-[.12em] transition hover:bg-white/10">
                    Presentar catálogo
                    <span class="text-lg">↗</span>
                </a>

            </div>

        </div>

    </div>

</section>

<style>
html {
    scroll-behavior: smooth;
}

.ce-image-fallback {
    background:
        linear-gradient(135deg, #023657 0%, #044C7F 55%, #009ABD 100%);
}

.ce-benefit {
    display: flex;
    gap: 24px;
    padding: 24px 0;
    border-bottom: 1px solid rgba(4,76,127,.12);
}

.ce-benefit > span {
    color: #009ABD;
    font-size: 11px;
    font-weight: 700;
}

.ce-benefit strong {
    display: block;
    font-size: 14px;
    color: #044C7F;
    font-weight: 600;
}

.ce-benefit p {
    margin-top: 7px;
    color: #64748B;
    font-size: 12px;
    line-height: 1.8;
}

.ce-form-section {
    border-bottom: 1px solid rgba(4,76,127,.12);
    padding-bottom: 13px;
}

.ce-form-section span {
    color: #009ABD;
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .17em;
}

.ce-field label {
    display: block;
    margin-bottom: 10px;
    color: #64748B;
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .10em;
}

.ce-field input,
.ce-field select,
.ce-field textarea {
    display: block;
    width: 100%;
    border: 0;
    border-bottom: 1px solid rgba(4,76,127,.2);
    border-radius: 0;
    background: transparent;
    padding: 12px 0;
    color: #044C7F;
    font-size: 14px;
    outline: none;
    transition: border-color .25s ease;
}

.ce-field input:focus,
.ce-field select:focus,
.ce-field textarea:focus {
    border-color: #009ABD;
}

.ce-field input::placeholder,
.ce-field textarea::placeholder {
    color: #94A3B8;
}

.ce-field textarea {
    resize: vertical;
    min-height: 120px;
}

@media (prefers-reduced-motion: reduce) {
    html {
        scroll-behavior: auto;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const archivo = document.getElementById('catalogo');
    const nombre = document.getElementById('ce-archivo-nombre');
    const formulario = document.getElementById('ce-form-proveedores');
    const boton = document.getElementById('ce-enviar-proveedor');

    if (archivo && nombre) {
        archivo.addEventListener('change', function () {

            const file = archivo.files[0];

            if (!file) {
                nombre.textContent = 'Ningún archivo seleccionado.';
                return;
            }

            if (
                file.size > 2 * 1024 * 1024 ||
                !file.name.toLowerCase().endsWith('.pdf')
            ) {
                archivo.value = '';
                nombre.textContent = 'Selecciona un PDF válido de máximo 2 MB.';
                nombre.style.color = '#E31F1E';
                return;
            }

            nombre.textContent = file.name;
            nombre.style.color = '#044C7F';
        });
    }

    if (formulario && boton) {
        formulario.addEventListener('submit', function () {
            if (!formulario.checkValidity()) return;

            boton.disabled = true;
            boton.style.opacity = '.65';
            boton.querySelector('span').textContent = 'Enviando...';
        });
    }

});
</script>

@endsection
