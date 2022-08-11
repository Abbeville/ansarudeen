<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function verifyPayment(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $validatedData['email'])->first();

        if (!$user) {
            Session::flash('error', 'No user found with this email. Please check the email and retry');
            return redirect()->back();
        }

        if (!$user->hasPaid) {
            Session::flash('error', 'No payment made');
            return redirect()->back();
        }

        Session::flash('error', 'This user has made payment for '.$user->getPaymentPackage());
        return redirect()->back();
    }
}
