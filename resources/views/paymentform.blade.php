@extends('layouts.app')

@section('content')
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">USER Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                    <div class="payment-checkout">
                        <div class="title"> ID={{$checkoutId}}</div>
                        <script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId={{$checkoutId}}"></script>
                        <form action="/result" class="paymentWidgets" data-brands="VISA MASTER AMEX"></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
