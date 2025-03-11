<!--====== Header part start ======-->
<header class="sticky-header">
    <div class="container-fluid">
        {{-- Top Bar --}}
        <div class="row">
            <div class="col-md-3 col-12">
                <div class="site-logo">
                    <a href="{{ url('') }}" title="Logo"><img src="{{ url('public/front/assets/img/logo.svg') }}" alt="TikTok Fame" /></a>
                </div>
            </div>
            <div class="col-md-9 d-md-block d-none">
                <nav class="navbar">
                    <ul class="menu">
                        <li><a href="{{ url('') }}">Home</a></li>
                        @foreach ($getSubCategories as $mainCat)
                            <li class="dropdown"><a href="{{ url($mainCat->slug) }}">{{$mainCat->name}}</a></li>
                        @endforeach
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        {{-- End Top Bar --}}

        {{-- Mobile Navbar --}}
        <div class="container d-md-none">
            <nav class="navbar">
                <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fas fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="menu">
                        <li><a href="{{ url('') }}">Home</a></li>
                        @foreach ($getSubCategories as $mainCat)
                            <li class="dropdown"><a href="{{ url($mainCat->slug) }}">{{$mainCat->name}}</a></li>
                        @endforeach
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        {{-- Mobile Navbar End --}}
    </div>
</header>
<!--====== Header part end ======-->


@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarIcon = navbarToggler.querySelector('.navbar-toggler-icon');

        navbarToggler.addEventListener('click', function () {
            if (navbarToggler.getAttribute('aria-expanded') === 'true') {
                navbarIcon.classList.remove('fa-bars');
                navbarIcon.classList.add('fa-times');
            } else {
                navbarIcon.classList.remove('fa-times');
                navbarIcon.classList.add('fa-bars');
            }
        });
    });
</script>
@endsection
