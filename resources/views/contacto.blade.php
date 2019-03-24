@extends('layouts.web')
@section('content')
<div class="container-fluid">
            <div class="row justify-content-md-start">
                <div class="col-md-3 col-lg-4 dog">
                </div>
                <div class="col-md-9 col-lg-8 info">
                    <div class="row">
                        <div class="col-12">
                            <div class="title">
                                <h2>¡Contáctanos!</h2>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <form>
                                <label>Nombre y Apellido* <input type="text"></label>
                                <label>Celular* <input type="text"></label>
                                <label>E-mail* <input type="email"></label>
                                <label>Mensaje* <textarea rows="6"></textarea></label>
                                <input type="submit" class="btn" value="Enviar">
                            </form>
                        </div>
                        <div class="col-sm-7 pr-0">
                            <h3>Información<br>de <span>contacto</span></h3>
                            <div class="items">
                                <span class="bullet">316 308 5340</span>
                                <span class="bullet">info@three-pets.com.co</span>
                                <span class="bullet">www.three-pets.com.co</span>
                                <span class="follow">Síguenos en:</span>
                                <a href="#"><img src="img/contacto-facebook.svg"></a><a href="#"><img src="img/contacto-instagram.svg"></a><span class="follow-name">@ThreePetsColombia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@stop
@push('styles')
  <link rel="stylesheet" href="css/contacto.css" type='text/css' media='all'>
@endpush

@push('scripts')

@endpush