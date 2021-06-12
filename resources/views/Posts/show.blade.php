@extends('Layout.app')
@section('content')
        <a href="/postes" class="btn btn-default">Go Back</a>
        <h1>{{$posts->title}}</h1>
        <small>{{$posts->created_at}}</small>
        <p>{{$posts->body}}</p>
        <a href="/postes/{{$posts->id}}/edit" class="btn btn-default">Edit Post</a>
        
        {!! Form::open(['action'=>['App\Http\Controllers\PostsController@destroy', $posts->id],'method'=>'DELETE']) !!}
                {{Form::submit('Delete Post',['class'=> 'btn btn-danger'])}}
        {!! Form::close() !!}
@endsection