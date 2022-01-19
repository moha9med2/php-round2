<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postsController extends Controller
{
    public function show($id)
    {
        // $post = Post::where('title',$id)->first;
        $post = Post::findOrFail($id);
        return view('single', ['bg' => 'post-bg.jpg', 'post' => $post,]);
    }

    public function store()
    {
        return Post::create([
            'title'=> 'title',
            'content'=> 'content from laravel'
        ]);

        // $v = new Post;
        // $v->title = 'طريقة تانية';
        // $v->content = 'طريقة تانية';
        // $v->save();
    }

    public function update()
    {
        
        return Post::find(6)->update([
            'title' => 'edited title',
            'content' => 'content'
        ]);
    }

    public function delete()
    {
        return Post::find(10)->delete();
    }
}
