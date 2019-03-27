@extends('layouts.web')
@section('content')
  <div class="cover">
            <div class="image"></div>
            <img class="go-to" src="img/arrow.svg">
        </div>
        <div id="init" class="container-fluid all-products">
            <div class="row align-items-center">
                <div class="col-md-6 p-0 description">
                    <img src="/images/solomito.png">
                    <h2>Solomito <span>asado</span></h2>
                    <p>Los Solomitos Asados de Three Pets están hechos de los mejores tendones de res, ricos en contenido natural de glucosamina, ayuda a problemas en las articulaciones de tu perro y a su prevención, además al masticarlas elimina la placa. Ideal para perros de todos los tamaños.</p>
                    <div class="flex-wrapper">
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="80">
                                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Proteina</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="8">
                                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="8, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Grasa</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="1.5">
                                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="2, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Fibra</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="11">
                                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="11, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Humedad</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 image">
                    <div class="slider">
                        <div><img src="tienda/tienda-solomito.png"></div>
                        <div><img src="tienda/tienda-solomito.png"></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 p-0 description">
                    <img src="images/rollitos.png">
                    <h2>Rollitos <span>de res</span></h2>
                    <p>El rollito de res de Three Pets está hecho de la mejor tráquea de res, ricas en contenido natural de glucosamina, ayuda a problemas en las articulaciones de tu perro y a su prevención, además al masticarlas elimina la placa. Ideal para perros de todos los tamaños.</p>
                    <div class="flex-wrapper">
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="62">
                                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Proteina</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="7.4">
                                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="8, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Grasa</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="40">
                                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="2, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Fibra</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="12">
                                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="11, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Humedad</span>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6 image">
                    <div class="slider">
                        <div><img src="tienda/tienda-rollito.png"></div>
                        <div><img src="tienda/tienda-rollito.png"></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 p-0 description">
                    <img src="images/trocitos.png">
                    <h2>Trocitos <span>mix</span></h2>
                    <p>Los Trocitos Mix de Three Pets son la mejor combinación de cola, rila, tráquea y tendones de res, horneadas lentamente a la perfección, mantendrán a tu perro entretenido durante horas. Ideal para perros de todos los tamaños.</p>
                    <div class="flex-wrapper">
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="76">
                                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Proteina</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="6">
                                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="8, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Grasa</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="11">
                                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="2, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Fibra</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="12">
                                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="11, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Humedad</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 image">
                    <div class="slider">
                        <div><img src="tienda/tienda-trocitos.png"></div>
                        <div><img src="tienda/tienda-trocitos.png"></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 p-0 description">
                    <img src="images/pernil cerdo.png">
                    <h2>Pernil de<span> cerdo</span></h2>
                    <p>El pernil de cerdo de Three Pets está hecho del mejor humero de cerdo, horneado a la perfección, ideal para fortalecer la mandíbula de tu perro, ayudando a la prevención de sarro y su cuidado dental.</p>
                    <div class="flex-wrapper">
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="70">
                                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Proteina</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="4">
                                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="8, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Grasa</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="1.5">
                                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="2, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Fibra</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="12">
                                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="11, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Humedad</span>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6 image">
                    <div class="slider">
                        <div><img src="tienda/tienda-pernil.png"></div>
                        <div><img src="tienda/tienda-pernil.png"></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 p-0 description">
                    <img src="images/trocitos.png">
                    <h2>Lonjitas  <span>de Res</span></h2>
                    <p>Las lonjitas de res de Three Pets son hechas de las mejores rilas de res. Ayudan a la salud dental y mantendrán a tu
                    perro entretenido durante horas. Por su alto contenido proteico ayuda la formación de las células y su regeneración.</p>
                    <div class="flex-wrapper">
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="80">
                                <path class="circle-bg"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Proteina</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="7">
                                <path class="circle-bg"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="8, 100"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Grasa</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="1.5">
                                <path class="circle-bg"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="2, 100"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Fibra</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="11">
                                <path class="circle-bg"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="11, 100"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Humedad</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 image">
                    <div class="slider">
                        <div><img src="tienda/tienda-lonjitas.png"></div>
                        <div><img src="tienda/tienda-lonjitas.png"></div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 p-0 description">
                    <img src="images/pernil cerdo.png">
                    <h2>Tiritas<span> Ahumadas</span></h2>
                    <p>Las tiritas ahumadas de Three Pets son hechas de los mejores esófagos de res, ricas en contenido natural de
                    glucosamina, ayudan a problemas en las articulaciones de tu perro y a su prevención, además al masticarlas elimina la
                    placa.</p>
                    <div class="flex-wrapper">
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="80">
                                <path class="circle-bg"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Proteina</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="11">
                                <path class="circle-bg"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="8, 100"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Grasa</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="1.5">
                                <path class="circle-bg"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="2, 100"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Fibra</span>
                        </div>
                        <div class="single-chart">
                            <svg viewBox="-2 -2 40 40" class="circular-chart" data-percentage="10">
                                <path class="circle-bg"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <path class="circle" stroke-dasharray="11, 100"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                <text x="18" y="20.35" class="percentage"></text>
                            </svg>
                            <span>Humedad</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 image">
                    <div class="slider">
                        <div><img src="tienda/tienda-tiritas.png"></div>
                        <div><img src="tienda/tienda-tiritas.png"></div>
                    </div>
                </div>
            </div>
            <div class="row buy">
                <div class="col-12">
                    <a href="/shop">¡Compra ya!</a>
                </div>
            </div>
        </div>
@stop
@push('styles')
  <link rel="stylesheet" href="css/productos.css" type='text/css' media='all'>
  <link rel="stylesheet" href="css/slick.css" type='text/css' media='all'>
@endpush

@push('scripts')
<script type="text/javascript" src="/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
@endpush