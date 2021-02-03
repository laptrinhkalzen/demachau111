@extends('frontend.layouts.master')
@section('content')
<style type="text/css">
	.single-product{
		margin-top: 30px;
	}
	.nav-main ul #countdown{
	text-align: right;
	font-size: 14px;
	margin-top: 0px;
	}
</style>
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<ul class="bread-list">
						<li><a href="{{route('home.index')}}">Trang chủ<i class="ti-arrow-right"></i></a></li>
						<li class="active"><a href="#">Sản phẩm khuyến mại</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->
<!-- <label>
	<input type="radio" name="payment-option" value="paypal" checked>
	<img src="paypal-mark.jpg" alt="Pay with PayPal">
</label>
<label>
	<input type="radio" name="payment-option" value="alternate">
	<div id="paypal-marks-container"></div>
</label>
<div id="paypal-buttons-container"></div>
<div id="alternate-button-container">
	<button>Pay with a different method</button>
</div> -->
<script>
// Render the PayPal marks
paypal.Marks().render('#paypal-marks-container');
// Render the PayPal buttons
paypal.Buttons().render('#paypal-buttons-container');
// Listen for changes to the radio buttons
document.querySelectorAll('input[name=payment-option]')
.forEach(function (el)  {
el.addEventListener('change', function (event)  {
// If PayPal is selected, show the PayPal button
if (event.target.value === 'paypal')  {
document.body.querySelector('#alternate-button-container')
.style.display = 'none';
document.body.querySelector('#paypal-button-container')
.style.display = 'block';
}
// If alternate funding is selected, show a different button
if (event.target.value === 'alternate')  {
document.body.querySelector('#alternate-button-container')
.style.display = 'block';
document.body.querySelector('#paypal-button-container')
.style.display = 'none';
}
});
});
// Hide non-PayPal button by default
document.body.querySelector('#alternate-button-container')
.style.display = 'none';
</script>
<!-- Product Style -->

<section class="product-area shop-sidebar shop section">
<!-- 	<div class="icon-filter container" >
		<div class="row"><i class="fa fa-filter fa-2x" aria-hidden="true" style="margin:auto;" onclick="w3_open()"><span style="font-size: 22px;">Lọc</span></i></div>
	</div> -->

	<div class="container" >
		<div class="row">
			<i class="fa fa-times fa-2x" onclick="w3_close()" style="display:none;position:fixed;top: 25px;right: 10px;z-index: 1000" id="closeFilter"></i>
		</div>
	</div>

	<div class="container">
		<div class="row">	
			
			<div class="col-lg-12 col-md-12 col-12">
				<div class="row">
					<div class="col-12 mb-2">
						<!-- Shop Top -->
							<div class="row">
									<span style="font-size: 20px;margin:auto;">___<img src="/icon/flashsale.png" style="width: 80px;">&nbspCòn lại
	                            <strong id="day" style="background-color: black;color: white;border-radius: 5px;padding:3px;"></strong>&nbspngày
                                    <strong id="hour" style="background-color: black;color: white;border-radius: 5px;padding:3px;"></strong><img src="/icon/two-dots.svg" style="width: 10px;object-fit: cover;margin-left: 3px;">
                                    <strong id="minute" style="background-color: black;color: white;border-radius: 5px;padding:3px;"></strong><img src="/icon/two-dots.svg" style="width: 10px;object-fit: cover;margin-left: 3px;">
                                    <strong id="second" style="background-color: black;color: white;border-radius: 5px;padding:3px;"></strong>
                                    &nbsp___
	                       			</span>
						<!--/ End Shop Top -->
					</div>
				</div>
				<div class="col-12">
						<!-- Shop Top -->
						<div class="">
							<div class="">
								<img style="width: 100%; height: 200px;object-fit: cover;" src="/icon/flashsale2.jpg">
							</div>
							
						</div>
						<!--/ End Shop Top -->
					</div>
			<div class="col-12">
				<div class="row show_filter">
					@foreach($flashsale_products as $flashsale_product)
					
					<div  class="col-lg-3 col-md-6 col-6">
						<div class="single-product">
							<div class="product-img flashsale-img">
								<a href="{{route('product.detail',['alias'=>$flashsale_product->alias])}}">

									@foreach( explode(',',$flashsale_product->images) as $value)
	                                <img class="default-img" src="{{$value}}" alt="#" style="width: 100%; height: 255px; ">
		                                 @php 
		                                      $discount=($flashsale_product->price - $flashsale_product->sale_price) / ($flashsale_product->price/100);
		                                 @endphp
                                    <!-- //<span class="price-dec">Giảm {{number_format($discount)}}%</span> -->
                                    <span class="out-of-stock">Giảm {{number_format($discount)}}%</span>
<!-- 									<img class="hover-img" src="{{$value}}" alt="#"> -->
	                                @break;
	                                @endforeach

								</a>
								<div class="button-head">
                                               
                                    <div style="background-color: #283988; text-align: center; width: 100%;" class="product-action-2">
                                        <a   title="Mua hàng" href="{{route('product.detail',['alias'=>$flashsale_product->alias])}}">Mua hàng</a>
                                    </div>
                                </div>
							</div>
							<div class="product-content">
								<h3 style="text-align: center;"><a href="{{route('product.detail',['alias'=>$flashsale_product->alias])}}">{{$flashsale_product->title}}</a></h3>
								<div class="product-price" style="text-align: center; color: red;">
									@if($flashsale_product->sale_price>0)
									<span class="old" style="color:#a0a0a0;">{{number_format($flashsale_product->price)}}đ</span>
									<span>{{number_format($flashsale_product->sale_price)}}đ</span>
									@else
									<span>{{number_format($flashsale_products->price)}}đ</span>
									@endif

							

									
								</div>
							</div>
						</div>
					</div>
					
					@endforeach
					
				</div>
				
<!-- -->		</div>
				 
			</div>
			<div class="text-xs-center"><ul>{!! $flashsale_products->links() !!}</ul></div>
			
		</div>
	</div>
</div>


</section>

<!--/ End Product Style 1  -->
<!-- Start Shop Newsletter  -->
<!-- <section class="shop-newsletter section">
	<div class="container">
		<div class="inner-top">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-12">
					
					<div class="inner">
						<h4>Newsletter</h4>
						<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
						<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
							<input name="EMAIL" placeholder="Your email address" required="" type="email">
							<button class="btn">Subscribe</button>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- End Shop Newsletter -->



<!-- Modal -->
<script type="text/javascript">
$(document).ready(function(){
   

// Set the date we're counting down to

var start = new Date("{{$flashsale->start}}").getTime();
var end = new Date("{{$flashsale->end}}").getTime();
//var end = {{$flashsale->end}};

var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();
// Update the count down every 1 second
var x = setInterval(function() {
// Get today's date and time
var now = new Date().getTime();

// Find the distance between now and the count down date
var distance = end - now;
// Time calculations for days, hours, minutes and seconds
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);
// Output the result in an element with id="countdown"
//document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
document.getElementById("day").innerHTML = days ;
document.getElementById("hour").innerHTML =  hours ;
document.getElementById("minute").innerHTML = minutes ;
document.getElementById("second").innerHTML = seconds ;
// If the count down is over, write some text
if (distance < 0) {
clearInterval(x);
document.getElementById("countdown").innerHTML = "EXPIRED";
}
}, 1000);

});
</script>


<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>




<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("closeFilter").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("closeFilter").style.display = "none";
}

</script>

@stop