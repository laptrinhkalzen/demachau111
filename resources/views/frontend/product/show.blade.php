@extends('frontend.layouts.master')
@section('content')
<body style="background-color: #f6f8f8">
    <section class=" pt-3 pb-4" style="margin-top: 20px;">
        <div class="container">
            <div class="row">
                @foreach ($slide1 as $key=>$product)
                @if($key == 1)
                @break
                @endif
                <div class="col-lg-8 col-md-8 col-dm-12 col-12">
                    <div id="carouselHome" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="javascript:void(0)">
                                    <img src="{!!$product->getImage()!!}" style="height:400px; object-fit: cover;" class="d-block w-100">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-4 col-md-4 col-12">
                    @foreach ($slide1 as $key=>$product)
                    @if($key == 0)
                    @continue
                    @endif
                    @if($key == 3)
                    @break
                    @endif
                    <a href="javascript:void(0)" title="" class="hide-mobile">
                        <img src="{!!$product->getImage()!!}" style="width: 336px; height:170px; object-fit:cover; margin-bottom: 20px; margin-top: 10px;" />
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="loc-kq">
        <div class="container">
            <div class="form-book">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" style="font-size: 15px;" id="news" role="tabpanel" aria-labelledby="home-tab">
                        <form id="product_filter_form" method="get" action="{{route('product.search')}}">
                            <div class="filter-cate">
                                <div class="container ">
                                    <div class="bg-fff border-r-4 px-3 py-2 mb-3">
                                        <div class="row">
                                            <div class="col-xl-2 col-md-6 col-sm-12 col-12">
                                                <div class="form-group d-flex mb-2 mb-lg-0 small py-2">
                                                    <label for="formControlRange " class="mb-0 mr-3 ">Tìm kiếm theo</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-10 col-md-6 col-sm-12 col-12">
                                                <div class="form-row">
                                                        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                        <select name="price" class="form-control mb-2 mb-lg-0 filter-select range-price" onchange="this.form.submit()">
                                                            <option hidden value="">Khung giá</option>
                                                            <option  value="">Tất cả</option>
                                                            <option <?php if($price_id==1) echo ('selected')?> value="1">Từ 0 - 100.000đ</option>
                                                            <option <?php if($price_id==2) echo ('selected')?> value="2">Từ 200.000 - 300.000đ</option>
                                                            <option <?php if($price_id==3) echo ('selected')?> value="3">Từ 300.000 - 400.000đ</option>
                                                            <option <?php if($price_id==4) echo ('selected')?> value="4">Từ 400.000 - 600.000đ</option>
                                                            <option <?php if($price_id==5) echo ('selected')?> value="5">Từ 600.000 trở lên</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                        <select name="category_id" class="form-control mb-2 mb-lg-0 filter-select dynamic-filter" onchange="this.form.submit()">
                                                            <option hidden value="">Loại sản phẩm</option>
                                                            <option value="">Tất cả</option>
                                                            @foreach ($category_filter as $key=>$cat)
                                                            @if($cat->id==$cat_id)
                                                            <option selected value="{!!$cat->id!!}">{!!$cat->title!!}</option>
                                                            @else
                                                            <option value="{!!$cat->id!!}">{!!$cat->title!!}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                        <select name="brand" class="form-control mb-2 mb-lg-0 filter-select dynamic-filter" onchange="this.form.submit()">
                                                            <option  hidden value="">Tên Thương Hiệu</option>
                                                            <option value="">Tất cả</option>
                                                            @foreach ($brand as $key=>$brand)
                                                            @if($brand->id==$brand_id)
                                                            <option selected value="{!!$brand->id!!}">{!!$brand->title!!}</option>
                                                            @else
                                                            <option value="{!!$brand->id!!}">{!!$brand->title!!}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                        <select name="color" class="form-control mb-2 mb-lg-0 filter-select dynamic-filter" onchange="this.form.submit()">
                                                            <option hidden value="">Màu Sắc</option>
                                                            <option value="">Tất cả</option>
                                                            @foreach ($color as $key=>$color)
                                                            @if($color->id==$color_id)
                                                            <option selected value="{!!$color->id!!}">{!!$color->title!!}</option>
                                                            @else
                                                            <option value="{!!$color->id!!}">{!!$color->title!!}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                        <select name="sort" class="form-control mb-2 mb-lg-0 filter-select extra orderby" onchange="this.form.submit()">
                                                            <option hidden value="">Sắp xếp</option>
                                                            <option value="">Mặc định</option>
                                                            <option <?php if($sort_id==1) echo ('selected')?> value="1">Giá tăng dần</option>
                                                            <option <?php if($sort_id==2) echo ('selected')?> value="2">Giá giảm dần</option>
                                                        </select>   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--                     <div class="list-prod-search bg-fff">
                            <div class="container">
                                <p class="txt-all-sp">Tất cả sản phẩm : <strong class="tk-keyword"></strong></p>
                            </div>
                        </div>  -->
                        <div class="sub-cate">
                            <div class="container">
                                <div class="bg-fff border-r-4 px-3 py-2 mb-3">
                                    <ul class="list-sub-cate row">
                                        @foreach($category_arr as $key=>$cat)
                                        <li class="col-xl-2 col-md-2 col-sm-4 col-6 mb-pd-sub">
                                            <a style="color:#007dff" href="{!! route('product.show',['alias' => $cat->alias])!!}">{!!$cat->title!!}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <h4 class="_title_tim_kiem">Tìm kiếm sản phẩm</h4>
                            <div id="_binding_tim_kiem"></div>
                        </div>
                        <div class="container ">
                            <div class="bg-fff p-3 p-xl-4 content-cate-intro mb-3">
                                <div class="row flex-row-reverse">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="detail">
                                            <h5 class="title font-weight-bold">Giới thiệu {{$title_category->title}}</h5>
                                            <div class="review  d-inline-block  mb-3">
                                                <div class="star-rating h5 text-center mb-3" data-id="15">
                                                    <i class="fas fa-star checked" aria-hidden="true"></i>
                                                    <i class="fas fa-star checked" aria-hidden="true"></i>
                                                    <i class="fas fa-star checked" aria-hidden="true"></i>
                                                    <i class="fas fa-star checked" aria-hidden="true"></i>
                                                    <i class="fas fa-star checked" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            {!!$title_category->content!!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center" style="margin-bottom: 15px">
                                <a href="javascript:;" class="btn btn-outline-view-more" onclick="expand();">Xem thêm<i class="fas fa-chevron-down ml-2 "></i></a>
                            </div>
                        </div>
                        @if(count($parent_category)!=0)
                        @foreach($parent_category as $key2 => $parent_cat)
                        <section class="my-4 san-go-nb">
                            <div class="container ">
                                <div class="bg-fff pt-3 border-r-4" >
                                    <div class="container">
                                        <div class="row mb-3 no-gutters ">
                                            <div class="col-md-3 col-12 mb-2 mb-md-0">
                                                <a href="{!! route('product.show',['alias' => $parent_cat->alias])!!}" class="h5 font-weight-bold ">{!!$parent_cat->title!!}</a>
                                            </div>
                                            <div class="col-md-9 col-12 d-lg-flex justify-content-lg-end align-self-center">
                                                @if(count($children_category)!=0)
                                                <div class="menu-op align-self-center mr-lg-3">
                                                    <!--menu mobile-->
                                                    <div class="d-flex flex-wrap d-lg-none">
                                                        @foreach ($children_category as $key=>$children_cat )
                                                        <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region active" data-region-id="1486">{!!$children_cat ->title!!}</a>
                                                        @endforeach
                                                    </div>
                                                    <!--menu mobile end-->
                                                    <!--menu pc-->
                                                    <div class="swiper-container d-none d-lg-block">
                                                        <!-- Additional required wrapper -->
                                                        <div class="swiper-wrapper">
                                                            <!-- Slides -->
                                                            <ul class="nav nav-pills">
                                                                @foreach ($children_category as $key=>$children_cat )
                                                                @if($parent_cat->id==$children_cat->parent_id)
                                                                <li><a data-toggle="pill" href="#tab_{{$key}}_{{$key2}}" style="color:#007dff">{!!$children_cat->title!!}        </a></li>
                                                                &nbsp&nbsp&nbsp&nbsp&nbsp
                                                                @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--menu pc end-->
                                                </div>
                                                @endif
                                                <div class=" align-self-center  ">
                                                    <a href="{{route('product.show',['alias' => $parent_cat->alias])}}" class="link-view-more url-old-link">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @if(count($children_category)!=0)
                                        <div class="tab-content">
                                            <div id="home" class="tab-pane active">
                                                <div class="_binding_product">
                                                    <div class="set-total" data-total="8" data-id="1486" style="display:none"></div>
                                                    <div class="row no-gutters mb-3 mb-md-0">
                                                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                            @php $i=0; @endphp
                                                            @foreach($product_arr as $key=> $product)
                                                            @if($parent_cat->id==$product->category_id)
                                                            @if($i <2 )
                                                            <div >
                                                                <div class="item-product item-product-large">
                                                                    <div class="image">
                                                                        <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}">
                                                                            <img src="{{$product->getImage()}}" style="height: 250px" class="img-fluid lazy" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="py-1">
                                                                        <h5 class="title">
                                                                        <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" title="Sàn gỗ JANMI O121 - 12mm">
                                                                            {!!$product->title!!}
                                                                        </a>
                                                                        </h5>
                                                                        <div class="price-new">
                                                                            @if($product->sale_price==0)
                                                                            {!!$product->getPrice()!!}
                                                                            @else
                                                                            {!!$product->getSalePrice()!!}
                                                                            @endif
                                                                        </div>
                                                                        @if($product->sale_price!=0)
                                                                        <div class="price-old">
                                                                            {!!$product->getPrice()!!}
                                                                        </div>
                                                                        @else
                                                                        &nbsp
                                                                        @endif
                                                                        <div class="size small mb-1">
                                                                            Kích thước: {!!$product->getSize()!!} mm
                                                                        </div>
                                                                        <div class="review d-flex">
                                                                            <div class="color-FFAB1B mr-2">
                                                                                0,0/5<i class="fas fa-star ml-1"></i>
                                                                            </div>
                                                                            <div class="color-828282">
                                                                                0 đánh giá
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @php $i++; @endphp
                                                            <?php $index=$key ?>
                                                            @endif
                                                            @endif
                                                            @endforeach
                                                        </div>
                                                        
                                                        
                                                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                            <div class="row no-gutters h-100 ">
                                                                @foreach($product_arr as $key=> $product)
                                                                @if($parent_cat->id==$product->category_id && $key>$index)
                                                                <div class="col-md-4 col-sm-4 col-6 ">
                                                                    <div class="item-product" data-id="95211" data-properties="">
                                                                        <div class="image">
                                                                            <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}"><img src="{{$product->getImage()}}" style="width: 200px; height: 200px; object-fit: cover;" class="lazy img-fluid" /></a>
                                                                        </div>
                                                                        <div class="">
                                                                            <h5 class="title">
                                                                            <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" title="Sàn gỗ Florton FL180805">
                                                                                {!!$product->title!!}
                                                                            </a>
                                                                            </h5>
                                                                            <div class="price-new">
                                                                                @if($product->sale_price==0)
                                                                                {!!$product->getPrice()!!}
                                                                                @else
                                                                                {!!$product->getSalePrice()!!}
                                                                                @endif
                                                                            </div>
                                                                            @if($product->sale_price!=0)
                                                                            <div class="price-old">
                                                                                {!!$product->getPrice()!!}
                                                                            </div>
                                                                            @else
                                                                            &nbsp
                                                                            @endif
                                                                            <div class="size small mb-1">
                                                                                Kích thước: {!!$product->getSize()!!} mm
                                                                            </div>
                                                                            <div class="review d-flex">
                                                                                <div class="color-FFAB1B mr-2">
                                                                                    0,0/5<i class="fas fa-star ml-1"></i>
                                                                                </div>
                                                                                <div class="color-828282">
                                                                                    0 đánh giá
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @php $i++; @endphp
                                                                @if($i==8)
                                                                @break;
                                                                @endif
                                                                @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            @foreach($children_category as $key => $children_cat)
                                            
                                            <div id="tab_{{$key}}_{{$key2}}" class="tab-pane fade ">
                                                <div class="_binding_product">
                                                    <div class="set-total" data-total="8" data-id="1486" style="display:none"></div>
                                                    <div class="row no-gutters mb-3 mb-md-0">
                                                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                            @php $i=0; @endphp
                                                            @foreach($product_category as $key=> $product)
                                                            @if($children_cat->id==$product->category_id)
                                                            @if($i <2 )
                                                            <div >
                                                                <div class="item-product item-product-large">
                                                                    <div class="image">
                                                                        <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}">
                                                                            <img src="{{$product->getImage()}}" style="height: 250px" class="img-fluid lazy" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="py-1">
                                                                        <h5 class="title">
                                                                        <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" title="Sàn gỗ JANMI O121 - 12mm">
                                                                            {!!$product->title!!}
                                                                        </a>
                                                                        </h5>
                                                                        <div class="price-new">
                                                                            @if($product->sale_price==0)
                                                                            {!!$product->getPrice()!!}
                                                                            @else
                                                                            {!!$product->getSalePrice()!!}
                                                                            @endif
                                                                        </div>
                                                                        @if($product->sale_price!=0)
                                                                        <div class="price-old">
                                                                            {!!$product->getPrice()!!}
                                                                        </div>
                                                                        @else
                                                                        &nbsp
                                                                        @endif
                                                                        <div class="size small mb-1">
                                                                            Kích thước: {!!$product->getSize()!!} mm
                                                                        </div>
                                                                        <div class="review d-flex">
                                                                            <div class="color-FFAB1B mr-2">
                                                                                0,0/5<i class="fas fa-star ml-1"></i>
                                                                            </div>
                                                                            <div class="color-828282">
                                                                                0 đánh giá
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @php $i++; @endphp
                                                            <?php $index=$key ?>
                                                            @endif
                                                            @endif
                                                            @endforeach
                                                        </div>
                                                        
                                                        
                                                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                            <div class="row no-gutters h-100 ">
                                                                @foreach($product_category as $key=> $product)
                                                                @if($children_cat->id==$product->category_id && $key>$index)
                                                                <div class="col-md-4 col-sm-4 col-6 ">
                                                                    <div class="item-product" data-id="95211" data-properties="">
                                                                        <div class="image">
                                                                            <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}"><img src="{{$product->getImage()}}" style="width: 200px; height: 200px; object-fit: cover;" class="lazy img-fluid" /></a>
                                                                        </div>
                                                                        <div class="">
                                                                            <h5 class="title">
                                                                            <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" title="Sàn gỗ Florton FL180805">
                                                                                {!!$product->title!!}
                                                                            </a>
                                                                            </h5>
                                                                            <div class="price-new">
                                                                                @if($product->sale_price==0)
                                                                                {!!$product->getPrice()!!}
                                                                                @else
                                                                                {!!$product->getSalePrice()!!}
                                                                                @endif
                                                                            </div>
                                                                            @if($product->sale_price!=0)
                                                                            <div class="price-old">
                                                                                {!!$product->getPrice()!!}
                                                                            </div>
                                                                            @else
                                                                            &nbsp
                                                                            @endif
                                                                            <div class="size small mb-1">
                                                                                Kích thước: {!!$product->getSize()!!} mm
                                                                            </div>
                                                                            <div class="review d-flex">
                                                                                <div class="color-FFAB1B mr-2">
                                                                                    0,0/5<i class="fas fa-star ml-1"></i>
                                                                                </div>
                                                                                <div class="color-828282">
                                                                                    0 đánh giá
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @php $i++; @endphp
                                                                @if($i==8)
                                                                @break;
                                                                @endif
                                                                @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        @else
                                        <div class="_binding_product">
                                            <div class="set-total" data-total="8" data-id="1486" style="display:none"></div>
                                            <div class="row no-gutters mb-3 mb-md-0">
                                                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                    @php $i=0; @endphp
                                                    @foreach($product_arr as $key=> $product)
                                                    @if($parent_cat->id==$product->category_id)
                                                    @if($i <2 )
                                                    <div >
                                                        <div class="item-product item-product-large">
                                                            <div class="image">
                                                                <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}">
                                                                    <img src="{{$product->getImage()}}" style="height: 250px" class="img-fluid lazy" />
                                                                </a>
                                                            </div>
                                                            <div class="py-1">
                                                                <h5 class="title">
                                                                <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" title="Sàn gỗ JANMI O121 - 12mm">
                                                                    {!!$product->title!!}
                                                                </a>
                                                                </h5>
                                                                <div class="price-new">
                                                                    @if($product->sale_price==0)
                                                                    {!!$product->getPrice()!!}
                                                                    @else
                                                                    {!!$product->getSalePrice()!!}
                                                                    @endif
                                                                </div>
                                                                @if($product->sale_price!=0)
                                                                <div class="price-old">
                                                                    {!!$product->getPrice()!!}
                                                                </div>
                                                                @else
                                                                &nbsp
                                                                @endif
                                                                <div class="size small mb-1">
                                                                    Kích thước: {!!$product->getSize()!!} mm
                                                                </div>
                                                                <div class="review d-flex">
                                                                    <div class="color-FFAB1B mr-2">
                                                                        0,0/5<i class="fas fa-star ml-1"></i>
                                                                    </div>
                                                                    <div class="color-828282">
                                                                        0 đánh giá
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php $i++; @endphp
                                                    <?php $index=$key ?>
                                                    @endif
                                                    @endif
                                                    @endforeach
                                                </div>
                                                
                                                
                                                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                    <div class="row no-gutters h-100 ">
                                                        @foreach($product_arr as $key=> $product)
                                                        @if($parent_cat->id==$product->category_id && $key>$index)
                                                        <div class="col-md-4 col-sm-4 col-6 ">
                                                            <div class="item-product" data-id="95211" data-properties="">
                                                                <div class="image">
                                                                    <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}"><img src="{{$product->getImage()}}" style="width: 200px; height: 200px; object-fit: cover;" class="lazy img-fluid" /></a>
                                                                </div>
                                                                <div class="">
                                                                    <h5 class="title">
                                                                    <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" title="Sàn gỗ Florton FL180805">
                                                                        {!!$product->title!!}
                                                                    </a>
                                                                    </h5>
                                                                    <div class="price-new">
                                                                        @if($product->sale_price==0)
                                                                        {!!$product->getPrice()!!}
                                                                        @else
                                                                        {!!$product->getSalePrice()!!}
                                                                        @endif
                                                                    </div>
                                                                    @if($product->sale_price!=0)
                                                                    <div class="price-old">
                                                                        {!!$product->getPrice()!!}
                                                                    </div>
                                                                    @else
                                                                    &nbsp
                                                                    @endif
                                                                    <div class="size small mb-1">
                                                                        Kích thước: {!!$product->getSize()!!} mm
                                                                    </div>
                                                                    <div class="review d-flex">
                                                                        <div class="color-FFAB1B mr-2">
                                                                            0,0/5<i class="fas fa-star ml-1"></i>
                                                                        </div>
                                                                        <div class="color-828282">
                                                                            0 đánh giá
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @php $i++; @endphp
                                                        @if($i==8)
                                                        @break;
                                                        @endif
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        @endif
                                        <a href="javascript:void(0)" class="view-remain-product" data-skip="8" data-size="" data-id="">
                                            <div class="see-more"><i class="fas fa-angle-double-right"></i> Xem thêm <span class="remain-product"><b>0</b></span> sản phẩm </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        @endforeach
                        @else
                        <section class="my-4 san-go-nb">
                            <div class="container ">
                                <div class="bg-fff pt-3 border-r-4" >
                                    <div class="container">
                                        <div class="row mb-3 no-gutters ">
                                            <div class="col-md-3 col-12 mb-2 mb-md-0">
                                                <a href="javascript:void(0)" class="h5 font-weight-bold ">{!!$title_category->title!!}</a>
                                            </div>
                                            <div class="col-md-9 col-12 d-lg-flex justify-content-lg-end align-self-center">
                                                <div class=" align-self-center  ">
                                                    <a href="{{route('product.show',['alias' => $title_category->alias])}}" class="link-view-more url-old-link">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_binding_product">
                                            <div class="set-total" data-total="8" data-id="1486" style="display:none"></div>
                                            <div class="row no-gutters mb-3 mb-md-0">
                                                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                    @php $i=0; @endphp
                                                    @foreach($product_arr as $key=> $product)
                                                    @if($main_category->id==$product->category_id)
                                                    @if($i <2 )
                                                    <div >
                                                        <div class="item-product item-product-large">
                                                            <div class="image">
                                                                <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}">
                                                                    <img src="{{$product->getImage()}}" style="height: 250px" class="img-fluid lazy" />
                                                                </a>
                                                            </div>
                                                            <div class="py-1">
                                                                <h5 class="title">
                                                                <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" title="Sàn gỗ JANMI O121 - 12mm">
                                                                    {!!$product->title!!}
                                                                </a>
                                                                </h5>
                                                                <div class="price-new">
                                                                    @if($product->sale_price==0)
                                                                    {!!$product->getPrice()!!}
                                                                    @else
                                                                    {!!$product->getSalePrice()!!}
                                                                    @endif
                                                                </div>
                                                                @if($product->sale_price!=0)
                                                                <div class="price-old">
                                                                    {!!$product->getPrice()!!}
                                                                </div>
                                                                @else
                                                                &nbsp
                                                                @endif
                                                                <div class="size small mb-1">
                                                                    Kích thước: {!!$product->getSize()!!} mm
                                                                </div>
                                                                <div class="review d-flex">
                                                                    <div class="color-FFAB1B mr-2">
                                                                        0,0/5<i class="fas fa-star ml-1"></i>
                                                                    </div>
                                                                    <div class="color-828282">
                                                                        0 đánh giá
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php $i++; @endphp
                                                    <?php $index=$key ?>
                                                    @endif
                                                    @endif
                                                    @endforeach
                                                </div>
                                                
                                                
                                                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                    <div class="row no-gutters h-100 ">
                                                        @foreach($product_arr as $key=> $product)
                                                        @if($main_category->id==$product->category_id && $key>$index)
                                                        <div class="col-md-4 col-sm-4 col-6 ">
                                                            <div class="item-product" data-id="95211" data-properties="">
                                                                <div class="image">
                                                                    <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}"><img src="{{$product->getImage()}}" style="width: 200px; height: 200px; object-fit: cover;" class="lazy img-fluid" /></a>
                                                                </div>
                                                                <div class="">
                                                                    <h5 class="title">
                                                                    <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" title="Sàn gỗ Florton FL180805">
                                                                        {!!$product->title!!}
                                                                    </a>
                                                                    </h5>
                                                                    <div class="price-new">
                                                                        @if($product->sale_price==0)
                                                                        {!!$product->getPrice()!!}
                                                                        @else
                                                                        {!!$product->getSalePrice()!!}
                                                                        @endif
                                                                    </div>
                                                                    @if($product->sale_price!=0)
                                                                    <div class="price-old">
                                                                        {!!$product->getPrice()!!}
                                                                    </div>
                                                                    @else
                                                                    &nbsp
                                                                    @endif
                                                                    <div class="size small mb-1">
                                                                        Kích thước: {!!$product->getSize()!!} mm
                                                                    </div>
                                                                    <div class="review d-flex">
                                                                        <div class="color-FFAB1B mr-2">
                                                                            0,0/5<i class="fas fa-star ml-1"></i>
                                                                        </div>
                                                                        <div class="color-828282">
                                                                            0 đánh giá
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @php $i++; @endphp
                                                        @if($i==8)
                                                        @break;
                                                        @endif
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <a href="javascript:void(0)" class="view-remain-product" data-skip="8" data-size="" data-id="">
                                            <div class="see-more"><i class="fas fa-angle-double-right"></i> Xem thêm <span class="remain-product"><b>0</b></span> sản phẩm </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        @endif
                        <!--                         <div class="text-center my-5 pb-4">
                            <a href="javascript:void(0)" class="btn btn-outline-view-more _view-more-product-query-db">Xem thêm<i class="fas fa-chevron-down ml-2 " aria-hidden="true"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
            @if($search_product!=null)
            {!! $search_product->links() !!}
            @endif
        </div>
    </div>
