@extends('layouts.landing-master')

@section('styles')
 
        <!-- SWIPERJS CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">
      
@endsection

@section('content')

                    <!-- Start:: Section-1 -->
                    <div class="landing-banner" id="home">
                        <section class="section">
                            <div class="container main-banner-container pb-lg-0">
                                <div class="row">
                                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-8">
                                        <div class="py-lg-5">
                                            <div class="mb-3">
                                                <h5 class="fw-semibold text-fixed-white op-9">VIDEO ANALÍTICA INTELIGENTE EN TIEMPO REAL</h5>
                                            </div>
                                            <p class="landing-banner-heading mb-3">Detecta incidentes antes de que ocurran. IA + Edge Computing para prevenir riesgos y lograr trazabilidad operacional en tiempo real.</p>
                                            <div class="fs-16 mb-4 text-fixed-white op-7">Convertimos tus cámaras IP en sensores inteligentes para seguridad operacional, logística e industria. Minttu entrega alertas con contexto, reportes descargables y métricas accionables para equipos de prevención y operaciones.</div>
                                            <ul class="list-unstyled text-fixed-white op-8 mb-4">
                                                <li class="d-flex align-items-center mb-2">
                                                    <i class="bx bx-check-circle text-primary fs-20 me-2"></i>
                                                    <span>Prevención de riesgos en tiempo real</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-2">
                                                    <i class="bx bx-check-circle text-primary fs-20 me-2"></i>
                                                    <span>Uso de cámaras IP ya instaladas</span>
                                                </li>
                                                <li class="d-flex align-items-center">
                                                    <i class="bx bx-check-circle text-primary fs-20 me-2"></i>
                                                    <span>Dashboards y reportes listos para auditorías</span>
                                                </li>
                                            </ul>
                                            <div class="d-flex flex-wrap gap-3">
                                                <a href="#contacto" class="btn btn-primary btn-lg btn-wave">Agenda una demo</a>
                                                <a href="#contacto" class="btn btn-outline-light btn-lg btn-wave text-fixed-white">Solicita un piloto</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4">
                                        <div class="text-end landing-main-image landing-heading-img">
                                            <img src="{{asset('https://laravelui.spruko.com/ynex/build/assets/images/media/landing/1.png')}}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- End:: Section-1 -->

                    <!-- Start:: Section-Como-Funciona -->
                    <section class="section section-bg" id="como-funciona">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-brand-accent mb-1"><span class="landing-section-heading">CÓMO FUNCIONA MINTTU</span></p>
                            <h3 class="fw-semibold mb-4">Implementación en tres pasos rápidos</h3>
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

                    <!-- Start:: Section-3 -->
                    <section class="section" id="about">
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
                                    <div class="text-lg-end">
                                        <img src="{{asset('https://laravelui.spruko.com/ynex/build/assets/images/media/landing/1.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 pt-5 pb-0 px-lg-2 px-5 text-start">
                                    <h5 class="text-lg-start fw-semibold mb-3">Analizamos eventos críticos, enviamos alertas y trazamos cada incidente</h5>
                                    <p class="text-muted">Las detecciones se adaptan a la realidad de cada cliente, activando protocolos y evidencias listas para auditar.</p>
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
                        </div>
                    </section>
                    <!-- End:: Section-3 -->

                    <!-- Start:: Section-Analiticas -->
                    <section class="section" id="analiticas">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-brand-accent mb-1"><span class="landing-section-heading">ANALÍTICAS DISPONIBLES</span></p>
                            <h3 class="fw-semibold mb-2">Cobertura actual y roadmap de visión computacional</h3>
                            <div class="row justify-content-center mb-3">
                                <div class="col-xl-8">
                                    <p class="text-muted fs-15 mb-0 fw-normal">Cada caso de uso se configura por cámara y regla. Los modelos se entrenan con datos locales para mantener precisión operacional.</p>
                                </div>
                            </div>
                            <div class="row g-3 text-start mb-4">
                                <div class="col-md-4">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <span class="badge bg-primary-transparent text-primary mb-2">Analítica actual</span>
                                            <h6 class="fw-semibold mb-2">Uso de EPP</h6>
                                            <p class="text-muted mb-0">Validamos casco, chaleco y otros elementos críticos para reducir incidentes en faenas y patios logísticos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <span class="badge bg-primary-transparent text-primary mb-2">Analítica actual</span>
                                            <h6 class="fw-semibold mb-2">Uso de celular</h6>
                                            <p class="text-muted mb-0">Detectamos distracciones frente a maquinaria, grúas o líneas de producción para reforzar campañas de seguridad.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <span class="badge bg-primary-transparent text-primary mb-2">Analítica actual</span>
                                            <h6 class="fw-semibold mb-2">Ingreso a zonas restringidas</h6>
                                            <p class="text-muted mb-0">Alertas con cámara, hora y evidencia cuando una persona o vehículo entra a áreas críticas sin autorización.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3 text-start">
                                <div class="col-md-3 col-sm-6">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <span class="badge bg-secondary-transparent text-secondary mb-2">Próximamente</span>
                                            <h6 class="fw-semibold mb-2">Conteo de personas</h6>
                                            <p class="text-muted mb-0">Controlar flujos por línea o zona de evacuación.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <span class="badge bg-secondary-transparent text-secondary mb-2">Próximamente</span>
                                            <h6 class="fw-semibold mb-2">Control de aforo</h6>
                                            <p class="text-muted mb-0">Notificaciones cuando se supera la capacidad segura.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <span class="badge bg-secondary-transparent text-secondary mb-2">Próximamente</span>
                                            <h6 class="fw-semibold mb-2">Detección vehicular</h6>
                                            <p class="text-muted mb-0">Seguimiento a vehículos y forklifts en patios y bodegas.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <span class="badge bg-secondary-transparent text-secondary mb-2">Próximamente</span>
                                            <h6 class="fw-semibold mb-2">Comportamientos anómalos</h6>
                                            <p class="text-muted mb-0">Detección de congestión, detenciones no planificadas y patrones inseguros.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-Analiticas -->

                    <!-- Start:: Section-Casos-uso -->
                    <section class="section section-bg" id="casos-uso">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-brand-accent mb-1"><span class="landing-section-heading">CASOS DE USO</span></p>
                            <h3 class="fw-semibold mb-2">Antes y después con Minttu</h3>
                            <div class="row justify-content-center mb-4">
                                <div class="col-xl-8">
                                    <p class="text-muted fs-15 mb-0 fw-normal">Industrial, construcción, logística y minería utilizan Minttu para automatizar supervisión y documentar cumplimiento normativo.</p>
                                </div>
                            </div>
                            <div class="row g-3 text-start">
                                <div class="col-lg-3 col-md-6">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="avatar avatar-rounded bg-danger-transparent me-2">
                                                    <i class='bx bx-time-five fs-20'></i>
                                                </span>
                                                <span class="text-muted fw-semibold">Antes</span>
                                            </div>
                                            <h6 class="fw-semibold mb-1">Supervisión manual</h6>
                                            <p class="text-muted mb-3">Horas revisando monitores y grabaciones.</p>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-rounded bg-success-transparent me-2">
                                                    <i class='bx bx-check fs-20'></i>
                                                </span>
                                                <span class="fw-semibold">Minttu automatiza la detección y libera al equipo.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="avatar avatar-rounded bg-danger-transparent me-2">
                                                    <i class='bx bx-video-off fs-20'></i>
                                                </span>
                                                <span class="text-muted fw-semibold">Antes</span>
                                            </div>
                                            <h6 class="fw-semibold mb-1">Revisión post-incidente</h6>
                                            <p class="text-muted mb-3">Reacción tardía y sin evidencia oportuna.</p>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-rounded bg-success-transparent me-2">
                                                    <i class='bx bx-bell fs-20'></i>
                                                </span>
                                                <span class="fw-semibold">Alertas en tiempo real permiten actuar antes del accidente.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="avatar avatar-rounded bg-danger-transparent me-2">
                                                    <i class='bx bx-question-mark fs-20'></i>
                                                </span>
                                                <span class="text-muted fw-semibold">Antes</span>
                                            </div>
                                            <h6 class="fw-semibold mb-1">Sin trazabilidad</h6>
                                            <p class="text-muted mb-3">Difícil demostrar cumplimiento y aprender de eventos.</p>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-rounded bg-success-transparent me-2">
                                                    <i class='bx bx-bar-chart-alt-2 fs-20'></i>
                                                </span>
                                                <span class="fw-semibold">Historial de alertas, métricas y reportes descargables.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card custom-card h-100">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="avatar avatar-rounded bg-danger-transparent me-2">
                                                    <i class='bx bx-error-circle fs-20'></i>
                                                </span>
                                                <span class="text-muted fw-semibold">Antes</span>
                                            </div>
                                            <h6 class="fw-semibold mb-1">Riesgo operacional alto</h6>
                                            <p class="text-muted mb-3">Decisiones basadas en percepciones.</p>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-rounded bg-success-transparent me-2">
                                                    <i class='bx bx-brain fs-20'></i>
                                                </span>
                                                <span class="fw-semibold">Prevención basada en datos y patrones detectados con IA.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-Casos-uso -->

                    <!-- Start:: Section-Plataforma -->
                    <section class="section" id="plataforma">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <p class="fs-12 fw-semibold text-brand-accent mb-1"><span class="landing-section-heading">PLATAFORMA WEB DE GESTIÓN</span></p>
                                    <h2 class="fw-semibold mb-3">Una plataforma pensada para prevención y operaciones</h2>
                                    <p class="text-muted fs-15 mb-4">Dashboard, módulo de alertas, cámaras conectadas y trazabilidad completa en un solo lugar. Minttu centraliza detecciones de IA en flujos que tu equipo ya domina.</p>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="card custom-card border shadow-none h-100">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <span class="avatar avatar-rounded bg-primary-transparent me-2">
                                                            <i class='bx bx-pulse fs-20'></i>
                                                        </span>
                                                        <h6 class="fw-semibold mb-0">Dashboard & KPIs</h6>
                                                    </div>
                                                    <p class="text-muted mb-0">Indicadores por sitio, cámaras y tipo de riesgo para priorizar acciones.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card custom-card border shadow-none h-100">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <span class="avatar avatar-rounded bg-primary-transparent me-2">
                                                            <i class='bx bx-bell fs-20'></i>
                                                        </span>
                                                        <h6 class="fw-semibold mb-0">Gestión de alertas</h6>
                                                    </div>
                                                    <p class="text-muted mb-0">Estados pendiente, revisada, cerrada o falsa alarma con comentarios y responsables.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card custom-card border shadow-none h-100">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <span class="avatar avatar-rounded bg-primary-transparent me-2">
                                                            <i class='bx bx-video fs-20'></i>
                                                        </span>
                                                        <h6 class="fw-semibold mb-0">Cámaras y analíticas</h6>
                                                    </div>
                                                    <p class="text-muted mb-0">Configura reglas por cámara, horarios, zonas y perfiles de riesgo.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card custom-card border shadow-none h-100">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <span class="avatar avatar-rounded bg-primary-transparent me-2">
                                                            <i class='bx bx-file fs-20'></i>
                                                        </span>
                                                        <h6 class="fw-semibold mb-0">Reportes CSV/PDF</h6>
                                                    </div>
                                                    <p class="text-muted mb-0">Descarga evidencias y métricas listas para auditorías internas y externas.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card custom-card border shadow-none h-100">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <span class="avatar avatar-rounded bg-primary-transparent me-2">
                                                            <i class='bx bx-user-check fs-20'></i>
                                                        </span>
                                                        <h6 class="fw-semibold mb-0">Usuarios y roles</h6>
                                                    </div>
                                                    <p class="text-muted mb-0">Control de acceso por perfil, bitácora de cambios y trazabilidad completa.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 d-flex flex-wrap gap-3">
                                        <a href="#contacto" class="btn btn-primary btn-wave">Ver demo de la plataforma</a>
                                        <a href="#analiticas" class="btn btn-outline-primary btn-wave">Revisar analíticas</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-center">
                                    <div class="landing-main-image">
                                        <img src="{{asset('https://laravelui.spruko.com/ynex/build/assets/images/media/landing/1.png')}}" alt="Minttu Plataforma" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-Plataforma -->

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
                                <div class="col-lg-6 text-center">
                                    <img src="{{asset('https://laravelui.spruko.com/ynex/build/assets/images/media/landing/1.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-Corfo -->

                    <!-- Start:: Section-Roadmap -->
                    <section class="section section-bg" id="roadmap">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-brand-accent mb-1"><span class="landing-section-heading">PROYECCIÓN Y ESCALABILIDAD</span></p>
                            <h3 class="fw-semibold mb-3">Roadmap y escalamiento</h3>
                            <div class="row justify-content-center mb-4">
                                <div class="col-xl-8">
                                    <p class="text-muted fs-15 mb-0 fw-normal">El plan CORFO acelera nuestro paso desde pilotos industriales hacia una plataforma SaaS multiempresa con nuevas analíticas especializadas.</p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xl-8 text-start">
                                    <div class="border-start border-2 border-primary ps-4">
                                        <div class="position-relative pb-4 mb-4">
                                            <span class="position-absolute top-0 start-0 translate-middle rounded-circle bg-primary" style="width:16px;height:16px;"></span>
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
                                            <span class="position-absolute top-0 start-0 translate-middle rounded-circle bg-primary" style="width:16px;height:16px;"></span>
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
                                            <span class="position-absolute top-0 start-0 translate-middle rounded-circle bg-primary" style="width:16px;height:16px;"></span>
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

                    <!-- Start:: Section-Equipo -->
                    <section class="section" id="equipo">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-brand-accent mb-1"><span class="landing-section-heading">EQUIPO</span></p>
                            <h3 class="fw-semibold mb-2">El equipo detrás de Minttu</h3>
                            <div class="row justify-content-center mb-4">
                                <div class="col-xl-8">
                                    <p class="text-muted fs-15 mb-0 fw-normal">Combinamos experiencia en IA, visión computacional y operación en terreno para desplegar proyectos críticos en industrias de alto riesgo.</p>
                                </div>
                            </div>
                            <div class="row g-3 text-start">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card custom-card text-center h-100">
                                        <div class="card-body">
                                            <img src="{{asset('https://laravelui.spruko.com/ynex/build/assets/images/media/landing/1.png')}}" alt="Equipo Minttu" class="avatar avatar-xxl rounded-circle mb-3">
                                            <h5 class="fw-semibold mb-1">Valentina Torres</h5>
                                            <p class="text-primary fw-semibold mb-2">Co-Founder & CEO</p>
                                            <p class="text-muted mb-0">Operaciones industriales, prevención de riesgos y relacionamiento comercial.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card custom-card text-center h-100">
                                        <div class="card-body">
                                            <img src="{{asset('https://laravelui.spruko.com/ynex/build/assets/images/media/landing/1.png')}}" alt="Equipo Minttu" class="avatar avatar-xxl rounded-circle mb-3">
                                            <h5 class="fw-semibold mb-1">Diego Rivas</h5>
                                            <p class="text-primary fw-semibold mb-2">Co-Founder & CTO</p>
                                            <p class="text-muted mb-0">Arquitectura de visión por computador, Edge Computing y despliegue en campo.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="card custom-card text-center h-100">
                                        <div class="card-body">
                                            <img src="{{asset('https://laravelui.spruko.com/ynex/build/assets/images/media/landing/1.png')}}" alt="Equipo Minttu" class="avatar avatar-xxl rounded-circle mb-3">
                                            <h5 class="fw-semibold mb-1">Catalina Mena</h5>
                                            <p class="text-primary fw-semibold mb-2">Head of Customer Success</p>
                                            <p class="text-muted mb-0">Implementación de pilotos, onboarding y soporte para plantas y contractors.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-Equipo -->

                    <!-- Start:: Section-5 -->
                    <section class="section landing-Features" id="features">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-brand-accent mb-1"><span class="landing-section-heading">Características</span></p>
                            <h2 class="fw-semibold mb-2 text-fixed-white ">Tecnologías utilizadas en Minttu</h2>
                            <div class="row justify-content-center">
                                <div class="col-xl-7">
                                    <p class="text-fixed-white op-8 fs-15 mb-3 fw-normal">Combinamos estas herramientas para entrenar modelos de IA, operar video analítica en el borde y entregar una plataforma web segura y escalable.</p>
                                </div>
                            </div>
                            <div class="text-start">
                                <div class="justify-content-center">
                                    <div class="">
                                        <div class="feature-logos mt-sm-5 flex-wrap" >
                                            <div class="ms-sm-5 ms-2 text-center">
                                                <img src="{{asset('build/assets/images/media/landing/web/python.png')}}" alt="image" class="featur-icon">
                                                <h5 class="mt-3 text-fixed-white ">Python</h5>
                                            </div>
                                            <div class="ms-sm-5 ms-2 text-center">
                                                <img src="{{asset('https://laravelui.spruko.com/ynex/build/assets/images/media/landing/web/4.png')}}" alt="image" class="featur-icon">
                                                <h5 class="mt-3 text-fixed-white ">HTML</h5>
                                            </div>
                                            <div class="ms-sm-5 ms-2 text-center">
                                                <img src="{{asset('https://laravelui.spruko.com/ynex/build/assets/images/media/landing/web/2.png')}}" alt="image" class="featur-icon">
                                                <h5 class="mt-3 text-fixed-white ">Vite</h5>
                                            </div>
                                            <div class="ms-sm-5 ms-2 text-center">
                                                <img  src="{{asset('https://laravelui.spruko.com/ynex/build/assets/images/media/landing/web/1.png')}}" alt="image" class="featur-icon">
                                                <h5 class="mt-3 text-fixed-white ">Laravel</h5>
                                            </div>
                      
                                            <div class="ms-sm-5 ms-2 text-center">
                                                <img src="{{asset('build/assets/images/media/landing/web/torch.png')}}" alt="image" class="featur-icon">
                                                <h5 class="mt-3 text-fixed-white ">PyTorch</h5>
                                            </div>                        
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination mt-4"></div>
                            </div>
                        </div>
                    </section>
                    <!-- End:: Section-5 -->

                    <!-- Start:: Section-10 -->
                    <section class="section" id="contacto">
                        <div class="container text-center">
                            <p class="fs-12 fw-semibold text-brand-accent mb-1"><span class="landing-section-heading">CONTACTO</span></p>
                            <h3 class="fw-semibold mb-2">Conversemos tu piloto</h3>
                            <div class="row justify-content-center">
                                <div class="col-xl-9">
                                    <p class="text-muted fs-15 mb-5 fw-normal">Cuéntanos sobre tu operación y te ayudamos a evaluar el impacto de Minttu en tus riesgos, procesos y reportabilidad.</p>
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
                                                    <label for="contact-name" class="form-label">Nombre completo</label>
                                                    <input type="text" class="form-control" id="contact-name" placeholder="Ej: Ana Pérez">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="contact-company" class="form-label">Empresa / Área</label>
                                                    <input type="text" class="form-control" id="contact-company" placeholder="Compañía o faena">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="contact-email" class="form-label">Correo corporativo</label>
                                                    <input type="email" class="form-control" id="contact-email" placeholder="nombre@empresa.com">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="contact-phone" class="form-label">Teléfono / WhatsApp</label>
                                                    <input type="text" class="form-control" id="contact-phone" placeholder="+56 9 1234 5678">
                                                </div>
                                                <div class="col-xl-12">
                                                    <label for="contact-message" class="form-label">Mensaje</label>
                                                    <textarea class="form-control" id="contact-message" rows="4" placeholder="Cuéntanos sobre tus riesgos o el piloto que quieres evaluar"></textarea>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="d-flex flex-wrap gap-2 mt-4">
                                                        <a href="mailto:info@minttu.com" class="btn btn-primary btn-wave flex-grow-1">Enviar correo</a>
                                                        <a href="https://wa.me/56988218431" class="btn btn-outline-primary btn-wave flex-grow-1" target="_blank">Hablar por WhatsApp</a>
                                                    </div>
                                                    <div class="mt-3 text-muted small">
                                                        <p class="mb-1"><i class="ri-mail-line me-1 align-middle"></i> info@minttu.com</p>
                                                        <p class="mb-0"><i class="ri-phone-line me-1 align-middle"></i> +(569) 882 18431</p>
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
                                        <p class="fw-semibold mb-3" style="width: 100px;"><a href="{{url('index')}}"><img src="{{asset('build/assets/images/brand-logos/desktop-white.png')}}" alt=""></a></p>
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
                                                        <a class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light" href="https://www.facebook.com">
                                                            <i class="ri-facebook-line fw-bold"></i>
                                                        </a>
                                                        <a class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light" href="https://www.x.com">
                                                            <i class="ri-twitter-line fw-bold"></i>
                                                        </a>
                                                        <a class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light" href="https://www.instagram.com">
                                                            <i class="ri-instagram-line fw-bold"></i>
                                                        </a>
                                                        <a class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light" href="https://www.linkedin.com">
                                                            <i class="ri-github-line fw-bold"></i>
                                                        </a>
                                                        <a class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light" href="https://www.youtube.com">
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