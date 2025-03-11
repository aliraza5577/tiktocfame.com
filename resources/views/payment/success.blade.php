@extends('layouts.app')

@section('content')
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Payment Successful!</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <i class="fas fa-check-circle text-success" style="font-size: 64px;"></i>
                    </div>

                    <h4 class="text-center mb-4">Thank you for your order</h4>

                    @if(isset($order))
                    <div class="order-details">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Order Number:</strong></p>
                                <p><strong>Username:</strong></p>
                                <p><strong>Transaction ID:</strong></p>
                                <p><strong>Amount:</strong></p>
                                <p><strong>Status:</strong></p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $order->orderNumber }}</p>
                                <p>{{ $order->username }}</p>
                                <p>{{ $order->transactionId }}</p>
                                <p>${{ number_format($order->amount, 2) }}</p>
                                <p><span class="badge bg-warning text-dark">{{ ucfirst($order->status) }}</span></p>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="text-center mt-4">
                        <p>We've received your payment and are processing your order.</p>
                        <p>You will receive a confirmation email shortly.</p>
                        <a href="{{ url('/') }}" class="btn mainBtn mt-3">Return to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
