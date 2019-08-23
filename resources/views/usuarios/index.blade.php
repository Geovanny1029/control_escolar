@extends('index')
@section('title','Usuarios')
@section('panel','Lista de Usuarios')
@section('content')


<!-- {!! Form::open(['route' => 'user.index', 'method' => 'GET', 'class' => 'navbar-form pull-left' ]) !!}

{!! Form::close() !!} -->

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal">Crear nuevo Usuario</button>

@include('usuarios.crear')

<table class="table table-striped" id="tablausuarios">
  <thead>
    <th>ID</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>usuario</th>
    <th>Contraseña</th>
    <th>nivel</th>
    <th>estatus</th>
    <th>Accion</th>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>

      <td> {{$user->id}} </td>
      <td> {{$user->nombres}} </td>
      <td> {{$user->apellidos}} </td>
      <td> {{$user->usuario}} </td>
      <td> {{$user->backup_pass}} </td>
      <td> {{$user->nivel1->nombre_nivel}} </td>
      <td> {{$user->estatus1->estatus}} </td>
      <td>


      <button class="btn btn-warning" data-toggle="modal" data-target="#editModal" onclick="fun_edit('{{$user->id}}')" id="editar" value="{{route('user.view')}}">Editar </button>

      @if($user->estatus == 1)
        <a class="btn btn-danger" onclick="return confirm('¿Seguro que deseas dar de baja este Usuario?')" href="{{route('user.destroy', $user->id)}}">Eliminar</a>
      @else
        <a class="btn btn-success" onclick="return confirm('¿Seguro que deseas Activar este Usuario?')" href="{{route('user.destroy', $user->id)}}">Activar</a>
      @endif
      </td>
    </tr>
    @endforeach
  </tbody>

  @include('usuarios.edit')
</table>





@endsection