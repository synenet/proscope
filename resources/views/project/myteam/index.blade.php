@extends('layouts.dashboard')
@section('content')

@include('helpers.status')
<div class="card my-4 p-3">
	<h3> Project Team</h3>

	 <a class="btn btn-success pull-right " style="width:120px" href="{{route('myteam.create')}}">Add New Team</a>


</div>

<div class="card">
	@include('helpers.errors')

	

	@foreach($teams as $team)
	<form method="Post" action="{{route('myteam.store')}}">
	@csrf
	<div class="container  my-4 p-4 project_list" >
		<div class="row">

		<div class="col">
			<div class="container"><div class="row"> 
			<div class="col-md-2 text-center m-auto">
				<img class="logo2" src="{{asset('/storage/'.$team->profile['image'])}}">
				
			</div>
			<div class="col-md-8 m-auto">
				<div class="container ">
					<div class="row">
						<div class="col col-md-6 m-auto"><p style="margin-bottom:0">
						<div class="profile_small">
						 <p>{{$team->user['name']}} |
						 <span>{{$team->profile['profession']}}</span>
						 </p>
						
						<p>{{$team->email}}</p><small style="font-weight:bold;"><i>{{$team->profile['about']}}</i></small></div>
						</div>
						<div class="col col-md-6 m-auto">
						<p>{{$team->role['name']}}</p>
						</div>
					</div>
				</div>
				
				

			</div>
			<div class="col-md-2 m-auto">
								
				<input type="submit" value="Add"  class="btn btn-primary">
			</div>
			</div></div>
		</div>


		</div>
	</div>
	</form>
	@endforeach

	@if(count($teams) < 1)
	
		<div class=" px-3 py-3 alert-success ">
			<p>No one on your team yet</p>
		</div>
	
	@endif

	
 </div>

@endsection

