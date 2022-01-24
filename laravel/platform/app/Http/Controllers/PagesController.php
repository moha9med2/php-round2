<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
            return view('website.home');
    }

    public function about(){
        return view('website.about');
    }

    public function contact(){
        return view('website.contact');
    }
}
