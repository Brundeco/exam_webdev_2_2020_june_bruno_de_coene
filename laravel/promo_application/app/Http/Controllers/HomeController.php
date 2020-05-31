<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contents;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getIndex()
    {

        dd('Correcte mundo ! !');

        // $content = Contents::table('contents')->where('page', 'home');

        // dd($content);
        // return view('home');
    }
}
