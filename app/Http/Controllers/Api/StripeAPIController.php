<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class StripeAPIController extends Controller
{
    public function createPaymentIntent(Request $request)
    {
        Stripe::setApiKey(config('stripe.secret'));

        $intent = PaymentIntent::create([
            'amount' => $request->amount,
            'currency' => 'myr',
            'payment_method_types' => ['card'],
        ]);

        return response()->json([
            'success' => true,
            'data' => $intent
        ]);
    }
}
