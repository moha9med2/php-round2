@extends('layout')

@section('title')
home page
@endsection

@section('page-header')
home page
@endsection

@section('body')
<!-- Main Content-->

<div class="container px-4 ">
    <div class="row gx-1 justify-content-center">
        @foreach($posts as $post)
        <div class="col-md-4">
            <!-- Post preview-->
            <div class="post-preview">
                <a href="{{route('single',$post->id)}}">
                    <h2 class="post-title">{{$post->title}}</h2>
                    <img src="assets/posts/{{$post->image}}" width="100">
                </a>
                <p class="post-meta">
                    Posted by
                     {{$post->date}} 
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
        </div>
        @endforeach

    </div>
</div>
@endsection


@section('bg')
contact-bg.jpg
@endsection