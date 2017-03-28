@extends('main')

@section('content') 
            
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>What is SCAAPFSCAAI?</h1>
            <p>
            SCAAPFSCAAI is a platform where You can share your awesome ideas with our
            other super cool and awesome users! You can also give and gain feedback 
            to/from other people with our super awesome and cool rating system! So register yourself 
            and start sharing your SCAAI's!
            </p>
            
            
            
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
    <!-- @if (Auth::check())
            
            @else
            
            @endif
            -->
            <a href="#" class="btn btn-primary btn-block">Login</a>
            <p class="justify"><em>or</em></p>
            <a href="#" class="btn btn-primary btn-block">Register</a>
       </div>
    </div>
@endsection