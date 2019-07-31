@extends('index')
@section('title','Vista Maestroxasignatura')
@section('panel','Maestro asignatura')
@section('content')

<h2>Asignaturas Asignadas </h2>
<h2>{{$grupo}}</h2>
@foreach($asignaturas as $asigna)
<center>
	
<h4><a href="/usermaestrogrupoasignatura/{{$idr['id']}}">{{$asigna->asignaturar->nombre}}</a> </h4> 
</center>
@endforeach

@endsection