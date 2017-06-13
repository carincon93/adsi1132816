@extends('layout-app.base')

@section('title', 'Adicionar Categoría')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1></h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{ url('category/') }}">Lista Categorías</a></li>
				<li class="active">Adicionar Categoría</li>
			</ul>
			<hr>
			@include('layout-app.errors')
			<form action="{{ url('category') }}" method="POST">
				{!! csrf_field() !!}
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Nombre">
					<button class="btn btn-success"><i class="glyphicon glyphicon-send"></i> Guardar</button>
				</div>
			</form>
		</div>
	</div>

@endsection