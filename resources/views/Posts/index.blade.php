@extends('Layout.app')
@section('content')
<h1>Posts</h1>
    @if (count($posts) >0 )    
        @foreach ($posts as $post)
        <div class="card bg-light p-3">
            <h2><a href="/postes/{{$post->id}}">{{$post->title}}</a></h2>
            <small>Post Created on {{$post->created_at}}</small>
        </div>
        <br>
        @endforeach
        {{ $posts->links() }}
    @else
        <h2> No Posts Found</h2>
    @endif
@endsection