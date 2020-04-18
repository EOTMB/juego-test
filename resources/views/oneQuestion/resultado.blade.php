@extends('layouts.app')
@section('content')
    <h1>Tu respuesta es {{$correcto?"correcta!":"incorrecta"}}</h1>
    <a href="{{route('pregunta')}}" class="btn btn-md">Siguiente</a>
@endsection
