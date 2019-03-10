@extends('layouts.app')

@section('content')
	<h1>Add person</h1>

	@include('inc.messages')
	{!! Form::open(['url' => 'addPerson/submitNewPerson']) !!}
		<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						{{Form::label('name', '')}}
						{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
					</div>
					<div class="form-group">
						{{Form::label('address', '')}}
						{{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Enter Address'])}}
					</div>
					<div class="form-group">
						{{Form::label('number', '')}}
						{{Form::text('number', '', ['class' => 'form-control', 'placeholder' => 'Enter first number'])}}
					</div>
					<div>
						{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
					</div>
				</div>
			</div>
		</div>
	{!! Form::close() !!}
	
@endsection