@extends('layouts.app')


    @section('content')
    <!--====== Banner Area Start ======-->
    <section class="banner-section">
        <div id="bannerSlider" class="banner-slider carousel slide" data-bs-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a data-bs-toggle="modal" data-bs-target="#quoteModal">
                        <img src="{{ url('public/front/assets/img/banners/home-banner.avif') }}">
                    </a>
                </div>
                <div class="carousel-item">
                    <a data-bs-toggle="modal" data-bs-target="#quoteModal">
                        <img src="{{ url('public/front/assets/img/banners/home-page-banner.avif') }}">
                    </a>
                </div>
            </div>

            <!-- Left and right controls -->
            {{-- <a class="carousel-control-prev" href="#bannerSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#bannerSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a> --}}

        </div>
    </section>
    <!--====== Banner Area End ======-->




    <!--====== Categories Section Start ======-->
    <section class="category-wrap p50">
        <div class="container">
            <div class="header p50 pl0">
                <h1>Your Trusted Custom Packaging Partner</h1>
                <p>We pay attention to offering you the best packaging solutions fit for your industries and products. With custom boxes featuring logos, your brand will catch attention and be remembered. Through smooth and flexible packaging, we make it easy for you to receive the high-quality custom boxes your business needs-delivered carefully and accurately.</p>
            </div>
            <div class="row">
                @php
                    $count = 0;
                @endphp
                @foreach ($getSubCategories as $collection)
                    @if ($count<12)
                        <div class="col-6 col-md-3 col-lg-3 card-single">
                            <a href="{{ url('collection/'.$collection->category->slug.'/'.$collection->slug) }}">
                                <img src="{{ url('public/upload/subCategory/'.$collection->featured_image) }}" width="270" height="270" alt="{{ $collection->name }}" />
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
                    @if ($count<4)
                        <div class="col-6 col-md-3 col-lg-3 card-single">
                            <a href="{{ url('product/'.$product->slug) }}">
                            @if($product->getImage->first())
                                <img src="{{ $product->getImage->first()->getProductImage() }}" width="270" height="270" alt="{{ $product->name }}" />
                            @else
                                <img src="{{ url('public/front/assets/img/products/01.jpg') }}" width="270" height="270" alt="{{ $product->name }}" />
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
                    @if ($count<4)
                        <div class="col-6 col-md-3 col-lg-3 card-single">
                            <a href="{{ url('product/'.$product->slug) }}">
                            @if($product->getImage->first())
                                <img src="{{ $product->getImage->first()->getProductImage() }}" width="270" height="270" alt="{{ $product->name }}" />
                            @else
                                <img src="{{ url('public/front/assets/img/products/01.jpg') }}" width="270" height="270" alt="{{ $product->name }}" />
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
                <h2>Why Choose <span class="primaryColor">Citi Packaging?</span></h2>
                <p>Reach Your Business Goals with Our Exceptional Packaging Services</p>
            </div>
            <div class="row gx-4">
                <div class="col-md-3">
                    <div class="card-single">
                        <i class='far fa-shapes fa-3x'></i>
                        <h3>Customized to Perfection</h3>
                        <p>At Citi Packaging, your vision takes the lead. You have complete freedom to customize the size, shape, and style of your packaging, ensuring it fits your product perfectly.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-single">
                    <i class='far fa-tree fa-3x'></i>
                    <h3>Sustainability</h3>
                    <p>We provide eco-friendly, sustainable packaging made from good-quality, recyclable materials. This way, you can help the environment while improving your products.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-single">
                        <i class="far fa-print fa-3x"></i>
                        <h3>High-Quality Printing</h3>
                        <p>With our modern digital and offset printing technology, your designs will be injected to life in bright colors and clear details, making your packaging different from the rest.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-single">
                        <i class="far fa-clipboard-check fa-3x"></i>
                        <h3>Endless Finishing Options</h3>
                        <p>From glossy coatings to luxurious matte or metallic finishes, our selection of premium finishing touches can make your packaging truly stand out from market.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-single">
                        <i class="far fa-truck fa-3x"></i>
                        <h3>Free & Fast Delivery</h3>
                        <p>No delivery fees! We make sure to deliver quickly and for free to your home, so you get your packages right when you need them.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-single">
                        <i class="far fa-headset fa-3x"></i>
                        <h3>Free Design Support</h3>
                        <p>Make your ideas real with our skilled design team. If you dream it, we will make it—without extra charges. Your packaging ideas are very important to us.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-single">
                        <i class="far fa-user-check fa-3x"></i>
                        <h3>Satisfaction Guaranteed</h3>
                        <p>Your satisfaction is our top priority! Our dedicated support team is available around the clock to assist you. Questions? We’re just a message away.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-single">
                        <i class='fas fa-money-bill fa-3x'></i>
                        <h3>Competitive Pricing</h3>
                        <p>Get affordable custom packaging without losing quality. Our pricing ensures you can scale your business without breaking the bank.</p>
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


    <!--====== Home Bottom Content Section Start ======-->
    @include('homeBottomContent')


@endsection
@section('script')
<script>
    const readMoreBtn = document.querySelector('.read-more-btn');
    const moreContent = document.querySelector('.moreContent');

    readMoreBtn.addEventListener('click', function () {
        if (moreContent.style.display === "none") {
            moreContent.style.display = "inline"; // Show the hidden content
            readMoreBtn.textContent = "Read Less"; // Change button text to 'Read Less'
        } else {
            moreContent.style.display = "none"; // Hide the content again
            readMoreBtn.textContent = "Read More"; // Change button text back to 'Read More'
        }
    });

</script>
@endsection
