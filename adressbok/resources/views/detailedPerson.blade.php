@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<ul style="margin-bottom: 15px" class="list-group">
				<li " class="list-group-item"> Name: {{$person->name}}</li>
				<li class="list-group-item"> Address: {{$person->address}} </li>
				<li class="list-group-item"> Primary number: {{$person->number}} </li>
			</ul>
		</div>
	</div>
@endsection