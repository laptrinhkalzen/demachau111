@extends('frontend.layouts.master')
@section('content')
    <!-- Start Contact -->
    <section id="contact-us" class="contact-us section mt-4">
        <div class="container">
                <div class="contact-head">
                    <div class="row">
                        
                        <div class="col-lg-6 col-12" >
                            <div class="single-head" style="background-color: white;">
                                <div class="title">
                                    
                                    <h3>CÔNG TY CPTM HÀ MINH GIANG</h3>
                                </div>
                               
                                <div class="single-info">
                                     <div class="row">
                                         <div class="col-md-2 col-2">
                                    <i class="fa fa-phone" style="background:#283988;"></i>
                                   </div>
                                            <div class="col-md-10 col-10">
                                                <h4 class="title">Hotline: </h4>
                                            <ul>
                                                <li>{{$share_config->hotline}}</li>
                                                <li>{{$share_config->phone}}</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="single-info">
                                     <div class="row">
                                         <div class="col-md-2 col-2">
                                    <i class="fa fa-envelope-open" style="background:#283988;"></i>
                                   </div>
                                            <div class="col-md-10 col-10">
                                            <h4 class="title">Email:</h4>
                                            <ul>
                                                <li><a>{{$share_config->email}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-info">
                                     <div class="row">
                                         <div class="col-md-2 col-2">
                                    <i class="fa fa-location-arrow" style="background:#283988;"></i>
                                   </div>
                                            <div class="col-md-10 col-10">
                                            <h4 class="title">Showroom:</h4>
                                            <ul>
                                                <li>{{$share_config->address}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-lg-6 col-12" >
                            <div class="form-main" style="background-color: white;">
                                <div class="title">
                                    
                                    <h3>ĐỂ LẠI LỜI NHẮN CHO CHÚNG TÔI</h3>
                                </div>
                                <form class="form" method="post" action="{{route('contact.store')}}">
                                    {{csrf_field()}} 
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Tên của bạn<span>*</span></label>
                                                <input name="name" type="text" placeholder="" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Điện thoại<span>*</span></label>
                                                <input name="mobile" type="text" placeholder="" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <div class="form-group">
                                                <label>Email của bạn<span>*</span></label>
                                                <input name="email" type="email" placeholder="" required="">
                                            </div>  
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group message">
                                                <label>Nội dung<span>*</span></label>
                                                <textarea name="content" placeholder="" required=""></textarea>
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
    <section class="mt-4">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.6455466017223!2d106.68963731457649!3d20.84601499936849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7b13dd35972d%3A0x284f477fbdddee0e!2zxJDhu4dtIMOBIENow6J1!5e0!3m2!1svi!2s!4v1610944019828!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>

    <!--/ End Map Section -->
 
   
</body>
@stop