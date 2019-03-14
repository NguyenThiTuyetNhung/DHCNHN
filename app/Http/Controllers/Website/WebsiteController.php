<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class WebsiteController extends Controller
{
    public function homepage()
    {
    	$products = Product::all();
    	return view('website.homepage', compact('products'));
    }

    public function getProductPage()
    {
    	return view('website.product-list');
    }
    
    public function getContact()
    {
    	return view('website.contact');
    }

    public function getLogin()
    {
    	return view('website.login');
    }
    public function getProductDetail($id)
    {
        $product = Product::findOrFail($id);
        return view('website.product-detail', compact('product'));
    }
     public function getSize($id)
    {
        $size = Size::findOrFail($id);
        return view('website.size', compact('size'));
    }
}
