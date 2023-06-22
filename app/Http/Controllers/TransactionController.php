<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        // query all transactions from database
        $transactions = Transaction::all();
        
        // return to view resources/views/transactions/index.blade.php
        return view('transactions.index', compact(['transactions']));
    }

    public function create()
    {
        // return to view resources/views/transactions/create.blade.php
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        // store using POPO - Plain Old PHP Object
        $transaction = new Transaction();
        $transaction->name = $request->name;
        $transaction->amount = $request->amount;
        $transaction->user_id = auth()->user()->id;
        $transaction->save();

        return redirect()->to('/transactions')->with([
            'alert-type' => 'alert-primary',
            'alert' => 'Your transactions has been created!'
        ]);
    }

    public function show(Transaction $transaction)
    {
        // return to view resources/views/transactions/show.blade.php
        return view('transactions.show', compact(['transaction']));
    }

    public function edit(Transaction $transaction)
    {
        // return to view resources/views/transactions/show.blade.php
        return view('transactions.edit', compact(['transaction']));
    }

    public function update(Transaction $transaction, Request $request)
    {
        $transaction->name = $request->name;
        $transaction->amount = $request->amount;
        $transaction->save();

        return redirect()->to('/transactions')->with([
            'alert-type' => 'alert-success',
            'alert' => 'Your transactions has been updated!'
        ]);
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->to('/transactions')->with([
            'alert-type' => 'alert-danger',
            'alert' => 'Your transactions has been deleted!'
        ]);
    }
}
