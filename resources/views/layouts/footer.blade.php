<!--====== Footer Area Start ======-->
<footer>
        <div class="footer-widgets-area">
            <div class="container container-1360">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="widget address-widget">
                            <h4 class="widget-title">Our Address</h4>
                            <p>Sydney, Australia Sheen Darus Salam. <br> 112/B, Road 8A, Dhanmondi.</p>
                            <p>+880-036987458765521 <br> example@yourmail.com</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="widget nav-widget">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul>
                                <li><a href="{{ url('') }}">Home</a></li>
                                <li><a href="{{ url('about') }}">About Us</a></li>
                                <li><a href="{{ url('gallery') }}">Gallery</a></li>
                                <li><a href="{{ url('blog') }}">Blog</a></li>
                                <li><a href="{{ url('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="widget nav-widget">
                            <h4 class="widget-title">Categories</h4>
                            <ul>
                                @php
                                    $getCategories = App\Models\SubCategoryModel::getActiveRecord();
                                    $count = 0;
                                @endphp
                                @foreach ($getCategories as $mainCat)
                                    @if ($count<5)
                                        @php $count++; @endphp
                                        <li><a href="{{ url('collection/'.$mainCat->category->slug.'/'.$mainCat->slug) }}">{{$mainCat->name}}</a></li>
                                    @endif
                                @endforeach
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
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="copyright-text text-lg-right">
                            <p><span>Copyright</span> - 2024 All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--====== Footer Area End ======-->
