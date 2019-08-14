@extends('index')
@section('title','Calificacion')
@section('panel','Calificacion')
@section('content')

<h2>Calificacion</h2>

@if($movimiento == "SC")
	<h3>NO HAN SUBIDO CALIFICACIONES</h3>
@else
	@if($movimiento->C1 == null)
		<h3>NO han subido calificacion</h3>
	@else
		<h3>Primer Periodo:{{$movimiento->C1}}</h3>
		@if($movimiento->C2 == null)
		@else
			<h3>Segundo Periodo:{{$movimiento->C2}}</h3>
		@endif
		@if($movimiento->C3 == null)
		@else
			<h3>Tercer Periodo:{{$movimiento->C3}}</h3>
			<h2>Promedio: {{($movimiento->C1+$movimiento->C2+$movimiento->C3)/3}}</h2>
		@endif
	@endif
@endif

@endsection