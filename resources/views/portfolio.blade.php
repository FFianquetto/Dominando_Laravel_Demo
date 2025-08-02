@extends('layout')
@section('title', 'Portfolio')

@section('content')
<h1>Portfolio</h1>

<ul>
    @forelse($projects as $project)
        <li>{{ $project['title']}} {{ $loop->last ? 'Es el último' : '' }}</li>
    @empty
        <li>No hay proyectos para mostrar</li>
    @endforelse
</ul>

@endsection 