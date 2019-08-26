@extends('index')
@section('title','Periodos')
@section('panel','Periodos')
@section('content')

        @if(count($errors) > 0)
            <div class="alert alert-danger" role="alert">
               @foreach ($errors->all() as $error)
                  <div>{{ $error }}</div>
              @endforeach
            </div>
        @endif 
<!-- {!! Form::open(['route' => 'periodo.index', 'method' => 'GET', 'class' => 'navbar-form pull-left' ]) !!}

{!! Form::close() !!} -->

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModalp">Crear nuevo Periodo</button>

@include('periodos.crear')

<table class="table table-striped" id="tablaperiodos">
  <thead>
    <th>ID</th>
    <th>periodo</th>
    <th>estatus</th>
    <th>Accion</th>
  </thead>
  <tbody>
    @foreach($periodos as $periodo)
    <tr>

      <td> {{$periodo->id}} </td>
      <td> {{$periodo->periodo}} </td>
      <td> {{$periodo->estatusp->estatus}} </td>
      <td>


      <button class="btn btn-warning" data-toggle="modal" data-target="#editModalp" onclick="fun_editp('{{$periodo->id}}')" id="editarp" value="{{route('periodo.view')}}">Editar </button>

      @if($periodo->estatus == 1)
        <a class="btn btn-danger" onclick="return confirm('¿Seguro que deseas dar de baja este Usuario?')" href="{{route('periodo.destroy', $periodo->id)}}">Eliminar</a>
      @else
        <a class="btn btn-success" onclick="return confirm('¿Seguro que deseas Activar este Usuario?')" href="{{route('periodo.destroy', $periodo->id)}}">Activar</a>
      @endif
      </td>
    </tr>
    @endforeach
  </tbody>

  @include('periodos.edit')
</table>





@endsection