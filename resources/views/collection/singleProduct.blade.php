@extends('layouts.app')

@section('content')

    <!-- Product Header -->
    <section class="product-details p50">
        <div class="container">
            <div class="breadcrums">
                <p><a href="{{ url('') }}">Home</a><span> > </span>
                    <a href="{{ url($parentCategorySlug.'/'.$product->sub_category->slug ) }}">{{ $product->sub_category->name }}</a>
                    <span> > </span>{{ $product->name }}
                </p>
            </div>

            <h1>{{ $product->name }}</h1>
            <div class="row">
                <!-- Product Left Side -->
                <div class="col-12 col-md-7 productImages">

                    <p>{{ $product->short_description }}</p>
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
                {{-- Form Side  --}}
                <div class="col-12 col-md-5">
                    @include('../quote_form')
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
                    @include('../productTabs/specifications')
                </div>
                <div class="tab-pane fade" id="shipping-tab-pane" role="tabpanel" aria-labelledby="shipping-tab" tabindex="0">
                    @include('../productTabs/process')
                </div>
                <div class="tab-pane fade" id="materials-tab-pane" role="tabpanel" aria-labelledby="materials-tab" tabindex="0">
                    @include('../productTabs/materials')
                </div>
                <div class="tab-pane fade" id="coating-tab-pane" role="tabpanel" aria-labelledby="coating-tab" tabindex="0">
                    @include('../productTabs/lamination')
                </div>
                <div class="tab-pane fade" id="finishes-tab-pane" role="tabpanel" aria-labelledby="finishes-tab" tabindex="0">
                    @include('../productTabs/finishing')
                </div>
              </div>



        </div>
    </div>




    <!--====== Features Section Start ======-->
    @include('../features')

    <!--====== Testimonial Start ======-->
    @include('../testimonals')




    <!-- Related Products Section -->
    <section class="related-products text-center pt50 pb50">
        <div class="container">
            <div class="header pb50">
                <h2>Related Products</h2>
            </div>

            <div class="row">
                @if($relatedProducts->count() > 0)
                    @foreach ($relatedProducts as $relatedProduct)
                        <div class="col-6 col-md-3 col-lg-3 card-single">
                            <a href="{{ url('product/'.$relatedProduct->slug) }}">
                                @if($relatedProduct->getImage->count() > 0)
                                    <img loading="lazy" src="{{ $relatedProduct->getImage->first()->getProductImage() }}" alt="{{ $relatedProduct->name }}" />
                                @else
                                    <img loading="lazy" src="{{ url('public/front/assets/img/products/01.jpg') }}" alt="{{ $relatedProduct->name }}" />
                                @endif
                                <h3>{{ $relatedProduct->name }}</h3>
                            </a>
                        </div>
                    @endforeach
                @else
                    <p>No related products found.</p>
                @endif
            </div>
        </div>
    </section>





@endsection


{{-- JavaScript --}}
@section('script')
<script type="text/javascript">
    $(document).ready(function(){

        // Changing featured image when thumbnail is clicked
        $(document).on('click', '.otherImages img', function(){
            var imgSrc = $(this).attr('src');
            $('.productImages > .featuredImage > img').attr('src', imgSrc);
        });



    });

</script>


@endsection

