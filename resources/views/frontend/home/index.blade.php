@extends('frontend.layouts.master')
@section('content')
<script type="text/javascript">
$(document).ready(function(){
$('.hide-header').show();
$('#show-header').on('mouseout',function(){
$('.hide-header').show();
});
});
</script>
<style type="text/css">
aside {position: fixed; top: 320px; bottom: 0px; width: 150px; width: calc((100% - 1250px)/2);  overflow: hidden; display: block;}
.left {left: 0;}
.right {right: 0;}
.nav-main ul #countdown{
text-align: right;
font-size: 14px;
margin-top: 0px;
}
</style>
<!--/ End Header -->
<!-- Slider Area -->
<aside class="left"><a href="{{$share_config->banner_left_link}}"><img style="width: 150px; height: 540px; " src="{{$share_config->banner_left}}"></img></a></aside>
<section class="container hero-slider" style="background-color: transparent;">
    <!-- Single Slider -->
    <div class=" single-slider">
        <div class="row">
            <div class="col-3 col-lg-3 banner-slide">
                <img src="https://demachau.com/wp-content/uploads/2020/10/stick-banner.jpg" alt="#" style="height: 100%;object-fit: cover;">
            </div>
            <div class="col-lg-9">
                <img src="https://demachau.com/wp-content/uploads/2020/10/slide-02.jpg" alt="#" style="object-fit: cover;width: 100%;">
            </div>
        </div>
    </div>
    <!--/ End Single Slider -->
</section>

<section class="shop-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12" style="padding-right: 0px !important;">
                <div class="single-banner">
                    <img src="https://demachau.com/wp-content/uploads/2020/11/banner-01.jpg" alt="#">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12" style="padding-right: 0px !important;">
                <div class="single-banner">
                    <img src="https://demachau.com/wp-content/uploads/2020/11/banner-01.jpg" alt="#">
                </div>
            </div>
            <!-- /End Single Banner  -->
            <!-- Single Banner  -->
            <div class="col-lg-4 col-12" style="padding-right: 0px !important;">
                <div class="single-banner tab-height" >
                    <img src="https://demachau.com/wp-content/uploads/2020/11/banner-01.jpg" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="flash-sale-mobile">
        <div class="" style="padding-left: 15px;background-color: #c70000;color: white;height: 100%;">
            <img src="https://demxanh.com/template/default/images/icon_deal.png" alt="#" style="height: 100px;object-fit: cover;float: right;">
            <div class="">
                <span style="font-size: 20px;">Còn lại
                    <strong id="day"></strong>&nbspngày
                </span>
                <div class="row container">
                    <div class="col-3 col-lg-3" style="border-style: solid;border-color: white;padding: 10px;border-radius: 5px;border-width: 2px;text-align: center;margin-right: 10px;font-size: 24px;">
                        <span>
                            <strong id="hour" ></strong>
                        </span>
                    </div>
                    <div class="col-3 col-lg-3" style="border-style: solid;border-color: white;padding: 10px;border-radius: 5px;border-width: 2px;text-align: center;margin-right: 10px;font-size: 24px;">
                        <span>
                            <strong id="minute"></strong>
                        </span>
                    </div>
                    <div class="col-3 col-lg-3" style="border-style: solid;border-color: white;padding: 10px;border-radius: 5px;border-width: 2px;text-align: center;font-size: 24px;">
                        <span>
                            <strong id="second"></strong>
                        </span>
                    </div>
                </div>
                <div class="row container">
                    <div class="col-3 col-lg-3" style="text-align: center;">Giờ</div>
                    <div class="col-3 col-lg-3" style="text-align: center;">Phút</div>
                    <div class="col-3 col-lg-3" style="text-align: center;">Giây</div>
                </div>
            </div>
        </div>
</section> -->

