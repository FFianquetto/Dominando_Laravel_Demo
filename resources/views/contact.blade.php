
@extends('layout')
@section('title', __('app.contact'))

@section('content')
<h1>{{ __('app.contact') }}</h1>

<form method="POST" action="{{ route('contact') }}">
    @csrf 
    {{-- Required sirve para hacer de ese campo indispensable --}}
    {{-- <input name="name" placeholder="Nombre ... " required><br> --}}

    <input name="name" placeholder="{{ __('app.name') }}..." value="{{ old('name') }}"><br>
    {!! $errors->first('name', '<small>:message</small><br>') !!}

    <input type="text" name="email" placeholder="{{ __('app.email') }} ... " value="{{ old('email') }}"><br>
    {!! $errors->first('email', '<small>:message</small><br>') !!}

    <input name="subject" placeholder="{{ __('app.subject') }}..." value="{{ old('subject') }}"><br>
    {!! $errors->first('subject', '<small>:message</small><br>') !!}
    
    <textarea name="content" placeholder="{{ __('app.message') }}...">{{ old('content') }}</textarea><br>
    {!! $errors->first('content', '<small:message</small><br>') !!}
       
    <button>{{ __('app.send') }}</button>
</form>

@endsection 