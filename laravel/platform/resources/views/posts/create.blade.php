@extends('website.layout')

@section('title')
create posts
@endsection

@section('body')
<div class="container p-5 m-5 w-75 mx-auto text-center rounded shadow">
    <h2>Create Post</h2>
    <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="enter title" class="form-control my-3">
        <input type="text" name="description" placeholder="enter description" class="form-control my-3">
        <input type="datetime-local" name="date" placeholder="enter date" class="form-control my-3">
        <!-- {{$categories}} -->
        @foreach( $categories as $category)
        <div class="form-check">
            <input class="form-check-input" value="{{$category['id']}}" type="radio" name="category_id">
            <label class="form-check-label">
                {{$category['title']}}
            </label>
        </div>
        @endforeach

        <select class="form-select">
            <option selected>choose category</option>
            @foreach( $categories as $category)
            <option value="{{$category['id']}}">{{$category['title']}}</option>
            @endforeach
        </select>
        <input type="file" name="image" class="form-control my-3">

        <button type="submit" class="btn btn-dark">create</button>
    </form>
</div>
@endsection