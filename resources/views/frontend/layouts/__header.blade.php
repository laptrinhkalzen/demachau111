<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>Đệm á châu</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image / png" href="{!!$share_config->favicon!!}"/>
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=793642824743971&autoLogAppEvents=1" nonce="lUvnlv6C"></script>
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap -->
<link rel="stylesheet" href="{{asset('public/demachau/css/bootstrap.css')}}">
    <!-- Magnific Popup -->
<link rel="stylesheet" href="{{asset('public/demachau/css/magnific-popup.min.css')}}">
    <!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('public/demachau/css/font-awesome.css')}}">
    <!-- Fancybox -->
<link rel="stylesheet" href="{{asset('public/demachau/css/jquery.fancybox.min.css')}}">
    <!-- Themify Icons -->
<link rel="stylesheet" href="{{asset('public/demachau/css/themify-icons.css')}}">
    <!-- Nice Select CSS -->
<link rel="stylesheet" href="{{asset('public/demachau/css/niceselect.css')}}">
    <!-- Animate CSS -->
<link rel="stylesheet" href="{{asset('public/demachau/css/animate.css')}}">
    <!-- Flex Slider CSS -->
<link rel="stylesheet" href="{{asset('public/demachau/css/flex-slider.min.css')}}">
    <!-- Owl Carousel -->
<link rel="stylesheet" href="{{asset('public/demachau/css/owl-carousel.css')}}">
    <!-- Slicknav -->
<link rel="stylesheet" href="{{asset('public/demachau/css/slicknav.min.css')}}">
    
    <!-- Eshop StyleSheet -->
<link rel="stylesheet" href="{{asset('public/demachau/css/reset.css')}}">
<link rel="stylesheet" href="{{asset('public/demachau/css/style.css')}}">
<link rel="stylesheet" href="{{asset('public/demachau/css/responsive.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>   
    
</head>

<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<body class="js" style="background-color: #f3f5f7;">
    
    <!-- Preloader -->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <!-- End Preloader -->


<!--     <div class="hotline-phone-ring-wrap">       
            <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle"> <a href="tel:{{$share_config->hotline}}" class="pps-btn-img"> <img src="https://netweb.vn/img/hotline/icon.png" alt="so dien thoai" width="50"> </a></div>
        </div>      
                 
        
</div> -->



<!-- <div class="float-icon-hotline">            
        <ul class ="left-icon hotline">
            <li class="hotline_float_icon"><a target="_blank" rel="nofollow" id="messengerButton" href="{{$share_config->facebook}}"><i class="fa fa-zalo animated infinite tada"></i><span>Zalo</span></a></li>
            <li class="hotline_float_icon"><a target="_blank" rel="nofollow" id="messengerButton" href="{{$share_config->twitter}}"><i class="fa fa-messenger animated infinite tada"></i><span>Facebook</span></a></li>
        </ul>       
</div> -->
    
    <!-- Header -->
@if(Session('order_success'))
<script type="text/javascript">
swal("Đặt hàng thành công!");
</script>
@endif

@if(Session('payment_success'))
<script type="text/javascript">
swal("Đặt hàng thành công!");
</script>
@endif

@if(Session('out_stock'))

<script type="text/javascript">
swal("Sản phẩm tạm hết. Vui lòng thử lại sau!");

</script>

@endif

    <header class="header shop">
        <div class="topbar-mobile">
            <div class="container">
            <div class="row">
                <div class="col-4" style="padding: 0px;">
                    <p style="text-align: center;color:#283988;font-size: 12px; ">
                        Mua hàng, gọi ngay
                        <br>
                        <b style="font-size: 20px;">{{$share_config->hotline}}</b>
                    </p>
                </div>
                <div class="col-5">
                    <a href="{{route('home.index')}}"><img class="logo mt-2" src="{{$share_config->image}}" alt="logo"></a>
                </div>
                <div class="col-3" style="text-align: center;">
