<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Proscope</title>

       
      
        <script src="{{ asset('js/app.js') }}" defer></script>
       
        <script src="{{ asset('js/jquery-1.10.2.js') }}" defer></script>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/avilon.css')}}">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #intro {
                  width: 100%;
                  height: 100vh;
                  background: linear-gradient(45deg, #bddcf5, rgba(250, 251, 251, 0.8)), url("{{asset('img/intro-bg.jpg')}}") center top no-repeat;
                  background-size: cover;
                  position: relative;


}

.glb-plt_sec_wrap article h2{
  font-size: 36px;
    font-weight: 500;
    color: #091e42
}

.glb-plt_sec_wrap article {
    margin-bottom: 40px;
    text-align: center;

 }



        </style>
 
    </head>
    <body>

        <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Proscope</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
          <!-- <li class="menu-active"><a href="#intro">Home</a></li> -->
          
          <li><form class="form-inline">
            
        <input type="text" style="padding:7px;margin-right:7px" class="form-control" name="search" id="search" placeholder="Search for Projects">
    
        <input type="submit" style="padding:7px" class="btn btn-primary" class="form-control" value="Find Projects">
</form></li>

        <div class="form-result" style="position:absolute;top:100px;background:#fff;color:#ddd"></div>

   
          <li><a href="#contact">Contact Us</a></li>
          @if (Route::has('login'))
                  @auth
                        <li>
                        <a href="{{ url('/home') }}">Home</a>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endauth
                
            @endif

        </ul>

        
      </nav><!-- #nav-menu-container -->
    </div>
  </header>


  <section id="intro">

  <div class="container-fluid" style="top:150px;position:absolute">
                <div class="row">
                    <div class="hm-bnr-img-rt col-md-6 col-sm-6 col-sm-push-6" style="padding:20px">
                        <img src="{{asset('img/homepage-illustration.png')}}" alt="cloud hosting" class="img-responsive">
                    </div>
                    <article class="hm-bnr col-md-6 col-sm-6 col-sm-pull-6" style="padding:20px">
<a href="https://platform.cloudways.com/signup" class="cmpg-offer-disc">
</a>
                        <h1 style="color:#28AAD5">One stop shop for showcasing your project</h1>
                        <p style="color:#28AAD5">A platform that allows you to showcase that amazing project you are working on.Not just that, it takes your project to the worls,allowing the world 
                        to know waht you and your team are working on</p>
                        <section class="wt-signup-wrapper" style="background:none; padding-top:20px">
    <div class="wt-signup-main">
        
 <div class="wt-signup-btn"> 
     <a href="{{route('login')}}" class="btn cw-glb-btn">
  Get Started Free
            </a>
        </div>
        
    </div>
</section>
<div class="clearfix"></div>
                    </article>
                </div>
            </div>

    <!-- <div class="intro-text">
      <h2>Welcome to Project Scope</h2>
      <p>Bring your project to life with team and user actions</p>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
 -->
 </section>
    <section>
    <div class="search container-fluid">
     <div class="row">
         <div class="form-group col col-md-8">

        <form method="GET" action="/search">
               @csrf    
            
        <input type="text" name="search" id="search" class="form-control" />
                                         
         </div>
         <div class="form-group col com-md-2" name="search_type">
             <select class="form-control">
                 <option value="project">Projects</option>
                 <option value="people">People</option>
             </select>
         </div>

        <div class="form-group col col-md-2">
             
             <input type="submit"  class="btn btn-primary" name="submit" value="Search" />
         </div>
         </form>
     </div>


     
 </div>

@if(!empty($projects))
 <table class="table table-bordered table-hover">

<thead>

<tr>

<th>ID</th>

<th>Product Brief</th>

<th>Description</th>

<th>Price</th>

</tr>

</thead>

<tbody>
@foreach($projects as $project)

