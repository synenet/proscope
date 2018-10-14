@extends('layouts.dashboard')
@section('content')
@include('helpers.status')

	<!-- about	profession	gender -->

	<h3> Your profile</h3>

	<div class="container">
		<div class="row">
			<div class="col col-md-6">
				<form method="POST" action="{{route('profile.store')}}" enctype="multipart/form-data">
				@include('helpers.errors')
				@csrf
					<div class="form-group">
						<label> About</label>
						<textarea type="text" class="form-control" name="about"></textarea>
					</div>

					<div class="form-group">
						<label> Profession </label>
						<input type="text" class="form-control" name="profession"/>
					</div>

					<div class="form-group">
						<label>	Gender</label>
						<select class="form-control" name="gender">	
							<option value="0">Male</option>
							<option value="1">Female</option>
						</select>
					<div>	
						<label>	Profile pix</label>
						<input type="file" class="form-control" name="image">
					</div>	
						
					</div>

					<div class="form-group">

					<input type="submit" class="btn btn-primary">	
					</div>


				</form>
			</div>	
		</div>
	</div>

@endsection