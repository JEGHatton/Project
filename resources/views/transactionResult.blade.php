@extends('layouts.app')

@section('content')
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId={checkoutId}"></script>
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
                    You are logged in! <strong>USER</strong>
                </div>
                <p>Send Payment</p>
                <form class="payment-form" action="paymentform.php" method="post">
                    <input type="number" name="amount" placeholder="1.0" step="0.01" min="0" max="10">
                    <input type="text" name="reference" placeholder="Reference">
                    <button type="submit" name="submit-payment-form">SUBMIT</button>
                </form>
                <div class="payment-checkout">
                <form action="{shopperResult.blade.php}" class="paymentWidgets" data-brands="VISA MASTER AMEX"></form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
