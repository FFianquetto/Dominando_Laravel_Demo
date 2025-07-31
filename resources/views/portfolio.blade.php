@extends('layout')
@section('title', 'Portfolio')

@section('content')
<h1>Portfolio</h1>

<ul>
    @forelse($portfolio as $portfolioItem)
        <li>{{ $portfolioItem['title'] }} {{ $loop->last ? 'Es el último' : '' }}</li>
    @empty
        <li>No hay proyectos para mostrar</li>
    @endforelse
</ul>

@endsection 