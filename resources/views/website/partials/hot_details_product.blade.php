                <div class="hot_details_product pt-110 pb-107">
                    <div class="container">
                        <div class="row align-items-end">
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="section_title">
                                    <h2>Mới nhất</h2>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="nav product_tab_menu justify-content-end" role="tablist">
                                    <a class="active" href="index.html#hot_all" data-toggle="tab" role="tab" aria-selected="true" aria-controls="hot_all">Tất cả</a>
                                    @foreach ($groupproduct as $gp)
                                        <a href="index.html#hot_bike" data-toggle="tab" role="tab" aria-selected="false" aria-controls="hot_bike">{{ $gp->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="row mt-60">
                            <div class="col-lg-9 col-md-12 ">
                                <div class="tab-content">
                                    <div class="tab-pane active show fade" id="hot_all" role="tabpanel">
                                        <div class="row">
                                            @foreach ($products as $product)
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="{{ route('product.detail', ['id' => $product->id]) }}"><img src="{{ $product->image }}" alt="{{ $product->name }}"></a>
                                                    </div>
                                                    <div class="product_hover">
                                                     
                                                        <div class="product__desc">
                                                            <h3><a href="{{ route('product.detail', ['id' => $product->id]) }}">
                                                                {{ $product->name }}    
                                                            </a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">{{ $product->price }}</span>
                                                                <span class="discount_price">02%</span>
                                                                <span class="new_price">{{ $product->price_new }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                           
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="hot_bike" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/1.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Tandem Beach Cruiser</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/2.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/3.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/4.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/5.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/6.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="hot_tiar" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/1.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/2.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/3.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/4.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/5.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/6.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="hot_parts" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/1.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/2.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/3.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/4.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/5.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/6.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="hot_wheel" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/1.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/2.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/3.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/4.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/5.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/6.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="hot_light" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/1.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/2.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/3.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/4.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/5.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/6.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="single_banner long_hot_detals d-lg-none">
                                    <a href="index.html#"><img src="assets/img/banner/banner_tab_1.jpg" alt="Shop Banner"></a>
                                </div>
                                <div class="single_banner long_hot_detals d-none d-lg-block">
                                    <a href="index.html#"><img src="assets/img/banner/4.jpg" alt="Shop Banner"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Hot Deal product end-->  
                

                <!--Hot Deal product start-->
                <div class="hot_details_product pb-110">
                    <div class="container">
                        <div class="row align-items-end">
                            
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="section_title">
                                    <h2>Đề xuất<table></table></h2>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="nav product_tab_menu justify-content-end" role="tablist">
                                    <a class="active" href="index.html#best_all" data-toggle="tab" role="tab" aria-selected="true" aria-controls="best_all">Tất cả</a>
                                    <a href="index.html#best_bike" data-toggle="tab" role="tab" aria-selected="false" aria-controls="best_bike">Nhông Xích</a>
                                    <a href="index.html#best_tiar" data-toggle="tab" role="tab" aria-selected="false" aria-controls="best_tiar">Giảm Xóc</a>
                                    <a href="index.html#best_parts" data-toggle="tab" role="tab" aria-selected="false" aria-controls="best_parts">Xăm Lốp</a>
                                    <a href="index.html#best_wheel" data-toggle="tab" role="tab" aria-selected="false" aria-controls="best_wheel">Nhựa</a>
                                    <a href="index.html#best_light" data-toggle="tab" role="tab" aria-selected="false" aria-controls="best_light">Khác</a>
                                </div>
                            </div>
                          
                        </div>

                        <div class="row mt-60">
                            <div class="col-lg-9 col-md-12 ">
                                <div class="tab-content">
                                    <div class="tab-pane active show fade" id="best_all" role="tabpanel">
                                        <div class="row carousel_product owl-carousel">
                                            @foreach ($products as $product)
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="{{ $product->image }}" alt="{{ $product->name }}"></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">{{ $product->name }} </a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">{{ $product->price }} </span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/2.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/3.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="best_bike" role="tabpanel">
                                        <div class="row carousel_product owl-carousel">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/1.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/2.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/4.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="best_tiar" role="tabpanel">
                                        <div class="row carousel_product owl-carousel">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/1.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/2.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/4.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="best_parts" role="tabpanel">
                                        <div class="row ">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/1.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/2.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/4.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="best_wheel" role="tabpanel">
                                        <div class="row carousel_product owl-carousel">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/1.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/2.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/4.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="best_light" role="tabpanel">
                                        <div class="row carousel_product owl-carousel">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/1.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/2.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/4.png" alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="index.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="index.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="index.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-3 col-12 hot_righr_sidebar">
                                <div class="single_banner long_hot_detals d-lg-none">
                                    <a href="index.html#"><img src="assets/img/banner/banner_tab_2.png" alt="Shop Banner"></a>
                                </div>
                                <div class="single_banner  d-lg-block d-none">
                                    <a href="index.html#"><img src="assets/img/banner/5.jpg" alt="Shop Banner"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>