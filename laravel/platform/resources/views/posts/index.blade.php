@extends('website.layout')


@section('title')
@endsection()

@section('body')
<div class="container p-5 m-5 w-75 mx-auto text-center rounded shadow">
    <h2>display Posts</h2>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">user_id</th>
                <th scope="col">category_id</th>
                <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <th>{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->user->email}}</td>
                <td>{{$post->category->title}}</td>
                <td>
                    <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary">show</a>
                    <a href="{{route('posts.edit',$post->id)}}" class="btn btn-success">edit</a>
                    <a href="{{route('posts.delete',$post->id)}}" class="btn btn-danger">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection()