
@extends('layouts.app')

@section('content')
        <h1>Services for to Laravel</h1>
        <p>This is the Laravel Traversy Media tutorial</p>

        @if(count($services)> 0)
        <ul class="list-group">
            @foreach ($services as $service)
            <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
        @endif

        {{$Note}}
@endsection