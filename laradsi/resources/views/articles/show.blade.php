@extends('layout-app.base')

@section('title', 'Artículo')

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h1>Artículo</h1>
		<hr>
		<ul class="breadcrumb">
				<li><a href="{{ url('article/') }}">Lista Artículos</a></li>
				<li class="active">Artículo</li>
			</ul>
		<table class="table table-stripped table-bordered table-hover">
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Imágen</th>
				<th>Categoría</th>

			</tr>
			<tr>
				<td>{{ $article->id }}</td>
				<td>{{ $article->name }}</td>
				<td>{{ $article->content }}</td>
				<td>{{ $article->image }}</td>
				<td>{{ $article->category_id }}</td>

			</tr>
		</table>		
	</div>
</div>
@endsection