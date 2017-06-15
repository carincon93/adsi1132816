<table class="table">
	<tr></tr>
	@foreach($query as $var)
		<tr>
			<td>
				{{ $var->id}}
				{{ $var->name }}
			</td>
			<td></td>
		</tr>
	@endforeach			
</table>