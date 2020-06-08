@extends('layouts.side')

@section('content')
<div class="login-container">
    <div class="login-wrapper">
        <div class="card">
            <div class="card-header">
                <p class="bottom-margin-md">Thank you!</p>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('mollie.payment') }}">
                    @csrf
                    <div class="flex-row-payment clear-margin">
                        <div class="form-group row">
                            <label>First name</label>
                            <input type="text" placeholder="First name" class="form-control" name="firstname">
                        </div>

                        <div class="form-group row">
                            <label>Last name</label>
                            <input type="text" placeholder="Last name" class="form-control" name="lastname">
                        </div>
                    </div>
                    <div class="flex-row-payment clear-margin">
                        <div class="form-group row">
                            <label>Email adress</label>
                            <input type="email" placeholder="Email" class="form-control" name="email">
                        </div>
                        <div class="form-group row">
                            <label>Amount</label>
                            <input type="text" placeholder="Amount" class="form-control" name="amount">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label>Message</label>
                        <textarea name="message" id="" cols="30" rows="5" placeholder="Your message"
                            class="payment-text"></textarea>
                    </div>

                    <div class="form-group row donation-checkbox">
                        <label>Public donation?</label>
                        <input type="checkbox" name="public">
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="login main-cta-dark">
                                Go to payment
                            </button>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <a href="{{ route('home') }}" class="login main-cta-light">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
