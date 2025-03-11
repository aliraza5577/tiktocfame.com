@extends('layouts.app')

@section('content')
<section class="payment-result-section p50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="payment-result-card text-center">
                    <div class="icon-container mb-4">
                        <i class="fas fa-times-circle text-danger fa-5x"></i>
                    </div>
                    <h2 class="mb-4">Payment Cancelled</h2>
                    <p class="mb-4">Your payment has been cancelled. No charges have been made to your account.</p>
                    <div class="action-buttons">
                        <a href="{{ url('/') }}" class="btn mainBtn mt-3">Return to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    // Clear any payment-related session data
    $(document).ready(function() {
        // Optional: Add any client-side cleanup here
    });
</script>
@endsection