</section>
<div id="fb-root"></div>
<!--Modal chọn khu vực-->
<div class="modal jan-modal fade" id="modal-khu-vuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h6 class="modal-title font-weight-bold">Khu vực</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <select id="location-selectbox" class="form-control department-location">
                    <option value="22">Hà Nội</option>
                    <option value="550">Bắc Giang</option>
                    <option value="654">Bắc Ninh</option>
                    <option value="18">Cao Bằng</option>
                    <option value="19">Đà Nẵng</option>
                    <option value="20">Đắk Lắk</option>
                    <option value="21">Điện Biên</option>
                    <option value="549">Gia Lai</option>
                    <option value="23">Hà Tĩnh</option>
                    <option value="24">Hải Dương</option>
                    <option value="548">Hải Phòng</option>
                    <option value="25">Hồ Chí Minh</option>
                    <option value="26">Hòa Bình</option>
                    <option value="27">Hưng Yên</option>
                    <option value="1180">Nghệ An</option>
                    <option value="703">Nha Trang</option>
                    <option value="551">Phú Thọ</option>
                    <option value="653">Quảng Bình</option>
                    <option value="28">Quảng Ninh</option>
                    <option value="29">Sơn La</option>
                    <option value="1242">Thái Bình</option>
                    <option value="30">Thái Nguyên</option>
                    <option value="700">Thanh hoá</option>
                    <option value="1202">Tuyên Quang</option>
                    <option value="1243">Vĩnh Phúc</option>
                </select>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn " data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-save save-location" data-dismiss="modal" data-toggle="modal"
                data-target="#modal-xn">
                Xác nhận
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal jan-modal fade" id="modal-xn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="mb-3">
                    <img src="" class="img-fluid" />
                </div>
                <h5 class="mb-3 font-weight-bold">Xách nhận thành công!</h5>
                <div>
                    <img src="{!!asset('images/checke209.svg?v=1.0.0')!!}" class="img-fluid" />
                </div>
            </div>
            <div class="modal-footer justify-content-center border-0">
                <button type="button" class="btn btn-save px-lg-5" data-dismiss="modal">Hoàn tất</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal liên hệ -->
