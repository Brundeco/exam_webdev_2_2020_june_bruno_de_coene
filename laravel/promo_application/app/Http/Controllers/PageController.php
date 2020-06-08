<?php

namespace App\Http\Controllers;

use \App\Page;
use \App\Post;
use \App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function getHomeContent() {
        
        $data = Page::get()->where('page_title', 'home')->first();
        $donations = Payment::get()->where('public', 1);

         return view('pages.home', [
            'data' => $data,
            'donations' => $donations
        ]);
    }

    public function getAboutContent() {
        
        $data = Page::get()->where('page_title', 'about')->first();
        $donations = Payment::get()->where('public', 1);

         return view('pages.about', [
            'data' => $data,
            'donations' => $donations
        ]);
    }

    public function getContactContent() {
        
        $data = Page::get()->where('page_title', 'contact')->first();
        $donations = Payment::get()->where('public', 1);

         return view('pages.contact', [
            'data' => $data,
            'donations' => $donations
        ]);
    }

    public function getBlogContent() {
        
        $posts = Post::get();
        $data = Page::get()->where('page_title', 'blog')->first();
        $donations = Payment::get()->where('public', 1);
  
        return view('pages.blog', [
            'posts' => $posts,
            'data' => $data,
            'donations' => $donations
        ]);
    }

    public function submitContactForm(Request $r) {

        $data = [
                'firstname' => $r->firstname,
                'lastname' => $r->lastname,
                'email' => $r->email,
                'subject' => $r->subject,
                'content' => $r->content
            ];
    
            Mail::send('mail.contact', ['data' => (object)$data ] , function ($message) use($r) {
                $message->sender('brundeco@student.arteveldehs.be', 'Bruno De Coene');
                $message->to('brundeco@student.arteveldehs.be', 'Bruno De Coene');
                $message->cc($r->email, $r->firtstname . ' ' . $r->lastname);
                $message->subject($r->subject);
            });

            return redirect()->route('mail.confirm');
    }

    public function confirmContactForm() {

        return view('mail.confirm');
    }
}
