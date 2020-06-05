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

        // dd($r);

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
        

        $payment = Mollie::api()->payments()->create([
        'amount' => [
            'currency' => 'EUR', // Type of currency you want to send
            'value' => '10.00', // You must send the correct number of decimals, thus we enforce the use of strings
        ],
        'description' => 'Payment By codehunger', 
        'redirectUrl' => route('payment.success'), // after the payment completion where you to redirect
        'webhookUrl' => 'http://5631c63f8541.ngrok.io/webhooks/mollie'
        ]);

        $deposit = New Payment();

        $deposit->email = $r->email;
        $deposit->firstname = $r->firstname;
        $deposit->lastname = $r->lastname;
        $deposit->amount = $r->amount;
        $deposit->status = false;
        $deposit->payment_id = $payment->id;

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

