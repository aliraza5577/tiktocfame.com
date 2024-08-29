
    <section class="customQuoteWrap text-center p80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-7"></div>
                <div class="col-12 col-lg-5">
                    <div class="customQuoteForm">
                        <h2>Instant Quote</h2>
                        @if(!empty(session('error')))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if(!empty(session('success')))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form method="POST" action="{{ url('instent_quote') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" value="{{ old('product') }}" name="product" placeholder="Product Name" />
                                    <div style="color: red;">{{ $errors->first('product') }}</div>
                                </div>
                                <div class="col-6">
                                    <input type="text" value="{{ old('quantity') }}" name="quantity" placeholder="Quantity" />
                                    <div style="color: red;">{{ $errors->first('quantity') }}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" value="{{ old('name') }}" name="name" placeholder="Name" required />
                                    <div style="color: red;">{{ $errors->first('name') }}</div>
                                </div>
                                <div class="col-6">
                                    <input type="text" value="{{ old('phone') }}" name="phone" placeholder="Phone" required />
                                    <div style="color: red;">{{ $errors->first('phone') }}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="email" value="{{ old('email') }}" name="email" placeholder="Email" required />
                                    <div style="color: red;">{{ $errors->first('email') }}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <textarea name="message" placeholder="Dexcribe Here"></textarea>
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
    <!--====== Custom Quote Section End ======-->
