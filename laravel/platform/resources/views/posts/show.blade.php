@extends('website.layout')


@section('title')
@endsection()

@section('body')
<div class="container p-5 m-5 w-75 mx-auto text-center rounded shadow">
    <h2>{{$post->id}}</h2>
    <h2>{{$post->title}}</h2>
    <h2>{{$post->date}}</h2>
</div>

@endsection()