<tr>
<a href="{{asset('project/show/'.$project->id)}}">
<td>{{$project->id}}</td>
    <td><a href="{{asset('project/show/'.$project->id)}}">
    {{$project->name}}</a></td>
    <td>{{$project->brief}}</td>
    <td>{{$project->description}}</td></a>
    @endforeach
</tr>
</tbody>

</table>
@endif

  </section>
  

  
  </section>
<div class="container-fluid" style="background:#F4F3F9;padding:50px;">
<article class="glb-plt_sec_top" style="text-align:center">
                            <h2>Innovative Platform Built for Teams working on amazing project</h2>
                            <p> Now your project need not to be done in silos.Let the world know what you and your team are up to</p>
                        </article>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 glb-plt_sec">
                        
                        <ul>
                            <li class="container" style="list-style-type:none;margin-top:20px">
                                <div class="row">
                                <div class="glb-plt_sec-icon col-md-2">                                       
    <img src="https://www.cloudways.com/wp-content/uploads/2018/06/livein-minutes-new.svg" class="img-responsive">
    </div>
                                <div class="glb-plt_sec_cont col-md-10">
                                    <strong>Go Live in Minutes</strong>
                                        You need not a website to start a project. Within minutes you can publish you project for all to see.
                                </div>
                                </div>
                            </li>
                            <li class="container" style="list-style-type:none;margin-top:20px">
                            <div class="row">
                                <div class="glb-plt_sec-icon col-md-2">                                       
    <img src="https://www.cloudways.com/wp-content/uploads/2018/06/manage-pro-new.svg" class="img-responsive">
    </div>
                                <div class="glb-plt_sec_cont col-md-10">
                                    <strong>Manage like A Pro</strong>
                                    We help you manage your project and your team members with ease.With an amzing dashboard
                                </div>
                                </div>
                            </li>
                            <li class="container" style="list-style-type:none;margin-top:20px">
                            <div class="row">
                                <div class="glb-plt_sec-icon col-md-2">                                       
    <img src="https://www.cloudways.com/wp-content/uploads/2018/04/scale-success.svg" class="img-responsive">
    </div>
                                <div class="glb-plt_sec_cont col-md-10">
                                    <strong>See what others think</strong>
                                    Users seeing your projectscan take several important actions based on your project.Let users like,share ,comment and volunteer for your project
                                </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6 glb-plt_grp">
                        <div class="glb-plt-intro-img-box">
                            <img src="https://www.cloudways.com/wp-content/uploads/2018/05/hm-feature-img.png" class="img-responsive" alt="cloud hosting provider">
                        </div>
                    </div>
                </div>
            </div>

            
        <div id="footer-container" class="container">

        <!-- BEGIN quick links navigation -->
        <div class="footer-nav col-sm-5">
            <div class="row">
                <div class="col-sm-6">
                    <a class="footer-nav-heading pull-wide in" id="nav-ftr-quick" data-toggle="collapse" data-target=".footer-nav_quick-2" aria-expanded="false" aria-controls="footer-nav_quick-part1 footer-nav_quick-part2">PRODUCT &amp; SOLUTION</a>
                    <!-- BEGIN Footer navigation -->
                    <div id="footer-nav_quick-part1" class="footer-nav_content pull-wide collapse in footer-nav_quick-2"><ul id="menu-footer-menu-1" class="nav nav-pills nav-stacked"><li id="menu-item-976" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-976"><a href="https://www.cloudways.com/en/wordpress-cloud-hosting.php">WordPress Hosting</a></li>
