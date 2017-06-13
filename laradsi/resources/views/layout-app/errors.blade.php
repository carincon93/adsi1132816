@if(!$errors->isEmpty())
{{-- @if($errors->has('name')) --}}
	@foreach($errors->all() as $message)
		
		<div class="alert alert-danger alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <p>{{ $message }}</p>
		</div>
	@endforeach
@endif