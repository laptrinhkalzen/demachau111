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

@if(Session('out_stock'))

<script type="text/javascript">
swal("Sản phẩm tạm hết. Vui lòng thử lại sau!");

</script>

@endif

    <header class="header shop">
        <div class="topbar-mobile">
            <div class="container">
            <div class="row">
                <div class="col-4">
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
                                <a href="#" class="single-icon"><!-- <i class="fa fa-shopping-cart fa-2x" style="color: #283988;padding-top: 15px;"></i> --><img src="{{asset('public/icon/cart-svg.svg')}}" style="color: #283988;width: 30px;margin-top: 15px;" onclick="open_giohang()"><span class="total-count" id="cart-count" style="border: 1px solid #ea1621;background-color: #ea1621;color: white;border-radius: 50%;vertical-align: bottom;">{{$count_cart}}</span></a>
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
        <div class="topbar" style="background-color: #3a559f;" >
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
                            <ul class="list-main">
                                <li><i class="fa fa-credit-card-alt" aria-hidden="true"></i><span style="vertical-align: -webkit-baseline-middle">Trả góp lãi xuất 0%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12">
                        <form class="search-form" action="{{route('product.search')}}" method="GET">
                        <input name="search" placeholder="Nhập từ khoá" autocomplete="off" type="search">
                        <button class="btnn"><i class="ti-search"></i></button>
                        </form>
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
                    <hr style="background-color: #283988;margin-top: 0px;">
                    <p class="ml-2" style="font-size: 14px;color: black;"><a href="{{route('home.index')}}" style="font-weight: bold;">Trang chủ</a></p>
                    <hr style="background-color: #283988;">
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
                            <hr style="background-color: #283988;">
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
                            <hr style="background-color: #283988;">
                        @endif
                        
                    
                   @endforeach 
                </div>
                <div class="menu-2 col-12" id="giohang" style="background-color: white;color: black;width: 0px !important;position: fixed;z-index: 999;top:0;right: 0;overflow-x: hidden;  transition: 0.5s;padding-left: 0px;padding-right: 0px;">
                    <i class="fa fa-times fa-3x" onclick="close_giohang()" style="float:right;margin-right: 5px;color: white;" id="close-giohang"></i>
                    <p  style="font-size: 20px;text-align: center;color: white;font-weight: bold;padding: 14px 0;background-color: #283988;">GIỎ HÀNG</p>
                               
                                <div class="container shopping-item cart">
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
        <div class="middle-inner" >
            <div class="container">
                <div class="row" >
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        
                        <div class="logo">
                            <a href="{{route('home.index')}}"><img class="logo" src="{{$share_config->image}}" alt="logo"></a>
                        </div>
                        
                        <!--/ End Logo -->
                        <!-- Search Form -->
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search" style="vertical-align: super;"></i></a></div>
                            <div class="search-top">
                                <form class="search-form" action="{{route('product.search')}}" method="GET">
                                    <input type="text" placeholder="Nhập từ khoá" id="search_key" autocomplete="off" name="search">
                                    <button value="search" type="submit" style="background-color: #ea1621"><i class="ti-search" style="color: white;"></i></button>
                                    <div class="search_result"></div>
                                </form>
                                
                            </div>
                             <div class="sinlge-bar shopping cart">
                                <a href="#" class="single-icon"><i class="ti-bag"></i><span class="total-count" id="cart-count">{{$count_cart}}</span></a>
                                <!-- Shopping Item -->
                                <div class="shopping-item">
                                     @if(Session('cart'))
                                    <div class="dropdown-cart-header">
                                        <!-- <span class="count-sp" id="count-sp">{{$count_cart}} Sản phẩm</span> -->
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
                                        <span id="count-sp">Chưa có sản phẩm trong giỏ hàng</span>
                                      
                                    </div>
                                    @endif   

                                </div>
                                <!--/ End Shopping Item -->
                            </div> 

                        </div>
                        <!--/ End Search Form -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-6 col-md-7 col-12">
                        <div style="padding-top: 32px;" class="search-bar-top">
                            <div class="search-bar">
                                
                                <form action="{{route('product.search')}}" method="GET">
                                  
                                    <input name="search" placeholder="Nhập từ khoá" autocomplete="off" type="search">
                                    <button class="btnn" style="background-color: #283988;"><i class="ti-search"></i></button>
                                </form>

                            </div>
                            <div  class="search_result"></div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                         
                       <div class="hotline-phone-ring-wrap1" style="margin-left: 30px;"> 

                                <div class="hotline-phone-ring">
                                <div class="hotline-phone-ring-circle"></div>
                                <div class="hotline-phone-ring-circle-fill"></div>
                                <div class="hotline-phone-ring-img-circle"> <a href="tel:{{$share_config->hotline}}" class="pps-btn-img"> <img src="https://netweb.vn/img/hotline/icon.png" alt="so dien thoai" width="50"> </a></div>
                            </div>      
                            <div class="hotline-bar"> 
                                <a href="tel:{{$share_config->hotline}}"> <span class="text-hotline">{{$share_config->hotline}}</span> </a>
                            </div>           
                            </div>
                    </div>
                
                    <div class="col-lg-2 col-md-3 col-12">
                        <div style="padding-top: 35px;" class="right-bar">
                            <!-- Search Form -->
                            <div class="sinlge-bar shopping cart">
                                <a href="#" class="single-icon"><i class="ti-bag"></i><span class="total-count" id="cart-count">{{$count_cart}}</span></a>
                                <!-- Shopping Item -->
                                <div class="shopping-item">
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
                                        <span id="count-sp">Chưa có sản phẩm trong giỏ hàng</span>
                                      
                                    </div>
                                    @endif   

                                </div>
                                <!--/ End Shopping Item -->
                            </div>
                           
                        
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Inner -->
        <div class="header-inner" style="background-color: #283988;height: 44px;">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row" >
                        <div class="col-lg-3" id="show-header">
                            <div class="all-category" >
                                <h3 class="cat-heading" style="padding: 15px 25px !important;"><i class="fa fa-bars" aria-hidden="true"></i>Danh mục</h3>
                               
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
                                
                            </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="menu-area">
                                <!-- Main Menu -->
                                <nav class="navbar navbar-expand-lg">
                                    <div class="navbar-collapse">   
                                        <div class="nav-inner"> 
                                            <ul class="nav main-menu menu navbar-nav">
                                                    
                                                    @foreach ($menu_arr as $key=>$menu)
                                                    @if($key == 0)
                                                    <li class="nav-item {{Request::is('/') ? 'current-page':''}}" style="height: 44px;">
                                                        <a class="nav-link " href="{{route('home.index')}}">{{$menu->title}}</a>
                                                    </li>
                                                    @else
                                                        @if($menu->type==1)
                                                    <li class="nav-item {{Request::path()===$menu->keyword ? 'current-page':''}}">
                                                        <a class="nav-link" href="{{$menu->link}}">{{$menu->title}}</a>
                                                    </li>
                                                        @else
                                                    <li class="nav-item {{Request::path()===url('search-product'.'?search='.$menu->keyword) ? 'current-page':''}}">
                                                        <a class="nav-link" href="{{url('search-product'.'?search='.$menu->keyword)}}">{{$menu->title}}</a>
                                                    </li>
                                                        @endif
                                                    @endif
                                                    @endforeach
                                                     
                                                    
                                                </ul>
                                                
                                        </div>
                                    </div>
                                </nav>
                                <!--/ End Main Menu --> 
                            </div>
                        </div>

      
                    </div>
                </div>
            </div>
        </div>
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

function close_giohang() {
  document.getElementById("giohang").style.width= "0px";
  document.getElementById("giohang").style.padding = "0";
}

</script>