<section class="container" style="margin-top: 20px;">
    <div class=" single-slider">
        <div class="row">
            <div class="banner-flash-sale col-lg-3">
                <div class="" style="padding-left: 15px;background-color: #c70000;color: white;height: 100%;">
                    <img src="https://demxanh.com/template/default/images/icon_deal.png" alt="#" style="height: 100px;object-fit: cover;float: right;">
                    <div class="">
                        <span style="font-size: 20px;">Còn lại
                            <strong id="day"></strong>&nbspngày
                        </span>
                        <div class="row container">
                            <div class="col-3 col-lg-3" style="border-style: solid;border-color: white;padding: 10px;border-radius: 5px;border-width: 2px;text-align: center;margin-right: 10px;font-size: 24px;">
                                <span>
                                    <strong id="hour" ></strong>
                                </span>
                            </div>
                            <div class="col-3 col-lg-3" style="border-style: solid;border-color: white;padding: 10px;border-radius: 5px;border-width: 2px;text-align: center;margin-right: 10px;font-size: 24px;">
                                <span>
                                    <strong id="minute"></strong>
                                </span>
                            </div>
                            <div class="col-3 col-lg-3" style="border-style: solid;border-color: white;padding: 10px;border-radius: 5px;border-width: 2px;text-align: center;font-size: 24px;">
                                <span>
                                    <strong id="second"></strong>
                                </span>
                            </div>
                        </div>
                        <div class="row container">
                            <div class="col-3 col-lg-3" style="text-align: center;">Giờ</div>
                            <div class="col-3 col-lg-3" style="text-align: center;">Phút</div>
                            <div class="col-3 col-lg-3" style="text-align: center;">Giây</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-flash-sale col-lg-9" style="border-style: solid;border-color: #c70000;">
                <div class="product-area most-popular section" style="padding:0px;">
                    <div class="container" style="background-color:white;">
                        <div class="row">
                            <div class="col-12">
                                <div class="owl-carousel popular-slider">
                                    <!-- Start Single Product -->
                                    @foreach($flashsale_products as $flashsale_product)
                                    @if($flashsale_product->flash_sale_id == $flashsale->id)
                                    <div class="single-product" style="margin-top:0px;">
                                        <div class="product-img">
                                            <a href="{{route('product.detail',['alias'=>$flashsale_product->alias])}}">
                                                <img class="default-img img-responsive img-rounded" src="{{$flashsale_product->images}}" style="padding-top: 10px; ">
                                                <img class="hover-img img-responsive img-rounded" src="{{$flashsale_product->images}}" style="padding-top: 10px; ">
                                                <!--  //<span class="out-of-stock">Hot</span> -->
                                            </a>
                                            <div class="button-head">
                                                <!--   <div class="product-action">
                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Thêm vào giỏ hàng</span></a>
                                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Thêm giỏ hàng</span></a>
                                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Yêu thích</span></a>
                                                </div> -->
                                                <div style="background-color: #283988; text-align: center; width: 100%;" class="product-action-2">
                                                    <a  data-toggle="modal" data-target="#exampleModal_{{$flashsale_product->product_id}}" title="Mua hàng" href="#">Mua hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3  style="text-align: center;"><a href="{{route('product.detail',['alias'=>$flashsale_product->alias])}}">{{$flashsale_product->title}}</a></h3>
                                            <div class="product-price" style="text-align: center;">
                                                @if($flashsale_product->discount_value>0)
                                                <span class="old">{{$flashsale_product->price}}</span>
                                                <span style="color:red;">{{$flashsale_product->price_decrease}} đ</span>
                                                @else
                                                <span style="color:red;">{{$flashsale_product->price}} đ</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    
                                    <!-- End Single Product -->
                                    <!-- Start Single Product -->
                                    
                                    <!-- End Single Product -->
                                    <!-- Start Single Product -->
                                    
                                    <!-- End Single Product -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Most Popular -->
