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
			@include('layout-app.errors')

			
			<form action="{{ url('article') }}" method="POST" enctype="multipart/form-data">
				{!! csrf_field() !!}
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ old('name') }}">
					<input type="file" name="image" class="form-control" placeholder="Nombre" id="upload" accept="image/*" style="display: none">

					<button class="btn btn-default btn-upload" type="button">
						Seleccionar imágen
						<i class="glyphicon glyphicon-picture"></i>
					</button>
					<textarea name="content" id="" cols="30" rows="10">{{ old('content') }}</textarea>
					<select name="category_id" id="">
						@foreach($categories as $cat)
							{{-- Operador Ternario --}}
							{{-- (Condición) ? Verdadero : Falso --}}
							{{-- (5 > 10) ? 'Es verdadero' : 'Es falso' --}}
							<option value="{{ $cat->id }}" {{ (old("category_id") == $cat->id ? "selected" : "")}}>{{ $cat->name }}</option>
						@endforeach
					</select>
					<button class="btn btn-success"><i class="glyphicon glyphicon-send"></i> Guardar</button>
				</div>
			</form>
		</div>
	</div>

@endsection