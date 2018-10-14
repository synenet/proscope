<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Proscope') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="{{ asset('js/main.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/avilon.css') }}">

    <style type="text/css">
    @yield('stl')
    </style>
</head>
<body>

  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="{{url('/')}}" class="scrollto">Dashboard</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
          <li class="menu-active"><a href="{{route('homepage')}}">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#gallery">Gallery</a></li>
          
          <li><a href="#contact">Contact Us</a></li>
     


            <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

        </ul>

        
      </nav><!-- #nav-menu-container -->
    </div>
  </header>

    <div id="app" style="position:relative;top:100px">
       
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-md-3">
                        <div class="card">
                         <ul class="list-group">
                             <li class="list-group-item"><a href="{{route('project.index')}}">Project</a></li>
                             <li class="list-group-item"><a href="">Category</a></li>
                             <li class="list-group-item"><a href="{{route('team.index')}}">Team</a></li>
                             <li class="list-group-item"><a href="{{route('myteam.index')}}">My Team</a></li>
                                  <li class="list-group-item"><a href="{{route('profile.index')}}">Profile</a></li>
                        </ul>
                        </div>

                    </div>
                    <div class="col-md-9">
                        @yield('content')
                    </div>
                </div>
            </div>

        </main>
    </div>
</body>

<script type="text/javascript">
  var tall = document.getElementById('tall');
    
    var timelines = document.getElementById('timelines');

   tall.on('click', function(e){
    e.preventDefault();
    timelines.innerHTML += '<div class="container-fluid"><div class="row"><div class="col-md-8"><div class="form-group my-2"><input type="text" class="form-control" name="timeline[]" placeholder="Timeline"/></div></div><div class="col-md-4"><div class="form-group my-2"><input type="date" class="form-control" name="date[]" placeholder="Date"/></div></div></div></div>';
   timelines.lastchild.innerHTML ='<input type="submit" value="Submit" class="btn btn-primary" />';
   });


</script>

</html>





       