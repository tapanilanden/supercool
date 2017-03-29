@extends('main')

@section('content')

    <div class="row">
        
        <div class="col-md-10">
        
            <h1>All SCAAIs</h1>
        
        </div>
        
        <div class="col-md-2">
            <a href="{{ route('scaais.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">New SCAAI</a>
        </div>
        <hr>
    </div>
    
    <div class="row">
        <div class="col-md-12">
        
            
                
                    @foreach ($scaais as $scaai)
                        
                       
                            <a href="{{ route('scaais.show', $scaai->id) }}" >
                        #{{ $scaai->id }} 
                        {{ $scaai->title }} 
                        {{ substr($scaai->body, 0, 50) }}{{ strlen($scaai->body) > 50 ? "..." : "" }} 
                            </a>    
                       
                    @endforeach
               
        
            <div class="text-center">
                {!! $scaais->links(); !!}
            </div>
        </div>
    
    <div>
@stop