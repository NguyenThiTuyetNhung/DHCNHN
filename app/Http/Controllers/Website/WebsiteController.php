<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;

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

    public function postLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $remember = isset($request->remember) ? 1:0;
         

        if(Auth::attempt(['email' => $email, 'password' => $password],$remember)){
            return redirect()->route('homepage');
        }else{
            return back()->with('error', 'Sai tài khoản hoặc mật khẩu');
        }
        return back();
    }

    public function postRegister(Request $request){
        $input = $request->all();
        // dd($input);  
        $input['email'] = $request->email_1;
        $input['password'] = bcrypt($request->password_1);
        $input['status'] = 1;
        User::create($input);
        return back();
         
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
