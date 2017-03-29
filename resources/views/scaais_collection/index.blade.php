@extends('main')
@section('pageheader', '<h1 class="text-right"><small>SUPER COOL AND AWESOME </small>IDEAS</h1>')
@section('content')
    @foreach ($scaais as $scaai)
    <div class="row well-sm">
        <div class="col-md-8 col-md-offset-2">                
            <a href="{{ route('collection.show', $scaai->id) }}" >
                <h3>{{ $scaai->title }} </h3>
                 <p>{{ substr($scaai->body, 0, 100) }}{{ strlen($scaai->body) > 100 ? "..." : "" }} </p>
                 <p><small>from super cool and awesome</small> <strong>{{ User::find($scaai->user_id) }}</strong></p>
            </a>   
        </div>
    </div>
    @endforeach
    
    <div class="text-center">
        {!! $scaais->links(); !!}
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        
            <!-- If logged in -->
            @if(Auth::check())
            <a href="{{ route('scaais.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">New SCAAI</a>
            @else
            <a href="{{ route('login') }}" class="btn btn-lg btn-block btn-success btn-h1-spacing">Login</a>
            @endif
        </div>
    </div>
    
@endsection
    
