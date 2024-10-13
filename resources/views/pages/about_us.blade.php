@extends('layouts.app')

@section('content')

<!--====== Categories Section Start ======-->
<section class="category-wrap aboutWrap galleryWrap p50">
    <div class="container">
        <div class="header p30 text-center">
            <h1>About Citi Packaging</h1>
        </div>
        <div class="row text-center pb50">
            <p>At Citi Packaging, we enjoy designing new and special packaging solutions that ensure businesses are noticed. We are committed to providing excellent designs not only to safeguard your products but also to add an enhancement of your brand identity, making a strong impression with your customers.</p>
            <h2 class="p30 text-center">Who We Are</h2>
            <p>Citi Packaging is a modern packaging company focused on giving businesses smart and high-quality packaging solutions. We know that every product needs packaging that reflects what makes it special. Our team of skilled workers takes pride in working closely with clients to ensure that their packaging reflects their brand well.</p>
            <div class="col-md-4 col-12 mt30"><img src="{{ url('public/front/assets/img/about/category-cigratte-boxes.avif') }}" alt="Our Mission" /></div>
            <div class="col-md-4 col-12 mt30"><img src="{{ url('public/front/assets/img/about/custom-candle-packaging.avif') }}" alt="Our Mission" /></div>
            <div class="col-md-4 col-12 mt30"><img src="{{ url('public/front/assets/img/about/custom-christmas-boxes.avif') }}" alt="Our Mission" /></div>
        </div>
        <div class="row align-items-center p50">
            <div class="col-md-8 col-12 text-left">
                <h2>Our Objective</h2>
                <p>At Citi Packaging, our mission is clear: we want to give you high-quality, custom packaging that matches your brand and really makes a strong impression on your customers. I think that packaging can tell a story, and we are here to help you share yours with unique and well-made designs.</p>
                <h2>Our Goal</h2>
                <p>We envision a world where packaging plays a vital role in the success of a brand. As the company intent on becoming the best partner for businesses in improving the aesthetics of their products while being good for the environment, we want to develop better standards within the packaging industry through new ideas and creativity.</p>
            </div>
            <div class="col-md-4 col-12"><img src="{{ url('public/front/assets/img/about/luxury-mailer-box.avif') }}" alt="What we do" /></div>


            <div class="col-md-4 col-12 mt40"><img src="{{ url('public/front/assets/img/about/rigid-magnetic-boxes.avif') }}" alt="What we do" /></div>
            <div class="col-md-8 col-12 mt40 text-left">
                <h2>What We Offer</h2>
                <p>Citi Packaging can assist new and established firms with a wide variety of packing. For any required boxes, bags, or special design in packaging, we offer choices that can be totally custom-tailored for your specific needs.</p>
                <h2>We Take Pride in Providing:</h2>
                <ul>
                    <li>Custom shapes and sizes, to fit your product just right.</li>
                    <li>A good printing choice such as offset, digital, and screen printing renders the packaging neat and professional.</li>
                    <li>Final details that add style and class, like matte, gloss, embossing, and foil stamping.</li>
                </ul>
            </div>




            {{-- <div class="col-md-8 col-12">
                <h2>Why choose Citi Packaging?</h2>
                <ul>
                    <li><strong>Customer-Focused Approach:</strong> We put our clients first, making sure that every packaging solution we provide is made to fit your specific needs.</li>
                    <li><strong>Quality Assurance:</strong> Our packaging materials are robust and made to protect your products, though making them appear better.</li>
                    <li><strong>Eco-Friendly Options:</strong> We are dedicated to being sustainable and provide eco-friendly packaging choices that lessen harm to the environment.</li>
                </ul>
                <p>Let's do something special together. If you introduce a new product or want to renew your brand, we'll be glad to help you with creative high-quality packaging that is both possible and practical.</p>
            </div>
            <div class="col-md-4 col-12"><img src="{{ url('public/front/assets/img/about/luxury-mailer-box.avif') }}" alt="What we do" /></div>
 --}}



        </div>

    </div>
</section>



{{-- request Quote --}}
<div class="requestQuote">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9 col-12">
                <h3>Request a Free Sample Kit</h3>
                <p>Curious to see what we can offer? Request a free sample kit today, and we’ll send you a selection of packaging materials from past projects, helping you explore different options and find the perfect fit for your needs.</p>
            </div>
            <div class="col-md-3 col-12">
                <a data-bs-toggle="modal" data-bs-target="#quoteModal">Get a Quote</a>
            </div>
        </div>
    </div>
</div>




@endsection
