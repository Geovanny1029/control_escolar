@extends('index')
@section('title','Vista Maestroxasignaturaxalumnos')
@section('panel','Maestro asignatura y alumnos')
@section('content')

<h2>Alumnos</h2>


	
<table class="table table-striped" id="tablamaestro2">
  <thead>
    <th>Nombre Alumno</th>
    <th>Accion</th>
  </thead>
  <tbody>
    @foreach($alumnos as $alumno)
    <tr>

      <td> {{$alumno->useral->nombres}} {{$alumno->useral->apellidos}} </td>
      <td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModalsub">Subir Calificacion</button>

		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModalsub">Promedio</button>
       <br><br> 
      </td>
    </tr>
    @include('maestro.subir')
   @endforeach
  </tbody>
  
</table>

@endsection