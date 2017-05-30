@extends('layout-app.base')

@section('title', 'Adicionar Categoría')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1></h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{ url('category/') }}">Lista Categorías</a></li>
				<li class="active">Modificar Categoría</li>
			</ul>
			<hr>
			<form action="{{ url('category/'.$cat->id) }}" method="POST">
				{!! csrf_field() !!}
				{{ method_field('put') }}
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ $cat->name }}">
					<button class="btn btn-success"><i class="glyphicon glyphicon-send"></i> Modificar</button>
				</div>
			</form>
		</div>
	</div>

@endsection