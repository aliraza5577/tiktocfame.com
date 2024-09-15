@extends('layouts.app')


    @section('content')
    <!--====== Banner Area Start ======-->
    <section class="banner-section">
        <div id="bannerSlider" class="banner-slider carousel slide" data-bs-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ url('public/front/assets/img/banners/banner.webp') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ url('public/front/assets/img/banners/banner2.webp') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ url('public/front/assets/img/banners/banner3.webp') }}">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#bannerSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#bannerSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </section>
    <!--====== Banner Area End ======-->




    <!--====== Categories Section Start ======-->
    <section class="category-wrap p50">
        <div class="container">
            <div class="header p50 pl0">
                <h2>Explore All Collections</h2>
            </div>
            <div class="row">
                @php
                    $count = 0;
                @endphp
                @foreach ($getSubCategories as $collection)
                    @if ($count<12)
                        <div class="col-6 col-md-4 col-lg-2 card-single">
                            <a href="{{ url('collection/'.$collection->category->slug.'/'.$collection->slug) }}">
                                <img src="{{ url('public/upload/subCategory/'.$collection->featured_image) }}" alt="{{ $collection->name }}" />
                                <h3>{{ $collection->name }}</h3>
                            </a>
                        </div>
                        @php
                            $count++;
                        @endphp
                    @endif
                @endforeach
            </div>
            <div class="p50">
                <a class="main-btn" href="{{ url('all-collections') }}">View More Collections</a>
            </div>
        </div>
    </section>
    <!--====== Categories Section End ======-->


    <!--====== Top products Section ======-->
    <section class="productsWrap text-center pb50">
        <div class="container">
            <div class="header pb50 pl0">
                <h2>Citi Packaging Picks: Top Products</h2>
            </div>
            <div class="row">
                @php
                    $count = 0;
                @endphp
                @foreach ($top_products as $product)
                    @if ($count<6)
                        <div class="col-6 col-md-4 col-lg-2 card-single">
                            <a href="{{ url('product/'.$product->slug) }}">
                            @if($product->getImage->first())
                                <img src="{{ $product->getImage->first()->getProductImage() }}" alt="{{ $product->name }}" />
                            @else
                                <img src="{{ url('public/front/assets/img/products/01.jpg') }}" alt="{{ $product->name }}" />
                            @endif
                                <h3>{{ $product->name }}</h3>
                            </a>
                        </div>
                        @php
                            $count++;
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!--====== Top products Section End ======-->



    <!--====== Seasonal products Section ======-->
    <section class="productsWrap text-center pb50">
        <div class="container">
            <div class="header pb50 pl0">
                <h2>Everything you need to make busy season a breeze</h2>
            </div>
            <div class="row">
                @php
                    $count = 0;
                @endphp
                @foreach ($seasonal_products as $product)
                    @if ($count<6)
                        <div class="col-6 col-md-4 col-lg-2 card-single">
                            <a href="{{ url('product/'.$product->slug) }}">
                            @if($product->getImage->first())
                                <img src="{{ $product->getImage->first()->getProductImage() }}" alt="{{ $product->name }}" />
                            @else
                                <img src="{{ url('public/front/assets/img/products/01.jpg') }}" alt="{{ $product->name }}" />
                            @endif
                                <h3>{{ $product->name }}</h3>
                            </a>
                        </div>
                        @php
                            $count++;
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!--====== Seasonal products Section End ======-->








    <!--====== Features Section Start ======-->
    @include('features')



    <!--====== Why Choose us Section Start ======-->
    <section class="whyChooseUs-wrap features-wrap text-center p50">
        <div class="container">
            <div class="header p50 pl0">
                <h2>Why Choose <span class="primaryColor">Us?</span></h2>
            </div>
            <div class="row gx-4">
                <div class="col-md-3">
                    <div class="card-single">
                        <i class='far fa-shapes fa-3x'></i>
                        <h3>Customize Size and Shape</h3>
                        <p>We create what you want, therefore you have complete freedom over the size and shape of your boxes. </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-single">
                    <i class='far fa-tree fa-3x'></i>
                    <h3>Welcome to the Team Green!</h3>
                    <p>Understanding your concerns! we’re only offering exquisite custom boxes made up of sustainable and eco-friendly materials. </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-single">
                        <i class="far fa-print fa-3x"></i>
                        <h3>High-End Printing Quality!</h3>
                        <p>To get amazing printing results, we employ digital and inkjet printing, and this makes us different.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-single">
                        <i class="far fa-clipboard-check fa-3x"></i>
                        <h3>Exclusive Finishing and Features</h3>
                        <p>The icing on the cake! Limitless customization features to make a statement with your spectacular boxes.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-single">
                        <i class="far fa-truck fa-3x"></i>
                        <h3>Free & Fast Delivery</h3>
                        <p>Delivery Fee? It’s Free. We offer the fastest, on-time delivery to your door.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-single">
                        <i class="far fa-headset fa-3x"></i>
                        <h3>Free Design Support</h3>
                        <p>You visualize, and our exceptional team of designers makes that design a reality.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-single">
                        <i class="far fa-user-check fa-3x"></i>
                        <h3>Customer Satisfaction Above All!</h3>
                        <p>Our Customers Always Come First! Our CSRs are available 24/7. Feel free to get in touch</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-single">
                        <i class='fas fa-money-bill fa-3x'></i>
                        <h3>Lowest Prices Guaranteed!</h3>
                        <p>Prices you’ll find nowhere! Scale your business with cost-efficient custom packaging without any compromise on quality. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Why Choose us Section End ======-->



    <!--====== Testimonial Start ======-->
    @include('testimonals')

    <!--====== Custom Quote Section Start ======-->
    @include('instant_quote')

    <!--====== About Section Start ======-->
    @include('about')




@endsection
@section('script')
<script src="{{ url('public/front/assets/js/instant_quote.js') }}"></script>
@endsection
