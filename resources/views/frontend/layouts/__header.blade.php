<<<<<<< Updated upstream
=======
<!DOCTYPE html>
<html lang="zxx">


    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('public/demachau/images/favicon.png')}}">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    
    <!-- StyleSheet -->
    
    <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
>>>>>>> Stashed changes

<section class="header">
    <div class="list-location-top">
        <div class="container position-relative px-md-4">
            <div class="swiper-container ">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="">
                        <a href="javascript:void(0)" title="Hà Nội">
                            {!!$share_config->company_name!!}&nbsp|
                            Hotline: {!!$share_config->hotline!!}&nbsp|
                            Email: {!!$share_config->email!!}&nbsp|
                            Địa chỉ: {!!$share_config->address!!}&nbsp|
                            Thời gian làm việc: {!!$share_config->working_hours!!}&nbsp|
                        </a>
                    </div>
                    
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
            <div class="swiper-button-next text-right"><i class="fas fa-chevron-right"></i></div>
        </div>
    </div>
    
  
     
       
   
                             
    <div class=" nav-center">
        <div class="container">
            <nav class="navbar navbar-expand-md py-md-2 px-0">
                <a class="navbar-brand d-none d-md-block" href="{{route('home.index')}}" title="">
                    <img src="{!!$share_config->image!!}" style="width:100px" class="img-fluid" />
                </a>
                <a class="navbar-brand d-md-none" href="{{route('home.index')}}" title="">
                    <img src="{!!$share_config->image!!}" style="width:30px" class="img-fluid" />
                </a>
                <div class="d-md-none">
                    <div class="input-group form-search flex-nowrap mr-2 width-mb" style="width: 210px;">
                        <input type="text" class="form-control find-product " placeholder="Tìm sản phẩm....">
                        <div class="input-group-append">
                            <button class="btn btn-search es-search-button">
                            <img  src="{!!asset('images/searche209.svg?v=1.0.0')!!}" class="img-fluid" />
                            </button>
                        </div>
                    </div>
                </div>
<<<<<<< Updated upstream
                <!--22-4 Thêm btn giỏ hàng-->
                <div class="nav-item align-self-md-center mb-0 cart d-md-none">
                    <button class="btn p-0 dropdown-cart-trigger-mobile" @*onclick="$('.cart-mobile').toggle(100, 'swing');" *@>
                    <div class="icon ">
                        <img src="{!!asset('images/cart-icone209.svg?v=1.0.0')!!}" class="img-fluid mr-2 icon-nav" />
                        <div id="cart-count-mobile" class="amount">
=======
            </div>
        </div>
        <!-- End Topbar -->
        <div class="middle-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{route('home.index')}}"><img src="{{('images/logo.png')}}" alt="logo"></a>
                        </div>
                        <!--/ End Logo -->
                        <!-- Search Form -->
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                            <!-- Search Form -->
                            <div class="search-top">
                                <form class="search-form">
                                    <input type="text" placeholder="Search here..." name="search">
                                    <button value="search" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <!--/ End Search Form -->
>>>>>>> Stashed changes
                        </div>
                    </div>
<<<<<<< Updated upstream
                    </button>
                </div>
                <!--22-4 Sửa onclick-->
                <button class="navbar-toggler px-1" type="button" data-toggle="collapse"
                onclick="$('.cate-mobile').toggle(100, 'swing');">
                <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse w-100 align-self-center">
                    <ul class=" navbar-nav ml-auto mt-4 mt-md-0 w-100 justify-content-xl-around">
                        <li class="nav-item mr-md-3 align-self-center d-none d-md-block position-relative ">
                            <form action="{{route('product.search')}}" method="get">
                                <div class="input-group form-search flex-nowrap mb-1 ">
                                    <input type="text" class="form-control find-product" placeholder="Tìm sản phẩm...." name="keyword" id="search" autocomplete="off">
                                    <div class="input-group-append es-search-button">
                                        <button class="btn btn-search"  type="submit">
                                        <img  src="{!!asset('images/searche209.svg?v=1.0.0')!!}" class="img-fluid" />
                                        </button>
                                    </div>
                                    <div class="suggest-text suggest-text-1">
                                        <div class="h6 px-3">
                                            Gợi ý cho bạn
                                        </div>
                                        <div class="color-007DFF  px-3">
                                            <div class="py-1">
                                                <a href="javascript:void(0)">Sàn gỗ công nghiệp</a>
                                            </div>
                                            <div class="py-1">
                                                <a href="javascript:void(0)">Sàn nhựa vinyl</a>
                                            </div>
                                            <div class="py-1">
                                                <a href="javascript:void(0)">Sàn gỗ công nghiệp giá rẻ</a>
                                            </div>
                                            <div class="py-1">
                                                <a href="javascript:void(0)">Sàn gỗ ngoài trời</a>
                                            </div>
                                            <div class="py-1">
                                                <a href="javascript:void(0)">Sàn gỗ thanh lý</a>
                                            </div>
                                        </div>
