<style type="text/css">
#sendmail{
    /*margin-left: 20px;*/
}

.fab-container {
position: fixed;
bottom: 27px;
right: 27px;
z-index: 999;
cursor: pointer;

}
.col-lg-6 .left img{
height: 55px;
float: left;
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
.single-footer .title{
font-size: 16px;
font-weight: bold;
color: #283988;
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
    <div class="contact-right">
    <a target="_blank" href="https://www.m.me/demachau"><img src="{{asset('public/icon/messenger.svg')}}" style="position: fixed;bottom:120px;right: 20px;width: 40px;border-radius: 50%;cursor: pointer;"></a>
    <a href='tel:1900 3052'><img src="{{asset('public/icon/phone.svg')}}" style="position: fixed;bottom:70px;right: 20px;width: 40px;border-radius: 50%;cursor: pointer;"></a>
    <a><img id="button-top" src="{{asset('public/icon/arrow-up.svg')}}" style="position: fixed;bottom:20px;right: 20px;width: 40px;border-radius: 50%;cursor: pointer;display: none;"></a>
    </div>
    <script type="text/javascript">
        //Khi người dùng cuộn chuột thì gọi hàm scrollFunction
    window.onscroll = function() {scrollFunction()};
    // khai báo hàm scrollFunction
    function scrollFunction() {
        // Kiểm tra vị trí hiện tại của con trỏ so với nội dung trang
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            //nếu lớn hơn 20px thì hiện button
            document.getElementById("button-top").style.display = "block";
        } else {
             //nếu nhỏ hơn 20px thì ẩn button
            document.getElementById("button-top").style.display = "none";
        }
    }
    //gán sự kiện click cho button
    document.getElementById('button-top').addEventListener("click", function(){
        //Nếu button được click thì nhảy về đầu trang
        $('html,body').animate({
            scrollTop: 0
        }, 'fast');
    });
    </script>
    <!-- Footer Top -->
    <div class="footer-top ">
        <div class="container">
            <div class="row" >
                <div  class="col-lg-5 col-md-6 col-12" >

                <a href="/"><img class="logo mt-2" src="{{$share_config->image}}" alt="logo" style="width:60%;"></a>

                    <div class="single-footer links mt-5" style=" margin-top: 2rem!important;">
                        <span class="title">{{$share_config->company_name}}</span>
                        <div class="contact">
                            <ul>
                                <li><b>Địa chỉ:</b>&nbsp {{$share_config->address}}</li>
                                <li><b>Hotline:</b>&nbsp {{$share_config->hotline}}</li>
                                <li><b>Email:</b>&nbsp {{$share_config->email}}</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="container">
                        <div class="row" >
                            <div class="col-lg-7 col-md-6 col-12 mt-5 padding-none">
                                <!-- Single Widget -->
                                <div class="single-footer links detail-company">
                                    <span class="title">THÔNG TIN CÔNG TY</span>
                                    <div class="contact">
                                        @foreach($company_infor as $infor)
                                        <ul>
                                            <a href="/"><li>{{$infor->name}}</li></a>
                                        </ul>
                                        @endforeach
                                    </div>
                                </div>
                                
                                
                            </div>
                            
                            <div class="col-lg-5 col-md-6 col-12 mt-5 support-users">
                                <!-- Single Widget -->
                                <div class="single-footer links">
                                    <span class="title">HỖ TRỢ KHÁCH HÀNG</span>
                                    <!-- Single Widget -->
                                    <div class="contact">
                                        @foreach($customer_support as $support)
                                        <ul>    
                                            <a href="{{url('customer-support/show/'.$support->id)}}"><li>{{$support->name}}</li></a>        
                                        </ul>
                                        @endforeach
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="col-lg-5 col-md-6 col-12" >
                    <div class="single-footer links mt-5 connect-me">
                                <span class="title">KẾT NỐI VỚI CHÚNG TÔI</span>
                                
                                <li style="display:flex; margin-bottom:15px; ">
                                    @foreach($social as $contact)
                                    <div class="fab-icon-holder">
                                        <a href="{{$contact->link}}" target="_blank" class="mr-2"><img style="width: 40px; border-radius: 50%;object-fit: cover;" src="{!!url('upload/config/'.$contact->image)!!}" ></a>
                                    </div>
                                    <!-- <a id="hover" href="{{$contact->link}}" target="_blank" style="margin-left: 5px;" class="fab-label abc">{!!$contact->name!!}</a> -->
                                    @endforeach
                                </li>

                                <img src="{{asset('images/payments.png')}}" class="img-bct" alt="#" style="width: 200px;">
                        </div>
<!--                         <div class="single-footer links">
                                     <img src="{{asset('images/payments.png')}}" alt="#" style="width: 160px;">
                                </div> -->

                    </div>
                <div class="col-lg-7 mt-5 payments">
                    <div class="container">
                        <div class="row" >
                            <div class="col-lg-12">
                    <!-- Single Widget -->
                            <div class="single-footer links">
                                <span class="title">PHƯƠNG THỨC THANH TOÁN</span>
                                <li style="list-style:none; margin-bottom:15px;">
                                    @foreach($payment as $payments)
                                    <a href="{{$payments->link}}" target="_blank" class="mr-2"><img style="width:77px; height:26px; background:none;" src="{!!url('upload/config/'.$payments->image)!!}" ></a>
                                    @endforeach
                                </li>
                                </div>
                            </div>
                        </div>
                    </div>                       
                </div>


                <!-- <div class="col-lg-5 col-md-6 col-12 mt-5 bo-cong-thuong">
                    <div class="single-footer links">
                        <img src="{{asset('images/payments.png')}}" alt="#" style="width: 200px;">
                    </div>
                </div>
                
                    
                <div class="col-lg-7 col-md-6 col-12 mt-5 padding-none" style="margin-bottom: 20px;">
                        <div class="single-footer links"> 
                            <span class="title">ĐĂNG KÝ NHẬN TIN</span>
                            <div class="contact">
                                <ul>
                                    <li>{{$share_config->mes_register}}</li>
                                </ul>
                            </div>
                            <div class="inner">
                                
                                <form  method="post" target="_blank" class="newsletter-inner">
                                    @csrf
                                    
                                    <input name="email1" id="email1" placeholder="Email của bạn"  type="text">
                                    <button type="button" id="sendmail" class="btn sendmail">Đăng ký</button>
                                    <div  aria-hidden="true" class="success"><span style="margin-left:14px;">Đăng ký thành công</span></div>
                                </form>
                            </div>
                    </div>
                </div> -->
                    
               

                

                    <!-- End Single Widget -->
                </div>

            </div>
        </div>
    
    <!--////////////////////////////////////////////////////////////////////////-->
    <!-- <div class="container" style="border-top: 1px solid #ebedeb; margin-top: 20px;">
        <div class="row" style="margin-top: 20px;">
            
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-footer links">
                    <span class="title">ĐĂNG KÝ NHẬN TIN</span>
                    <div class="contact">
                        <ul>
                            <li>{{$share_config->mes_register}}</li>
                        </ul>
                    </div>
                    <div class="inner">
                        
                        <form  method="post" target="_blank" class="newsletter-inner">
                            @csrf
                            
                            <input name="email1" id="email1" placeholder="Email của bạn"  type="text">
                            <button type="button" id="sendmail" class="btn sendmail">Đăng ký</button>
                            <div  aria-hidden="true" class="success"><span style="margin-left:14px;">Đăng ký thành công</span></div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div> -->
    

<!-- End Footer Top -->
<!-- <div class="copyright">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="left">
                        <img src="{{asset('images/payments.png')}}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
</footer>
<!-- <div class="giuseart-nav" style="position:absolute;z-index: 0;">
<ul>
    <li><a href="https://www.google.com/maps?ll=20.84601,106.691826&z=16&t=m&hl=vi&gl=US&mapclient=embed&daddr=59+L%E1%BA%A1ch+Tray+Ng%C3%B4+Quy%E1%BB%81n+H%E1%BA%A3i+Ph%C3%B2ng@20.84601,106.691826" rel="nofollow" target="_blank"><i class="ticon-heart"></i>Tìm đường</a></li>
    <li><a href="#" rel="nofollow" target="_blank"><i class="ticon-zalo-circle2"></i>Chat Zalo</a></li>
    <li class="phone-mobile">
        <a href="tel:19003052" rel="nofollow" class="button">
            <span class="phone_animation animation-shadow">
                <i class="icon-phone-w" aria-hidden="true"></i>
            </span>
            <span class="btn_phone_txt">Gọi điện</span>
        </a>
    </li>
    <li><a href="http://facebook.com/demachau/" rel="nofollow" target="_blank"><i class="ticon-messenger"></i>Messenger</a></li>
    <li><a href="sms:02253833383" class="chat_animation">
        <i class="ticon-chat-sms" aria-hidden="true" title="Nhắn tin sms"></i>
    Nhắn tin SMS</a>
</li>
<li class="to-top-pc">
    <a href="#" rel="nofollow">
        <i class="ticon-angle-up" aria-hidden="true" title="Quay lên trên"></i>
    </a>
</li>
</ul>
</div> -->
<!-- /End Footer Area -->

<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
<!-- <script src="{{asset('demachau/js/scrollup.js')}}"></script> -->
<!-- Onepage Nav JS -->
<script src="{{asset('demachau/js/onepage-nav.min.js')}}"></script>
<!-- Easing JS -->
<script src="{{asset('demachau/js/easing.js')}}"></script>
<!-- Active JS -->
<script src="{{asset('demachau/js/active.js')}}"></script>
<script src="{{asset('demachau/js/custom.js')}}"></script>
    <script type="text/javascript">
    $( document ).ready(function() {
        $('#sendmail').click(function(e){
        var email = $('#email1').val();
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(email=='') {
        alert('Hãy nhập email của bạn');
        }
        else{
        if(regex.test(email)==false){
        alert('Vui lòng kiếm tra lại email của bạn');
        }
        else{
        $.ajax({
        url:'{{route("api.get_email11")}}',
        method:'POST',
        data:{email: email},
        success:function(data){
        $("#email1").val("");
        $(".success").show();
        }
        });
        }
        }
        });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){

        $('.option').on('change',function(){
        var action = $(this).attr('id');
        var ma_id = $(this).val();
        var _token = $('#token').val();
        var result = '';
        if(action=='city'){
        result = 'district';
        }
        $.ajax({
        url : '{{route("api.select_address")}}',
        method: 'POST',
        data:{action:action,ma_id:ma_id,_token:_token},
        success:function(data){

        $("#district").html(data);
        }
        });
        });
        });
    </script>


    <script type="text/javascript">
        $( document ).ready(function() {
        function formatNumber (num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
            }   
        $('#add-to-cart').click(function( e ){
             var option_number=$('#option_number').val();
             var product_id=$(this).data('product_id');
             var quantity=$('#quantity').val();
             $.ajax({
                    url:'{{route("api.add_to_cart1")}}',
                    method:'POST',
                    data:{option_number:option_number,product_id : product_id,quantity:quantity,_token: $('#token').val()},
                    success:function(resp){           
                       if(resp.success == true){
                         $('.each_cart_' + id_option).fadeOut();
                           $('#sub_total').html(formatNumber(resp.total)+' đ');
                           $('.total-amount').html(formatNumber(resp.total)+' đ');
                           $('.count-sp').html(resp.count + ' Sản phẩm');
                           $('.total-count').html(resp.count);
                         alert('Thêm giỏ hàng thành công');
                       }else{
                         alert('Thêm giỏ hàng không thành công');
                       }
                    }
                });
                });

        ///

        ///
         $('#sendmail').click(function(e){
                    var email = $('#email1').val();
                    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    if(email=='') {
                        alert('Hãy nhập email của bạn');   
                    }
                    else{
                        if(regex.test(email)==false){
                            alert('Vui lòng kiếm tra lại email của bạn');
                        }
                        else{
                    $.ajax({
                        url:'{{route("api.get_email11")}}',
                        method:'POST',
                        data:{email: email},
                        success:function(data){
                            $("#email1").val("");
                            $(".success").show();
                        }
                        }
                    });
                }
            });
        });
    </script>
<script type="text/javascript">
            $(document).ready(function(){
                function formatNumber (num) {
                return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
                }
                $('.delete_cart').on('click',function(){
                     var id_option=$(this).data('id_option');
   
                      $.ajax({
                        url: '/api/delete-cart',
                        method: 'POST',
                        data: {id_option: id_option},
                        success: function (resp) {
                            if (resp.success == true) {
                                if(resp.count >0){
                                   //$(".shopping-item").load(" .shopping-item > *");
                                   $('.each_cart_' + id_option).fadeOut();
                                   $('#sub_total').html(formatNumber(resp.total)+' đ');
                                   $('.total-amount').html(formatNumber(resp.total)+' đ');
                                   $('.count-sp').html(resp.count + ' Sản phẩm');
                                   $('.total-count').html(resp.count);
                               }
                            else{   
                                   location.reload();
                                   // $('.shopping-item').html('Không có sản phẩm nào trong giỏ hàng');
                                   // $('.total-count').html(resp.count);
                            }   
                                   
                            }
                        }
                    });
                 
                });
            });
        </script>

      
    <script type="text/javascript">
        $(document).ready(function(){
            // $('.order-details').delegate('.each_quantity','change keyup',function (){
                //  var sum=0;
                //  if($(this).parents('.form-group').find('.each_quantity').val()<1){
    //                    alert('Vui lòng nhập số lượng lờn hơn hoặc bằng 1');
    //                    $(this).parents('.form-group').find('.each_quantity').val('1');
                //  }else{
    //                //alert($(this).val());
    //                $(this).parents('.form-group').find('.each_price').html(
    //                $(this).parents('.form-group').find('.each_quantity').val()*$(this).parents('.form-group').find('.each_price').data('price')
    //                  );
    //                }
    //                $(".each_price").each(function(){
    //                    if($(this).text() !== "")
    //                      sum += parseFloat($(this).text(), 10);
    //                });
    //                $("#sub_total").html(sum +'đ');
    //                var coupon_code=$('#coupon').val();
    //                $.ajax({
    //                      url:'{{route("api.apply_coupon")}}',
    //                      data:{coupon_code:coupon_code,_token:$('#token').val()},
    //                      method: 'POST',
    //                      success:function(res){
    //                        if(res.statusCode==200){
    //                           var discount= parseFloat($("#sub_total").text())-res.value;
    //                              $("#final_total").html(discount +"đ");
    //                          }
    //                         else{
    //                             $("#final_total").html(sum +'đ');
    //                         }
    //                      }
    //                });
    //        });
     function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
    }
    $('.each_quantity').on('change',function(){
    var coupon_code=$('#coupon').val();
    var id_option=$(this).data('id_option');
    var quantity=$(this).val();
    var key=$(this).data('key');
    $.ajax({
    url: '/api/update-cart',
    method: 'POST',
    data: {id_option: id_option,quantity:quantity,key:key},
    success: function (resp) {
    if (resp.success == true) {
        $('#final_total_hidden').val(resp.total);
        //$(".shopping-item").load(" .shopping-item > *");
        $('#sub_total').html(formatNumber(resp.total)+" đ");
        $("#final_total").html(formatNumber(resp.total)+" đ");
        
        $('.total-amount').html(formatNumber(resp.total)+' đ');
        $('.count-sp').html(resp.count + ' Sản phẩm');
        $('.total-count').html(resp.count);
        $('.amount_x_'+key).val(resp.each_count);
    }
    }
    });
    
    if(coupon_code){
    $.ajax({
    url:'{{route("api.apply_coupon")}}',
    data:{coupon_code:coupon_code,_token:$('#token').val()},
    method: 'POST',
    success:function(res){
    if(res.statusCode==200){
        var discount=0;
         var sub_total=parseFloat($("#sub_total").text().replace(/[^0-9]/gi, ''));
        if(res.condition <= sub_total){
       
        //alert(sub_total);
        if(res.type_coupon==1){    
           discount= sub_total - (sub_total / 100 * res.value);
        }
        if(res.type_coupon==2){
           discount= sub_total-res.value;
        }
        $("#final_total").html(formatNumber(discount)+" đ");
        $('#final_total_hidden').val(resp.total);
        $('#coupon-success').show();
        $('#coupon-fail').hide();
        }
        else{
              swal("Đơn hàng phải từ "+res.condition+" để áp dụng mã giảm giá này!");
              $('#coupon-success').hide();
              $('#coupon-fail').hide();
        }
    }
    else{
    $('#coupon-success').hide();
    $('#coupon-fail').show();
    }
    }
    });
    }
    
    });
            //check-coupon
    $('#apply_coupon').click(function(){
        var coupon_code=$('#coupon').val();
        $.ajax({
        url:'{{route("api.apply_coupon")}}',
        data:{coupon_code:coupon_code,_token:$('#token').val()},
        method: 'POST',
        success:function(res){
        if(res.statusCode==200){
        var discount=0;
        var sub_total=parseFloat($("#sub_total").text().replace(/[^0-9]/gi, ''));
        //alert(sub_total);
        if(res.condition <= sub_total){
        if(res.type_coupon==1){    
           discount= sub_total - (sub_total / 100 * res.value);
        }
        if(res.type_coupon==2){
           discount= sub_total-res.value;
        }
        $("#final_total").html(formatNumber(discount)+" đ");
        $('#final_total_hidden').val(resp.total);
        $('#coupon-success').show();
        $('#coupon-fail').hide();
        }
        else{
             swal("Đơn hàng phải từ "+res.condition+" để áp dụng mã giảm giá này!");
             $('#coupon-success').hide();
             $('#coupon-fail').hide();
        }
    
        }
        else{
        $('#coupon-success').hide();
        $('#coupon-fail').show();
        }
        }
        });
        });
        });
    </script>

</body>
</html>