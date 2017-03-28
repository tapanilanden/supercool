@extends('main')

@section('pageheader', '<h1 class="text-right"><small>Share Your </small>VISION</h1>')

@section('content')

<div class ="row">
    <div class="col-md-8 col-md-offset-2">
        {!! Form::open(['route' => 'scaai.store']) !!}
        
            <!-- TITLE -->
            {{ Form::label('title', 'Title: ') }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}
            
            <!-- TÄMÄ PITÄÄ MUUTTAA / user_id -->
            {{ Form::label('user_id', 'User ID:') }}
            {{ Form::number('user_id', null, ['class' => 'form-control']) }}
            
            <!-- BODY -->
            {{ Form::label('body', 'Your SCAAI:') }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
            
            <!-- SUBMIT -->
            {{ Form::submit('Send Your Idea', ['class' => 'btn btn-success btn-block']) }}
        
        {!! Form::close() !!}
    </div>
</div>    

@endsection