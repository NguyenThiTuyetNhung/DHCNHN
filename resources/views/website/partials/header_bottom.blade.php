<div class="header_bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-12">
                                    <div class="menu d-none d-lg-block ">
                                        <nav>
                                            <ul>                                                  
                                                <li><a href="{{ route('homepage') }}">Trang chủ <i class="zmdi"></i> </a>
                                                </li>
                                               
                                                <li><a href="{{ route('product.page') }} ">Mặt hàng<i class="zmdi"></i></a>
                                                    <!-- <ul class="sub_menu">
                                                        <li><a href="shop.html">Shop </a></li>
                                                        <li><a href="shop-list-right-sidebar.html">shop Right Sidebar</a></li>
                                                        <li><a href="shop-without-sidebar.html">shop without Sidebar</a></li>
                                                        <li><a href="product-details.html">Product Details </a></li>
                                                        <li><a href="product-details-sidebar.html">Product Details Sidebar </a></li>
                                                        <li><a href="checkout.html">Checkout </a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="my-account.html">My Account</a></li>
                                                    </ul> -->
                                                </li>
                                                <!-- <li><a href="blog.html">Blog <i class="zmdi"></i></a>
                                                    <ul class="sub_menu">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                                        <li><a href="blog-details.html">Blog Details</a></li>
                                                    </ul>
                                                </li> -->
                                                <li><a href="{{ route('product.contact') }}">Liên hệ </a></li>
                                                <!-- <li class="mega_item"><a href="index.html#">Features <i class="zmdi"></i></a>
                                                    <ul class="mega_menu">
                                                        <li><a href="index.html#">Column1</a>
                                                            <ul class="mega_dropdown">
                                                                <li><a href="shop.html">Shop </a></li>
                                                                <li><a href="shop-list.html">Shop List</a></li>
                                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar </a></li>
                                                                <li><a href="shop-without-sidebar.html">Shop without Sidebar </a></li>
                                                                <li><a href="shop-list-without-sidebar.html">Shop List without Sidebar </a></li>
                                                                <li><a href="product-details.html">Product Details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="index.html#">Column2</a>
                                                            <ul class="mega_dropdown">
                                                                <li><a href="product-details-sidebar.html">product Details Sidebar</a></li>
                                                                <li><a href="cart.html">Cart</a></li>
                                                                <li><a href="checkout.html">Checkout</a></li>
                                                                <li><a href="wishlist.html">wishlist</a></li>
                                                                <li><a href="my-account.html">My account</a></li>
                                                                <li><a href="login.html">login</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="index.html#">Column3</a>
                                                            <ul class="mega_dropdown">
                                                                <li><a href="blog.html">Blog</a></li>
                                                                <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                                <li><a href="about-us.html">About Us </a></li>
                                                                <li><a href="contact-us.html">Contact Us </a></li>
                                                                <li><a href="404.html">404</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li> -->
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="header_right_info">
                                        <ul>
                                            <!-- <li><a href="wishlist.html">Wishlist<span> <i class="zmdi zmdi-favorite-outline"></i> (0) </span></a></li> -->
                                            @if(Auth::check())
                                                <li>Xin chào : <a href="#">{{Auth::user()->name}}</a></li>
                                            @else
                                                <li> <a href="{{ route('product.login') }}">Đăng nhập</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 d-lg-none">
                                    <!--Mobile menu murkup start-->
                                    <div class="mobile-menu-area d-lg-none">
                                        <div class="mobile-menu clearfix">
                                            <nav>
                                                <ul>                                                  
                                                    <li><a href="index.html">HOME </a>
                                                        <ul>
                                                            <li><a href="index.html">Home 1</a></li>
                                                            <li><a href="index-2.html">Home 2</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="about-us.html">About</a></li>
                                                    <li><a href="shop.html">Shop</a>
                                                        <ul>
                                                            <li><a href="shop.html">Shop </a></li>
                                                            <li><a href="shop-list-right-sidebar.html">shop Right Sidebar</a></li>
                                                            <li><a href="shop-without-sidebar.html">shop without Sidebar</a></li>
                                                            <li><a href="product-details.html">Product Details </a></li>
                                                            <li><a href="product-details-sidebar.html">Product Details Sidebar </a></li>
                                                            <li><a href="checkout.html">Checkout </a></li>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="my-account.html">My Account</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="blog.html">Blog</a>
                                                        <ul>
                                                            <li><a href="blog.html">Blog</a></li>
                                                            <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                                            <li><a href="blog-details.html">Blog Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact-us.html">CONTACT </a></li>
                                                    <li ><a href="index.html#">Features</a>
                                                        <ul >
                                                            <li><a href="index.html#">Column1</a>
                                                                <ul >
                                                                    <li><a href="shop.html">Shop </a></li>
                                                                    <li><a href="shop-list.html">Shop List</a></li>
                                                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar </a></li>
                                                                    <li><a href="shop-without-sidebar.html">Shop without Sidebar </a></li>
                                                                    <li><a href="shop-list-without-sidebar.html">Shop List without Sidebar </a></li>
                                                                    <li><a href="product-details.html">Product Details</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="index.html#">Column2</a>
                                                                <ul>
                                                                    <li><a href="product-details-sidebar.html">product Details Sidebar</a></li>
                                                                    <li><a href="cart.html">Cart</a></li>
                                                                    <li><a href="checkout.html">Checkout</a></li>
                                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                                    <li><a href="my-account.html">My account</a></li>
                                                                    <li><a href="login.html">login</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="index.html#">Column3</a>
                                                                <ul>
                                                                    <li><a href="blog.html">Blog</a></li>
                                                                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                                    <li><a href="about-us.html">About Us </a></li>
                                                                    <li><a href="contact-us.html">Contact Us </a></li>
                                                                    <li><a href="404.html">404</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <!--Mobile menu murkup End-->
                                </div>
                            </div>
                        </div>
                    </div>