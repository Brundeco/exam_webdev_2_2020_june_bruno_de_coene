<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function getIndex() {
        $post = \DB::table('posts')->get();

        dd($post);
    }
}
