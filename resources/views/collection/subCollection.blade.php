@extends('layouts.app')

@section('content')


<section class="mainBanner">
    <a data-bs-toggle="modal" data-bs-target="#quoteModal">
        <img src="{{ url('public/upload/subCategory/'.$subcategory->banner_image )}}" alt="{{ $subcategory->name }}" />
    </a>
</section>


<div class="breadcrums">
    <div class="container">
        <p><a href="{{ url('') }}">Home</a><span> > </span>
            <a href="{{ url('collection/'.$category->slug) }}">{{ $category->name }}</a>
            <span> > </span>{{ $subcategory->name }}</p>
    </div>
</div>


    <!-- Subcategory Details -->
    <section class="subcategory-details p50 text-center">
        <div class="container">
            <div class="header p50 pl0">
                <h1>{{ $subcategory->name }}</h1>
            </div>

            <!-- Products List -->
            <div class="row">
                @if($products->count() > 0)
                    @foreach ($products as $product)
                        <div class="col-6 col-md-3 col-lg-3 card-single">
                            <a href="{{ url('product/'.$product->slug) }}">
                                @if($product->getImage->count() > 0)
                                    <img src="{{ $product->getImage->first()->getProductImage() }}" width="270" height="270" alt="{{ $product->name }}" />
                                @else
                                    <img src="{{ url('public/front/assets/img/products/01.jpg') }}" width="270" height="270" alt="{{ $product->name }}" />
                                @endif
                                <h3>{{ $product->name }}</h3>
                            </a>
                        </div>
                    @endforeach
                @else
                    <p>No products found under this category.</p>
                @endif
            </div>
        </div>
    </section>




    <!--====== Custom Quote Section Start ======-->
    @include('../instant_quote')


    {{-- Dynamic Content --}}
    @if (!empty($subcategory->description))
        <div class="dynamicContent container pt50" style="min-height:200px;">
            {!! $subcategory->description !!}
        </div>
    @endif







    <!--====== Testimonial Start ======-->
    @include('../testimonals')



    <!-- Related Subcategories Section -->
    <section class="related-subcategories pb50 text-center">
        <div class="container">
            <div class="header p50 pl0">
                <h2>Similar Sub-Categories</h2>
            </div>

            <div class="row pb20" style="min-height: 350px;">
                @php
                    $subcat_counter = 0;
                @endphp
                @if($category->getSubCategory->count() > 0)
                    @foreach($category->getSubCategory as $relatedSubcategory)
                        @if($relatedSubcategory->id !== $subcategory->id) <!-- Exclude current subcategory -->
                            @if ($subcat_counter<4)
                                <div class="col-6 col-md-4 col-lg-3">
                                    <a href="{{ url('collection/'.$category->slug.'/'.$relatedSubcategory->slug) }}">
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
    </section>






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
