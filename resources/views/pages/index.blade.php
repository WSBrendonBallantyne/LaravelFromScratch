
@extends('layouts.app')

@section('content')
<div class="jumbotron">
<h1 class="display-4">Welcome to Laravel</h1>
<p class="lead">TThis is the Laravel Traversy Media tutorial</p>
<hr class="my-4">
<p> {{$note}}</p>
<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

@endsection
