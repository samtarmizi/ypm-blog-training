@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if( session()->has('alert'))
                <div class="alert {{ session()->get('alert-type') }}">
                    {{ session()->get('alert') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Transaction Index') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Owner</th>
                                <th>Transaction ID</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->user->name }} - {{ $transaction->user->email }}</td>
                                <td>{{ $transaction->id }}</td>
                                <td>{{ $transaction->name }}</td>
                                <td>{{ $transaction->amount }}</td>
                                <td>
                                    <a href="/transactions/{{ $transaction->id }}" class="btn btn-primary">Show</a>

                                    <a href="/transactions/{{ $transaction->id }}/edit" class="btn btn-success">Edit</a>
                                    
                                    <a onclick="return confirm('Are you sure?')" 
                                        href="/transactions/{{ $transaction->id }}/destroy" 
                                        class="btn btn-danger">
                                        Destroy
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
