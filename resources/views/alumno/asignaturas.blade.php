@extends('index')
@section('title','Vista Alumnoxasignatura')
@section('panel','Alumno asignatura')
@section('content')

<h2>Asignaturas Asignadas </h2>
<h2>{{$grupo}}</h2>

<?php for ($i=0; $i < count($asignaturas) ; $i++) { ?>
<center>
<h4><a href="/useralumnocalificacion/{{$idr[$i]->id}}" data-lity>{{$asignaturas[$i]->asignaturar->nombre}}</a> </h4> 
	
</center>

<?php } ?>
@endsection