@extends('frontend.layouts.master')
@section('content')
<style type="text/css">
  .content_product {
  width: auto;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 5;
  overflow: hidden;

}
ul,ul li{
  list-style:square;
  padding:0;
  margin:0;
}

body {
background-color: #7B1FA2
}
hr.ke_vach {
border-top: 0.5px dashed grey;
}
.carousel-inner img {
width: 100%;  
height: 100%
}
#custCarousel .carousel-indicators {
position: static;
margin-top: 20px
}
#custCarousel .carousel-indicators>li {
width: 100px
}
#custCarousel .carousel-indicators li img {
display: block;
opacity: 0.5
}
#custCarousel .carousel-indicators li.active img {
opacity: 1
}
#custCarousel .carousel-indicators li:hover img {
opacity: 0.75
}
.carousel-item img {
width: 80%
}
#add-to-cart:hover {
background-color: #A91E23 !important;
}
.btn-buy:hover {
background-color: #292BB7 !important;
}
input,
textarea {
  border: 1px solid #eeeeee;
  box-sizing: border-box;
  margin: 0;
  outline: none;
  padding: 10px;
}

input[type="button"] {
  -webkit-appearance: button;
  cursor: pointer;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
}

.input-group {
  clear: both;
  margin-top: 25px;
  position: relative;
}

.input-group input[type='button'] {
  background-color: #eeeeee;
  min-width: 38px;
  width: auto;
  transition: all 300ms ease;
}

.input-group .button-minus,
.input-group .button-plus {
  font-weight: bold;
  height: 38px;
  padding: 0;
  width: 38px;
  position: relative;
}

.input-group .quantity-field {
  position: relative;
  height: 38px;
  left: -6px;
  text-align: center;
  width: 62px;
  display: inline-block;
  font-size: 13px;
  margin: 0 0 5px;
  resize: vertical;
}

.button-plus {
  left: -13px;
}

input[type="number"] {
  -moz-appearance: textfield;
  -webkit-appearance: none;
}

</style>





<!--////////////////////////////////////////////////////////////////////////////////////////////-->
<style type="text/css">
  .carousel {
  position: relative;
}
.carousel-item img {
  object-fit: cover;
}
#carousel-thumbs {
  background: rgba(255,255,255,.3);
  bottom: 0;
  left: 0;
  padding: 0 50px;
  right: 0;
  top:10px;
 
}
#carousel-thumbs img {
/*  border: 5px solid transparent;*/
  cursor: pointer;
}
#carousel-thumbs img:hover {
  border-color: rgba(255,255,255,.3);
}
#carousel-thumbs .selected img {
  border-color: #fff;
}
.carousel-control-prev,
.carousel-control-next {
  width: 50px;
  background-size:  50%;


}
@media all and (max-width: 767px) {
  .carousel-container #carousel-thumbs img {
    border-width: 3px;
  }
}
@media all and (min-width: 576px) {
  .carousel-container #carousel-thumbs {
    /*position: absolute;*/
  }
}
@media all and (max-width: 576px) {
  .carousel-container #carousel-thumbs {


    background: white;

   




  }
}
</style>

<style type="text/css">
  .content_product{
    margin-left: 30px;
    /*position: relative;
    */
  }
  .hide{
   display:none;
}
</style>





</style>

<style type="text/css">
.rating {
    border: none;
}

.rating>[id^="star"] {
    display: none
}

.rating>label:before {
    margin: 5px;
    font-size: 2.25em;
    font-family: FontAwesome;
    display: inline-block;
    content: "\f005"
}

.rating>.half:before {
    content: "\f089";
    position: absolute
}

.rating>label {
    color: #ddd;
    float: right
}

.rating>[id^="star"]:checked~label,
.rating:not(:checked)>label:hover,
.rating:not(:checked)>label:hover~label {
    color: #FFD700
}

.rating>[id^="star"]:checked+label:hover,
.rating>[id^="star"]:checked~label:hover,
.rating>label:hover~[id^="star"]:checked~label,
.rating>[id^="star"]:checked~label:hover~label {
    color: #FFED85
}

.reset-option {
    display: none
}

