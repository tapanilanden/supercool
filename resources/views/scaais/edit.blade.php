@extends('main')

@section('content')

    <div class="row">
        {!! Form::model($scaai, ['route' => ['scaais.update', $scaai->id], 'method' => 'PUT']) !!}
        <div class="col-md-8">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}
            
            {{ Form::label('user_id','User ID:', ['class', 'form-spacing-top']) }}
            {{ Form::text('user_id', 'null', ['class' => 'form-control']) }}
            
            {{ Form::label('body', 'Body:', ['class' => 'form-spacing-top']) }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
        
        </div>
        
        <div class="col-md-4">
            <div class="well">
                
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
                        {!! Html::linkRoute('scaais.show', 'Cancel', array($scaai->id), array('class' => 'btn btn-danger btn-block')) !!}                        
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}     
                    </div>
                </div>
            </div>
        </div>
            {!! Form::close() !!}
    </div> <!-- end of .row (form) -->

@stop