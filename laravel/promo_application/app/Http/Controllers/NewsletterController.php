<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Newsletter;

class NewsletterController extends Controller
{
    public function postSubscribe(Request $r) {

        if(! Newsletter::isSubscribed($r->email)) {

            Newsletter::subscribePending($r->email);

            return view('newsletter.succes', [
                'data' => $r->email
            ]);
        }
        return view('newsletter.fail', [
            'data' => $r->email
        ]);

    }
}
