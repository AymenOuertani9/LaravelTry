@extends('Layout.app')
@section('content')
<h1>Edit Posts</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'PUT']) !!}
    <div class="form-group">
    {{Form::label('title', 'Post Title')}}
    {{Form::text('title',$post->title, ['class'=>"form-control", 'placeholder' => 'title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Post Body')}}
        {{Form::textarea('body',$post->body, ['class'=>"form-control", 'placeholder' => 'Body'])}}
    </div>
    {{Form::submit('Edit Post',['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}
    
@endsection