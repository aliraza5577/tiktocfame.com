@extends('layouts.app')

@section('content')


<section class="banner-section p50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-12">
                {!! $subcategory->banner_text !!}
            </div>
            <div class="col-md-6 col-12">
               <img src="{{ url('public/upload/subCategory/'.$subcategory->banner_image) }}" alt="banner" />
            </div>
        </div>
    </div>
</section>


<div class="breadcrums">
    <div class="container">
        <p><a href="{{ url('') }}">Home</a><span> > </span>{{ $subcategory->name }}</p>
    </div>
</div>


    <!-- Subcategory Details -->
    <section class="subcategory-details category-wrap pb20 text-center">
        <div class="container">
            <div class="header p50">
                <h1>{{ $subcategory->name }}</h1>
            </div>

            <!-- Products List -->
            <div class="row tab-pane">
                @if($products->count() > 0)
                    @foreach ($products as $product)
                        <div class="card-single">
                            <p><span>${{ $product->actual_price }} </span> ${{ $product->sale_price }}</p>
                            <h3>{{ $product->name }}</h3>
                            <a href="{{ url('checkout/'.$product->id) }}">Buy Now</a>
                        </div>
                    @endforeach
                @else
                    <p>No Package found under this service.</p>
                @endif
            </div>
        </div>
    </section>



    {{-- Dynamic Content --}}
    @if (!empty($subcategory->description))
        <div class="dynamicContent container pt50" style="min-height:200px;">
            {!! $subcategory->description !!}
        </div>
    @endif



    <!--====== Testimonial Start ======-->
    @include('../testimonals')






    <!-- Related Subcategories Section -->
    {{-- <section class="related-subcategories pb50 text-center">
        <div class="container">
            <div class="header p50 pl0">
                <h2>Similar Categories</h2>
            </div>

            <div class="row pb20" style="min-height: 350px;">
                @php
                    $subcat_counter = 0;
                @endphp
                @if($category->getSubCategory->count() > 0)
                    @foreach($category->getSubCategory as $relatedSubcategory)
                        @if($relatedSubcategory->id !== $subcategory->id)
                            @if ($subcat_counter<4)
                                <div class="col-6 col-md-4 col-lg-3">
                                    <a href="{{ url($category->slug.'/'.$relatedSubcategory->slug) }}">
                                        <div class="related-subcategory-card">
                                            <img loading="lazy" src="{{ url('public/upload/subCategory/'.$relatedSubcategory->featured_image) }}" width="270px" height="270px" alt="{{ $relatedSubcategory->name }}">
                                            <h3>{{ $relatedSubcategory->name }}</h3>
                                        </div>
                                    </a>
                                </div>
                                @php
                                    $subcat_counter++;
                                @endphp
                            @endif
                        @endif
                    @endforeach
                @else
                    <p>No related subcategories found.</p>
                @endif
            </div>
        </div>
    </section> --}}






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
