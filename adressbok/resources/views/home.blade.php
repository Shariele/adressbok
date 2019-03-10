@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>Address book</h1>
			<h2>Your contacts:</h2>	
			<div class="row">
				<div class="col-md-12">
					@include('inc.messages')
				</div>
			</div>	
			@if(count($people) > 0)
				@foreach($people as $person)
					<ul style="margin-bottom: 15px" class="list-group">
						<li " class="list-group-item"> Name: <a href="/detailedperson/{{$person->id}}">{{$person->name}}</a></li>
						<li class="list-group-item"> Address: {{$person->address}} </li>
						<li class="list-group-item"> Primary number: {{$person->number}} </li>
					</ul>
				@endforeach
			@endif
		</div>
	</div>
@endsection