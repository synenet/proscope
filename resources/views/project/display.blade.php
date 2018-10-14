@extends('layouts.app')
@section('content')

<div style="background-color:#f5f5f5;padding-top:50px;padding-bottom:50px" class=";container-fluid">
<div class="container" style="position:relative;color:#fff;height:300px;background:  url({{asset('storage/'. $projects->banner)}}) ;background-size:cover">
	<div style="position: absolute; top : 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, .5)">
	<div class="row">
		<div class="col-md-9 col-xs-12" style="margin-left:15px">
                        <div class="cw-inr-blg-ttl-wrap" style="position: relative;margin-top: 15px; opacity: 1;">
                        	</div>
                            <h1 style="" class="post_title" title="Install Laravel 5.7 &amp; Checkout the New Amazing Features "> {{$projects->name}}</h1>

                            <div class="cw-inr-bnr-auth-wrap">
                                <p class="text-capitalize"> Updated on
                                    <span>&nbsp;13th September  </span>
                                </p>
                                
		<span class="span-reading-time"> 6 Min Read</span>
		                                <!--Category Heading-->
                                
            <div class="blg-app-ttl blg-cat-dot-2846">
                <a href="https://www.cloudways.com/blog/featured/">
                
                </a>
            </div>
        
            <div class="blg-app-ttl blg-cat-dot-2024">
            	<span class="badge badge-pill badge-danger">{{$projects->category->name}}</span>
                            </div>
                                   

              </div>
                 </div>
                    </div>
	</div>
</div>


<div class="container">
<div class="card my-4 px-4 py-3">
	<div class="row">
		<div class="col col-md-10">
			<h4>About Project</h4>
			<p>{{$projects->description}}</p>
		</div>
	</div>
</div>
</div>

<div class="container">
<div class="card my-4 px-4 py-3">
	<div class="row">
		<div class="col col-md-12">
			<h4>Project Schedule</h4>
			<p>{{$projects->description}}</p>
		</div>

		<div class="col col-md-2">
			<h6>Start Date</h6>
			<p>{{date_format(date_create($projects->start_date),"d F, Y")}}</p>
		</div>

		<div class="col col-md-10">
			<h6>Completion</h6><i class="fa fa-plus"></i>
			<p>{{date_format(date_create($projects->completion_date),"d F, Y")}}</p>
		</div>
	</div>
</div>

<div class="card my-4 px-4 py-3">
	<div class="row">
		<div class="col col-md-12">
			<h4>Project Timelines</h4>
			
			@foreach($projects->timelines as $timeline)

			<h6 style="float:left;color:#0effgg;margin-right:20px">{{$timeline->name}} <span style="display:inline-block;height:10px;width:10px;background:#4dc0b5;border-radius:50%"></span> </h6>

			@endforeach
			
		</div>

		
	</div>
</div>

<div class="card my-4 px-4 py-3">
	<div class="row">
		<div class="col col-md-12">
			<h4>Project Team</h4>
			
			@foreach($projects->teams as $team)
			<div style="float:left;margin-right:15px;padding:7px;text-align:center">
			<img  class="logo2" src="{{asset('/storage/'.$team->profile->image)}}">
			<h6>{{$team->user->name}}</h6>
			<p>{{$team->roles->name}}</p>
			</div>
			@endforeach
			
		</div>

		
	</div>
</div>



</div>


</div>

@endsection