@extends('layouts.app')



@section('title', 'Contáctanos | Cooling Energy')



@section('content')



<section class="contact-page relative isolate bg-[#F6F8F9] overflow-hidden">



    {{-- =========================================================
        ENCABEZADO COMPACTO
    ========================================================== --}}

    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-8">



        <div class="contact-header pt-28 sm:pt-32 lg:pt-36 pb-9 sm:pb-11 border-b border-[#044C7F]/15">



            <div class="flex items-center justify-between gap-6">



                <div class="flex items-center gap-4">



                    <span class="text-[#009ABD] text-[10px] sm:text-xs uppercase tracking-[.28em] font-bold">

                        Contacto

                    </span>



                    <span class="w-10 h-px bg-[#009ABD]"></span>



                </div>



                <span class="hidden sm:block text-[#044C7F]/35 text-[10px] uppercase tracking-[.18em] font-bold">

                    Cooling Energy / México

                </span>



            </div>





            <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-end pt-8">



                <div class="lg:col-span-8">



                    <h1 class="text-[#044C7F] text-4xl sm:text-5xl lg:text-6xl xl:text-[72px] font-semibold tracking-[-.045em] leading-[.98]">



                        Hablemos de

                        <span class="text-[#044C7F]/25">

                            tu proyecto.

                        </span>



                    </h1>



                </div>





                <div class="lg:col-span-4">



                    <p class="text-gray-500 text-sm sm:text-base leading-7">



                        Cuéntanos qué necesitas. Nuestro equipo

                        puede ayudarte a identificar los requerimientos

                        técnicos y el alcance de tu proyecto.



                    </p>



                </div>



            </div>



        </div>



    </div>





    {{-- =========================================================
        CONTACTO + FORMULARIO
    ========================================================== --}}

    <section class="contact-main-section relative py-12 sm:py-16 lg:py-24">
        {{-- Ondas decorativas: fuera del formulario, no afectan al grid ni a los campos --}}
        <div class="contact-energy-background" aria-hidden="true">
            <span class="contact-energy-wave wave-b"></span>

            <span class="contact-energy-wave wave-right-b"></span>
            <span class="contact-energy-wave wave-right-c"></span>
        </div>



        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-8">



            <div class="grid lg:grid-cols-[340px_1fr] xl:grid-cols-[380px_1fr] gap-10 lg:gap-16">





                {{-- =================================================
                    COLUMNA IZQUIERDA
                ================================================== --}}

                <aside class="contact-info contact-reveal">



                    <div class="lg:sticky lg:top-28">



                        <span class="text-[#009ABD] text-[10px] uppercase tracking-[.25em] font-bold">

                            Iniciemos

                        </span>





                        <h2 class="text-[#044C7F] text-3xl sm:text-4xl font-semibold tracking-[-.035em] leading-[1.08] mt-5">



                            Todo comienza

                            con entender

                            <span class="text-[#044C7F]/30">

                                el reto.

                            </span>



                        </h2>





                        <p class="text-gray-500 text-sm leading-7 mt-6">



                            Comparte con nosotros la información

                            general de tu proyecto y podremos

                            establecer un primer punto de contacto.



                        </p>





                        {{-- DISPONIBILIDAD --}}

                        <div class="flex items-center gap-3 mt-9 pb-8 border-b border-[#044C7F]/10">



                            <span class="availability-dot"></span>



                            <div>



                                <strong class="block text-[#044C7F] text-xs font-semibold">

                                    Recepción de proyectos

                                </strong>



                                <span class="text-gray-400 text-[10px] uppercase tracking-[.14em]">

                                    Cancún · Cobertura nacional

                                </span>



                            </div>



                        </div>





                        {{-- DATOS --}}

                        <div class="contact-data">



                            <div class="contact-data-row">



                                <span>

                                    Base operativa

                                </span>



                                <strong>

                                    Cancún, Quintana Roo

                                </strong>



                            </div>





                            <div class="contact-data-row">



                                <span>

                                    Cobertura

                                </span>



                                <strong>

                                    México

                                </strong>



                            </div>





                            <div class="contact-data-row">



                                <span>

                                    Especialidades

                                </span>



                                <strong>

                                    HVAC · PCI · Ingeniería

                                </strong>



                            </div>



                        </div>





                        {{-- DECORACIÓN --}}

                        <div class="hidden lg:block relative h-28 mt-10 overflow-hidden">



                            <div class="contact-technical-line line-one"></div>

                            <div class="contact-technical-line line-two"></div>



                            <div class="contact-node node-one"></div>

                            <div class="contact-node node-two"></div>



                            <span class="absolute right-0 bottom-0 text-[#044C7F]/[0.045] text-[100px] font-black leading-none">

                                CE

                            </span>



                        </div>



                    </div>



                </aside>





                {{-- =================================================
                    FORMULARIO
                ================================================== --}}

                <div class="contact-form-wrap contact-reveal">



                    <div class="bg-white border border-[#044C7F]/10 relative overflow-hidden">



                        {{-- LÍNEA SUPERIOR --}}

                        <div class="absolute top-0 left-0 w-full h-[4px] bg-[#044C7F]/10">



                            <div class="contact-progress h-full bg-[#009ABD]">

                            </div>



                        </div>





                        {{-- CABECERA DEL FORMULARIO --}}

                        <div class="px-6 sm:px-9 lg:px-12 pt-10 sm:pt-12 pb-8 border-b border-[#044C7F]/10">



                            <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-5">



                                <div>



                                    <span class="text-[#009ABD] text-[10px] uppercase tracking-[.25em] font-bold">

                                        Solicitud / 01

                                    </span>



                                    <h2 class="text-[#044C7F] text-2xl sm:text-3xl font-semibold tracking-[-.025em] mt-3">

                                        Información del proyecto

                                    </h2>



                                </div>





                                <div class="flex items-center gap-2">



                                    <span class="w-2 h-2 rounded-full bg-[#009ABD]">

                                    </span>



                                    <span class="text-[#044C7F]/35 text-[9px] uppercase tracking-[.16em]">

                                        Formulario técnico

                                    </span>



                                </div>



                            </div>



                        </div>





                        {{-- =================================================
                            FORM
                        ================================================== --}}


