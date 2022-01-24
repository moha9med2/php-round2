<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index(){

        $posts = Post::with(['category','user'])->get();

        return view('posts.index',['posts'=>$posts]);
    }

    public function show($id){

        $post = Post::findOrfail($id);

        return view('posts.show',['post'=>$post]);
    }

    public function create()
    {
        $categories = Category::get();
        return view('posts.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $name = $request->image->getClientOriginalName();
        $request->image->move('public/uploads/', $name);
        
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'date' => $request->date,
            'user_id' => $user->id,
            'category_id' => $request->category_id,
        ]);

        return redirect('/home');
    }

    public function edit($id)
    {
        $categories = Category::get();
        $post = Post::find($id);
        return view('posts.edit', ['categories' => $categories,'post'=>$post]);
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();

        $name = $request->image->getClientOriginalName();
        $request->image->move('public/uploads/', $name);
        
        Post::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'date' => $request->date,
            'user_id' => $user->id,
            'category_id' => $request->category_id,
        ]);

        return redirect('/home');
    }

    public function delete($id){
            Post::find($id)->delete();

            return redirect('/posts/index');
    }
}
