@extends('index')
@section('title','Vista Maestros')
@section('panel','Maestro')
@section('content')

<h2>Seleccione Grupo</h2>

@foreach($gru as $grupo)
<center>
<h4>{{$grupo->grupor->nombre}}</h4>
</center>
@endforeach

@endsection