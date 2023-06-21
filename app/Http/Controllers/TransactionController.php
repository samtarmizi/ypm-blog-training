<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        // query all transactions from database
        $transactions = \App\Models\Transaction::all();
        
        // return to view resources/views/transactions/index.blade.php
        return view('transactions.index', compact(['transactions']));
    }
}
