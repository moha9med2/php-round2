<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
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
}
