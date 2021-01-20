@extends('frontend.layouts.master')
@section('content')

		<!-- End Breadcrumbs -->
	
		<!-- Start Checkout -->
		<section class="shop checkout section" style="background-color: #f3f5f7;">
			<form class="form" method="post" action="{{route('home.checkout_payment')}}">
				@csrf
			<div class="container">
				<div class="row"> 
					<div class="col-lg-7 col-12" style="background-color:white;">

						<div class="form-group">
					     <div class="col=md-12">
						<label><input type="radio" name="payment_method" value="0" checked=""> Tiền mặt</label>
						<div class="0 box" >You have selected <strong>red radio button</strong> so i am here</div>
					   </div>
					   <hr>
					   <div class="col=md-12">
						<label><input type="radio" name="payment_method" value="1"> Chuyển khoản</label>
						<div class="1 box" >You have selected <strong>green radio button</strong> so i am here</div>
					   </div> 
					   <hr>
						<div class="col=md-12">
						<label><input type="radio" name="payment_method" value="2"> Ngân hàng</label>
						<div class="2 box" ><a href="{{route('checkout.payment')}}">Ấn vào đây</a> <strong>để tiến hành thanh toán</strong></div>
		
						</div>
						</div>
						<div class="checkout-form">
							<h5>Thông tin thanh toán</h5>
							<!-- Form -->
								<div class="row">
									<div class="col-lg-12 col-md-12 col-12">
										<div class="form-group">
											<label>Họ và tên<span>*</span></label>
											<input type="text" name="member_name" placeholder="" required="required">
										</div>
									</div>
									
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Địa chỉ email<span>*</span></label>
											<input class="" type="email" name="email" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Số điện thoại<span>*</span></label>
											<input type="number" name="mobile" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Chọn thành phố<span>*</span></label>
											 <select  style="background-color: #f6f7fb;" id="city" class="option form-control select2" name="id_tp" required="">
											 <option value="">Chọn thành phố</option>
                                              @foreach($city as $city)
                                                <option value="{{$city->id_tp}}">{{$city->name_tp}} </option>
                                              @endforeach
                                        </select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Chọn quận huyện<span>*</span></label>
											 <select style="background-color: #f6f7fb;" id="district" class="form-control district select2" name="id_qh"required="">
                                                 
                                                 @foreach($district as $district)
                                                    <option value="{{$district->id_qh}}">{{$district->name_qh}} </option>
                                                  @endforeach
                                             </select> 
										</div>
									</div>

								
									  
                                    
									<div class="col-lg-12 col-md-12 col-12">
										<div class="form-group">
											<label>Địa chỉ cụ thể<span>*</span></label>
											<input type="text" name="address" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
									    <label>THÔNG TIN BỔ SUNG</label>
									    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn." rows="3"></textarea>
									  </div>
									</div>
									
									
									
									
								</div>
							
							<!--/ End Form -->
						</div>
					</div>


						<div class="col-lg-5 col-12">
						<div class="order-details">
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>Chi tiết sản phẩm</h2>
								<div class="content">
									@php
									    $dem=0;
									@endphp
									@if(Session('cart'))
									@foreach(Session('cart') as $key1 => $val)
									@php
									    $dem++;
									@endphp
									<div class="each_cart_{{$key1}}">
									<div class="col-md-12 col-lg-12 col-12">
                                         <h5>{{$dem}}. {{$val['title']}}</h5>
								    </div>
								    <div class="row form-group">
								    	<div  class="col-md-4">
								    		<img class="form-control" src="{{$val['image']}}">
								    	</div>
								    	<div class="col-md-8">
								    		@foreach($product_options as $product_option)
								    		@if($product_option->product_id==$val['product_id'] && $val['option_number']==$product_option->option_number)
								    		    <div class="form-row">
								    		    	<div class="col-md-6 col-lg-6 col-6">
								    		          <span>{{$product_option->parent_name}}:</span>
								    		        </div>
								    		        <div class="col-md-6 col-lg-6 col-6">
								    		          <span>{{$product_option->value}}</span>
								    		      </div>
								    		     </div>     
								    		    
								    		@endif
								    		@endforeach
								    		@foreach($option_details as $option_detail)
								    		     @if($val['option_number']==$option_detail->option_id && $val['product_id']==$option_detail->product_id)
								    		        <div class="form-row">
								    		    	<div class="col-md-6 col-lg-6 col-6">
								    		          <span>Giá:</span>
								    		        </div>
								    		        <div class="col-md-6 col-lg-6 col-6 " >
								    		          <span><strong data-price="{{$option_detail->option_price}}" class="each_price">{{$option_detail->option_price}}</strong></span>
								    		      </div>
								    		     </div> 
								    		     @endif
								    		@endforeach
								    		       
								    		<div class="form-row">
								    		    	<div class="col-md-6 col-lg-6 col-6">
								    		          <span>Số lượng:</span>
								    		        </div>
								    		        <div class="col-md-4 col-lg-4 col-4">
								    		           <input class="each_quantity" data-id_option="{{$key1}}"  value="{{$val['quantity']}}" type="number"   min="1">
								    		        </div> 
								    	
								    	    </div>
								    	     <div class="form-row">
								    		    	<div class="col-md-6 col-lg-6 col-6">
								    		          <input type="button" data-id_option="{{$key1}}" class="delete_cart" name="" value="Xoá">
								    		        </div>
								    		 </div>
								    </div>
                                   </div>
                                  </div>
								    @endforeach
								    @endif		
								
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Order Widget -->
							

							
                            <div class="content col-md-12 col-lg-12 col-12">
							<table class="table">
								  <thead>
								    <tr>
								      <th style="text-align: center;" scope="col">Sản phẩm</th>
								      <th style="text-align: center;" scope="col">Tạm tính</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <td style="text-align: center;">Tạm tính</td>
								      <td id="sub_total" style="text-align: center;">{{$total}}</td>
								      
								    </tr>
								    <tr>
								      <td style="text-align: center;">Tổng</td>
								      <td name="final_total" id="final_total" style="text-align: center;">{{$total}}</td>
								      
								    </tr>
								  </tbody>
						    </table>
							</div>	
						
							<!--/ End Order Widget -->
							<!-- Payment Method Widget -->
						<!-- 	<div class="single-widget payement">
								<div class="content">
									    <div class="col-md-12">
										<label><input type="radio" name="payment_method" value="0"> <strong>Trả tiền mặt khi nhận hàng</strong></label>
										<div class="0 box" >Chúng tôi sẽ gọi điện xác nhận và giao hàng tận nhà.</div>
									   </div>
									    <hr>
									    <div class="col-md-12">
										<label><input type="radio" name="payment_method" value="1">  <strong>Chuyển khoản ngân hàng</strong></label>
										<div class="1 box" >Ngân hàng TMCP Ngoại thương Việt Nam (Vietcombank)
															Số tài khoản: 0123456789
															Chủ tài khoản: DANG DINH MINH
															Chi nhánh …
															Nội dung chuyển khoản: Họ tên + SĐT</div>
									    </div> 
									    <hr>
										<div class="col-md-12">
										<label><input type="radio" name="payment_method" value="2"> <strong>Thanh toán qua VNPAY</strong></label>
										<div class="2 box" ><a href="{{route('checkout.payment')}}">Thanh toán trực tuyến qua VNPAY</div>
										</div>
								</div>
							</div> -->

							<div class="single-widget payement">
									<input type="text" id="coupon" name="coupon">
									<input type="button" id="apply_coupon" autocomplete="off" value="Áp dụng" class="btn btn-success">
									<div id="coupon-success" style="display: none; color:#3a559f;">Áp dụng mã giảm giá thành công</div>
									<div id="coupon-fail" style="display: none; color: red;">Áp dụng mã giảm giá không đúng hoặc không tồn tại!</div>
							</div>
							<!--/ End Payment Method Widget -->
							<!-- Button Widget -->
							<div class="single-widget">
								<div class="content">
									<div class="button">
										<button type="submit" class="btn">Đặt hàng</button>
									</div>
								</div>
							</div>
							<!--/ End Button Widget -->
						</div>
					</div>
			</div>
			</div>
			</form>
		</section>

		<!--/ End Checkout -->
		
		<!-- Start Shop Services Area  -->
		<section class="shop-services section home">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="ti-rocket"></i>
							<h4>Free shiping</h4>
							<p>Orders over $100</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="ti-reload"></i>
							<h4>Free Return</h4>
							<p>Within 30 days returns</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="ti-lock"></i>
							<h4>Sucure Payment</h4>
							<p>100% secure payment</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="ti-tag"></i>
							<h4>Best Peice</h4>
							<p>Guaranteed price</p>
						</div>
						<!-- End Single Service -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Shop Services -->
		
		<!-- Start Shop Newsletter  -->
		<section class="shop-newsletter section">
			<div class="container">
				<div class="inner-top">
					<div class="row">
						<div class="col-lg-8 offset-lg-2 col-12">
							<!-- Start Newsletter Inner -->
							<div class="inner">
								<h4>Newsletter</h4>
								<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="EMAIL" placeholder="Your email address" required="" type="email">
									<button class="btn">Subscribe</button>
								</form>
							</div>
							<!-- End Newsletter Inner -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<div>
        
		<script>
		$(document).ready(function(){
			$('.box').hide();
		    $('input[type="radio"]').click(function(){
		        var inputValue = $(this).attr("value");
		        var targetBox = $("." + inputValue);
		        $(".box").not(targetBox).hide();
		        $(targetBox).show();
		    });
		});
		</script>

		<script type="text/javascript">
			$(document).ready(function(){
				 // $('.order-details').delegate('.each_quantity','change keyup',function (){
				 // 	var sum=0;
				 // 	if($(this).parents('.form-group').find('.each_quantity').val()<1){
     //                    alert('Vui lòng nhập số lượng lờn hơn hoặc bằng 1');
     //                    $(this).parents('.form-group').find('.each_quantity').val('1');

				 // 	}else{
     //                //alert($(this).val());
     //                $(this).parents('.form-group').find('.each_price').html(
     //                $(this).parents('.form-group').find('.each_quantity').val()*$(this).parents('.form-group').find('.each_price').data('price')
     //                	);
     //                }
     //                $(".each_price").each(function(){
     //                    if($(this).text() !== "")
     //                      sum += parseFloat($(this).text(), 10);   
     //                });
     //                $("#sub_total").html(sum +'đ'); 
     //            	  var coupon_code=$('#coupon').val();
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

				 $('.each_quantity').on('change',function(){
                     var coupon_code=$('#coupon').val();
                     var id_option=$(this).data('id_option');
                     var quantity=$(this).val();
                      $.ajax({
                        url: '/api/update-cart',
                        method: 'POST',
                        data: {id_option: id_option,quantity:quantity},
                        success: function (resp) {
                            if (resp.success == true) {
                            	   $(".shopping-item").load(" .shopping-item > *");
                                    $('#sub_total').html(resp.total);
                                    $("#final_total").html(resp.total);     
                                    $('#cart-count').html(resp.count);
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
	                               var discount= parseFloat($("#sub_total").text())-res.value;	
	                               $("#final_total").html(discount+"đ");
	                               $('#coupon-success').show();
	                               $('#coupon-fail').hide();
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
	                               var discount= parseFloat($("#sub_total").text())-res.value;	
	                              $("#final_total").html(discount+"đ");
	                               $('#coupon-success').show();
	                               $('#coupon-fail').hide();
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

		



		@stop