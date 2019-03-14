{{-- @php
                                            dd(Cart::total());
                                        @endphp --}}

<div class="header_middle">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-md-3">
                                    <div class="logo">
                                        <a href="index.html"><img src="{{ asset('uploads/logo.png') }}" alt="exporso logo"></a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-8">
                                    <div class="category_search">
                                        <form action="index.html#">
                                            <div class="category_search_inner">
                                                <div class="select">
                                                    <select name="categroy_search">
                                                        <option value="1" selected>Hãng sản xuất</option>
                                                        <option value="2" >Honda</option>
                                                        <option value="3" >Yamaha</option>
                                                        <option value="4" >Piaggio</option>
                                                        <option value="5" >SYM</option>
                                                        <option value="6" >Suzuki</option>
                                                    </select>
                                                </div>
                                                <div class="search">
                                                    <input type="text" placeholder="Nhập từ khóa sản phẩm">
                                                </div>
                                                <div class="submit">
                                                    <button type="submit"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-1">
                                    <div class="mini_cart_box_wrapper text-right">
                                        <a >
                                           <img src="assets/img/icon/cart.png" alt="Mini Cart Icon">
                                            <span class="cart_count">{{Cart::count()}}</span>
                                        </a>
                                        
                                        <ul class="mini_cart_box">
                                            @foreach (Cart::content() as $item)
                                            <li class="single_product_cart">
                                                <div class="cart_img">
                                                    <a href="product-details.html"><img src="{{ asset(''.$item->options->image) }}" alt=""></a>
                                                </div>
                                                <div class="cart_title">
                                                    <h5><a href="product-details.html"> {{$item->name}}</a></h5>
                                                    <h6><a href="index.html#">Black</a></h6>
                                                    <span>{{number_format($item->price)}} x {{$item->qty}}</span>
                                                </div>
                                                <div class="cart_delete">
                                                    <a href="{{ route('orders.delete-cart',$item->id) }}"><i class="zmdi zmdi-delete"></i></a>
                                                </div>
                                            </li>
                                            @endforeach
                                            <li class="cart_space">
                                                <div class="cart_sub">
                                                    <h4>Subtotal</h4>
                                                </div>
                                                <div class="cart_price">
                                                    <h4>{{ Cart::total() }}</h4>
                                                </div>
                                            </li>
                                            <li class="cart_btn_wrapper">
                                                <a class="cart_btn" href="{{ route('orders.cart') }}">view cart</a>
                                                <a class="cart_btn " href="checkout.html">checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>