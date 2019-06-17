<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use App\BillingInformation;
use Auth;
use DB;
use App\User_package;
use App\User;
use App\Mail\TestEmail;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {

        return view('payment');
    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {

      

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => $request->total_amount * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com." 
        ]);
        
          //saving package data brought by whom
        $billing_data = new BillingInformation;
        $billing_data->user_id =  Auth::id();// it's userss id
        $billing_data->total_price = $request->total_amount;
        $billing_data->save();


        $billing_id = DB::getPdo()->lastInsertId();//it is used to take last inserted data id in database
        $sessionData = Session::get('cart');
        foreach ($sessionData as $package){
            $userPackage = new User_package;
            $userPackage->user_id = Auth::id();
            $userPackage->package_id = $package;
            $userPackage->total_price = $billing_id;
            $userPackage->save();
        }


        //end
        
        $data = ['message' => 'Payment successfully paid for the package'];

        \Mail::to('sujeeb@hotmail.com')->send(new TestEmail($data));



        Session::flash('success', 'Payment successful!');
        
        return back();
    }
}