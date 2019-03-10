@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-10">
			<h1>Detailed View</h1>
		</div>
		<div style="text-align: center; margin-top: 10px" class="col-md-1">
			<a href="/editperson/{{$person->id}}">Edit</a>
		</div>
		{!! Form::open(['url' => 'detailedPerson/deletePerson']) !!}
			<div class="form-group">
				{{Form::hidden('id', $person->id)}}
				{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
			</div>

		{!! Form::close() !!}
	</div>

	<div class="row">
		<div class="col-md-12">
			@include('inc.messages')
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<ul style="margin-bottom: 15px;" class="list-group">
				<li class="list-group-item"> Name: {{$person->name}}</li>
				<li class="list-group-item"> Address: {{$person->address}} </li>
				<li class="list-group-item"> Primary number: {{$person->number}} </li>
			</ul>
		</div>
	</div>
@endsection