@foreach($danh_muc_cha as $danh_muc_cha)
<div class="product-area most-popular section" style="padding: 20px !important;">
    <div class="container" style="background-color:white;">
        <!-- <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Hot Item</h2>
                </div>
            </div>
        </div> -->
        <div class="nav-main">
            <!-- Tab Nav -->
            <ul style="" class="nav nav-tabs" id="myTab" role="tablist">
                <li style="float: left; border-bottom: none;height: 64px; " class="nav-item"><a class="nav-link active"  href="{{route('category.show',['alias'=>$danh_muc_cha->alias])}}" >{{$danh_muc_cha->name}}</a></li>
                @foreach($danh_muc_con as $danh_muc_con1)
                @if($danh_muc_con1->parent_id == $danh_muc_cha->id)
                <li style="float: left; border-bottom: solid 1px #FFA500;"  class="nav-item"><a  href="{{route('category.show',['alias'=>$danh_muc_cha->alias])}}" class="nav-link">{{$danh_muc_con1->name}}</a></li>
                @endif
                @endforeach
            </ul>
            <!--/ End Tab Nav -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    <!-- Start Single Product -->
                    @foreach($product_danh_muc_cha as $product_danh_muc_cha1)
                    @if($product_danh_muc_cha1->category_id == $danh_muc_cha->id)
                    <div class="single-product">
                        <div class="product-img">
                            <a href="{{route('product.detail',['alias'=>$product_danh_muc_cha1->alias])}}">
                                <img class="default-img img-responsive img-rounded" src="{{$product_danh_muc_cha1->images}}">
                                <img class="hover-img img-responsive img-rounded" src="{{$product_danh_muc_cha1->images}}">
                                <!--  //<span class="out-of-stock">Hot</span> -->
                            </a>
                            <div class="button-head">
                                <!--   <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Thêm vào giỏ hàng</span></a>
                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Thêm giỏ hàng</span></a>
                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Yêu thích</span></a>
                                </div> -->
                                <div style="background-color: #283988; text-align: center; width: 100%;" class="product-action-2">
                                    <a  data-toggle="modal" data-target="#exampleModal_{{$product_danh_muc_cha1->id}}" title="Mua hàng" href="#">Mua hàng</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            
                            <h3  style="text-align: center;"><a href="{{route('product.detail',['alias'=>$product_danh_muc_cha1->alias])}}">{{$product_danh_muc_cha1->title}}</a></h3>
                            <div class="product-price" style="text-align: center;">
                                @if($product_danh_muc_cha1->sale_price>0)
                                <span class="old">{{$product_danh_muc_cha1->sale_price}}</span>
                                <span style="color:red;">{{$product_danh_muc_cha1->price}} đ</span>
                                @else
                                <span style="color:red;">{{$product_danh_muc_cha1->price}} đ</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    
                    <!-- End Single Product -->
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach($danh_muc_cha2 as $danh_muc_cha)
<div class="product-area most-popular section" style="padding: 20px !important;">
    <div class="container" style="background-color:white;">
        <!-- <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Hot Item</h2>
                </div>
            </div>
        </div> -->
        <div class="nav-main">
            <!-- Tab Nav -->
            <ul style="" class="nav nav-tabs" id="myTab" role="tablist">
                <li style="float: left; border-bottom: none;height: 64px; " class="nav-item"><a class="nav-link active"  href="{{route('category.show',['alias'=>$danh_muc_cha->alias])}}" >{{$danh_muc_cha->name}}</a></li>
                @foreach($danh_muc_con as $danh_muc_con1)
                @if($danh_muc_con1->parent_id == $danh_muc_cha->id)
                <li style="float: left; border-bottom: solid 1px #FFA500;"  class="nav-item"><a  href="{{route('category.show',['alias'=>$danh_muc_cha->alias])}}" class="nav-link">{{$danh_muc_con1->name}}</a></li>
                @endif
                @endforeach
            </ul>
            <!--/ End Tab Nav -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    <!-- Start Single Product -->
                    @foreach($product_danh_muc_cha as $product_danh_muc_cha1)
                    @if($product_danh_muc_cha1->category_id == $danh_muc_cha->id)
                    <div class="single-product">
                        <div class="product-img">
                            <a href="{{route('product.detail',['alias'=>$product_danh_muc_cha1->alias])}}">
                                <img class="default-img img-responsive img-rounded" src="{{$product_danh_muc_cha1->images}}">
                                <img class="hover-img img-responsive img-rounded" src="{{$product_danh_muc_cha1->images}}">
                                <!--  //<span class="out-of-stock">Hot</span> -->
                            </a>
                            <div class="button-head">
                                <!--   <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Thêm vào giỏ hàng</span></a>
                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Thêm giỏ hàng</span></a>
                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Yêu thích</span></a>
                                </div> -->
                                <div style="background-color: #283988; text-align: center; width: 100%;" class="product-action-2">
                                    <a  data-toggle="modal" data-target="#exampleModal_{{$product_danh_muc_cha1->id}}" title="Mua hàng" href="#">Mua hàng</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            
                            <h3  style="text-align: center;"><a href="{{route('product.detail',['alias'=>$product_danh_muc_cha1->alias])}}">{{$product_danh_muc_cha1->title}}</a></h3>
                            <div class="product-price" style="text-align: center;">
                                @if($product_danh_muc_cha1->sale_price>0)
                                <span class="old">{{$product_danh_muc_cha1->sale_price}}</span>
                                <span style="color:red;">{{$product_danh_muc_cha1->price}} đ</span>
                                @else
                                <span style="color:red;">{{$product_danh_muc_cha1->price}} đ</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    
                    <!-- End Single Product -->
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<section class="container" style="margin-top: 20px;background-color: white;">
    <div class=" single-slider">
        <div class="row">
            <div class="banner-flash-sale col-lg-3" style="margin: auto;text-align: center;">
                <p style="font-size: 20px;">CÁC THƯƠNG HIỆU LỚN</p>
            </div>
            <div class="carousel-flash-sale col-lg-9" style="">
                <div class="product-area most-popular section" style="padding:0px;">
                    <div class="container" style="background-color:white;">
                        <div class="row">
                            <div class="col-12">
                                <div class="owl-carousel popular-slider">
                                    <!-- Start Single Product -->
                                    @foreach($brands as $brand)
                                    <div class="single-product" style="margin-top:0px;">
                                        <div class="product-img">
                                            <a href="{{$brand->link}}">
                                                <img class="default-img img-responsive img-rounded" src="{!!url('upload/config/'.$brand->image)!!}" style="padding-top: 10px; ">
                                                <img class="hover-img img-responsive img-rounded" src="{!!url('upload/config/'.$brand->image)!!}" style="padding-top: 10px; ">
                                                
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                   
                                    
                                    <!-- End Single Product -->
                                    <!-- Start Single Product -->
                                    
                                    <!-- End Single Product -->
                                    <!-- Start Single Product -->
                                    
                                    <!-- End Single Product -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Most Popular Area -->
