<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaymentController extends Controller
{
    public function redirectToGateway(Request $request)
    {
        $paymentData = [
            'amount' => $request->input('amount') * 100,
            'email' => $request->input('email'),
            'reference' => $request->input('reference'),
        ];

        try{
            return Paystack::getAuthorizationUrl($paymentData)->redirectNow();

        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['failed'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        $user = User::where('email', $paymentDetails['data']['customer']['email'])->first();

        Transaction::create([
            'customer_id' => $paymentDetails['data']['customer']['id'],
            'customer_email' => $user->id,
            'transaction_id' => $paymentDetails['data']['id'],
            'transaction_reference' => $paymentDetails['data']['reference'],
            'amount' => $paymentDetails['data']['amount'],
            'currency' => $paymentDetails['data']['currency'],
            'channel' => $paymentDetails['data']['channel'],
            'gateway_response' => $paymentDetails['data']['gateway_response'],
            'paid_at' => date("Y-m-d H:i:s", strtotime( $paymentDetails['data']['paid_at']))
        ]);

        return back()->with('success', 'Payment successful');
    }
}
