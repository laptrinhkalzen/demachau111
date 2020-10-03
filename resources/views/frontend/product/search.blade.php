@extends('frontend.layouts.master')
@section('content')
<body class="page-body">
<!-- Start Main Content -->
<main class="main-content">

  <!-- Start Content Area -->
  <section class="content-section top_sellers carousel-spotlight ig-carousel pt-8 text-light">

    <div class="container">
      <header class="header">
        <h2>Search games</h2>
      </header>
      <div class="position-relative">
        <div class="row">
          <div class="col-lg-8">
            <!-- tab panes -->
            <div id="color_sel_Carousel-content_02" class="tab-content position-relative w-100">
              <!-- tab item -->
              <div class="tab-pane fade active show" id="mp-2-01-c" role="tabpanel" aria-labelledby="mp-2-01-tab">
                <div class="row">
                  <!-- item -->
                  @foreach($search_product as $key=> $product)
                  <div class="col-md-12 mb-4">
                    <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                    
                              <img class="img bl-3 text-primary"  src="{{$product->getImage()}}" alt="Games Store">
                     
                        
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">{{$product->title}}</h6> 
                          <div class="mb-0">
                            @if($product->content != null)
                            <i class="mr-2 fab fa-windows"></i>
                             @endif
                            @if($product->content_mac != null)
                           <i class="fab fa-apple"></i>
                            @endif
                            
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">  
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        @if($product->sale_price > 0)
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">
                                  -{{round(($product->price-$product->sale_price)/ ($product->price/100))}}%
                              </span>
                            </div>
                          </div>
                        </div>

                        @endif
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">@if($product->getSalePrice()>0) {{$product->getPrice()}}
                              @endif</span><br>
                              <span class="fw-600">@if($product->getSalePrice() > 0) 
                              {{$product->getSalePrice()}} 
                              @else 
                              {{$product->getPrice()}} 
                              @endif</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                 
            @endforeach
           
             
                 
                  <!-- /.item -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>
  <!-- /.End Content Area -->

</main>

<!-- offcanvas-cart -->
<div id="offcanvas-cart" class="offcanvas-cart offcanvas text-light h-100 r-0 l-auto d-flex flex-column" data-animation="slideRight">
  <div>
    <button type="button" data-toggle="offcanvas-close" class="close float-right ml-4 text-light o-1 fw-100" data-dismiss="offcanvas" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <hr class="border-light o-20 mt-8 mb-4">
  </div>
  <div class="offcanvas-cart-body flex-1">
    <div class="offcanvas-cart-list row align-items-center no-gutters">
      <div class="ocs-cart-item col-12">
        <div class="row align-items-center no-gutters">
          <div class="col-3 item_img d-none d-sm-block">
            <a href="{{route('home.store_product')}}"><img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Product"></a>
          </div>
          <div class="col-7 flex-1 flex-grow pl-0 pl-sm-4 pr-4">
            <a href="{{route('home.store_product')}}"><span class="d-block item_title text-lt ls-1 lh-1 small-1 fw-600 text-uppercase mb-2">Journey of the Solarcity</span></a>
            <div class="position-relative lh-1">
              <div class="number-input">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ><i class="ti-minus"></i></button>
                <input class="quantity" min="0" name="quantity" value="1" type="number">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="ti-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="row align-items-center h-100 no-gutters">
              <div class="ml-auto text-center">
                <a href="#"><i class="far fa-trash-alt"></i></a><br>
                <span class="fw-500 text-warning">€44.99</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ocs-cart-item col-12">
        <div class="row align-items-center no-gutters">
          <div class="col-3 item_img d-none d-sm-block">
            <a href="{{route('home.store_product')}}"><img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Product"></a>
          </div>
          <div class="col-7 flex-1 flex-grow pl-0 pl-sm-4 pr-4">
            <a href="{{route('home.store_product')}}"><span class="d-block item_title text-lt ls-1 lh-1 small-1 fw-600 text-uppercase mb-2">Exploration Memories</span></a>
            <div class="position-relative lh-1">
              <div class="number-input">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ><i class="ti-minus"></i></button>
                <input class="quantity" min="0" name="quantity" value="1" type="number">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="ti-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="col-2">
            <div class="row align-items-center h-100 no-gutters">
              <div class="ml-auto text-center">
                <a href="#"><i class="far fa-trash-alt"></i></a><br>
                <span class="fw-500 text-warning">€27.59</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <a href="{{route('home.checkout_order')}}" class="btn btn-lg btn-block btn-outline-light">View cart</a>
  </div>
</div>
<!-- /.offcanvas-cart -->
</body>
@stop