<?php

namespace App\Http\Controllers;
use Mollie\Laravel\Facades\Mollie;
use Illuminate\Http\Request;

use App\Payment;

class MollieController extends Controller
{
    public function  __construct() {
        Mollie::api()->setApiKey('test_kGdVM3JExv4JqtGj8DnspdABryuxdm'); // your mollie test api key
    }

    public function registerPayment(Request $r) {

       return view('mollie.register',[
           'data' => $r
       ]);
    
    }

    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function preparePayment(Request $r)
    {   
        
        // dd($r->public);

        $payment = Mollie::api()->payments()->create([
        'amount' => [
            'currency' => 'EUR', // Type of currency you want to send
            'value' => bcdiv($r->amount, 1, 2), // You must send the correct number of decimals, thus we enforce the use of strings
        ],
        'description' => 'Payment By codehunger', 
        'redirectUrl' => route('payment.success'), // after the payment completion where you to redirect
        'webhookUrl' => 'http://acb1399d36ee.ngrok.io/webhooks/mollie'
        ]);

        $deposit = New Payment();

        $deposit->email = $r->email;
        $deposit->firstname = $r->firstname;
        $deposit->lastname = $r->lastname;
        $deposit->message = $r->message;
        $deposit->amount = $r->amount;
        $deposit->status = false;
        $deposit->payment_id = $payment->id;
        $r->public != null ? $deposit->public = true : $deposit->public = false;

        $deposit->save();
    
        $payment = Mollie::api()->payments()->get($payment->id);
    
        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    /**
     * Page redirection after the successfull payment
     *
     * @return Response
     */

    public function postRegisterPayment(Request $r) {

        if (! $r->has('id')) {
            return;
        }

        $payment = Mollie::api()->payments()->get($r->id);

        if ($payment->isPaid()) {
            $donation = Payment::where('payment_id', '=', $r->id)->first();
            $donation->status = true;
            $donation->save();
        }
     }

    public function paymentSuccess() {
        echo 'payment has been received';

    }
}