=======
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="search-bar-top">
                            <div class="search-bar">
                                <select>
                                    <option selected="selected">Danh mục</option>
                                    <option>watch</option>
                                    <option>mobile</option>
                                    <option>kid’s item</option>
                                </select>
                                <form>
                                    <input name="search" placeholder="Nhập sản phẩm muốn tìm kiếm" type="search">
                                    <button class="btnn"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <div class="right-bar">
                            <!-- Search Form -->
                            <div class="sinlge-bar">
                                <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="sinlge-bar">
                                <a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="sinlge-bar shopping">
                                <a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a>
                                <!-- Shopping Item -->
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>2 Items</span>
                                        <a href="#">View Cart</a>
>>>>>>> Stashed changes
                                    </div>
                                    <div class="suggest-text suggest-text-2">
                                        <div class="h6 px-3">
                                            Sản phẩm gợi ý
                                        </div>
<<<<<<< Updated upstream
=======
                                        <a href="{{route('home.checkout_order')}}" class="btn animate">Checkout</a>
>>>>>>> Stashed changes
                                    </div>
                                </div>
                            </form>
                        </li>
                    
                        <li  class="nav-item dropdown mr-md-3 align-self-md-center   mb-md-0 cart">

                            <div id="cart">
                                <div class="icon mr-2">
                                    <img src="{!!asset('images/cart-icone209.svg?v=1.0.0')!!}" class="img-fluid mr-2 icon-nav" />
                                    <div class="amount" >
                                        {{$count_cart}}
                                    </div>
                                </div>
                            </div>
                             
                            <div id='cart_items' class="dropdown-menu dropdown-menu-right dropdown-cart">
                                <div class="_binding_dropdown_cart">
                                    <div class="container">

                                    @if(Session('cart'))
                                    @foreach(Session('cart') as $val)
                                     <div class="row">

                                        <div class="col-md-4">
                                            <img src="{{$val['image']}}" >
                                        </div> 
                                         <div class="col-md-8">
                                            <div>{{$val['title']}}</div>
                                             <div>{{$val['quantity']}} x {{$val['price']}}</div>
                                        </div>   
                                     </div>   
                                    @endforeach
                                    @endif
                                </div>
                                </div>
                                
                                <div id="sub_total" class="d-flex px-3">
                                    <div class="text-uppercase">
                                        Tổng tiền:
                                    </div>
                                    <div class="h6 font-weight-bold ml-auto color-EE7D22 small-total-cart">
                                        {{number_format($count_total)}}đ
                                    </div>
                                </div>
                                <div class="bottom-dropdown d-flex  ">
                                    <div class="small mr-3">
                                        Bạn còn <span class="dropdown-quantity-cart"></span> sản phẩm trong giỏ hàng
                                    </div>
                                    <div class="h6 ml-auto">
                                        <a href="gio-hang.html" id="link-target-cart" class="btn-link link-view-more text-uppercase">XEM GIỎ HÀNG</a><br />
                                        <a rel="nofollow" href="{{route('home.checkout_order')}}"  id="link-clear-cart" class="btn-link link-view-more text-uppercase"><small>Xóa giỏ hàng</small></a><br />
                                    </div>
                                </div>
                         
                        </li>
                        </div>
                        <li class="nav-item mr-md-3  align-self-md-center d-flex d-sm-none d-lg-flex"
                            style="white-space: nowrap;">
                            <div>
                                <a rel="nofollow" href="tel: {!!$share_config->hotline!!}">
                                    <div><span class="font-weight-bold h6 ">{!!$share_config->hotline!!}</span></div>
                                    <div class="small">Hotline</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item mr-md-3  align-self-md-center d-flex d-sm-none d-lg-flex"
                            style="white-space: nowrap;">
                            <div>
                                <a href="{{route('news.index')}}">
                                    <div><span class="font-weight-bold h6">Tin tức</span></div>
                                    <div class="small">& Khuyến mại</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