</style>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                     <li><a href="{{route('home.index')}}">Trang chủ<i class="ti-arrow-right"></i></a></li>
                     @if($parent_category!='null')
                        <li class="active"><a href="{{route('category.show',['alias'=>$parent_category->alias])}}" >{{$parent_category->name}}<i class="ti-arrow-right" ></i></a></li>
                        <li class="active" ><a href="{{route('category.show',['alias'=>$category->alias])}}" >{{$category->name}}</a></li>
                        
                     @else
                        <li class="active"><a href="{{route('category.show',['alias'=>$category->alias])}}">{{$category->name}}</a></li>
                     @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->
<!-- Start Checkout -->
<section class="shop checkout section" style="background-color: #f6f7fb;"  >
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-12" style="background-color: #fff;border: 1px solid #ebebeb;">
                <div class="checkout-form">
                    
                    <!-- Form -->
                    <form class="form" method="post" action="{{route('home.buy_now',['id'=>$detail_product->id])}}">
                        @csrf
                        <input type="hidden" id="option_number" name="option_number">
                        <div class="row">
                            <div class="col-lg-6 col-12" style="">
                                <div>
                                    
                                    <!--Carousel Wrapper-->
                                    
                                    <div class="row" >
                                        <div class="col-md-12">
                                            <div class="container">
<div class="carousel-container position-relative row">
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%;">
  <div class="carousel-inner">
    @foreach($images as $key => $image)
    @if($key==0)
    <div class="carousel-item active" data-slide-number="{{$key}}">
      <a data-toggle="modal" data-target="#exampleModal{{$key}}"><img  style="object-fit: cover; height: 300px; width: 100%;cursor: pointer; " src="{{$image}}" class="d-block w-100" alt="..." data-remote="{{$image}}/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery" ></a>
    </div>
    @else
    <div class="carousel-item" data-slide-number="{{$key}}">
      <a data-toggle="modal" data-target="#exampleModal{{$key}}"><img  style="object-fit: cover; height: 300px;width: 100%;cursor: pointer; " src="{{$image}}" class="d-block w-100" alt="..." data-remote="{{$image}}" data-type="image" data-toggle="lightbox" data-gallery="example-gallery"></a>
    </div>
    @endif
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" >
    <img  style="object-fit: cover; height: 600px; width: auto !important;margin: auto; " src="{{$image}}" class="d-block w-100" alt="..." data-remote="{{$image}}/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery" >
  </div>
</div>
    @endforeach
  </div>
</div>

<!-- Carousel Navigation -->
<div id="carousel-thumbs" style="" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
        @php
          $count_sl=0;
        @endphp
        @if($dem>1)
    @while($count_sl < $dem)
    
    @if($count_sl < 3) 
    <div class="carousel-item active">
      <div class="row mx-0">
         @foreach($images as $key => $image)
        <div id="carousel-selector-{{$key}}" class="thumb col-4 col-sm-4 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="{{$key}}">
          <img style="object-fit: cover; height: 60px;" src="{{$image}}" class="img-fluid" alt="...">
        </div>
        @php
            $count_sl++;
            if($count_sl % 3==0){
            break;
          }

        @endphp
        @endforeach
  
        
            
      </div>
    </div>
    @else
        <div class="carousel-item">
      <div class="row mx-0">
         @foreach($images as $key => $image)
         @if($key>=$count_sl)
        <div id="carousel-selector-{{$key}}" class="thumb col-4 col-sm-4 px-1 py-2" data-target="#myCarousel" data-slide-to="{{$key}}">
          <img style="object-fit: cover; height: 40px;" src="{{$image}}" class="img-fluid" alt="...">
          <!-- <span class="out-of-stock">Flashsale</span> -->
        </div>
        
        
        @php
            $count_sl++;
            if($count_sl % 3==0){
            break;
          }

        @endphp
        @endif
        @endforeach
  
        
            
      </div>
    </div>
    @endif
      
          @endwhile
            @endif

    <!-- <div class="carousel-item">
      <div class="row mx-0">
        <div id="carousel-selector-6" class="thumb col-4 col-sm-4 px-1 py-2" data-target="#myCarousel" data-slide-to="6">
          <img src="https://source.unsplash.com/uanoYn1AmPs/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-7" class="thumb col-4 col-sm-4 px-1 py-2" data-target="#myCarousel" data-slide-to="7">
          <img src="https://source.unsplash.com/_snqARKTgoc/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-8" class="thumb col-4 col-sm-4 px-1 py-2" data-target="#myCarousel" data-slide-to="8">
          <img src="https://source.unsplash.com/M9F8VR0jEPM/600x400/" class="img-fluid" alt="...">
        </div>
      </div>
    </div> -->

  </div>
  @if($dem>1)
  <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
    <span style="color: black; font-size: 30px;" class="fa fa-angle-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a  class="carousel-control-next"  href="#carousel-thumbs" role="button" data-slide="next">
    <span style="color: black; font-size: 30px;" class="fa fa-angle-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  @endif
