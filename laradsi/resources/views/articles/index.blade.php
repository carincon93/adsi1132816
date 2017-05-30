@extends('layout-app.base')

@section('title', 'Lista de Artículos')

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h1>Lista de Artículos</h1>
		<hr>

		@if(session('status'))
			<div class="alert alert-success alert-dismissible" role="alert">
			  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  	<p>{!! html_entity_decode(session('status')) !!}</p>
			</div>
		@endif
		<a class="btn btn-success" href="{{ url('article/create') }}">
			<i class="glyphicon glyphicon-plus"></i>
		</a>
		<table class="table table-stripped table-bordered table-hover">
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Acciones</th>
			</tr>
			@foreach($articles as $art)
				<tr>
					<td>{{ $art->id }}</td>
					<td>{{ $art->name }}</td>
					<td>
						<a href="{{ url('article/'.$art->id) }}" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></a>
						<a href="{{ url('article/'.$art->id.'/edit') }}" class="btn btn-default"><i class="glyphicon glyphicon-pencil"></i></a>
						{{-- <a href="{{ url('') }}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a> --}}
						<form action="{{ url('article/'.$art->id) }}" method="POST" style="display: inline-block;">
							{{ method_field('delete') }}
							{!! csrf_field() !!}
							<button class="btn btn-danger btn-delete"><i class="glyphicon glyphicon-trash"></i></button>
						</form>
					</td>
				</tr>
			@endforeach
		</table>		
	</div>
</div>
@endsection