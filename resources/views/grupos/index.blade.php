@extends('index')
@section('title','Grupos')
@section('panel','Lista de Grupos')
@section('content')


<!-- {!! Form::open(['route' => 'grupo.index', 'method' => 'GET', 'class' => 'navbar-form pull-left' ]) !!}

{!! Form::close() !!} -->

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModalg">Crear nuevo Grupo</button>

@include('grupos.crear')

<table class="table table-striped" id="tablagrupos">
  <thead>
    <th>ID</th>
    <th>Nombre grupo</th>
    <th>estatus</th>
    <th>Accion</th>
  </thead>
  <tbody>
    @foreach($grupos as $grupo)
    <tr>

      <td> {{$grupo->id}} </td>
      <td> {{$grupo->nombre}} </td>
      <td> {{$grupo->estatusg->estatus}} </td>
      <td>


      <button class="btn btn-warning" data-toggle="modal" data-target="#editModalg" onclick="fun_editg('{{$grupo->id}}')" id="editarg" value="{{route('grupo.view')}}">Editar </button>

      @if($grupo->estatus == 1)
        <a class="btn btn-danger" onclick="return confirm('¿Seguro que deseas dar de baja este Usuario?')" href="{{route('grupo.destroy', $grupo->id)}}">Eliminar</a>
      @else
        <a class="btn btn-success" onclick="return confirm('¿Seguro que deseas Activar este Usuario?')" href="{{route('grupo.destroy', $grupo->id)}}">Activar</a>
      @endif
      </td>
    </tr>
    @endforeach
  </tbody>

  @include('grupos.edit')
</table>





@endsection