@extends('Layout.app')
@section('content')
<h1>Create Posts</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
    {{Form::label('title', 'Post Title')}}
    {{Form::text('title','', ['class'=>"form-control", 'placeholder' => 'title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Post Body')}}
        {{Form::textarea('body','', ['class'=>"form-control", 'placeholder' => 'Body'])}}
    </div>
    {{Form::submit('Submit Post',['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}
    
@endsection