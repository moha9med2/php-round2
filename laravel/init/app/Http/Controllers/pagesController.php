<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home(){

        $arr = ['home','about','contact'];
        $title = 'page title';
        $page_header_image = 'about-bg.jpg';

        return view('index',['bg'=>$page_header_image,'title'=>$title, 'arr'=>$arr]);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
