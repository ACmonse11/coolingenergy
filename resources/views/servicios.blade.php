@extends('layouts.app')

@section('title', 'Servicios | Cooling Energy')

@section('content')

<section class="bg-white overflow-hidden">

    {{-- CABECERA --}}

    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-8">

        <div class="pt-28 sm:pt-32 lg:pt-36 pb-10 sm:pb-12 border-b border-[#E31F1E]">

            <div class="grid lg:grid-cols-12 gap-8 items-end">

                <div class="lg:col-span-8">

                    <div class="service-intro-label flex items-center gap-4">

                        <span class="text-[#009ABD] text-xs font-bold uppercase tracking-[0.28em]">Servicios</span>

                        <span class="w-10 h-px bg-[#009ABD]"></span>

                        <span class="text-[#044C7F]/35 text-xs font-semibold">01 — 05</span>

                    </div>

                    <h1 class="service-intro-title mt-5 text-[#044C7F] text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-semibold tracking-[-0.045em] leading-[1.02]">

                        Soluciones técnicas para <span class="text-[#044C7F]/30">cada etapa del proyecto.</span>

                    </h1>

                </div>

                <div class="lg:col-span-4 service-intro-copy">

                    <p class="text-gray-500 text-sm sm:text-base leading-7">Integramos ingeniería, instalación, equipamiento y ejecución especializada para proyectos de diferentes escalas.</p>

                </div>

            </div>

        </div>

    </div>

    {{-- EXPLORADOR DE SERVICIOS --}}

    <section id="explorador-servicios" class="relative cooling-explorer-background">
        <div class="cooling-energy-waves" aria-hidden="true">
            <span class="wave"></span><span class="wave"></span><span class="wave"></span><span class="wave"></span>
            <span class="right-glow"></span>
            <span class="right-wave"></span><span class="right-wave"></span><span class="right-wave"></span><span class="right-wave"></span>
            <span class="right-glow-secondary"></span>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-8 lg:px-8 py-14 sm:py-20 lg:py-24">

            <div class="grid lg:grid-cols-[330px_1fr] xl:grid-cols-[370px_1fr] gap-10 lg:gap-16">

                <aside class="service-menu-wrap">

                    <div class="lg:sticky lg:top-28">

                        <p class="text-[#044C7F]/35 text-[10px] uppercase tracking-[0.25em] font-bold mb-6">Especialidades</p>

                        <div class="service-menu" role="tablist" aria-label="Servicios de Cooling Energy">

                            <button type="button" class="service-selector active" data-service="0" role="tab" aria-selected="true"><span class="selector-number">01</span><span class="selector-name">Desarrollo de ingeniería en sistemas HVAC</span><span class="selector-arrow">→</span></button>

                            <button type="button" class="service-selector" data-service="1" role="tab" aria-selected="false"><span class="selector-number">02</span><span class="selector-name">Ejecución de proyectos HVAC</span><span class="selector-arrow">→</span></button>

                            <button type="button" class="service-selector" data-service="2" role="tab" aria-selected="false"><span class="selector-number">03</span><span class="selector-name">Ingeniería y ejecución de redes de protección contra incendio (PCI)</span><span class="selector-arrow">→</span></button>

                            <button type="button" class="service-selector" data-service="3" role="tab" aria-selected="false"><span class="selector-number">04</span><span class="selector-name">Ingeniería y ejecución de redes hidráulicas</span><span class="selector-arrow">→</span></button>

                            <button type="button" class="service-selector" data-service="4" role="tab" aria-selected="false"><span class="selector-number">05</span><span class="selector-name">Mantenimiento preventivo y correctivo</span><span class="selector-arrow">→</span></button>

                        </div>

                    </div>


                </aside>

                <div class="relative min-w-0">

                    <div id="service-panel" class="service-panel relative min-h-[650px] sm:min-h-[680px] lg:min-h-[720px] bg-[#F4F7F8] overflow-hidden" role="tabpanel">

                        {{-- FONDO: cada servicio utiliza una URL diferente --}}

                        <div id="service-background" class="absolute inset-0 pointer-events-none" aria-hidden="true"

                             style="background-image: url('{{ asset('images/servicios/cooling-energy-servicio-1-ingenieria-hvac/cooling-energy-ingenieria-hvac-residencial-corregida.webp') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>

                        {{-- Velo claro para mantener la lectura --}}

                        <div class="service-background-overlay absolute inset-0 pointer-events-none" aria-hidden="true"></div>

                        <div class="technical-grid absolute inset-0 pointer-events-none" aria-hidden="true"></div>

                        <div id="service-big-number" class="absolute right-[-20px] top-[-65px] text-[#044C7F]/[0.035] text-[210px] sm:text-[290px] lg:text-[360px] font-black leading-none pointer-events-none select-none" aria-hidden="true">01</div>

                        <div class="absolute top-0 left-0 w-full h-[4px] bg-[#044C7F]/10"><div id="panel-line" class="h-full w-[18%] bg-[#009ABD]"></div></div>

                        <div class="relative z-10 h-full p-7 sm:p-10 lg:p-14 xl:p-16">

                            <div class="flex items-center justify-between gap-6">

                                <span id="service-category" class="text-[#009ABD] text-[10px] sm:text-xs uppercase tracking-[0.25em] font-bold">Climatización</span>

                                <div class="hidden sm:flex items-center gap-3"><span class="w-2 h-2 rounded-full bg-[#009ABD]"></span><span class="text-[#044C7F]/40 text-[10px] uppercase tracking-[0.20em]">Cooling Energy</span></div>

                            </div>

                            <div id="service-content" class="mt-16 sm:mt-20">

                                <p id="service-code" class="text-[#044C7F]/50 text-xs font-bold tracking-[0.18em]">CE / 01</p>

                                <h2 id="service-title" class="text-[#044C7F] text-3xl sm:text-5xl lg:text-5xl xl:text-6xl font-semibold tracking-[-0.045em] leading-[1.05] mt-5 max-w-3xl break-words">Desarrollo De Ingeniería <span class="block text-[#044C7F]/60">En Sistemas HVAC.</span></h2>

                                <p id="service-description" class="text-[#24465E] text-base sm:text-lg leading-8 mt-8 max-w-2xl">En Cooling Energy desarrollamos ingeniería HVAC para proyectos de calefacción, ventilación y aire acondicionado. Realizamos análisis y cálculo de cargas térmicas, psicrometría, diseño mecánico de distribución y selección de equipos conforme a los requerimientos del inmueble.</p>

                            </div>

                            <div class="mt-14 sm:mt-16">

                                <div class="flex items-center gap-3 mb-6"><span class="text-[#044C7F]/50 text-[10px] uppercase tracking-[0.20em]">Alcance</span><span class="h-px flex-1 bg-[#044C7F]/10"></span></div>

                                <div id="service-features" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-px bg-[#044C7F]/10"></div>

                            </div>

                            <div class="hidden lg:block absolute right-14 bottom-12 w-28 h-28 pointer-events-none" aria-hidden="true">

                                <div class="absolute left-0 top-1/2 w-full h-px bg-[#044C7F]/10"></div><div class="absolute top-0 left-1/2 w-px h-full bg-[#044C7F]/10"></div><div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 rounded-full border-2 border-[#009ABD]"></div>

                            </div>

                        </div>

                    </div>

                    <div class="flex items-center justify-between mt-5">

                        <p class="text-gray-400 text-[10px] uppercase tracking-[0.20em]">Selecciona una especialidad</p>

                        <div class="flex gap-2"><button id="previous-service" type="button" class="service-control" aria-label="Servicio anterior">←</button><button id="next-service" type="button" class="service-control" aria-label="Siguiente servicio">→</button></div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- FRANJA DE CAPACIDAD --}}

    <section class="bg-[#022F4F] overflow-hidden">

        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-8 py-16 sm:py-20 lg:py-24">

            <div class="grid lg:grid-cols-12 gap-10 items-center">

                <div class="lg:col-span-4 capability-reveal"><span class="text-[#009ABD] text-xs uppercase tracking-[0.25em] font-bold">Capacidad operativa</span><h2 class="text-white text-3xl sm:text-4xl font-semibold mt-5">Una solución. <span class="block text-white/30">Diferentes disciplinas.</span></h2></div>

                <div class="lg:col-span-8"><div class="capability-flow"><div class="capability-step capability-reveal"><span>01</span><strong>ANALIZAMOS</strong></div><div class="capability-arrow capability-reveal">→</div><div class="capability-step capability-reveal"><span>02</span><strong>INTEGRAMOS</strong></div><div class="capability-arrow capability-reveal">→</div><div class="capability-step capability-reveal"><span>03</span><strong>EJECUTAMOS</strong></div></div></div>

            </div>

        </div>

    </section>

    {{-- SECTORES --}}

    <section class="bg-white py-20 sm:py-28 lg:py-32">

        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-8"><div class="grid lg:grid-cols-12 gap-12">

            <div class="lg:col-span-5 sector-reveal"><span class="text-[#009ABD] text-xs uppercase tracking-[0.25em] font-bold">Aplicación</span><h2 class="text-[#044C7F] text-4xl sm:text-5xl lg:text-6xl font-semibold tracking-[-0.04em] leading-[1.05] mt-6">Ingeniería para distintos entornos.</h2></div>

            <div class="lg:col-span-7"><div class="sector-list"><div class="sector-item sector-reveal"><span>01</span><h3>Hotelería</h3><i>↗</i></div><div class="sector-item sector-reveal"><span>02</span><h3>Residencial</h3><i>↗</i></div><div class="sector-item sector-reveal"><span>03</span><h3>Comercial</h3><i>↗</i></div><div class="sector-item sector-reveal"><span>04</span><h3>Industrial</h3><i>↗</i></div></div></div>

        </div></div>

    </section>

    {{-- CIERRE --}}

    <section class="bg-[#F4F7F8] border-t border-gray-200"><div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-8"><a href="{{ route('contacto') }}" class="final-service-link group flex flex-col sm:flex-row sm:items-center sm:justify-between gap-8 py-14 sm:py-16"><div><span class="text-[#009ABD] text-xs uppercase tracking-[0.25em] font-bold">Nuevo proyecto</span><h2 class="text-[#044C7F] text-3xl sm:text-4xl lg:text-5xl font-semibold mt-4">Cuéntanos qué necesitas resolver.</h2></div><div class="final-service-arrow">→</div></a></div></section>

</section>

<style>

/* Ondas de energía: solo decoración, sin interferir con los controles */
.cooling-explorer-background { position: relative; isolation: isolate; background: #fff; }
.cooling-energy-waves { position:absolute; inset:0; overflow:hidden; z-index:0; pointer-events:none; }
.cooling-energy-waves .wave { position:absolute; width:460px; height:460px; border-radius:50%; border:1px solid rgba(0,154,189,.13); left: max(-240px, calc(50% - 870px)); top: 25%; transform:scale(.4); opacity:0; animation:coolingWave 12s ease-out infinite; }
.cooling-energy-waves .wave:nth-child(2){animation-delay:3s}
.cooling-energy-waves .wave:nth-child(3){animation-delay:6s}
.cooling-energy-waves .wave:nth-child(4){animation-delay:9s}
.cooling-energy-waves::after { content:""; position:absolute; width:440px; height:440px; left:-220px; bottom:-170px; border-radius:50%; background:radial-gradient(circle,rgba(0,154,189,.075),transparent 70%); animation:coolingBreathe 9s ease-in-out infinite alternate; }
.cooling-energy-waves .right-glow {position:absolute; right:-190px; top:12%; width:400px; height:400px; border-radius:50%; background:radial-gradient(circle,rgba(4,76,127,.045),transparent 70%); animation:coolingBreathe 11s ease-in-out infinite alternate-reverse;}
/* Ondas adicionales en el extremo derecho, detrás del contenido */
.cooling-energy-waves .right-wave {position:absolute;right:-245px;top:30%;width:480px;height:480px;border:1px solid rgba(0,154,189,.17);border-radius:50%;opacity:0;transform:scale(.35);animation:coolingRightWave 13s ease-out infinite;}
.cooling-energy-waves .right-wave:nth-of-type(7){animation-delay:3.25s}
.cooling-energy-waves .right-wave:nth-of-type(8){animation-delay:6.5s}
.cooling-energy-waves .right-wave:nth-of-type(9){animation-delay:9.75s}
.cooling-energy-waves .right-glow-secondary {position:absolute;right:-150px;bottom:-150px;width:520px;height:520px;border-radius:50%;background:radial-gradient(circle,rgba(0,154,189,.085),rgba(4,76,127,.025) 42%,transparent 70%);animation:coolingBreathe 12s ease-in-out infinite alternate;}
@keyframes coolingRightWave {0%{transform:scale(.3);opacity:0}14%{opacity:.8}75%{opacity:.25}100%{transform:scale(1.65);opacity:0}}
@keyframes coolingWave {0%{transform:scale(.35);opacity:0} 12%{opacity:.85} 78%{opacity:.28} 100%{transform:scale(1.9);opacity:0}}
@keyframes coolingBreathe {from{transform:translateY(-20px) scale(.95);opacity:.6}to{transform:translateY(25px) scale(1.12);opacity:1}}
/* Aparición progresiva de los elementos del menú, sin ocultar contenido si falla JS */
.service-menu-wrap {animation:coolingAppear .85s .15s both cubic-bezier(.16,1,.3,1)}
.service-selector {animation:coolingAppear .65s both cubic-bezier(.16,1,.3,1)}
.service-selector:nth-child(1){animation-delay:.18s}
.service-selector:nth-child(2){animation-delay:.27s}
.service-selector:nth-child(3){animation-delay:.36s}
.service-selector:nth-child(4){animation-delay:.45s}
.service-selector:nth-child(5){animation-delay:.54s}
@keyframes coolingAppear {from{opacity:0;transform:translateY(16px)}to{opacity:1;transform:translateY(0)}}
@media(max-width:1023px){.cooling-energy-waves .wave{left:-310px;top:15%;width:420px;height:420px}.cooling-energy-waves .right-wave{right:-340px;width:420px;height:420px}.cooling-energy-waves .right-glow-secondary{right:-300px}}
@media(prefers-reduced-motion:reduce){.cooling-energy-waves .wave,.cooling-energy-waves::after,.cooling-energy-waves .right-glow,.cooling-energy-waves .right-wave,.cooling-energy-waves .right-glow-secondary,.service-menu-wrap,.service-selector{animation:none!important;opacity:1!important;transform:none!important}}

.service-intro-label,.service-intro-title,.service-intro-copy{opacity:0;transform:translateY(25px);animation:serviceIntro .9s forwards cubic-bezier(.16,1,.3,1)}

.service-intro-label{animation-delay:.1s}.service-intro-title{animation-delay:.22s}.service-intro-copy{animation-delay:.38s}

@keyframes serviceIntro{to{opacity:1;transform:translateY(0)}}

.service-selector{position:relative;display:grid;grid-template-columns:36px 1fr 30px;gap:14px;align-items:center;width:100%;min-height:76px;padding:15px 0;border-top:1px solid rgba(4,76,127,.13);text-align:left;transition:padding-left .4s cubic-bezier(.16,1,.3,1),background-color .3s ease}

.service-selector:last-child{border-bottom:1px solid rgba(4,76,127,.13)}

.service-selector::before{content:"";position:absolute;left:0;top:0;width:3px;height:0;background:#009ABD;transition:height .4s cubic-bezier(.16,1,.3,1)}

.service-selector:hover,.service-selector.active{padding-left:14px}.service-selector.active::before{height:100%}

.selector-number{color:rgba(4,76,127,.35);font-size:10px;font-weight:700;transition:color .3s ease}

.selector-name{color:#044C7F;font-size:15px;font-weight:650;line-height:1.25}

.selector-arrow{color:rgba(4,76,127,.2);font-size:18px;transform:translateX(-8px);opacity:0;transition:opacity .3s ease,transform .3s ease,color .3s ease}

.service-selector:hover .selector-arrow,.service-selector.active .selector-arrow{opacity:1;transform:translateX(0);color:#009ABD}

.service-selector.active .selector-number{color:#009ABD}

.technical-grid{opacity:.4;background-image:linear-gradient(rgba(4,76,127,.045) 1px,transparent 1px),linear-gradient(90deg,rgba(4,76,127,.045) 1px,transparent 1px);background-size:55px 55px}

.service-background-overlay{background:rgba(255,255,255,.62)}

#service-background{transition:opacity .3s ease;opacity:1}

#service-background.changing{opacity:.25}

#service-big-number{transition:opacity .35s ease,transform .6s cubic-bezier(.16,1,.3,1)}

#panel-line{transition:width .65s cubic-bezier(.16,1,.3,1),background-color .4s ease}

#service-content{transition:opacity .28s ease,transform .35s cubic-bezier(.16,1,.3,1)}

#service-content.changing{opacity:0;transform:translateY(18px)}

#service-features{transition:opacity .25s ease,transform .35s ease}

#service-features.changing{opacity:0;transform:translateY(12px)}

.service-feature{position:relative;min-height:125px;padding:20px;background:rgba(244,247,248,.9);overflow:hidden;transition:background-color .35s ease,transform .35s cubic-bezier(.16,1,.3,1)}

.service-feature::before{content:"";position:absolute;left:0;bottom:0;width:0;height:3px;background:var(--service-accent,#009ABD);transition:width .45s cubic-bezier(.16,1,.3,1)}

.service-feature:hover{background:#fff;transform:translateY(-4px)}.service-feature:hover::before{width:100%}

.service-feature span{display:block;color:rgba(4,76,127,.3);font-size:10px;font-weight:700}

.service-feature p{margin-top:28px;color:#044C7F;font-size:14px;font-weight:650}

.service-control{width:44px;height:44px;display:flex;align-items:center;justify-content:center;border:1px solid rgba(4,76,127,.15);color:#044C7F;transition:background-color .3s ease,color .3s ease,transform .3s ease}

.service-control:hover{background:#044C7F;color:#fff;transform:translateY(-2px)}

.capability-flow{display:flex;align-items:center;justify-content:space-between;gap:20px}.capability-step{flex:1}

.capability-step span{color:#009ABD;font-size:10px;font-weight:700}.capability-step strong{display:block;margin-top:8px;color:white;font-size:clamp(17px,2vw,25px);letter-spacing:.04em}

.capability-arrow{color:rgba(255,255,255,.2);font-size:24px}

.sector-item{position:relative;display:grid;grid-template-columns:50px 1fr 40px;align-items:center;min-height:90px;border-top:1px solid #D1D5DB;transition:padding-left .35s ease}

.sector-item:last-child{border-bottom:1px solid #D1D5DB}

.sector-item::after{content:"";position:absolute;left:0;bottom:-1px;width:0;height:2px;background:#009ABD;transition:width .45s ease}

.sector-item:hover::after{width:100%}.sector-item:hover{padding-left:12px}

.sector-item span{color:#009ABD;font-size:10px;font-weight:700}.sector-item h3{color:#044C7F;font-size:clamp(22px,3vw,32px);font-weight:600}

.sector-item i{color:rgba(4,76,127,.25);font-size:20px;font-style:normal;transition:transform .3s ease,color .3s ease}.sector-item:hover i{color:#009ABD;transform:rotate(45deg)}

.final-service-arrow{flex-shrink:0;width:60px;height:60px;display:flex;align-items:center;justify-content:center;background:#044C7F;color:white;font-size:24px;transition:background-color .35s ease,transform .4s cubic-bezier(.16,1,.3,1)}

.final-service-link:hover .final-service-arrow{background:#009ABD;transform:translateX(10px)}

.capability-reveal,.sector-reveal{opacity:0;transform:translateY(30px);transition:opacity .8s cubic-bezier(.16,1,.3,1),transform .8s cubic-bezier(.16,1,.3,1)}

.capability-reveal.visible,.sector-reveal.visible{opacity:1;transform:translateY(0)}

@media(max-width:1023px){.service-menu{display:flex;overflow-x:auto;gap:8px;padding-bottom:8px;scrollbar-width:none}.service-menu::-webkit-scrollbar{display:none}.service-selector{flex:0 0 auto;display:flex;width:auto;min-height:48px;padding:10px 15px;border:1px solid rgba(4,76,127,.13);gap:8px}.service-selector:last-child{border-bottom:1px solid rgba(4,76,127,.13)}.service-selector::before{display:none}.service-selector:hover,.service-selector.active{padding-left:15px}.service-selector.active{background:#044C7F;border-color:#044C7F}.service-selector.active .selector-number,.service-selector.active .selector-name{color:white}.selector-arrow{display:none}.capability-flow{flex-direction:column;align-items:stretch}.capability-arrow{transform:rotate(90deg)}}

@media(max-width:639px){.service-selector{max-width:240px}.selector-name{font-size:12px}.service-background-overlay{background:rgba(255,255,255,.72)}}

@media(prefers-reduced-motion:reduce){*,*::before,*::after{animation-duration:.01ms!important;animation-iteration-count:1!important;transition-duration:.01ms!important}.capability-reveal,.sector-reveal{opacity:1;transform:none}}

</style>

<script>

document.addEventListener('DOMContentLoaded', function () {

    // Las rutas son relativas a la carpeta public/ de Laravel.

    const services = [

        {

            number: '01', code: 'CE / 01', category: 'Climatización',

            image: @json(asset('images/servicios/cooling-energy-servicio-1-ingenieria-hvac/cooling-energy-ingenieria-hvac-residencial-corregida.webp')),

            title: 'Desarrollo De Ingeniería', subtitle: 'En Sistemas HVAC.',

            description: 'En Cooling Energy desarrollamos ingeniería HVAC para proyectos de calefacción, ventilación y aire acondicionado. Realizamos análisis y cálculo de cargas térmicas, psicrometría, diseño mecánico de distribución y selección de equipos conforme a los requerimientos del inmueble. Integramos soluciones de extracción y renovación de aire, así como el diseño de plantas de agua helada con chillers, sistemas de bombeo y torres de enfriamiento. El alcance incluye comisionamiento para verificar la operación de los sistemas.',

            features: ['HVAC', 'PCI', 'Hidráulicos', 'Instalación', 'Mantenimiento'], accent: '#009ABD', progress: '18%'

        },

        {

            number: '02', code: 'CE / 02', category: 'Seguridad',

            image: @json(asset('images/servicios/cooling-energy-servicio-2-ejecucion-hvac/cooling-energy-ejecucion-hvac-agua-helada-hotel.webp')),

            title: 'Ejecución De Proyectos', subtitle: 'HVAC.',

            description: 'Ejecutamos la instalación de sistemas HVAC para hoteles, residencias y espacios comerciales. Desarrollamos instalaciones mecánicas, electromecánicas e hidráulicas para sistemas de aire acondicionado por agua helada o expansión directa, con montaje de equipos y maniobras. Integramos calefacción, ventilación y climatización según el diseño y los requerimientos de cada proyecto.',

            features: ['HVAC', 'PCI', 'Hidráulicos', 'Instalación', 'Mantenimiento'], accent: '#E31F1E', progress: '31%'

        },

        {

            number: '03', code: 'CE / 03', category: 'Energía',

            image: @json(asset('images/servicios/cooling-energy-servicio-3-proteccion-contra-incendio/cooling-energy-pci-revision-ingenieria-hotel.webp')),

            title: 'Ingeniería Y Ejecución De Redes', subtitle: 'De Protección Contra Incendio (PCI).',

            description: 'Desarrollamos la ingeniería e instalación de sistemas de protección contra incendio (PCI) para hoteles, desarrollos residenciales y edificios comerciales. El servicio comprende diseño, proyección, selección de equipamiento, instrumentación e instalación de redes hidráulicas contra incendio y sistemas de bombeo relacionados, conforme a los requerimientos técnicos del proyecto.',

            features: ['HVAC', 'PCI', 'Hidráulicos', 'Instalación', 'Mantenimiento'], accent: '#009ABD', progress: '44%'

        },

        {

            number: '04', code: 'CE / 04', category: 'Instalaciones',

            image: @json(asset('images/servicios/cooling-energy-servicio-4-redes-hidraulicas-hidrosanitarias/cooling-energy-red-sanitaria-antes-colado.webp')),

            title: 'Ingeniería Y Ejecución Redes', subtitle: 'Hidráulicas.',

            description: 'Diseñamos e instalamos redes hidráulicas e hidrosanitarias para proyectos hoteleros, residenciales y comerciales. Integramos ingeniería, proyección y selección de equipamiento hidráulico de acuerdo con las necesidades del inmueble. Desarrollamos instalaciones para distribución de agua y desalojo sanitario, con soluciones adaptadas a la configuración de cada proyecto.',

            features: ['HVAC', 'PCI', 'Hidráulicos', 'Instalación', 'Mantenimiento'], accent: '#009ABD', progress: '57%'

        },

        {

            number: '05', code: 'CE / 05', category: 'Construcción',

            image: @json(asset('images/servicios/cooling-energy-servicio-5-mantenimiento/cooling-energy-mantenimiento-refrigeracion.webp')),

            title: 'Mantenimiento Preventivo Y Correctivo En Sistemas', subtitle: 'HVAC–PCI–Hidrónicos–Cocinas–Frigorífico Y Equipamiento Relacionado.',

            description: 'Realizamos mantenimiento preventivo y correctivo de sistemas de aire acondicionado y ventilación (HVAC), protección contra incendio (PCI), sistemas hidrónicos, cocinas, equipos frigoríficos y equipamiento relacionado. Atendemos las necesidades de conservación y reparación de las instalaciones para contribuir a su funcionamiento y a la continuidad de operación del inmueble. El alcance se define según el tipo de sistema y las condiciones del equipo.',

            features: ['HVAC', 'PCI', 'Hidráulicos', 'Instalación', 'Mantenimiento'], accent: '#009ABD', progress: '70%'

        }

    ];

    const selectors = document.querySelectorAll('.service-selector');

    const serviceBackground = document.getElementById('service-background');

    const bigNumber = document.getElementById('service-big-number');

    const category = document.getElementById('service-category');

    const code = document.getElementById('service-code');

    const title = document.getElementById('service-title');

    const description = document.getElementById('service-description');

    const features = document.getElementById('service-features');

    const content = document.getElementById('service-content');

    const panelLine = document.getElementById('panel-line');

    const previousButton = document.getElementById('previous-service');

    const nextButton = document.getElementById('next-service');

    let currentService = 0;

    let changeTimer;

    let backgroundTimer;

    function renderFeatures(service) {

        features.replaceChildren();

        service.features.forEach((feature, index) => {

            const item = document.createElement('div');

            item.className = 'service-feature';

            item.style.setProperty('--service-accent', service.accent);

            const number = document.createElement('span');

            number.textContent = String(index + 1).padStart(2, '0');

            const label = document.createElement('p');

            label.textContent = feature;

            item.append(number, label);

            features.appendChild(item);

        });

    }

    function setBackground(service) {

        // Cada selección cambia la URL. Si falla la carga, conserva el color base.

        clearTimeout(backgroundTimer);

        serviceBackground.classList.add('changing');

        const requestedImage = service.image;

        backgroundTimer = setTimeout(() => {

            serviceBackground.style.backgroundImage = 'url(' + JSON.stringify(requestedImage) + ')';

            serviceBackground.classList.remove('changing');

        }, 120);

    }

    function changeService(index, immediate = false) {

        index = (index + services.length) % services.length;

        currentService = index;

        const service = services[index];

        clearTimeout(changeTimer);

        setBackground(service);

        selectors.forEach((selector) => {

            const active = Number(selector.dataset.service) === index;

            selector.classList.toggle('active', active);

            selector.setAttribute('aria-selected', active ? 'true' : 'false');

        });

        if (!immediate) {

            content.classList.add('changing');

            features.classList.add('changing');

            bigNumber.style.opacity = '0';

            bigNumber.style.transform = 'translateY(25px)';

        }

        changeTimer = setTimeout(() => {

            bigNumber.textContent = service.number;

            category.textContent = service.category;

            category.style.color = service.accent;

            code.textContent = service.code;

            title.replaceChildren(document.createTextNode(service.title + ' '));

            const subtitle = document.createElement('span');

            subtitle.className = 'block text-[#044C7F]/60';

            subtitle.textContent = service.subtitle;

            title.appendChild(subtitle);

            description.textContent = service.description;

            panelLine.style.width = service.progress;

            panelLine.style.backgroundColor = service.accent;

            renderFeatures(service);

            content.classList.remove('changing');

            features.classList.remove('changing');

            bigNumber.style.opacity = '1';

            bigNumber.style.transform = 'translateY(0)';

        }, immediate ? 0 : 260);

    }

    selectors.forEach((selector) => selector.addEventListener('click', () => changeService(Number(selector.dataset.service))));

    previousButton.addEventListener('click', () => changeService(currentService - 1));

    nextButton.addEventListener('click', () => changeService(currentService + 1));

    const reveals = document.querySelectorAll('.capability-reveal, .sector-reveal');

    if ('IntersectionObserver' in window) {

        const observer = new IntersectionObserver((entries) => {

            entries.forEach((entry) => {

                if (entry.isIntersecting) {

                    entry.target.classList.add('visible');

                    observer.unobserve(entry.target);

                }

            });

        }, { threshold: .12, rootMargin: '0px 0px -40px 0px' });

        reveals.forEach((element, index) => {

            element.style.transitionDelay = ((index % 4) * 80) + 'ms';

            observer.observe(element);

        });

    } else {

        reveals.forEach((element) => element.classList.add('visible'));

    }

    changeService(0, true);

});

</script>

@endsection
