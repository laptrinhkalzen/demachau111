@extends('frontend.layouts.master')
@section('content')
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<ul class="bread-list">
						<li><a href="#">Home<i class="ti-arrow-right"></i></a></li>
						<li class="active"><a href="#">Shop Grid</a></li>
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
	<div class="icon-filter container">
		<div class="row"><i class="fa fa-filter fa-2x" aria-hidden="true" style="margin:auto;" onclick="w3_open()"><span style="font-size: 22px;">Lọc</span></i></div>
	</div>

	<div class="container" >
		<div class="row">
			<i class="fa fa-times fa-2x" onclick="w3_close()" style="display:none;position:fixed;top: 25px;right: 10px;z-index: 1000" id="closeFilter"></i>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="menu-filter col-lg-3 col-md-4 col-12" id="mySidebar">
				<div class="shop-sidebar">
					<!-- Single Widget -->
<!-- 					<div class="single-widget range">
						<h3 class="title">Danh mục</h3>
						<ul class="check-box-list">
							<li>
								<label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">$20 - $50<span class="count">(3)</span></label>
							</li>
							<li>
								<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">$50 - $100<span class="count">(5)</span></label>
							</li>
							<li>
								<label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox">$100 - $250<span class="count">(8)</span></label>
							</li>

						</ul>
					</div> -->
					<!--/ End Single Widget -->
					<!-- Shop By Price -->
					@foreach($attributes as $key => $attribute)
					<div class="single-widget range"  style="height:200px; overflow: scroll;">
						@foreach($parent_attributes as $parent_attribute)
						@if($parent_attribute->id==$key)
						<h3 class="title">{{$parent_attribute->title}}</h3>
						@endif
						@endforeach
						<ul class="check-box-list">
							@foreach($attribute as $attr)
							<li>
								<label class="checkbox-inline"  for="1"><input class="attribute_filter" name="attr" value="{{$attr->id}}" id="1" type="checkbox">{{$attr->title}}<span class="count"></span></label>
							</li>
							@endforeach
						</ul>
					</div>
					@endforeach
					<!--/ End Shop By Price -->
					<!-- Single Widget -->
					<!-- <div class="single-widget recent-post">
						<h3 class="title">Recent post</h3> -->
						<!-- Single Post -->
						<!-- <div class="single-post first">
							<div class="image">
								<img src="https://via.placeholder.com/75x75" alt="#">
							</div>
							<div class="content">
								<h5><a href="#">Girls Dress</a></h5>
								<p class="price">$99.50</p>
								<ul class="reviews">
									<li class="yellow"><i class="ti-star"></i></li>
									<li class="yellow"><i class="ti-star"></i></li>
									<li class="yellow"><i class="ti-star"></i></li>
									<li><i class="ti-star"></i></li>
									<li><i class="ti-star"></i></li>
								</ul>
							</div>
						</div> -->
						<!-- End Single Post -->
						<!-- Single Post -->
						<!-- <div class="single-post first">
							<div class="image">
								<img src="https://via.placeholder.com/75x75" alt="#">
							</div>
							<div class="content">
								<h5><a href="#">Women Clothings</a></h5>
								<p class="price">$99.50</p>
								<ul class="reviews">
									<li class="yellow"><i class="ti-star"></i></li>
									<li class="yellow"><i class="ti-star"></i></li>
									<li class="yellow"><i class="ti-star"></i></li>
									<li class="yellow"><i class="ti-star"></i></li>
									<li><i class="ti-star"></i></li>
								</ul>
							</div>
						</div> -->
						<!-- End Single Post -->
						<!-- Single Post -->
						<!-- <div class="single-post first">
							<div class="image">
								<img src="https://via.placeholder.com/75x75" alt="#">
							</div>
							<div class="content">
								<h5><a href="#">Man Tshirt</a></h5>
								<p class="price">$99.50</p>
								<ul class="reviews">
									<li class="yellow"><i class="ti-star"></i></li>
									<li class="yellow"><i class="ti-star"></i></li>
									<li class="yellow"><i class="ti-star"></i></li>
									<li class="yellow"><i class="ti-star"></i></li>
									<li class="yellow"><i class="ti-star"></i></li>
								</ul>
							</div>
						</div> -->
						<!-- End Single Post -->
					<!-- </div> -->
					<!--/ End Single Widget -->
					<!-- Single Widget -->
