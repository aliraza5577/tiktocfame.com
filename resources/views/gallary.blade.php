@extends('layouts.app')

@section('content')


<!--====== Categories Section Start ======-->
<section class="category-wrap p50">
    <div class="container">
        <div class="header p50 pl0">
            <h1>Gallery</h1>
        </div>
        <div class="row text-center">
                        <div class="col-md-2 col-6 card-single">
                            <img src="{{ url('public/front/assets/img/gallery/d.webp') }}" />
                        </div>
                        <div class="col-md-2 col-6 card-single">
                            <img src="{{ url('public/front/assets/img/gallery/e.webp') }}" />
                        </div>
                        <div class="col-md-2 col-6 card-single">
                            <img src="{{ url('public/front/assets/img/gallery/image6.webp') }}" />
                        </div>
                        <div class="col-md-2 col-6 card-single">
                            <img src="{{ url('public/front/assets/img/gallery/image1.webp') }}" />
                        </div>
                        <div class="col-md-2 col-6 card-single">
                            <img src="{{ url('public/front/assets/img/gallery/image2.webp') }}" />
                        </div>
                        <div class="col-md-2 col-6 card-single">
                            <img src="{{ url('public/front/assets/img/gallery/image3.webp') }}" />
                        </div>
                        <div class="col-md-2 col-6 card-single">
                            <img src="{{ url('public/front/assets/img/gallery/image4.webp') }}" />
                        </div>
                        <div class="col-md-2 col-6 card-single">
                            <img src="{{ url('public/front/assets/img/gallery/image5.webp') }}" />
                        </div>
        </div>
    </div>
</section>
<!--====== Categories Section End ======-->



@endsection
