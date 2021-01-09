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
    aside {position: fixed; top: 320px; bottom: 0px; width: 150px; width: calc((100% - 1250px)/2); z-index: 999; overflow: hidden; display: block;}
    .left {left: 0;}
    .right {right: 0;}
</style>
    <!--/ End Header -->
    
    <!-- Slider Area -->
    <aside class="left"><img style="width: 150px;  height: 440px; " src="{{$share_config->banner_left}}"></img></aside>

    <section class="hero-slider" style="margin: 0 auto;">

        <!-- Single Slider -->
        <div class=" single-slider" style="margin-left: 190px; margin-right: 190px;">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-9 offset-lg-3 col-12">
                        <div class="text-inner">
                            <div class="row">
                                <div class="col-lg-7 col-12">
                                    <div class="hero-text">
                                        <h1><span>UP TO 50% OFF </span>Shirt For Man</h1>
                                        <p>Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find it pereri <br> odiy maboriosm.</p>
                                        <div class="button">
                                            <a id="add-to-cart1" href="javascript:void(0)" class="btn">Shop Now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
    </section>
    <section class="shop-blog section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>From Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-banner">
                        <img src="{{asset('demachau/images/blog1')}}" alt="#">
                        <div class="content">
                            <p>Man's Collectons</p>
                            <h3>Summer travel <br> collection</h3>
                            <a href="#">Discover Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-banner">
                        <img src="https://via.placeholder.com/600x370" alt="#">
                        <div class="content">
                            <p>Bag Collectons</p>
                            <h3>Awesome Bag <br> 2020</h3>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- /End Single Banner  -->
                <!-- Single Banner  -->
                <div class="col-lg-4 col-12">
                    <div class="single-banner tab-height">
                        <img src="https://via.placeholder.com/600x370" alt="#">
                        <div class="content">
                            <p>Flash Sale</p>
                            <h3>Mid Season <br> Up to <span>40%</span> Off</h3>
                            <a href="#">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shop-blog section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>From Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-banner">
                        <img src="{{asset('demachau/images/blog1')}}" alt="#">
                        <div class="content">
                            <p>Man's Collectons</p>
                            <h3>Summer travel <br> collection</h3>
                            <a href="#">Discover Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-banner">
                        <img src="https://via.placeholder.com/600x370" alt="#">
                        <div class="content">
                            <p>Bag Collectons</p>
                            <h3>Awesome Bag <br> 2020</h3>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- /End Single Banner  -->
                <!-- Single Banner  -->
                <div class="col-lg-4 col-12">
                    <div class="single-banner tab-height">
                        <img src="https://via.placeholder.com/600x370" alt="#">
                        <div class="content">
                            <p>Flash Sale</p>
                            <h3>Mid Season <br> Up to <span>40%</span> Off</h3>
                            <a href="#">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
    
    <!-- Start Most Popular -->
    @foreach($danh_muc_cha as $danh_muc_cha)
    <div class="product-area most-popular section1" style>
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
                <ul style="border-bottom: solid 1px #FFA500;" class="nav nav-tabs" id="myTab" role="tablist">
                    <li style="float: left; border-bottom: none; " class="nav-item"><a class="nav-link active"  href="{{route('category.show',['alias'=>$danh_muc_cha->alias])}}" >{{$danh_muc_cha->name}}</a></li>
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
                                    <div class="product-action">
                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Thêm vào giỏ hàng</span></a>
                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Thêm giỏ hàng</span></a>
                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Yêu thích</span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <a title="Add to cart" href="#">Thêm vào giỏ hàng</a>
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
    <!-- End Most Popular Area -->
    
    <!-- Start Shop Home List  -->
  
    <!-- End Shop Home List  -->
    
    <!-- Start Cowndown Area -->
    <section class="cown-down" style="margin: 0 auto;">
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
                                    <div class="clearfix" data-countdown="2021/02/30"></div>
                                </div>
                            </div>
                        </div>  
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!-- /End Cowndown Area -->
    
    <!-- Start Shop Blog  -->
    <section class="shop-blog section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>From Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Blog  -->
                    <div class="shop-single-blog">
                        <img src="https://via.placeholder.com/370x300" alt="#">
                        <div class="content">
                            <p class="date">22 July , 2020. Monday</p>
                            <a href="#" class="title">Sed adipiscing ornare.</a>
                            <a href="#" class="more-btn">Continue Reading</a>
                        </div>
                    </div>
                    <!-- End Single Blog  -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Blog  -->
                    <div class="shop-single-blog">
                        <img src="https://via.placeholder.com/370x300" alt="#">
                        <div class="content">
                            <p class="date">22 July, 2020. Monday</p>
                            <a href="#" class="title">Man’s Fashion Winter Sale</a>
                            <a href="#" class="more-btn">Continue Reading</a>
                        </div>
                    </div>
                    <!-- End Single Blog  -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Blog  -->
                    <div class="shop-single-blog">
                        <img src="https://via.placeholder.com/370x300" alt="#">
                        <div class="content">
                            <p class="date">22 July, 2020. Monday</p>
                            <a href="#" class="title">Women Fashion Festive</a>
                            <a href="#" class="more-btn">Continue Reading</a>
                        </div>
                    </div>
                    <!-- End Single Blog  -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Blog  -->
    
    <!-- Start Shop Services Area -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Free shiping</h4>
                        <p>Orders over $100</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Free Return</h4>
                        <p>Within 30 days returns</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Sucure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Best Peice</h4>
                        <p>Guaranteed price</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services Area -->
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
                                    <div class="product-gallery">
                                        <div class="quickview-slider-active">
                                            <div class="single-slider">
                                                <img src="https://via.placeholder.com/569x528" alt="#">
                                            </div>
                                            <div class="single-slider">
                                                <img src="https://via.placeholder.com/569x528" alt="#">
                                            </div>
                                            <div class="single-slider">
                                                <img src="https://via.placeholder.com/569x528" alt="#">
                                            </div>
                                            <div class="single-slider">
                                                <img src="https://via.placeholder.com/569x528" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                <!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Flared Shift Dress</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>$29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                    </div>
                                    <div class="size">
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <h5 class="title">Size</h5>
                                                <select>
                                                    <option selected="selected">s</option>
                                                    <option>m</option>
                                                    <option>l</option>
                                                    <option>xl</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <h5 class="title">Color</h5>
                                                <select>
                                                    <option selected="selected">orange</option>
                                                    <option>purple</option>
                                                    <option>black</option>
                                                    <option>pink</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quantity">
                                        <!-- Input Order -->
                                        <div class="input-group">
                                            <div class="button minus">
                                                <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                    <i class="ti-minus"></i>
                                                </button>
                                            </div>
                                            <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
                                            <div class="button plus">
                                                <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                    <i class="ti-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!--/ End Input Order -->
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="btn">Add to cart</a>
                                        <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                        <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                                    </div>
                                    <div class="default-social">
                                        <h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <aside class="right"><img style="width: 150px;  height: 540px;" src="{{$share_config->banner_right}}"></img></aside>
  
    <!-- Modal end -->
    
    <!-- Start Footer Area -->
   @stop