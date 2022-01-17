<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pagesController extends Controller
{
    public function home(){

        $page_header_image = 'home-bg.jpg';

        // $posts = DB::select('select * from posts');
        $posts = Post::get();



        return view('index',['posts'=>$posts,'bg'=>$page_header_image]);
    
    }

    public function about(){
        $page_header_image = 'about-bg.jpg';
        return view('about',['bg'=>$page_header_image]);
    }

    public function contact(){
        $page_header_image = 'contact-bg.jpg';

        return view('contact',['bg'=>$page_header_image]);
    }
}