@if(session('success'))
    <div class="mx-6 sm:mx-9 lg:mx-12 mt-6 p-4 border-l-4 border-[#009ABD] bg-[#009ABD]/10 text-[#044C7F] text-sm" role="status">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="mx-6 sm:mx-9 lg:mx-12 mt-6 p-4 border-l-4 border-[#E31F1E] bg-red-50 text-red-700 text-sm" role="alert">
        {{ session('error') }}
    </div>
@endif

@if($errors->any())
    <div class="mx-6 sm:mx-9 lg:mx-12 mt-6 p-4 border-l-4 border-[#E31F1E] bg-red-50 text-red-700 text-sm" role="alert">
        Revisa la información del formulario.
        <ul class="mt-2 list-disc pl-5">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


                        <form action="{{ route('contacto.enviar') }}"
      method="POST"
      id="contact-form"
      class="px-6 sm:px-9 lg:px-12 py-9 sm:py-11">


                            @csrf





                            {{-- =============================================
                                DATOS PERSONALES
                            ============================================== --}}

                            <div class="form-section">



                                <div class="form-section-heading">



                                    <span>01</span>



                                    <p>

                                        Datos de contacto

                                    </p>



                                </div>





                                <div class="grid md:grid-cols-2 gap-x-7 gap-y-8 mt-8">



                                    {{-- NOMBRE --}}

                                    <div class="form-field">



                                        <label for="nombre">

                                            Nombre completo

                                        </label>



                                        <input type="text"

                                               id="nombre"

                                               name="nombre"

                                               placeholder="Escribe tu nombre"

                                               required>



                                    </div>





                                    {{-- CORREO --}}

                                    <div class="form-field">



                                        <label for="email">

                                            Correo electrónico

                                        </label>



                                        <input type="email"

                                               id="email"

                                               name="email"

                                               placeholder="correo@empresa.com"

                                               required>



                                    </div>





                                    {{-- TELÉFONO --}}

                                    <div class="form-field">



                                        <label for="telefono">

                                            Teléfono

                                        </label>



                                        <input type="tel"

                                               id="telefono"

                                               name="telefono"

                                               placeholder="+52">



                                    </div>





                                    {{-- EMPRESA --}}

                                    <div class="form-field">



                                        <label for="empresa">

                                            Empresa

                                        </label>



                                        <input type="text"

                                               id="empresa"

                                               name="empresa"

                                               placeholder="Nombre de la empresa">



                                    </div>





                                    {{-- UBICACIÓN --}}

                                    <div class="form-field md:col-span-2">



                                        <label for="ubicacion">

                                            ¿Desde dónde nos escribes?

                                        </label>



                                        <input type="text"

                                               id="ubicacion"

                                               name="ubicacion"

                                               placeholder="Ciudad, estado">



                                    </div>



                                </div>



                            </div>





                            {{-- =============================================
                                TIPO DE PROYECTO
                            ============================================== --}}

                            <div class="form-section mt-12 sm:mt-14 pt-10 border-t border-[#044C7F]/10">



                                <div class="form-section-heading">



                                    <span>02</span>



                                    <p>

                                        ¿Qué necesita tu proyecto?

                                    </p>



                                </div>





                                <div class="project-type-grid mt-8">



                                    <label class="project-option">



                                        <input type="radio"

                                               name="tipo_proyecto"

                                               value="hvac">



                                        <span class="project-option-box">



                                            <small>

                                                01

                                            </small>



                                            <strong>

                                                HVAC

                                            </strong>



                                            <em>

                                                Aire acondicionado

                                                y calefacción

                                            </em>



                                            <i>

                                                +

                                            </i>



                                        </span>



                                    </label>





                                    <label class="project-option">



                                        <input type="radio"

                                               name="tipo_proyecto"

                                               value="pci">



                                        <span class="project-option-box pci-option">



                                            <small>

                                                02

                                            </small>



                                            <strong>

                                                PCI

                                            </strong>



                                            <em>

                                                Protección contra

                                                incendios

                                            </em>



                                            <i>

                                                +

                                            </i>



                                        </span>



                                    </label>





                                    <label class="project-option">



                                        <input type="radio"

                                               name="tipo_proyecto"

                                               value="electrico">



                                        <span class="project-option-box">



                                            <small>

                                                03

                                            </small>



                                            <strong>

                                                Eléctrico

                                            </strong>



                                            <em>

                                                Instalaciones

                                                eléctricas

                                            </em>



                                            <i>

                                                +

                                            </i>



                                        </span>



                                    </label>





                                    <label class="project-option">



                                        <input type="radio"

                                               name="tipo_proyecto"

                                               value="hidrosanitario">



                                        <span class="project-option-box">



                                            <small>

                                                04

                                            </small>



                                            <strong>

                                                Hidrosanitario

                                            </strong>



                                            <em>

                                                Instalaciones

                                                y gas

                                            </em>



                                            <i>

                                                +

                                            </i>



                                        </span>



                                    </label>





                                    <label class="project-option">



                                        <input type="radio"

                                               name="tipo_proyecto"

                                               value="construccion">



                                        <span class="project-option-box">



                                            <small>

                                                05

                                            </small>



                                            <strong>

                                                Construcción

                                            </strong>



                                            <em>

                                                Albañilería y

                                                trabajos especializados

                                            </em>



                                            <i>

                                                +

                                            </i>



                                        </span>



                                    </label>





                                    <label class="project-option">



                                        <input type="radio"

                                               name="tipo_proyecto"

                                               value="otro">



                                        <span class="project-option-box">



                                            <small>

                                                06

                                            </small>



                                            <strong>

                                                Otro

                                            </strong>



                                            <em>

                                                Cuéntanos qué

                                                necesitas

                                            </em>



                                            <i>

                                                +

                                            </i>



                                        </span>



                                    </label>



                                </div>



                            </div>





                            {{-- =============================================
                                INFORMACIÓN DEL PROYECTO
                            ============================================== --}}

                            <div class="form-section mt-12 sm:mt-14 pt-10 border-t border-[#044C7F]/10">



                                <div class="form-section-heading">



                                    <span>03</span>



                                    <p>

                                        Alcance

                                    </p>



                                </div>





                                <div class="grid md:grid-cols-2 gap-x-7 gap-y-8 mt-8">



                                    {{-- DURACIÓN --}}

                                    <div class="form-field">



                                        <label for="duracion">

                                            Tiempo estimado del proyecto

                                        </label>



                                        <select id="duracion"

                                                name="duracion">



                                            <option value="">

                                                Selecciona una opción

                                            </option>



                                            <option value="menos-3-meses">

                                                Menos de 3 meses

                                            </option>



                                            <option value="3-6-meses">

                                                3 a 6 meses

                                            </option>



                                            <option value="6-12-meses">

                                                6 a 12 meses

                                            </option>



                                            <option value="mas-12-meses">

                                                Más de 12 meses

                                            </option>



                                            <option value="por-definir">

                                                Por definir

                                            </option>



                                        </select>



                                    </div>





                                    {{-- ETAPA --}}

                                    <div class="form-field">



                                        <label for="etapa">

                                            Etapa actual

                                        </label>



                                        <select id="etapa"

                                                name="etapa">



                                            <option value="">

                                                Selecciona una opción

                                            </option>



                                            <option value="planeacion">

                                                Planeación

                                            </option>



                                            <option value="ingenieria">

                                                Ingeniería

                                            </option>



                                            <option value="construccion">

                                                Construcción

                                            </option>



                                            <option value="operacion">

                                                Operación

                                            </option>



                                        </select>



                                    </div>





                                    {{-- DETALLES --}}

                                    <div class="form-field md:col-span-2">



                                        <label for="mensaje">

                                            Detalles del proyecto

                                        </label>



                                        <textarea id="mensaje"

                                                  name="mensaje"

                                                  rows="5"

                                                  placeholder="Cuéntanos brevemente sobre el proyecto, ubicación, necesidades, alcance o cualquier información que consideres importante."

                                                  required></textarea>



                                    </div>



                                </div>



                            </div>





                            {{-- =============================================
                                ENVÍO
                            ============================================== --}}

                            <div class="mt-12 pt-8 border-t border-[#044C7F]/10 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-7">



                                <p class="text-gray-400 text-[10px] leading-5 max-w-sm">



                                    Al enviar tu información, nuestro equipo

                                    podrá utilizarla para dar seguimiento

                                    a tu solicitud de proyecto.



                                </p>





                                <button type="submit"

                                        class="contact-submit group">



                                    <span>

                                        Enviar solicitud

                                    </span>



                                    <i>

                                        →

                                    </i>



                                </button>



                            </div>



                        </form>



                    </div>



                </div>



            </div>



        </div>



    </section>





    {{-- =========================================================
        FRANJA FINAL
    ========================================================== --}}

    <section class="bg-[#022F4F]">



        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-8">



            <div class="contact-bottom grid md:grid-cols-3 gap-px bg-white/10">



                <div class="contact-bottom-item">



                    <span>

                        01

                    </span>



                    <strong>

                        Cuéntanos

                    </strong>



                    <p>

                        Comparte los requerimientos

                        generales de tu proyecto.

                    </p>



                </div>





                <div class="contact-bottom-item">



                    <span>

                        02

                    </span>



                    <strong>

                        Analizamos

                    </strong>



                    <p>

                        Revisamos las necesidades
                        técnicas y el alcance.

                    </p>

                </div>


                <div class="contact-bottom-item">

                    <span>

                        03

                    </span>
                    <strong>

                        Conectamos

                    </strong>

                    <p>

                        Establecemos el siguiente
                        paso para tu proyecto.

                    </p>

                </div>

            </div>

        </div>

    </section>

