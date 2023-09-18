<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesshet" href="{{ asset('css/estilo_basico.css)}}">
</head>
<body>
    @include('site.layouts._partials.topo')
    @yield('conteudo')
</body>
</html>