<!--                     <div class="sinlge-bar shopping"> -->
    <div>
                                <a href="#" class="single-icon"><!-- <i class="fa fa-shopping-cart fa-2x" style="color: #283988;padding-top: 15px;"></i> --><img src="{{asset('public/icon/cart-svg.svg')}}" style="color: #283988;width: 30px;margin-top: 15px;" onclick="open_giohang()"><span class="total-count" id="cart-count" style="border: 1px solid #ea1621;background-color: #ea1621;color: white;border-radius: 50%;vertical-align: bottom;padding: 0 3px;">{{$count_cart}}</span></a>
                                <!-- Shopping Item -->
                                <div class="shopping-item shopping-hidden cart">
                                     @if(Session('cart'))
                                    <div class="dropdown-cart-header">
                                        <span class="count-sp" id="count-sp">{{$count_cart}} Sản phẩm</span>
                                        <a href="{{route('checkout_order.index')}}">Xem giỏ hàng</a>
                                    </div>
                                    <ul class="shopping-list" id="cart_items">
                                         
                                            @foreach(Session('cart') as $key1=> $val)
                                            <li class="each_cart_{{$key1}}">
                                            <a href="#" class="delete_cart" data-id_option="{{$key1}}" title="Xoá Sản phẩm"><i class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="{{route('product.detail',['alias'=>$val['alias']])}}"><img src="{{$val['image']}}" alt="#"></a>
                                            <h4><a href="{{route('product.detail',['alias'=>$val['alias']])}}">{{$val['title']}}</a></h4>
                                            <p class="quantity">{{$val['quantity']}}x - <span style="color: #ea1621;" class="amount">{{number_format($val['price'])}} đ</span></p>
                                          </li>
                                            @endforeach
                                      
                                        
                                        
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Tổng</span>
                                            <span class="total-amount" id="total1" style="color: #ea1621;">{{number_format($count_total)}} đ</span>
                                        </div>
                                        <a href="{{route('checkout_order.index')}}" class="btn animate" style="background-color: #283988;">Xem giỏ hàng</a>
                                        <a href="{{route('checkout_order.index')}}" class="btn animate" style="background-color: #ec2029;">Thanh toán</a>
                                    </div>
                                          @else
                                        <div class="dropdown-cart-header">
