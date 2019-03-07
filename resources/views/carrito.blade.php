@extends('layouts.web')
@section('content')
<div class="container-fluid cart">
            <div class="row align-items-center justify-content-md-end">
                <div class="col-12">
                    <h2>Tu <span>carrito</span></h2>
                </div>
                <div class="col-md-7 items">
                    <div class="item">
                        <div class="image">
                            <img src="img/tienda-solomito.png">
                        </div>
                        <div class="info">
                            <span class="name">Solomito Asado</span>
                            <span class="unit">4 Unidades</span>
                            <span class="cod">COD 2569852412</span>
                            <span class="price">$15.236</span>
                            <span class="buttons"><a href="#">Editar</a> | <a href="#">Eliminar</a></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="img/tienda-pernil.png">
                        </div>
                        <div class="info">
                            <span class="name">Pernil de Cerdo</span>
                            <span>4 Unidades</span>
                            <span>COD 2569852412</span>
                            <span class="price">$15.236</span>
                            <span class="buttons"><a href="#">Editar</a> | <a href="#">Eliminar</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 forms">
                    <form class="pay">
                        <input type="submit" class="btn" value="Pagar">
                        <div class="details">
                            <span class="details-left">Subtotal</span><span class="details-right">$55.000</span>
                        </div>
                        <div class="details">
                            <a href="#">Gastos de envío</a>
                        </div>
                        <div class="details">
                            <span class="phone">Servicio al cliente  310 584 9856</span>
                            <span class="order">Orden #2548953</span>
                        </div>
                    </form>
                    <form class="subscription">
                        <span>Suscríbete</span>
                        <span class="about">Recibe información de nuestros productos, novedades y promociones!</span>
                        <div class="field">
                            <input type="text" placeholder="Correo electrónico"><input type="submit" class="btn" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
@stop
@push('styles')
<link rel="stylesheet" href="css/carrito.css" type='text/css' media='all'>
@endpush