<li id="menu-item-1359" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1359"><a href="https://www.cloudways.com/en/magento-managed-cloud-hosting.php">Magento Hosting</a></li>
<li id="menu-item-2106" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2106"><a href="https://www.cloudways.com/en/php-cloud-hosting.php">PHP Hosting</a></li>
<li id="menu-item-1140" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1140"><a href="https://www.cloudways.com/en/laravel-hosting.php">Laravel Hosting</a></li>
<li id="menu-item-979" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-979"><a href="https://www.cloudways.com/en/drupal-cloud-hosting.php">Drupal Hosting</a></li>
<li id="menu-item-980" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-980"><a href="https://www.cloudways.com/en/joomla-cloud.php">Joomla Hosting</a></li>
<li id="menu-item-981" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-981"><a href="https://www.cloudways.com/en/prestashop-hosting.php">PrestaShop Hosting</a></li>
</ul></div>                    <!-- End Footer navigation -->
                </div>
                <div class="col-sm-6">
                    <!-- BEGIN Footer navigation -->
                    <div id="footer-nav_quick-part2" class="footer-nav_content pull-wide collapse in quick-div-2 footer-nav_quick-2"><ul id="menu-footer-menu-2" class="nav nav-pills nav-stacked"><li id="menu-item-1396" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1396"><a href="https://www.cloudways.com/en/hosting-woocommerce.php">WooCommerce Hosting</a></li>
<li id="menu-item-986" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-986"><a href="https://platform.cloudways.com/signup">Cloudways Platform</a></li>
<li id="menu-item-987" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-987"><a href="https://developers.cloudways.com/">Cloudways API</a></li>
<li id="menu-item-2100" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2100"><a href="https://www.cloudways.com/en/free-wordpress-cache-plugin-breeze.php">Breeze – Free WordPress Cache</a></li>
<li id="menu-item-1353" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1353"><a href="https://www.cloudways.com/en/addons.php">Add-ons</a></li>
<li id="menu-item-2103" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2103"><a href="https://www.cloudways.com/en/cdn-services.php">CloudwaysCDN</a></li>
<li id="menu-item-2112" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2112"><a href="https://www.cloudways.com/en/cloudwaysbot.php">CloudwaysBot</a></li>
</ul></div>                    <!-- End Footer navigation -->
                    <br class="clearfix">
                </div>
            </div>
        </div>
        <!-- END quick links navigation -->

        <!-- BEGIN feature services navigation -->
        <div class="footer-nav col-sm-2">
            <a class="footer-nav-heading pull-wide collapsed" data-toggle="collapse" href="#footer-nav_feature" aria-expanded="false" aria-controls="footer-nav_feature">
                COMPANY            </a>
            <!-- BEGIN Footer navigation -->
            <div id="footer-nav_feature" class="footer-nav_content pull-wide collapse"><ul id="menu-company" class="nav nav-pills nav-stacked"><li id="menu-item-966" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-966"><a href="https://www.cloudways.com/en/about_us.php">About Us</a></li>
<li id="menu-item-965" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-965"><a href="https://www.cloudways.com/en/testimonials.php">Testimonials</a></li>
<li id="menu-item-967" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-967"><a href="https://www.cloudways.com/en/terms.php">Terms</a></li>
<li id="menu-item-968" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-968"><a href="https://www.cloudways.com/en/media-kit.php">Media Kit</a></li>
<li id="menu-item-1340" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1340"><a href="https://www.cloudways.com/en/sitemap.php">Sitemap</a></li>
</ul></div>            <!-- End Footer navigation -->
            <br class="clearfix">
        </div><!-- END feature services navigation -->

        <!-- BEGIN support content -->
        <div class="footer-nav col-sm-3">
            <a class="footer-nav-heading pull-wide collapsed" data-toggle="collapse" href="#footer-nav_support" aria-expanded="false" aria-controls="footer-nav_support">
                SUPPORT            </a>
            <!-- BEGIN Footer navigation -->
            <div id="footer-nav_support" class="footer-nav_content pull-wide collapse"><ul id="menu-support" class="nav nav-pills nav-stacked"><li id="menu-item-970" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-970"><a href="https://support.cloudways.com/">Knowledge Base</a></li>