</section>





{{-- =========================================================
    ESTILOS
========================================================= --}}

<style>
/* Ondas de energía SOLO en el espacio vacío izquierdo del formulario. */
.contact-main-section { position: relative; isolation: isolate; }
.contact-main-section > .max-w-7xl { position: relative; z-index: 1; }
.contact-energy-background {
    position: absolute;
    inset: 0;
    overflow: hidden;
    pointer-events: none;
    z-index: 0;
}
.contact-energy-wave {
    position: absolute;
    display: block;
    width: clamp(340px, 34vw, 590px);
    aspect-ratio: 1;
    left: clamp(-210px, 1vw, 30px);
    border-radius: 50%;
    background:
        repeating-radial-gradient(circle at center,
            transparent 0 35px,
            rgba(0,154,189,.20) 36px 37px,
            transparent 38px 70px),
        radial-gradient(circle, rgba(0,154,189,.075), transparent 68%);
    animation: contactEnergyBreath 12s ease-in-out infinite alternate;
    transform-origin: center;
}
.contact-energy-wave.wave-a { top: 10%; }
.contact-energy-wave.wave-b { top: 43%; left: clamp(-260px, -5vw, -60px); animation-delay: -4s; opacity: .75; }
.contact-energy-wave.wave-c { top: 76%; animation-delay: -8s; opacity: .7; }
/* Ondas adicionales en el margen exterior DERECHO, sin cubrir el formulario */
.contact-energy-wave.wave-right-a,
.contact-energy-wave.wave-right-b,
.contact-energy-wave.wave-right-c {
    left: auto;
    right: -145px;
    width: clamp(320px, 30vw, 490px);
    background:
        repeating-radial-gradient(circle at center,
            transparent 0 35px,
            rgba(0,154,189,.20) 36px 37px,
            transparent 38px 70px),
        radial-gradient(circle, rgba(0,154,189,.07), transparent 68%);
}
.contact-energy-wave.wave-right-a { top: 5%; animation-delay: -2s; }
.contact-energy-wave.wave-right-b { top: 39%; right: -205px; animation-delay: -6s; opacity: .8; }
.contact-energy-wave.wave-right-c { top: 73%; right: -125px; animation-delay: -9s; opacity: .7; }

