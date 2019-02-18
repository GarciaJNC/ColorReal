@if ($errors->any())
	<div class="alert alert-danger" role="alert" data-zanim-xs='{"delay":0.3}'>
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	</div>
@endif