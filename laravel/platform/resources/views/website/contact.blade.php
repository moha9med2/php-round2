@extends('website.layout')


@section('title')
CONTACT
@endsection

@section('body')
<div class="container p-5 m-5 w-75 mx-auto text-center rounded shadow">
    <h2>CONTACT</h2>
    <form action="/form" method="post">
        @csrf
        <input type="text" name="title" placeholder="enter title" class="form-control my-3">
        
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <button type="submit" class="btn btn-dark">create</button>
    </form>
</div>
@endsection