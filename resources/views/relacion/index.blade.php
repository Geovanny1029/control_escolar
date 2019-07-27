@extends('index')
@section('title','Relaciones')
@section('panel','Relacion Grupo,Asignatura,Maetsro,Alumno')
@section('content')


<!-- {!! Form::open(['route' => 'relacion_control.index', 'method' => 'GET', 'class' => 'navbar-form pull-left' ]) !!}

{!! Form::close() !!} -->

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModalr">Crear Relaciones</button> <br><br>

@include('relacion.crear')

<table class="table table-striped" id="tablarelacion">
  <thead>
    <th>ID</th>
    <th>Grupo</th>
    <th>Asignatura</th>
    <th>Periodo</th>
    <th>Maestro</th>
    <th>Alumno</th>
    <th>Accion</th>
  </thead>
  <tbody>
    @foreach($relaciones as $relacion)
    <tr>

      <td> {{$relacion->id}} </td>
      <td> {{$relacion->grupor->nombre}} </td>
      <td> {{$relacion->asignaturar->nombre}} </td>
      <td> {{$relacion->periodo1->periodo}} </td>
      <td> {{$relacion->userm->nombres}} </td>
      <td> {{$relacion->useral->nombres}} </td>
      <td>


      <button class="btn btn-warning" data-toggle="modal" data-target="#editModalr" onclick="fun_edit('{{$relacion->id}}')" id="editarr" value="{{route('relacion_control.view')}}">Editar </button>

      </td>
    </tr>
    @endforeach
  </tbody>

  @include('relacion.edit')
</table>





@endsection