<li id="menu-item-971" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-971"><a href="https://www.cloudways.com/en/contact_us.php">Contact Us</a></li>
<li id="menu-item-973" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-973"><a href="https://www.cloudways.com/blog/">Blog</a></li>
<li id="menu-item-972" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-972"><a href="https://community.cloudways.com/">Community</a></li>
<li id="menu-item-974" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-974"><a href="http://feedback.cloudways.com/">Feedback</a></li>
<li id="menu-item-975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-975"><a href="https://www.cloudways.com/en/free-website-migration-service.php">Free Website Migration</a></li>
</ul></div>            <!-- End Footer navigation -->
            <br class="clearfix">
        </div><!-- END support navigation -->

        <div class="footer-nav footer-nav-reverse col-sm-2">
            <div class="footer-nav-reverse-inr">
                <a class="footer-nav-heading footer-nav_legal-heading pull-wide collapsed" data-toggle="collapse" href="#footer-nav_legal" aria-expanded="false" aria-controls="footer-nav_legal">
                    QUICK LINKS                </a>
                <!-- BEGIN Footer navigation -->
                <div id="footer-nav_legal" class="footer-nav_content pull-wide collapse"><ul id="menu-main-menu" class="nav nav-pills nav-stacked"><li id="menu-item-171" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-171"><a href="https://www.cloudways.com/en/features.php">Features</a></li>
<li id="menu-item-170" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170"><a href="https://www.cloudways.com/en/pricing.php">Pricing</a></li>
<li id="menu-item-77" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-77"><a href="https://www.cloudways.com/en/partners.php">Partners</a></li>
<li id="menu-item-969" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-969"><a href="https://www.cloudways.com/en/partners/cloud-affiliate-program.php">Cloud Affiliate Program</a></li>
</ul></div>                <!-- End Footer navigation -->
                <div class="clearfix"></div>
            </div>
            <!-- End legal conditions navigation -->

            <!-- BEGIN social navigation -->

            <!-- END social navigation -->
        </div>
    </div>

    <section class="footer-nav-btm" style="background: linear-gradient(45deg, #bddcf5, rgba(250, 251, 251, 0.8)), url("{{asset('img/intro-bg.jpg')}}") center top no-repeat;
                  background-size: cover;">
        <div class="container">
            <!-- BEGIN Cloudways Address navigation -->
            <div class="footer-nav-reverse-inr  col-sm-2 col-sm-push-10">
                <div class="footer-nav_content pull-wide">
                    
                    <a class="footer-nav-heading pull-wide ftr-nav_scl-hd">
                        Follow Us On                </a>
                    <div id="footer-nav_social" class="footer-nav_content pull-wide">
                        <ul class="nav nav-pills nav-stacked">
                            <!--<li>
                                <a href="javascript:void()" class="footer-nav_icon_rss" target="_blank"><i class="fa fa-rss"></i></a>
                            </li>-->
                            <li>
                                <a href="https://www.facebook.com/cloudways" class="footer-nav_icon_facebook" target="_blank" rel="noreferrer noopener"><i class="fa fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/cloudways" class="footer-nav_icon_twitter" target="_blank" rel="noreferrer noopener"><i class="fa fa-twitter-square"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/cloudways" class="footer-nav_icon_linked" target="_blank" rel="noreferrer noopener"><i class="fa fa-linkedin-square"></i></a>
                            </li>
                            <li>
                                <a href="https://www.cloudways.com/blog/updates/" class="footer-nav_icon_news" target="_blank" rel="noreferrer noopener"><i class="fa fa-newspaper-o"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="footer-nav col-sm-10 col-sm-pull-2" id="footer-nav_address">
                <div class="footer-nav_content pull-wide" aria-expanded="false">
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                            <a href="https://www.cloudways.com/en/" class="footer-nav_logo"></a>
                        </li>
                        <li>
                          Findworka Academy,Yaba
                            <!-- <br>
                            <a href="https://platform.cloudways.com/signup" class="ftr-trial-btn cw-glb-btn">START FREE</a> -->
                        </li>
                        <li>
                            © 2018 Proscope Ltd. All rights reserved
                        </li>
                    </ul>
                </div>
                <br class="clearfix">
            </div>

        </div>
    </section>
        
    </body>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script type="text/javascript">

 
</script>

</html>
         
