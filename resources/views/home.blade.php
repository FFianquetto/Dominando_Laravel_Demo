@extends('layout')

{{-- De esta forma home no aparece espaciado --}}
@section('title', 'Home')

@section('content')
    <h1>Home</h1>
@endsection 
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    {{-- ?? Nos permite no hacer obligatoria la definición de un parámetro 
    y con ello podemos  asignar un valor default.
     --}}
    {{-- Forma tradicional: --}}
    {{-- Bienvenido <?php echo $nombre ?? "Invitado" ?> --}}

    {{-- Forma Blade: --}}
    {{-- Bienvenido {{$nombre ?? "Invitado"}} 


</body>
</html> --}}