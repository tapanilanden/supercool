<!DOCTYPE html>
<html>

    <head>
        @include('partials._head')
    </head>
    
    
    <body>
    
       @include('partials._nav') 
        
        <!-- SISÄLTÖ --> 
        <div class="container">
            
            @yield('content')
                
        </div>
  
        <!-- SISÄLTÖ LOPPUU -->
    
    
    <!-- FOOTER -->
    
    <!--FOOTER LOPPUU -->
    
    <!-- SKRIPTIT -->
    
    @yield('scripts')
    
    <!-- SKRIPTIT LOPPUU -->
    </body>
    
    
    
</html>