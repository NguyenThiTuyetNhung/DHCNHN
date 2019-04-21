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
                                        <form action="{{route('product.login.post')}}" method="post">
                                            @csrf
                                            <div class="login_input">
                                                <label>Nhập email hoặc tài khoản <span>*</span></label>
                                                <input type="text" name="email">
                                            </div>
                                            <div class="login_input">
                                                <label>Nhập mật khẩu<span>*</span></label>
                                                <input type="password" name="password">
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
                                    <form action="{{ route('registerpost') }}" method="post">
                                        <div class="login_input">
                                            <label>Nhập tài khoản email</label><span>*</span></label>
                                            <input type="text" name="email_1">
                                        </div>
                                        <div class="login_input">
                                            <label>Nhập mật khẩu<span>*</span></label>
                                            <input type="password" name="password_1">
                                        </div>
                                        <div class="login_input">
                                            <label>Nhập tên đầy đủ<span>*</span></label>
                                            <input type="text" name="name">
                                        </div>
                                        <div class="login_input">
                                            <label>Nhập tên tài khoản<span>*</span></label>
                                            <input type="text" name="username">
                                        </div>
                                         <div class="login_input">
                                            <label>Nhập ngày tháng năm sinh<span>*</span></label>
                                            <input type="date" name="birthday">
                                        </div>
                                         <div class="login_input">
                                            <label>Nhập giới tính<span>*</span></label>
                                            <select name="gender">
                                                <option value="0">nam</option>
                                                <option value="1">nữ</option>
                                            </select>
                                        </div>
                                        <div class="login_input">
                                            <label>Địa chỉ<span>*</span></label>
                                            <input type="text" name="address">
                                        </div>
                                         <div class="login_input">
                                            <label>Số điện thoại<span>*</span></label>
                                            <input type="text" name="phone">
                                        </div>

                                        <div class="login_submit">
                                            <button type="submit">Đăng ký</button>
                                            <label for="remember">
                                                    <input id="remember" type="checkbox">
                                                    Ghi nhớ
                                                </label>
                                        </div>
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                            <!--register area end-->
                        </div>
                    </div>
                </div>
                <!-- accont area end -->
                
@endsection