@extends('layouts.dashboard')
@section('stl')

@stop
@section('content')


<div class="card text-white bg-primary ">
	<div class="container">
		<div class="row">
			<div class="col-md-2 py-4">
			  	<img src="{{asset('img/project.png')}}" style="height:100px;width:100px" />
			</div>

			<div class="col-md-8 py-4">
				<h3>Be part of something great</h3>
				<p>Partake in an amazing project. Find list of amazing projects to work on and start to make a name for yourself</p>
			</div>
			<div class="col-md-2">
				<div style="margin-top:70px">
				<a  class="btn btn-warning" href="{{route('team.join')}}" style="vertical-align:middle;margin:auto">Join Now</a>
				</div>
			</div>
		</div>
	</div>
</div>









@endsection

