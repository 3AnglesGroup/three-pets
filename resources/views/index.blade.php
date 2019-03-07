@extends('layouts.web')
@section('content')
<div class="cover">
            <div class="image"></div>
            <img class="go-to" src="img/arrow.svg">
        </div>
        <div id="init" class="container-fluid">
            <div class="row align-items-center pb-5">
                <div class="col-md-8 col-xl-9 p-0 snacks-img">
                    <img src="img/home-1.jpg">
                </div>
                <div class="col-md-5 col-xl-3 snacks">
                    <h2><span class="alt">Snacks </span>100%<span> naturales</span></h2>
                    <p>Nuestros snacks están hechos de la mejor materia prima….Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque sagittis est, a fermentum diam consequat dignissim. Sed quis erat sagittis, commodo libero at, interdum mauris. Curabitur sit amet tristique sem. Etiam cursus ligula egestas nibh congue, id ullamcorper nunc interdum. Sed cursus a sapien eget consectetur.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 p-0 product">
                    <h2>Nuestros <span>Productos</span></h2>
                    <p>Nuestros snacks están hechos de la mejor materia prima….Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam.</p>
                    <a href="#">¡Conócelos!</a>
                </div>
                <div class="col-md-6">
                    <img src="img/home-2.jpg">
                </div>
            </div>
            <div id="beneficios" class="row green">
                <div class="col-12 p-0">
                    <img class="green-top" src="img/border-top.svg">
                    <div class="title">
                        <h2>beneficios <span class="min">de</span> nuestros <span class="max">snacks</span></h2>
                    </div>
                </div>
                <div class="col-12 info">
                    <div class="box">
                        <div class="mod">
                            <img src="img/benf-01.svg">
                            <span>Promotes healthy teeth and gums</span>
                        </div>
                        <div class="mod">
                            <img src="img/benf-02.svg">
                            <span>100% Beef</span>
                        </div>
                        <div class="mod">
                            <img src="img/benf-03.svg">
                            <span>Free Range Grass fed</span>
                        </div>
                        <div class="mod">
                            <img src="img/benf-04.svg">
                            <span>All Natural</span>
                        </div>
                        <div class="mod">
                            <img src="img/benf-05.svg">
                            <span>NO Preservatives NO Fillers</span>
                        </div>
                        <div class="mod">
                            <img src="img/benf-06.svg">
                            <span>Supports Joints</span>
                        </div>
                        <div class="mod">
                            <img src="img/benf-07.svg">
                            <span>Long Lasting</span>
                        </div>
                        <div class="mod">
                            <img src="img/benf-08.svg">
                            <span>Single Ingredient</span>
                        </div>
                        <div class="mod">
                            <img src="img/benf-09.svg">
                            <span>High Protein</span>
                        </div>
                        <div class="mod">
                            <img src="img/benf-10.svg">
                            <span>Grain / Glutten Free</span>
                        </div>
                        <div class="mod">
                            <img src="img/benf-11.svg">
                            <span>100% Digestible</span>
                        </div>
                        <div class="mod">
                            <img src="img/benf-12.svg">
                            <span>100% Pork</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0">
                    <img class="green-bottom" src="img/border-bottom.svg">
                </div>
            </div>
            <div class="row justify-content-md-center subscribe">
                <div class="col-12 p-0">
                    <h2>¡Suscríbete <span>y ahorra!</span></h2>
                    <h3>¿Cómo funciona?</h3>
                </div>
                <div class="col-md-4 col-xl-3 pt-3 p-sm-5">
                    <p><strong>¡Suscríbete!</strong></p>
                    <p>Nuestros paquetes comienzan en tan solo $54.950</p>
                    <p>Valorado en $75.000</p>
                </div>
                <div class="col-md-4 col-xl-3 pt-3 p-sm-5 has-border">
                    <p>Tu primera orden será enviada inmediatamente</p>
                    <p>Las siguientes órdenes serán enviadas el 15 de cada mes.</p>
                    <p><strong>El envío siempre es GRATIS!</strong></p>
                </div>
                <div class="col-md-4 col-xl-3 pt-3 p-sm-5">
                    <p>Tu mejor amigo estará <strong>feliz</strong> todos los meses!</p>
                    <p>Y nuncá volverá a ver una caja de la misma forma como lo hacía antes...</p>
                </div>
                <div class="col-12">
                    <a href="#">¡Suscríbete ahora!</a>
                </div>
            </div>
        </div>
@stop

@push('styles')
<link rel="stylesheet" href="/css/home.css" type='text/css' media='all'>
@endpush