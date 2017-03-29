@extends('main')

@section('pageheader', '<h1 class="text-right"><small>Your </small>SCAAIs</h1>')

@section('content')



    
    @foreach ($scaais as $scaai)
    <div class="row well-sm">
        <div class="col-md-8 col-md-offset-2">                
            <a href="{{ route('scaais.show', $scaai->id) }}" >
                <h3><strong>#{{ $scaai->id }} </strong>
                {{ $scaai->title }} </h3>
                 <p>{{ substr($scaai->body, 0, 50) }}{{ strlen($scaai->body) > 50 ? "..." : "" }} </p>
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
    
    
@stop