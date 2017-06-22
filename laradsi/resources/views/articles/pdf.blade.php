<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lista Artículos</title>
    <style>
    	body {
    		font-family: sans-serif;
    	}
    	table {
    		border: thin solid #ccc;
    		border-collapse: collapse;
    		width: 100%;
    	}
    	table td, table th {
    		font: 14px;
    		border: thin solid #ccc;
    		color: #888;
    		padding: 4px;
    	}
    	table th {
    		background: #ddd;
    		color: #666;
    	}
    </style>
  </head>
  <body>
  	<h1>Lista de Artículos</h1>
	<table>
		<tr>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Categoría</th>
		</tr>
		<tr>
			@foreach($articles as $art)
			<td>{{ $art->name }}</td>
			<td>{{ $art->content }}</td>
			<td>{{ $art->category->name }}</td>
			@endforeach

		</tr>
	</table>

  </body>
</html>
