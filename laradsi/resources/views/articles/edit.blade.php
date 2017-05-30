@extends('layout-app.base')

@section('title', 'Adicionar Artículo')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1></h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{ url('article/') }}">Lista Artículos</a></li>
				<li class="active">Modificar Artículo</li>
			</ul>
			<hr>
			<form action="{{ url('article/'.$art->id) }}" method="POST">
				{!! csrf_field() !!}
				{{ method_field('put') }}
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ $art->name }}">
					<input type="file" name="image" class="form-control" placeholder="Imágen" value="{{ $art->image }}">
					<textarea name="content" id="" cols="30" rows="10">{{ $art->content }}</textarea>
					<select name="category" id="">
						@foreach($categories as $cat)
							<option value="{{ $cat->id }}" {{ $cat->id == $art->category_id ? 'selected="selected"' : '' }}>{{ $cat->name }}</option>
						@endforeach
					</select>
					<button class="btn btn-success"><i class="glyphicon glyphicon-send"></i> Modificar</button>
				</div>
			</form>
		</div>
	</div>

@endsection