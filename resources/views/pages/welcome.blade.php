@extends('main')

@section('pageheader', '<h1 class="text-right"><small>SUPER COOL AND AWESOME </small>PLATFORM FOR <small><br>SUPER COOL AND AWESOME </small>IDEAS</h1>')

@section('content')

    
    <!-- ROW -->
    <div class="row">
    <!-- WELCOME -->

            <div class="col-md-8">
                <div class="jumbotron">
                
                <!-- AUTENTIKOITU -->
                @if(Auth::check())
                    <h1>Howdy {{ Auth::user()->name }}!</h1>
                    <p class="text-justify">
                    What would You like to do?
                    </p>
                    <a href="{{ route('collection.index') }}" class="btn btn-primary btn-block">Browse SCAAIs</a>
                    
                    <a href="{{ route('scaais.create') }}" class="btn btn-primary btn-block">Create New SCAAI</a>
                    
                    <a href="#" class="btn btn-primary btn-block">Check Your Profile</a>
                
                @else
                <!-- EI AUTENKTIKOITU -->
                    <h1>Welcome to SCAAPFSCAAI!</h1>
                    <p class="text-justify">
                    This is a platform for <em>innovative</em> and <em>awesome</em> people with <em>mind-boggling</em>
                    ideas to share their visions with other <em>super cool</em> human beings!
                    </p>
                    <p>Start sharing your SCAAIs by</p>
                    <a href="{{ route('login') }}" class="btn btn-primary btn-block">Logging in</a>
                    <p class="text-center">or</p>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-block">Create New Account</a>
                @endif
                </div>
            
    
            
        </div>


    
    <!-- END OF WELCOME -->


    <!-- TRENDING IDEAS -->    
        <div class="col-md-3 col-md-offset-1">
    
            <h1>Newest SCAAI</h1>
            <p>
            <div class="post">
                <h3>{{ $scaai->title }}</h3>
                
                <p><i>from:</i> <b>{{ $user->name }}</b></p>
                
                <p> {{ substr($scaai->body, 0, 100) }}{{ strlen($scaai->body) > 100 ? "..." : "" }} </p>
                <a href="{{ route('collection.show', $scaai->id) }}" class="btn btn-primary">Read more</a>
            </div>
            
    
            <hr>
        </div>
        
        <!-- END OF TRENDING IDEAS -->
    
    
    </div>
    <!--End of Row -->

@endsection