</div>

</div> <!-- /row -->
</div> <!-- /container -->
                                            </div>
                                        </div>
                                        <!--/.Carousel Wrapper-->
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-12 bien-the" style="padding-left: 0px;">

                                    <div class="form-group">
                                        
                                        <p style="font-size: 22px;font-weight: bold;">{{$detail_product->title}}</p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 row" style="margin-bottom:15px;" >
                                            <div id="price_origin" style="text-decoration-line:line-through; color: #808080; font-size: 130%;" class="old"></div>&nbsp
                                            <strong id="option_price" style="color:red;font-size: 24px;"></strong>
                                     </div>

                                     @if($coupon)
                                       <div class="col-lg-12 col-md-12 row" style="" >
                                            <div class="col-md-12" id="" style=" background-color:#d4f2d5; display: flex;" >Nhập &nbsp<span style="color:red;"><strong style="text-align: center;">{{$coupon->coupon_code}}</strong></span>&nbsp: {{$coupon->coupon_name}}</div>&nbsp
                                           <!--  <strong id="option_price" style="color:red;font-size: 24px;"></strong> -->
                                     </div>
                                     @endif

                                        <div class="row">
                                            @if($input)
                                            @foreach($input as $inputt)
                                    
                                            <div class="col-md-6 row" style="margin-bottom: 20px;">
                                            <div class="col-lg-12 col-md-12">
                                                <span style="font-size: 14px;font-weight: 600;">{{$inputt['name']}}</span>
                                            </div>
                                            @php
                                            $dem=0;
                                            @endphp
                                            <div class="col-lg-12 col-md-12 ">
                                               <select class="form-control check-option" id="exampleFormControlSelect1" style="cursor: pointer;">
                                               @foreach($attributes as $attribute)
                                                  @if($attribute->parent_id==$inputt['id'])
                                               @php
                                                  $dem++;
                                               @endphp
                                               @if($dem==1)
                                                  <option checked value="{{$attribute->title}}">{{$attribute->title}}</option>
                                               @else
                                                  <option  value="{{$attribute->title}}">{{$attribute->title}}</option>
                                               @endif
                                               @endif
                                               @endforeach
                                               </select>
                                            </div>
                                          
                                             </div>
                                              @endforeach
                                            
                                     
                                            @endif
                                        </div>

                                       
                                        
                                        
                                   
                                    <div class="form-group row">
                               
<!--                                             <div class="col-md-4">
                                                <input style="width:100%"  type="number" name="quantity" value="1" id="quantity" min="1">
                                            </div> -->
                                            <div class="col-md-12">
                                                 <strong>Số lượng:</strong>
                                              </div>
                                            <div style="margin-top: 0px;" class="col-md-5 input-group">
                                             
                                              <input type="button" value="-" class="button-minus" data-field="quantity">
                                              <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field" >
                                              <input type="button" value="+" class="button-plus" data-field="quantity">
                                            </div>
