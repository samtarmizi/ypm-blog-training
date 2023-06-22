@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Transaction Edit') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $transaction->name }}">
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="number" name="amount" class="form-control" value="{{ $transaction->amount }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update My Transaction</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
