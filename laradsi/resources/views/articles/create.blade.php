@extends('layout-app.base')

@section('title', 'Adicionar Categoría')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1></h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{ url('article/') }}">Lista Artículos</a></li>
				<li class="active">Adicionar Artículo</li>
			</ul>
			<hr>
			@if(!$errors->isEmpty())
			{{-- @if($errors->has('name')) --}}
				@foreach($errors->all() as $message)
					
					<div class="alert alert-danger alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <p>{{ $message }}</p>
					</div>
				@endforeach
			@endif
			<form action="{{ url('article') }}" method="POST">
				{!! csrf_field() !!}
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Nombre">
					<input type="file" name="image" class="form-control" placeholder="Nombre">
					<textarea name="content" id="" cols="30" rows="10"></textarea>
					<select name="category" id="">
						@foreach($categories as $cat)
							<option value="{{ $cat->id }}">{{ $cat->name }}</option>
						@endforeach
					</select>
					<button class="btn btn-success"><i class="glyphicon glyphicon-send"></i> Guardar</button>
				</div>
			</form>
		</div>
	</div>

@endsection