<!-- Start Shop Home List  -->
<!-- End Shop Home List  -->
<!-- Start Cowndown Area -->
<!-- <section class="cown-down" style="margin: 0 auto;">
    <div class="section-inner " style="margin-left: 170px; margin-right: 170px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12 padding-right">
                    <div class="image">
                        <img src="https://via.placeholder.com/750x590" alt="#">
                    </div>
                </div>
                <div class="col-lg-6 col-12 padding-left">
                    <div class="content">
                        <div class="heading-block">
                            <p class="small-title">Deal of day</p>
                            <h3 class="title">Beatutyful dress for women</h3>
                            <p class="text">Suspendisse massa leo, vestibulum cursus nulla sit amet, frungilla placerat lorem. Cars fermentum, sapien. </p>
                            <h1 class="price">$1200 <s>$1890</s></h1>
                            <div class="coming-time">
                                <div class="clearfix" data-countdown="2021/01/20"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- /End Cowndown Area -->
<!-- Start Shop Blog  -->
<!-- <section class="shop-blog section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>From Our Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12"> -->
                <!-- Start Single Blog  -->
                <!-- <div class="shop-single-blog">
                    <img src="https://via.placeholder.com/370x300" alt="#">
                    <div class="content">
                        <p class="date">22 July , 2020. Monday</p>
                        <a href="#" class="title">Sed adipiscing ornare.</a>
                        <a href="#" class="more-btn">Continue Reading</a>
                    </div>
                </div> -->
                <!-- End Single Blog  -->
<!--             </div>
            <div class="col-lg-4 col-md-6 col-12"> -->
                <!-- Start Single Blog  -->
<!--                 <div class="shop-single-blog">
                    <img src="https://via.placeholder.com/370x300" alt="#">
                    <div class="content">
                        <p class="date">22 July, 2020. Monday</p>
                        <a href="#" class="title">Man’s Fashion Winter Sale</a>
                        <a href="#" class="more-btn">Continue Reading</a>
                    </div>
                </div> -->
                <!-- End Single Blog  -->
<!--             </div>
            <div class="col-lg-4 col-md-6 col-12"> -->
                <!-- Start Single Blog  -->
<!--                 <div class="shop-single-blog">
                    <img src="https://via.placeholder.com/370x300" alt="#">
                    <div class="content">
                        <p class="date">22 July, 2020. Monday</p>
                        <a href="#" class="title">Women Fashion Festive</a>
                        <a href="#" class="more-btn">Continue Reading</a>
                    </div>
                </div> -->
                <!-- End Single Blog  -->
<!--             </div>
        </div>
    </div>
</section> -->
<!-- End Shop Blog  -->
<!-- Start Shop Services Area -->
<!-- <section class="shop-services section home">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12"> -->
                <!-- Start Single Service -->