<form class="modal jan-modal fade" id="modal-lien-he" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h6 class="modal-title font-weight-bold">Liên hệ bảo hành</h6>
            </div>
            <div class="modal-body">
                <div class="">
                    <h6 class="font-weight-bold">Khu vực</h6>
                    <div class="mb-3">
                        <select id="location-selectbox" class="form-control department-location">
                            <option value="22">Hà Nội</option>
                            <option value="550">Bắc Giang</option>
                            <option value="654">Bắc Ninh</option>
                            <option value="18">Cao Bằng</option>
                            <option value="19">Đà Nẵng</option>
                            <option value="20">Đắk Lắk</option>
                            <option value="21">Điện Biên</option>
                            <option value="549">Gia Lai</option>
                            <option value="23">Hà Tĩnh</option>
                            <option value="24">Hải Dương</option>
                            <option value="548">Hải Phòng</option>
                            <option value="25">Hồ Chí Minh</option>
                            <option value="26">Hòa Bình</option>
                            <option value="27">Hưng Yên</option>
                            <option value="1180">Nghệ An</option>
                            <option value="703">Nha Trang</option>
                            <option value="551">Phú Thọ</option>
                            <option value="653">Quảng Bình</option>
                            <option value="28">Quảng Ninh</option>
                            <option value="29">Sơn La</option>
                            <option value="1242">Thái Bình</option>
                            <option value="30">Thái Nguyên</option>
                            <option value="700">Thanh hoá</option>
                            <option value="1202">Tuyên Quang</option>
                            <option value="1243">Vĩnh Phúc</option>
                        </select>
                    </div>
                </div>
                <div class="form-control form-group h-100">
                    <div class="dropdown h-100" style="word-wrap:break-word">
                        <!--Trigger-->
                        <button class="btn btn-primary dropdown-toggle cust-btn-sec h-100" style="font-size:16px;" type="button" id="dropdownMenu1-1"
                        data-toggle="dropdown">
                        Chọn Showroom
                        </button>
                        <!--Menu-->
                        <div class="dropdown-menu dropdown-primary cust-popbh" id="your-custom-id">
                            <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                                Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                            </label>
                            <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                                Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                            <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                                Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                            <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                                Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                            <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                                Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                            <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                                Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" id="txt-name-bh" class="form-control" placeholder="Họ và tên (bắt buộc)" />
                </div>
                <div class="form-group">
                    <input type="text" id="txt-phone-bh" class="form-control" placeholder="Số điện thoại" />
                </div>
                <div class="form-group">
                    <input type="text" id="txt-yc-bh" class="form-control" placeholder="Yêu cầu" />
                </div>
                <div class="form-group">
                    <textarea type="text" rows="5" class="form-control" id="txt-nd-bh" placeholder="Nội dung chi tiết"></textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn " data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-save">
                Xác nhận
                </button>
            </div>
        </div>
    </div>
