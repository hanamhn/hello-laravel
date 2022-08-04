@extends('layouts.app')

@section('content')

    <h1>Post {{$id}} {{$name}} {{$password}}</h1>

@stop

@section('footer')
    <script>alert('hello visitor')</script>

    @stop