<!--                 <div class="single-service">
                    <i class="ti-rocket"></i>
                    <h4>Free shiping</h4>
                    <p>Orders over $100</p>
                </div> -->
                <!-- End Single Service -->
<!--             </div>
            <div class="col-lg-3 col-md-6 col-12"> -->
                <!-- Start Single Service -->
<!--                 <div class="single-service">
                    <i class="ti-reload"></i>
                    <h4>Free Return</h4>
                    <p>Within 30 days returns</p>
                </div> -->
                <!-- End Single Service -->
<!--             </div>
            <div class="col-lg-3 col-md-6 col-12"> -->
                <!-- Start Single Service -->
<!--                 <div class="single-service">
                    <i class="ti-lock"></i>
                    <h4>Sucure Payment</h4>
                    <p>100% secure payment</p>
                </div> -->
                <!-- End Single Service -->
<!--             </div>
            <div class="col-lg-3 col-md-6 col-12"> -->
                <!-- Start Single Service -->
<!--                 <div class="single-service">
                    <i class="ti-tag"></i>
                    <h4>Best Peice</h4>
                    <p>Guaranteed price</p>
                </div> -->
                <!-- End Single Service -->
<!--             </div>
        </div>
    </div>
</section> -->
<!-- End Shop Services Area -->
<!-- Modal -->
<!--  @foreach($product_danh_muc_cha as $product_modal)
<form method="post" action="{{route('home.buy_now_alias',['alias'=>$product_modal->alias])}}">
    @csrf
    <div class="modal fade" id="exampleModal_{{$product_modal->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            
                            <div class="product-gallery">
                                <div class="quickview-slider-active">
                                    <div class="single-slider">
                                        <img style="width: 100%;" src="{{$product_modal->images}}" alt="#">
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="quickview-content " >
                                <div class="">
                                    <input type="hidden"  class="option_number_{{$product_modal->id}}" value="" name="option_number">
                                    <h2>{{$product_modal->title}}</h2>
                                </div>
                                
                                <div class="quickview-peragraph">
                                    <p>{{$product_modal->description}}</p>
                                </div>
                                <div class="size">
                                    <div class="row">
                                        
                                        @php
                                        $dem=0;
                                        $index=0;
                                        @endphp
                                        @foreach($product_attrs[64] as $product_attr)
                                        @php
                                        if($product_attr->parent_id!=$index){
                                        $dem++;
                                        $check=1;
                                        }
                                        else{
                                        $dem=0;
                                        $check=0;
                                        }
                                        $index=$product_attr->parent_id;
                                        @endphp
                                        @if($dem==1)
                                        <div class="col-lg-12">
                                            <span>{{$product_attr->parent_name[0]}}</span>
                                        </div>
                                        @endif
                                        @if($check==1)
                                        <div  class="col-lg-4 radio-check">
                                            <input type="radio"  class="check-option" name="{{$index}}" value="{{$product_attr->title}}" checked="checked">
                                            <label for="other">{{$product_attr->title}}</label>
                                        </div>
                                        @else
                                        <div style="" class="col-lg-4 radio-check">
                                            <input type="radio" check class="check-option" name="{{$index}}" value="{{$product_attr->title}}">
                                            <label for="other">{{$product_attr->title}}</label>
                                        </div>
                                        @endif
                                        
                                        @endforeach
                                        
                                        
                                        
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <p class=" option_price1" style="color: red; font-size: 150%;"></p>
                                    </div>
                                    
                                </div>
                                <div class="quantity">
                                    
                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quantity">
                                            <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" name="quantity" class="input-number"  data-min="1" data-max="1000" value="1">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quantity">
                                            <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <button class="btn">Thêm vào giỏ hàng</button>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach -->
<script type="text/javascript">
$(document).ready(function(){
checkOption();
function checkOption(){
search = $('div').find("input:radio:checked").map(function(){
return $(this).val();
}).get();
$.ajax({
url:'{{route("api.check_option")}}',
method:'POST',
data:{search:search,_token: $('#token').val()},
success:function(resp){
$('.option_price1').html(resp.result['option_price'] + ' đ');
$('.option_number_'+ resp.result['product_id']).val(resp.option_number);
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
<aside class="right"><a href="{{$share_config->banner_right_link}}"><img style="width: 150px;  height: 540px;" src="{{$share_config->banner_right}}"></img></a></aside>
<!-- Modal end -->
<!-- Start Footer Area -->
@stop