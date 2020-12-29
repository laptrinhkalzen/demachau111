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
<<<<<<< HEAD

                    
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
=======
<<<<<<< Updated upstream
            
<div class="row d-flex justify-content-center" style="align-items:center;">
<div class="col-12 border-bottom mb-3" style="border-color: #7F7D7D!important;">
</div>
<div class="col-lg-8 col-md-8 col-sm-12 col-12  pull-left">
<div class="font-weight-bold mb-2">Công ty nội thất Hưng Gia</div>
<div class="mb-2">
Địa chỉ: {!!$share_config->address!!}
</div>
<div class="mb-4">

	<div class="d-lg-inline-block mb-2 mb-lg-0">
		<a rel="nofollow" href="tel:{!!$share_config->hotline!!}"><i class="fas fa-phone-alt mr-2"></i>Hotline: {!!$share_config->hotline!!}</a>
	</div>
	<div class="d-lg-inline-block mb-2 mb-lg-0">
		<a rel="nofollow" href="mail:{!!$share_config->email!!}"><i class="fas fa-envelope mr-2"></i>Email: {!!$share_config->email!!}</a>
	</div>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-4 col-4  text-center">
<a rel="nofollow" href='javascript:void(0)'><img alt='' title='' src="{!!asset('images/logoSaleNoti3860.png?v=1')!!}" class="img-fluid" /></a>
</div>
<div class="col-lg-2 col-md-2 col-sm-4 col-4 text-center">
<a href="javascript:void(0)">
<img src="{!!asset('images/dmcae209.png?v=1.0.0')!!}" class="img-fluid" />
</a>
</div>
</div>
</div>
<div class="bottom-footer py-3 text-right" style="background-color: #13295B">
<div class="container">
<a rel="nofollow" href="javascript:void(0)">
<img src="{!!asset('images/visa-ice209.svg?v=1.0.0')!!}" class="img-fluid" />
</a>
<a rel="nofollow" href="javascript:void(0)">
<img src="{!!asset('images/paypal-ice209.svg?v=1.0.0')!!}" class="img-fluid" />
</a>
<a rel="nofollow" href="javascript:void(0)">
<img src="{!!asset('images/master-ice209.svg?v=1.0.0')!!}" class="img-fluid" />
</a>
<a rel="nofollow" href="javascript:void(0)">
<img src="{!!asset('images/express-ice209.svg?v=1.0.0')!!}" class="img-fluid" />
</a>
</div>
</div>
</footer>
<!-- //Thêm giỏ hàng -->
<script type="text/javascript">
            $(document).ready(function(){

            	$( "#cart-count" ).mouseover(function() {
				  $( "#cart-count").append( "<div>Handler for .mouseover() called.</div>" );
				});
               $('#add-to-cart1').click(function( e ){
               	     var product_id=$(this).data('product_id');
				     var quantity=$('#quantity').val();
		
				     $.ajax({
				            url:'{{route("api.add_to_cart1")}}',
				            method:'POST',
				            data:{product_id : product_id,quantity:quantity},
				            success:function(resp){
				      
				               if(resp.success == true){
				               alert(resp.cart);
				               
				                 $('#cart-count').html(resp.count);
				                 $('#total').html(resp.total +' đ');
				                 alert('Thêm giỏ hàng thành công');
				               }else{
				                 alert('Thêm giỏ hàng không thành công');
				               }
				            }
				        });
	            });
	       });
</script>
<script type="text/javascript" src="{!!asset('js/jquery-3.3.1.mine209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/jquery-ui.mine209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/popper.mine209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/bootstrap.mine209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/swiper.mine209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/wow.mine209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/momentJSe209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/daterangepickere209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/paginationJSe209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/jstree.mine209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/appe209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/coree209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/menuControllere209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/orderControllere209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/extraControllere209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/yall.mine209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/jquery.lazye209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/orderController656b.js?v=xvJOuv461PL712KfIecqpKZraw63_wXcs-Gpk6RoFSU')!!}"></script>
<script type="text/javascript" src="{!!asset('js/momentJS8d01.js?v=8rj4CnOaFIZlLaVMN4pprckx3lvc1KfRhGuM0MtspBg')!!}"></script>
<script type="text/javascript" src="{!!asset('js/daterangepicker8d85.js?v=iOVs1FytPbiP3HcnhtFMzo0MwYebwD5OVr6Rnf2a0ik')!!}"></script>
<script type="text/javascript" src="{!!asset('js/paginationJS270f.js?v=_GywrNV0fMW9l0mnOa6Gz8zbqp7_d5F3yBpGH6xQmEM')!!}"></script>
<script type="text/javascript" src="{!!asset('js/blogDetailController16e5.js?v=jeDzoTlSznrquScD36vjEo8fS4cC-UKkPnTH1HmuiwQ')!!}"></script>
<script type="text/javascript" src="{!!asset('js/productDetailController88a2.js?v=QePaWHwNjOh9moaVkc8tT2VLuGo6eQ_JR_aZ76R4hY8')!!}"></script>
=======
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
    <script src="{{asset('demachau/js/custom.js')}}"></script>
</body>
</html>
>>>>>>> Stashed changes
>>>>>>> origin/main
