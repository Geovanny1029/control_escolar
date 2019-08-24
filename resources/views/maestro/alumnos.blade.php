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

      <td> 
        {{$alumno->useral->nombres}} {{$alumno->useral->apellidos}} 
      </td>
      <td> 
        <h4><a href="/Calificacion/{{$alumno->id}}" data-lity >Ver</a> </h4>
      </td>
    </tr>
    
   @endforeach
  </tbody>
  
</table>

@endsection