@keyframes contactEnergyBreath {
    from { transform: scale(.84) translateY(-12px); opacity: .5; }
    to { transform: scale(1.12) translateY(14px); opacity: 1; }
}
@media (max-width: 1023px) {
    .contact-energy-wave { left: -240px; opacity: .25; }
    .contact-energy-wave.wave-b { left: -260px; }
    .contact-energy-wave.wave-right-a, .contact-energy-wave.wave-right-b, .contact-energy-wave.wave-right-c { right: -260px; left: auto; opacity: .3; }
}
@media (max-width: 639px) {
    .contact-energy-wave { width: 300px; left: -220px; }
    .contact-energy-wave.wave-b { left: -230px; }
    .contact-energy-wave.wave-right-a, .contact-energy-wave.wave-right-b, .contact-energy-wave.wave-right-c { width: 300px; right: -235px; left: auto; }
}
@media (prefers-reduced-motion: reduce) {
    .contact-energy-wave { animation: none; opacity: .6; }
}

/* =========================================================
   ENTRADA
========================================================= */



.contact-header {



    opacity: 0;



    transform: translateY(25px);



    animation:

        contactHeader .9s forwards

        cubic-bezier(.16,1,.3,1);



}





@keyframes contactHeader {



    to {

        opacity: 1;
        transform: translateY(0);
    }



}





