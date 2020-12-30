@extends('frontend.layouts.master')
@section('content')
<div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bread-inner">
                            <ul class="bread-list">
                                <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                                <li class="active"><a href="blog-single.html">Shop Grid</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->
        
        <!-- Product Style -->
        <section class="product-area shop-sidebar shop section">
            <div class="container">
                <div class="row">
                    @foreach($detail_news as $key => $news) 
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="shop-sidebar">
                                <!-- Single Widget -->
                                <div class="single-widget category">
                                    <h3 class="title">Categories</h3>
                                    <ul class="categor-list">
                                        @foreach($category as $key => $categories)
                                        <li><a href="#">{{$categories->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!--/ End Single Widget -->
                                <!-- Shop By Price -->
                                    <div class="single-widget range">
                                        <h3 class="title">Shop by Price</h3>
                                        <div class="price-filter">
                                            <div class="price-filter-inner">
                                                <div id="slider-range"></div>
                                                    <div class="price_slider_amount">
                                                    <div class="label-input">
                                                        <span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="check-box-list">
                                            <li>
                                                <label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">$20 - $50<span class="count">(3)</span></label>
                                            </li>
                                            <li>
                                                <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">$50 - $100<span class="count">(5)</span></label>
                                            </li>
                                            <li>
                                                <label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox">$100 - $250<span class="count">(8)</span></label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--/ End Shop By Price -->
                                <!-- Single Widget -->
                                <div class="single-widget recent-post">
                                    <h3 class="title">Recent post</h3>
                                    <!-- Single Post -->
                                    <div class="single-post first">
                                        <div class="image">
                                            <img src="https://via.placeholder.com/75x75" alt="#">
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">Girls Dress</a></h5>
                                            <p class="price">$99.50</p>
                                            <ul class="reviews">
                                                <li class="yellow"><i class="ti-star"></i></li>
                                                <li class="yellow"><i class="ti-star"></i></li>
                                                <li class="yellow"><i class="ti-star"></i></li>
                                                <li><i class="ti-star"></i></li>
                                                <li><i class="ti-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Single Post -->
                                    <!-- Single Post -->
                                    <div class="single-post first">
                                        <div class="image">
                                            <img src="https://via.placeholder.com/75x75" alt="#">
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">Women Clothings</a></h5>
                                            <p class="price">$99.50</p>
                                            <ul class="reviews">
                                                <li class="yellow"><i class="ti-star"></i></li>
                                                <li class="yellow"><i class="ti-star"></i></li>
                                                <li class="yellow"><i class="ti-star"></i></li>
                                                <li class="yellow"><i class="ti-star"></i></li>
                                                <li><i class="ti-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Single Post -->
                                    <!-- Single Post -->
                                    <div class="single-post first">
                                        <div class="image">
                                            <img src="https://via.placeholder.com/75x75" alt="#">
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">Man Tshirt</a></h5>
                                            <p class="price">$99.50</p>
                                            <ul class="reviews">
                                                <li class="yellow"><i class="ti-star"></i></li>
                                                <li class="yellow"><i class="ti-star"></i></li>
                                                <li class="yellow"><i class="ti-star"></i></li>
                                                <li class="yellow"><i class="ti-star"></i></li>
                                                <li class="yellow"><i class="ti-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Single Post -->
                                </div>
                                <!--/ End Single Widget -->
                                <!-- Single Widget -->
                                <div class="single-widget category">
                                    <h3 class="title">Manufacturers</h3>
                                    <ul class="categor-list">
                                        <li><a href="#">Forever</a></li>
                                        <li><a href="#">giordano</a></li>
                                        <li><a href="#">abercrombie</a></li>
                                        <li><a href="#">ecko united</a></li>
                                        <li><a href="#">zara</a></li>
                                    </ul>
                                </div>
                                <!--/ End Single Widget -->
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                       <h6 class="entry-category is-xsmall">
                        <a href="https://demachau.com/kinh-nghiem-hay/" rel="category tag">Tin tức</a></h6>

                    <h1 class="entry-title">{{$news->title}}</h1>
                    <div class="product-content">
                                        <a href="">{{$news->date}}</a>
                                    </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="single-product">
                                
                                    <div class="product-content">
                                        <div class="product-price">
                                            <span>{!!$news->content!!}</span>
                                        </div>
                                    </div>
                                </div>
                    <div class="alert alert-no-border alert-share d-flex mb-6" role="alert">
                        <span class="flex-1 fw-600 text-uppercase text-warning">Share:</span>
                        <div  class="social-buttons text-unset" >
                            <a class="social-twitter mx-2" href="javascript:void(0)" onclick="window.open('https://twitter.com/share?text=&url={!! $news->url() !!}', 'Twitter', 'width=600,height=400')"><i class="fa fa-twitter"></i></a>
                            <a class="social-dribbble mx-2" href="javascript:void(0)" onclick="window.open('http://pinterest.com/pin/create/button/?url={!! $news->url() !!}', 'Pinterest', 'width=600,height=400')"><i class="fa fa-dribbble"></i></a>
                            <a class="social-instagram ml-2" href="javascript:void(0)" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url={!! $news->url() !!}', 'Linkedin', 'width=600,height=400')"><i class="fa fa-instagram"></i></a>  
                        </div>
                    </div>
                            </div>
                        </div>

                        
                    </div>

                    @endforeach

                </div>
            </div>
        </section>
        <!--/ End Product Style 1  -->  

        <!-- Start Shop Newsletter  -->
        <section class="shop-newsletter section">
            <div class="container">
                <div class="inner-top">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-12">
                            <!-- Start Newsletter Inner -->
                            <div class="inner">
                                <h4>Newsletter</h4>
                                <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                                <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                    <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                    <button class="btn">Subscribe</button>
                                </form>
                            </div>
                            <!-- End Newsletter Inner -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Shop Newsletter -->
        
    
</div><!-- .entry-content2 -->
        
       
        
       
@stop