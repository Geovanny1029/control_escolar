@extends('index')
@section('title','Asignaturas')
@section('panel','Lista de Asignaturas')
@section('content')

        @if(count($errors) > 0)
            <div class="alert alert-danger" role="alert">
               @foreach ($errors->all() as $error)
                  <div>{{ $error }}</div>
              @endforeach
            </div>
        @endif 
<!-- {!! Form::open(['route' => 'asignatura.index', 'method' => 'GET', 'class' => 'navbar-form pull-left' ]) !!}

{!! Form::close() !!} -->

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModala">Crear nueva asignatura</button>

@include('asignaturas.crear')

<table class="table table-striped" id="tablaasignaturas">
  <thead>
    <th>ID</th>
    <th>Nombre asignatura</th>
    <th>estatus</th>
    <th>Accion</th>
  </thead>
  <tbody>
    @foreach($asignaturas as $asignatura)
    <tr>

      <td> {{$asignatura->id}} </td>
      <td> {{$asignatura->nombre}} </td>
      <td> {{$asignatura->estatusa->estatus}} </td>
      <td>


      <button class="btn btn-warning" data-toggle="modal" data-target="#editModala" onclick="fun_edita('{{$asignatura->id}}')" id="editara" value="{{route('asignatura.view')}}">Editar </button>

      @if($asignatura->estatus == 1)
        <a class="btn btn-danger" onclick="return confirm('¿Seguro que deseas dar de baja este Usuario?')" href="{{route('asignatura.destroy', $asignatura->id)}}">Eliminar</a>
      @else
        <a class="btn btn-success" onclick="return confirm('¿Seguro que deseas Activar este Usuario?')" href="{{route('asignatura.destroy', $asignatura->id)}}">Activar</a>
      @endif
      </td>
    </tr>
    @endforeach
  </tbody>

  @include('asignaturas.edit')
</table>





@endsection