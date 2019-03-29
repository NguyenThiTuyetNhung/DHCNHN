@extends('website.layouts.master')

@section('title', 'Trang chu')


@section('content')
<!--product Details Inner-->
                <div class="product_details_inner left_sidebar ptb-110">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-8 col-12">
                                <div class="shop_sidebar">  
                                    <div class="sidebar_widget mb-50">
                                        <div class="widget_title">
                                            <h3>Loại sản phẩm</h3>
                                        </div>
                                        <div class="widget_categories">
                                           <ul>
                                                <li><a href="product-details-sidebar.html#">Nhông xích<span class="caet_count">(6)</span></a></li>
                                                <li><a href="product-details-sidebar.html#">Giảm sóc<span class="caet_count">(8)</span></a></li>
                                                <li><a href="product-details-sidebar.html#">Xăm lốp<span class="caet_count">(7)</span></a></li>
                                                <li><a href="product-details-sidebar.html#">Nhựa<span class="caet_count">(10)</span></a></li>
                                                <li><a href="product-details-sidebar.html#">Gương<span class="caet_count">(5)</span></a></li>
                                                <li><a href="product-details-sidebar.html#">Bóng đèn<span class="caet_count">(12)</span></a></li>
                                                <li><a href="product-details-sidebar.html#">Má phanh<span class="caet_count">(15)</span></a></li>
                                                <li><a href="product-details-sidebar.html#">Khác<span class="caet_count">(15)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                      <div class="sidebar_widget mb-50">
                                        <div class="widget_title">
                                            <h3>Hãng phân phối</h3>
                                        </div>
                                        <div class="widget_categories">
                                           <ul>
                                                <li><a href="product-details-sidebar.html#">Honda<span class="caet_count"></span></a></li>
                                                <li><a href="product-details-sidebar.html#">Yamaha<span class="caet_count"></span></a></li>
                                                <li><a href="product-details-sidebar.html#">Kawasaki<span class="caet_count"></span></a></li>
                                                <li><a href="product-details-sidebar.html#">Suzuki<span class="caet_count"></span></a></li>
                                                <li><a href="product-details-sidebar.html#">Piaggio<span class="caet_count"></span></a></li>
                                                <li><a href="product-details-sidebar.html#">SYM<span class="caet_count"></span></a></li>
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
                                                <li><a href="product-details-sidebar.html#">Đen</a></li>
                                                <li><a href="product-details-sidebar.html#">Trắng</a></li>
                                                <li><a href="product-details-sidebar.html#">Đỏ</a></li>
                                                <li><a href="product-details-sidebar.html#">Bạc</a></li>
                                                <li><a href="product-details-sidebar.html#">Xám</a></li>
                                                <li><a href="product-details-sidebar.html#">Xanh</a></li>
                                                <li><a href="product-details-sidebar.html#">Vàng cam</a></li>
                                            </ul>
                                        </div>
                                    </div> 
                                    
                                    <div class="sidebar_widget">
                                        <div class="widget_title">
                                            <h3>Từ khóa</h3>
                                        </div>
                                        <div class="widget_tags">
                                           <ul>
                                                <li><a href="product-details-sidebar.html#">Hàng mới về</a></li>
                                                <li><a href="product-details-sidebar.html#">Hàng giảm giá</a></li>
                                                <li><a href="product-details-sidebar.html#">Chất lượng</a></li>
                                                <li><a href="product-details-sidebar.html#">Lốp xe ga</a></li>
                                                <li><a href="product-details-sidebar.html#">Honda</a></li>
                                                <li><a href="product-details-sidebar.html#">Yamaha</a></li>
                                                <li><a href="product-details-sidebar.html#">Phụ tùng xe số</a></li>
                                           </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-12 col-12">
                                <div class="row">
                                    <!--Product Tab Style start-->
                                    <div class="col-md-12 col-lg-5 col-12">
                                        <div class="product-details-img-content">
                                            <div class="product-details-tab">
                                                <div id="img-1" class="zoomWrapper single-zoom">
                                                    <a href="product-details-sidebar.html#">
                                                        <img id="zoom1" src="{{ asset(''.$product->image) }}" data-zoom-image="assets/img/product/pro_details/z-1.jpg" alt="big-1">
                                                    </a>
                                                </div>
                                                <div class="single-zoom-thumb mt-20">
                                                    <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                                        <li>
                                                            <a href="product-details-sidebar.html#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/pro_details/big-2.jpg" data-zoom-image="assets/img/product/pro_details/z-1.jpg">
                                                                <img src="{{ asset(''.$product->image) }}" data-zoom-image="assets/img/product/pro_details/z-1.jpg" alt="big-1"/>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-details-sidebar.html#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/pro_details/big-2.jpg" data-zoom-image="assets/img/product/pro_details/z-1.jpg">
                                                                <img src="{{ asset(''.$product->image) }}" data-zoom-image="assets/img/product/pro_details/z-1.jpg" alt="big-1"/>
                                                            </a>

                                                        </li>
                                                        <li >
                                                            <a href="product-details-sidebar.html#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/pro_details/big-3.jpg" data-zoom-image="assets/img/product/pro_details/z-1.jpg">
                                                                <img src="{{ asset(''.$product->image) }}" data-zoom-image="assets/img/product/pro_details/z-1.jpg" alt="big-1"/>
                                                            </a>

                                                        </li>
                                                        <li >
                                                            <a href="product-details-sidebar.html#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/pro_details/big-4.jpg" data-zoom-image="assets/img/product/pro_details/z-1.jpg">
                                                                <img src="{{ asset(''.$product->image) }}" data-zoom-image="assets/img/product/pro_details/z-1.jpg" alt="big-1"/>
                                                            </a>

                                                        </li>
                                                        <li >
                                                            <a href="product-details-sidebar.html#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/pro_details/big-4.jpg" data-zoom-image="assets/img/product/pro_details/z-1.jpg">
                                                                <img src="{{ asset(''.$product->image) }}" data-zoom-image="assets/img/product/pro_details/z-1.jpg" alt="big-1"/>
                                                            </a>

                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product Tab Style End-->
                                    <div class="col-md-12 col-lg-7 col-12">
                                        <div class="product-details-content">
                                            <h3>{{ $product->name }}</h3>
                                            <div class="rating-number">
                                                {{-- <div class="product_rating">
                                                    <a href="product-details.html#"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="product-details.html#"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="product-details.html#"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="product-details.html#"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="product-details.html#"><i class="zmdi zmdi-star-half"></i></a>
                                                </div> --}}
                                                <div class="review_count">
                                                    <span>2 Ratting (S)</span>
                                                </div>
                                            </div>
                                            <div class="price_amount">
                                                <span class="current_price">${{ $product->price_new }}</span>
                                                <span class="discount_price">-%</span>
                                                <span class="old_price">${{ $product->price }}</span>
                                            </div>
                                            <p>Không có khuyến cáo cụ thể về thời hạn hay quãng đường sử dụng dành cho ruột bánh xe, thông thường mình sẽ thay mới khi ruột xe đã bị lủng 3-4 lần, hoặc khi bánh xe thường xuyên bị non hơi do vòi bị hỏng. Ngoài ra còn có những trường hợp bất khả kháng như cán đinh nặng khiến ruột bị xé rách không thể dùng tiếp.
                                            </p>
                                            <div class="product_variant_select">
                                                <div class="select-option-part">
                                                    <label>Kích thước</label>
                                                    <select class="nice-select">
                                                        <option value="">Lựa chọn kích thước</option>
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                    </select>
                                                </div>
                                                <div class="select-option-part">
                                                    <label>Màu sắc</label>
                                                    <select class="nice-select">
                                                        <option value="">- chọn màu sắc -</option>
                                                        <option value="">Cam</option>
                                                        <option value="">Hồng</option>
                                                        <option value="">Vàng</option>
                                                        <option value="">Đen</option>
                                                        <option value="">Xanh</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <form action="{{ route('orders.addToCart',$product->id) }}" method="post">
                                                @csrf
                                            <div class="single_product_action d-flex align-items-center">
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="1"  name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                                <div class="add_to_cart_btn">
                                                    <button>Thêm vào giỏ hàng</button>
                                                </div>
                                                <div class="wishlist">
                                                    <a href="product-details.html#"><i class="fas fa-cart-plus"></i></a>
                                                </div>
                                            </div>
                                            </form>
                                            <div class="product_details_cat_list mt-35">
                                                <div class="categories_label">
                                                    <span>Phụ tùng khác:</span>
                                                </div>
                                                <ul>
                                                    <li><a href="product-details.html#">nhông xích</a></li>
                                                    <li><a href="product-details.html#">xăm lốp</a></li>
                                                    <li><a href="product-details.html#">khác</a></li>
                                                </ul>
                                            </div>
                                            <div class="product_details_tag_list mtb-10">
                                                <div class="tag_label">
                                                    <span>Từ khóa : </span>
                                                </div>
                                                <ul>
                                                    <li><a href="product-details.html#">mới nhất</a></li>
                                                    <li><a href="product-details.html#">giảm giá</a></li>
                                                    <li><a href="product-details.html#">chất lượng</a></li>
                                                </ul>
                                            </div>
                                            <div class="product-share">
                                                <div class="share_label">
                                                    <span>Chia sẻ :</span>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="product-details.html#">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details.html#">
                                                           <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="product-details.html#">
                                                           <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    {{-- <li>
                                                        <a href="product-details.html#">
                                                            <i class="zmdi zmdi-pinterest"></i>
                                                        </a>
                                                    </li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Thumbnail Description Start -->
                                <div class="product_desc_tab_container mt-100 ">

                                    <div class="thumb-desc-inner">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <ul class="product_desc_tab nav" role="tablist">
                                                    <li><a class="active" data-toggle="tab" href="product-details-sidebar.html#dtail">Mô tả ngắn</a></li>
                                                    <li><a data-toggle="tab" href="product-details-sidebar.html#review">Reviews 1</a></li>
                                                </ul>
                                                <!-- Product Thumbnail Tab Content Start -->
                                                <div class="tab-content thumb-content mt-30">
                                                    <div id="dtail" class="tab-pane fade show active">
                                                        <p>Tiêu chuẩn Châu Âu: E4
                                                           – Đạt tiêu chuẩn: Jis K6366</br>
                                                            – Lốp được thiết kế lớp innerliner trong lòng lốp chống thấm khí.</br>
                                                            – Thân lốp được kết cấu mành chéo cứng vững được bao bọc từ đỉnh đến gót lốp.</br>
                                                            – Gót lốp được thiết kế cứng vững, phù hợp các loại vành, các hãng lắp ráp </br>
                                                            – Cao su lốp được nghiên cứu và pha chế với công thức tôi ưu.
                                                            – Fireking lấy cảm hứng từ lửa, kết hợp với khối gai 3D độc đáo cá tính, tạo phong cách thời trang, mạnh mẽ.</br>
                                                            – Kiểu dáng thời trang tạo nên sự mạnh mẽ và cá tính, bám đường tốt, phù hợp đường trường tốc độ cao, tiết kiệm nhiên liêu .</br>
                                                            – Hoa gai dùng cho lốp trước và sau.</br>
                                                        </p>
                                                    </div>
                                                    <div id="review" class="tab-pane fade">
                                                        <!-- Reviews Start -->
                                                        <div class="review">
                                                            <div class="group-title">
                                                                <h2>customer review</h2>
                                                            </div>
                                                            <ul class="review-list">
                                                                <!-- Single Review List Start -->

                                                                <!-- Single Review List Start -->
                                                                <li>
                                                                    <span>value</span>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa f  a-star-o"></i>
                                                                    <label>Posted on 12/20/18</label>
                                                                </li>
                                                                <!-- Single Review List End -->
                                                            </ul>
                                                        </div>
                                                        <!-- Reviews End -->
                                                        <!-- Reviews Start -->
                                                        <div class="review mt-20">
                                                            <h2 class="review-title mb-15">You're reviewing: <br><span>Faded Short Sleeves T-shirt</span></h2>
                                                            <p class="review-mini-title">your rating</p>
                                                            <ul class="review-list">
                                                                <!-- Single Review List Start -->
                                                                <li>
                                                                    <span>Quality</span>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </li>
                                                                <!-- Single Review List End -->
                                                                <!-- Single Review List Start -->
                                                                <li>
                                                                    <span>price</span>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </li>
                                                                <!-- Single Review List End -->
                                                                <!-- Single Review List Start -->
                                                                <li>
                                                                    <span>value</span>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </li>
                                                                <!-- Single Review List End -->
                                                            </ul>
                                                            <!-- Reviews Field Start -->
                                                            <div class="riview-field mt-40">
                                                                <div class="review_comment_box_inner">
                                                                    <form action="product-details-sidebar.html#">
                                                                        <div class="form-group">
                                                                            <label class="req" for="sure-name">Name</label>
                                                                            <input type="text" id="sure-name" required="required">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="req" for="subject">Title of review</label>
                                                                            <input type="text"  id="subject" required="required">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="req" for="comments">Your Review</label>
                                                                            <textarea rows="5" id="comments" required="required"></textarea>
                                                                        </div>
                                                                        <button type="submit" class="customer-btn">Submit</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <!-- Reviews Field Start -->
                                                        </div>
                                                        <!-- Reviews End -->
                                                    </div>
                                                </div>
                                                <!-- Product Thumbnail Tab Content End -->
                                            </div>
                                        </div>
                                        <!-- Row End -->
                                    </div>
                                </div>
                                 <!--Realted Product section start-->
                                <div class="related_product_section mt-100">

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="section_title">
                                                <h2>Sản phẩm liên quan</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row related_product_guttters owl-carousel mt-60">
                                        <div class="col-lg-3">
                                            <div class="single__product">
                                                <div class="produc_thumb">
                                                    <a href="product-details-sidebar.html#"><img src="assets/img/product/home2/4.png" alt=""></a>
                                                </div>
                                                <div class="product_hover">
                                                   {{--  <div class="product_action">
                                                        <a href="product-details-sidebar.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        <a href="product-details-sidebar.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                        <a href="product-details-sidebar.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                    </div> --}}
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
                                        <div class="col-lg-3">
                                            <div class="single__product">
                                                <div class="produc_thumb">
                                                    <a href="product-details-sidebar.html#"><img src="assets/img/product/home2/5.png" alt=""></a>
                                                </div>
                                                <div class="product_hover">
                                                   {{--  <div class="product_action">
                                                        <a href="product-details-sidebar.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        <a href="product-details-sidebar.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                        <a href="product-details-sidebar.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                    </div> --}}
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
                                        <div class="col-lg-3">
                                            <div class="single__product">
                                                <div class="produc_thumb">
                                                    <a href="product-details-sidebar.html#"><img src="assets/img/product/home2/6.png" alt=""></a>
                                                </div>
                                                <div class="product_hover">
                                                   {{--  <div class="product_action">
                                                        <a href="product-details-sidebar.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        <a href="product-details-sidebar.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                        <a href="product-details-sidebar.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                    </div> --}}
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
                                        <div class="col-lg-3">
                                            <div class="single__product">
                                                <div class="produc_thumb">
                                                    <a href="product-details-sidebar.html#"><img src="assets/img/product/home2/7.png" alt=""></a>
                                                </div>
                                                <div class="product_hover">
                                                   {{--  <div class="product_action">
                                                        <a href="product-details-sidebar.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        <a href="product-details-sidebar.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                        <a href="product-details-sidebar.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                    </div> --}}
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
                                        <div class="col-lg-3">
                                            <div class="single__product">
                                                <div class="produc_thumb">
                                                    <a href="product-details-sidebar.html#"><img src="assets/img/product/home2/8.png" alt=""></a>
                                                </div>
                                                <div class="product_hover">
                                                   {{--  <div class="product_action">
                                                        <a href="product-details-sidebar.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        <a href="product-details-sidebar.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                        <a href="product-details-sidebar.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                    </div> --}}
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
                                        <div class="col-lg-3">
                                            <div class="single__product">
                                                <div class="produc_thumb">
                                                    <a href="product-details-sidebar.html#"><img src="assets/img/product/home2/9.png" alt=""></a>
                                                </div>
                                                <div class="product_hover">
                                                   {{--  <div class="product_action">
                                                        <a href="product-details-sidebar.html#" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        <a href="product-details-sidebar.html#" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                        <a href="product-details-sidebar.html#" title="Compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                                    </div> --}}
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
                                <!--Realted Product section end-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--product Details End-->
@endsection