@extends('frontend.layouts.master')
@section('content')
<!-- End Breadcrumbs -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!-- Start Checkout -->
<style type="text/css">
.detail-nh strong{
	color: #f55a42;
}

	/* The container */
}
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
  height: 50%px;
  width: 50%px;
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
<script type="text/javascript">
	 $(document).ready(function(){
          $('.cart').prop('disabled', 'disabled');
	 });
</script>
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
							<label class="container-check" style="border: solid 1px #283988;border-radius: 5px;padding: 10px 50px;width: 100%;">
							<input class="mr-2 btn-tienmat thanh-toan" type="radio" name="payment_method" value="0" checked=""  id="btn-tienmat" style="width: auto;vertical-align: middle; "><b>Tiền mặt</b>
							  <span class="checkmark"></span>
							<div class="0 box" >Chúng tôi sẽ gọi điện xác nhận và giao hàng tận nhà.</div>
							</label>
						<hr>
							<label class="container-check" style="border: solid 1px #283988;border-radius: 5px;padding: 10px 50px;width: 100%;">
							<input class="mr-2 thanh-toan" type="radio" name="payment_method" value="1" id="btn-chuyenkhoan" style="width: auto;vertical-align: middle; "><b>Chuyển khoản qua ngân hàng</b>
							  <span class="checkmark"></span>
							<div style="display: none;" class="1 box ngan-hang" >
								@foreach($banks as $key => $bank)
								  <input class="form-check-input" type="radio" name="nganhang" value="{{$key+1}}" id="input-nh{{$key+1}}">
  									<label class="form-check-label" for="input-nh{{$key+1}}" style="cursor: pointer;"><img class ="img-nh img-nh{{$key+1}} " src="{!!url('upload/config/'.$bank->images)!!}" style="width: 100px;height: 50px;object-fit: contain;border: 1px solid #c7c0bf;padding: 5px;  "></label>
  									
								  @endforeach
  									<script type="text/javascript">
  									</script>
  								@foreach($banks as $key => $bank)
									<div class="detail-nh nh{{$key+1}}" style="background-color: #E5F6FF;padding-left: 10px;display: none;margin-top:10px; line-height: 20px;padding-right: 50px;" >{{$bank->title}}
									<br>Số tài khoản: {{$bank->number}}
									<br>Chủ tài khoản: {{$bank->host_name}}
									<br>Chi nhánh {{$bank->branch}}
									<br>Nội dung chuyển khoản:<strong> {{$bank->content}}</strong></div>

									
								@endforeach
							</div>
							</label>
						<hr>
							<label class="container-check" style="border: solid 1px #283988;border-radius: 5px;padding: 10px 50px; width: 100%;">
							<input class="mr-2 thanh-toan" type="radio" name="payment_method" value="2" id="btn-nganhang" style="width: auto;vertical-align: middle;"><b>Thanh toán qua VNPAY</b>
							  <span class="checkmark"></span>
							<div style="display: none;" class="2 box" >123456</div>
							
							</label>
							<hr>
							<label class="container-check" style="border: solid 1px #283988;border-radius: 5px;padding: 10px 50px;width: 100%;">
							<input class="mr-2 thanh-toan" type="radio" name="payment_method" value="3" id="btn-tragop" style="width: auto;vertical-align: middle;"><b>Trả góp bằng PAYOO (Thẻ tín dụng)</b>
							  <span class="checkmark"></span>
							<div style="display: none;" class="3 box" >
								<div class="container">
									<div class="row">
									<div class="col-lg-4" >
								  <label for="sel1">Chọn ngân hàng:</label>
								  </div>
  									<div class="col-lg-7"  >
								  <select class="form-control-sm pick_bank" id="sel1 " style="cursor: pointer; width: 100%;">
								  	<option value="0" default>Chọn ngân hàng trả góp</option>
								    @foreach($bank_name as $key => $bank_name)
								        <option value="{{$bank_name}}">{{$bank_name}}</option>
								    @endforeach
								  </select>
								  	</div>
									</div>
									<div class="row">
									<div class="col-lg-4">
								  <label for="sel1">Chọn kì hạn trả góp:</label>
								  </div>
  									<div class="col-lg-7">
								  <select class="form-control-sm pick_month" id="sel1 " style="cursor: pointer; width: 100%;">
								  	@foreach($month_tra_gop as $key => $month_tra_gop)
								        <option value="{{$month_tra_gop}}">Trả góp trong {{$month_tra_gop}} tháng</option>
								    @endforeach
								    
								  </select>
								  	</div>
									</div>
									<div class="col-lg-10" id="table_tra_gop" style=" display: none; margin-left: 58px; ">
									<table class="table table-striped" style="border: solid #283988; font-size: 105%;">
									
									  <tbody>
									    <tr>
									      <th>Số tháng trả góp</th>
									      <td style="float:right;" id="month_tra_gop">0</td>
									    </tr>
									    <tr>
									      <th>Giá trị đơn hàng</th>
									      <td style="float:right;" id="price_tra_gop">0</td>
									    </tr>
									    <tr>
									      <th>Góp mỗi tháng</th>
									      <td style="float:right;" id="each_thang">0</td>
									    </tr>
									    <tr>
									      <th>Phí chuyển đổi</th>
									      <td style="float:right;" id="fee_tra_gop">0</td>
									    </tr>
									    <tr>
									      <th>Tổng tiền phải trả</th>
									      <td style="float:right;" id="tong_tra_gop">0</td>
									    </tr>
									   <!--  <tr>
									      <th>Chênh lệch với mua trả thẳng</th>
									      <td id="chenh_lech">Larry</td>
									    </tr> -->
									  </tbody>
									</table>
								    </div>
									</div>
								</div>
							
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
									<input class="form-control" type="text" name="member_name" placeholder="" required="required" style="  cursor: pointer;border: 1px solid #ced4da; border-radius: .50%rem;">
								</div>
							</div>
							
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<label>Địa chỉ email<span>*</span></label>
									<input class="form-control" type="email" name="email" placeholder="" required="required" style="  cursor: pointer;border: 1px solid #ced4da; border-radius: .50%rem;">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<label>Số điện thoại<span>*</span></label>
									<input class="form-control" type="text" name="mobile" placeholder="" required="required" style="  cursor: pointer;border: 1px solid #ced4da; border-radius: .50%rem;">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<label>Chọn tỉnh/ thành phố<span>*</span></label>
									<select  style="background-color: #f6f7fb;cursor: pointer;" id="city" class="option form-control select2" name="id_tp" required="">
										<option value="">Chọn tỉnh/ thành phố</option>
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
									<input class="form-control" type="text" name="address" placeholder="" required="required" style="cursor: pointer;border: 1px solid #ced4da; border-radius: .50%rem;">
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-12">
								<div class="form-group">
									<label>THÔNG TIN BỔ SUNG</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn." name="note" rows="3" style="cursor: pointer;border: 1px solid #ced4da; border-radius: .50%rem;"></textarea>
								</div>
							</div>
								<div class="col-lg-12 col-md-12 col-12">
							<div class="single-widget">
							<div class="content mb-3">
								<div class="button">
									<button type="submit" class="btn btn-dathang" style="width: 100%;background-color: #ea1621;">Đặt hàng</button>
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
					                <img class="ml-2 delete_cart" data-id_option="{{$key1}}" src="{{asset('public/icon/trash.svg')}}" style="color: #283988;width: 30px;float: right;margin-right: 5px;cursor: pointer;" >
									<div class="row form-group">
										<div  class="col-lg-5">
											<img class="form-control" src="{{$val['image']}}">
										</div>
										<div class="col-lg-7">
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
											@break;
											@elseif($val['option_number']==0)
											<div class="form-row">
												<div class="col-md-6 col-lg-6 col-6">
													<span>Giá:</span>
												</div>
												<div class="col-md-6 col-lg-6 col-6 " >
													<span><strong data-price="{{$option_detail->option_price}}" class="each_price">{{number_format($val['price'])}}</strong></span>
												</div>
											</div>
											@break;
											@endif
											@endforeach
											
											<div class="form-row">
												<div class="col-md-6 col-lg-6 col-6">
													<span>Số lượng:</span>
												</div>
												<div class="col-md-4 col-lg-4 col-4">
													<input class="each_quantity amount_x_{{$key1}}"  data-key={{$key1}} data-id_option="{{$key1}}"  value="{{$val['quantity']}}" type="number"   min="1" style="cursor: pointer;">
												</div>
												
											</div>
