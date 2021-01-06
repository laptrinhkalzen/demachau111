 <style type="text/css">
    .fab-container {
    position: fixed;
    bottom: 27px;
    right: 27px;
    z-index: 999;
    cursor: pointer;
   
}
#hover{
    margin-top:8px;
    color: black;
}
.single-footer .contact a:hover{
    color: orange;
}

.fab-icon-holder {
    width: 50px;
    height: 50px;
    border-radius: 100%;
    background:none;

    
}

.fab-icon-holder:hover {
    opacity: 0.8;
    color: #66a3ff;
}

.fab-icon-holder i {
    display: flex;
    align-items: center;
    justify-content: center;

    height: 100%;
    font-size: 25px;
    color: #ffffff;
}

.fab {
    width: 60px;
    height: 60px;
    background: none;
}

.fab-options {
    list-style-type: none;
    margin: 0;

    position: absolute;
    bottom: 70px;
    right: 0;

    opacity: 0;

    transition: all 0.3s ease;
    transform: scale(0);
    transform-origin: 85% bottom;
}

.fab:hover+.fab-options,
.fab-options:hover {
    opacity: 1;
    transform: scale(1);
}

.fab-options li {
    display: flex;
    justify-content: flex-end;
    padding: 5px;
}

.fab-label {
    padding: 2px 5px;
    align-self: center;
    user-select: none;
    white-space: nowrap;
    border-radius: 3px;
    font-size: 13px;
    background: ;
    color: #ffffff;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    margin-right: 10px;
}

.fab-label:hover{
    opacity: 0.8;
    background:#f7941d;
    
}
</style>
 <footer class="footer">
        <!-- Footer Top -->
        <div class="footer-top section">
            <div class="container">
                <div class="row">
                    

            <div  class="col-lg-3 col-md-6 col-12" >
                <div class="single-footer links">
                    <h4>CÔNG TY CỔ PHẦN THƯƠNG MẠI HÀ MINH GIANG</h4>
                      <div class="contact">
                        <ul>
                            <li>Trụ sở chính:&nbsp {{$share_config->address}}</li>
                            <li>Showroom 2:&nbsp {{$share_config->address}}</li>
                            <li>Hotline:&nbsp {{$share_config->hotline}}</li>
                            <li>Email:&nbsp {{$share_config->email}}</li>
                            <li>Website:&nbsp {{$share_config->address}}</li>
                        </ul>
                    </div>  
                

                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                          <h4>THÔNG TIN CÔNG TY</h4>
                            <div class="contact">
                            @foreach($company_infor as $infor)
                                <ul>
                                    <a href="{{$infor->link}}"><li>{{$infor->name}}</li></a>
                                </ul>
                            @endforeach 
                    </div>
                </div>
                
            </div>

                    
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Widget -->
                <div class="single-footer links">
                    <h4>HỖ TRỢ KHÁCH HÀNG</h4>
                    <!-- Single Widget -->
                    <div class="contact">
                        @foreach($customer_support as $support)
                                <ul>
                                    <a href="{{$support->link}}"><li>{{$support->name}}</li></a>
                                </ul>
                            @endforeach 
                    </div>
                    
                </div>
                <!-- End Single Widget -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Widget -->
                <div class="single-footer social">
                    <h4>TỔNG ĐÀI HỖ TRỢ</h4>
                    <!-- Single Widget -->
                    <div class="contact">
                        <ul>
                            <li>Hotline: {{$share_config->hotline}}</li>
                        </ul>
                    </div>
                    
                </div>
                <!-- End Single Widget -->
            </div>
                </div>
            </div>

        </div>
<!--////////////////////////////////////////////////////////////////////////-->
        <div class="container">
                <div class="row">
                    

            <div  class="col-lg-4 col-md-6 col-12" >
                <div class="single-footer links">
                    <h4>PHƯƠNG THỨC THANH TOÁN</h4>
                      @foreach($payment as $payments)
                        <a href="{{$payments->link}}" target="_blank" class="mr-2"><img style="width:77px; height:26px; background:none; " src="{!!url('upload/config/'.$payments->image)!!}" ></a>
                      @endforeach  
                

            </div>
                </div>

            <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                          <h4>KẾT NỐI VỚI CHÚNG TÔI</h4>
                            
                            <li style="display:flex; margin-bottom:15px; ">
                                @foreach($social as $contact)
                              <div class="fab-icon-holder">
                               <a href="{{$contact->link}}" target="_blank" class="mr-2"><img style="width: 40px; border-radius: 100%;" src="{!!url('upload/config/'.$contact->image)!!}" ></a>     
                              </div>
                              <!-- <a id="hover" href="{{$contact->link}}" target="_blank" style="margin-left: 5px;" class="fab-label abc">{!!$contact->name!!}</a> -->
                            @endforeach 
                            </li>
                            
                    </div>
                
            </div>

                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer social">
                            <h4>ĐĂNG KÝ NHẬN TIN</h4>
                            <!-- Single Widget -->
                            <div class="contact">
                                <ul>
                                    <li>{{$share_config->mes_register}}</li>
                                </ul>
                            </div>
                            
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
            
        </div>
        <!-- End Footer Top -->
        <div class="copyright">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="left">
                                <p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="right">
                                <img src="images/payments.png" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /End Footer Area -->
 
    <!-- Jquery -->
    <script src="{{asset('demachau/js/jquery.min.js')}}"></script>
    <script src="{{asset('demachau/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('demachau/js/jquery-ui.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{asset('demachau/js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('demachau/js/bootstrap.min.js')}}"></script>
    <!-- Color JS -->
    <script src="{{asset('demachau/js/colors.js')}}"></script>
    <!-- Slicknav JS -->
    <script src="{{asset('demachau/js/slicknav.min.js')}}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{asset('demachau/js/owl-carousel.js')}}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{asset('demachau/js/magnific-popup.js')}}"></script>
    <!-- Waypoints JS -->
    <script src="{{asset('demachau/js/waypoints.min.js')}}"></script>
    <!-- Countdown JS -->
    <script src="{{asset('demachau/js/finalcountdown.min.js')}}"></script>
    <!-- Nice Select JS -->
    <script src="{{asset('demachau/js/nicesellect.js')}}"></script>
    <!-- Flex Slider JS -->
    <script src="{{asset('demachau/js/flex-slider.js')}}"></script>
    <!-- ScrollUp JS -->
    <script src="{{asset('demachau/js/scrollup.js')}}"></script>
    <!-- Onepage Nav JS -->
    <script src="{{asset('demachau/js/onepage-nav.min.js')}}"></script>
    <!-- Easing JS -->
    <script src="{{asset('demachau/js/easing.js')}}"></script>
    <!-- Active JS -->
    <script src="{{asset('demachau/js/active.js')}}"></script>
</body>
</html>
