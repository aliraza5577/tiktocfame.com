@extends('layouts.app')

@section('content')


<section class="mainBanner">
    <img src="{{ url('public/upload/blog/'.$blog->banner_image )}}" alt="{{ $blog->name }}" />
</section>

<div class="breadcrums">
    <div class="container">
        <p><a href="{{ url('') }}">Home</a><span> > </span>{{ $blog->title }}</p>
    </div>
</div>







<!--====== Post Section Start ======-->
<section class="category-wrap galleryWrap p50">
    <div class="container">
        <div class="header">
            <h1>{{ $blog->title }}</h1>
        </div>
        <div class="row">
            {{-- Post Side --}}
            <div class="col-12 card-single">
                <p>{!! $blog->description !!}</p>
            </div>
            {{-- Side Bar --}}
            {{-- <div class="col-md-3 col-lg-3">

            </div> --}}
        </div>
    </div>
</section>
<!--====== Post Section End ======-->

@endsection
