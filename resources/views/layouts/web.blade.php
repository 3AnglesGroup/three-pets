<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Three Pets</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" type='text/css' media='all'>
    <link rel="stylesheet" href="/css/main.css" type='text/css' media='all'>
    <link rel="stylesheet" href="/css/app.css" type='text/css' media='all'>
    @stack('styles')

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137581418-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137581418-1');
</script>

<!-- Chatra {literal} -->
<script>
    (function(d, w, c) {
        w.ChatraID = 'fdHhkiNoDhDCo9qKz';
        var s = d.createElement('script');
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        s.async = true;
        s.src = 'https://call.chatra.io/chatra.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'Chatra');

    window.ChatraSetup = {
    colors: {
        buttonText: '#000', /* chat button text color */
        buttonBg: '#B0DB20'    /* chat button background color */
    }
};
</script>
<!-- /Chatra {/literal} -->

    
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-end">
            <a class="brand-mobile" href="index.html"><img src="img/three-pets-logo.svg" alt="Three Pets"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/productos')}}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#beneficios">Beneficios</a>
                    </li>
                    <li class="nav-item brand">
                        <a class="nav-link" href="/"><img src="img/three-pets-logo.svg" alt="Three Pets"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('shop')}}">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contacto')}}">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="float">
            <a href="/"><img src="/img/float-home.svg"></a>
            <a href="#"><img src="/img/float-user.svg"></a>
            <a href="/carrito" class="float-cart"><img src="img/float-cart.svg"><span id="count">0</span></a>
        </div>
        @yield('content')
        @include('layouts.footer')
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js"></script>
    <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
    @stack('scripts')
    <script>
    
      
    </script>
</body>

</html>
