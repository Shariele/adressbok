<div class="row">
	<div class="col-md-6">
		@if(count($errors) > 0)
			@foreach($errors->all() as $error)
				<div class="alert alert-danger">
					{{$error}}
				</div>
			@endforeach
		@endif
	</div>
</div>