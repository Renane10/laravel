<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Página Inicial</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
       <h1>Página Inicial</h1>
        @if(10 > 5)
            <p>True</p>
        @endif
        Olá {{ $nome }}, você tem {{ $idade }} anos.
    </body>
</html>