/* =========================================================
   REVEAL
========================================================= */



.contact-reveal {

    opacity: 0;
    transform: translateY(35px);
    transition:
        opacity .85s cubic-bezier(.16,1,.3,1),
        transform .85s cubic-bezier(.16,1,.3,1);

}





.contact-reveal.visible {

    opacity: 1;
    transform: translateY(0);

}





/* =========================================================
   DISPONIBILIDAD
========================================================= */



.availability-dot {

    position: relative;
    width: 9px;
    height: 9px;
    flex-shrink: 0;
    border-radius: 50%;
    background: #009ABD;

}

.availability-dot::after {

    content: "";
    position: absolute;
    inset: -5px;
    border:

        1px solid rgba(0,154,189,.30);
    border-radius: 50%;
    animation:
        availabilityPulse 2s infinite;
}





@keyframes availabilityPulse {



    0% {

        opacity: 1;
        transform: scale(.7);

    }



    70% {

        opacity: 0;
        transform: scale(1.5);

    }



    100% {

        opacity: 0;

    }



}


/* =========================================================
   DATOS IZQUIERDA
========================================================= */

.contact-data-row {

    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 25px;
    padding: 17px 0;
    border-bottom:

        1px solid rgba(4,76,127,.10);

}

.contact-data-row span {

    color:

        rgba(4,76,127,.35);



    font-size: 9px;
    text-transform: uppercase;
    letter-spacing: .15em;

}





.contact-data-row strong {

    color: #044C7F;
    font-size: 11px;
    font-weight: 600;
    text-align: right;

}





/* =========================================================
   DECORACIÓN
========================================================= */



.contact-technical-line {

    position: absolute;
    background:

        rgba(4,76,127,.10);

}





.line-one {

    left: 0;
    top: 45%;
    width: 75%;
    height: 1px;

}





.line-two {

    left: 55%;
    top: 15%;
    width: 1px;
    height: 65%;

}





.contact-node {



    position: absolute;

    width: 8px;
    height: 8px;
    border: 2px solid #009ABD;
    border-radius: 50%;
    background: #F6F8F9;

}





