@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-body">
                <a href="/postes/create" class="btn btn-primary">Create Post</a>
                <h3>This are your Posts</h3>
                    @if (count($posts) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead> 
                            <tbody>
                    @foreach ($posts as $post)
                            
                                <tr>
                                    <td scoop=row>{{$post->title}}</td>
                                    <td scoop='row'>
                                        <a href="/postes/{{$post->id}}/edit" class="btn btn-primary"> Edit Post</a>
                                    </td>
                                    <td scope="row">
                                        {!! Form::open(['action'=>['App\Http\Controllers\PostsController@destroy', $post->id],'method'=>'DELETE']) !!}
                                        {{Form::submit('Delete Post',['class'=> 'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                    @endforeach
                    </tbody>
                    </table>   
                    @else
                        <p>You Don't Have Any Post</p>
                    @endif
                </div>     
            </div>
        </div>
    </div>
</div>
@endsection
