<?php

namespace App\Http\Controllers;

use \App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHomeContent() {
        
        $data = Page::get()->where('page_title', 'home')->first();

        // dd($data);

         return view('pages.home', [
            'data' => $data
        ]);
    }

    public function getAboutContent() {
        
        $data = Page::get()->where('page_title', 'about')->first();

        // dd($data);

         return view('pages.about', [
            'data' => $data
        ]);
    }
}
