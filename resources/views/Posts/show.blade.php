@extends('Layout.app')
@section('content')
        <h1>{{$posts->title}}</h1>
        <small>{{$posts->created_at}}</small>
        <p>{{$posts->body}}</p>
@endsection