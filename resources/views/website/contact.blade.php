@extends('website.layouts.master')

@section('title', 'Trang chu')
@section('content')
<!--Contact us start-->
                   <div class="contact-us pt-110 pb-100">
                       <div class="container">
                           <div class="row">
                               <div class="col-lg-6 col-md-12 col-12">
                                   <div class="contact-us-desc">
                                        <div class="get-in-touch">
                                           <h3>Liên hệ</h3>
                                           <p>Cửa hàng phụ tùng xe máy Quang Tùng chuyên cung cấp sản phẩm chính hãng giá tốt nhất. Liên tục cập nhật sản phẩm mới, uy tín - chất lượng</p>
                                        </div>
                                        <div class="contact-social">
                                            <a href="contact-us.html#"><i class="zmdi zmdi-facebook"></i></a>
                                            <a href="contact-us.html#"><i class="zmdi zmdi-instagram"></i></a>
                                            <a href="contact-us.html#"><i class="zmdi zmdi-rss"></i></a>
                                            <a href="contact-us.html#"><i class="zmdi zmdi-twitter"></i></a>
                                            <a href="contact-us.html#"><i class="zmdi zmdi-pinterest"></i></a>
                                        </div>
                                        <div class="contact-address">
                                            <h3>Địa chỉ - Thông tin liên hệ</h3>
                                            <div class="contact-list">
                                                <div class="single-contact-list">
                                                    <div class="contact-icon">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                    </div>
                                                    <div class="conatct-desc">
                                                        <p>Liên Nghĩa - Văn Giang - Hưng Yên </p>
                                                    </div>
                                                </div>
                                                <div class="single-contact-list">
                                                    <div class="contact-icon">
                                                        <i class="fas fa-phone-volume"></i>
                                                    </div>
                                                    <div class="conatct-desc">
                                                        <p>0358327971 <br> 0982685598</p>
                                                    </div>
                                                </div>
                                                <div class="single-contact-list">
                                                    <div class="contact-icon">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </div>
                                                    <div class="conatct-desc">
                                                        <p>Snowrainbow</p>
                                                    </div>
                                                </div>
                                                <div class="single-contact-list">
                                                    <div class="contact-icon">
                                                     <i class="fas fa-envelope-open-text"></i>
                                                    </div>
                                                    <div class="conatct-desc">
                                                        <p>quangtung@gmail.com<br> snowrainbow472@gmail.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                               </div>
                               <div class="col-lg-6 col-md-12 col-12">
                                   <div class="map-area">
                                      <div id="googleMap" style="width:100%;height:460px;"></div>
                                   </div>
                               </div>
                           </div>

                           <!--Conatct form start-->
                           <div class="row">
                               <div class="col-lg-10 offset-lg-1 col-md-12">
                                   <div class="contact-form-inner pt-95">
                                        <div class="contact-form-titile text-center">
                                            <h3>Gửi tin nhắn cho chúng tôi</h3>    
                                        </div>
                                       <div class="contat_form_inner mt-60">
                                            <form id="contact-form" action="https://d29u17ylf1ylz9.cloudfront.net/exporso-v3-tf/exporso/assets/mail.php" method="POST">
                                                <div class="single-contact-form d-flex">
                                                    <div class="contact-box">
                                                        <input type="text" placeholder="Your Name *" name="name">
                                                    </div>
                                                    <div class="contact-box">
                                                        <input type="text" placeholder="Phone *" name="phone">
                                                    </div>
                                                </div>
                                                <div class="single-contact-form">
                                                    <div class="contact-box subject">
                                                        <input type="email" placeholder="Email*" name="email">
                                                    </div>
                                                </div>
                                                <div class="single-contact-form">
                                                    <div class="contact-box message">
                                                        <textarea name="message" placeholder="Message*"></textarea>
                                                    </div>
                                                </div>
                                                <div class="contact-btn">
                                                    <button type="submit">Gửi</button>
                                                </div>

                                                <p class="form-messege"></p>

                                            </form>
                                       </div>
                                   </div>
                               </div>

                           </div>
                           <!--Conatct form end-->
                        </div>
                   </div>
                   <!--Contact us end-->

@endsection