</form>
<!-- Modal showrom gần nhất -->
<form class="modal jan-modal fade" id="modal-showromm-ganhat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  cust-modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bdb-modal">
                <h6 class="modal-title font-weight-bold">Kiểm tra siêu thị có hàng trưng bày</h6>
                <div class="">
                    <select id="location-selectbox" class="form-control department-location">
                        <option value="22">Hà Nội</option>
                        <option value="550">Bắc Giang</option>
                        <option value="654">Bắc Ninh</option>
                        <option value="18">Cao Bằng</option>
                        <option value="19">Đà Nẵng</option>
                        <option value="20">Đắk Lắk</option>
                        <option value="21">Điện Biên</option>
                        <option value="549">Gia Lai</option>
                        <option value="23">Hà Tĩnh</option>
                        <option value="24">Hải Dương</option>
                        <option value="548">Hải Phòng</option>
                        <option value="25">Hồ Chí Minh</option>
                        <option value="26">Hòa Bình</option>
                        <option value="27">Hưng Yên</option>
                        <option value="1180">Nghệ An</option>
                        <option value="703">Nha Trang</option>
                        <option value="551">Phú Thọ</option>
                        <option value="653">Quảng Bình</option>
                        <option value="28">Quảng Ninh</option>
                        <option value="29">Sơn La</option>
                        <option value="1242">Thái Bình</option>
                        <option value="30">Thái Nguyên</option>
                        <option value="700">Thanh hoá</option>
                        <option value="1202">Tuyên Quang</option>
                        <option value="1243">Vĩnh Phúc</option>
                    </select>
                </div>
            </div>
            <div class="modal-body" style="background-color: #F6F6F7;">
                <div class="row">
                    <div class="col-md-4">
                        <h6 class="modal-title font-weight-bold">Đăng ký xem hàng trưng bày tại</h6>
                        <p class="_picking_address"></p>
                        <div class="d-flex">
                            <label class="label-checkbox mb-2 pr-4">
                                Anh
                                <input type="radio" name="_cus_gender" checked required />
                                <span class="checkmark"></span>
                            </label>
                            <label class="label-checkbox  mb-2 ">
                                Chị
                                <input type="radio" name="_cus_gender" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="text" id="txt-name-bh-1" class="form-control" placeholder="Họ và tên" required />
                        </div>
                        <div class="form-group">
                            <input type="text" id="txt-phone-bh-1" class="form-control" placeholder="Số điện thoại" required />
                        </div>
                        <h6 class="modal-title font-weight-bold">Thời gian ghé</h6>
                        <div class="form-group">
                        </div>
                        <div class="customer form-control">
                            <div class="cus-name">
                                <label for="name-input" class="cus-ic-box">
                                    <i class="fal fa-calendar-alt "></i>
                                </label>
                                <input type="text" name="txtName" id="txt-time-input" class="w-100 ip-css" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 cust-bg-mdal">
                        <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                            Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                            <input type="checkbox" checked />
                            <span class="checkmark"></span>
                        </label>
                        <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                            Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                            <input type="checkbox" />
                            <span class="checkmark"></span>
                        </label>
                        <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                            Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                            <input type="checkbox" />
                            <span class="checkmark"></span>
                        </label>
                        <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                            Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                            <input type="checkbox" />
                            <span class="checkmark"></span>
                        </label>
                        <div>
                        </div>
                    </div>
                    <div class="w-100 mt-3 modal-footer justify-content-between">
                        <button type="button" class="btn " data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-save">
                        Xác nhận
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="btn-fixed">
    <div class="text-center mb-3">
        <a rel="nofollow" href="javascript:;" onclick=" topFunction() " class="">
            <img src="{!!asset('images/scroll3860.svg?v=1')!!}" class="img-fluid " />
        </a>
    </div>