<!--                                             <div class="col-md-8">
                                                <button type="button" class="btn" id="add-to-cart"  data-product_id="{{$detail_product->id}}" style="background-color: #EA1621">Thêm vào giỏ hàng</button>
                                                
                                            </div> -->
                                        </div>
                           
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6 col-md-6" style="padding-right: 0px;">
                                                <button type="submit" style="width:100%;border-radius: 5px;background-color: #292BB7;"  class="btn"><strong style="font-size: 16px; ">Mua trả góp 0%</strong><br><span style="font-size: 13px;opacity: .8;">Trả góp qua thẻ tín dụng</span></button>
                                            </div>
                                            <div class="col-6 col-md-6" >
                                                <button type="submit" style="width:100%;border-radius: 5px;background-color: #292BB7;"  class="btn"><strong style="font-size: 16px;">VNPAY</strong><br><span style="font-size: 13px;opacity: .8;">ATM nội địa | QRcode</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit"  style="width:100%;border-radius: 5px;background-color: #EA1621"  class="btn btn-buy"><strong style="font-size: 16px;margin-bottom: 10px;">Mua ngay</strong><br><span style="font-size:13px;">Gọi điện xác nhận và giao hàng tận nơi</span></button>
                                    </div>
                                    <div class="form-group" style="background-color: #f5f5f5;padding: 10px  0 30px 15px; ">
                                        
                                        
                                        <div class="col-md-12">
                                            <span> Gọi mua hàng (8:00 - 21:00): <b>1900 3052</b></span>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-7 col-md-7" style="padding: 0 0 0 10px;">
                                                <input style="background-color:#fff;" type="text" placeholder="Nhập số điện thoại"  id="contact-me">
                                            </div>
                                            <div class="col-5 col-md-5" style="padding: 0px">
                                                <button type="submit" class="btn btn-contact" style="background-color: #292BB7;">Gọi cho tôi</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
                <hr>
                <div class="col-lg-2 col-12 benefit" style="border: 1px solid #ebebeb; height:auto; background-color: white;border-left: none;">
                    
                    <!-- Order Widget -->
                    <div class="row">
                      <div class="col-12" >
                        <div class="single-widget">
                        <div class="content">
                            <ul>
                                @foreach($benefit as $key => $benefits)               
                                <div class="">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a target="_blank" class="mr-2"><img style="width: 55px; border-radius: 100%;" src="{!!url('upload/config/'.$benefits->image)!!}" ></a>
                                            </div>
                                            <div class="col-md-8">
                                                <div style="font-weight: 500;">{!!$benefits->name!!}</div>
                                                <p style="font-size: 12px;">{!!$benefits->description!!}</p>
                                                
                                            </div>
                                        </div>

                                    </div>
                                    
                                    
                                </div>
                               <div class="modal fade" id="{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">  
                                        <h5 style="text-align: center; margin-bottom: 20px; margin-top: 20px;" class="modal-title" id="exampleModalLongTitle">{{$benefits->name}}</h5>
                                        
                                        <div style="margin-left: 50px; margin-right: 50px;">{!!$benefits->content!!}</div>
                                      
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                @endforeach
                            </ul>
                            
                        </div>
                    </div>
                      </div>
                    <!--</hr>
                       <div class="col-12">
                        <div class="single-widget">
                        <div class="content">
                            <ul>
                                       
                                <div class="">
                                    <div class="">
                                      <h3 style="font-weight: 500px; text-align: center; font-size: 14px ;margin-bottom: 10px;">SẢN PHẨM VỪA ĐƯỢC XEM</h3>
                                             
                                           @if(Session('old_pro'))
                                             @foreach(Session('old_pro') as $key => $val)
                                             @if($count_old_product - $key <= 3)
                                           <table class="" style=" border-top: 1px solid #e4e7ed; margin:0;">  
                                                <tr style="" >
                                                  <td style="width: 75px; padding-top: 10px; padding-bottom: 10px;">
                                                    <a href="{{route('product.detail',['alias'=>$val['alias']])}}" target="_blank" class="mr-2"><img style="width: 75px; height: 75px;" src="{!!$val['image']!!}" ></a>
                                                    </td>
                                                
                                                  <td style="padding-left: 10px;">
                                                    <a href="{{route('product.detail',['alias'=>$val['alias']])}}" target="_blank" class="mr-2"><p>{!!$val['title']!!}</p></a>
                                                  </td>
                                                </tr>
                                        
                                            </table>
                                            @endif 
                                            @endforeach
                                           @endif
                                    
                                    </div>
                                    
                                    
                                </div>
                               
                                
                            </ul>
                        </div>
                    </div>
                      </div> -->

                    </div>
                    


                    <!--/ End Order Widget -->
                    
                </div>
            </div>
        </div>
    </section>



 
    <!--/ End Checkout -->



    <section style="padding-bottom: 50px;background-color: #f6f7fb;">
        <div class="container">
          <div class="row">
            <div class="col-lg-10" style="background-color: white;border: 1px solid #ebebeb;">
            <p class="" style="font-size:22px;color: black;background-color:  #ebebeb;padding:10px;">Đặc điểm</p>
            <div class="row mt-4" style="font-size:14px;">
                   
                    @foreach($other_attributes as $key => $other_attribute)
                     @if($other_attribute->status_detail!='1')
                    <div  class="col-md-7 col-7 col-lg-7">
                    <p style="color: black;font-weight: bold; padding: 10px;">{{$other_attribute->title}}</p>
   
                </div>
                    <div class="col-md-5 col-5 col-lg-5">
 
                          @foreach($other_attribute as $key1 => $other)
                            @if($key1==0)
                              <span>{{$other->title}}</span>
                            @else
                                <span>,&nbsp {{$other->title}}</span>
                            @endif
                          @endforeach
                            </div>
                      @endif
                      @endforeach
                    </div>
                </div>
            </div>        
        </div>
    </section>

    @if($detail_product->content != null)
    <section style="padding-bottom: 50px;background-color: #f6f7fb;">
        <div class="container" >
          <div class="row">
          <div class="col-lg-10" style="background-color: white;border: 1px solid #ebebeb; ">
            <p style="font-size:22px;color: black;background-color:  #ebebeb;padding:10px;">Mô tả</p>
            <!-- <span id="textarea" class="m-2 show_description" style="color: black;">{!!$detail_product->content!!} </span>
            

              
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                {!!$detail_product->content!!}
              </div>
            </div>
            <div style="text-align: center;">
            <a style=" color: #0BBFFF;" class=" test" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Xem thêm/ Thu gọn
            </a>
          </div> -->

          <div class="content_product">
          <p>{!!$detail_product->content!!}</p>
            </div>
          <div style="text-align: center;">
            <button style="background-color:#FFFFFF;color: #42a1f5;margin:auto;padding: 5px;border: solid 1px transparent; " id="show">Xem thêm</a>
            <button style="background-color:#FFFFFF;color: #42a1f5;margin:auto;display: none;padding: 5px;border: solid 1px transparent; " id="hide">Ẩn bớt</a>

          
          </div>
            </div>
          </div>
        </div>
    </section>
    @endif


    <section style="padding-bottom: 50px;background-color: #f6f7fb;">
        <div class="container" >
          <div class="row">
            <div class="col-lg-10" style="background-color: white;border: 1px solid #ebebeb;">
            <p style="font-size:22px;color: black;background-color:  #ebebeb;padding:10px;">Đánh giá (0)</p>
            <p class="mt-2" style="color: black;padding:10px;">Chưa có đánh giá nào</p>
        <div class="container" style="border: 3px solid #283988">
          <div class="row">
            <div class="col-lg-6" style="padding: 20px;">
              <div style="background-color: #EBEBEB;height: 100%;">
                @foreach( explode(',',$detail_product->images) as $key => $value)
                <div class="row"><img src="{!!$value!!}" class="mt-4" style="width: 40%;margin: auto;"></div>
                <p class="mt-3" style="text-align: center;"><b>{!!$detail_product->title!!}</b></p>
                <div class="mt-3 row" style="text-align: center;">
                  <fieldset class="rating" style="margin: auto;"> <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label> <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label> <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label> <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label> <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label> <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label> <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label> <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label> <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label> <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label> <input type="radio" class="reset-option" name="rating" value="reset" /> </fieldset>
                </div>
                @break
                @endforeach
              </div>
            </div>
            <div class="col-lg-6">
            <p class="mt-4" style="color: black;"><b>Tên *</b></p>
            <input type="text" class="form-control form-control-lg mt-2" >
            <p class="mt-4" style="color: black;"><b>Email *</b></p>
            <input type="text" class="form-control form-control-lg mt-2" >
            <p class="mt-4" style="color: black;"><b>Nhận xét của bạn *</b></p>
            <textarea class="form-control mt-2" rows="3"></textarea>
            <button type="submit" class="btn mt-4 mb-4" style="background-color: #292BB7;">Gửi đi</button>
            </div>
          </div>
        </div>
        </div>
        </div>
        </div>

    </section>

    <section style="padding-bottom: 50px;background-color: #f6f7fb;">
      <div class="product-area most-popular section" style="padding: 20px !important;">
        <div class="container" >
            <div class="row">
                  <div class="col-lg-10" style="background-color: white;border: 1px solid #ebebeb;">
            <p class="" style="font-size:22px;color: black;background-color:  #ebebeb;padding:10px;">Sản phẩm tương tự</p>
            <div class="row">
                            <div class="col-12">
                                <div class="owl-carousel popular-slider">
                                    @foreach($products as $product)
                                      @foreach($similar_product_ids as $product_ids)
                                        @if($product->id == $product_ids->product_id)
                                    <div class="single-product" style="margin-top:0px;">
                                        <div class="product-img">
                                            <a href="{{route('product.detail',['alias'=>$product->alias])}}">
                                              @foreach( explode(',',$product->images) as $value)
                                                <img class="default-img img-responsive img-rounded custom-product" src="{{$value}}" style="padding-top: 10px;height: 323px; ">
                                                @if($product->sale_price > 0)
                                                   @php 
                                                      $discount=($product->price - $product->sale_price) / ($product->price/100);
                                                             if($discount<1){
                                                               $discount=1;
                                                               }
                                                             if($discount>=99){                                    
                                                               $discount=99;
                                                               }
                                                   @endphp
                                                        <!-- //<span class="price-dec">Giảm {{number_format($discount)}}%</span> -->
                                                        <span class="out-of-stock">Giảm {{number_format($discount)}}%</span>
                                                   @endif
                                                @break;
                                                @endforeach
                                            </a>

                                            <div class="button-head">
                                               
                                                <div style="background-color: #283988; text-align: center; width: 100%;" class="product-action-2">
                                                    <a title="Mua hàng" href="{{route('product.detail',['alias'=>$product->alias])}}">Mua hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                        @if($count_fls==1)

                                        <div class="product-content">
                                            <h3  style="text-align: center;"><a href="{{route('product.detail',['alias'=>$product->alias])}}">{{$product->title}}</a></h3>
                                            <div class="product-price" style="text-align: center;">
                                                @php 
                                                   $dem=0;
                                                @endphp
                                                @if($product->price>0)
                                                @foreach($product_sales as $pro_sale)
                                                @if($product->id==$pro_sale->product_id)
                                                @php 
                                                   $dem++;
                                                @endphp
                                                <span style="" class="old">{{number_format($product->price)}}đ</span>
                                                <span style="color:red;">{{number_format($product->sale_price)}}đ</span>
                                                @endif
                                                @endforeach
                                                @if($dem==0)
                                                <span style="color:red;">{{number_format($product->price)}}đ</span>
                                                @endif
                                                @else
                                                 <span style="color:red;">Liên hệ</span>
                                                @endif
                                            </div>
                                        </div>
                                        @else
                                        <div class="product-content">
                                            <h3  style="text-align: center;"><a href="{{route('product.detail',['alias'=>$product->alias])}}">{{$product->title}}</a></h3>
                                            <div class="product-price" style="text-align: center;">
                                                @if($product->price>0)
                                                <span style="color:red;">{{number_format($product->price)}}đ</span>
                                                @else
                                                 <span style="color:red;">Liên hệ</span>
                                                @endif
                                            </div>
                                        </div>

                                        @endif
                                    </div>
                                         @endif
                                      @endforeach
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                      </div>
        </div>
    </section>
          @if(Session('old_pro'))
    <section style="padding-bottom: 50px;background-color: #f6f7fb;">
      <div class="product-area most-popular section" style="padding: 20px !important;">
        <div class="container" >
          <div class="row">
          <div class="col-lg-10" style="background-color: white;border: 1px solid #ebebeb;">
            <p class="" style="font-size:22px;color: black;background-color:  #ebebeb;padding:10px;">Sản phẩm đã xem</p>
            <div class="row">
                            <div class="col-12">
                                <div class="owl-carousel popular-slider">
                              
                                      @foreach(Session('old_pro') as $key => $val)
                                        
                                    <div class="single-product" style="margin-top:0px;">
                                        <div class="product-img">
                                            <a href="{{route('product.detail',['alias'=>$val['alias']])}}">
                                              @foreach( explode(',',$val['image']) as $value)
                                                <img class="default-img img-responsive img-rounded custom-product" src="{!!$value!!}" style="padding-top: 10px;height: 323px; ">
                                                @php 
                                                  $discount=($val['price'] - $val['sale_price']) / ($val['price']/100);
                                                     if($discount<1){
                                                       $discount=1;
                                                       }
                                                     if($discount>=99){                                    
                                                       $discount=99;
                                                       }
                                                   @endphp
                                                   @if($val['sale_price']>0)
                                                   <span class="out-of-stock">Giảm {{number_format($discount)}}%</span>
                                                   @endif
                                                @break;
                                                @endforeach
                                            </a>

                                            <div class="button-head">
                                               
                                                <div style="background-color: #283988; text-align: center; width: 100%;" class="product-action-2">
                                                    <a title="Mua hàng" href="{{route('product.detail',['alias'=>$val['alias']])}}">Mua hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        @if($count_fls==1)
                                        

                                        <div class="product-content">
                                            
                                            <h3  style="text-align: center;"><a href="{{route('product.detail',['alias'=>$val['alias']])}}">{{$val['title']}}</a></h3>
                                            <div class="product-price" style="text-align: center;">
                                    
                                                @php 
                                                   $dem=0;
                                                @endphp
                                                @if($val['price']>0)
                                                @foreach($product_sales as $pro_sale)
                                                @if($val['id']==$pro_sale->product_id)
                                                @php 
                                                   $dem++;
                                                @endphp
                                                <span style="" class="old">{{number_format($val['price'])}}đ</span>
                                                <span style="color:red;">{{number_format($val['sale_price'])}}đ</span>
                                                @endif
                                                @endforeach
                                                @if($dem==0)
                                                <span style="color:red;">{{number_format($val['price'])}}đ</span>
                                                @endif
                                                @else
                                                 <span style="color:red;">Liên hệ</span>
                                                @endif
                                              
                                            </div>
                                        </div>
                                        
                                        @else
                                        
                                            <div class="product-content">
                                            
                                            <h3  style="text-align: center;"><a href="{{route('product.detail',['alias'=>$val['alias']])}}">{{$val['title']}}</a></h3>
                                            <div class="product-price" style="text-align: center;">
                                
                                              @if($val['price']>0)
                                              <span style="color:red;">{{number_format($val['price'])}}đ</span>
                                              @else
                                               <span style="color:red;">Liên hệ</span>
                                              @endif
                                          </div>
                                            
                                        </div>
                                        
                                        @endif
                                      
                                      </div>
                                         
                                      @endforeach
                              
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                      </div>
        </div>
    </section>
         @endif
  
  <script type="text/javascript">
    $('#myCarousel').carousel({
  interval: false
});
$('#carousel-thumbs').carousel({
  interval: false
});

