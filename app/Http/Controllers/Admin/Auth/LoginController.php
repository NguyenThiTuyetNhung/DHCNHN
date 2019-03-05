<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;
use App\Admin;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    	$this->middleware('guest')->except('logout');
    	$this->middleware('guest:admin')->except('logout');
    }

    public function getLogin()
    {
    	return view('admin.login');
    }

    public function postLogin(LoginRequest $request)
    {
    	$loginInfo = [
    		'username' => $request->username, 
    		'password' => $request->password,
    		'rule' => 0 // 0: Admin
    	];
    	if (Auth::guard('admin')->attempt($loginInfo, $request->input('remember', false))) {
    		return redirect()->route('admin.products.index');
    	}
    	return redirect()->back();
    }
    
    public function logout(Request $request){
    	Auth::guard('admin')->logout();
    	return redirect()->guest('/admin/login');
    }

}