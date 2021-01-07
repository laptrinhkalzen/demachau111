@extends('frontend.layouts.master')
@section('content')

    <!-- Breadcrumbs -->
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
        <section class="product-area shop-sidebar shop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="shop-sidebar">
                                <!-- Single Widget -->
                                <div class="single-widget category">
                                    <h3 style="margin-bottom: 3px;" class="title">Danh mục tin tức</h3>
                                    <ul class="categor-list">
                                        @foreach($category as $key => $categories)
                                        <li style="border-bottom: 1px solid #d2d4d2;"><a style="line-height: 1.5;" href="">{{$categories->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="single-widget category">
                                    <h3 style="margin-bottom: 3px;" class="title">Tin tức mới nhất</h3>
                                    <ul class="categor-list">
                                        @foreach($some_news as $some_new)
                                        <li style="border-bottom: 1px solid #d2d4d2;"><a style="font-size: 12px; line-height: 1.5;" href="#">{{$some_new->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!--/ End Single Widget -->
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="row">
                            <div class="col-12">
                                    <div class="" style="padding-top: 22px; font-weight: bold; font-size: 22px;">Tin tức</div>
                               
                            </div>
                        </div>
                        <div class="row">
                            @foreach($records as $key => $record)
                            <div class=" col-12">
                                 <div class="row">
                                <div class="single-product col-md-4" >
                                   
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img class="default-img" src="{{$record->images}}" alt="#">
                                            <img class="hover-img" src="{{$record->images}}" alt="#">
                                        </a>
                                        <div class="button-head">
                                            <div class="product-action">
                                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                   
                                </div>
                                <div class="single-product col-md-8">
                                    <div class="product-content">
                                        <h3><a href="{{route('news.detail',['alias'=>$record->alias])}}">{{$record->title}}</a></h3>
                                        <div class="product-price">
                                            <span style="color: lightgray;">{{$record->date}}</span>
                                        </div>
                                        <div  class="product-price">
                                            <span style="color: gray;">{!!substr($record->description,0,176)!!}...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            </div>
                             @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Product Style 1  -->  

       
        
        
        
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
            <!-- Modal end -->
        
@stop