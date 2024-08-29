@extends('layouts.app')

@section('content')


<section class="mainBanner">
    <img src="{{ url('public/upload/subCategory/'.$subcategory->banner_image )}}" alt="{{ $subcategory->name }}" />
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
                        <div class="col-md-3 card-single">
                            <a href="{{ url('product/'.$product->slug) }}">
                                @if($product->getImage->count() > 0)
                                    <img src="{{ $product->getImage->first()->getProductImage() }}" alt="{{ $product->name }}" />
                                @else
                                    <img src="{{ url('public/front/assets/img/products/01.jpg') }}" alt="{{ $product->name }}" />
                                @endif
                                <h3>{{ $product->name }}</h3>
                            </a>
                        </div>
                    @endforeach
                @else
                    <p>No products found under this subcategory.</p>
                @endif
            </div>
        </div>
    </section>




    <!--====== Custom Quote Section Start ======-->
    @include('../instant_quote')


    <!--====== Testimonial Start ======-->
    @include('../testimonals')





@endsection
