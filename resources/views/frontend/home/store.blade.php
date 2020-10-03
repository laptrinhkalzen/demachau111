@extends('frontend.layouts.master')
@section('content')
<body class="page-body">
<!-- Start Content Area -->
<header class="header">

  <!-- Start Content Area -->
  <section class="content-section text-light br-n bs-c bp-c pb-8" style="background-image: url(assets2/img/bg/bg-5.jpg);">
    <div class="container">
      <div class="header text-left">
        <h2>Best Deals</h2>
      </div>
      <div id="storeCarousel" class="carousel-spotlight carousel slide" data-ride="carousel">
        
        <div class="carousel-inner">

          <!-- carousel item -->
          <div class="carousel-item active">
            <div class="row">
              <div class="col-lg-8 pr-lg-1">
                <a href="#">
                  <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets2/img/content/store/01.jpg);">
                  </div>
                </a>
              </div>
              <div class="col-lg-4 d-none d-lg-block pl-lg-1">
                <div class="row no-gutters h-100">
                  <div class="col-12 pb-1">
                    <a href="#">
                      <div class="d-flex h-100 bs-c br-n bp-c position-relative" style="background-image: url(assets2/img/content/store/01-1.jpg);"></div>
                    </a>
                  </div>
                  <div class="col-12 pt-1">
                    <a href="#">
                      <div class="d-flex h-100 bs-c br-n bp-c position-relative" style="background-image: url(assets2/img/content/store/01-2.jpg);"></div>
                    </a>
                  </div>
                </div>  
              </div>
              <div class="col-12">
                <div class="bg-dark d-flex p-4">
                  <div class="flex-1 d-flex align-items-center">
                    <h5 class="mb-0"><a href="{{route('home.store_product')}}">Exploration Memories</a></h5>
                  </div>
                  <div class="price d-none d-md-flex flex-wrap align-items-center">
                    <div class="px-3 py-1 my-md-3 my-lg-0 bg-warning text-secondary rounded"><span class="fw-600">-15%</span></div>
                    <div class="pl-3 d-flex flex-column my-md-3 my-lg-0 lh-1">
                      <span class="small discount fw-600 td-lt mb-1">€30.99</span>
                      <span class="discount_final lead-2">€26.99</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.carousel item -->

          <!-- carousel item -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-8 pr-lg-1">
                <a href="#">
                  <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets2/img/content/store/02.jpg);">
                  </div>
                </a>
              </div>
              <div class="col-lg-4 d-none d-lg-block pl-lg-1">
                <div class="row no-gutters h-100">
                  <div class="col-12 pb-1">
                    <a href="#">
                      <div class="d-flex h-100 bs-c br-n bp-c position-relative" style="background-image: url(assets2/img/content/store/02-1.jpg);"></div>
                    </a>
                  </div>
                  <div class="col-12 pt-1">
                    <a href="#">
                      <div class="d-flex h-100 bs-c br-n bp-c position-relative" style="background-image: url(assets2/img/content/store/02-2.jpg);"></div>
                    </a>
                  </div>
                </div>  
              </div>
              <div class="col-12">
                <div class="bg-dark d-flex p-4">
                  <div class="flex-1 d-flex align-items-center">
                    <h5 class="mb-0"><a href="{{route('home.store_product')}}">Journey of the Solarcity</a></h5>
                  </div>
                  <div class="price d-none d-md-flex flex-wrap align-items-center">
                    <div class="px-3 py-1 my-md-3 my-lg-0 bg-warning text-secondary rounded"><span class="fw-600">-10%</span></div>
                    <div class="pl-3 d-flex flex-column my-md-3 my-lg-0 lh-1">
                      <span class="small discount fw-600 td-lt mb-1">€90.99</span>
                      <span class="discount_final lead-2">€80.29</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.carousel item -->

          <!-- carousel item -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-8 pr-lg-1">
                <a href="#">
                  <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets2/img/content/store/03.jpg);">
                  </div>
                </a>
              </div>
              <div class="col-lg-4 d-none d-lg-block pl-lg-1">
                <div class="row no-gutters h-100">
                  <div class="col-12 pb-1">
                    <a href="#">
                      <div class="d-flex h-100 bs-c br-n bp-c position-relative" style="background-image: url(assets2/img/content/store/03-1.jpg);"></div>
                    </a>
                  </div>
                  <div class="col-12 pt-1">
                    <a href="#">
                      <div class="d-flex h-100 bs-c br-n bp-c position-relative" style="background-image: url(assets2/img/content/store/03-2.jpg);"></div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="bg-dark d-flex p-4">
                  <div class="flex-1 d-flex align-items-center">
                    <h5 class="mb-0"><a href="{{route('home.store_product')}}">Explosive: Blast</a></h5>
                  </div>
                  <div class="price d-none d-md-flex flex-wrap align-items-center">
                    <div class="px-3 py-1 my-md-3 my-lg-0 bg-warning text-secondary rounded"><span class="fw-600">-13%</span></div>
                    <div class="pl-3 d-flex flex-column my-md-3 my-lg-0 lh-1">
                      <span class="small discount fw-600 td-lt mb-1">€23.99</span>
                      <span class="discount_final lead-2">€20.49</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.carousel item -->

        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev light" href="#storeCarousel" data-slide="prev">
          <span class="icon-cl-prev pe-7s-angle-left lead-6 px-2 py-2"></span>
        </a>
        <a class="carousel-control-next light" href="#storeCarousel" data-slide="next">
          <span class="icon-cl-next pe-7s-angle-right lead-6 px-2 py-2"></span>
        </a>

        <!-- Indicators -->
        <ul class="carousel-indicators indicators-square">
          <li data-target="#storeCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#storeCarousel" data-slide-to="1"></li>
          <li data-target="#storeCarousel" data-slide-to="2"></li>
        </ul>
      </div>
      
    </div>
  </section>
  <!-- /.End Content Area -->

