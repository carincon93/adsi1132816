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