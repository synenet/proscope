@extends('layouts.dashboard')
@section('content')
@include('helpers.status')

<div class="card" style="width:500px">
@foreach($profile as $prof)
	<div class="container my-2 px-2 mx-3" >
		<div class="row">
			<div class="col col-md-4">
				<img src="{{asset('storage/'. $prof->image)}}" class="logo2" />		
			</div>

			<div class="col col-md-8">
				{{Auth::user()->name}}
				<hr>		
			</div>

		</div>
	</div>

	<div class="container my-4 px-2 mx-3">
		<div class="row">
			<div class="col col-md-4">
				<H5>Profession</H5>		
			</div>

			<div class="col col-md-8">
				{{$prof->profession}}
				<hr>		
			</div>

		</div>
	</div>

	<div class="container my-4 px-2 mx-3">
		<div class="row">
			<div class="col col-md-4">
				<H5>About</H5>		
			</div>

			<div class="col col-md-8">
				{{$prof->about}}
				<hr>		
			</div>

		</div>
	</div>
@endforeach
</div>


@endsection