<!--====== Footer Area Start ======-->
<footer>
    <div class="footer-widgets-area">
        <div class="container container-1360">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="widget address-widget">
                        <span class="widget-title">Our Address</span>
                        <p>453 S Spring St Ste 400 # 544<br> Los Angeles ,CA 90013</p>
                        <p><a href="tel:+13237639393">+1 (323) 763-9393</a> <br><a href="mailto:sales@domain.com"> sales@domain.com</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="widget nav-widget">
                        <span class="widget-title">Quick Links</span>
                        <ul>
                            <li><a href="{{ url('') }}">Home</a></li>
                            <li><a href="{{ url('about') }}">About Us</a></li>
                            <li><a href="{{ url('gallery') }}">Gallery</a></li>
                            <li><a href="{{ url('blog') }}">Blog</a></li>
                            <li><a href="{{ url('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="widget nav-widget">
                        <span class="widget-title">Categories</span>
                        <ul>
                            @php
                                $getCategories = App\Models\SubCategoryModel::getActiveRecord();
                                $count = 0;
                            @endphp
                            @foreach ($getCategories as $mainCat)
                                @if ($count<5)
                                    @php $count++; @endphp
                                    <li><a href="{{ url($mainCat->category->slug.'/'.$mainCat->slug) }}">{{$mainCat->name}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="widget nav-widget">
                        <span class="widget-title">Helpful Links</span>
                        <ul>
                            <li><a href="{{ url('about') }}">About Us</a></li>
                            <li><a href="{{ url('contact') }}">Contact Us</a></li>
                            <li><a href="{{ url('privacy-policy') }}">Privacy and Security</a></li>
                            <li><a href="{{ url('terms-and-condition') }}">Terms & condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area">
        <div class="container container-1360">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="social-links">
                        <ul>
                            {{-- <li><a href="https://www.pinterest.com/citipackaging/"><i class="fab fa-facebook-f"></i></a></li> --}}
                            {{-- <li><a href="#"><i class="fab fa-instagram"></i></a></li> --}}
                            <li><a href="https://www.pinterest.com/citipackaging/"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="https://www.youtube.com/@citipackaging"><i class="fab fa-youtube"></i></a></li>
                            {{-- <li><a href="#"><i class="fab fa-linkedin"></i></a></li> --}}
                            <li><a href="https://x.com/citipackaging"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="copyright-text text-lg-right">
                        <p><span>Copyright</span> - 2025 All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--====== Footer Area End ======-->



{{-- Pop Up --}}
<div class="modal quoteModal" id="quoteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row">
                {{-- <div class="col-12 col-lg-4 col-md-4 d-none d-sm-block">
                    <img src="{{ url('public/front/assets/img/pop-up-pic.avif') }}" alt="Quote" />
                </div> --}}
                <div class="col-12">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times-circle"></i>
                    </button>
                        @include('popup_quote_form')
                </div>
            </div>
        </div>
    </div>
</div>

