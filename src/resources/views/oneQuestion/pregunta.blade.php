@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="quiz-wrapper">
                    <h1>{{ $question->body }}</h1>
                    <form id="pregunta" name="pregunta" method="POST" action="{{route('respuesta')}}">
                        @csrf
                        <div class="form-group">
                        @foreach($question->answer->shuffle() as $answer)
                            <h3>
                                <div class="form-group">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="{{$answer->is_correct}}">
                                        <label>{{$answer->answer}}</label>

                                    </div>
                                </div>
                            </h3>
                        @endforeach
                        <input class="btn btn-primary" type="submit" value="Enviar respuesta" name="submit"/>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