<!-- 											<div class="form-row">
												<div class="col-md-6 col-lg-6 col-6">
													<input type="button" data-id_option="{{$key1}}" class="delete_cart" name="" value="Xoá" style="background-color: black;color: white !important;width: 100px;text-align: center;border-radius: 5px;">
												</div>
											</div> -->
										</div>
									</div>
								</div>
								<hr>
								@endforeach
							
								
							</div>
						</div>
						<!--/ End Order Widget -->
						<!-- Order Widget -->

						<div class="single-widget payement" style="padding-left: 0px;padding-right: 15px;">
							<input placeholder="Điền mã giảm giá" type="text" id="coupon" name="coupon" style="width: 65%;">
							<input type="button" id="apply_coupon"  value="Áp dụng" class="btn  mb-4 btn-apdung">
							<div id="coupon-success" style="display: none; color:#3a559f;">Áp dụng mã giảm giá thành công</div>
							<div id="coupon-fail" style="display: none; color: red;">Áp dụng mã giảm giá không đúng hoặc không tồn tại!</div>
						</div>
						
						<div class="content col-md-12 col-lg-12 col-12">
							<table class="table" style="font-size: 120%">
									<thead>
									<tr>
										<td style="text-align: left;padding-left: 0px;" scope="col">Giá tạm tính</td>
										<td id="sub_total" style="text-align: right; color:red;" scope="col">{{number_format($total)}} đ</td>
										
									</tr>
									<tr>
										<td style="text-align: left;padding-left: 0px;">Thành tiền</td>
										<td name="final_total" id="final_total" style="text-align: right; color:red;">{{number_format($total)}} đ</td>
										
									</tr>
								</thead>
							</table>
						</div>
						<input type="hidden" id="final_total_hidden" value="{{$total}}" name="">
						
					
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
@if($is_success>0)



    <style type="text/css">
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        @media screen and (max-width: 480px) {
            .mobile-hide {
                display: none !important;
            }

            .mobile-center {
                text-align: center !important;
            }
        }

        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
    </style>

  
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-top: 30px;">
        <tr>
            <td align="center">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                   
                    <tr>
                        <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                <!-- <tr>
                                    <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 50%px;"> <img src="https://img.icons8.com/carbon-copy/100/000000/checked-checkbox.png" width="150%" height="120" style="display: block; border: 0px;" /><br>
                                        <h2 style="font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;"> Cám ơn bạn đã mua hàng! </h2>
                                    </td>
                                </tr> -->
                                <tr>
                                    <td align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                                        <p style="font-size: 16px; font-weight: 400; line-height: 24px; color: #777777;"> Cám ơn bạn đã đặt hàng! Chúng tôi đã nhận được đơn đặt hàng của bạn và sẽ sớm liên hệ với bạn. </p>
                                    </td>
                                </tr>
                                <tr><i style="font-size: 250%;" class="fas fa-check-circle"></i></tr>
                                <tr>
                                    <td align="left" style="padding-top: 20px;">
                                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <!-- <tr>
                                                <td width="50%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;"> Đơn hàng # </td>
                                                <td width="50%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;"> 2345678 </td>
                                            </tr> -->
                                            <tr>
                                                <td width="50%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> <b> Cổng thanh toán </b></td>
                                                <td width="50%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> VNPay </td>
                                            </tr>
                                            <tr>
                                                <td width="50%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"><b> Mã giao dịch</b> </td>
                                                <td width="50%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> {{$url_return['vnp_TransactionNo']}} </td>
                                            </tr>
                                            <tr>
                                                <td width="50%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> <b>Trạng thái</b> </td>
                                                <td width="50%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> @if($is_success==1)
																												   Giao dịch thành công
																												@else
																												   Giao dịch không thành công
																												@endif </td>
                                            </tr>
                                            <tr>
                                                <td width="50%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"><b>Số tiền </b> </td>
                                                <td width="50%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">{{number_format($url_return['vnp_Amount']/100)}} đ</td>
                                            </tr>
                                             <tr>
                                                <td width="50%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"><b> Thời điểm giao dịch </b></td>
                                                <td width="50%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> {{date("d-m-Y H:i:s", strtotime($url_return['vnp_PayDate']))}} </td>
                                            </tr>
                                             <tr>
                                                <td width="50%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"><b> Thông tin giao dịch </b></td>
                                                <td width="50%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;"> {{$url_return['vnp_OrderInfo']}} </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            
                            </table>
                        </td>
                    </tr>
                
                  
             
                </table>
            </td>
        </tr>
    </table>




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
@endif
<!--/ End Checkout -->

