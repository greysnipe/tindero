<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    {{ HTML::style('assets/css/foundation.css') }}
    {{ HTML::script('assets/js/vendor/modernizr.js') }}
  </head>
  <body>

    <!-- Off Canvas Menu -->
    <div class="off-canvas-wrap" data-offcanvas> 
      <div class="inner-wrap"> 
        <nav class="tab-bar">
          <section class="left-small">
            <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
          </section>
          
          <section class="middle tab-bar-section">
            <img src="assets/img/logo.png"/>
          </section>
          <!--
          <section class="right">
            <ul class="right">
              <li class="divider"></li>
              <li><a href="#" class="button tiny">Login</a></li>
              <li class="divider"></li>
              <li><a href="#" class="button tiny">Login</a></li>
            </ul>
          </section>
          -->
        </nav> 

        @include('layouts.offcanvas')

          <!-- main content goes here --> 
            <!-- Slider Image -->
            <ul class="example-orbit" data-orbit> 
              <li> 
                <img src="assets/img/tindero.jpg"/> 
                <div class="orbit-caption"> Welcome to Tindero.com </div> 
              </li> 
              <li class="active"> 
                <img src="assets/img/samp2.jpg"/> 
                <div class="orbit-caption"> Product Listings </div> 
              </li> 
              <li> 
                <img src="assets/img/samp3.jpg"/> 
                <div class="orbit-caption"> Check My Cart </div> 
              </li> 
            </ul> 

            <div class="panel callout radius"> 
              <h1>Home</h1> 
            </div>

          <!-- close the off-canvas menu --> 
          <a class="exit-off-canvas"></a> 
      </div> 
    </div>
       
    {{ HTML::script('assets/js/vendor/jquery.js') }}
    {{ HTML::script('assets/js/foundation.min.js') }}
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
