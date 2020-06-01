<?php

namespace App\Http\Controllers;

use \App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function getIndex() {

        $posts = Post::get();        
        return view('pages.blog', [
            'data' => $posts
        ]);
    }

    public function getEdit() {
        $posts = Post::get();  
        return view('pages.overview', [
            'data' => $posts
        ]);
    }

    public function getShow($id)
    {
        $post = Post::find($id);

        // dd($post);
        
        return view('pages.blog_detail', [
            'post' => $post
        ]);
    }

    public function postDonate(Request $r) {
        dd($r);
    }
}
