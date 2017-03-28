<!DOCTYPE html>
<html>

    <head>
        @include('partials._head')
    </head>
    
    
    <body>
    
       @include('partials._nav') 
        
        <!-- SISÄLTÖ --> 
        <div class="container">
        
            @include('partials._pageheader')
            
            @yield('content')
                
        </div>
  
        <!-- SISÄLTÖ LOPPUU -->
    
    
    <!-- FOOTER -->
    
    <!--FOOTER LOPPUU -->
    
    <!-- SKRIPTIT -->
    
    @include('partials._scripts')
    
    <!-- SKRIPTIT LOPPUU -->
    </body>
    
    
    
</html>