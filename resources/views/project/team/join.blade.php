@extends('layouts.dashboard')
@section('content')

@include('helpers.status')
<div class="card my-4 p-3">
	<h3> Find a plethora of projects to volunteer for</h3>

</div>

<div class="card">
	@include('helpers.errors')
	@foreach($projects as $project)
	<form method="Post" action="{{route('join.team')}}">
	@csrf
	<div class="container  my-4 p-4 project_list" >
		<div class="row">

		<div class="col-md-3 col">
			<img class="logo2" src="{{asset('storage/'. $project->logo)}}">
		</div>
		<div class="col-md-6 col">
			<p class="lead">{{$project->name}}</p>
			<p>{{$project->brief}}</p>
		</div>
		<div class="col-md-3 col" style="margin:auto" >
			<input type="hidden" name="project_id" value="{{$project->id}}">
			<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
			<input type="submit" name="submit" value="Join" class="btn btn-success"/>
		</div>


		</div>
	</div>
	</form>
	@endforeach
</div>

@endsection