.node-one {

    left: 25%;
    top: calc(45% - 4px);



}





.node-two {

    left: calc(55% - 3px);
    top: calc(45% - 4px);



}





/* =========================================================
   PROGRESO
========================================================= */



.contact-progress {



    width: 18%;
    transition:

        width .5s cubic-bezier(.16,1,.3,1);



}





/* =========================================================
   SECCIONES DEL FORMULARIO
========================================================= */



.form-section-heading {



    display: flex;



    align-items: center;



    gap: 12px;



}





.form-section-heading span {



    color: #E31F1E;



    font-size: 10px;



    font-weight: 700;



}





.form-section-heading p {



    color: #044C7F;



    font-size: 11px;



    font-weight: 700;



    text-transform: uppercase;



    letter-spacing: .16em;



}





/* =========================================================
   INPUTS
========================================================= */



.form-field {



    position: relative;



}





.form-field label {



    display: block;



    margin-bottom: 10px;



    color:

        rgba(4,76,127,.50);



    font-size: 9px;



    font-weight: 700;



    text-transform: uppercase;



    letter-spacing: .14em;



}





.form-field input,

.form-field select,

.form-field textarea {



    width: 100%;



    padding:

        13px 0;



    border: 0;



    border-bottom:

        1px solid rgba(4,76,127,.18);



    border-radius: 0;



    outline: none;



    background: transparent;



    color: #044C7F;



    font-size: 14px;



    transition:

        border-color .3s ease;



}





.form-field textarea {



    resize: vertical;



    min-height: 130px;



}





.form-field input::placeholder,

.form-field textarea::placeholder {



    color:

        rgba(4,76,127,.25);



}





.form-field input:focus,

.form-field select:focus,

.form-field textarea:focus {



    border-color: #009ABD;



}





/* =========================================================
   TIPO DE PROYECTO
========================================================= */



.project-type-grid {



    display: grid;



    grid-template-columns:

        repeat(3,1fr);



    gap: 8px;



}





.project-option {



    cursor: pointer;



}





.project-option input {



    position: absolute;



    opacity: 0;



    pointer-events: none;



}





.project-option-box {



    position: relative;



    display: flex;



    flex-direction: column;



    min-height: 155px;



    padding: 18px;



    border:

        1px solid rgba(4,76,127,.12);



    background: #F8FAFB;



    transition:

        background-color .35s ease,

        border-color .35s ease,

        transform .35s cubic-bezier(.16,1,.3,1);



}





.project-option-box small {



    color:

        rgba(4,76,127,.30);



    font-size: 9px;



    font-weight: 700;



}





.project-option-box strong {



    display: block;



    margin-top: 27px;



    color: #044C7F;



    font-size: 15px;



    font-weight: 650;



}





.project-option-box em {



    display: block;



    margin-top: 5px;



    padding-right: 20px;



    color:

        rgba(4,76,127,.42);



    font-size: 10px;



    line-height: 1.5;



    font-style: normal;



}





.project-option-box i {



    position: absolute;



    right: 15px;

    bottom: 13px;



    color:

        rgba(4,76,127,.25);



    font-size: 20px;



    font-style: normal;



    transition:

        transform .35s ease,

        color .35s ease;



}





.project-option:hover

.project-option-box {



    transform: translateY(-3px);



    border-color:

        rgba(0,154,189,.35);



}





.project-option input:checked

+ .project-option-box {



    background: #044C7F;



    border-color: #044C7F;



}





.project-option input:checked

+ .project-option-box small {



    color: #009ABD;



}





.project-option input:checked

+ .project-option-box strong {



    color: white;



}





.project-option input:checked

+ .project-option-box em {



    color:

        rgba(255,255,255,.45);



}





.project-option input:checked

+ .project-option-box i {



    color: #009ABD;



    transform: rotate(45deg);



}





/* PCI seleccionado en rojo */



.project-option input:checked

+ .pci-option {



    background: #044C7F;



    border-color: #E31F1E;



}





.project-option input:checked

+ .pci-option small,



.project-option input:checked

+ .pci-option i {



    color: #E31F1E;



}





/* =========================================================
   BOTÓN
========================================================= */



