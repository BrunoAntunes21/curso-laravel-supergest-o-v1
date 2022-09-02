<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('Nos')</title>
        <meta charset="utf-8">
             <link rel="stylesheet" href="{{ asset('css/estilo_basico.css')}}">
    </head>
    <body>
        @include('site.layouts._partials.topo')
    <!-- recebe a seção para a impressão no tamplate atual-->

        @yield('main')
    </body>
</html>

</html>

