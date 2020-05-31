<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getIndex() {

        return view('pages/blog', [
            'data' => [
                'first' => 'Number one',
                'second' => 'Number two'
            ]
        ]);
    }

    public function getShow() {
        return view('pages/blog_detail');
    }
}