.contact-submit {



    display: flex;



    align-items: center;



    min-width: 220px;



    min-height: 58px;



    padding-left: 22px;



    background: #044C7F;



    color: white;



    transition:

        background-color .35s ease,

        transform .35s cubic-bezier(.16,1,.3,1);



}





.contact-submit span {



    flex: 1;



    text-align: left;



    font-size: 11px;



    font-weight: 700;



    text-transform: uppercase;



    letter-spacing: .13em;



}





.contact-submit i {



    width: 58px;

    height: 58px;



    display: flex;



    align-items: center;

    justify-content: center;



    background: #009ABD;



    font-size: 18px;



    font-style: normal;



    transition:

        transform .35s ease;



}





.contact-submit:hover {



    background: #022F4F;



    transform: translateY(-2px);



}





.contact-submit:hover i {



    transform: translateX(4px);



}





/* =========================================================
   FRANJA FINAL
========================================================= */



.contact-bottom-item {



    min-height: 220px;



    padding: 32px;



    background: #022F4F;



    transition:

        background-color .35s ease;



}





.contact-bottom-item:hover {



    background: #044C7F;



}





.contact-bottom-item span {



    color: #009ABD;



    font-size: 10px;



    font-weight: 700;



}





.contact-bottom-item strong {



    display: block;



    margin-top: 45px;



    color: white;



    font-size: 22px;



    font-weight: 600;



}





.contact-bottom-item p {



    max-width: 240px;



    margin-top: 9px;



    color:

        rgba(255,255,255,.38);



    font-size: 12px;



    line-height: 1.7;



}





/* =========================================================
   RESPONSIVE
========================================================= */



@media (max-width: 767px) {



    .project-type-grid {



        grid-template-columns:

            repeat(2,1fr);



    }





    .project-option-box {



        min-height: 145px;



        padding: 15px;



    }





    .contact-submit {



        width: 100%;



    }



}





@media (max-width: 420px) {



    .project-type-grid {



        grid-template-columns: 1fr;



    }





    .project-option-box {



        min-height: 120px;



    }





    .project-option-box strong {



        margin-top: 18px;



    }



}





/* =========================================================
   REDUCED MOTION
========================================================= */



@media

(prefers-reduced-motion: reduce) {



    *,

    ::before,

    ::after {



        animation-duration:

            .01ms !important;



        transition-duration:

            .01ms !important;



    }





    .contact-reveal {



        opacity: 1;



        transform: none;



    }



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
   REVEAL
========================================================= */



const revealElements =

    document.querySelectorAll(

        '.contact-reveal'

    );





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

                                .add(

                                    'visible'

                                );





                            observer.unobserve(

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





    revealElements.forEach(

        function(element, index) {



            element.style.transitionDelay =

                (index * 100) + 'ms';





            observer.observe(

                element

            );



        }

    );



}



else {



    revealElements.forEach(

        function(element) {



            element.classList.add(

                'visible'

            );



        }

    );



}





/* =========================================================
   PROGRESO DEL FORMULARIO
========================================================= */



const form =

    document.getElementById(

        'contact-form'

    );





const progress =

    document.querySelector(

        '.contact-progress'

    );





const fields =

    form.querySelectorAll(

        'input:not([type="radio"]), select, textarea'

    );





const projectOptions =

    form.querySelectorAll(

        'input[name="tipo_proyecto"]'

    );





function updateProgress() {



    let completed = 0;



    let total = fields.length + 1;





    fields.forEach(

        function(field) {



            if (

                field.value.trim() !== ''

            ) {



                completed++;



            }



        }

    );





    const selectedProject =

        form.querySelector(

            'input[name="tipo_proyecto"]:checked'

        );





    if (selectedProject) {



        completed++;



    }





    let percentage =

        Math.max(

            18,

            Math.round(

                (completed / total) * 100

            )

        );





    progress.style.width =

        percentage + '%';



}





/* INPUTS */



fields.forEach(

    function(field) {



        field.addEventListener(

            'input',

            updateProgress

        );





        field.addEventListener(

            'change',

            updateProgress

        );



    }

);





/* RADIO */



projectOptions.forEach(

    function(option) {



        option.addEventListener(

            'change',

            updateProgress

        );



    }

);





/* =========================================================
   NO ENVIAR TODAVÍA
   QUITA ESTE BLOQUE CUANDO CONECTEMOS EL BACKEND
========================================================= */



});

</script>



@endsection
