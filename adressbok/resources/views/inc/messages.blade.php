@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger">
			{{$error}}
		</div>
	@endforeach
@endif

@if(session('success'))
	<div class="alert alert-success">
		{{session('success')}}
	</div>
@endif

@if(session('successfulEdit'))
	<div class="alert alert-success">
		{{session('successfulEdit')}}
	</div>
@endif

@if(session('successfulDelete'))
	<div class="alert alert-success">
		{{session('successfulDelete')}}
	</div>
@endif