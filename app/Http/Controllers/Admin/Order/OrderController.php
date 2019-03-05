<?php

namespace App\Http\Controllers\Admin\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOrderRequest;
use App\Order;
use App\User;

class OrderController extends Controller
{
     public function index(){
    	$orders = Order::latest()->paginate(2);
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
}
