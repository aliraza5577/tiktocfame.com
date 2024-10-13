@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-description">
                    <h1>All Instant Quote</h1>
                    @if(!empty(session('success')))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                </div>
            </div>
        </div>

        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Product</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Message</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($getRecord as $value)
                    <tr>
                        <th scope="row">{{ $value->id }}</th>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->phone }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->product_name }}</td>
                        <td>{{ $value->quantity }}</td>
                        <td>{{ $value->message }}</td>
                        <td>
                            <button class="btn btn-primary custom-btn" data-id="{{ $value->id }}" onClick="viewQuoteDetails({{ $value->id }})">
                                <i class="material-icons">visibility</i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}

    </div>
</div>






<!-- Modal -->
<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quoteModalLabel">Instant Quote Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Content will be loaded dynamically via AJAX -->
                <p><strong>Name:</strong> <span id="quote-name"></span></p>
                <p><strong>Phone:</strong> <span id="quote-phone"></span></p>
                <p><strong>Email:</strong> <span id="quote-email"></span></p>
                <p><strong>Product:</strong> <span id="quote-product"></span></p>
                <p><strong>Quantity:</strong> <span id="quote-quantity"></span></p>
                <p><strong>Message:</strong> <span id="quote-message"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>






@endsection
@section('script')
<script>
    function viewQuoteDetails(id) {
        var appUrl = "{{ url('/') }}";
        // Make an AJAX request to fetch the quote details
        $.ajax({
            url: appUrl+'/admin/quote/instant/' + id, // The route that returns the quote details
            type: 'GET',
            success: function(response) {
                // Populate the modal with the fetched data
                $('#quote-name').text(response.name);
                $('#quote-phone').text(response.phone);
                $('#quote-email').text(response.email);
                $('#quote-product').text(response.product_name);
                $('#quote-quantity').text(response.quantity);
                $('#quote-message').text(response.message);

                // Show the modal
                $('#quoteModal').modal('show');
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }
</script>
@endsection