<<<<<<< Updated upstream
    </div>
          
    <!--     <div class="local-mobile container d-flex d-md-none small py-2" style="background: #C8EBFD;">
        <div><i class="fas fa-map-marker-alt mr-2" style="color: #1A468F;"></i>Bạn đang xem sản phẩm tại Hà Nội</div>
        <a href="#" rel="nofollow" class="btn-link ml-auto" style="text-decoration: underline;" data-toggle="modal" data-target="#modal-khu-vuc">Đổi</a>
    </div> -->
    <section>
        <section class="bg-fff  pb-1">
            <div class="menu-fix home">
                <div class="container position-relative">
                    <div class="row flex-md-row-reverse">
                        <div class="col-lg-9 col-md-8 col-12 pl-md-0">
                            <div class="menu-ngang d-flex justify-content-between small">
                                <!--                                 <div>
                                    <a rel="nofollow" href="javascrip:;" class="btn-sm btn-link last-seen-link">
                                        <img  src="{!!asset('images/spvx-ice209.svg?v=1.0.0')!!}" class="img-fluid icon mr-2" />Sản phẩm vừa
                                        xem
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)" class="btn-sm btn-link">
                                        <img  src="{!!asset('images/location-icn.svg')!!}"  class="img-fluid icon mr-2" />Hệ thống
                                        <span class="px-1 font-weight-bold" style="color:#007DFF;"></span>
                                        Showroom
                                    </a>
                                </div>
                                <div>
                                    <a rel="nofollow" href="javascript:void(0)" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-sm btn-link">
                                        <img  src="{!!asset('images/spvx-ic3.svg?v=1.0.0')!!}"  class="img-fluid icon mr-2" />Tải
                                        Catalogue
                                    </a>
                                    <div class="dropdown-menu cust-downl-cate" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="tai-catalogue.html">Tải Catalogue</a>
                                        <a class="dropdown-item" href="thu-vien-3d-kien-truc-su.html">Thư viện 3D kiến trúc sư</a>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" rel="nofollow" class="btn-sm btn-link _btn-lien-he-bh" data-toggle="modal"
                                        data-target="#modal-lien-he">
                                        <img  src="{!!asset('images/spvx-ic4e209.svg?v=1.0.0')!!}" class="img-fluid icon mr-2" />Liên hệ bảo
                                        hành
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)" class="btn-sm btn-link">
                                        <img  src="{!!asset('images/spvx-ic5e209.svg?v=1.0.0')!!}" class="img-fluid icon mr-2" />Dự toán công
                                        trình
                                    </a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <ul class="list-group list-menu-cate d-none d-md-block un-expand   " style="">
                                <li class="list-group-item active " style="background-color: #13295B">
                                    <a rel="nofollow" href="javascript:;" >
                                        <img src="{!!asset('images/listView.svg')!!}" class="img-fluid mr-2" />Danh mục
                                    </a>
                                    <i class="fas fa-caret-down" style="float: right;"></i>
                                </li>
                                @foreach ($category as $key=>$cat)
                                <li class="list-group-item">
                                    <a href="{!! route('product.show',['alias' => $cat->alias])!!}" >
                                        <img src=""
                                        class="img-fluid mr-2"/>{!!$cat->title!!}
                                    </a>
                                    <div class="subcate">
                                        <ul class="ul-tree-lv-1">
                                            @if(!is_null($cat->children))
                                            
                                            @foreach ($cat->children as $key=>$cat1)
                                            @if($cat1)
                                            <li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="{!! route('product.show',['alias' => $cat1->alias])!!}" data-url="/san-tre-ali">{!!$cat1->title!!}</a>
                                            <ul class="ul-tree-lv-2">
                                                @foreach ($cat1->children as $key=>$cat2)
                                                <li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="{!! route('product.show',['alias' => $cat2->alias])!!}" data-url="/san-tre-ali">{!!$cat2->title!!}</a>
