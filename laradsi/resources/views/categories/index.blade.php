@extends('layout-app.base')

@section('title', 'Lista de Categorías')

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h1>Lista de Categorías</h1>
		<hr>
		<a class="btn btn-success" href="{{ url('category/create') }}">
			<i class="glyphicon glyphicon-plus"></i>
		</a>
		<table class="table table-stripped table-bordered table-hover">
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Acciones</th>
			</tr>
			@foreach($categories as $cat)
				<tr>
					<td>{{ $cat->id }}</td>
					<td>{{ $cat->name }}</td>
					<td>
						<a href="{{ url('category/'.$cat->id.'/edit') }}" class="btn btn-default"><i class="glyphicon glyphicon-pencil"></i></a>
						{{-- <a href="{{ url('') }}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a> --}}
						<form action="{{ url('cagtegory/'.$cat->id) }}" method="POST" style="display: inline-block;">
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