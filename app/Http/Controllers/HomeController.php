<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Paystack;

class HomeController extends Controller
{
    public function index()
    {
        // return Inertia::render('Home', [
        //     'user' => [
        //         'fullname' => 'Azeez Ridwan',
        //         'email' => 'emailaddress@gmail.com'
        //     ],
        //     // 'reference' => Paystack::genTranxRef()
        // ]);

        return view('home');
    }
}
