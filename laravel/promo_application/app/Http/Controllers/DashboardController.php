<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class DashboardController extends Controller
{
    public function getIndexPages() {

        $pages = Page::all();

        return view('dashboard.pages.index', [
            'pages' => $pages
        ]);
    }

    public function getEditPage(Page $page) {
        
        return view('dashboard.pages.edit', ['page' => $page]);
    }

    public function postEditPage(Page $page, Request $r) {

        if($r->id != $page->id) abort('403', 'Wrong page');
        
        $page->section_title = $r->section_title;
        $page->section_intro = $r->section_intro;
        $page->content = $r->page_content;
        $page->button_text = $r->button_text;

        $page->save();

        return redirect()->route('page.index');
    }

    public function postDeletePage() {
        
    }
}
