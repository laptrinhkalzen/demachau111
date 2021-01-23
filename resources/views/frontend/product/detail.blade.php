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

                                        <div class="row col-lg-8" >
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
                                                <p>{!!$benefits->content!!}</p>
                                                
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
        <div class="container" style="background-color: white;border: 1px solid #ebebeb; ">
            <p style="font-size:22px;color: black;background-color:  #ebebeb;padding:10px;">Mô tả</p>
            <p class="m-2" style="color: black;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non nisi pharetra, accumsan lacus eu, ornare lacus. Etiam molestie pharetra urna ac tincidunt. Suspendisse vitae nisi sed leo facilisis consectetur eu a urna. Phasellus mi sapien, tristique quis dolor ut, malesuada viverra sem. Nam enim lacus, lobortis quis finibus vel, dapibus a lacus. Curabitur quis malesuada turpis. Sed consequat feugiat risus, sed cursus felis scelerisque efficitur. Mauris sagittis id leo a malesuada. Sed imperdiet interdum justo. Suspendisse potenti. Vestibulum ex lorem, pellentesque vitae tempus eu, euismod eleifend quam. Donec id nulla hendrerit, faucibus leo et, semper est. Duis lectus felis, tempus eget tempus eget, maximus vel nulla. Nam et malesuada sapien.</p>
        </div>
    </section>

    <section style="padding-bottom: 50px;">
        <div class="container" style="background-color: white;border: 1px solid #ebebeb;">
            <p class="" style="font-size:22px;color: black;background-color:  #ebebeb;padding:10px;">Thông tin bổ sung</p>
            <div class="row mt-4" style="font-size:14px;">
                <div class="col-6 col-lg-6">
                    <p style="color: black;font-weight: bold;">Chất liệu</p>
                </div>
                <div class="col-6 col-lg-6">
                    <p>Cao su</p>
                </div>
            </div>
            <hr>
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
        </div>
    </section>

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
    $('#price_origin').html(formatNumber(resp.result['option_price']) + 'đ');
    $('#option_price').html(formatNumber(resp.result_price) + 'đ');
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