</div>
<div id="cover-spin"></div>
<div id="full-load-img" class="modal modal-img">
    <button class="close-load-img"><i class="far fa-window-close"></i></button>
    <img class="modal-content modal-content-full-img?v=1" id="img01">
    <div id="caption"></div>
</div>
<div style="display:none" itemscope itemtype="https://schema.org/WebSite">
    <meta itemprop="url" content="janhome.vn" />
    <form itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction">
        <meta itemprop="target" content="janhome.vn/Product/Get?keyword={search_term_string}" />
        <input itemprop="query-input" type="text" name="search_term_string" required />
        <input type="submit" />
    </form>
</div>
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Organization",
"url": "janhome.vn",
"logo": "/2020/04/28/logo.png"
}
</script>
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Store",
"image": [
"https://cms.janhome.vn//uploads/2020/06/05/san-go-cong-nghiep.jpg"
],
"@id": "janhome.vn",
"name": "Janhome",
"address": {
"@type": "PostalAddress",
"streetAddress": "Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội",
"addressLocality": "Hà Nội",
"addressRegion": "HN",
"postalCode": "10000",
"addressCountry": "VN"
},
"review": {
"@type": "Review",
"reviewRating": {
"@type": "Rating",
"ratingValue": "5",
"bestRating": "5"
},
"author": "admin"
},
"url": "janhome.vn",
"telephone": "1800.0022",
"servesCuisine": "VietNam",
"priceRange": "$$$",
"acceptsReservations": "True"
}
</script>
<script>    document.addEventListener("DOMContentLoaded", function(event) {     gtag('config', 'AW-830211279');       jQuery('[href^="tel:"]').click(function() {          gtag('event', 'conversion', {'send_to': 'AW-830211279/tVQrCMnmsYYBEM-J8IsD'});     });   }); </script>
<script type="text/javascript">
//document.addEventListener("DOMContentLoaded", yall);
$('.lazy').Lazy({
scrollDirection: 'vertical',
effect: 'fadeIn',
visibleOnly: true,
onError: function (element) {
console.log('error loading ' + element.data('src'));
}
});
</script>
<script>
$(document).ready(function () {
$('.save-location').off('click').on('click',
function () {
var currentUrl = window.location.href;
var location_id = $('#location-selectbox').val();
var location_name = $('#location-selectbox option:selected').html();
localStorage.setItem("_LocationId", location_id);
localStorage.setItem("_LocationName", location_name);
var params = {
location_id: localStorage.getItem("_LocationId"),
location_name: localStorage.getItem("_LocationName"),
currentUrl: currentUrl
}
$.post('/Cookie/ChangeCurrentLocation',
params,
function () {
console.log(100);
location.reload(true);
})
});
sessionStorage.setItem("current-js-tree", localStorage.getItem("jstree"));
$('.tree-menu-mobile').jstree({
"core": {
"animation": 100,
"check_callback": true,
"multiple": false, // no multiselection
"themes": {
"dots": false, // no connecting dots between dots
"icons": false
},
},
"plugins": ["state", "wholerow", "types"],
'types': {
'default': {
'icon': 'fa fa-angle-right fa-fw'
},
'f-open': {
'icon': 'fa fa-folder-open fa-fw'
},
'f-closed': {
'icon': 'fa fa-folder fa-fw'
}
}
});
if (window.location.pathname == "" || window.location.pathname === "index.html") {
localStorage.setItem("jstree", "");
}
//var jstreelocal = JSON.parse(localStorage.getItem("jstree"));
//if (jstreelocal != "" || jstreelocal !== 'undefinde') {
//}
//var current_selected_node =
$('.tree-menu-mobile').on("select_node.jstree", function (e, data) {
var r = data.node;
//console.log(r);
var nodesToKeepOpen = [];
// get all parent nodes to keep open
$('#' + data.node.id).parents('.jstree-node').each(function () {
nodesToKeepOpen.push(this.id);
});
// add current node to keep open
nodesToKeepOpen.push(data.node.id);
// close all other nodes
$('.jstree-node').each(function () {
if (nodesToKeepOpen.indexOf(this.id) === -1) {
$(".tree-menu-mobile").jstree().close_node(this.id);
}
})
if (r.state.opened == false && r.children.length > 0) {
$('.tree-menu-mobile').jstree("toggle_node", data.node);
return false;
}
if (r.state.opened == true || r.children.length == 0) {
var id = r.id;
var url = $('#' + id).find('.span-tree-node').data('url');
var old_node = $(id).find('.jstree-clicked');
if (sessionStorage.getItem('current-js-tree') == "" || sessionStorage.getItem('current-js-tree') === "undefined") {
window.location.href = url;
} else {
var ss = JSON.parse(sessionStorage.getItem('current-js-tree'));
console.log(ss);
if (ss == null) {
window.location.href = url;
}
var seleced_current = ss.state.core.selected;
if (seleced_current.length > 0) {
if (seleced_current[0] != id) {
//console.log("Khac roi nay");
//sessionStorage.setItem("current-js-tree", localStorage.getItem("jstree"));
window.location.href = url;
}
if (seleced_current[0] == id) {
//console.log("Trung roi nay")
}
}
}
//if (ss == "1") {
//}
return false;
}
});
$('#txt-time-input').daterangepicker({
singleDatePicker: true,
showDropdowns: true,
//minYear: 1901,
//maxYear: parseInt(moment().format('YYYY'), 10),
locale: {
"format": "DD/MM/YYYY"
}
//}, function (start, end, label) {
//    var years = moment().diff(start, 'years');
//    alert("You are " + years + " years old!");
});
var url = window.location.pathname;
$('.menu-cate-mobile div a[href="' + url + '"]').addClass('active');
$('.find-product').keydown(function (e) {
if ($(this).val().length < 2) {
$(".suggest-text.suggest-text-2").hide();
$(".suggest-text.suggest-text-1").show();
} else {
$(".suggest-text.suggest-text-2").show();
$(".suggest-text.suggest-text-1").hide();
$(this).autocomplete({
delay: 300,
source: function (request, response) {
$.ajax({
url: "/Product/Get",
dataType: "json",
data: {
keyword: request.term
},
success: function (data) {
//debugger
response(data);
}
});
},
minLength: 1,
}).autocomplete("instance")._renderItem = function (div, item) {
//--debugger
$(".suggest-text.suggest-text-2").empty();
var lstItem = "";
lstItem += "<div class='h6 px-3'>Sản phẩm gợi ý</div>"
$.each(item, function (index, im) {
var name = im.name.charAt(0).toUpperCase() + im.name.slice(1);
lstItem += '<div class="item-cart"><div class="image-product"><img src="' + im.avatar + '" class="" /></div>';
lstItem += '<div class="text px-2 "> <h6 class="name-product mb-1"><a href="' + im.url + '">' + name + '</a></h6>';
if (im.discountPrice.length > 0) {
lstItem += '<div class="price d-inline-block">' + im.discountPrice + 'đ ' + im.unit + '</div>';
}
if (im.discountPrice.price > 0) {
lstItem += ' <div class=" price-old d-inline-block">' + im.price + 'đ ' + im.unit + '</div>';
}
lstItem += "</div></div>";
});
$(div).removeClass("ui-menu");
return $(lstItem).appendTo(".suggest-text.suggest-text-2");
};
if (e.which == 13) {
//console.log(data);
var kw = $(this).val();
var index = 1;
var size = 24;
var p = {
keyword: kw,
index: index,
size: size
}
console.log(p);
sessionStorage.setItem("esSearch", JSON.stringify(p));
window.location.href = "tim-kiem.html";
//$.get("/Product/GetElasticAll?keyword="+kw+"&index="+index+"&size="+size+"", function (response) {
//    console.log(response);
//})
//$("#go").click();
}
$('.es-search-button').off('click').on('click', function () {
var kw = $(this).closest('.input-group').find('.find-product').val();
var index = 1;
var size = 24;
var p = {
keyword: kw,
index: index,
size: size
}
console.log(p);
sessionStorage.setItem("esSearch", JSON.stringify(p));
window.location.href = "tim-kiem.html";
})
}
})
$('.es-search-button').off('click').on('click', function () {
var kw = $(this).closest('.input-group').find('.find-product').val();
var index = 1;
var size = 24;
var p = {
keyword: kw,
index: index,
size: size
}
console.log(p);
sessionStorage.setItem("esSearch", JSON.stringify(p));
window.location.href = "tim-kiem.html";
})
$('.find-product').on("focusout", function () {
setTimeout(function () {
$(".suggest-text.suggest-text-2").hide();
$(".suggest-text.suggest-text-1").hide();
}, 1000);
});
$('.find-product').on("focus", function () {
if ($(this).val().length < 3) {
$(".suggest-text.suggest-text-1").show();
}
});
$('.cust-ag').off('click').on('click', function () {
var url_image = $(this).data('original');
if (typeof url_image === 'undefined')
url_image = $(this).data('src');
//var url_image = $(this).parent().data('url');
$('#img01').attr('src', url_image);
$('.modal-img').modal('show');
$('.modal-backdrop').replaceWith("");
})
$('.close-load-img').off('click').on('click', function () {
$('.modal-img').modal('hide');
})
$('#modal-id').on('shown.bs.modal', function () {
$(".modal-backdrop.in").hide();
})
})
</script>
<script>
window.fbAsyncInit = function () {
setTimeout(function () {
FB.init({
xfbml: true,
version: 'v7.0'
});
}, 12000);
};
setTimeout(function () {
(function (d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
}, 1200);
</script>
<!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-98267825-1"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());    gtag('config', 'UA-98267825-1'); </script>
<script type="text/javascript" src="{!!asset('js/esSearchController.js?v=1.0.0')!!}"></script>
<!-- lọc js -->
<!-- <script type="text/javascript">
$(function (){
$('.orderby').change(function () {
$("#form_order").submit();
})
})
</script> -->
<!-- Filter JS -->
<script>
$(document).ready(function(){
filter_data();
function filter_data()
{
$('.filter_data').html('<div id="loading" style="" ></div>');
var action = 'fetch_data';
var minimum_price = $('#hidden_minimum_price').val();
var maximum_price = $('#hidden_maximum_price').val();
var brand = get_filter('brand');
var ram = get_filter('ram');
var storage = get_filter('storage');
$.ajax({
url:"fetch_data.php",
method:"POST",
data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, storage:storage},
success:function(data){
$('.filter_data').html(data);
}
});
}
function get_filter(class_name)
{
var filter = [];
$('.'+class_name+':checked').each(function(){
filter.push($(this).val());
});
return filter;
}
$('.common_selector').click(function(){
filter_data();
});
$('#price_range').slider({
range:true,
min:1000,
max:65000,
values:[1000, 65000],
step:500,
stop:function(event, ui)
{
$('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
$('#hidden_minimum_price').val(ui.values[0]);
$('#hidden_maximum_price').val(ui.values[1]);
filter_data();
}
});
});
</script>
</body>
@stop