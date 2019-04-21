<?php

namespace App\Http\Controllers\Admin\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOrderRequest;
use App\Order;
use App\User;
use App\Distribution;
use App\GroupProduct;
use App\Order_detail;
use App\Product;

class OrderController extends Controller
{
     public function index(){
    	$orders = Order::latest()->paginate(10);
		return view('admin.orders.index', compact('orders'));
    }
     public function create(){
		$users = User::all();
		// $order_details= Order_detail::all();
		return view('admin.orders.create', compact('users'));
	}
	public function store(StoreOrderRequest $request)
	{
		$data = $request->all();

		Order::create($data);

		return redirect()->route('admin.orders.index');
	}
	public function destroy($id)
	{
		Order::findOrFail($id)->delete();
		return redirect()->route('admin.orders.index');
	}
	public function update(Order $order, Request $request)
	{
		$data = $request->all();
		if ($request->hasFile('image')) {
			$file = $request->file('image');
			$name = time() . '_' . $file->getClientOriginalName();
			$file->move('uploads', $name);
			$data['image'] = 'uploads/'.$name;  
		}
		$order->update($data);

		return redirect()->route('admin.orders.index');

	}
	public function edit(Order $order)
	{
		
		$order_details=Order_detail::all();
		$users=User::all();
		$products=Product::all();
		$user=$users->where('id','=', $order->user_id)->first();
		$data='abd';
		return view('admin.orders.edit', compact('order','products','users','order_details','user'));
	}
	// public function destroy($id)
	// {
	// 	Order::findOrFail($id)->delete();
	// 	return redirect()->route('admin.orders.index');
	// }

}
