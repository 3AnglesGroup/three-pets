@extends('layouts.web')
@section('content')
<div class="container-fluid cart">

    <web-carrito></web-carrito>          
</div>
@stop
@push('styles')
<link rel="stylesheet" href="/css/carrito.css" type='text/css' media='all'>

@endpush