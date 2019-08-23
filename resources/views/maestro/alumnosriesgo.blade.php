@extends('index')
@section('title','Vista Alumnos en Riesgo')
@section('panel','Alumnos en Riesgo')
@section('content')

<h2>Alumnos en riesgo</h2>

<table class="table table-striped" id="tablariesgoalumno">
  <thead>
    <th>Grupo</th>
    <th>Asignatura</th>
    <th>Periodo</th>
    @if(Auth::User()->nivel == 1)
      <th>Maestro</th>
    @endif
    <th>Alumno</th>
    <th>Promedio</th>

  </thead>
  <tbody>
    @foreach($relacion as $riesgo)
    <tr>

      <td> 
        {{$riesgo->grupor->nombre}}
      </td>
      <td> 
        {{$riesgo->asignaturar->nombre}}
      </td>
      <td>
        {{$riesgo->periodo1->periodo}}
      </td>
      @if(Auth::User()->nivel == 1)
        <td>
          {{$riesgo->userm->nombres}}
        </td>
      @endif
      <td>
        {{$riesgo->useral->nombres}}
      </td>
      <td>
        {{$riesgo->promedio}}
      </td>
    </tr>
    
   @endforeach
  </tbody>
  
</table>

@endsection