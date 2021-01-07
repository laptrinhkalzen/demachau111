@extends('frontend.layouts.master')
@section('content')
    <!-- Start Contact -->
    <section id="contact-us" class="contact-us section">
        <div class="container">
                <div class="contact-head">
                    <div class="row">
                        
                        <div class="col-lg-6 col-12">
                            <div class="single-head">
                                <div class="title">
                                    
                                    <h3>CÔNG TY CPTM HÀ MINH GIANG</h3>
                                </div>
                                <div class="single-info">
                                    <i class="fa fa-phone"></i>
                                    <h4 class="title">Hotline: </h4>
                                    <ul>
                                        <li>{{$share_config->hotline}}</li>
                                        <li>{{$share_config->phone}}</li>
                                    </ul>
                                </div>
                                <div class="single-info">
                                    <i class="fa fa-envelope-open"></i>
                                    <h4 class="title">Email:</h4>
                                    <ul>
                                        <li><a>{{$share_config->email}}</a></li>
                                        
                                    </ul>
                                </div>
                                <div class="single-info">
                                    <i class="fa fa-location-arrow"></i>
                                    <h4 class="title">Showroom:</h4>
                                    <ul>
                                        <li>{{$share_config->address}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="form-main">
                                <div class="title">
                                    
                                    <h3>ĐỂ LẠI LỜI NHẮN CHO CHÚNG TÔI</h3>
                                </div>
                                <form class="form" method="post" action="{{route('contact.store')}}">
                                    {{csrf_field()}} 
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Tên của bạn<span>*</span></label>
                                                <input name="name" type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Điện thoại<span>*</span></label>
                                                <input name="mobile" type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <div class="form-group">
                                                <label>Email của bạn<span>*</span></label>
                                                <input name="email" type="email" placeholder="">
                                            </div>  
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group message">
                                                <label>Nội dung<span>*</span></label>
                                                <textarea name="content" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div style="text-align: center;" class="button">
                                                <input type="submit" class="btn " value="GỬI ĐI">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @if(Session('success'))
                                <div style="text-align: center; "  aria-hidden="true" class="success"><span style="color: green;">Đăng ký thành công</span></div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--/ End Contact -->
    
    <!-- Map Section -->
    <div class="map-section">
        <div id="myMap"></div>
    </div>
    <!--/ End Map Section -->
 
   
</body>
@stop