<!--                                         <span id="count-sp">Chưa có sản phẩm trong giỏ hàng</span> -->
                                      
                                    </div>
                                    @endif   

                                </div>
                                <!--/ End Shopping Item -->
                            </div> 
                </div>
            </div>
            </div>
        </div>
                <!-- Topbar -->
        <div class="topbar" style="background-color: #283988;color: white;" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-12">
                        <div class="top-left">
                            <ul class="list-main">
                                <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i><span style="vertical-align: -webkit-baseline-middle"> Hotline miễn phí: 1900 3052 (8:00 - 21:00)</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12">
                        <div class="top-left">
                            <ul class="list-main">
                                <li><i class="fa fa-calendar"></i> <span style="vertical-align: -webkit-baseline-middle">30 Ngày đổi trả miễn phí</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12">
                        <div class="top-left">
                            <ul class="list-main">
                                <li><i class="fa fa-truck"></i><span style="vertical-align: -webkit-baseline-middle">Miễn phí vận chuyển</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12">
                        <div class="top-left">
                            <a href="#" class="single-icon" onclick="open_giohangpc()" style=""><img src="{{asset('public/icon/cart-svg-white.svg')}}" style="color: white;width: 15px;vertical-align: -webkit-baseline-middle;" ><span class="total-count" id="cart-count" style="color:white;border-radius: 50%;padding:0 3px;background-color: #ea1621">{{$count_cart}}</span><span class="pl-2" style="vertical-align: -webkit-baseline-middle;">Giỏ hàng<span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-mobile container" style="background-color: #283988;padding: 10px;">
            <div class="container">
            <div class="row">
                <div class="col-2" style="text-align: center;">
                    <i class="fa fa-bars fa-2x" aria-hidden="true" style="margin-top: 10px;color: white;"  onclick="open_danhmuc()"></i>
                </div>
                <div class="col-9 search-bar">
                    <form action="{{route('product.search')}}" method="GET" >
                        <input class="input-sm" name="search" placeholder="Nhập từ khoá" autocomplete="off" type="search">
                        <button class="btnn" style="background-color: #ea1621;"><i class="ti-search"></i></button>
                    </form>
                </div>
                <div class="menu-1 col-12" id="danhmuc" style="background-color: white;color: black;height: 100%;width: 0px !important;position: fixed;z-index: 999;top:0;left: 0;overflow-x: hidden;  transition: 0.5s;padding-left: 0px;padding-right: 0px;">
                    <i class="fa fa-times fa-3x" onclick="close_danhmuc()" style="float:right;margin-right: 15px;color: white;" id="close-danhmuc"></i>
                    <p style="font-size: 20px;text-align: center;color: white;font-weight: bold;padding: 14px 0;background-color: #283988;">Danh mục</p>
                    <hr style="margin-top: 0px;">
                    <p class="ml-2" style="font-size: 14px;color: black;"><a href="{{route('home.index')}}" style="font-weight: bold;">Trang chủ</a></p>
                    <hr >
                    @foreach($menu_cats as $key => $cat)
                        @php
                        $dem=0;
                        @endphp
                        @foreach($cat->children as $oke)
                        @php
                        $dem++;
                        @endphp
                        @endforeach 
                        @if($dem>0)
                            <p class="mt-2 ml-2" style="font-size: 14px;color: black;font-weight: bold;"><a style="font-weight: bold;" href="{{route('category.show',['alias'=>$cat->alias])}}">{!!$cat->name!!}</a><img class="arrow1" id="arrow1_{!!$key!!}" data-key="{{$key}}" src="{{asset('public/icon/arrow-right.svg')}}" style="width: 15px;float:right;margin-right: 10px;"></p><img class="arrow2" id="arrow2_{!!$key!!}" data-key="{{$key}}" src="{{asset('public/icon/arrow-down.svg')}}" style="width: 15px;float:right;display: none;margin-top: -20px;margin-right: 10px;"></p>
                            <hr style="">
                            <div class="menu_con_{!!$key!!}" style="display: none;">
                                @if(!is_null($cat->children))
                                
                                @foreach ($cat->children as $key=>$cat1)
                                @if($cat1)
                                <p class="mt-2 ml-2" style="font-size: 14px;color: black;"><a style="" href="{{route('category.show',['alias'=>$cat1->alias])}}">{!!$cat1->name!!}</a></p>
                                            
                                @endif
                                @endforeach
                                @endif
                            </div>

                        @else
                            <p class="mt-2 ml-2" style="font-size: 14px;color: black;"><a style="font-weight: bold;" href="{{route('category.show',['alias'=>$cat->alias])}}">{!!$cat->name!!}</a></p>
                            <hr style="">
                        @endif
                        
                    
                   @endforeach 
                </div>
                <div class="menu-2 col-12" id="giohang" style="background-color: white;color: black;width: 0px !important;height:100%;position: fixed;z-index: 999;top:0;right: 0;overflow-x: hidden;  transition: 0.5s;padding-left: 0px;padding-right: 0px;">
                    <i class="fa fa-times fa-3x" onclick="close_giohang()" style="float:right;margin-right: 5px;color: white;" id="close-giohang"></i>
                    <p  style="font-size: 20px;text-align: center;color: white;font-weight: bold;padding: 14px 0;background-color: #283988;">GIỎ HÀNG</p>
                               
                                <div class="container shopping-item cart">
                                     @if(Session('cart'))
                                    <div class="dropdown-cart-header">
                                        <span class="count-sp" id="count-sp">{{$count_cart}} Sản phẩm/</span>
                                        <a href="{{route('checkout_order.index')}}">Xem giỏ hàng</a>
                                    </div>
                                    <ul class="shopping-list" id="cart_items">
                                         
                                            @foreach(Session('cart') as $key1=> $val)
                                            <li class="each_cart_{{$key1}}">
                                            <a href="#" class="delete_cart" data-id_option="{{$key1}}" title="Xoá Sản phẩm"><i class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="{{route('product.detail',['alias'=>$val['alias']])}}"><img src="{{$val['image']}}" alt="#"></a>
                                            <h4><a href="{{route('product.detail',['alias'=>$val['alias']])}}">{{$val['title']}}</a></h4>
                                            <p class="quantity">{{$val['quantity']}}x - <span style="color: #ea1621;" class="amount">{{number_format($val['price'])}} đ</span></p>
                                          </li>
                                            @endforeach
                                      
                                        
                                        
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Tổng</span>
                                            <span class="total-amount" id="total1" style="color: #ea1621;">{{number_format($count_total)}} đ</span>
                                        </div>
                                        <a href="{{route('checkout_order.index')}}" class="btn animate" style="background-color: #283988;">Xem giỏ hàng</a>
                                        <a href="{{route('checkout_order.index')}}" class="btn animate" style="background-color: #ec2029;">Thanh toán</a>
                                    </div>
                                          @else
                                        <div class="dropdown-cart-header" style="text-align: center;">
                                        <span id="count-sp">Chưa có sản phẩm trong giỏ hàng</span>
                                      
                                    </div>
                                    @endif   

                                </div>
                              
            </div>
            </div>
        </div>
        </div>
        <!-- End Topbar -->
        <!-- Sidebar -->
        <div id="giohangpc" style="width: 0px !important;height: 100%;background-color: white;position: fixed;z-index: 99999;top:0px;right: 0;overflow-x: hidden;  transition: 0.5s;padding-left: 0px;padding-right: 0px;">
            
            <div class="row" style="margin-top: 5px;">
                <div class="container">
                <img class="ml-2" src="{{asset('public/icon/cart-svg.svg')}}" style="color: #283988;width: 40px;" >
                <span style="font-size: 20px;margin-left: 5px;color: #283988;">Giỏ hàng</span>
                <i class="fa fa-times fa-3x" onclick="close_giohangpc()" style="float:right;margin-top:5px;margin-right: 10px;color: #283988;cursor: pointer;" id="close-danhmuc"></i>
                                </div>
                <div class="container shopping-item">
                     <div class="container">    
                     @if(Session('cart'))

                    <ul class="shopping-list" id="cart_items">
                            <?php $i=0 ?>
                            @foreach(Session('cart') as $key1=> $val)
                            <?php $i++;?>
                            <li class="each_cart_{{$key1}}">
                            <h4 class="mb-2"><a href="{{route('product.detail',['alias'=>$val['alias']])}}" style="font-size: 16px;color: #283988;">{!!$i!!}.{{$val['title']}}</a></h4>
                            <a class="cart-img" href="{{route('product.detail',['alias'=>$val['alias']])}}" style="float: left;"><img src="{{$val['image']}}" alt="#" style="width: 100px;height: 100px;object-fit: cover;"></a>
                            <div class="form-row">
                            <p class="quantity ml-2" style="padding: 0px;"><!-- {{$val['quantity']}}x -  -->Giá:<span style="color: #ea1621;" class="amount ml-2">{{number_format($val['price'])}} đ</span></p>
                            </div>
                            <div class="form-row">
                                <span class="ml-2">Số lượng:</span>
                                <input class="each_quantity ml-2 amount_x_{{$key1}}" data-key={{$key1}} data-id_option="{{$key1}}"  value="{{$val['quantity']}}" type="number"   min="1" style="cursor: pointer;width: 50px;background-color: #F6F7FB;">
                                
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6 offset-lg-6" style="text-align: right;">
                                    <input type="button" data-id_option="{{$key1}}" class="delete_cart del-checkout" name="" value="Xoá" style="background-color: black;color: white !important;width: 50px;height:100%;border-radius: 5px;font-size: 14px; ">
                                </div>
                            </div>
                          </li>
                            @endforeach
                      
                        
                        
                    </ul>

                    <div class="bottom">
                        <div class="total">
                            <span style="text-transform: none;">Tổng tiền</span>
                            <span class="total-amount" id="total1" style="color: #ea1621;">{{number_format($count_total)}} đ</span>
                        </div>
                        <a href="{{route('checkout_order.index')}}" class="btn animate" style="background-color: #ec2029;text-transform: none;">Thanh toán</a>
                    </div>
                          @else
                        <div class="dropdown-cart-header" style="text-align: center;">
                        <span id="count-sp" style="font-size: 20px;">Chưa có sản phẩm trong giỏ hàng</span>
                      
                    </div>
                    @endif   
                    </div>
                </div>

            </div>
        </div>
        <!-- EndSidebar -->
