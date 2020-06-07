<?php

namespace App\Http\Controllers;

use \App\Page;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function getHomeContent() {
        
        $data = Page::get()->where('page_title', 'home')->first();

         return view('pages.home', [
            'data' => $data
        ]);
    }

    public function getAboutContent() {
        
        $data = Page::get()->where('page_title', 'about')->first();

         return view('pages.about', [
            'data' => $data
        ]);
    }

    public function getContactContent() {
        
        $data = Page::get()->where('page_title', 'contact')->first();

         return view('pages.contact', [
            'data' => $data
        ]);
    }

    public function submitContactForm(Request $r, Exception $e) {

        try {
            $data = [
                'firstname' => $r->firstname,
                'lastname' => $r->lastname,
                'email' => $r->email,
                'subject' => $r->subject,
                'content' => $r->content
            ];
    
            // return view('mail.contact', [
            //     'data' => (object)$data
            // ]);
    
            Mail::send('mail.contact', ['data' => (object)$data ] , function ($message) use($r) {
                $message->sender('brundeco@student.arteveldehs.be', 'Bruno De Coene');
                $message->to('brundeco@student.arteveldehs.be', 'Bruno De Coene');
                $message->cc($r->email, $r->firtstname . ' ' . $r->lastname);
                $message->subject($r->subject);
            });

            return redirect()->route('mail.confirm', [
                'user' => $r->firstname
            ]);

        } catch (Exception $e) {
            dd($e);
        }

       
    }

    public function confirmContactForm() {

        return view('mail.confirm');
    }
}
