<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

use Newsletter;

class NewsletterController extends Controller
{
    public function postSubscribe(Request $r) {

    $email = $r->email;

    Newsletter::subscribe($email);

    $status = Newsletter::lastActionSucceeded();

        if($status) {
            return view('newsletter.succes', [
                'data' => $r->email
            ]);
        } else {
            return view('newsletter.fail', [
                'data' => $r->email
            ]);
        }
    }
}
