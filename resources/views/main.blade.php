<!DOCTYPE html>
<html>

    <head>
        @include('partials._head')
    </head>
    
    
    <body>
    
       @include('partials.nav') 
        
        <!-- SISÄLTÖ --> 
        <div class="container">
            
            @yield('content')
                
        </div>
  
        <!-- SISÄLTÖ LOPPUU -->
    
    
    <!-- FOOTER -->
    
    <!--FOOTER LOPPUU -->
    </body>
    
    
    
</html>