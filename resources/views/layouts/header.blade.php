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
                <a href="#" class="nav-open-btn">
                    <span class="fas fa-bars"></span>
                </a>
                <div class="navbar-mobile animate__animated">
                    <div class="navbar-mobile-header">
                        <h3>Menu</h3>
                        <a href="#" class="nav-close-btn">
                            <span class="fas fa-times"></span>
                        </a>
                    </div>
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

