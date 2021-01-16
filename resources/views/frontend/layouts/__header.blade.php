<!DOCTYPE html>
<html lang="zxx">
<head>

    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>Đệm Á Châu</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{!!$share_config->favicon!!}">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    
    <!-- StyleSheet -->
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=691807794780343&autoLogAppEvents=1" nonce="nOPTY4k6"></script>

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

    
    
</head>

<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<body class="js" style="background-color: #f3f5f7">
    
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->


    <div class="hotline-phone-ring-wrap">       
            <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle"> <a href="tel:{{$share_config->hotline}}" class="pps-btn-img"> <img src="https://netweb.vn/img/hotline/icon.png" alt="so dien thoai" width="50"> </a></div>
        </div>      
                 
        
</div>



<div class="float-icon-hotline">            
        <ul class ="left-icon hotline">
            <li class="hotline_float_icon"><a target="_blank" rel="nofollow" id="messengerButton" href="{{$share_config->facebook}}"><i class="fa fa-zalo animated infinite tada"></i><span>Zalo</span></a></li>
            <li class="hotline_float_icon"><a target="_blank" rel="nofollow" id="messengerButton" href="{{$share_config->twitter}}"><i class="fa fa-messenger animated infinite tada"></i><span>Facebook</span></a></li>
        </ul>       
</div>
    
    <!-- Header -->
    <header class="header shop">
        <!-- Topbar -->
        <div class="topbar" style="background-color: #3a559f;" >
            <div class="container"  >
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                                <li><i class="ti-headphone-alt"></i>  Hotline miễn phí: 1900 3052 (8:00 - 21:00)</li>
                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    <div class="col-lg-3 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                                <li><i class="fa fa-calendar"></i> 30 Ngày đổi trả miễn phí</li>
                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    <div class="col-lg-3 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                                <li><i class="fa fa-truck"></i> Miễn phí vận chuyển</li>
                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    <div class="col-lg-3 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                                <li><i class="fas fa-pig"></i> Trả góp lãi xuất 0%</li>
                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    
                </div>
            </div>
        </div>
   
        <!-- End Topbar -->
        <div class="middle-inner">
            <div class="container">
                <div class="row" >
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        
                        <div style="padding-top: 32px;" class="logo">
                            <a href="{{route('home.index')}}"><img src="{{$share_config->image}}" alt="logo"></a>
                        </div>
                        
                        <!--/ End Logo -->
                        <!-- Search Form -->
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                            <!-- Search Form -->
                            <div class="search-top">
                                <form class="search-form" action="{{route('product.search')}}" method="GET">
                                    <input type="text" placeholder="Nhập từ khoá" id="search_key" autocomplete="off" name="search">
                                    <button value="search" type="submit"><i class="ti-search"></i></button>
                                    <div class="search_result"></div>
                                </form>
                                
                            </div>
                              
                            <!--/ End Search Form -->
                        </div>
                        <!--/ End Search Form -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-6 col-md-7 col-12">
                        <div style="padding-top: 32px;" class="search-bar-top">
                            <div class="search-bar">
                                
                                <form action="{{route('product.search')}}" method="GET">
                                  
                                    <input name="search" placeholder="Nhập từ khoá" autocomplete="off" type="search">
                                    <button class="btnn"><i class="ti-search"></i></button>
                                </form>

                            </div>
                            <div  class="search_result"></div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                         
                       <div class="hotline-phone-ring-wrap1"> 

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
                            <div class="sinlge-bar shopping">
                                <a href="#" class="single-icon"><i class="ti-bag"></i><span class="total-count" id="cart-count">{{$count_cart}}</span></a>
                                <!-- Shopping Item -->
                                <div class="shopping-item">
                                     @if(Session('cart'))
                                    <div class="dropdown-cart-header">
                                        <span id="count-sp">{{$count_cart}} Sản phẩm</span>
                                        <a href="{{route('checkout_order.index')}}">Xem giỏ hàng</a>
                                    </div>
                                    <ul class="shopping-list" id="cart_items">
                                         
                                            @foreach(Session('cart') as $key1=> $val)
                                            <li class="each_cart_{{$key1}}">
                                            <a href="#" class="delete_cart" data-id_option="{{$key1}}" title="Xoá Sản phẩm"><i class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="{{route('product.detail',['alias'=>$val['alias']])}}"><img src="{{$val['image']}}" alt="#"></a>
                                            <h4><a href="{{route('product.detail',['alias'=>$val['alias']])}}">{{$val['title']}}</a></h4>
                                            <p class="quantity">{{$val['quantity']}}x - <span style="color: red;" class="amount">{{number_format($val['price'])}} đ</span></p>
                                          </li>
                                            @endforeach
                                      
                                        
                                        
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Tổng</span>
                                            <span class="total-amount" id="total1" style="color: red;">{{$count_total}} đ</span>
                                        </div>
                                        <a href="{{route('checkout_order.index')}}" class="btn animate">Xem giỏ hàng</a>
                                        <a href="{{route('checkout_order.index')}}" class="btn animate">Thanh toán</a>
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
        <div class="header-inner" style="background-color: #283988;height: 64px;">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row" >
                        <div class="col-lg-3" id="show-header">
                            <div class="all-category" >
                                <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>Danh mục</h3>
                               
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
                                        <li><a href="#">{!!$cat->name!!}<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        @else
                                        <li><a href="#">{!!$cat->name!!}</a>
                                        @endif
                                        
                                        <ul class="sub-category">
                                            @if(!is_null($cat->children))
                                            
                                            @foreach ($cat->children as $key=>$cat1)
                                            @if($cat1)
                                            <li class=""><a  class="dropdown-item " href="" data-url="/san-tre-ali"> <img src="" class="img-fluid mr-2 "/>{!!$cat1->name!!}</a>
                                            
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
                                                    <li class="nav-item" style="background-color: #ea1621;height: 64px;">
                                                        <a class="nav-link" href="{{$menu->link}}">{{$menu->title}}</a>
                                                    </li>
                                                    @else
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{$menu->link}}">{{$menu->title}}</a>
                                                    </li>
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
     <script type="text/javascript">
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
   </script>

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