@extends('layouts.dashboard')

@section('content')


<div class="card text-white bg-primary ">
	<div class="container">
		<div class="row">
			<div class="col-md-2 py-4">
			  	<img src="{{asset('img/project.png')}}" style="height:100px;width:100px" />
			</div>

			<div class="col-md-8 py-4">
				<h3>Do you have an amazing project you are working on</h3>
				<p>Start your project in an incredible way, accessing all the useful tools you need to kickstart your project</p>
			</div>
			<div class="col-md-2">
				<div style="margin-top:70px">
				<a  class="btn btn-success" href="{{route('project.create')}}" style="vertical-align:middle;margin:auto">Start Now</a>
				</div>
			</div>
		</div>
	</div>
</div>



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

