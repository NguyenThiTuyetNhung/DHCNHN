@extends('website.layouts.master')

@section('title', 'Trang chu')
@section('content')
 <!--shop area start-->
        <div class="shop_area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-8 col-12">
                        <div class="shop_sidebar">

                            <div class="sidebar_widget mb-50">
                                <div class="widget_title">
                                    <h3>Loại phụ tùng</h3>
                                </div>
                                <div class="widget_categories">
                                    <ul>
                                        <li><a href="shop.html#">Nhông Xích<span class="caet_count">(6)</span></a></li>
                                        <li><a href="shop.html#">Giảm xóc<span class="caet_count">(8)</span></a></li>
                                        <li><a href="shop.html#">Xăm lốp<span class="caet_count">(7)</span></a></li>
                                        <li><a href="shop.html#">Nhựa<span class="caet_count">(10)</span></a></li>
                                        <li><a href="shop.html#">Bóng đèn<span class="caet_count">(5)</span></a></li>
                                        <li><a href="shop.html#">Chế<span class="caet_count">(12)</span></a></li>
                                        <li><a href="shop.html#">Má phanh<span class="caet_count">(15)</span></a></li>
                                        <li><a href="shop.html#">Khác<span class="caet_count">(10)</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar_widget mb-50">
                                <div class="widget_title">
                                    <h3>Hãng</h3>
                                </div>
                                <div class="widget_brand">
                                    <ul>
                                        <li><a href="shop.html#">Yamaha</a></li>
                                        <li><a href="shop.html#">Honda</a></li>
                                        <li><a href="shop.html#">Kawasaki</a></li>
                                        <li><a href="shop.html#">Suzuki</a></li>
                                        <li><a href="shop.html#">Piaggio</a></li>
                                        <li><a href="shop.html#">SYM</a></li>
                                    </ul>
                                </div>
                            </div>


                            <div class="sidebar_widget mb-50">
                                <div class="widget_title">
                                    <h3>Giá</h3>
                                </div>
                                <div class="widget_price">
                                    <div class="sidebar-price">
                                        <div id="price-range"></div>
                                        <input type="text" id="price-amount" readonly>
                                    </div>
                                </div>
                            </div>


                            <div class="sidebar_widget mb-50">
                                <div class="widget_title">
                                    <h3>Màu sắc</h3>
                                </div>
                                <div class="widget_colord">
                                    <ul>
                                        <li><a href="shop.html#">Đen</a></li>
                                        <li><a href="shop.html#">Trắng</a></li>
                                        <li><a href="shop.html#">Đỏ</a></li>
                                        <li><a href="shop.html#">Vàng</a></li>
                                        <li><a href="shop.html#">Xanh</a></li>
                                        <li><a href="shop.html#">Bạc</a></li>
                                        <li><a href="shop.html#">Xám</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar_widget">
                                <div class="widget_title">
                                    <h3>Từ khóa</h3>
                                </div>
                                <div class="widget_tags">
                                    <ul>
                                        <li><a href="shop.html#">Nhông xích mới</a></li>
                                        <li><a href="shop.html#">Giá rẻ</a></li>
                                        <li><a href="shop.html#">Chất lượng</a></li>
                                        <li><a href="shop.html#">phụ tùng xe máy</a></li>
                                        <li><a href="shop.html#">Yamaha</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-12 shop_details">
                        <div class="row">
                            <div class="col-12">
                                <!-- Shop Top Bar Start -->
                                <div class="shop-top-bar d-flex justify-content-between align-items-center">

                                    <div class="shop_top_left d-flex align-items-center">
                                        <!-- Product View Mode -->
                                        <div class="product-view-mode nav" role="tablist">
                                            <a class="active" href="shop.html#grid_view" data-toggle="tab" role="tab"
                                                aria-controls="grid_view"><i class="fa fa-th"></i></a>
                                            <a href="shop.html#list_view" data-toggle="tab" role="tab"
                                                aria-controls="list_view"><i class="fa fa-list"></i></a>
                                        </div>

                                        <!-- Product Showing -->
                                        <div class="product-showing d-flex">
                                            <p>Hiện thị</p>
                                            <select name="showing" class="nice-select">
                                                <option value="1">8</option>
                                                <option selected value="2">12</option>
                                                <option value="3">16</option>
                                                <option value="4">20</option>
                                                <option value="5">24</option>
                                            </select>
                                        </div>

                                        <!-- Product Short -->
                                        <div class="product-short d-flex">
                                            <p>Sắp xếp</p>
                                            <select name="sortby" class="nice-select">
                                                <option value="trending">Giá rẻ</option>
                                                <option value="sales">Hàng mới</option>
                                                <option value="rating">giảm giá</option>
                                            </select>
                                        </div>

                                    </div>
                                    <!-- Product Pages -->
                                    <div class="product-pages">
                                        <p>Trang 1 trên 25</p>
                                    </div>

                                </div><!-- Shop Top Bar End -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content">
                                    <div class="tab-pane active show fade" id="grid_view" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="single__product">
                                                    <span class="pro_badge">Sale</span>
                                                    <div class="produc_thumb">
                                                        <a href="shop.html#"><img src="assets/img/product/home2/4.png"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="shop.html#" title="Add To Cart"><i
                                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="shop.html#" title="Wishlist"><i
                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="shop.html#" title="Compare"><i
                                                                    class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Nhông xích Mạnh Quang</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">225.000</span>
                                                                <span class="discount_price">-10%</span>
                                                                <span class="old_price">250.000</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="shop.html#"><img src="assets/img/product/home2/5.png"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="shop.html#" title="Add To Cart"><i
                                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="shop.html#" title="Wishlist"><i
                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="shop.html#" title="Compare"><i
                                                                    class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Bình ắc quy</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">240.000</span>
                                                                <span class="old_price">260.000</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="single__product">
                                                    <span class="pro_badge">New</span>
                                                    <div class="produc_thumb">
                                                        <a href="shop.html#"><img src="assets/img/product/home2/6.png"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="shop.html#" title="Add To Cart"><i
                                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="shop.html#" title="Wishlist"><i
                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="shop.html#" title="Compare"><i
                                                                    class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Pit tông</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">300.000</span>
                                                                <span class="old_price">300.000</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="shop.html#"><img src="assets/img/product/home2/8.png"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="shop.html#" title="Add To Cart"><i
                                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="shop.html#" title="Wishlist"><i
                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="shop.html#" title="Compare"><i
                                                                    class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Nhựa Dream Việt</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">2.200.000</span>
                                                                <span class="old_price">2.500.000</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="single__product">
                                                    <span class="pro_badge">new</span>
                                                    <div class="produc_thumb">
                                                        <a href="shop.html#"><img src="assets/img/product/home2/7.png"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="shop.html#" title="Add To Cart"><i
                                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="shop.html#" title="Wishlist"><i
                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="shop.html#" title="Compare"><i
                                                                    class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Giảm sóc kaifa</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">380.000</span>
                                                                <span class="old_price">400.000</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="single__product">
                                                    <span class="pro_badge">Sale</span>
                                                    <div class="produc_thumb">
                                                        <a href="shop.html#"><img src="assets/img/product/home2/9.png"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="shop.html#" title="Add To Cart"><i
                                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="shop.html#" title="Wishlist"><i
                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="shop.html#" title="Compare"><i
                                                                    class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Nhựa Junimter</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">2.000.000</span>
                                                                <span class="discount_price">-10%</span>
                                                                <span class="old_price">1.800.000</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="single__product">
                                                    <span class="pro_badge">Sale</span>
                                                    <div class="produc_thumb">
                                                        <a href="shop.html#"><img src="assets/img/product/home2/5.png"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="shop.html#" title="Add To Cart"><i
                                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="shop.html#" title="Wishlist"><i
                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="shop.html#" title="Compare"><i
                                                                    class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Ắc quy</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">240.000</span>
                                                                <span class="discount_price">-10%</span>
                                                                <span class="old_price">216.000</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="shop.html#"><img src="assets/img/product/home2/6.png"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="shop.html#" title="Add To Cart"><i
                                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="shop.html#" title="Wishlist"><i
                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="shop.html#" title="Compare"><i
                                                                    class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Pit tông</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">300.000</span>
                                                                <span class="old_price">300.000</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="shop.html#"><img src="assets/img/product/home2/8.png"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="shop.html#" title="Add To Cart"><i
                                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="shop.html#" title="Wishlist"><i
                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="shop.html#" title="Compare"><i
                                                                    class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Nhựa Dream Việt</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">1.200.000</span>
                                                                <span class="old_price">1.200.000</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="single__product">
                                                    <span class="pro_badge">Sale</span>
                                                    <div class="produc_thumb">
                                                        <a href="shop.html#"><img src="assets/img/product/home2/4.png"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="shop.html#" title="Add To Cart"><i
                                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="shop.html#" title="Wishlist"><i
                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="shop.html#" title="Compare"><i
                                                                    class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Nhông xích Mạnh Quang</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">250.000</span>
                                                                {{-- <span class="discount_price">-08%</span> --}}
                                                                <span class="old_price">250.000</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="shop.html#"><img src="assets/img/product/home2/5.png"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="shop.html#" title="Add To Cart"><i
                                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="shop.html#" title="Wishlist"><i
                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="shop.html#" title="Compare"><i
                                                                    class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Bình ắc quy</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">240.000</span>
                                                                <span class="old_price">240.000</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="single__product">
                                                    <div class="produc_thumb">
                                                        <a href="shop.html#"><img src="assets/img/product/home2/6.png"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_action">
                                                            <a href="shop.html#" title="Add To Cart"><i
                                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                            <a href="shop.html#" title="Wishlist"><i
                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="shop.html#" title="Compare"><i
                                                                    class="zmdi zmdi-refresh-alt"></i></a>
                                                        </div>
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Pit tông</a></h3>
                                                            <div class="price_amount">
                                                                <span class="current_price">300.000</span>
                                                                <span class="old_price">300.000</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="list_view" role="tabpanel">
                                        <div class="row">
                                            <div class="col-12 mb-40">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="single_Product_list">
                                                            <div class="single__product">
                                                                <span class="pro_badge">Sale</span>
                                                                <div class="produc_thumb">
                                                                    <a href="product-details.html"><img
                                                                            src="assets/img/product/1.png" alt=""></a>
                                                                </div>
                                                                <div class="product_hover">
                                                                    <div class="product_action">
                                                                        <a href="shop.html#" title="Add To Cart"><i
                                                                                class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                        <a href="shop.html#" title="Wishlist"><i
                                                                                class="zmdi zmdi-favorite-outline"></i></a>
                                                                        <a href="shop.html#" title="Compare"><i
                                                                                class="zmdi zmdi-refresh-alt"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="product_rating">
                                                                <a href="shop.html#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="shop.html#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="shop.html#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="shop.html#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="shop.html#"><i
                                                                        class="zmdi zmdi-star-half"></i></a>
                                                            </div>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                elit. Est sit cum quaerat accusantium sint fugit
                                                                perspiciatis fugiat cupiditate quia officiis obcaecati
                                                                nesciunt molestias culpa, temporibus natus similique.
                                                                Accusantium, asperiores quia blanditiis nemo repellat ab
                                                                quod similique animi deserunt! Atque, nobis. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-40">
                                                <div class="row">
                                                    <div class="col-lg-4 ">
                                                        <div class="single_Product_list">
                                                            <div class="single__product">
                                                                <div class="produc_thumb">
                                                                    <a href="product-details.html"><img
                                                                            src="assets/img/product/3.png" alt=""></a>
                                                                </div>
                                                                <div class="product_hover">
                                                                    <div class="product_action">
                                                                        <a href="shop.html#" title="Add To Cart"><i
                                                                                class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                        <a href="shop.html#" title="Wishlist"><i
                                                                                class="zmdi zmdi-favorite-outline"></i></a>
                                                                        <a href="shop.html#" title="Compare"><i
                                                                                class="zmdi zmdi-refresh-alt"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="product_rating">
                                                                <a href="shop.html#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="shop.html#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="shop.html#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="shop.html#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="shop.html#"><i
                                                                        class="zmdi zmdi-star-half"></i></a>
                                                            </div>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                            </div>
                                                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                elit. Est sit cum quaerat accusantium sint fugit
                                                                perspiciatis fugiat cupiditate quia officiis obcaecati
                                                                nesciunt molestias culpa, temporibus natus similique.
                                                                Accusantium, asperiores quia blanditiis nemo repellat ab
                                                                quod similique animi deserunt! Atque, nobis. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-40">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="single_Product_list">
                                                            <div class="single__product">
                                                                <span class="pro_badge">New</span>
                                                                <div class="produc_thumb">
                                                                    <a href="product-details.html"><img
                                                                            src="assets/img/product/5.png" alt=""></a>
                                                                </div>
                                                                <div class="product_hover">
                                                                    <div class="product_action">
                                                                        <a href="shop.html#" title="Add To Cart"><i
                                                                                class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                        <a href="shop.html#" title="Wishlist"><i
                                                                                class="zmdi zmdi-favorite-outline"></i></a>
                                                                        <a href="shop.html#" title="Compare"><i
                                                                                class="zmdi zmdi-refresh-alt"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="product_rating">
                                                                <a href="shop.html#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="shop.html#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="shop.html#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="shop.html#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="shop.html#"><i
                                                                        class="zmdi zmdi-star-half"></i></a>
                                                            </div>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                            </div>
                                                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                elit. Est sit cum quaerat accusantium sint fugit
                                                                perspiciatis fugiat cupiditate quia officiis obcaecati
                                                                nesciunt molestias culpa, temporibus natus similique.
                                                                Accusantium, asperiores quia blanditiis nemo repellat ab
                                                                quod similique animi deserunt! Atque, nobis. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="single_Product_list">
                                                            <div class="single__product">
                                                                <span class="pro_badge">Sale</span>
                                                                <div class="produc_thumb">
                                                                    <a href="shop.html#"><img
                                                                            src="assets/img/product/home2/4.png"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="product_hover">
                                                                    <div class="product_action">
                                                                        <a href="shop.html#" title="Add To Cart"><i
                                                                                class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                                        <a href="shop.html#" title="Wishlist"><i
                                                                                class="zmdi zmdi-favorite-outline"></i></a>
                                                                        <a href="shop.html#" title="Compare"><i
                                                                                class="zmdi zmdi-refresh-alt"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="product__desc">
                                                            <h3><a href="product-details.html">Soffer Pro x33</a></h3>
                                                            <div class="product_rating">
                                                                <a href="shop.html#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="shop.html#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="shop.html#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="shop.html#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="shop.html#"><i
                                                                        class="zmdi zmdi-star-half"></i></a>
                                                            </div>
                                                            <div class="price_amount">
                                                                <span class="current_price">$2999.99</span>
                                                                <span class="discount_price">-08%</span>
                                                                <span class="old_price">$3700.00</span>
                                                            </div>
                                                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                elit. Est sit cum quaerat accusantium sint fugit
                                                                perspiciatis fugiat cupiditate quia officiis obcaecati
                                                                nesciunt molestias culpa, temporibus natus similique.
                                                                Accusantium, asperiores quia blanditiis nemo repellat ab
                                                                quod similique animi deserunt! Atque, nobis. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pagination_box mt-70">
                            <div class="col-12">
                                <div class="pagination">
                                    <ul>
                                        <li><a href="shop.html#"><i class="zmdi zmdi-chevron-left"></i> prev</a></li>
                                        <li><a href="shop.html#">1</a></li>
                                        <li><a href="shop.html#">2</a></li>
                                        <li><a href="shop.html#">3</a></li>
                                        <li class="active">4</li>
                                        <li>..</li>
                                        <li><a href="shop.html#">8</a></li>
                                        <li><a href="shop.html#">9</a></li>
                                        <li><a href="shop.html#">next<i class="zmdi zmdi-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!--shop area end-->

@endsection