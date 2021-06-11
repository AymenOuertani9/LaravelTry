@extends('Layout.app')

@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>this is the Index page of my First Laravel Try</p>
    <button type="button" class="btn btn-primary" role="button" href = "/login">Login</button>
    <button type="button" class="btn btn-success" role="button" href="/register">Register</button>
    
</div>
@endsection