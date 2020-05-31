<?php

namespace App\Http\Controllers;

use \App\Contents;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHomeContent() {
        
        $data = Contents::get()->where('page', 'home')->pluck('content', 'name');

         return view('pages.home', [
            'data' => $data
        ]);
    }

    public function getAboutContent() {
        
        $data = Contents::get()->where('page', 'about')->pluck('content', 'name');

         return view('pages.about', [
            'data' => $data
        ]);
    }
}
