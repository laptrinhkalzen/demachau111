@extends('frontend.layouts.master')
@section('content')
<!-- End Breadcrumbs -->

<!-- Start Checkout -->
<style type="text/css">
	/* The container */
.container-check {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container-check input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 5px;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container-check:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container-check input:checked ~ .checkmark {
  background-color: #283988;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container-check input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container-check .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
</style>
@if(Session('cart'))
<section class="shop checkout section" style="background-color: #f3f5f7;">
	<form class="form" method="post" action="{{route('home.checkout_payment')}}">
		@csrf
		<div class="container">
			<div class="row mt-5">
				<div class="col-lg-7 col-12" >
					<div class="row">
					<div class="col-md-12 col-lg-12" style="background-color:white;">	
					<p class="mt-4 mb-3" style="font-size:18px;"><span class="mr-2" style="border: solid 1px #283988; border-radius: 50%;padding: 0 10px;background-color: #283988;color: white;font-size: 32px;">1</span><b>Hình thức thanh toán</b></p>
					<div class="form-group">
							<label class="container-check" style="border: solid 1px #283988;border-radius: 5px;">
							<input class="mr-2 btn-tienmat" type="radio" name="payment_method" value="0" checked="" id="btn-tienmat" style="width: auto;vertical-align: middle; "><b>Tiền mặt</b>
							  <span class="checkmark"></span>
							<div class="0 box" >Chúng tôi sẽ gọi điện xác nhận và giao hàng tận nhà.</div>
							</label>
						<hr>
							<label class="container-check" style="border: solid 1px #283988;border-radius: 5px;">
							<input class="mr-2" type="radio" name="payment_method" value="1" id="btn-chuyenkhoan" style="width: auto;vertical-align: middle; "><b>Chuyển khoản qua ngân hàng</b>
							  <span class="checkmark"></span>
							<div class="1 box" >Ngân hàng TMCP Ngoại thương Việt Nam (Vietcombank)
								<br>Số tài khoản: 0123456789
								<br>Chủ tài khoản: DANG DINH MINH
								<br>Chi nhánh …
							<br>Nội dung chuyển khoản: Họ tên + SĐT</div>
							</label>
						<hr>
							<label class="container-check" style="border: solid 1px #283988;border-radius: 5px;">
							<input class="mr-2" type="radio" name="payment_method" value="2" id="btn-nganhang" style="width: auto;vertical-align: middle;"><b>Ngân hàng</b>
							  <span class="checkmark"></span>
							<div class="2 box" >Thanh toán qua VNPAY.</div>
							
							</label>
						</div>
					</div>
					<div class="col-lg-12 col-12 mt-4" style="background-color:white;">
					<div class="checkout-form">
						<p class="mt-4 mb-3" style="font-size:18px;"><span class="mr-2" style="border: solid 1px #283988; border-radius: 50%;padding: 0 10px;background-color: #283988;color: white;font-size: 32px;">2</span><b>Thông tin thanh toán</b></p>
						<!-- Form -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-12">
								<div class="form-group">
									<label>Họ và tên<span>*</span></label>
									<input type="text" name="member_name" placeholder="" required="required" style="  cursor: pointer;">
								</div>
							</div>
							
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<label>Địa chỉ email<span>*</span></label>
									<input class="" type="email" name="email" placeholder="" required="required" style="  cursor: pointer;">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<label>Số điện thoại<span>*</span></label>
									<input type="text" name="mobile" placeholder="" required="required" style="  cursor: pointer;">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<label>Chọn thành phố<span>*</span></label>
									<select  style="background-color: #f6f7fb;cursor: pointer;" id="city" class="option form-control select2" name="id_tp" required="">
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
									<select style="background-color: #f6f7fb;cursor: pointer;" id="district" class="form-control district select2" name="id_qh"required="">
										
										@foreach($district as $district)
										<option value="{{$district->id_qh}}">{{$district->name_qh}} </option>
										@endforeach
									</select>
								</div>
							</div>
							
							
							
							<div class="col-lg-12 col-md-12 col-12">
								<div class="form-group">
									<label>Địa chỉ cụ thể<span>*</span></label>
									<input type="text" name="address" placeholder="" required="required" style="cursor: pointer;">
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-12">
								<div class="form-group">
									<label>THÔNG TIN BỔ SUNG</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn." name="note" rows="3" style="cursor: pointer;"></textarea>
								</div>
							</div>
								<div class="col-lg-12 col-md-12 col-12">
							<div class="single-widget">
							<div class="content mb-3">
								<div class="button">
									<button type="submit" class="btn btn-dathang" style="width: 100%;background-color: #ea1621;border-radius: 5px;">Đặt hàng</button>
								</div>
							</div>
						</div>
						</div>
							
							
							
						</div>
						
						<!--/ End Form -->
					</div>
				</div>
				</div>
			</div>
		
				<div class="col-lg-5 col-12">
					<div class="order-details" style="margin-top: 0px;padding-left: 15px;">
						<!-- Order Widget -->
						<div class="single-widget">
							<p class="mt-4 mb-3" style="font-size:18px;"><span class="mr-2" style="border: solid 1px #283988; border-radius: 50%;padding: 0 10px;background-color: #283988;color: white;font-size: 32px;">3</span><b>Đơn hàng của bạn</b></p>
							<div class="content">
								@php
								$dem=0;
								@endphp
								
								@foreach(Session('cart') as $key1 => $val)
								@php
								$dem++;
								@endphp
								<div class="each_cart_{{$key1}}">
									<a class="mt-4"><b>{{$dem}}. {{$val['title']}}</b></a>
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
													<span><strong data-price="{{$option_detail->option_price}}" class="each_price">{{number_format($val['price'])}}</strong></span>
												</div>
											</div>
											@endif
											@endforeach
											
											<div class="form-row">
												<div class="col-md-6 col-lg-6 col-6">
													<span>Số lượng:</span>
												</div>
												<div class="col-md-4 col-lg-4 col-4">
													<input class="each_quantity" data-id_option="{{$key1}}"  value="{{$val['quantity']}}" type="number"   min="1" style="cursor: pointer;">
												</div>
												
											</div>
											
											<div class="form-row">
												<div class="col-md-6 col-lg-6 col-6">
													<input type="button" data-id_option="{{$key1}}" class="delete_cart del-checkout" name="" value="Xoá" style="background-color: black;color: white !important;width: 60%;border-radius: 5px; ">
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							
								
							</div>
						</div>
						<!--/ End Order Widget -->
						<!-- Order Widget -->

						<div class="single-widget payement">
							<input placeholder="Điền mã giảm giá" type="text" id="coupon" name="coupon">
							<input type="button" id="apply_coupon"  value="Áp dụng" class="btn  mb-4 btn-apdung">
							<div id="coupon-success" style="display: none; color:#3a559f;">Áp dụng mã giảm giá thành công</div>
							<div id="coupon-fail" style="display: none; color: red;">Áp dụng mã giảm giá không đúng hoặc không tồn tại!</div>
						</div>
						
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
										<td id="sub_total" style="text-align: center; color:red;">{{number_format($total)}} đ</td>
										
									</tr>
									<tr>
										<td style="text-align: center;">Tổng</td>
										<td name="final_total" id="final_total" style="text-align: center; color:red;">{{number_format($total)}} đ</td>
										
									</tr>
								</tbody>
							</table>
						</div>
						
					
						<!--/ End Payment Method Widget -->
						<!-- Button Widget -->

						<!--/ End Button Widget -->
					</div>
				</div>


			</div>
		</div>
	</form>
</section>
@else
<section class="product-area shop-sidebar shop section">
	


		<div class="row" style="height: auto;">
			
			<div class="container" style="margin-top: auto; margin-bottom: auto;">
				<div class="row">
				<img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/62d2399b89039bd1dc90ca2d50d3e802.png" style="margin:auto;width: 300px;object-fit: cover;">
				</div>
			    <h3 class="mb-5" style="text-align: center;">Không có sản phẩm nào trong giỏ hàng.</h3>
			</div>
		</div>

</section>
@endif
<!--/ End Checkout -->

<!-- Start Shop Services Area  -->

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
	 function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
    }
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
	    //$(".shopping-item").load(" .shopping-item > *");
		$('#sub_total').html(formatNumber(resp.total)+" đ");
		$("#final_total").html(formatNumber(resp.total)+" đ");
		$('.total-amount').html(formatNumber(resp.total)+' đ');
	    $('.count-sp').html(resp.count + ' Sản phẩm');
	    $('.total-count').html(resp.count);
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
	$("#final_total").html(formatNumber(discount)+" đ");
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
		$("#final_total").html(formatNumber(discount)+"đ");
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