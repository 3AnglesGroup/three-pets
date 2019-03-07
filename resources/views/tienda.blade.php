@extends('layouts.web')
@section('content')
<div class="cover">
            <div class="image"></div>
            <img class="go-to" src="img/arrow.svg">
        </div>
        <web-tienda></web-tienda>
@stop
@push('styles')
<link rel="stylesheet" href="css/tienda.css" type='text/css' media='all'>
@endpush
