@extends('index')
@section('title','Calificacion')
@section('panel','Calificacion')
@section('content')

<h2>Calificacion</h2>


  @if($existe == null)
   
     <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModalsub">Subir Calificacion</button> <br><br>
  
  @else
    <button class="btn btn-warning" data-toggle="modal" data-target="#editModalsubedi" onclick="fun_sub('{{$idr}}')" id="editarsub" value="{{route('user.viewsub')}}">Editar Calificacion </button>
  @endif
 @include('maestro.subir')
 @include('maestro.editacalificacion')
@endsection