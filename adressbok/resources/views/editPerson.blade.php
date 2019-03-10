@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-10">
			<h1>Edit {{$person->name}}</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			{!! Form::open(['url' => 'detailedPerson/submitEditedPerson']) !!}
				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								{{Form::label('name', '')}}
								{{Form::text('name', $person->name, ['class' => 'form-control'])}}
							</div>
							<div class="form-group">
								{{Form::label('address', '')}}
								{{Form::text('address', $person->address, ['class' => 'form-control'])}}
							</div>
							<div class="form-group">
								{{Form::label('Primary number', '')}}
								{{Form::text('number', $person->number, ['class' => 'form-control'])}}
							</div>
							<div>
								{{Form::hidden('id', $person->id)}}
								{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
							</div>
						</div>
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection