@extends('layouts.app')

@section('content')

<!--====== Categories Section Start ======-->
<section class="category-wrap contactWrap galleryWrap p50">
    <div class="container">
        <div class="header p20 text-center">
            <h1>Contact us</h1>
            {{-- <p>At Citi Packaging, we provide quality packaging solutions, transparency in information, and outstanding service to all of our clients. If you have a question, require a quote for a custom project, or need expert advice, we are here to help!</p> --}}
            {{-- <p>Fill out our quote request form, and one of our packaging experts will contact you within 1 hour. We want to make your custom packaging experience as easy as possible.</p> --}}
        </div>
        <div class="row contactPageWrap text-left">

            <div class="col-lg-6 col-md-6 col-12">
                {{-- Contact Information --}}
                <div class="footerContactArea">
                    <h2 class="pb20">How We Help You</h2>
                    {{-- <p>Our experts are available at every stage-from the first meeting to design and customization, all the way through to production and on-time delivery. We make sure that you have smooth and easy solutions to your packaging requirements.</p> --}}
                    <h3>Need Help Now?</h3>
                    <p>For immediate assistance, reach out to us directly: <a href="mailto:sales@domain.com">sales@domain.com</a> or call us at <a href="tel:+13237639393">+1 (323) 763-9393</a> to speak with one of our representatives today.</p>
                    <p>At TikToc Fame, we’re always here to answer your questions and provide the perfect packaging solutions for your business.</p>

                    {{-- <div class="row text-center">
                        <div class="col-12">
                            <div class="contactSingle">
                                    <i class="fas fa-phone"></i>
                                    <h3>Call Us</h3>
                                    <a href="tel:+16479095451">(647) 909-5451</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="contactSingle">
                                    <i class="fas fa-envelope"></i>
                                    <h3>Email</h3>
                                    <a href="mailto:sales@boxprint.ca">sales@boxprint.ca</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="contactSingle">
                                    <i class="fas fa-map"></i>
                                    <h3>Address</h3>
                                    <p>45 Silverstone dr, Unit 305, Toronto, ON M9V 4B1</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
                {{-- Social Links --}}
                <div class="social-links">
                    <ul>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-12">
                {{-- Contact Form --}}
                <div class="contactPageForm">
                    @if(!empty(session('error')))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    @if(!empty(session('success')))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form id="contactForm" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-6">
                                <input type="text" name="name" placeholder="Name" />
                                <div id="error-name" style="color: red;"></div>
                            </div>
                            <div class="col-6">
                                <input type="text" name="phone" placeholder="Phone" />
                                <div id="error-phone" style="color: red;"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <input type="email" name="email" placeholder="Email" />
                                <div id="error-email" style="color: red;"></div>
                            </div>
                            <div class="col-6">
                                <input type="text" name="company" placeholder="Company Name" />
                                <div id="error-company" style="color: red;"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <textarea name="message" placeholder="Write Your Message Here"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="submit" value="Submit" />
                            </div>
                        </div>
                    </form>
                    <div id="success-message" style="color: green;"></div>
                    <div id="error-message" style="color: red;"></div>
            </div>
            </div>

        </div>
    </div>
</section>
<!--====== Categories Section End ======-->

@endsection


@section('script')
<script>
$('#contactForm').on('submit', function(e) {
        e.preventDefault();

        $('#success-message').text('');
        $('#error-message').text('');
        $('#contactForm').find('div[id^="error-"]').text('');

        var formData = $(this).serialize();

        $.ajax({
            url: 'contact',
            type: 'POST',
            data: formData,
            success: function(response) {
                if(response.success) {
                    $('#success-message').text(response.message);
                    $('#contactForm')[0].reset();
                } else {
                    $('#error-message').text('Error submitting the form.');
                }
            },
            error: function(response) {
                var errors = response.responseJSON.errors;
                if (errors) {
                    $.each(errors, function(key, value) {
                        $('#error-' + key).text(value[0]);
                    });
                }
            }
        });
    });

</script>
@endsection
