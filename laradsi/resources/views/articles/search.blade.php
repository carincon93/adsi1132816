@extends('layout-app.base')

@section('title', 'Lista de Artículos')

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h1>Busqueda Artículo</h1>
		<hr>

		<form action="{{ url('article/search') }}" method="POST" class="form-line">
			<div class="form-group">
			{!! csrf_field() !!}	
			<input type="search" name="name" placeholder="Buscar - Nombre de artículo" class="form-control" autocomplete="off" id="name">
			<button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-search"></i> Buscar</button>
			</div>
		</form>
		
		<table class="table table-stripped table-bordered table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Acciones</th>
				</tr>				
			</thead>
			<tbody class="tbody">
				@foreach($articles as $var)
					<tr>
						<td>
							{{ $var->id}}
						</td>
						<td>
							{{ $var->name }}
						</td>
						<td>
							<a href="{{ url('article/'.$var->id) }}" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></a>
							<a href="{{ url('article/'.$var->id.'/edit') }}" class="btn btn-default"><i class="glyphicon glyphicon-pencil"></i></a>
							{{-- <a href="{{ url('') }}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a> --}}
							<form action="{{ url('article/'.$var->id) }}" method="POST" style="display: inline-block;">
								{{ method_field('delete') }}
								{!! csrf_field() !!}
								<button class="btn btn-danger btn-delete"><i class="glyphicon glyphicon-trash"></i></button>
							</form>
						</td>
					</tr>
				@endforeach
				
			</tbody>
		</table>		
	</div>
</div>
@endsection