@extends('layouts.app')

@section('content')

    <!-- Product Header -->
    <section class="product-details p50">
        <div class="container">
            <div class="breadcrums">
                <p><a href="{{ url('') }}">Home</a><span> > </span>{{ $product->name }}</p>
            </div>
            <h1>{{ $product->name }}</h1>
            <div class="row">
                <!-- Product Left Side -->
                <div class="col-12 col-md-6 productImages">
                    <div class="featuredImage">
                        @if($product->getImage->count() > 0)
                            <img src="{{ $product->getImage->first()->getProductImage() }}" alt="{{ $product->name }}" />
                        @else
                            <img src="{{ url('public/front/assets/img/products/01.jpg') }}" alt="{{ $product->name }}" />
                        @endif
                    </div>
                    <div class="otherImages">
                        @foreach($product->getImage as $image)
                            <div class="imageSingleWrap">
                                <img src="{{ url('public/upload/products/'.$image->image_name) }}" alt="{{ $product->name }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- Form Side --}}
                <div class="col-12 col-md-6">
                    <div class="productCustomQuote">
                        <h3>GET CUSTOM QUOTE</h3>
                        <form>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="product" placeholder="Product Name" required />
                                </div>
                                <div class="col-6">
                                    <input type="text" name="quantity" placeholder="Quantity" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="name" placeholder="Name" required />
                                </div>
                                <div class="col-6">
                                    <input type="text" name="phone" placeholder="Phone" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="email" name="email" placeholder="Email" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <textarea placeholder="Dexcribe Here"></textarea>
                                </div>
                                <div class="col-12">
                                    <input type="submit" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Product Header --}}





    <!-- Product Info -->
    <div class="productTabs p80">
        <div class="container">
            {{-- Tabs Nav --}}
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="descriptionProduct-tab" data-bs-toggle="tab" data-bs-target="#descriptionProduct-tab-pane" type="button" role="tab" aria-controls="descriptionProduct-tab-pane" aria-selected="true">
                    Description
                </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="addtionalInfo-tab" data-bs-toggle="tab" data-bs-target="#addtionalInfo-tab-pane" type="button" role="tab" aria-controls="addtionalInfo-tab-pane" aria-selected="false">
                    Specifications
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="shipping-tab" data-bs-toggle="tab" data-bs-target="#shipping-tab-pane" type="button" role="tab" aria-controls="shipping-tab-pane" aria-selected="false">
                    Order Process
                </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="artworkGuide-tab" data-bs-toggle="tab" data-bs-target="#artworkGuide-tab-pane" type="button" role="tab" aria-controls="artworkGuide-tab-pane" aria-selected="false">
                        Artwork Guidlines
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="materials-tab" data-bs-toggle="tab" data-bs-target="#materials-tab-pane" type="button" role="tab" aria-controls="materials-tab-pane" aria-selected="false">
                        Materials
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="coating-tab" data-bs-toggle="tab" data-bs-target="#coating-tab-pane" type="button" role="tab" aria-controls="coating-tab-pane" aria-selected="false">
                        Coating & Lamination
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="finishes-tab" data-bs-toggle="tab" data-bs-target="#finishes-tab-pane" type="button" role="tab" aria-controls="finishes-tab-pane" aria-selected="false">
                        Special Finishes
                  </button>
                </li>
              </ul>
              {{-- Tabs Content --}}
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="descriptionProduct-tab-pane" role="tabpanel" aria-labelledby="descriptionProduct-tab" tabindex="0">
                    {!! $product->description !!}
                </div>
                <div class="tab-pane fade" id="addtionalInfo-tab-pane" role="tabpanel" aria-labelledby="addtionalInfo-tab" tabindex="0">
                    {!! $product->additional_info !!}
                </div>
                <div class="tab-pane fade" id="shipping-tab-pane" role="tabpanel" aria-labelledby="shipping-tab" tabindex="0">
                    {!! $product->shipping !!}
                </div>
                <div class="tab-pane fade" id="artworkGuide-tab-pane" role="tabpanel" aria-labelledby="artworkGuide-tab" tabindex="0">
                    {!! $product->shipping !!}
                </div>
                <div class="tab-pane fade" id="materials-tab-pane" role="tabpanel" aria-labelledby="materials-tab" tabindex="0">
                    {!! $product->shipping !!}
                </div>
                <div class="tab-pane fade" id="coating-tab-pane" role="tabpanel" aria-labelledby="coating-tab" tabindex="0">
                    {!! $product->shipping !!}
                </div>
                <div class="tab-pane fade" id="finishes-tab-pane" role="tabpanel" aria-labelledby="finishes-tab" tabindex="0">
                    {!! $product->shipping !!}
                </div>
              </div>



        </div>
    </div>




    <!--====== Features Section Start ======-->
    @include('../features')

    <!--====== Testimonial Start ======-->
    @include('../testimonals')





@endsection


{{-- JavaScript --}}
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click', '.otherImages img', function(){
            var imgSrc = $(this).attr('src');
            $('.productImages > .featuredImage > img').attr('src', imgSrc);
        });
    });
</script>


@endsection

