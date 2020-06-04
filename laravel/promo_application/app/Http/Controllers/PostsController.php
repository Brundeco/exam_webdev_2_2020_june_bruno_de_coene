<?php

namespace App\Http\Controllers;

use \App\Post;
use \App\Page;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function getIndex() {

        $posts = Post::get();
        $data = Page::get()->where('page_title', 'blog')->first();    
        return view('pages.blog', [
            'posts' => $posts,
            'data' => $data
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
