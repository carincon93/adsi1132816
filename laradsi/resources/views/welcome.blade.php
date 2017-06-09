@extends('layout-app.welcome')

@section('title', 'LARADSI - Artículos 2017')

@section('content')
	<div class="row">
		<div class="col-md-12">
			@foreach($arts as $art)
			<div class="row well">
				<div class="col-md-4">
					@if($art->image)
					<img src="{{ asset($art->image) }}" alt="" width="100%">
					@else
						<img src="{{ asset('images/image-default.png') }}" alt="" width="100%">
					@endif				
				</div>
				<div class="col-md-8">
					<h3 class="lead">{{ $art->name }}</h3>
					<small class="badge">{{ $art->category->name }}</small>
					<small class="label label-primary">{{ $art->created_at }}</small>
					<hr>
					
					<p>{{ $art->content }}</p>
				</div>
			</div>			
			@endforeach
		</div>
	</div>
@endsection