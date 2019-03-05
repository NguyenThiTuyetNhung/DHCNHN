<?php

namespace App\Http\Controllers\Admin\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductRequest;
use App\Product;
use App\Distribution;
use App\GroupProduct;
use App\Http\Requests\Admin\UpdateProductRequest;

class ProductController extends Controller
{
	// HIen thi danh sach
	public function index(Request $request)
	{
		$name = $request->get('name', NULL);
		$products = Product::query();
		if ($name != NULL) {
			$products = $products->where('name', 'LIKE', '%'.$name.'%');
		}

		$products = $products->latest()->paginate();

		
		return view('admin.products.index', compact('products'));
	}

	public function create()
	{
		$distributions = Distribution::all();
		$groupProducts = GroupProduct::all();
		return view('admin.products.create', compact('distributions', 'groupProducts'));
	}

	// php artisan make:request Admin/StoreProductRequest
	public function store(StoreProductRequest $request)
	{
		$data = $request->all();
		if ($request->hasFile('image')) {
			$file = $request->file('image');
			$name = time() . '_' . $file->getClientOriginalName();
			$file->move('uploads', $name);
			$data['image'] = 'uploads/'.$name;  
		}
		Product::create($data);

		return redirect()->route('admin.products.index');
	}
	public function destroy($id)
	{
		Product::findOrFail($id)->delete();
		return redirect()->route('admin.products.index');
	}

	public function edit(Product $product)
	{
		$distributions = Distribution::all();
		$groupProducts = GroupProduct::all();
		return view('admin.products.edit', compact('product','distributions', 'groupProducts'));
	}

	public function update(Product $product, UpdateProductRequest $request)
	{
		$data = $request->all();
		if ($request->hasFile('image')) {
			$file = $request->file('image');
			$name = time() . '_' . $file->getClientOriginalName();
			$file->move('uploads', $name);
			$data['image'] = 'uploads/'.$name;  
		}
		$product->update($data);

		return redirect()->route('admin.products.index');

	}
	
}
