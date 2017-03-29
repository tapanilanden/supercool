@extends('main')
@section('pageheader', '<h1 class="text-right"><small>SUPER COOL AND AWESOME </small>IDEAS</h1>')
@section('content')
    @foreach ($scaais as $scaai)
    <div class="row well-sm">
        <div class="col-md-8 col-md-offset-2">                
            <a href="{{ route('collection.show', $scaai->id) }}" >
                <h3>#{{ $scaai->id }}
                {{ $scaai->title }} </h3>
                 <p>{{ substr($scaai->body, 0, 100) }}{{ strlen($scaai->body) > 100 ? "..." : "" }} </p>
            </a>   
        </div>
    </div>
    @endforeach
    
    <div class="text-center">
        {!! $scaais->links(); !!}
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="{{ route('scaais.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">New SCAAI</a>
        </div>
    </div>
    
@endsection
    
