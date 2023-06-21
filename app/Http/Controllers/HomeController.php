<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // query from DB using model total number of users
        $total_users = User::count();

        // query from DB using model total number of transactions
        $total_transactions = \App\Models\Transaction::count();

        // resources/views/home.blade.php
        return view('home', compact(['total_users', 'total_transactions']));
    }

    public function profile()
    {
        // resources/views/profile.blade.php
        return view('profile');
    }
}
