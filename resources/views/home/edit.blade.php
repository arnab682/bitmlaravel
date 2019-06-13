@extends('layoutHome.default')


@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['HomeController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'First Name:')}}
            {{Form::text('firstname', $profile->firstname, ['class' => 'form-control', 'placeholder' => 'firstname'])}}
        </div>
        
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection