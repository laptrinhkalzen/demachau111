@extends('frontend.layouts.master')
@section('content')
<style type="text/css">
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
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Checkout</a></li>
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
            <div class="col-lg-9 col-12" style="background-color: #fff;border: 1px solid #ebebeb; ">
                <div class="checkout-form">
                    
                    <!-- Form -->
                    <form class="form" method="post" action="{{route('home.buy_now',['id'=>$detail_product->id])}}">
                        @csrf
                        <input type="hidden" id="option_number" name="option_number">
                        <div class="row">
                            <div class="col-lg-5 col-12" style="">
                                <div>
                                    
                                    <!--Carousel Wrapper-->
                                    
                                    <div class="row" >
                                        <div class="col-md-12">
                                            <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                                                <!-- slides -->
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active"> <img src="https://i.imgur.com/weXVL8M.jpg" alt="Hills" style="width: 100%;"> </div>
                                                    </div> <!-- Left right --> <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#custCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> <!-- Thumbnails -->
                                                    <ol class="carousel-indicators list-inline">
                                                        <li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> <img src="https://i.imgur.com/weXVL8M.jpg" class="img-fluid"> </a> </li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/.Carousel Wrapper-->
                                    </div>
                                </div>
                                
                                <div class="col-lg-7 col-12" style="padding-left: 0px !important">
                                    <div class="form-group">
                                        
                                        <p style="font-size: 22px;font-weight: bold;">{{$detail_product->title}}</p>
                                    </div>
                                    <div class="">
                                        <div class="row">
                                            <div class="col-lg-3 form-group">
<!--                                             <select class="form-control" id="exampleFormControlSelect1">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select> -->
                                          </div>
                                            @if($input)
                                            @foreach($input as $inputt)
                                            <div class="col-lg-12">
                                                <span style="font-size: 14px;font-weight: 600;">{{$inputt['name']}}</span>
                                            </div>
                                            @php
                                            $dem=0;
                                            @endphp
                                            @foreach($attributes as $attribute)
                                            @if($attribute->parent_id==$inputt['id'])
                                            @php
                                            $dem++;
                                            @endphp
                                            @if($dem==1)
                                            <!--                                             <div class="col-lg-4 radio-check">
                                                <input type="radio" checked class="check-option" name="{{$inputt['name']}}" value="{{$attribute->title}}">
                                                <label for="other">{{$attribute->title}}</label>
                                            </div> -->
                                            <div class="radio-check" style="padding-left: 15px;"><label class="radio"> <input type="radio" checked class="check-option"name="{{$inputt['name']}}" value="{{$attribute->title}}" > <span>{{$attribute->title}}</span></label></div>
                                            @else
                                            <!--                                             <div class="col-lg-4 radio-check">
                                                <input type="radio" check class="check-option" name="{{$inputt['name']}}" value="{{$attribute->title}}">
                                                <label for="other">{{$attribute->title}}</label>
                                            </div> -->
                                            <div class="radio-check" style="padding-left: 15px;"><label class="radio"> <input type="radio" check class="check-option"name="{{$inputt['name']}}" value="{{$attribute->title}}" > <span>{{$attribute->title}}</span></label></div>
                                            @endif
                                            @endif
                                            @endforeach
                                            
                                            @endforeach
                                            @endif
                                        </div>

                                        <div class="row col-lg-10" >
                                            <div id="price_origin" style="text-decoration-line:line-through;" class="old"></div>&nbsp
                                            <div id="option_price" style="color:red;font-size: 24px;"></div>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
<!--                                             <div class="col-md-4">
                                                <input style="width:100%"  type="number" name="quantity" value="1" id="quantity" min="1">
                                            </div> -->
            
                                            <div class="col-md-4 input-group">
                                                
                                              <input type="button" value="-" class="button-minus" data-field="quantity">
                                              <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field" >
                                              <input type="button" value="+" class="button-plus" data-field="quantity">
                                            </div>
<!--                                             <div class="col-md-8">
                                                <button type="button" class="btn" id="add-to-cart"  data-product_id="{{$detail_product->id}}" style="background-color: #EA1621">Thêm vào giỏ hàng</button>
                                                
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6 col-md-6" style="padding-right: 0px;">
                                                <button type="submit" style="width:100%;border-radius: 10px;background-color: #292BB7;padding: 20px 10px;"  class="btn"><strong style="font-size: 18px;">Mua trả góp 0%</strong><br><span style="font-size: 13px;opacity: .8;">Trả góp qua thẻ tín dụng</span></button>
                                            </div>
                                            <div class="col-6 col-md-6" >
                                                <button type="submit" style="width:100%;border-radius: 10px;background-color: #292BB7;padding: 20px 10px;"  class="btn"><strong style="font-size: 18px;">Thanh toán VNPAY</strong><br><span style="font-size: 13px;opacity: .8;">ATM nội địa | QRcode</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit"  style="width:100%;padding: 20px 10px;border-radius: 10px;background-color: #EA1621"  class="btn btn-buy"><strong style="font-size: 20px;margin-bottom: 13px;">Mua ngay</strong><br><span style="font-size:13px;">Gọi điện xác nhận và giao hàng tận nơi</span></button>
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
                <div class="col-lg-3 col-12 benefit" style="border: 1px solid #ebebeb;background-color: white;">
                    
                    <!-- Order Widget -->
                    <div class="single-widget">
                        <div class="content">
                            <ul>
                                @foreach($benefit as $benefits)
                                <div class="">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a target="_blank" class="mr-2"><img style="width: 55px; border-radius: 100%;" src="{!!url('upload/config/'.$benefits->image)!!}" ></a>
                                            </div>
                                            <div class="col-md-9">
                                                <div style="font-weight: 500;">{!!$benefits->name!!}</div>
                                                <p>{!!$benefits->description!!}</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!--/ End Order Widget -->
                    
                </div>
            </div>
        </div>
    </section>
    <!--/ End Checkout -->

    

    <section style="padding-bottom: 50px;">
        <div class="container" style="background-color: white;border: 1px solid #ebebeb;">
            <p class="" style="font-size:22px;color: black;background-color:  #ebebeb;padding:10px;">Đặc điểm</p>
            <div class="row mt-4" style="font-size:14px;">
                   
                    @foreach($other_attributes as $key => $other_attribute)
                     
                    <div  class="col-md-7 col-7 col-lg-7">
                    <p style="color: black;font-weight: bold; padding: 10px;">{{$other_attribute->title}}</p>
   
                </div>
                    <div class="col-md-5 col-5 col-lg-5">
 
                          @foreach($other_attribute as $key1 => $other)
                            @if($key1==0)
                              <span>{{$other->title}}</span>
                            @else
                                <span>,{{$other->title}}</span>
                            @endif
                          @endforeach
                            </div>
                      @endforeach
                    </div>
                    
        </div>
    </section>

    <section style="padding-bottom: 50px;">
        <div class="container" style="background-color: white;border: 1px solid #ebebeb; ">
            <p style="font-size:22px;color: black;background-color:  #ebebeb;padding:10px;">Mô tả</p>
            <span id="textarea" class="m-2 show_description" style="color: black;">{!!$detail_product->content!!} </span>
            <!-- <a onclick="showtext('text')" href="javascript:void(0);">See More</a> -->

              
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                {!!$detail_product->content!!}
              </div>
            </div>
            <div style="text-align: center;">
            <a style=" color: #0BBFFF;" class=" test" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Xem thêm/ Thu gọn
            </a>
          </div>
            
          
          
           <!--  <input type="button" id="show_more" value="Xem thêm"> -->
            <input type="button" id="show_less" value="Thu gọn" style="display: none;"> 
            
        </div>
    </section>

    <section style="padding-bottom: 50px;">
        <div class="container" style="background-color: white;border: 1px solid #ebebeb;">
            <p style="font-size:22px;color: black;background-color:  #ebebeb;padding:10px;">Đánh giá (0)</p>
            <p class="mt-5" style="color: black;font-size: 18px;padding:10px;"><b>Đánh giá</b></p>
            <p class="mt-2" style="color: black;padding:10px;">Chưa có đánh giá nào</p>
        <div class="container" style="border: 3px solid #283988">
            <p class="mt-4" style="font-size:18px;color: black;"><b>Hãy là người đầu tiên nhận xét ""</b></p>
            <p class="mt-4" style="color: black;"><b>Đánh giá của bạn *</b></p>
            <p class="mt-4" style="color: black;"><b>Nhận xét của bạn *</b></p>
            <textarea class="form-control mt-2" rows="5"></textarea>
            <p class="mt-4" style="color: black;"><b>Tên *</b></p>
            <input type="text" class="form-control form-control-lg mt-2" >
            <p class="mt-4" style="color: black;"><b>Email *</b></p>
            <input type="text" class="form-control form-control-lg mt-2" >
            <p class="mt-4 "><input class="mr-2" type="checkbox"><b>Lưu tên của tôi, email, và trang web trong trình duyệt này cho lần bình luận kế tiếp của tôi.</b></p>
            <button type="submit" class="btn mt-4 mb-4" style="background-color: #292BB7;">Gửi đi</button>
        </div>
        </div>

    </section>

    <section style="padding-bottom: 50px;">
        <div class="container" style="background-color: white;border: 1px solid #ebebeb;">
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
                                                <img class="default-img img-responsive img-rounded custom-product" src="{{$product->images}}" style="padding-top: 10px; ">
                                            </a>
                                            <div class="button-head">
                                               
                                                <div style="background-color: #283988; text-align: center; width: 90%;" class="product-action-2">
                                                    <a title="Mua hàng" href="{{route('product.detail',['alias'=>$product->alias])}}">Mua hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3  style="text-align: center;"><a href="{{route('product.detail',['alias'=>$product->alias])}}">{{$product->title}}</a></h3>
                                            <div class="product-price" style="text-align: center;">
                                                @if($product->sale_price)
                                                <span class="old">{{number_format($product->price)}}đ</span>
                                                <span style="color:red;">{{number_format($product->sale_price)}}đ</span>
                                                @else
                                                <span style="color:red;">{{number_format($product->price)}}đ</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                         @endif
                                      @endforeach
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
        </div>
    </section>
  
   
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
    var alias='{{$detail_product->alias}}';
    search = $('div').find("input:radio:checked").map(function(){
    return $(this).val();
    }).get();
    $.ajax({
    url:'{{route("api.check_option")}}',
    method:'POST',
    data:{search:search,alias:alias,_token: $('#token').val()},
    success:function(resp){
    if(resp.result_price!=0 ){
        if(resp.result['option_price']!=null || resp.result['option_price']>0){   
            $('#price_origin').html(formatNumber(resp.result['option_price']) + 'đ');
            $('#option_price').html(formatNumber(resp.result_price) + 'đ');
        }
        else{
             $('#price_origin').hide();
            $('#option_price').html('Loại sản phẩm này đã hết!');
        }
    }
    else{
        if(resp.result['option_price']!=null || resp.result['option_price']>0){   
            $('#option_price').html(formatNumber(resp.result['option_price']) + 'đ');
        }
        else{
            $('#price_origin').html('');
            $('#option_price').html('Loại sản phẩm này đã hết!');
        }
       
    }
    $('#option_number').val(resp.option_number);
    
    }
    });
    }
    $('.check-option').on('click',function(){
    checkOption();
    // var list = [];
    // $('div').find("input:radio:checked").each(function () {
    //    list.push($(this).val());
    // });
    
    });
    });
    </script>

    
    @stop