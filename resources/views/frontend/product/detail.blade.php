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
                    <div class="col-lg-8 col-12" style="background-color: #fff;">
                        <div class="checkout-form">
                            
                            <!-- Form -->
                            <form class="form" method="post" action="#">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                          <div class=" my-4">

    
    <!--Carousel Wrapper-->
    
    <div class="row" >
        <div class="col-md-12">
            <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                <!-- slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active"> <img src="https://i.imgur.com/weXVL8M.jpg" alt="Hills"> </div>
                    <div class="carousel-item"> <img src="https://i.imgur.com/Rpxx6wU.jpg" alt="Hills"> </div>
                    <div class="carousel-item"> <img src="https://i.imgur.com/83fandJ.jpg" alt="Hills"> </div>
                    <div class="carousel-item"> <img src="https://i.imgur.com/JiQ9Ppv.jpg" alt="Hills"> </div>

                </div> <!-- Left right --> <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#custCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> <!-- Thumbnails -->
                <ol class="carousel-indicators list-inline">
                    <li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> <img src="https://i.imgur.com/weXVL8M.jpg" class="img-fluid"> </a> </li>
                    <li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel"> <img src="https://i.imgur.com/Rpxx6wU.jpg" class="img-fluid"> </a> </li>
                    <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel"> <img src="https://i.imgur.com/83fandJ.jpg" class="img-fluid"> </a> </li>
                    <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="3" data-target="#custCarousel"> <img src="https://i.imgur.com/JiQ9Ppv.jpg" class="img-fluid"> </a> </li>

                </ol>
            </div>
        </div>
      </div>
    <!--/.Carousel Wrapper-->
          </div>
           </div>
                                   
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                       
                                           <p>{{$detail_product->title}}</p>
                                        </div>
                                        <div class="form-group">
                                             <div class="row">
                                        
                                        @foreach($input as $inputt)
                                           <div class="col-lg-12"> 
                                            <span>{{$inputt['name']}}</span>
                                            </div>   
                                            @foreach($attributes as $attribute)

                                            
                                                 @if($attribute->parent_id==$inputt['id'])
                                                <div class="col-lg-4">  

                                               <input type="radio" class="check-option" name="{{$inputt['name']}}" value="{{$attribute->title}}">
                                                 <label for="other">{{$attribute->title}}</label>
                                                 </div>
                                                 @endif
                                                 @endforeach
                                       
                                         @endforeach
                                           
                                        
                                             
                                        </div>
                                            <div class="row col-lg-6" >
                                                 <p id="option_price" style="color:red;">{{$detail_product->price}}</p> 
                                            </div>
                                        
                                             
                                        </div>
                                         <div class="form-group">                                           
                                             <div class="row">
                                                <div class="col-md-4">
                                                <input style="width:100%"  type="number" name="quantity" value="1" id="quantity" min="1">
                                                </div>
                                                <div class="col-md-8">
                                                <button type="button" class="btn btn-danger" id="add-to-cart"  data-product_id="{{$detail_product->id}}">Thêm vào giỏ</button>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                 <div class="row">  
                                                 <div class="col-md-6">                                         
                                                <button type="submit" style="width:100%"  class="btn btn-success">Mua ngay</button>
                                                </div>
                                                 <div class="col-md-6"> 
                                                <button type="submit" style="width:100%"  class="btn btn-success">Mua ngay</button>
                                                </div>
                                                </div>      
                                        </div>
                                        <div class="form-group">                                            
                                                <button type="submit" style="width:100%"  class="btn btn-success">Mua ngay</button>    
                                        </div>
                                        <div class="form-group" style="background-color: #f5f5f5;">
                                            
                             
                                        <div class="col-md-12">
                                            <span> Gọi mua hàng (8:00 - 21:00): 1900 3052</span>
                                          </div>
                                       
                                         <div class="row">
                                        <div class="col-md-7">            
                                            <input style="background-color:#fff; margin-left:5px;" type="text" placeholder="Nhập số điện thoại"  id="contact-me">  
                                        </div> 
                                        <div class="col-md-5">                                
                                            <button type="submit" class="btn btn-success">Gọi cho tôi</button>
                                        </div>      
                                        </div>
                                       </div>
                                        <hr class="ke_vach">

                                    </div>
                                   
                                    
                                    
                                    
                            
                                   
                                    
                                </div>
                            </form>

                            <!--/ End Form -->
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-12" style="border: 1px solid #ebebeb;">
                        
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
                                                <div style="font-weight: bold;">{!!$benefits->name!!}</div>
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
        
        <!-- Start Shop Services Area  -->
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
        <!-- End Shop Services -->
        
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

        <script type="text/javascript">
            $(document).ready(function(){
               $('.check-option').on('click',function(){
                    // var list = [];
                    // $('div').find("input:radio:checked").each(function () {
                    //    list.push($(this).val());
                    // });
                    search = $('div').find("input:radio:checked").map(function(){
                        return $(this).val();
                    }).get();
                         
                    $.ajax({
                        url:'{{route("api.check_option")}}',
                        method:'POST',
                        data:{search:search,_token: $('#token').val()},
                        success:function(resp){ 
                            $('#option_price').html(resp.result['option_price'] + ' đ');       
                             alert(resp.result['option_price']);
                        }
                    });
                });
            });
        </script>

@stop