<!--         <style>
        .menu-hover {
          height: 150px;
        }   
        .cat-hover:hover + .menu-hover {
            height: 300px;
        }
        </style> -->
        <div class="container menu-pc-new" style="height: 70px;color: #283988;">
            <div class="row">
                <div class="col-lg-6" style="padding: 0px !important;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3" style="height: 100%;">
                            <a href="{{route('home.index')}}"><img class="logo" src="{{$share_config->image}}" alt="logo" style="margin-top:15px !important;"></a>
                            </div>
                            <div class="col-lg-9" style="text-align: center;">
                                <div class="container" style="padding-top: 5px;">
                                    <div class="row">
                                        <div class="col-lg-3 dem-hover">
                                            <img class="dem-hover" src="{{asset('public/icon/mattress.svg')}}" style="width: 60%;cursor: pointer;">
                                            <br>Nệm
                                        </div>
                                        <div class="col-lg-3 changoi-hover">
                                            <img class="changoi-hover" src="{{asset('public/icon/blanked.svg')}}" style="width: 60%;cursor: pointer;">
                                            <br>Chăn,gối
                                        </div>
                                        <div class="col-lg-3 news-hover">
                                            <a href="{{url('/tin-tuc')}}">
                                            <img class="news-hover" src="{{asset('public/icon/news-2.svg')}}" style="width: 60%;cursor: pointer;">
                                            </a>
                                            <br>Tin tức
                                        </div>
                                           <div class="col-lg-3">
                                            <a href="{{url('/lien-he')}}">
                                            <img class="spks-hover" src="{{asset('public/icon/contact.svg')}}" style="width: 60%;cursor: pointer;">
                                            </a>
                                            <br>Liên hệ
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>                                                            
                </div>
                <div class="col-lg-6" style="padding: 0px !important;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5" style="border-left: solid 1px rgb(40, 57, 136,0.5);border-right: solid 1px rgb(40, 57, 136,0.5);">
                                <div class=" search-bar" style="width: 100%;margin-top: 10px;">
                                    <form action="{{route('product.search')}}" method="GET" >
                                        <input class="input-sm" name="search" placeholder="Nhập từ khoá" autocomplete="off" type="search">
                                        <button class="btnn" style="background-color: #283988;"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-7" style="padding: 0px !important;text-align: center;height: auto;">
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-lg-2" style="padding: 0px !important;">
                                            <img src="{{asset('public/icon/map-svg.svg')}}" style="width: 80%;margin-top: 10px;margin-left: 20px;cursor: pointer;">
                                        </div>
                                        <div class="col-lg-4" style="padding: 0px !important;">
                                            Tìm cửa hàng <b>quanh đây</b>
                                        </div>
                                        <div class="col-lg-6" style="background-color: yellow;padding: 0px !important;text-align: center;background-color: #283988;color: white;height: 71px;cursor: pointer;">
                                            Mua hàng gọi ngay <br><b>1800 2092</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- header của mean -->
        <div class="container dem-hover1" style="height: 300px;display: none;">
            <div class="row">
                 @foreach($danh_muc_tra as $danh_muc_tra)
                     @foreach($product_nem as $key_nem => $product_nem1)
                       @if($key_nem==$danh_muc_tra->id)
                <div class="col-2">
                   
                    <ul style="color: #283988;list-style-type:none;"><a href="{{route('category.show',['alias'=>$danh_muc_tra->alias])}}"><b>{{$danh_muc_tra->name}}</b></a><hr style="color: #283988;width: 100px;">
                        @foreach($product_nem1 as $product_nem2)
                            <li><a href="{{route('category.show',['alias'=>$product_nem2->alias])}}">{{$product_nem2->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                  @endif
                @endforeach
            @endforeach
            </div>
        </div>

           <div class="container changoi-hover1" style="height: 300px;display: none;">
            <div class="row">
                 @foreach($danh_muc_tra_chan as  $danh_muc_tra2)

                     @foreach($product_changoi as $key_changoi => $product_changoi1)
                       @if($key_changoi==$danh_muc_tra2->id)
                <div class="col-2">
                   
                   
                    <ul style="color: #283988;list-style-type:none;"><a href="{{route('category.show',['alias'=>$danh_muc_tra2->alias])}}"><b>{{$danh_muc_tra2->name}}</b></a><hr style="color: #283988;width: 100px;">
                        @foreach($product_changoi1 as $product_changoi2)
                            <li><a href="{{route('category.show',['alias'=>$product_changoi2->alias])}}">{{$product_changoi2->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                  @endif
                @endforeach
            @endforeach
            </div>
        </div>


         

        <script type="text/javascript">
            $(document).ready(function(){
  $(".dem-hover").mouseover(function(){
      $('.dem-hover1').show();
      $('.changoi-hover1').hide() 
  });
    $('.dem-hover1').mouseover(function () {
      $('.dem-hover1').show();      
    });
  $('.dem-hover1').mouseout(function () {
      $('.dem-hover1').hide();      
});

         
  $(".changoi-hover").mouseover(function(){
      $('.changoi-hover1').show(); 
      $('.dem-hover1').hide();
  });
    $('.changoi-hover1').mouseover(function () {
      $('.changoi-hover1').show();      
    });
  $('.changoi-hover1').mouseout(function () {
      $('.changoi-hover1').hide();      
});



});
        </script>

        <!-- Header Inner -->
      <!--   <div class="header-inner" style="background-color: #283988;height: 44px;">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row" >
                        <div class="col-lg-3" id="show-header">
                            <label for="btn-danhmuc" style="width: 100%;"><div class="all-category" >
                                <h3 class="cat-heading" style="padding: 15px 25px !important;"><i class="fa fa-bars" aria-hidden="true"></i>Danh mục</h3>
                                <input type="checkbox" id="btn-danhmuc" style="display: none;">
                                <ul class="main-category hide-header" style="display: none;" >

                                    @foreach($menu_cats as $key => $cat)
                                    
                                        @php
                                        $dem=0;
                                        @endphp
                                        @foreach($cat->children as $oke)
                                        @php
                                        $dem++;
                                        @endphp
                                        @endforeach 
                                        @if($dem>0)  
                                        <li class="ml-3"><a href="{{route('category.show',['alias'=>$cat->alias])}}">{!!$cat->name!!}<i style="padding-top: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        @else
                                        <li class="ml-3"><a href="{{route('category.show',['alias'=>$cat->alias])}}">{!!$cat->name!!}</a>
                                        @endif
                                        
                                        <ul class="sub-category ml-4">
                                            @if(!is_null($cat->children))
                                            
                                            @foreach ($cat->children as $key=>$cat1)
                                            @if($cat1)
                                            <li class=""><a  class="dropdown-item " href="{{route('category.show',['alias'=>$cat1->alias])}}" data-url="/san-tre-ali"> <img src="" class="img-fluid mr-2 "/>{!!$cat1->name!!}</a>
                                            
                                    </li>
                                    @endif
                                    @endforeach
                                    @endif
                                </ul>
                                    </li>
                                    
                                   @endforeach 
                                </ul>
                                
                            </div></label>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="menu-area">
                            
                                <nav class="navbar navbar-expand-lg">
                                    <div class="navbar-collapse">   
                                        <div class="nav-inner"> 
                                            <ul class="nav main-menu menu navbar-nav">
                                                    
                                                    @foreach ($menu_arr as $key=>$menu)
                                                    @if($key == 0)
                                                    <li class="nav-item {{Request::is('/*') ? 'current-page':''}}" style="height: 44px;">
                                                        <a class="nav-link " href="{{route('home.index')}}">{{$menu->title}}</a>
                                                    </li>
                                                    @else
                                                        @if($menu->type==1)
                                                    <li class="nav-item {{Request::path()===$menu->keyword ? 'current-page':''}}">
                                                        <a class="nav-link" href="{{$menu->link}}">{{$menu->title}}</a>
                                                    </li>
                                                        @else
                                                    <li class="nav-item {{Request::path()==='search-product'.'?search='.'dem' ? 'current-page':''}}">
                                                        <a class="nav-link" href="{{url('search-product'.'?search='.$menu->keyword)}}">{{$menu->title}}</a>
                                                    </li>
                                                        @endif
                                                    @endif
                                                    @endforeach
                                                     
                                                    
                                                </ul>
                                                
                                        </div>
                                    </div>
                                </nav>
          
                            </div>
                        </div>

      
                    </div>
                </div>
            </div>
        </div> -->
        <!--/ End Header Inner -->
    </header>
     <!-- <script type="text/javascript">
        $(document).ready(function(){
            
        $('input[name="search"]').keyup(function(){
           
            var query=$(this).val();
            if(query!=''){
                $.ajax({
                    method:'GET',
                    url:'{{route("api.auto_complete")}}',
                    
                    data:{query:query},
                    success:function(res){
                        $('div[class$=search_result]').fadeIn();
                        $('div[class$=search_result]').html(res);
                        
                    }
                });
                
              
            }
            else{
                $('div[class$=search_result]').fadeOut();
            }
        });
        $(document).on('click','li',function(){
            $('input[name="search').val($(this).text());
             $('div[class$=search_result]').fadeOut();
        });
        });
   </script> -->

    <script type="text/javascript">
        $(document).ready(function(){
            $('#show-header').on('mouseover',function(){
                $('.hide-header').show();
            });
            $('#show-header').on('mouseout',function(){
                $('.hide-header').hide();
            });
        });
    </script>
      <script type="text/javascript">
        $(document).ready(function(){
            $('.arrow2').on('click',function(){
                var cay=$(this).data('key');
                $('.menu_con_'+cay).hide();
                $('#arrow2_'+cay).hide();
                $('#arrow1_'+cay).show();
            });
           
        });
        $(document).ready(function(){
            $('.arrow1').on('click',function(){
                var cay=$(this).data('key');
                $('.menu_con_'+cay).show();
                $('#arrow1_'+cay).hide();
                $('#arrow2_'+cay).show();
            });
           
        });
    </script>
    <script>
function open_danhmuc() {
  document.getElementById("danhmuc").style.width = "250px";
    document.getElementById("giohang").style.padding = "0";
    document.getElementById("giohang").style.width= "0px";
}

function close_danhmuc() {
  document.getElementById("danhmuc").style.width= "0px";
}

function open_giohang() {
  document.getElementById("giohang").style.width = "250px";
  document.getElementById("danhmuc").style.width= "0px";
}

function open_giohangpc() {
  document.getElementById("giohangpc").style.width = "450px";
}

function close_giohang() {
  document.getElementById("giohang").style.width= "0px";
  document.getElementById("giohang").style.padding = "0";
}

function close_giohangpc() {
  document.getElementById("giohangpc").style.width= "0px";
}

</script>