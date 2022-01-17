<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postsController extends Controller
{
    public function show($id){

        // $post = Post::where('title',$id)->first;
        $post = Post::findOrFail($id);
        

        return view('single',['bg'=>'post-bg.jpg','post'=>$post,]);
    }
}
