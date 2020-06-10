<?php

namespace App\Http\Controllers;

use \App\Page;
use \App\Post;
use \App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{

    public function languageSwitcher(Request $r) {

        $r->session()->put('lang', $r->lang);
        return back();
        
    }

    public function getHomeContent(Request $r) {
        
        $data = Page::get()->where('page_title',
        ($r->session()->get('lang') == 'nl' ) ? 'home_nl' : 'home' )->first();
        $donations = Payment::get()->where('public', 1);

         return view('pages.home', [
            'data' => $data,
            'donations' => $donations
        ]);
    }

    public function getAboutContent(Request $r) {
        
        $data = Page::get()->where('page_title', ($r->session()->get('lang') == 'nl' ) ? 'about_nl' : 'about' )->first();
        $donations = Payment::get()->where('public', 1);

         return view('pages.about', [
            'data' => $data,
            'donations' => $donations
        ]);
    }

    public function getContactContent(Request $r) {
        
        $data = Page::get()->where('page_title', ($r->session()->get('lang') == 'nl' ) ? 'contact_nl' : 'contact' )->first();
        $donations = Payment::get()->where('public', 1);

         return view('pages.contact', [
            'data' => $data,
            'donations' => $donations
        ]);
    }

    public function getPolicyContent(Request $r) {
        
        $data = Page::get()->where('page_title', ($r->session()->get('lang') == 'nl' ) ? 'policy_nl' : 'policy' )->first();
        $donations = Payment::get()->where('public', 1);

         return view('pages.policy', [
            'data' => $data,
            'donations' => $donations
        ]);
    }

    public function getBlogContent() {
        
        $posts = Post::paginate(3);
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
