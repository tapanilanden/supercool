@extends('main')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $scaai->title }}</h1>

            <p class="lead">{{ $scaai->body }}</p>
        
        </div>
        
        <div class="col-md-4">
            <div class="well">
            
                <dl class="dl-horizontal">
                    <dt>Created by:</dt>
                    <dd>{{ $user->name }}</dd>
                </dl>
                
                <dl class="dl-horizontal">
                    <dt>Created at:</dt>
                    <dd>{{ date('j.m.Y H:i', strtotime($scaai->created_at)) }}</dd>
                </dl>
                
                <dl class="dl-horizontal">
                    <dt>Edited at:</dt>
                    <dd>{{ date('j.m.Y H:i', strtotime($scaai->updated_at)) }}</dd>
                </dl>
                <hr>
                
                <div class="row">
                    <div class="col-sm-6">
                    <!-- TÄMÄ VAIN ADMINILLE JA TEKIJÄLLE -->
                        @if (Auth::check())
                            @if (Auth::user()->id == $scaai->user_id)
                                {!! Html::linkRoute('scaais.edit', 'Edit', array($scaai->id), 
                                    array('class' => 'btn btn-primary btn-block')) !!}
                            @endif
                        @endif              
                    </div>
                    <div class="col-sm-6">
                        @if (Auth::check())
                            @if (Auth::user()->id == $scaai->user_id)
                                {!! Form::open(['route' => ['scaais.destroy', $scaai->id], 'method' => 'delete']) !!}  
                        
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                        
                                {!! Form::close() !!}
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class ="row">
        <div class ="col-md-8 col-md-offset-2">
            {{ Form::open(['route' => ['comments.store', $scaai->id], 'method' => 'POST']) }}
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        {{ Form::label('comment', 'Comment:') }}
                        {{ Form::textarea('comment', null, ['class' => 'form-control']) }}
                        
                        {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'rows' => '2']) }}
                    </div>
                </div>
            
            {{ Form::close() }}
        </div>
    </div>

@endsection