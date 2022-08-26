<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::with('transactions', 'detail')->get();
        return view('admin.dashboard', compact('users'));
    }

    public function show($user_id) {
        $user = User::where('id', $user_id)->with('detail')->get();

        if (count($user) < 1) {
            return redirect()->back();
        }

        return view('admin.users.show', ['user' => $user[0] ]);
    }

    public function transactions()
    {

    }
}
