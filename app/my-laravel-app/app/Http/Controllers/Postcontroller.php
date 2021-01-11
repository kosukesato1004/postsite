<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Postcontroller extends BaseAuthController
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function detail($post_id) {
        $post = Post::find($post_id);
        return view('posts/detail', ["post" => $post]);
    }
}