=======
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="all-category">
                                <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>DANH MỤC</h3>
                                <ul class="main-category">
                                    <li><a href="#">New Arrivals <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="sub-category">
                                            <li><a href="#">accessories</a></li>
                                            <li><a href="#">best selling</a></li>
                                            <li><a href="#">top 100 offer</a></li>
                                            <li><a href="#">sunglass</a></li>
                                            <li><a href="#">watch</a></li>
                                            <li><a href="#">man’s product</a></li>
                                            <li><a href="#">ladies</a></li>
                                            <li><a href="#">westrn dress</a></li>
                                            <li><a href="#">denim </a></li>
                                        </ul>
                                    </li>
                                    <li class="main-mega"><a href="#">best selling <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="mega-menu">
                                            <li class="single-menu">
                                                <a href="#" class="title-link">Shop Kid's</a>
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/225x155" alt="#">
                                                </div>
                                                <div class="inner-link">
                                                    <a href="#">Kids Toys</a>
                                                    <a href="#">Kids Travel Car</a>
                                                    <a href="#">Kids Color Shape</a>
                                                    <a href="#">Kids Tent</a>
                                                </div>
                                            </li>
                                            <li class="single-menu">
                                                <a href="#" class="title-link">Shop Men's</a>
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/225x155" alt="#">
                                                </div>
                                                <div class="inner-link">
                                                    <a href="#">Watch</a>
                                                    <a href="#">T-shirt</a>
                                                    <a href="#">Hoodies</a>
                                                    <a href="#">Formal Pant</a>
                                                </div>
                                            </li>
                                            <li class="single-menu">
                                                <a href="#" class="title-link">Shop Women's</a>
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/225x155" alt="#">
                                                </div>
                                                <div class="inner-link">
                                                    <a href="#">Ladies Shirt</a>
                                                    <a href="#">Ladies Frog</a>
                                                    <a href="#">Ladies Sun Glass</a>
                                                    <a href="#">Ladies Watch</a>
                                                </div>
>>>>>>> Stashed changes
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endif
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                            <i class="fas fa-angle-right" style="float: right;"></i>
                        </li>
                        @endforeach
                        <!--Nút xem thêm-->
                        <li class="list-group-item" style="cursor: pointer;">
                            <i class="fas fa-plus mr-3"></i>Xem thêm
                        </li>
                    </ul>
                    <ul class="row menu-cate-mobile  d-md-none no-gutters">
                        <div class="col-3 px-1">
                            <a href="{!! route('product.show',['alias' => 'san-go-cong-nghiep'])!!}" class="btn btn-cate">
                                <img src="{!!asset('/noithathunggia/uploads/2020/09/07/gocongnghiepe209.png?v=1.0.0')!!}"
                                class="img-fluid mb-2" />
                                <div>
                                    Sàn gỗ công nghiệp
                                </div>
                            </a>
                        </div>
<<<<<<< Updated upstream
                        <div class="col-3 px-1">
                            <a href="{!! route('product.show',['alias' => 'san-go-tu-nhien'])!!}" class="btn btn-cate">
                                <img src="{!!asset('/noithathunggia/uploads/2020/05/21/gotunhiene209.png?v=1.0.0')!!}"
                                class="img-fluid mb-2" />
                                <div>
                                    Sàn gỗ tự nhiên
                                </div>
                            </a>
                        </div>
                        <div class="col-3 px-1">
                            <a href="{!! route('product.show',['alias' => 'san-nhua'])!!}" class="btn btn-cate">
                                <img src="{!!asset('/noithathunggia/uploads/2020/05/21/sannhuae209.png?v=1.0.0')!!}"
                                class="img-fluid mb-2" />
                                <div>
                                    Sàn nhựa vinyl
                                </div>
                            </a>
                        </div>
                        <div class="col-3 px-1">
                            <a href="{!! route('product.show',['alias' => 'san-go-ngoai-troi'])!!}" class="btn btn-cate">
                                <img src="{!!asset('/noithathunggia/uploads/2020/05/21/Go%20Ngoai%20troie209.png?v=1.0.0')!!}"
                                class="img-fluid mb-2" />
                                <div>
                                    Sàn gỗ ngoài trời
                                </div>
                            </a>
                        </div>
                        <div class="col-3 px-1">
                            <a href="{!! route('product.show',['alias' => 'do-gia-dung'])!!}" class="btn btn-cate">
                                <img src="{!!asset('/noithathunggia/uploads/2020/05/21/cleane209.png?v=1.0.0')!!}"
                                class="img-fluid mb-2" />
                                <div>
                                    Đồ gia dụng
                                </div>
                            </a>
=======
                        <div class="col-lg-9 col-12">
                            <div class="menu-area">
                                <!-- Main Menu -->
                                <nav class="navbar navbar-expand-lg">
                                    <div class="navbar-collapse">   
                                        <div class="nav-inner"> 
                                            <ul class="nav main-menu menu navbar-nav">
                                                    <li class="active"><a href="#">Home</a></li>
                                                    <li><a href="#">Product</a></li>                                                
                                                    <li><a href="#">Service</a></li>
                                                    <li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
                                                        <ul class="dropdown">
                                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="{{route('home.checkout_order')}}">Checkout</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Pages</a></li>                                  
                                                    <li><a href="#">Blog<i class="ti-angle-down"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact.html">Contact Us</a></li>
                                                </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!--/ End Main Menu --> 
                            </div>