<!-- 					<div class="single-widget category">
						<h3 class="title">Manufacturers</h3>
						<ul class="categor-list">
							<li><a href="#">Forever</a></li>
							<li><a href="#">giordano</a></li>
							<li><a href="#">abercrombie</a></li>
							<li><a href="#">ecko united</a></li>
							<li><a href="#">zara</a></li>
						</ul>
					</div> -->
					<!--/ End Single Widget -->
				</div>
			</div>
			<div class="col-lg-9 col-md-8 col-12">
				<div class="row">
					<div class="col-12">
						<!-- Shop Top -->
						<div class="shop-top">
							<div class="shop-shorter">
								<!-- <div class="single-shorter">
										<label>Show :</label>
										<select>
												<option selected="selected">09</option>
												<option>15</option>
												<option>25</option>
												<option>30</option>
										</select>
								</div> -->
								<div class="row">
	                    			<select class="form-control" id="order_by" >
										<option value="0" selected="selected">Mới nhất</option>
										<option value="1">Giá cao đến thấp</option>
										<option value="2">Giá  thấp đến cao</option>
	                                </select>
                                </div>
<!-- 								<div class="single-shorter ">
									<label>Sắp xếp theo :</label>
									<select id="order_by">
										<option value="0" selected="selected">Mới nhất</option>
										<option value="1">Giá cao đến thấp</option>
										<option value="2">Giá  thấp đến cao</option>
									</select>
								</div> -->
<!-- 								<input type="button" id="reset_filter" value="Làm mới"> -->
							</div>
							<!-- <ul class="view-mode">
									<li class="active"><a href="shop-grid.html"><i class="fa fa-th-large"></i></a></li>
									<li><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
							</ul> -->
						</div>
						<!--/ End Shop Top -->
					</div>
				</div>
				<div class="row show_filter">
					@foreach($product_cat as $product_arr1)
					<div  class="col-lg-4 col-md-6 col-12">
						<div class="single-product">
							<div class="product-img">
								<a href="{{route('product.detail',['alias'=>$product_arr1->alias])}}">
									@foreach( explode(',',$product_arr1->images) as $value)
	                                <img class="default-img" src="{{$value}}" alt="#" style="width: 100%; height: 255px;">
									<img class="hover-img" src="{{$value}}" alt="#">
	                                @break;
	                                @endforeach
								</a>
								<div class="button-head">
                                               
                                    <div style="background-color: #283988; text-align: center; width: 100%;" class="product-action-2">
                                        <a   title="Mua hàng" href="{{route('product.detail',['alias'=>$product_arr1->alias])}}">Mua hàng</a>
                                    </div>
                                </div>
							</div>
							<div class="product-content">
								<h3 style="text-align: center;"><a href="{{route('product.detail',['alias'=>$product_arr1->alias])}}">{{$product_arr1->title}}</a></h3>
								<div class="product-price" style="text-align: center; color: red;">
									@if($product_arr1->sale_price>0)
									<span class="old" style="color:#a0a0a0;">{{number_format($product_arr1->price)}}đ</span>
									<span>{{number_format($product_arr1->sale_price)}}đ</span>
									@else
									<span>{{number_format($product_arr1->price)}}đ</span>
									@endif

							

									
								</div>
							</div>
						</div>
					</div>
					@endforeach
					
				</div>
<!-- -->
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
<script type="text/javascript">
	$(document).ready(function(){
          $('.attribute_filter,#order_by').on('change',function(){
          	    //var current_url = window.location.href;
          	    //alert(current_url);
          	    var attr=[];
          	    var order_by=$('#order_by :selected').val();
          	    var cat_id={{$category_id}};	
          	    attr =  $("input[name='attr']:checked").map(function(){
				    return $(this).val();
				    }).get();
          	    $.ajax({
				    url:'{{route("api.filter_product")}}',
				    method:'POST',
				    data:{attr:attr,order_by:order_by,cat_id:cat_id,_token: $('#token').val()},
				    success:function(resp){
				    	if(resp!=1){
					        $('.show_filter').html(resp);
					        $(window).scrollTop(0);
					        //var pageUrl = '?attributes=' + attr;
							//window.history.pushState('', '', pageUrl);
				        }
				        else{
				        	location.reload();
				        }
				}
				});

          });
          
          $('#reset_filter').on('click',function(){
          	  location.reload();
          });
	});
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