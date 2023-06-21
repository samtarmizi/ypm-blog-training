@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Profile</div>

                <div class="card-body">
                    My Name is  {{ auth()->user()->name }}
                    <br>
                    My Email is {{ auth()->user()->email }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
