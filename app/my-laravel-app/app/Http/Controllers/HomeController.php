<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends BaseAuthController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();
        $title = 'postsite';
        // echo "<pre>"; var_dumを改行させるために使用
        // var_dump($posts);
        // exit;

        return view('home', ['posts' => $posts, 'title' => $title]);
        // return view('home')->with('posts', $posts)->with("title", $title); withでつなげる書き方
        // return view('home', compact('posts', 'title')); compactで省略して書く書き方
    }
}
