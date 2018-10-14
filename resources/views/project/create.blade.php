@extends('layouts.dashboard')
@section('content')
@include('helpers.status')
<div class="jumbotron" style="background:url({{asset('img/project-management.png')}})">
	<h3 style="background:#fff;padding:5px;border-radius:5px;border:solid 1px #fbfafa"> Start creating your amazing project</h3>

</div>

<div  class="card"> 
	<div class="card-body">
		@include('helpers.errors')
		<form method="POST"  action="{{route('project.store')}}" enctype="multipart/form-data">
		@csrf
			<div class="form-group">
				<label>Project Name</label>
				<input  class="form-control" type="text" name="name"/>
			</div>

			<div class="form-group">
				<label>About</label>
				<input class="form-control" type="text" name="brief"/>
			</div>

			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" name="description"></textarea>
			</div>

			<div class="form-group">
				<label>Logo</label>
				<input type="file" class="form-control" name="logo" />
			</div>

			<div class="form-group">
				<label>Banner</label>
				<input type="file" class="form-control" name="banner" />
			</div>

			<div class="container-fluid">
				<div  class="row" >
					<div class="col-md-6 form-group">
						<label>Project Start</label>
						<input class="form-control" type="date"  name="start_date">
					</div>

					<div class="col-md-6 form-group">
						<label>Project Completion</label>
						<input class="form-control" type="date"  name="completion_date">
					</div>
				</div>
			</div>

			<div class="form-group">
				<label>Category</label>
				<select name="category" class="form-control">
					@foreach($categories as $category)
					<option  value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
				</select>
			</div>
			<input type="hidden" name="user" value="{{Auth::user()->id}}">
			<div class="form-group">
				<input type="submit" class="btn btn-primary" name="submit" value="Submit">
			</div>


		</form>
	</div>

		
	</div>

@endsection