@extends('layouts.app')

@section('content')

<section class="mainBanner">
    <img src="{{ url('public/upload/category/'.$category->banner_image )}}" alt="{{ $category->name }}" />
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
                                <div class="col-6 col-md-4 col-lg-2 card-single">
                                    <a href="{{ url('collection/'.$category->slug.'/'.$collection->slug) }}">
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
