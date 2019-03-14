@extends('website.layouts.master')

@section('title', 'Trang chu')
@section('content')
<!-- PAGE SECTION START -->
<div class="cart_page_area pt-100 pb-60">
 <form action="cart.html#">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cart-table table-responsive mb-40">
                    <table>
                        <thead>
                            <tr>
                                <th class="pro-thumbnail">Hình ảnh</th>
                                <th class="pro-title">Sản phẩm</th>
                                <th class="pro-price">Giá</th>
                                <th class="pro-quantity">Số lượng</th>
                                <th class="pro-subtotal">Toàn bộ</th>
                                <th class="pro-remove">Hủy</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::content() as $item)
                            <tr>
                                <td class="pro-thumbnail"><a href="cart.html#"><img src="{{ asset(''.$item->options->image) }}" alt="" /></a></td>
                                <td class="pro-title"><a href="cart.html#">{{ $item->name }}</a></td>
                                <td class="pro-price"><span class="amount">{{ $item->price }}</span></td>
                                <td class="pro-quantity"><div class="product-quantity"><input type="number" value="{{ $item->qty }}" /></div></td>
                                <td class="pro-subtotal">{{ number_format($item->qty * $item->price) }}</td>
                                <td class="pro-remove"><a href="{{ route('orders.delete-cart',$item->rowId) }}">×</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-8 col-12">
                <div class="cart-buttons mb-30">
                    <input type="submit" value="Cập nhật" />
                    <a href="cart.html#">Tiếp tục mua hàng</a>
                </div>
                <div class="cart-coupon mb-40">
                    <h4>Phiếu mua hàng</h4>
                    <p>Nhập mã giảm giá nếu có.</p>
                    <div class="coupon_form_inner">
                        <input type="text" placeholder="Coupon code" />
                        <input type="submit" value="Áp dụng" />
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="cart-total mb-40">
                    <h3>Toàn bộ giỏ hàng</h3>
                    <div class="table-responsive">
                        <table>
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Tổng phụ:</th>
                                    <td><span class="amount">$306.00</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Toàn bộ:</th>
                                    <td>
                                        <strong><span class="amount">$306.00</span></strong>
                                    </td>
                                </tr>                                           
                            </tbody>
                        </table>
                    </div>

                    <div class="proceed-to-checkout section mt-30">
                        <a href="cart.html#">Tiến hành thanh toán</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</form> 
</div>
<!-- PAGE SECTION END --> 
@endsection
{{-- @push('script')
    <script>
        function updateClick(){
            window.location.reload(true);
        }
        function plusQuantity(url, e){
            let elementQuantity = $(e.target);
            let quantity = elementQuantity.val();
            let index = $(".input_quantity").index(elementQuantity[0]);
            $.ajax({
                url: url,
                method: "GET",
                data: {
                    quantity: quantity
                },
                success: function(data){
                    if(data.status){
                        let product = data.cart;
                        $(".product-price").eq(index).text(product.price);
                        $(".product_total").eq(index).text((parseFloat(product.price)* parseFloat(product.qty)).toFixed(2));
                    }
                },
                error: function(err){
                    console.log(err);
                }
            })
        }
    </script>
@endpush --}}