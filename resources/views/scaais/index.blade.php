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
        
            <table class="table">
            
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                </thead>
                
                <tbody>
                
                    @foreach ($scaais as $scaai)
                        <tr>
                            <th> {{ $scaai->id }} </th>
                            <td> {{ $scaai->title }} </td>
                            <td> {{ substr($scaai->body, 0, 50) }}{{ strlen($scaai->body) > 50 ? "..." : "" }} </td>
                            <td> {{ date('j.m.Y H:i', strtotime($scaai->created_at)) }} </td>
                            <td> <a href="{{ route('scaais.show', $scaai->id) }}" class="btn btn-default btn-sm">View</a> 
                                <a href="{{ route('scaais.edit', $scaai->id) }}" class="btn btn-default btn-sm">Edit</a></td>
                        </tr>     
                    @endforeach
                </tbody>  
            </table>
        
            <div class="text-center">
                {!! $scaais->links(); !!}
            </div>
        </div>
    
    <div>
@stop