@extends('layouts.dashboard')
@section('stl')


.banner{background: linear-gradient(45deg, rgb(29, 152, 224), rgba(29, 200, 205, 0.8)), url({{asset('storage/'. $projects->banner)}}) center top no-repeat;;background-size:cover;height:350px}
@stop
@section('content')


<div class="card my-4 ">

	<div class="container-fluid banner"  style="">
		<img src="{{asset('storage/'.$projects->logo)}}" class="logo">
		<h2>{{$projects->name}}</h2>
		<p> {{$projects->brief}}</p>
	</div>

</div>




<!-- Add project timelines -->
<div class="card">
	<h4 class="m-4 "> Project Team</h4>

	<div class="timelines">
	
		<div class="container mx-3">
			<div class="row">
				<div class="col-md-9"><span style="color:#0ffedd;font-weight:bold;">Timelines</span></div>
				<div class="col-md-3"><span style="color:#0ffedd;font-weight:bold">Completion date</span></div>	
				@foreach($projects->timelines()->get() as $timeline)
				<?php 
				$done = new DateTime(today());
				//$d2 = new DateTime($timeline->completion_date);
				?>
				<div class="col-md-9">{{$timeline->name}}</div>
				<div class="col-md-3">{{$timeline->completion_date}}</div>
				@endforeach
			</div>
			
		</div>

	</div>
	<form  method="POST" action="{{route('timeline.store')}}">
	<div class="card-body ">
		<button  class="btn btn-default mx-3 my-2" id="tall">Add Timeline</button>
		<div id="timelines ">
			<div class="container-fluid">
				<div class="row">
				<div class="col-md-8">
					<th>Timelines</th>
				</div>

				<div class="col-md-4">
					<th>Expected Completion date</th>
				</div>
				</div>
			</div>

		
			@csrf
			@include('helpers.errors')
			<div class="container-fluid">
				<div class="row">
				<div class="col-md-8">
					<div class="form-group my-2"><input type="text" class="form-control" name="timeline[]" placeholder="Timeline"/></div>
				</div>

				<div class="col-md-4">
					<div class="form-group my-2"><input type="date" class="form-control" name="date[]" placeholder="Date"/></div>
				</div>
				</div>
			</div>
			

		</div>

		<div class="form-group mx-3">
		<input type="hidden" name="project_id" value="{{$projects->id}}"/>
		<input type="submit" value="Submit" class="btn btn-primary" name="submit" />
		</div>
	</div>
	</form>
	




</div>


<!-- end of timelines -->

<div class="card jumbotron  my-4">
	
<!-- 	<div class="card-body">
		<h4 class="card-title">Why you should use our product</h4>
		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		<div class="jumbotron">
			<h3>Quick steps to start using tphe ap</h3>
			<ul>
				<li>Register a project</li>
				<li>List you team members</li>
				<li>Follow your project timeline and progress</li>
			</ul>
		</div>
	</div>
 -->	
</div>

@endsection

