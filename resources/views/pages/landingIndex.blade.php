@extends('layouts.landing-master')

@section('styles')
 
        <!-- SWIPERJS CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">
        <style>
            .landing-hero-img-wrapper {
                width: min(500px, 100%);
                margin-left: auto;
                margin-right: auto;
                display: flex;
                justify-content: center;
            }
            .landing-hero-img {
                width: min(500px, 100%);
                aspect-ratio: 1 / 1;
                border-radius: 50%;
                clip-path: circle(50% at 50% 50%);
                object-fit: cover;
                box-shadow: 0 20px 45px rgba(9, 15, 38, 0.22);
            }
            .landing-main-image.landing-heading-img {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            @media (max-width: 575.98px) {
                .landing-hero-img-wrapper {
                    width: min(320px, 90%);
                    margin-left: auto;
                    margin-right: auto;
                }
            }
            .landing-feature-card .card-body {
                padding: 1.5rem;
            }
            .landing-feature-card .avatar {
                margin: 0 auto 0.75rem;
            }
            .landing-feature-card h6 {
                margin-bottom: 0.5rem;
            }
            .landing-feature-card p {
                font-size: 0.92rem;
            }
            .landing-body .landing-banner {
                background-color: #1D2031 !important;
                background-image: none !important;
            }
            .landing-body .landing-banner::before {
                background-color: #1D2031 !important;
                opacity: 1;
            }
            .landing-body .landing-banner .section {
                background-color: transparent;
            }
            .landing-body .main-content {
                padding: 0 !important;
            }
            .landing-body .app-header,
            .landing-body .app-header .main-header-container {
                background-color: #1D2031 !important;
            }
            .landing-body .app-sidebar,
            .landing-body .app-sidebar .main-menu-container,
            .landing-body .app-sidebar .main-menu {
                transition: background-color 0.3s ease;
            }
            .landing-body .app-sidebar:not(.sticky-pin),
            .landing-body .app-sidebar:not(.sticky-pin) .main-menu-container,
            .landing-body .app-sidebar:not(.sticky-pin) .main-menu {
                background-color: #1D2031 !important;
            }
            .landing-body .app-sidebar:not(.sticky-pin) .horizontal-logo .toggle-logo,
            .landing-body .app-header .horizontal-logo .toggle-logo {
                display: none;
            }
            .landing-body .app-sidebar:not(.sticky-pin) .horizontal-logo .toggle-dark,
            .landing-body .app-header .horizontal-logo .toggle-dark {
                display: block;
            }
            html[data-theme-mode="dark"] .landing-body .app-header,
            html[data-theme-mode="dark"] .landing-body .app-header .main-header-container,
            html[data-theme-mode="dark"] .landing-body .app-sidebar:not(.sticky-pin),
            html[data-theme-mode="dark"] .landing-body .app-sidebar:not(.sticky-pin) .main-menu-container,
            html[data-theme-mode="dark"] .landing-body .app-sidebar:not(.sticky-pin) .main-menu {
                background-color: #1D2031 !important;
            }
            .landing-body .app-sidebar.sticky.sticky-pin,
            .landing-body .app-sidebar.sticky.sticky-pin .main-menu-container,
            .landing-body .app-sidebar.sticky.sticky-pin .main-menu,
            .landing-body #sidebar.sticky.sticky-pin,
            .landing-body #sidebar.sticky.sticky-pin .main-sidebar,
            .landing-body #sidebar.sticky.sticky-pin .main-menu-container {
                background-color: #ffffff !important;
            }
            .landing-body .app-sidebar.sticky.sticky-pin .horizontal-logo .toggle-logo,
            .landing-body #sidebar.sticky.sticky-pin .horizontal-logo .toggle-logo {
                display: block;
            }
            .landing-body .app-sidebar.sticky.sticky-pin .horizontal-logo .toggle-dark,
            .landing-body #sidebar.sticky.sticky-pin .horizontal-logo .toggle-dark {
                display: none;
            }
            html[data-theme-mode="dark"] .landing-body .app-sidebar.sticky.sticky-pin,
            html[data-theme-mode="dark"] .landing-body .app-sidebar.sticky.sticky-pin .main-menu-container,
            html[data-theme-mode="dark"] .landing-body .app-sidebar.sticky.sticky-pin .main-menu,
            html[data-theme-mode="dark"] .landing-body #sidebar.sticky.sticky-pin,
            html[data-theme-mode="dark"] .landing-body #sidebar.sticky.sticky-pin .main-sidebar,
            html[data-theme-mode="dark"] .landing-body #sidebar.sticky.sticky-pin .main-menu-container {
                background-color: #ffffff !important;
            }
            @media (max-width: 991.98px) {
                .landing-body .app-header,
                .landing-body .app-header .main-header-container,
                .landing-body #sidebar:not(.sticky-pin),
                .landing-body #sidebar:not(.sticky-pin) .main-sidebar,
                .landing-body #sidebar:not(.sticky-pin) .main-menu-container {
                    background-color: #1D2031 !important;
                }
            }
            @media (max-width: 767.98px) {
                .landing-body .landing-banner {
                    position: relative;
                    width: 100vw;
                    left: 50%;
                    right: 50%;
                    margin-left: -50vw;
                    margin-right: -50vw;
                    padding: 0;
                    margin-top: 0;
                    margin-bottom: 0;
                }
                .landing-body .landing-banner .section {
                    padding: 2.5rem 0 !important;
                    margin: 0 !important;
                }
                .landing-body .landing-banner .container,
                .landing-body .landing-banner .main-banner-container {
                    width: 100% !important;
                    max-width: 100% !important;
                    padding-inline: 3.5rem !important;
                    padding-left: 3.5rem !important;
                    padding-right: 3.5rem !important;
                    padding-top: 4rem !important;
                    margin-left: 0 !important;
                    margin-right: 0 !important;
                }
                .landing-body .landing-banner .row {
                    margin-inline: 0 !important;
                    margin-left: 0 !important;
                    margin-right: 0 !important;
                    --bs-gutter-x: 0;
                }
                .landing-body .landing-banner [class*="col-"] {
                    padding-left: 0 !important;
                    padding-right: 0 !important;
                }
            }
        </style>
      
