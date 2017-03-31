@extends('main')

@section('pageheader', '<h1 class="text-right"><small>WTF is </small>SCAAPFSCAAI?</h1>')

@section('content') 
            
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>What is</h1>
            <p>
            SCAAPFSCAAI is a platform where You can share your awesome ideas with our
            other super cool and awesome users! So register yourself RIGHT NOW
            and start sharing your Super Cool and Awesome SCAAI's!
            </p>
            
            
            
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(Auth::check())
            
            @else
                <a href="#" class="btn btn-primary btn-block">Login</a>
                <p class="text-center"><b>or</b></p>
                <a href="#" class="btn btn-primary btn-block">Register</a>
             @endif
       </div>
    </div>
@endsection