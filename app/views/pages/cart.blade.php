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
            
            <a href="#" class="button tiny radius right">Create Account</a>
            &nbsp;<a href="#" class="button tiny radius right">Login</a>
          </section>
        </nav> 


        @include('layouts.offcanvas')

          <!-- main content goes here --> 
            <div class="panel callout radius"> 
              <h1>My Cart</h1> 
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
