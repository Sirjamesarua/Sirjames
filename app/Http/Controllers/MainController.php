<?php

namespace App\Http\Controllers;

//use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
    
    public function index()
    {
        $posts =Post::all();
        return view('welcome')->with('posts',$posts);
    }

}