</header>
<!-- /.End Content Area -->

<!-- Start Main Content -->
<main class="main-content">

  <!-- Start Content Area -->
  <section class="content-section top_sellers carousel-spotlight ig-carousel pt-8 text-light">
    <div class="container">
      <header class="header">
        <h2>Most popular products</h2>
      </header>
      <div class="position-relative">
        <div class="row">
          <div class="col-lg-8">
            <!-- nav tabs -->
            <ul class="spotlight-tabs spotlight-tabs-dark nav nav-tabs border-0 mb-5 position-relative flex-nowrap" id="most_popular_products-carousel-01" role="tablist">
              <li class="nav-item text-fnwp position-relative">
                <a class="nav-link active show" id="mp-2-01-tab" data-toggle="tab" href="#mp-2-01-c" role="tab" aria-controls="mp-2-01-c" aria-selected="true">New</a>
              </li>
              <li class="nav-item text-fnwp position-relative"> 
                <a class="nav-link" id="mp-2-02-tab" data-toggle="tab" href="#mp-2-02-c" role="tab" aria-controls="mp-2-02-c" aria-selected="false">Highlights</a>
              </li>
              <li class="nav-item text-fnwp position-relative"> 
                <a class="nav-link" id="mp-2-03-tab" data-toggle="tab" href="#mp-2-03-c" role="tab" aria-controls="mp-2-03-c" aria-selected="false">Coming Soon</a>
              </li>
            </ul>
            <!-- tab panes -->
            <div id="color_sel_Carousel-content_02" class="tab-content position-relative w-100">
              <!-- tab item -->
              <div class="tab-pane fade active show" id="mp-2-01-c" role="tabpanel" aria-labelledby="mp-2-01-tab">
                <div class="row">
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                </div>
              </div>
              <!-- tab item -->

              <!-- tab item -->
              <div class="tab-pane fade" id="mp-2-02-c" role="tabpanel" aria-labelledby="mp-2-02-tab">
                <div class="row">
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                </div>
              </div>

              <!-- tab item -->
              <div class="tab-pane fade" id="mp-2-03-c" role="tabpanel" aria-labelledby="mp-2-03-tab">
                <div class="row">
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Journey of the Solarcity</h6> 
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€27.99</span><br>
                              <span class="fw-600">€23.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Exploration Memories</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-13%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€34.99</span><br>
                              <span class="fw-600">€24.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-10.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Explosive: Blast</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-18%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€92.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-01.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Creature 2020</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Drama, Story Rich, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-22%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€99.99</span><br>
                              <span class="fw-600">€84.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-02.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Shadow Leap</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, Adventure
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-43%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€72.99</span><br>
                              <span class="fw-600">€34.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="col-md-12 mb-4">
                    <a href="{{route('home.store_product')}}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary" src="assets2/img/content/store/h-07.jpg" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Haku RE</h6>
                          <div class="mb-0">
                            <i class="mr-2 fab fa-windows"></i>
                            <i class="mr-2 fab fa-steam"></i>
                            <i class="fab fa-apple"></i>
                          </div>
                          <div class="position-relative">
                            <span class="item_genre small fw-600">
                              Action, RPG, Pixel Graphics
                            </span>
                          </div>
                        </div>
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">-10%</span>
                            </div>
                          </div>
                        </div>
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">€10.99</span><br>
                              <span class="fw-600">€3.29</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- /.item -->
                </div>
              </div>
            </div>

            <!-- pagination -->
            <nav class="mt-4 pt-4 border-top border-secondary" aria-label="Page navigation">
              <ul class="pagination justify-content-end">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span class="ti-angle-left small-7" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span class="ti-angle-right small-7" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- /.pagination -->
          </div>
          <div class="col-lg-4">
            <div class="filters border border-secondary rounded p-4">
              <ul class="sidebar-nav-light-hover list-unstyled mb-0 text-unset small-3 fw-600">

                <li class="nav-item text-light transition mb-2 active">
                  <a href="#" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser collapser-active nav-link-border">
                      <span class="p-collapsing-title">Platform</span>
                  </a>
                  <div class="collapse nav-collapse show">
                      <ul class="list-unstyled py-2">
                        <li class="nav-item">
                          <div class="nav-link py-1 px-3">
                              <form>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox" value="" id="PC_check" checked>
                                  <label class="custom-control-label" for="PC_check">
                                    PC
                                  </label>
                                </div>
                              </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-1 px-3">
                              <form>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox" value="" id="MAC_check">
                                  <label class="custom-control-label" for="MAC_check">
                                    MAC
                                  </label>
                                </div>
                              </form>
                          </div>
                        </li>
                      </ul>
                  </div>
                </li>
                <li class="nav-item text-light transition mb-2">
                  <a href="#" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser nav-link-border">
                      <span class="p-collapsing-title">Genre</span>
                  </a>
                  <div class="collapse nav-collapse">
                      <ul class="list-unstyled py-2">
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Action_check">
                                <label class="custom-control-label" for="Action_check">
                                  Action
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Adventure_check">
                                <label class="custom-control-label" for="Adventure_check">
                                  Adventure
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Casual_check">
                                <label class="custom-control-label" for="Casual_check">
                                  Casual
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Early_access_check">
                                <label class="custom-control-label" for="Early_access_check">
                                  Early Access
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Free_to_play_check">
                                <label class="custom-control-label" for="Free_to_play_check">
                                  Free to Play
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Indie_check">
                                <label class="custom-control-label" for="Indie_check">
                                  Indie
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Massively_multiplayer_check">
                                <label class="custom-control-label" for="Massively_multiplayer_check">
                                  Massively Multiplayer
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Racing_check">
                                <label class="custom-control-label" for="Racing_check">
                                  Racing
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="RPG_check">
                                <label class="custom-control-label" for="RPG_check">
                                  RPG
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Simulation_check">
                                <label class="custom-control-label" for="Simulation_check">
                                  Simulation
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Sports_check">
                                <label class="custom-control-label" for="Sports_check">
                                  Sports
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Strategy_check">
                                <label class="custom-control-label" for="Strategy_check">
                                  Strategy
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                      </ul>
                  </div>
                </li>
                <li class="nav-item text-light transition mb-2">
                  <a href="#" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser nav-link-border">
                      <span class="p-collapsing-title">Software</span>
                  </a>
                  <div class="collapse nav-collapse">
                      <ul class="list-unstyled py-2">
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Animation_modeling_check">
                                <label class="custom-control-label" for="Animation_modeling_check">
                                  Animation & Modeling
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Audio_production_check">
                                <label class="custom-control-label" for="Audio_production_check">
                                  Audio Production
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Design_check">
                                <label class="custom-control-label" for="Design_check">
                                  Design
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Education_check">
                                <label class="custom-control-label" for="Education_check">
                                  Education
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Game_development_check">
                                <label class="custom-control-label" for="Game_development_check">
                                  Game Development
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Photo_editing_check">
                                <label class="custom-control-label" for="Photo_editing_check">
                                  Photo Editing
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Utilities_check">
                                <label class="custom-control-label" for="Utilities_check">
                                  Utilities
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Video_production_check">
                                <label class="custom-control-label" for="Video_production_check">
                                  Video Production
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Web_publishing_check">
                                <label class="custom-control-label" for="Web_publishing_check">
                                  Web Publishing
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                      </ul>
                  </div>
                </li>
                <li class="nav-item text-light transition mb-2">
                  <a href="#" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser nav-link-border">
                      <span class="p-collapsing-title">Supported VR</span>
                  </a>
                  <div class="collapse nav-collapse">
                      <ul class="list-unstyled py-2">
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="PlayStationVR_check">
                                <label class="custom-control-label" for="PlayStationVR_check">
                                  PlayStation VR
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Oculus_rift_check">
                                <label class="custom-control-label" for="Oculus_rift_check">
                                  Oculus Rift
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="HTC_vive_check">
                                <label class="custom-control-label" for="HTC_vive_check">
                                  HTC Vive
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                      </ul>
                  </div>
                </li>
                <li class="nav-item text-light transition mb-2">
                  <a href="#" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser nav-link-border">
                      <span class="p-collapsing-title">Release Status</span>
                  </a>
                  <div class="collapse nav-collapse">
                      <ul class="list-unstyled py-2">
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Released_check">
                                <label class="custom-control-label" for="Released_check">
                                  Released
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Pre_Purchase_check">
                                <label class="custom-control-label" for="Pre_Purchase_check">
                                  Pre-Purchase
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link py-2 px-3">
                            <form>
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="Coming_soon_check">
                                <label class="custom-control-label" for="Coming_soon_check">
                                  Coming Soon
                                </label>
                              </div>
                            </form>
                          </div>
                        </li>
                      </ul>
                  </div>
                </li>
                <li class="nav-item text-light transition mt-4">
                  <a href="#" class="btn btn-warning d-block">Reset Filter</a>
                </li>
              </ul>
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