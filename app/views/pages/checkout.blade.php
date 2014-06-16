<!doctype html>
<html class="no-js" lang="en">
  <head>
    @include('layouts.head')
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
        </nav> 


        @include('layouts.offcanvas')

          <!-- main content goes here --> 
            <!-- Slider Image -->

            <div class="panel callout radius"> 
              <h1>Checkout</h1> 
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
