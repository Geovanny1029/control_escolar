@extends('index')
@section('title','Vista Maestros')
@section('panel','Maestro')
@section('content')

<h2>Seleccione Grupo</h2><br>

@foreach($gru as $grupo)
<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12">
	<div class="info-box brown-bg">
		<i class="fa fa-users"></i>
		<div class="count">
			<a href="/usermaestrogrupo/{{$grupo->grupor->id}}">{{$grupo->grupor->nombre}}
			</a>
		</div>
		<div class="title">hola</div>
	</div>
</div>
@endforeach

@endsection