@endsection

@section('content')

                    <!-- Start:: Section-1 -->
                    <div class="landing-banner" id="home">
                        <section class="section">
                            <div class="container main-banner-container pb-lg-0">
                                <div class="row align-items-center">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="py-lg-5">
                                            <div class="mb-3">
                                                <h5 class="fw-semibold text-fixed-white op-9">VIDEO ANALÍTICA INTELIGENTE EN TIEMPO REAL</h5>
                                            </div>
                                            <p class="landing-banner-heading mb-3"><span class="text-secondary">Control, Prevensión y Monitoreo</span> de Riesgos con IA y Edge Computing </p>
                                            <div class="fs-16 mb-4 text-fixed-white op-7">Convertimos tus cámaras IP en sensores inteligentes para seguridad operacional, logística e industria. Minttu entrega alertas con contexto, reportes descargables y métricas accionables para equipos de prevención y operaciones.</div>
                                            <ul class="list-unstyled text-fixed-white op-8 mb-4">
                                                <li class="d-flex align-items-center mb-2">
                                                    <i class="bx bx-check-circle text-secondary fs-20 me-2"></i>
                                                    <span>Prevención de riesgos en tiempo real</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-2">
                                                    <i class="bx bx-check-circle text-secondary fs-20 me-2"></i>
                                                    <span>Uso de cámaras IP ya instaladas</span>
                                                </li>
                                                <li class="d-flex align-items-center">
                                                    <i class="bx bx-check-circle text-secondary fs-20 me-2"></i>
                                                    <span>Dashboards y reportes listos para auditorías</span>
                                                </li>
                                            </ul> </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 customize-image text-center">
                                    
                                        <div class="landing-main-image landing-heading-img d-flex justify-content-center">
                                            <div class="landing-hero-img-wrapper">
                                                <video src="{{asset('build/assets/images/landing/heroVideo4.mp4')}}" class="img-fluid landing-hero-img" style="object-fit: contain;" autoplay loop muted playsinline></video>
                                            </div>
                                        </div>
                                    
                                </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- End:: Section-1 -->

                    <!-- Start:: Section-Que-Es-Minttu -->
                    <section class="section section-bg" id="que-es-minttu">
                        <div class="container">
                            <div class="row align-items-center gy-4">
                                <div class="col-lg-6">
                                    <p class="fs-12 fw-semibold text-brand-accent mb-1"><span class="landing-section-heading">¿QUIÉNES SOMOS?</span></p>
                                    <h2 class="fw-semibold mb-3">Minttu SpA</h2>
                                    <p class="text-muted fs-15 mb-3">Minttu es una startup fundada en 2025 por un equipo pequeño que combina experiencia en prevención, datos y automatización. Nacimos con la misión de que cualquier operación pueda convertir sus cámaras en alertas útiles y trazables.</p>
                                    <p class="text-muted fs-15 mb-3">Desde principios de este año hemos estado diseñando la idea y arquitectura de nuestra solución, validando flujos con especialistas en terreno y preparando los módulos críticos para el despliegue.</p>
                                    <p class="text-muted fs-15 mb-3">En noviembre nos adjudicamos un fondo que nos permite acelerar el desarrollo y probar los primeros pilotos. Estamos invirtiendo cada recurso en convertir esta visión en una plataforma robusta y simple de adoptar.</p>
                                    <p class="text-muted fs-15 mb-0">Hoy seguimos construyendo la solución completa y buscamos clientes fundadores, patrocinadores, canales y cualquier apoyo que nos permita escalar más rápido. Si compartes esta visión, conversemos.</p>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="card custom-card border-0 shadow-sm h-100">
                                                <div class="card-body">
                                                    <span class="badge bg-secondary-transparent text-secondary mb-2">Diseño 2025</span>
                                                    <p class="mb-0 text-muted">Arquitectura pensada desde inicios de año junto a especialistas de seguridad y tecnología.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card custom-card border-0 shadow-sm h-100">
                                                <div class="card-body">
                                                    <span class="badge bg-success-transparent text-success mb-2">Fondo adjudicado</span>
                                                    <p class="mb-0 text-muted">Este noviembre aseguramos capital para convertir el plan en entregables concretos y pilotos guiados.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="card custom-card border-0 shadow-sm h-100">
                                                <div class="card-body">
                                                    <span class="badge bg-primary-transparent text-primary mb-2">Buscamos aliados</span>
                                                    <p class="mb-0 text-muted">Clientes, patrocinadores y canales que quieran acompañar nuestro crecimiento y recibir soporte directo de los fundadores.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-Que-Es-Minttu -->

                    <!-- Start:: Section-Problem -->
                    <section class="section" id="problem">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-brand-accent mb-1"><span class="landing-section-heading">EL PROBLEMA</span></p>
                            <h3 class="fw-semibold mb-2">Supervisión manual, costosa y poco trazable</h3>
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <p class="text-muted fs-15 mb-4 fw-normal">Hoy la seguridad operacional depende de rondas humanas o revisión posterior de horas de video. Esto implica altos costos, baja capacidad de reacción y mínima trazabilidad para demostrar cumplimiento normativo.</p>
                                </div>
                            </div>
                            <div class="row g-3 text-start">
                                <div class="col-xl-3 col-lg-3 col-md-6">
                                    <div class="card custom-card border shadow-none h-100">
                                        <div class="card-body">
                                            <i class='bx bx-time-five text-primary fs-22 mb-2'></i>
                                            <h6 class="fw-semibold mb-2">Alta carga operativa</h6>
                                            <p class="text-muted mb-0">Horas de monitoreo manual y revisión posterior de grabaciones duplican los costos de supervisión.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6">
                                    <div class="card custom-card border shadow-none h-100">
                                        <div class="card-body">
                                            <i class='bx bx-bell-off text-primary fs-22 mb-2'></i>
                                            <h6 class="fw-semibold mb-2">Baja capacidad de reacción</h6>
                                            <p class="text-muted mb-0">Las alertas llegan tarde, cuando el incidente ya ocurrió y el riesgo se materializó.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6">
                                    <div class="card custom-card border shadow-none h-100">
                                        <div class="card-body">
                                            <i class='bx bx-git-compare text-primary fs-22 mb-2'></i>
                                            <h6 class="fw-semibold mb-2">Falta de trazabilidad</h6>
                                            <p class="text-muted mb-0">No existen registros automáticos que permitan auditar eventos y tomar decisiones basadas en datos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6">
                                    <div class="card custom-card border shadow-none h-100">
                                        <div class="card-body">
                                            <i class='bx bx-error text-primary fs-22 mb-2'></i>
                                            <h6 class="fw-semibold mb-2">Mayor riesgo de incidentes</h6>
                                            <p class="text-muted mb-0">La supervisión manual no escala a todas las áreas críticas, aumentando la probabilidad de accidentes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-Problem -->

                    <!-- Start:: Section-Como-Funciona -->
                    <section class="section section-bg" id="como-funciona">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-brand-accent mb-1"><span class="landing-section-heading">NUESTRA SOLUCIÓN</span></p>
                            <h3 class="fw-semibold mb-2">Video analítica inteligente para seguridad y operación en terreno</h3>
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <p class="text-muted fs-15 mb-3 fw-normal">Implementamos analítica de video basada en IA y procesamiento en el borde para convertir las cámaras existentes en sensores activos. Generamos alertas automáticas hacia una plataforma web centralizada, con métricas y reportes descargables para equipos de seguridad y operación.</p>
                                </div>
                            </div>
                            <div class="row justify-content-between align-items-center mx-0">
                                <div class="col-xxl-5 col-xl-5 col-lg-5 customize-image text-center">
                                    
                                    <div class="landing-main-image landing-heading-img d-flex justify-content-center">
                                        <div class="landing-hero-img-wrapper">
                                            <video src="{{asset('build/assets/images/landing/detectVideo5.mp4')}}" class="img-fluid landing-hero-img" style="object-fit: contain;" autoplay loop muted playsinline></video>
                                        </div>
                                    </div>
                                
                                    
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 pt-5 pb-0 px-lg-2 px-5 text-start">
                                    <h5 class="text-lg-start fw-semibold mb-3">Analizamos eventos críticos, enviamos alertas y trazamos cada incidente</h5>
                                    <p class="text-muted">Las detecciones se adaptan a la realidad de cada cliente, activando protocolos y evidencias listas para auditar. Actualmente contamos con 3 analíticas de video.</p>
                                    <div class="row gy-3">
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <span>
                                                    <i class='bx bxs-hard-hat text-primary fs-18'></i>
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-semibold mb-0">Uso de elementos de protección personal</h6>
                                                    <p class="text-muted mb-0">Verificamos casco y chaleco en zonas operativas para disminuir accidentes y reforzar el cumplimiento normativo.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <span>
                                                    <i class='bx bxs-phone-off text-primary fs-18'></i>
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-semibold mb-0">Detección de uso de celular</h6>
                                                    <p class="text-muted mb-0">Identificamos distracciones en terreno para reducir eventos por falta de atención y apoyar campañas de seguridad.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <span>
                                                    <i class='bx bxs-lock text-primary fs-18'></i>
                                                </span>
                                                <div class="ms-2">
                                                    <h6 class="fw-semibold mb-0">Ingreso a zonas restringidas</h6>
                                                    <p class="text-muted mb-0">Alertamos accesos no autorizados, registrando cámara, hora y responsable para generar trazabilidad inmediata.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="fw-semibold mb-4 mt-4">Implementación en tres pasos rápidos</h3>
                            <div class="row g-3 text-start">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="avatar avatar-lg avatar-rounded bg-primary-transparent me-2">
                                                    <i class='bx bx-camera fs-24'></i>
                                                </span>
                                                <h6 class="fw-semibold mb-0">Paso 1</h6>
                                            </div>
                                            <h5 class="fw-semibold mb-2">Conecta tus cámaras IP existentes</h5>
                                            <p class="text-muted mb-0">Integramos las cámaras ya desplegadas en sitio mediante un servidor Edge local, sin reemplazar tu infraestructura.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="avatar avatar-lg avatar-rounded bg-primary-transparent me-2">
                                                    <i class='bx bx-chip fs-24'></i>
                                                </span>
                                                <h6 class="fw-semibold mb-0">Paso 2</h6>
                                            </div>
                                            <h5 class="fw-semibold mb-2">Detección automática con IA en el Edge</h5>
                                            <p class="text-muted mb-0">Modelos propios de visión por computador detectan uso de EPP, celular e ingresos a zonas restringidas en tiempo real.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="avatar avatar-lg avatar-rounded bg-primary-transparent me-2">
                                                    <i class='bx bx-analyse fs-24'></i>
                                                </span>
                                                <h6 class="fw-semibold mb-0">Paso 3</h6>
                                            </div>
                                            <h5 class="fw-semibold mb-2">Alertas y trazabilidad desde la plataforma</h5>
                                            <p class="text-muted mb-0">Cada detección se transforma en alertas gestionables, métricas y reportes CSV/PDF para tus equipos de prevención de riesgos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-Como-Funciona -->
                    <!-- Start:: Section-Plataforma -->
                    <section class="section" id="plataforma">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <p class="fs-12 fw-semibold text-brand-accent mb-1"><span class="landing-section-heading">PLATAFORMA WEB DE GESTIÓN</span></p>
                                    <h2 class="fw-semibold mb-3">Una plataforma pensada para prevención y operaciones</h2>
                                    <p class="text-muted fs-15 mb-4">Dashboard, módulo de alertas, cámaras conectadas y trazabilidad completa en un solo lugar. Minttu centraliza detecciones de IA en flujos que tu equipo ya domina.</p>
                                    <div class="row g-3 g-lg-4 justify-content-center">
                                        <div class="col-12 col-sm-6">
                                            <div class="card custom-card border-0 shadow-sm h-100 text-center landing-feature-card">
                                                <div class="card-body text-center d-flex flex-column align-items-center gap-2">
                                                    <span class="avatar avatar-rounded bg-primary-transparent">
                                                        <i class='bx bx-pulse fs-22'></i>
                                                    </span>
                                                    <div>
                                                        <h6 class="fw-semibold">Dashboard & KPIs</h6>
                                                        <p class="text-muted mb-0">Indicadores por sitio, cámaras y tipo de riesgo para priorizar acciones.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="card custom-card border-0 shadow-sm h-100 text-center landing-feature-card">
                                                <div class="card-body text-center d-flex flex-column align-items-center gap-2">
                                                    <span class="avatar avatar-rounded bg-primary-transparent">
                                                        <i class='bx bx-bell fs-22'></i>
                                                    </span>
                                                    <div>
                                                        <h6 class="fw-semibold">Gestión de alertas</h6>
                                                        <p class="text-muted mb-0">Estados pendiente, revisada, cerrada o falsa alarma con comentarios y responsables.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="card custom-card border-0 shadow-sm h-100 text-center landing-feature-card">
                                                <div class="card-body text-center d-flex flex-column align-items-center gap-2">
                                                    <span class="avatar avatar-rounded bg-primary-transparent">
                                                        <i class='bx bx-video fs-22'></i>
                                                    </span>
                                                    <div>
                                                        <h6 class="fw-semibold">Cámaras y analíticas</h6>
                                                        <p class="text-muted mb-0">Configura reglas por cámara, horarios, zonas y perfiles de riesgo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="card custom-card border-0 shadow-sm h-100 text-center landing-feature-card">
                                                <div class="card-body text-center d-flex flex-column align-items-center gap-2">
                                                    <span class="avatar avatar-rounded bg-primary-transparent">
                                                        <i class='bx bx-file fs-22'></i>
                                                    </span>
                                                    <div>
                                                        <h6 class="fw-semibold">Reportes CSV/PDF</h6>
                                                        <p class="text-muted mb-0">Descarga evidencias y métricas listas para auditorías internas y externas.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-6 text-center text-lg-end">
                                    <div class="d-flex flex-column align-items-center align-items-lg-end gap-3">
                                        <div class="p-3 p-md-4 bg-white rounded-4 shadow-lg border border-2 border-light w-100" style="max-width: 550px;">
                                            <img src="{{asset('build/assets/images/landing/webplat.png')}}" alt="Panel principal de la plataforma Minttu" class="img-fluid rounded-3 w-100" style="object-fit: contain;">
                                        </div>
                                        <div class="p-3 p-md-4 bg-white rounded-4 shadow-lg border border-2 border-light w-100" style="max-width: 550px;">
                                            <img src="{{asset('build/assets/images/landing/webplat2.png')}}" alt="Panel principal de la plataforma Minttu" class="img-fluid rounded-3 w-100" style="object-fit: contain;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-Plataforma -->
                    <!-- Start:: Section-Analiticas -->
                    <section class="section section-bg" id="analiticas">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-brand-accent mb-1"><span class="landing-section-heading">ANALÍTICAS DISPONIBLES</span></p>
                            <h3 class="fw-semibold mb-2">Analíticas actuales y en desarrollo</h3>
                            <div class="row justify-content-center mb-3">
                                <div class="col-xl-8">
                                    <p class="text-muted fs-15 mb-0 fw-normal">Cada caso de uso se configura por cámara y regla. Los modelos se entrenan con datos locales para mantener precisión operacional.</p>
                                </div>
                            </div>
                            <div class="row g-3 text-start mb-4">
                                <div class="col-md-4">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <span class="avatar avatar-md avatar-rounded bg-primary-transparent text-primary mb-3">
                                                <i class='bx bxs-hard-hat fs-20'></i>
                                            </span>
                                            <span class="badge bg-success-transparent text-success mb-2">Analítica actual</span>
                                            <h6 class="fw-semibold mb-2">Uso de EPP</h6>
                                            <p class="text-muted mb-0">Validamos casco, chaleco y otros elementos críticos para reducir incidentes en faenas y patios logísticos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <span class="avatar avatar-md avatar-rounded bg-primary-transparent text-primary mb-3">
                                                <i class='bx bx-mobile-vibration fs-20'></i>
                                            </span>
                                            <span class="badge bg-success-transparent text-success mb-2">Analítica actual</span>
                                            <h6 class="fw-semibold mb-2">Uso de celular</h6>
                                            <p class="text-muted mb-0">Detectamos distracciones frente a maquinaria, grúas o líneas de producción para reforzar campañas de seguridad.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <span class="avatar avatar-md avatar-rounded bg-primary-transparent text-primary mb-3">
                                                <i class='bx bx-door-open fs-20'></i>
                                            </span>
                                            <span class="badge bg-success-transparent text-success mb-2">Analítica actual</span>
                                            <h6 class="fw-semibold mb-2">Ingreso a zonas restringidas</h6>
                                            <p class="text-muted mb-0">Alertas con cámara, hora y evidencia cuando una persona o vehículo entra a áreas críticas sin autorización.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3 text-start">
                                <div class="col-md-4 col-sm-6">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <span class="avatar avatar-md avatar-rounded bg-secondary-transparent text-secondary mb-3">
                                                <i class='bx bx-group fs-20'></i>
                                            </span>
                                            <span class="badge bg-secondary-transparent text-secondary mb-2">Próximamente</span>
                                            <h6 class="fw-semibold mb-2">Conteo de personas</h6>
                                            <p class="text-muted mb-0">Controlar flujos por línea o zona de evacuación.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <span class="avatar avatar-md avatar-rounded bg-secondary-transparent text-secondary mb-3">
                                                <i class='bx bx-user-check fs-20'></i>
                                            </span>
                                            <span class="badge bg-secondary-transparent text-secondary mb-2">Próximamente</span>
                                            <h6 class="fw-semibold mb-2">Control de aforo</h6>
                                            <p class="text-muted mb-0">Notificaciones cuando se supera la capacidad segura.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <span class="avatar avatar-md avatar-rounded bg-secondary-transparent text-secondary mb-3">
                                                <i class='bx bx-car fs-20'></i>
                                            </span>
                                            <span class="badge bg-secondary-transparent text-secondary mb-2">Próximamente</span>
                                            <h6 class="fw-semibold mb-2">Detección vehicular</h6>
                                            <p class="text-muted mb-0">Seguimiento a vehículos y forklifts en patios y bodegas.</p>
                                        </div>
                                    </div>
                                </div>
                      
                                <div class="row justify-content-center mb-3 mt-4">
                                    <div class="col-xl-8">
                                        <p class="text-muted fs-15 mb-0 fw-normal">Nuestro servicios incluyen personalización de analíticas, donde desarrollamos e implementamos nuevas funciones a medida del cliente.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-Analiticas -->

                    

                    <!-- Start:: Section-Corfo -->
                    <section class="section" id="corfo">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
                                    <p class="fs-12 fw-semibold text-brand-accent mb-1"><span class="landing-section-heading">RESPALDO INSTITUCIONAL</span></p>
                                    <h3 class="fw-semibold mb-3">Proyecto financiado por CORFO Semilla Inicia 2025</h3>
                                    <p class="text-muted fs-15 mb-3">Minttu fue adjudicado por CORFO para impulsar el desarrollo, validación y escalamiento de nuestra plataforma de video analítica inteligente. Este respaldo acredita:</p>
                                    <ul class="text-muted fs-15 mb-4 ps-3">
                                        <li class="mb-1">Innovación tecnológica en visión computacional y Edge Computing.</li>
                                        <li class="mb-1">Solidez del equipo fundador y capacidades de despliegue en terreno.</li>
                                        <li class="mb-0">Viabilidad comercial del modelo SaaS para industrias de alto riesgo.</li>
                                    </ul>
                                    <div class="row g-3">
                                        <div class="col-sm-4">
                                            <div class="card custom-card shadow-none border h-100">
                                                <div class="card-body">
                                                    <h6 class="fw-semibold mb-1">Validación</h6>
                                                    <p class="text-muted mb-0">Corrobora la pertinencia de la propuesta frente a riesgos operacionales reales.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card custom-card shadow-none border h-100">
                                                <div class="card-body">
                                                    <h6 class="fw-semibold mb-1">Desarrollo</h6>
                                                    <p class="text-muted mb-0">Financia la evolución tecnológica de nuestros modelos y plataforma Edge.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card custom-card shadow-none border h-100">
                                                <div class="card-body">
                                                    <h6 class="fw-semibold mb-1">Escalamiento</h6>
                                                    <p class="text-muted mb-0">Permite pilotear con nuevos clientes y preparar la expansión comercial.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-center text-lg-end">
                                    <img src="{{asset('build/assets/images/landing/logo-corfo-1.webp')}}" alt="" class="img-fluid" style="width: 500px; height: 100%; object-fit: contain;">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-Corfo -->

                    <!-- Start:: Section-Roadmap -->
                    <section class="section section-bg" id="roadmap">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-brand-accent mb-1"><span class="landing-section-heading">PROYECCIÓN Y ESCALABILIDAD</span></p>
                            <h3 class="fw-semibold mb-3">Roadmap</h3>
                            <div class="row justify-content-center mb-4">
                                <div class="col-xl-8">
                                    <p class="text-muted fs-15 mb-0 fw-normal">El plan CORFO acelera nuestro paso desde nuestra idea inicial, haciendola realidad como pilotos industriales proyectandonos a una plataforma SaaS multiempresa con nuevas analíticas especializadas.</p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xl-8 text-start">
                                    <div class="border-start border-2 border-primary ps-4">
                                        <div class="position-relative pb-4 mb-4">
                                           <span class="badge bg-primary-transparent text-primary mb-2">Fase 1 · 0–9 meses</span>
                                            <h5 class="fw-semibold mb-2">Pilotos, validación y primeros clientes</h5>
                                            <p class="text-muted mb-2">Despliegues en construcción y logística, documentación de ROI y ajustes de modelos Edge en terreno.</p>
                                            <ul class="text-muted mb-0 ps-4">
                                                <li>Implementación rápida y acompañamiento operacional.</li>
                                                <li>Integración con sistemas del cliente y APIs.</li>
                                                <li>Base de casos de éxito para sectores prioritarios.</li>
                                            </ul>
                                        </div>
                                        <div class="position-relative pb-4 mb-4">
                                            <span class="badge bg-primary-transparent text-primary mb-2">Fase 2 · 18–24 meses</span>
                                            <h5 class="fw-semibold mb-2">Escalamiento SaaS y nuevas analíticas</h5>
                                            <p class="text-muted mb-2">Planes por cámara y tipo de analítica, alianzas con partners de Edge Computing y cobertura para retail, transporte y minería.</p>
                                            <ul class="text-muted mb-0 ps-4">
                                                <li>Conteo de personas, control de aforo y detección vehicular.</li>
                                                <li>Despliegues multisitio con soporte centralizado.</li>
                                                <li>Marketplace de integraciones (APIs, webhooks, BI).</li>
                                            </ul>
                                        </div>
                                        <div class="position-relative">
                                            <span class="badge bg-primary-transparent text-primary mb-2">Fase 3 · 24+ meses</span>
                                            <h5 class="fw-semibold mb-2">Plataforma multiempresa y expansión regional</h5>
                                            <p class="text-muted mb-2">Analítica avanzada, automatización de reportes regulatorios y operación SaaS para Latinoamérica.</p>
                                            <ul class="text-muted mb-0 ps-4">
                                                <li>Detección de comportamientos anómalos y congestión.</li>
                                                <li>Modelos adaptativos y benchmarking inter-plantas.</li>
                                                <li>Estrategia de partners regionales y canal.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-Roadmap -->

              

                    <!-- Start:: Section-10 -->
                    <section class="section" id="contact">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-brand-accent mb-1"><span class="landing-section-heading">CONTÁCTANOS</span></p>
                            <h3 class="fw-semibold mb-2">Conversemos sobre seguridad y video analítica</h3>
                            <div class="row justify-content-center">
                                <div class="col-xl-9">
                                    <p class="text-muted fs-15 mb-5 fw-normal">Si buscas mejorar la prevención de riesgos, optimizar la supervisión o explorar un piloto con Minttu, escríbenos y coordinemos el siguiente paso.</p>
                                </div>
                            </div>
                            <div class="row text-start">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="card custom-card border shadow-none">
                                        <div class="card-body p-0">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.43123456789!2d-70.648269684796!3d-33.448890980768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5a1f90f1b1b%3A0x2b0b1b1b1b1b1b1b!2sSantiago%2C%20Chile!5e0!3m2!1ses!2scl!4v1670225507254!5m2!1ses!2scl" height="365" style="border:0;width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="card custom-card overflow-hidden section-bg border overflow-hidden shadow-none">
                                        <div class="card-body">
                                            <div class="row gy-3 mt-2 px-3">
                                                <div class="col-xl-6">
                                                    <div class="row gy-3">
                                                        <div class="col-xl-12">
                                                            <label for="contact-address-name" class="form-label">Nombre Completo:</label>
                                                            <input type="text" class="form-control" id="contact-address-name" placeholder="Ingresa tu nombre">
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="contact-address-phone" class="form-label">Teléfono:</label>
                                                            <input type="text" class="form-control" id="contact-address-phone" placeholder="Ingresa tu número de teléfono">
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="contact-address-address" class="form-label">Dirección:</label>
                                                            <textarea class="form-control" id="contact-address-address" rows="1">Santiago, Chile</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="contact-address-message" class="form-label">Mensaje:</label>
                                                    <textarea class="form-control" id="contact-address-message" rows="8"></textarea>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="d-flex mt-4">
                                                        <div class="">
                                                            <div class="btn-list">
                                                                <a href="https://www.linkedin.com/company/minttu" class="btn btn-icon btn-primary-light btn-wave">
                                                                    <i class="ri-linkedin-line fw-bold"></i>
                                                                </a>
                                                                <a href="https://www.x.com/minttu.cl" class="btn btn-icon btn-primary-light btn-wave">
                                                                    <i class="ri-twitter-line fw-bold"></i>
                                                                </a>
                                                                <a href="https://www.instagram.com/minttu.cl" class="btn btn-icon btn-primary-light btn-wave">
                                                                    <i class="ri-instagram-line fw-bold"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="{{route('index')}}" class="btn btn-primary btn-wave">Enviar Mensaje</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-10 -->

                    <!-- Start:: Section-11 -->
                    <section class="section landing-footer text-fixed-white">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-md-4 col-sm-6 col-12 mb-md-0 mb-3">
                                    <div class="px-4">
                                        <p class="fw-semibold mb-3">
                                            <a href="/" class="d-inline-block">
                                                <img src="{{asset('build/assets/images/brand-logos/desktop-white.png')}}" alt="Minttu" style="width: 600px; max-width: 100%; height: auto;">
                                            </a>
                                        </p>
                                        <p class="mb-2 op-6 fw-normal">
                                            Video analítica inteligente para operaciones más seguras.
                                        </p>
                                        <p class="mb-0 op-6 fw-normal"><span class="text-muted fs-15"> Copyright © <span id="year"></span> <a
                                            href="minttu.cl" class="text-secondary fw-semibold"><u>MINTTU</u></a>.
                                            <br>
                                            Founded by Menta. All rights reserved.
                                        </span></p>
                                    </div>
                                </div>
                                
                               
                                <div class="col-md-4 col-sm-6 col-12">
                                    <div class="px-4">
                                        <h6 class="fw-semibold text-fixed-white">CONTACTO</h6>
                                        <ul class="list-unstyled fw-normal landing-footer-list">
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-home-4-line me-1 align-middle"></i> Santiago, Chile</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-mail-line me-1 align-middle"></i> info@minttu.com</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-phone-line me-1 align-middle"></i> +(569)-882 18431</a>
                                            </li>
                                            <li class="mt-3">
                                                <p class="mb-2 fw-semibold op-8">SIGUENOS EN :</p>
                                                <div class="mb-0">
                                                    <div class="btn-list">
                                                 
                                                        <a class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light" href="https://www.x.com/minttu.cl">
                                                            <i class="ri-twitter-line fw-bold"></i>
                                                        </a>
                                                        <a class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light" href="https://www.instagram.com/minttu.cl">
                                                            <i class="ri-instagram-line fw-bold"></i>
                                                        </a>
                                                        <a class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light" href="https://www.linkedin.com/company/minttu">
                                                            <i class="ri-linkedin-line fw-bold"></i>
                                                        </a>
                                                        <a class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light" href="https://www.youtube.com/minttu.cl">
                                                            <i class="ri-youtube-line fw-bold"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-11 -->

@endsection

@section('scripts')

        <!-- SWIPER JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- INTERNAL LANDING JS -->
        @vite('resources/assets/js/landing.js')


@endsection