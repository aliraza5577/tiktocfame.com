@extends('layouts.app')

@section('content')

<!--====== Categories Section Start ======-->
<section class="category-wrap p50">
    <div class="container">
        {{-- <div class="header p50 pl0">
            <h1>Explore All Collections</h1>
        </div> --}}
        <div class="row text-center">
            @foreach ($categories as $category)
                <div class="col-md-12 category-block">
                    <h2 class="p50 pl0">{{ $category->name }}</h2>
                    <div class="row">
                        @if($category->getSubCategory->count() > 0)
                            @foreach ($category->getSubCategory as $collection)
                                <div class="col-md-3 card-single">
                                    <a href="{{ url('collection/'.$category->slug.'/'.$collection->slug) }}">
                                        <img src="{{ url('public/upload/subCategory/'.$collection->featured_image) }}" alt="{{ $collection->name }}" />
                                        <h3>{{ $collection->name }}</h3>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div><p><b>No subcategories available.</b></p></div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--====== Categories Section End ======-->

@endsection