// handles the carousel thumbnails
// https://stackoverflow.com/questions/25752187/bootstrap-carousel-with-thumbnails-multiple-carousel
$('[id^=carousel-selector-]').click(function() {
  var id_selector = $(this).attr('id');
  var id = parseInt( id_selector.substr(id_selector.lastIndexOf('-') + 1) );
  $('#myCarousel').carousel(id);
});
// Only display 3 items in nav on mobile.
if ($(window).width() < 575) {
  $('#carousel-thumbs .row div:nth-child(4)').each(function() {
    var rowBoundary = $(this);
    $('<div class="row mx-0">').insertAfter(rowBoundary.parent()).append(rowBoundary.nextAll().addBack());
  });
  $('#carousel-thumbs .carousel-item .row:nth-child(even)').each(function() {
    var boundary = $(this);
    $('<div class="carousel-item">').insertAfter(boundary.parent()).append(boundary.nextAll().addBack());
  });
}
// Hide slide arrows if too few items.
if ($('#carousel-thumbs .carousel-item').length < 2) {
  $('#carousel-thumbs [class^=carousel-control-]').remove();
  $('.machine-carousel-container #carousel-thumbs').css('padding','0 5px');
}
// when the carousel slides, auto update
$('#myCarousel').on('slide.bs.carousel', function(e) {
  var id = parseInt( $(e.relatedTarget).attr('data-slide-number') );
  $('[id^=carousel-selector-]').removeClass('selected');
  $('[id=carousel-selector-'+id+']').addClass('selected');
});
// when user swipes, go next or previous
$('#myCarousel').swipe({
  fallbackToMouseEvents: true,
  swipeLeft: function(e) {
    $('#myCarousel').carousel('next');
  },
  swipeRight: function(e) {
    $('#myCarousel').carousel('prev');
  },
  allowPageScroll: 'vertical',
  preventDefaultEvents: false,
  threshold: 75
});
/*
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
*/