>>>>>>> Stashed changes
                        </div>
                        <div class="col-3 px-1">
                            <a href="{!! route('product.show',['alias' => 'san-go-thanh-ly'])!!}" class="btn btn-cate">
                                <img src="{!!asset('/noithathunggia/uploads/2020/05/21/gocongnghiepe209.png?v=1.0.0')!!}"
                                class="img-fluid mb-2" />
                                <div>
                                    Sàn gỗ thanh lý
                                </div>
                            </a>
                        </div>
                        <div class="col-3 px-1">
                            <a href="{!! route('product.show',['alias' => 'trang-tri-noi-that'])!!}" class="btn btn-cate">
                                <img src="{!!asset('/noithathunggia/uploads/2020/05/21/bede209.png?v=1.0.0')!!}"
                                class="img-fluid mb-2" />
                                <div>
                                    Trang trí nội thất
                                </div>
                            </a>
                        </div>
                        <div class="col-3 px-1">
                            <a href="{!! route('product.show',['alias' => 'trang-tri-ngoai-that'])!!}" class="btn btn-cate">
                                <img src="{!!asset('/noithathunggia/uploads/2020/05/21/homee209.png?v=1.0.0')!!}"
                                class="img-fluid mb-2" />
                                <div>
                                    Trang trí ngoại thất
                                </div>
                            </a>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="spvx " style="">
                <div class="row">
                    <div class="col-12">
                        <h6 class=" py-2 px-3 mb-0">Sản phẩm bạn đã xem</h6>
                    </div>
                </div>
                <div class="row no-gutters h-100 _binding_last_seen_product">
                </div>
            </div>
        </div>
    </div>
</section>
<!--22-4 danh mục mobile popup-->
<section class="cate-mobile ">
    <div class="bg-fff p-3 m-auto">
        <div class="tree-menu-mobile">
            <ul>
                @foreach ($category as $key=>$cat)
                <li>
                    <a href="{!! route('product.show',['alias' => $cat->alias])!!}"><span class="span-tree-node tree-lv-0">{!!$cat->title!!}</span></a>
                    <ul>
                        @if(!is_null($cat->children))
                        @foreach ($cat->children as $key=>$cat1)
                        @if($cat1)
                        <li class="li-tree-lv-1">
                            <a href="{!! route('product.show',['alias' => $cat1->alias])!!}"><span class="span-tree-node tree-lv-1" data-sp=1>{!!$cat1->title!!}</span></a>
                        </li>
                        @endif
                        @endforeach
                        @endif
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
        <div class=" align-self-md-center d-flex  ">
            <div class="font-weight-bold">
                Hotline:
            </div>
            <img src="{!!asset('images/hot-line-red-icon.svg')!!}" class="img-fluid mx-2 icon-nav align-self-center wow tada infinite " style="width: 20px;" />
            <div class="align-self-center">
                <a rel="nofollow" href="javascript:void(0)">
                    <div class=" font-weight-bold mb-0">{!!$share_config->hotline!!}</div>
                </a>
            </div>
        </div>
    </div>
    <button class=" btn close-popup" onclick="$('.cate-mobile').toggle(100, 'swing');">
    <img src="{!!asset('images/times-icon.svg')!!}" />
    </button>
</section>
</section>
<div class="social-button">
<div class="social-button-content">
    <a rel="nofollow" href="tel: {!!$share_config->hotline!!}" class="call-icon" rel="nofollow">
        <i class="fas fa-mobile-alt"></i>
        <div class="animated alo-circle"></div>
        <div class="animated alo-circle-fill"></div>
        <span>{!!$share_config->hotline!!}</span>
    </a>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
        attribution=setup_tool
        page_id="1608844646076677"
        theme_color="#ef822a"
        logged_in_greeting="Xin chào ! Chúng tôi có thể giúp gì cho bạn?"
        logged_out_greeting="Xin chào ! Chúng tôi có thể giúp gì cho bạn?">
    </div>
    <a rel="nofollow" target="_blank" href="https://zalo.me/{!!$share_config->phone!!}" class="zalo">
        <i class="fa" aria-hidden="true">
        <img src="{!!asset('stc-zaloprofile.zdn.vn/pc/v1/images/zalo_sharelogo.png')!!}" width="25px" />
        </i>
        <span>Zalo: {!!$share_config->phone!!}</span>
    </a>
</div>
</div>
<script type="text/javascript">
 $("#cart").on("mouseover", function () {
     $('#cart_items').slideDown("300");
 });

 $('#cart').click(function(){
        $('#cart_items').hide();
 });
 </script>
</section>