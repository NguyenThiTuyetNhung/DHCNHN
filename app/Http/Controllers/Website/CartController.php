<?php

namespace App\Http\Controllers\Website;

use App\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Product;
use App\GroupProduct;
use App\Order;
use App\Order_detail;
use Auth;

class CartController extends Controller
{
    public function cart()
    {
        $contents = Cart::content();
        $total = Cart::total();
        $subTotal = Cart::subtotal();
        // return $contents;
        $group_produt = GroupProduct::all();
        $products = Product::all();
        return view('website.view-cart', compact('group_produt','products'));
    }
    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        Cart::add([
            'id' => $product->id,
            'name' => $product->name, 
            'qty' => $request->qtybutton, 
            'price' => $product->price, 
            'options' => [
                'image' => $product->image,
            ]
        ]);
       return redirect()->route('homepage');
    }
    public function deleteCart($id)
    {
        Cart::remove($id);
        return redirect()->route('orders.cart');
    }
    public function updateCart($id, Request $request)
    {
        $quantity = $request->quantity;
        $cart = Cart::update($id, $quantity);
        return response()->json([
            'status' => '1',
            "cart" => $cart
        ]);
    }
    


    public function addOrder(Request $request)
    {
        if(Cart::content())
        {
            $cart = Cart::content();
$name = $request->input('address');
            $order = Order::create([
                    'user_id' => Auth::user()->id,
                    'Total_memory' => Cart::subtotal(),
                    'Address'=> $name
                    // 'Address' => Auth::user()->address
            ]);

            foreach ($cart as $cac)
            {
               $order_detail = Order_detail::create([
                   'quantity' => $cac->qty,
                   'price' => $cac->price,
                   'order_id' => $order->id,
                   'product_id' => $cac->id
               ]);
            }
            Cart::destroy();
            return redirect()->route('orders.cart')->with('thongbao','Đặt hàng thành công.');
        }
    }
}   