$('#myCarousel .carousel-item img').on('click', function(e) {
  var src = $(e.target).attr('data-remote');
  if (src) $(this).ekkoLightbox();
});
  </script>
   
    <script type="text/javascript">
      function showtext()
          {
          var text="{!!$detail_product->content!!}";
          document.getElementById("textarea").innerHTML=text;
          }
    </script>
    <script type="text/javascript">
      
        $(document).ready(function(){
          var check=0;
          $('.test').on('click',function(){
            if(check==0){
            $('.show_description').hide();
            check=1;
            }
            else{
              $('.show_description').show();
              check=0;

            }


          });
          
          });
    </script>

    <script type="text/javascript">
    $(document).ready(function(){
    checkOption();
    function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
    }
    function checkOption(){
    $('div').find("select").prop('disabled', 'disabled');
     $('div').find("button").prop('disabled', 'disabled');
    var alias='{{$detail_product->alias}}';
    search = $('div').find("option:selected").map(function(){
    return $(this).val();
    }).get();

    $.ajax({
    url:'{{route("api.check_option")}}',
    method:'POST',
    data:{search:search,alias:alias,_token: $('#token').val()},

    success:function(resp){
       $('div').find("select").removeAttr('disabled');
       $('div').find("button").removeAttr('disabled');
    if(resp.result_price!=0 ){
        if(resp.result['option_price']!=null || resp.result['option_price']>0){   
            $('#price_origin').html(formatNumber(resp.result['option_price']) + 'đ');
            $('#option_price').html(formatNumber(resp.result_price) + 'đ');
            
        }
        else{
            $('#price_origin').hide();
            $('#option_price').html('Loại sản phẩm này đã hết!');
            $('div').find("button").prop('disabled', 'disabled');
        }
    }
    else{
        if(resp.result['option_price']!=null || resp.result['option_price']>0){   
            $('#option_price').html(formatNumber(resp.result['option_price']) + 'đ');

        }
        else{
            $('#price_origin').html('');
            $('#option_price').html('Loại sản phẩm này đã hết!');
            $('div').find("button").prop('disabled', 'disabled');
        }
       
    }
    $('#option_number').val(resp.option_number);
    
    }
    });
    }
    $('.check-option').on('change',function(){
          $('div').find("select").prop('disabled', 'disabled');
          checkOption();
          

    // var list = [];
    // $('div').find("input:radio:checked").each(function () {
    //    list.push($(this).val());
    // });
    
    });
    });
    </script>
    <script type="text/javascript">
      $("#show").click(function() {
      $(".content_product").css({
        "-webkit-line-clamp": "9999"
      });
      $("#show").css({
        "display": "none"
      });
      $("#hide").css({
        "display": "block"
      });
    })
          $("#hide").click(function() {
      $(".content_product").css({
        "-webkit-line-clamp": "5"
      });
      $("#hide").css({
        "display": "none"
      });
        $("#show").css({
        "display": "block"
      });
    })
    </script>

    <script>
 $(document).ready(function() {

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        1000:{
            items:3
        }
    },
    navText : ["<i class='ti-angle-left'></i>","<i class='ti-angle-right'></i>"]
})

$('#carouselExampleIndicators').carousel({
  interval: 2000
})
         });
</script>
    
    @stop