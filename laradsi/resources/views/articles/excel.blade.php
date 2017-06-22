<table>
	<thead></thead>
	<tbody>
		@foreach($articles as $art)
		<tr>
			<td>{{ $art->name }}</td>
			<td>{{ $art->content }}</td>
			<td>{{ $art->category->name }}</td>
		</tr>
		@endforeach
	</tbody>
</table>