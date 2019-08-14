@extends('index')
@section('title','Vista Alumno')
@section('panel','Alumno')
@section('content')
Bienvenido 
<h2>Seleccione Grupo</h2><br>
@if(count($errors) > 0)
	<div class="alert alert-danger" role='alert'>
		<ul> 
		@foreach($errors->all() as $error)
			<li>{{$error}} </li>
		@endforeach
		</ul>
	</div>	
	@endif
@foreach($gru as $grupo)
<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12">
	<div class="info-box brown-bg">
		<i class="fa fa-users"></i>
		<div class="count">
			<a href="/useralumnogrupo/{{$grupo->grupor->id}}">{{$grupo->grupor->nombre}}
			</a>
		</div>
		<div class="title">hola</div>
	</div>
</div>
@endforeach

@endsection