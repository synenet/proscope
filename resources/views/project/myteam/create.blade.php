@extends('layouts.dashboard')
@section('content')

@include('helpers.status')
<div class="card my-4 p-3">
	<h3> Add volunteers to your project</h3>

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
						 <p>{{$team->name}} |
						 <span>{{$team->profile['profession']}}</span>
						 </p>
						
						<p>{{$team->email}}</p><small style="font-weight:bold;"><i>{{$team->profile['about']}}</i></small></div>
						</div>
						<div class="col col-md-6 m-auto">
						<select class="form-control" class="role">
							@foreach($roles as $role)
							<option value="{{$role->id}}">{{$role->name}}</option>
							@endforeach
						</select>
						</div>
					</div>
				</div>
				
				

			</div>
			<div class="col-md-2 m-auto">
				<input type="hidden" name="project_team_id" value="{{$team->id}}">
				<input type="hidden" name="role_id" value="{{$role->id}}">
				
				
				<input type="submit" value="Add"  class="btn btn-primary">
			</div>
			</div></div>
		</div>


		</div>
	</div>
	</form>
	@endforeach
</div>

@endsection

