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
    color: white;
}


.fab-icon-holder {
    width: 50px;
    height: 50px;
    border-radius: 100%;
    background:none;

    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
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
                    <div class="col-lg-5 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer about">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo2.png" alt="#"></a>
                            </div>
                            <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
                            <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
                        </div>
                        <!-- End Single Widget -->
                    </div>

            <div  class="col-lg-2 col-md-6 col-12" >
                <div class="single-footer links">
                <h4>Find Us</h4>
               
                
                @foreach($social as $contact)
                <li style="display:flex; margin-bottom:15px; width: 150px; ">
                  <div class="fab-icon-holder">
                   <a href="{{$contact->link}}" target="_blank" class="mr-2"><img style="width: 40px;" src="{!!url('upload/config/'.$contact->image)!!}" ></a>     
                  </div>
                  <a id="hover" href="{{$contact->link}}" target="_blank" style="margin-left: 5px;" class="fab-label abc">{!!$contact->name!!}</a>
                </li>
                @endforeach 

            </div>
                </div>

            <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Payment Method</h4>
                      @foreach($payment as $payments)
                        <a href="{{$payments->link}}" target="_blank" class="mr-2"><img style="width:70px; height:50px; background:none; border-radius:5px;;" src="{!!url('upload/config/'.$payments->image)!!}" ></a>
                      @endforeach  
                    </div>
                
            </div>

                    
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer social">
                            <h4>Get In Tuch</h4>
                            <!-- Single Widget -->
                            <div class="contact">
                                <ul>
                                    <li>NO. 342 - London Oxford Street.</li>
                                    <li>012 United Kingdom.</li>
                                    <li>info@eshop.com</li>
                                    <li>+032 3456 7890</li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-flickr"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
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
    <script src="{{('demachau/js/jquery.min.js')}}"></script>
    <script src="{{('demachau/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{('demachau/js/jquery-ui.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{('demachau/js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{('demachau/js/bootstrap.min.js')}}"></script>
    <!-- Color JS -->
    <script src="{{('demachau/js/colors.js')}}"></script>
    <!-- Slicknav JS -->
    <script src="{{('demachau/js/slicknav.min.js')}}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{('demachau/js/owl-carousel.js')}}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{('demachau/js/magnific-popup.js')}}"></script>
    <!-- Waypoints JS -->
    <script src="{{('demachau/js/waypoints.min.js')}}"></script>
    <!-- Countdown JS -->
    <script src="{{('demachau/js/finalcountdown.min.js')}}"></script>
    <!-- Nice Select JS -->
    <script src="{{('demachau/js/nicesellect.js')}}"></script>
    <!-- Flex Slider JS -->
    <script src="{{('demachau/js/flex-slider.js')}}"></script>
    <!-- ScrollUp JS -->
    <script src="{{('demachau/js/scrollup.js')}}"></script>
    <!-- Onepage Nav JS -->
    <script src="{{('demachau/js/onepage-nav.min.js')}}"></script>
    <!-- Easing JS -->
    <script src="{{('demachau/js/easing.js')}}"></script>
    <!-- Active JS -->
    <script src="{{('demachau/js/active.js')}}"></script>
</body>
</html>
