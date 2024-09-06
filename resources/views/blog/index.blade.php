@extends('layouts.app')

@section('content')

<!--====== Posts Section Start ======-->
<section class="category-wrap galleryWrap p50">
    <div class="container">
        <div class="header p50 pl0">
            <h1>Blog</h1>
        </div>
        <div class="row text-center">
            @foreach ($getRecord as $post)
                        <div class="col-4 col-md-4 col-lg-4 card-single">
                            <a href="{{ url('blog/'.$post->slug) }}">
                            @if($post->featured_image)
                                <img src="{{ url('public/upload/blog/'.$post->featured_image) }}" alt="{{ $post->title }}" />
                            @else
                                <img src="{{ url('public/front/assets/img/posts/01.jpg') }}" alt="{{ $post->title }}" />
                            @endif
                                <h3>{{ $post->title }}</h3>
                                <p>{!! implode(' ', array_slice(explode(' ', strip_tags($post->description)), 0, 15)) !!}...</p>
                            </a>
                        </div>
            @endforeach
        </div>
        <div class="pagination">
            {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
        </div>
    </div>
</section>
<!--====== Posts Section End ======-->

@endsection