<!-- Start Shop Services Area  -->

<div>

	<script type="text/javascript">
    	$(document).ready(function(){
    		var params={};
			window.location.search
			  .replace(/[?&]+([^=&]+)=([^&]*)/gi, function(str,key,value) {
			    params[key] = value;
			  }
			);
			//alert(main);
			  var main= window.location.origin;
              var pathArray = window.location.href.split("?").pop();;
	          var url = '{{url("api/ipn_url?")}}' + pathArray;

			  //	alert(pathArray);
    		 $.ajax({
			        url:url,
			        data:{},
			        method: 'GET',
			        success:function(res){
                         
			        }
			    });
    	});
    </script>

	<script>
    $(document).ready(function(){
    	//$(".box").hide();
  
		var inputValue = $('input[name="payment_method"]:checked').val();
	    var targetBox = $("." + inputValue);
	    $(".box").not(targetBox).hide();
	    $(targetBox).show();
    	
	    $('.thanh-toan').click(function(){
	    var inputValue = $(this).attr("value");
	    var targetBox = $("." + inputValue);
	    $(".box").not(targetBox).hide();
	    $(targetBox).show();
	    });


	    $('.form-check-input').click(function(){
	    var input_nh = $(this).attr("value");
	    var detail_nh = $(".nh" + input_nh);
	    var img_nh = $(".img-nh" + input_nh);
	     $(".detail-nh").not(detail_nh).hide();
	     $(detail_nh).show();
		$(".img-nh"+input_nh).css({"border": "1px solid #283988", "border-radius": "5px","padding": "5px"});
     	$(".img-nh").not(img_nh).css({"border": "1px solid #c7c0bf","padding": "5px"});;
	    });


	    });

    </script>

    <script type="text/javascript">
    	$(document).ready(function(){
    		function formatNumber (num) {
		    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
		    }
            $('.pick_bank ,.pick_month, .each_quantity').on('change',function(){
                var bank_name = $('.pick_bank').val();
                //alert(bank_name);
                var month=$('.pick_month').val();
                if(bank_name !=0 ){
                	 $.ajax({
				        url:'{{route("api.tra_gop")}}',
				        data:{bank_name:bank_name,month:month,_token:$('#token').val()},
				        method: 'POST',
				        success:function(res){
                           $('#table_tra_gop').show();
				           var tong_tien=parseFloat($('#final_total_hidden').val());
				           var tong_tra_gop= (tong_tien / 100 * res.result['fee'] + tong_tien);
				           var chenh_lech=tong_tra_gop-tong_tien;
				           //alert(chenh_lech);
                           $('#month_tra_gop').html(month +" tháng");
                           $('#price_tra_gop').html(formatNumber(Math.round(tong_tien)) +" đ");
                           $('#each_thang').html(formatNumber(Math.round(tong_tra_gop/month)) +" đ");
                           $('#fee_tra_gop').html(formatNumber(Math.round(tong_tien/100*res.result['fee'])) +" đ");
                           $('#tong_tra_gop').html(formatNumber(Math.round(tong_tra_gop)) +" đ");
                           // $('#chenh_lech').html(formatNumber(parseFloat(tong_tra_gop)-tong_tien) +" đ");
				           }
				        });
                	}

            });
    	});
    </script>

    
	
	@stop