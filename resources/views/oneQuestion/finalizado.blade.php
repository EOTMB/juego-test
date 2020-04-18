@extends('layouts.app')
@section('content')
<h1>Tu puntaje fue {{Session::get('score')}}</h1>
<a href="{{route('iniciar')}}">Volver al inicio</a>
@endsection
