<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        
        $page_intro = 'This title is a variable';

        return view('pages/home', [
            'page_intro' => $page_intro
        ]);
    }

    public function about() {
        return view('pages/about');
    }

    public function blog() {
        return view('pages/blog');
    }

    public function contact() {
        return view('pages/contact');
    }
}
