@extends('layouts.app')

@section('content')

<!--====== Products Search Section Start ======-->
<section class="category-wrap p50">
    <div class="container">
        <div class="header p50 pl0">
            {{-- <h1>{{ $category->name }}</h1> --}}
        </div>
        <div class="row text-center">
            @if($products->isEmpty())
                <p>No products found matching your search criteria.</p>
            @else
                    @foreach ($products as $product)
                        <div class="col-6 col-md-4 col-lg-3 card-single">
                            <a href="{{ url('product/'.$product->slug) }}">
                                @if($product->getImage->isNotEmpty())
                                    <img src="{{ $product->getImage->first()->getProductImage() }}" alt="{{ $product->name }}" />
                                @else
                                    <img src="{{ url('public/front/assets/img/products/01.jpg') }}" alt="No Image Available" />
                                @endif
                                    <h3>{{ $product->name }}</h3>
                            </a>
                        </div>
                    @endforeach
            @endif
        </div>
    </div>
</section>
<!--====== Products Search Section End ======-->



@endsection
@section('script')
@endsection
