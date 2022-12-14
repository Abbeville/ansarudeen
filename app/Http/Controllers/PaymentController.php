<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\Transaction;
use Paystack;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Notifications\InvoicePaid;


class PaymentController extends Controller
{
    public function redirectToGateway(Request $request)
    {
        if($request->email != ''){
            $user = User::where('email', $request->email)->first();

            if ($user) {
                if($user->hasPaid()){
                    Session::flash('success', 'You have already made payment. Or do you want to dash us money?');
                    return redirect()->route('home');
                }else{
                    //Create transaction for user.
                    $transaction = Transaction::create([
                        'user_id' => $user->id,
                        'amount' => $request->amount / 100,
                        'fee_code' => $request->paymentcode,
                        'txref' => $request->reference,
                        'invoice_pin' => strtoupper(substr($request->ref, 0, 9)),
                        'status' => 'pending',
                        'currency' => 'NGN'
                    ]);

                    //Save partial information about the transaction
                    try{
                        return Paystack::getAuthorizationUrl()->redirectNow();

                    }catch(\Exception $e) {
                        // dd($e);
                        return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
                    }
                }
            }
        }
        $messages = [
            'first_name.required' => 'Please enter your first name',
            'last_name.required' => 'Please enter your last name',
            'email.required' => 'Please enter your email address',
            'phone.required' => 'Please enter your phone number',
            'spouse_name.required' => 'Please enter your spouse name',
            'programme_awareness.required' => 'Please let us know how you heard about this programme'
        ];
        // Create the user and save all the details
        $validatedDatas = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'marital_status' => 'string|required',
            'gender' => 'string|required',
            // 'location' => 'string',
            'spouse_name' => Rule::requiredIf($request->attendance_choice == 'couple'),
            'programme_awareness' => 'required',
            'attendance_choice' => 'string|required',
            // 'expectation' => 'string',
            // 'question' => 'string'
        ],$messages);

        $attendance_choice = $request->attendance_choice;
        $amount_to_pay = $request->amount;
        if ($attendance_choice == 'couple') {
            $request->amount = 10150 * 100;
        }else{
            $request->amount = 5150 * 100;
        }

        $user = User::create($validatedDatas);

        $detail = $user->detail()->create($validatedDatas);

        //Create transaction for user.
        $transaction = Transaction::create([
            'user_id' => $user->id,
            'amount' => $request->amount / 100,
            'fee_code' => $request->paymentcode,
            'txref' => $request->reference,
            'invoice_pin' => strtoupper(substr($request->ref, 0, 9)),
            'status' => 'pending',
            'currency' => 'NGN'
         ]);

        //Save partial information about the transaction
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();

        }catch(\Exception $e) {
            // dd($e);
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData(); //this comes with all the data needed to process the transaction
        // Getting the value via an array method
        // $inv_id = $paymentDetails['data']['metadata']['invoiceId'];// Getting InvoiceId I passed from the form
        $status = $paymentDetails['data']['status']; // Getting the status of the transaction
        $amount = $paymentDetails['data']['amount']; //Getting the Amount
        $reference = $paymentDetails['data']['reference']; //Getting the Amount
        $number = $randnum = rand(1111111111,9999999999);// this one is specific to application

        $transaction = Transaction::where('txref', $reference)->first();

        if ($status == "success") {

            $amount = $amount / 100;

            if ($status == 'success' && $amount >= $transaction->amount ) {

                $transaction->status = 'success';

                $transaction->update();

                $user = $transaction->user;

                $user->payment_status = 1;

                $user->update();

                $user->notify(new InvoicePaid($user, $transaction));

                Session::flash('success', 'Payment successful!');
                return redirect()->route('home');
            }
        }

        $transaction->status = 'failed';

        $transaction->update();

        Session::flash('error', '<strong>ERROR:</strong> Payment not Completed.');
        return redirect()->route('home');

        // Now you have the payment details,
        // you can store the authorization_code in your DB to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    public function webhook()
    {
        $body = @file_get_contents("php://input");

        $response = json_decode($body);

    }
}
