@extends('website.layouts.master')

@section('title', 'Trang chu')
@section('content')
 <!-- accont area start -->
                <div class="account_area ptb-100">
                    <div class="container">
                        <div class="row">
                           <!--login area start-->
                            <div class="col-lg-6 col-md-12">
                                <div class="account_form">
                                    <div class="login_title">
                                        <h2>Đăng nhập</h2>
                                    </div>
                                    <div class="login_form login">
                                        <form action="login.html#">
                                            <div class="login_input">
                                                <label>Nhập email hoặc tài khoản <span>*</span></label>
                                                <input type="text">
                                            </div>
                                            <div class="login_input">
                                                <label>Nhập mật khẩu<span>*</span></label>
                                                <input type="password">
                                            </div>
                                            <div class="login_submit">
                                                <button type="submit">Đăng nhập</button>
                                                <label for="remember">
                                                    <input id="remember" type="checkbox">
                                                    Ghi nhớ
                                                </label>
                                                <a href="login.html#">Quên mật khẩu?</a>
                                            </div>

                                        </form>
                                    </div>
                                 </div>    
                            </div>
                            <!--login area start-->

                            <!--register area start-->
                            <div class="col-lg-6 col-md-12">
                                <div class="login_title">
                                    <h2>Đăng ký</h2>
                                </div>
                                <div class="login_form form_register ">
                                    <form action="login.html#">
                                        <div class="login_input">
                                            <label>Nhập tài khoản email</label><span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="login_input">
                                            <label>Nhập mật khẩu<span>*</span></label>
                                            <input type="password">
                                        </div>

                                        <div class="login_submit">
                                            <button type="submit">Đăng ký</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--register area end-->
                        </div>
                    </div>
                </div>
                <!-- accont area end -->
                
@endsection