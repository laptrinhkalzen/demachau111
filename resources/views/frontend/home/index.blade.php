@extends('frontend.layouts.master')
@section('content')

<script type="text/javascript">
$(document).ready(function(){
$('.hide-header').hide();
$('#show-header,.hide-header').on('mouseout',function(){
$('.hide-header').hide();

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
.nav-main ul #countdown_mobile{
text-align: right;
font-size: 14px;
margin-top: 0px;
}
</style>
<!--/ End Header -->
<!-- Slider Area -->
<!-- <aside class="left"><a href="{{$banner_left->url}}"><img style="width: 150px; height: 540px;position: absolute;z-index: 99; " src="{{$banner_left->image}}"></a></aside> -->
<section class="container hero-slider" style="background-color: transparent; margin-top:15px;">
    <!-- Single Slider -->
    <div class=" single-slider">
        <div class="row">
            
            <div class="col-md-8">
                <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      </ol>
                      <div class="carousel-inner">
                        @foreach($slide_chinh as $main_slide)
                        @if($main_slide->ordering ==1)
                        <div class="carousel-item active">
                          <img style="height: 100%;
  width: auto;" class="d-block w-100" src="{{$main_slide->image}}" alt="First slide">
                        </div>
                        @else
                        <div class="carousel-item">
                          <img class="d-block w-100" src="{{$main_slide->image}}" alt="First slide">
                        </div>
                        @endif
                        @endforeach
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-4 responsive_3">
               <div class="row">
                @foreach($anh_duoi_slide as $key =>$anh_slide)

            <div class="col-lg-12 col-md-12 col-12" style=" margin-bottom:5px; padding-right: 0px !important;padding-left: 5px !important;">
                <div class="single-banner banner-slide">
                    <img src="{{$anh_slide->image}}" alt="#" style="width: 100%;height: 119px;object-fit: cover;">
                </div>
            </div>
              @if($key==3)
              @break;
            @endif
            @endforeach
            </div>
            </div>
        </div>
    </div>
    <!--/ End Single Slider -->
</section>

<!-- <section class="shop-blog">
    <div class="container">
        <div class="row">
            @foreach($anh_duoi_slide as $key =>$anh_slide)
            @if($key==0)
            <div class="col-lg-4 col-md-6 col-12" style="padding-right: 5px !important;padding-left: 0px !important;">
                <div class="single-banner">
                    <img src="{{$anh_slide->image}}" alt="#">
                </div>
            </div>
            @endif
            @if($key==1)
            <div class="col-lg-4 col-md-6 col-12" style="padding-right: 5px !important;padding-left: 5px !important;">
                <div class="single-banner">
                    <img src="{{$anh_slide->image}}" alt="#">
                </div>
            </div>
            @endif
            @if($key==2)
            <div class="col-lg-4 col-md-6 col-12" style="padding-right: 0px !important;padding-left: 5px !important;">
                <div class="single-banner">
                    <img src="{{$anh_slide->image}}" alt="#">
                </div>
            </div>
            @endif
            @endforeach
            
            <!-- /End Single Banner  -->
            <!-- Single Banner  -->
            <!-- <div class="col-lg-4 col-12" style="padding-right: 0px !important;">
                <div class="single-banner tab-height" >
                    <img src="https://demachau.com/wp-content/uploads/2020/11/banner-01.jpg" alt="#">
                </div>
            </div> -->
     <!--    </div>
    </div>
</section>  -->

<!-- <section class="flash-sale-mobile">
        <div class="" style="padding-left: 15px;background-color: #c70000;color: white;height: 100%;">
            <img src="https://demxanh.com/template/default/images/icon_deal.png" alt="#" style="height: 100px;object-fit: cover;float: right;">
            <div class="">
                <span style="font-size: 20px;">Còn l?i
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
                    <div class="col-3 col-lg-3" style="text-align: center;">Gi?</div>
                    <div class="col-3 col-lg-3" style="text-align: center;">Phút</div>
                    <div class="col-3 col-lg-3" style="text-align: center;">Giây</div>
                </div>
            </div>
        </div>
</section> -->


@if($count_flashsale==1)
<section class="container hotdeals" style="margin-top: 10px;">
    <div class=" single-slider">
        <div class="row">
            <div class="banner-flash-sale col-lg-3 flashsale-pc">
                <div class="" style="padding-left: 15px;background-color: #c70000;color: white;height: 100%;">  

                    <img class="flash-sale mb-3"src="https://demxanh.com/template/default/images/icon_deal.png" alt="#" style="width: 100%;object-fit: cover;float: right;">
                    <div class="row" style="margin-right: 0px;">
                        <span style="font-size: 20px;margin:auto;">Còn lại
                            <strong id="day"></strong>&nbspngày
                        </span>
                        <div class="row container">
                            <div class="col-1 col-lg-1"></div>
                            <div class="col-3 col-lg-3" style="border-style: solid;border-color: white;padding: 10px;border-radius: 5px;border-width: 2px;text-align: center;margin-left: 10px;font-size: 24px;">
                                <span>
                                    <strong id="hour" ></strong>
                                </span>
                            </div>
                            <div class="col-3 col-lg-3" style="border-style: solid;border-color: white;padding: 10px;border-radius: 5px;border-width: 2px;text-align: center;margin-left: 10px;font-size: 24px;">
                                <span>
                                    <strong id="minute"></strong>
                                </span>
                            </div>
                            <div class="col-3 col-lg-3" style="border-style: solid;border-color: white;padding: 10px;border-radius: 5px;border-width: 2px;text-align: center;margin-left: 10px;font-size: 24px;">
                                <span>
                                    <strong id="second"></strong>
                                </span>
                            </div>
                            <div class="col-1 col-lg-1"></div>
                        </div>
                        <div class="row container">
                            <div class="col-1 col-lg-1"></div>
                            <div class="col-3 col-lg-3" style="text-align: center;margin-left: 10px;">Giờ</div>
                            <div class="col-3 col-lg-3" style="text-align: center;margin-left: 10px;">Phút</div>
                            <div class="col-3 col-lg-3" style="text-align: center;margin-left: 10px;">Giây</div>
                            <div class="col-1 col-lg-1"></div>
                        </div>
                        <div class="row container mt-3 button-sale" style="padding-left: 50px;">
                            <a href="{{route('flashsale.show')}}" style="margin: auto; background-color:white; color:black; border-radius: 5px  ; width:100px; text-align: center; ">Xem tất cả</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-flash-sale col-lg-3 flashsale-mobile">
                <div class="container" style="padding-left: 15px;background-color: #c70000;color: white;height: 100%;">  

                    <div class="row" style="margin-right: 0px;">
                        <span style="font-size: 14px;padding-left: 5px;">FLASH SALE:

                                    <strong id="day_mb" style="background-color: black;color: white;border-radius: 5px;padding:3px;"></strong>&nbspngày
                                    <strong id="hour_mb" style="background-color: black;color: white;border-radius: 5px;padding:3px;"></strong><img src="/icon/two-dots.svg" style="width: 10px;object-fit: cover;margin-left: 3px;">
                                    <strong id="minute_mb" style="background-color: black;color: white;border-radius: 5px;padding:3px;"></strong><img src="/icon/two-dots.svg" style="width: 10px;object-fit: cover;margin-left: 3px;">
                                    <strong id="second_mb" style="background-color: black;color: white;border-radius: 5px;padding:3px;"></strong>
                        </span>
                        <a href="{{route('flashsale.show')}}" style="margin: auto; background-color:white; color:black; border-radius: 5px  ; width:100px; text-align: center;margin-top: 3px; ">Xem tất cả</a>
<!--                         <div class="row container mt-3 button-sale" style="padding-left: 50px;">
                            <a href="{{route('flashsale.show')}}" style="margin: auto; background-color:white; color:black; border-radius: 5px  ; width:100px; text-align: center; ">Xem tất cả</a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="carousel-flash-sale col-lg-9" style="border-style: solid;border-color: #c70000;">
                <div class="product-area most-popular section" style="padding:0px;">
                    <div class="container" style="background-color:white;">
                        <div class="row">
                            <div class="col-12">
                                <div class="owl-carousel1 popular-slider">
                                    @foreach($flashsale_products as $flashsale_product)
                                        @if($flashsale)
                                            @if($flashsale_product->flash_sale_id == $flashsale->id)
                                    <div class="single-product" style="margin-top:0px;">
                                        <div class="product-img">
                                            <a href="{{route('product.detail',['alias'=>$flashsale_product->alias])}}">

                                                @foreach( explode(',',$flashsale_product->images) as $value)
                                                <img class="default-img img-responsive img-rounded custom-product" src="{{$value}}" style="padding-top: 10px;width:100%;height: 325px; ">
                                                 @php 
                                                  $discount=($flashsale_product->price - $flashsale_product->price_decrease) / ($flashsale_product->price/100);
                                                     if($discount<1){
                                                       $discount=1;
                                                       }
                                                     if($discount>=99){                                    
                                                       $discount=99;
                                                       }
                                               @endphp
                                    <!-- //<span class="price-dec">Giảm {{number_format($discount)}}%</span> -->
                                    <span class="out-of-stock">Giảm {{number_format($discount)}}%</span>
                                                <!-- <img class="hover-img img-responsive img-rounded hover-product" src="{{$value}}" style="padding-top: 10px; "> -->
                                                @break;
                                                @endforeach

                                            </a>
                                            <div class="button-head">
                                               
                                                <div style="background-color: #283988; text-align: center; width: 100%;" class="product-action-2">
                                                    <a title="Mua hàng" href="{{route('product.detail',['alias'=>$flashsale_product->alias])}}">Mua hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3  style="text-align: center;"><a href="{{route('product.detail',['alias'=>$flashsale_product->alias])}}">{{$flashsale_product->title}}</a></h3>
                                            <div class="product-price" style="text-align: center;">
                                                @if($flashsale_product->price>0)
                                                @if($flashsale_product->discount_value>0)
                                                <span class="old">{{number_format($flashsale_product->price)}}đ</span>
                                                <span style="color:red;">{{number_format($flashsale_product->price_decrease)}}đ</span>
                                                @else
                                                <span style="color:red;">{{number_format($flashsale_product->price)}}
                                                đ</span>
                                                @endif
                                                @else
                                                <span style="color:red;">Liên hệ
                                                đ</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                        
                                        @endif
                                    @else
                                            @break
                                    @endif
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endif


<!-- Start Most Popular -->
@foreach($danh_muc_cha as $danh_muc_cha)
<div class="product-area most-popular section" style="padding-top: 10px  !important;">
    <div class="container" style="background-color:white;padding-left: 0px;padding-right: 0px;">
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
                <li class="dmc" style="float: left; " class="nav-item"><a class="nav-link active"  href="{{route('category.show',['alias'=>$danh_muc_cha->alias])}}" style="background-color: #283988;color:white;">{{$danh_muc_cha->name}}</a></li>
                @foreach($danh_muc_con as $danh_muc_con1)
                @if($danh_muc_con1->parent_id == $danh_muc_cha->id)
                <li style="float: left;font-size: 12px;"  class="nav-item danh-muc-con"><a  href="{{route('category.show',['alias'=>$danh_muc_con1->alias])}}" class="nav-link">{{$danh_muc_con1->name}}</a></li>
                @endif
                @endforeach
                <!--  <li style="float: left; border-bottom: none;height: 64px; " class="nav-item"><a style="color: orange;" class="nav-link"  href="{{route('category.show',['alias'=>$danh_muc_cha->alias])}}" >Xem tất cả >></a></li> -->
            </ul>
            <!--/ End Tab Nav -->
        </div>
        <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    <!-- Start Single Product -->
                    @foreach($product_danh_muc_cha as $product_danh_muc_cha1)
                    @if($product_danh_muc_cha1->parent_id == $danh_muc_cha->id )
                    <div class="single-product">
                        <div class="product-img">
                            <a href="{{route('product.detail',['alias'=>$product_danh_muc_cha1->alias])}}">
                                @foreach( explode(',',$product_danh_muc_cha1->images) as $value)
                                <img class="default-img img-responsive img-rounded custom-product" src="{{$value}}" style="padding-top: 10px;width:100%;height: 100%; ">
                                
                               @if($product_danh_muc_cha1->sale_price > 0)
                               @php 
                                  $discount=($product_danh_muc_cha1->price - $product_danh_muc_cha1->sale_price) / ($product_danh_muc_cha1->price/100);
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

                                
<!--                                 <img class="hover-img img-responsive img-rounded hover-product" src="{{$value}}" style="padding-top: 10px; "> -->
                                @break;
                                @endforeach
                                <!--  //<span class="out-of-stock">Hot</span> -->
                            </a>
                            <div class="button-head">
                                <!--   <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Thêm vào gi? hàng</span></a>
                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Thêm gi? hàng</span></a>
                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Yêu thích</span></a>
                                </div> -->
                                <div style="background-color: #283988; text-align: center; width: 100%;" class="product-action-2">
                                    <a title="Mua hàng" href="{{route('product.detail',['alias'=>$product_danh_muc_cha1->alias])}}">Mua hàng</a>
                                </div>
                            </div>
                        </div>
                        @if($count_flashsale==1)
                        <div class="product-content">
                            
                            <h3  style="text-align: center;"><a href="{{route('product.detail',['alias'=>$product_danh_muc_cha1->alias])}}">{{$product_danh_muc_cha1->title}}</a></h3>
                            <div class="product-price" style="text-align: center;">
                                @php 
                                   $dem=0;
                                @endphp
                                @if($product_danh_muc_cha1->price>0)
                                @foreach($product_sales as $pro_sale)
                                @if($product_danh_muc_cha1->id==$pro_sale->product_id)
                                @php 
                                   $dem++;
                                @endphp
                                <span class="old">{{number_format($product_danh_muc_cha1->price)}}đ</span>
                                <span style="color:red;">{{number_format($product_danh_muc_cha1->sale_price)}}đ</span>
                                @endif
                                @endforeach
                                @if($dem==0)
                                <span style="color:red;">{{number_format($product_danh_muc_cha1->price)}}đ</span>
                                @endif
                                @else
                                 <span style="color:red;">Liên hệ</span>
                                @endif

                            </div>
                        </div>
                        @else
                            <div class="product-content">
                            
                            <h3  style="text-align: center;"><a href="{{route('product.detail',['alias'=>$product_danh_muc_cha1->alias])}}">{{$product_danh_muc_cha1->title}}</a></h3>
                            <div class="product-price" style="text-align: center;">
                                
                                @if($product_danh_muc_cha1->price>0)
                                <span style="color:red;">{{number_format($product_danh_muc_cha1->price)}}đ</span>
                                @else
                                 <span style="color:red;">Liên hệ</span>
                                @endif
                            </div>
                        </div>
                        @endif
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
@endforeach




<div class="product-area most-popular section" style="padding-top: 10px !important;">
    <div class="container" style="background-color:white;padding-left: 0px;padding-right: 0px;">
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
                <li style="float: left; border-bottom: none; " class="nav-item"><a class="nav-link active"  href="{{route('news.list')}}" style="background-color: #283988;color: white;">Kinh nghiệm hay</a></li>
            </ul>
            <!--/ End Tab Nav -->
        </div>
        <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="carousel-flash-sale col-lg-12" style="padding-left: 0px ; padding-right: 0px; ">
                <div class="product-area most-popular section" style="padding:0px;">
                    <div class="container" style="background-color:white;">
                        <div class="row">
                            <div class="col-12">
                                <div class="owl-carousel1 popular-slider">
                                    @foreach($news as $new)
                                    <div class="single-product" style="margin-right:5px;margin-left:5px !important;">
                                        <div class="product-img">
                                            <a href="{{route('news.detail',['alias'=>$new->alias])}}">
                                                <img class="default-img img-responsive img-rounded custom-product1" src="{{$new->images}}" style="padding-top: 10px;width:100%;height: 210px; ">
                                            </a>
                                        </div>
                                        <div class="product-content1">
                                            <h3  style="text-align: center;margin-bottom: 10px;"><a class="title" href="{{route('news.detail',['alias'=>$new->alias])}}">{{$new->title}}</a></h3>
                                            <div class="content">
                                                 <a class="title">{!!$new->description!!}</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- <div class="owl-carousel popular-slider">
                    @foreach($news as $key => $new)
                   
                    <div class="single-product" style="margin-bottom: 12px;">
                        <div class="product-img">
                            <a href="{{route('news.detail',['alias'=>$new->alias])}}">
                                @foreach( explode(',',$new->images) as $value)
                                <img class="default-img img-responsive img-rounded custom-news" src="{{$value}}">

                                @break;
                                @endforeach
                                
                            </a>
                            
                        </div>
                        <div class="product-content1">
                            <h3  style="text-align: center;margin-bottom: 10px;"><a class="title" href="{{route('news.detail',['alias'=>$new->alias])}}">{{$new->title}}</a></h3>
                            <div class="content">
                                 <a class="title">{!!$new->description!!}</a>
                            </div>
                        </div>
                    </div>
                   @endforeach
                </div> -->
            </div>
            </div>
        </div>
    </div>
</div>



<section class="container" style="margin-top:10px;background-color: white;">
    <div class=" single-slider">
        <div class="row">
            <div class="banner-flash-sale col-lg-3 banner-brand" style="margin: auto;text-align: center;">
                <p style="font-size: 20px;">CÁC THƯƠNG HIỆU LỚN</p>
            </div>
            <div class="carousel-flash-sale col-lg-9" style="">
                <div class="product-area most-popular section" style="padding:0px;">
                    <div class="container" style="background-color:white;">
                        <div class="row">
                            <div class="col-12">
                                <div class="owl-carousel popular-slider">
                                    <!-- Start Single Product -->
                                    @foreach($brand as $brands)
                                    <div class="single-product" >
                                        <div class="product-img ">
                                            <a href="{{$brands->link}}">
                                                <img class="default-img img-responsive img-rounded custom-brand" src="{!!url('upload/config/'.$brands->image)!!}" style="padding-top: 10px;object-fit: cover;">
<!--                                                 <img class="hover-img img-responsive img-rounded hover-brand" src="{!!url('upload/config/'.$brands->image)!!}" style="padding-top: 10px; "> -->
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
<!-- <script type="text/javascript">
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
$('.option_price1').html(resp.result['option_price'] + ' d');
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
</script> -->
<!-- countdown_PC -->
@if ($count_flashsale ==1) 
<script type="text/javascript">
$(document).ready(function(){
    //var count_flashsale={{$count_flashsale}};

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
@endif


 <!-- countdown_mobile -->
@if ($count_flashsale ==1) 
<script type="text/javascript">
$(document).ready(function(){
    //var count_flashsale={{$count_flashsale}};

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
document.getElementById("day_mb").innerHTML = days ;
document.getElementById("hour_mb").innerHTML =  hours ;
document.getElementById("minute_mb").innerHTML = minutes ;
document.getElementById("second_mb").innerHTML = seconds ;
// If the count down is over, write some text
if (distance < 0) {
clearInterval(x);
document.getElementById("countdown_mobile").innerHTML = "EXPIRED";
}
}, 1000);

});
</script>
@endif

<!-- <aside class="right"><a href="{{$banner_right->url}}"><img style="width: 150px;  height: 540px;position:absolute;right:0;" src="{{$banner_right->image}}"></img></a></aside> -->
<!-- Modal end -->
<!-- Start Footer Area -->
<script>
 $(document).ready(function() {


$('.owl-carousel1').owlCarousel({
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

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:2
        },
        1000:{
            items:4
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