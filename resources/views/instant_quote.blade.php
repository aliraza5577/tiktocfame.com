
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
                        <form id="quoteForm" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="product" placeholder="Product Name" />
                                    <div id="error-product" style="color: red;"></div>
                                </div>
                                <div class="col-6">
                                    <input type="text" name="quantity" placeholder="Quantity" />
                                    <div id="error-quantity" style="color: red;"></div>
                                </div>
                            </div>
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
                                <div class="col-12">
                                    <input type="email" name="email" placeholder="Email" />
                                    <div id="error-email" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <textarea name="message" placeholder="Describe Here"></textarea>
                                </div>
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
    <!--====== Custom Quote Section End ======-->
