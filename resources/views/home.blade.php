@extends('layouts.app')


    @section('content')

    <section class="banner-section p50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <h1>Buy TikTok Followers, Likes and Views – Starting at Just $1.48!</h1>
                    <p>TikTocFame offers real TikTok Followers, Likes, Views and Comments that help you build credibility, boost engagements and enhance your social media success.</p>
                    <div class="trust-pilot-area">
                        <img src="{{ url('public/front/assets/img/stars.svg') }}" alt="stars">
                        <p>4.8 | Rated Excellent on Trustpilot</p>
                    </div>
                </div>
                <div class="col-md-6 col-12 text-right">
                    <img src="{{ url('public/front/assets/img/banner_home.webp') }}" alt="banner" />
                    <div class="services-icons">
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-heart"></i>
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--====== Categories Section Start ======-->
    <section class="category-wrap p50">
        <div class="container">
            <div class="header p20">
                <h1>Our Services</h1>
                {{-- <p>TikTokFame is a premier service provider catering to the needs of TikTok users seeking to enhance their online presence. By selling TikTok followers, likes, and views, TikTokFame offers a comprehensive platform for users to increase their visibility and reach on this popular social media network. The service boasts of genuine followers and real likes, which help users to gain credibility and popularity. The TikTok views offered by the service are from real accounts, contributing to a natural growth pattern. In essence, TikTokFame provides a reliable avenue for TikTok enthusiasts to optimize their content and gain a competitive edge in the vast digital landscape.</p> --}}
            </div>
            <div class="row pt-3">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        @foreach ($getSubCategories as $key => $collection)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $key == 0 ? 'active' : '' }}"
                                    id="{{ $collection->slug }}-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#{{ $collection->slug }}"
                                    type="button"
                                    role="tab"
                                    aria-controls="{{ $collection->slug }}"
                                    aria-selected="{{ $key == 0 ? 'true' : 'false' }}">
                                    {{ $collection->name }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        @foreach ($getSubCategories as $key => $collection)
                            <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}"
                                id="{{ $collection->slug }}"
                                role="tabpanel"
                                aria-labelledby="{{ $collection->slug }}-tab">
                                @if ($collection->products->count() > 0)
                                    @foreach ($collection->products as $product)
                                        <div class="card-single">
                                            <h3>{{ $product->name }}</h3>
                                            <p>${{ $product->sale_price }}</p>
                                            <a href="{{ url('checkout/'.$product->id) }}">Buy Now</a>
                                        </div>
                                    @endforeach
                                @else
                                    <p>No Package available.</p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Categories Section End ======-->

    <!--====== Services Section Start ======-->
    @include('homeServices')

    <!--====== Features Section Start ======-->
    @include('features')



    <!--====== Why Choose us Section Start ======-->
    <section class="whyChooseUs-wrap features-wrap text-center p50">
        <div class="container">
            <div class="header p50 pl0">
                <h2>What You <span class="primaryColor">Need to Know?</span></h2>
                <p>Are you ready to experience the ultimate in TikTok growth! We are committed to delivering only the Top-notch TikTok services on the market. Your page and videos are in the most trusted hands as we offer the best products available. With us, your TikTok presence is safe and secure for incredible growth. Prepare to see your profile flourish!</p>
            </div>
            <div class="row gx-4">
                <div class="col-md-3">
                    <div class="card-single">
                        <i class='far fa-shapes fa-3x'></i>
                        <h3>Outstanding Quality</h3>
                        <p>Take the spotlight with TikTocFame, your ideal destination to boost your TikTok presence. We promise exceptional quality with every service we provide. Whether it’s followers or likes, our offers will help your content stand out and shine brighter than ever before. With us, your TikTok account gets the premium engagement it deserves!</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-single">
                    <i class='fas fa-money-bill fa-3x'></i>
                    <h3>Exceptional Prices</h3>
                    <p>Quality doesn’t have to come with a hefty price tag. We believe that top-notch TikTok services should be affordable for everyone. Our competitive prices offer unbeatable value while maintaining the highest standards in quality. Get the best bang for your buck and watch your TikTok profile rise to new heights!</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-single">
                        <i class="far fa-print fa-3x"></i>
                        <h3>Safe And Secured</h3>
                        <p>We take your safety seriously. By maintaining TikTok guidelines we offer safe and secure TikTok services that allow your account to grow untroubled. Your personal information is always protected and we prioritize your account’s security at every step. </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-single">
                        <i class="far fa-truck fa-3x"></i>
                        <h3>Instant Delivery</h3>
                        <p>Experience the thrill of instant growth! Our lightning delivery ensures that your followers and likes arrive in real time, providing an immediate boost to your TikTok profile. No delays, no waiting—just quick, tangible results that make a difference. Get ready for real-time success with TikTocFame!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Why Choose us Section End ======-->



    <!--====== Testimonial Start ======-->
    @include('testimonals')

    <!--====== About Section Start ======-->
    @include('about')


    <!--====== Home Bottom Content Section Start ======-->
    {{-- @include('homeBottomContent') --}}


@endsection
@section('script')
@endsection
