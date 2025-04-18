@extends('layouts.app')

@section('content')

<section class="mainBanner">
    <a data-bs-toggle="modal" data-bs-target="#quoteModal">
        <img src="{{ url('public/upload/category/'.$category->banner_image )}}" alt="{{ $category->name }}" />
    </a>
</section>

<div class="breadcrums">
    <div class="container">
        <p><a href="{{ url('') }}">Home</a><span> > </span>{{ $category->name }}</p>
    </div>
</div>


<!--====== Categories Section Start ======-->
<section class="category-wrap p50">
    <div class="container">
        <div class="header p50 pl0">
            <h1>{{ $category->name }}</h1>
        </div>
        <div class="row text-center">
                    <div class="row">
                            @foreach ($subcategories as $collection)
                                <div class="col-6 col-md-3 col-lg-3 card-single">
                                    <a href="{{ url($category->slug.'/'.$collection->slug) }}">
                                        <img src="{{ url('public/upload/subCategory/'.$collection->featured_image) }}" alt="{{ $collection->name }}" />
                                        <h3>{{ $collection->name }}</h3>
                                    </a>
                                </div>
                            @endforeach
                    </div>
        </div>
    </div>
</section>
<!--====== Categories Section End ======-->


<!--====== Custom Quote Section Start ======-->
@include('../instant_quote')


<!--====== Testimonial Start ======-->
@include('../testimonals')




@endsection
@section('script')
<script>
    // $('#quoteForm').on('submit', function(e) {
    //     e.preventDefault();

    //     $('#success-message').text('');
    //     $('#error-message').text('');
    //     $('#quoteForm').find('div[id^="error-"]').text('');

    //     var formData = $(this).serialize();

    //     $.ajax({
    //         url: '{{ url("instent_quote") }}',
    //         type: 'POST',
    //         data: formData,
    //         success: function(response) {
    //             if(response.success) {
    //                 $('#success-message').text(response.message);
    //                 $('#quoteForm')[0].reset();
    //             } else {
    //                 $('#error-message').text('Error submitting the form.');
    //             }
    //         },
    //         error: function(response) {
    //             var errors = response.responseJSON.errors;
    //             if (errors) {
    //                 $.each(errors, function(key, value) {
    //                     $('#error-' + key).text(value[0]);
    //                 });
    //             }
    //         }
    //     });
    // });

</script>
@endsection
