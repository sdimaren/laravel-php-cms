@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>This is the laravel application home page</p>
    <p>
      @if(Auth::user())
        <a class="btn btn-primary btn-lg" href="/dashboard" role="button">Dashboard</a>
      @else
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
      @endif
    </p>
  </div>
@endsection