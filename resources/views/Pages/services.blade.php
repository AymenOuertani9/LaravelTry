@extends('Layout.app')

@section('content')
    <h1>{{$title}}</h1>
    @if (count($services) > 0)
        <ul>
            @foreach ($services as $services)
                <li>{{$services}}</li>
            @endforeach
        </ul>
    @endif
    
@endsection