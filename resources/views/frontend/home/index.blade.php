<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" type="image / png" href="{!!$share_config->favicon!!}"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&amp;display=swap&amp;subset=vietnamese"
            rel="preload">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&amp;display=swap&amp;subset=vietnamese"
                rel="stylesheet">
                <link href="{!!asset('css/allmin6531.css?v=G6Iw6849yRHkXXaCwks-vCrCPIohiF6r-SDUwKtNLN8')!!}" rel="stylesheet" />
                <link href="css/style.css" rel="stylesheet" />
                <title>Nội thất Hưng Gia</title>
            </head>
            <body>
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
                                            Phone: {!!$share_config->phone!!}&nbsp|
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
                                    <img src="{!!$share_config->image!!}" style="width:80px" class="img-fluid" />
                                </a>
                                <div class="d-md-none">
                                    <div class="input-group form-search flex-nowrap mr-2 width-mb" style="width: 210px;">
                                        <input type="text" class="form-control find-product " placeholder="Tìm sản phẩm....">
                                        <div class="input-group-append">
                                            <button class="btn btn-search es-search-button">
                                            <img src="images/searche209.svg?v=1.0.0" class="img-fluid" />
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
                                        </div>
                                        <div class="suggest-text suggest-text-2">
                                            <div class="h6 px-3">
                                                Sản phẩm gợi ý
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--22-4 Thêm btn giỏ hàng-->
                                <div class="nav-item align-self-md-center mb-0 cart d-md-none">
                                    <button class="btn p-0 dropdown-cart-trigger-mobile" @*onclick="$('.cart-mobile').toggle(100, 'swing');" *@>
                                    <div class="icon ">
                                        <img src="images/cart-icone209.svg?v=1.0.0" class="img-fluid mr-2 icon-nav" />
                                        <div id="cart-count-mobile" class="amount">0
                                        </div>
                                    </div>
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
                                                        <button class="btn btn-search" type="submit">
                                                        <img src="images/searche209.svg?v=1.0.0" class="img-fluid" />
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
                                                    </div>
                                                    <div class="suggest-text suggest-text-2">
                                                        <div class="h6 px-3">
                                                            Sản phẩm gợi ý
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </li>
                                        <li class="nav-item dropdown mr-md-3 align-self-md-center   mb-md-0 cart">
                                            <a rel="nofollow" class="d-flex dropdown-cart-trigger" href="javascript:void(0)">
                                                <div class="icon mr-2">
                                                    <img src="images/cart-icone209.svg?v=1.0.0" class="img-fluid mr-2 icon-nav" />
                                                    <div class="amount" id="cart-count">0
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-cart">
                                                <div class="_binding_dropdown_cart">
                                                </div>
                                                <div class="d-flex px-3">
                                                    <div class="text-uppercase">
                                                        Tổng tiền:
                                                    </div>
                                                    <div class="h6 font-weight-bold ml-auto color-EE7D22 small-total-cart">
                                                        21.000đ
                                                    </div>
                                                </div>
                                                <div class="bottom-dropdown d-flex  ">
                                                    <div class="small mr-3">
                                                        Bạn còn <span class="dropdown-quantity-cart"></span> sản phẩm trong giỏ hàng
                                                    </div>
                                                    <div class="h6 ml-auto">
                                                        <a href="gio-hang.html" id="link-target-cart" class="btn-link link-view-more text-uppercase">XEM GIỎ HÀNG</a><br />
                                                        <a rel="nofollow" href="javascript:void(0)" id="link-clear-cart" class="btn-link link-view-more text-uppercase"><small>Xóa giỏ hàng</small></a><br />
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item mr-md-3  align-self-md-center d-flex d-sm-none d-lg-flex"
                                            style="white-space: nowrap;">
                                            <div>
                                                <a rel="nofollow" href="tel: {!!$share_config->hotline!!}">
                                                    <div><span class="font-weight-bold h6 ">{!!$share_config->hotline!!}</span></div>
                                                    <div class="small">(Miễn phí) </div>
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
                                        <li class=" nav-item align-self-md-center ">
                                            <div class=" nav-link dropdown">
                                                <a rel="nofollow" class="btn dropdown-toggle p-0" href="#" role="button"
                                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="images/vietname209.svg?v=1.0.0" class="img-fluid " />
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!--                     <div class="local-mobile container d-flex d-md-none small py-2" style="background: #C8EBFD;">
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
                                                <!-- <div>
                                                    <a rel="nofollow" href="javascrip:;" class="btn-sm btn-link last-seen-link">
                                                        <img src="images/spvx-ice209.svg?v=1.0.0" class="img-fluid icon mr-2" />Sản phẩm vừa
                                                        xem
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)" class="btn-sm btn-link">
                                                        <img src="images/location-icn.svg" class="img-fluid icon mr-2" />Hệ thống
                                                        <span class="px-1 font-weight-bold" style="color:#007DFF;">38</span>
                                                        Showroom
                                                    </a>
                                                </div>
                                                <div>
                                                    <a rel="nofollow" href="javascript:void(0)" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-sm btn-link">
                                                        <img src="images/spvx-ic3.svg" class="img-fluid icon mr-2" />Tải
                                                        Catalogue
                                                    </a>
                                                    <div class="dropdown-menu cust-downl-cate" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="javascript:void(0)">Tải Catalogue</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Thư viện 3D kiến trúc sư</a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="#" rel="nofollow" class="btn-sm btn-link _btn-lien-he-bh" data-toggle="modal"
                                                        data-target="#modal-lien-he">
                                                        <img src="images/spvx-ic4e209.svg?v=1.0.0" class="img-fluid icon mr-2" />Liên hệ bảo
                                                        hành
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)" class="btn-sm btn-link">
                                                        <img src="images/spvx-ic5e209.svg?v=1.0.0" class="img-fluid icon mr-2" />Dự toán công
                                                        trình
                                                    </a>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-12">
                                            <ul class="list-group list-menu-cate d-none d-md-block " style="height: auto;">
                                                <li class="list-group-item active ">
                                                    <a rel="nofollow" href="javascript:;" class="link">
                                                        <img src="{!!asset('images/listView.svg')!!}" class="img-fluid mr-2" />Danh mục
                                                    </a>
                                                </li>
                                                @foreach ($category as $key=>$cat)
                                                <li class="list-group-item">
                                                    <a href="{!! route('product.show',['alias' => $cat->alias])!!}" class="link">
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
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    @endif
                                                    @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                            
                                        </li>
                                        @endforeach
                                        <!--Nút xem thêm-->
                                        <li class="list-group-item" style="cursor: pointer;">
                                            <i class="fas fa-plus mr-3"></i>Xem thêm
                                        </li>
                                    </ul>
                                    <ul class="row menu-cate-mobile  d-md-none no-gutters">
                                        <div class="col-3 px-1">
                                            <a href="javascript:void(0)" class="btn btn-cate">
                                                <img src="../noithathunggia/uploads/2020/09/07/gocongnghiepe209.png?v=1.0.0"
                                                class="img-fluid mb-2" />
                                                <div>
                                                    Sàn gỗ công nghiệp
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-3 px-1">
                                            <a href="javascript:void(0)" class="btn btn-cate">
                                                <img src="../noithathunggia/uploads/2020/05/21/gotunhiene209.png?v=1.0.0"
                                                class="img-fluid mb-2" />
                                                <div>
                                                    Sàn gỗ tự nhiên
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-3 px-1">
                                            <a href="javascript:void(0)" class="btn btn-cate">
                                                <img src="../noithathunggia/uploads/2020/05/21/sannhuae209.png?v=1.0.0"
                                                class="img-fluid mb-2" />
                                                <div>
                                                    Sàn nhựa vinyl
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-3 px-1">
                                            <a href="javascript:void(0)" class="btn btn-cate">
                                                <img src="../noithathunggia/uploads/2020/05/21/Go%20Ngoai%20troie209.png?v=1.0.0"
                                                class="img-fluid mb-2" />
                                                <div>
                                                    Sàn gỗ ngoài trời
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-3 px-1">
                                            <a href="javascript:void(0)" class="btn btn-cate">
                                                <img src="../noithathunggia/uploads/2020/05/21/cleane209.png?v=1.0.0"
                                                class="img-fluid mb-2" />
                                                <div>
                                                    Phụ kiện
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-3 px-1">
                                            <a href="javascript:void(0)" class="btn btn-cate">
                                                <img src="../noithathunggia/uploads/2020/05/21/gocongnghiepe209.png?v=1.0.0"
                                                class="img-fluid mb-2" />
                                                <div>
                                                    Sàn gỗ thanh lý
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-3 px-1">
                                            <a href="javascript:void(0)" class="btn btn-cate">
                                                <img src="../noithathunggia/uploads/2020/05/21/bede209.png?v=1.0.0"
                                                class="img-fluid mb-2" />
                                                <div>
                                                    Trang trí nội thất
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-3 px-1">
                                            <a href="javascript:void(0)" class="btn btn-cate">
                                                <img src="../noithathunggia/uploads/2020/05/21/homee209.png?v=1.0.0"
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
            </section>
        </section>
        <!--22-4 Giỏ hàng mobile-->
        <div class="cart-mobile dropdown-cart-mobile">
            <!--Sum-->
            <div class="_binding_dropdown_cart">
            </div>
            <div class="d-flex px-3">
                <div class="text-uppercase">
                    Tổng tiền:
                </div>
                <div class="h6 font-weight-bold ml-auto color-EE7D22 small-total-cart">
                    21.000đ
                </div>
            </div>
            <div class="bottom-dropdown d-flex  ">
                <div class="small mr-3">
                    Bạn còn <span class="dropdown-quantity-cart"></span> sản phẩm trong giỏ hàng
                </div>
                <div class="h6 ml-auto">
                    <a rel="nofollow" href="javascript:void(0)" id="link-target-cart-mobile" class="btn-link link-view-more text-uppercase">XEM GIỎ HÀNG</a><br />
                    <a rel="nofollow" href="javascript:void(0)" id="link-clear-cart" class="btn-link link-view-more text-uppercase">Clear Cart Teserd</a><br />
                </div>
            </div>
        </div>
        <!--22-4 danh mục mobile popup-->
        <section class="cate-mobile ">
            <div class="bg-fff p-3 m-auto">
                <div class="tree-menu-mobile">
                    <ul>
                        <li>
                            <span class="span-tree-node tree-lv-0" data-url="/san-go-cong-nghiep">Sàn gỗ công nghiệp</span>
                            <ul>
                                <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-malaysia" data-sp=1>Sàn gỗ Malaysia</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-janmi" data-sp=1>Sàn gỗ Janmi</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-janmi-8mm-ac4" data-sp=1>Sàn gỗ Janmi 8mm Ac4</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-janmi-12mm-ban-to" data-sp=1>Sàn gỗ Janmi 12mm bản to</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-janmi-12mm-ban-nho" data-sp=1>Sàn gỗ janmi 12mm bản nhỏ</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-woodman" data-sp=1>Sàn gỗ Woodman</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-woodman-8mm" data-sp=1>Sàn gỗ woodman 8mm</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-woodman-12mm-ban-to" data-sp=1>Sàn gỗ Woodman 12mm bản to</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-woodman-12mm-ban-nho" data-sp=1>Sàn gỗ Woodman 12mm bản nhỏ</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-masfloor" data-sp=1>Sàn gỗ Masfloor</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-trung-quoc" data-sp=1>Sàn gỗ Trung Quốc</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-viet-nam" data-sp=1>Sàn gỗ Việt Nam</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-florton" data-sp=1>Sàn gỗ Florton</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-florton-8mm" data-sp=1>Sàn gỗ Florton 8MM</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-florton-12mm" data-sp=1>Sàn gỗ Florton 12mm</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-newsky" data-sp=1>Sàn gỗ Newsky</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-newsky-d-class" data-sp=1>Sàn gỗ NewSky D-Class</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-newsky-ea-class" data-sp=1>Sàn gỗ Newsky EA-Class</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-newsky-u-class" data-sp=1>Sàn gỗ Newsky U-Class</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-newsky-k-class" data-sp=1>Sàn gỗ Newsky K-Class</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-newsky-s-class" data-sp=1>Sàn gỗ Newsky S-Class</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-newsky-wpu-class" data-sp=1>Sàn gỗ Newsky WPu-Class</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-janwood" data-sp=1>Sàn gỗ Janwood</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-xuong-ca" data-sp=1>Sàn Gỗ xương Cá</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-sp=1>Sàn gỗ xương cá Janhome</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-xuong-ca-jawa" data-sp=1>Sàn gỗ xương cá Jawa</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-cot-xanh" data-sp=1>Sàn gỗ cốt xanh</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-cot-xanh-aqua-janhome-chiu-nuoc" data-sp=1>Sàn gỗ cốt xanh Janhome chịu...</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-viet-nam-sieu-chiu-nuoc" data-sp=1>Sàn gỗ Việt Nam Siêu chịu...</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-janhome-sieu-chiu-nuoc" data-sp=1>Sàn gỗ JanHome Floor Aqua siêu...</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-xuong-ca-janhome-san-go-viet-nam-sieu-chiu-nuoc" data-sp=1>Sàn gỗ xương cá JanHome</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-kendax" data-sp=1>Sàn gỗ Kendax</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-kendax-8mm" data-sp=1>Sàn gỗ Kendax 8mm</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-kendax-12mm" data-sp=1>Sàn gỗ Kendax 12mm</span><ul class="ul-tree-lv-4"></ul></li></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-gia-re" data-sp=1>Sàn gỗ công nghiệp giá rẻ</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-harotex" data-sp=1>Sàn gỗ Harotex</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-ecofloor" data-sp=1>Sàn gỗ EcoFloor</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-ecofloor-8mm" data-sp=1>Sàn gỗ Ecofloor 8mm</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-ecofloor-12mm" data-sp=1>Sàn gỗ Ecofloor 12mm</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-ecofloor-van-tu-nhien" data-sp=1>Sàn gỗ ECOFLOOR vân tự nhiên</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-wilson" data-sp=1>Sàn gỗ Wilson</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-wilson-floor-8mm-ban-nho" data-sp=1>Sàn gỗ Wilson Floor 8mm bản...</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-wilson-8mm-ban-to" data-sp=1>Sàn gỗ Wilson 8mm bản to</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-wilson-mat-san" data-sp=1>Sàn gỗ Wilson mặt sần</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-wilson-mat-bong" data-sp=1>Sàn gỗ Wilson mặt bóng</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-kosmos" data-sp=1>Sàn gỗ Kosmos</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-glomax" data-sp=1>Sàn gỗ Glomax</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-galamax" data-sp=1>Sàn gỗ Galamax</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-kronomax" data-sp=1>Sàn gỗ Kronomax</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-royal-floor" data-sp=1>Sàn gỗ Royal Floor</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-eurohome" data-sp=1>Sàn gỗ Eurohome</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-han-quoc" data-sp=1>Sàn gỗ Hàn Quốc</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-han-quoc-san-go-dongwha" data-sp=1>Sàn Gỗ DongWha</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-floorart" data-sp=1>Sàn gỗ FloorArt</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-floorart-8mm" data-sp=1>Sàn gỗ FloorArt 8mm</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-floorart-12mm" data-sp=1>Sàn gỗ FloorArt 12mm</span><ul class="ul-tree-lv-4"></ul></li></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-thai-lan" data-sp=1>Sàn gỗ Thái Lan</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-thaigreen" data-sp=1>Sàn gỗ ThaiGreen</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-thaigreen-8mm" data-sp=1>Sàn gỗ ThaiGreen 8mm</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-thaigreen-12mm" data-sp=1>Sàn gỗ ThaiGreen 12mm</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-thaixin" data-sp=1>Sàn gỗ Thaixin</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-thaixin-8mm" data-sp=1>Sàn gỗ Thaixin 8mm</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-thaixin-12mm-ban-to" data-sp=1>Sàn gỗ Thaixin 12mm bản to</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-thairoyal" data-sp=1>Sàn gỗ ThaiRoyal</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-an-do" data-sp=1>Sàn gỗ Ấn Độ</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-chau-au" data-sp=1>Sàn gỗ Châu Âu</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-duc" data-sp=1>Sàn gỗ Đức</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-kronotex" data-sp=1>Sàn Gỗ Kronotex</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-classen" data-sp=1>Sàn gỗ Classen</span><ul class="ul-tree-lv-4"><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-classen-7mm" data-sp=1>Sàn gỗ Classen 7mm</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-classen-8mm-ban-nho" data-sp=1>Sàn gỗ Classen 8mm bản nhỏ</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-classen-8mm-ban-to" data-sp=1>Sàn gỗ Classen 8mm bản to</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-classen-8mm-ban-to-khe-v" data-sp=1>Sàn gỗ Classen 8mm bản to...</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-classen-12mm-ban-nho" data-sp=1>Sàn gỗ Classen 12mm bản nhỏ</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-classen-san-go-classen-12mm-ban-to" data-sp=1>Sàn gỗ Classen 12mm bản to</span><ul class="ul-tree-lv-5"></ul></li></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-wineo" data-sp=1>Sàn gỗ wineo</span><ul class="ul-tree-lv-4"><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-wineo-500-ban-to-8mm" data-sp=1>Sàn gỗ WINEO 500 bản to...</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-wineo-500-ban-to-v2-8mm" data-sp=1>Sàn gỗ WINEO 500 bản to...</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-wineo-500-ban-vua-v4-8mm" data-sp=1>Sàn gỗ WINEO 500 bản vừa...</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-wineo-500-ban-dai-v4-10mm" data-sp=1>Sàn gỗ WINEO 500 bản dài...</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-wineo-aqua-stop-rockngo" data-sp=1>Sàn gỗ Wineo Aqua-Stop ROCK'N'GO</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-wineo-aqua-stop-xlv4" data-sp=1>Sàn gỗ Wineo AquaStop</span><ul class="ul-tree-lv-5"></ul></li></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-hornitex" data-sp=1>Sàn gỗ Hornitex</span><ul class="ul-tree-lv-4"><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/hornitex-8mm" data-sp=1>Hornitex 8mm</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/hornitex-10mm" data-sp=1>Hornitex 10mm</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/hornitex-12mm" data-sp=1>Hornitex 12mm</span><ul class="ul-tree-lv-5"></ul></li></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-phap" data-sp=1>Sàn gỗ Pháp</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-alsafloor" data-sp=1>Sàn gỗ Alsafloor</span><ul class="ul-tree-lv-4"></ul></li></ul></li></ul></li>
                            </ul>
                        </li>
                        <li>
                            <span class="span-tree-node tree-lv-0" data-url="/san-nhua">Sàn nhựa vinyl</span>
                            <ul>
                                <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-galaxy" data-sp=1>Sàn nhựa Galaxy</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-galaxy-plus" data-sp=1>Sàn nhựa GALAXY Plus</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-railflex" data-sp=1>Sàn nhựa Railflex</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-dan-keo-railflex" data-sp=1>Sàn nhựa dán keo Railflex</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-hem-khoa-railflex-4-2mm" data-sp=1>Sàn nhựa hèm khóa Railflex 4.2mm</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-chong-tinh-dien" data-sp=1>Sàn nhựa chống tĩnh điện</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-hem-khoa-railflex-5mm" data-sp=1>Sàn nhựa hèm khóa RailFlex 5mm</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-vinyl-railflex-dang-cuon" data-sp=1>Sàn nhựa vinyl Railflex dạng cuộn</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-the-thao-railflex" data-sp=1>Sàn nhựa thể thao Railflex</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-ibt" data-sp=1>Sàn nhựa IBT</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-ecost" data-sp=1>Sàn nhựa ECO'ST</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-ecost-tu-dan" data-sp=1>Sàn nhựa ECO’ST tự dán</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-ecost-dan-keo" data-sp=1>Sàn nhựa ECO’ST dán keo</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-ecost-hem-khoa" data-sp=1>Sàn nhựa ECO’ST hèm khóa</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-thanh-ly" data-sp=1>Sàn nhựa thanh lý</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-dongwha-han-quoc-khuyen-mai" data-sp=1>Sàn nhựa dongwha hàn quốc khuyến...</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-van-go" data-sp=1>Sàn nhựa vân gỗ</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-van-da" data-sp=1>Sàn nhựa vân đá</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-van-tham" data-sp=1>Sàn nhựa vân thảm</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-tu-dan" data-sp=1>Sàn nhựa tự dán</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-van-da-san-nhua" data-sp=1>Sàn nhựa vân da</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-aimaru" data-sp=1>Sàn nhựa AIMARU</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-gia-re" data-sp=1>Sàn nhựa giá rẻ</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-ecofloor" data-sp=1>Sàn nhựa Ecofloor Vinyl</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-gia-re-mines" data-sp=1>Sàn nhựa giá rẻ Mines</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-hem-khoa" data-sp=1>Sàn nhựa hèm khóa</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-hem-khoa-mines" data-sp=1>Sàn nhựa hèm khóa mines</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-7mm-mega" data-sp=1>Sàn nhựa 7mm MEGA</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-bpc" data-sp=1>Sàn nhựa BPC</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-florton-spc" data-sp=1>Sàn nhựa hèm khóa Florton SPC</span><ul class="ul-tree-lv-3"></ul></li></ul></li>
                            </ul>
                        </li>
                        <li>
                            <span class="span-tree-node tree-lv-0" data-url="/san-go-tu-nhien">Sàn gỗ tự nhiên</span>
                            <ul>
                                <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-cam-xe" data-sp=1>Sàn gỗ Căm xe</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-chiu-liu" data-sp=1>Sàn gỗ Chiu Liu</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-go-do" data-sp=1>Sàn gỗ gõ đỏ</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-giang-huong" data-sp=1>Sàn gỗ Giáng Hương</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-soi" data-sp=1>Sàn gỗ Sồi</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-teak" data-sp=1>Sàn gỗ Teak</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-oc-cho" data-sp=1>Sàn gỗ Óc chó</span><ul class="ul-tree-lv-2"></ul></li>
                            </ul>
                        </li>
                        <li>
                            <span class="span-tree-node tree-lv-0" data-url="/phu-kien">Phụ kiện</span>
                            <ul>
                                <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/phao-go-tu-nhien" data-sp=1>Phào gỗ tự nhiên</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/xop-foam-san-go" data-sp=1>Xốp, Foam sàn gỗ</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/phu-kien-phao-nhua-chan-tuong" data-sp=1>Phào nhựa chân tường</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/phao-nep-thanh-ly" data-sp=1>Phào nẹp thanh lý</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/phu-kien-op-tuong-op-tran" data-sp=1>Phụ kiện ốp tường - ốp...</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/phu-kien-tam-op-nano-timberman" data-sp=1>Phụ kiện tấm Ốp Nano TimberMan</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/op-bang-phao-nhua-op-tran-trong-nha" data-sp=1>Phụ kiện ốp trần trong nhà</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/tam-hdf" data-sp=1>Tấm HDF</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/phao-nhua-janmi" data-sp=1>Phào nhựa JANMI</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/phao-nep-kim-loai" data-sp=1>Phào nẹp kim loại</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/nep-nhua" data-sp=1>Nẹp nhựa</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/keo-dan" data-sp=1>Keo dán</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/keo-dan-san-nhua" data-sp=1>Keo dán sàn nhựa giá rẻ</span><ul class="ul-tree-lv-3"></ul></li></ul></li>
                            </ul>
                        </li>
                        <li>
                            <span class="span-tree-node tree-lv-0" data-url="/san-go-ngoai-troi">Sàn gỗ ngoài trời</span>
                            <ul>
                                <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-ban-cong" data-sp=1>Sàn gỗ ban công</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-be-boi" data-sp=1>Sàn gỗ bể bơi</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-san-vuon" data-sp=1>Sàn gỗ sân vườn</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-timberman" data-sp=1>Sàn gỗ TimberMan</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-timberman-nhap-khau" data-sp=1>Sàn gỗ Timberman Nhập khẩu</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-timberman-trong-nuoc" data-sp=1>Sàn gỗ Timberman Trong nước</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-ngoai-troi-biowood" data-sp=1>Sàn gỗ ngoài trời Biowood</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-tu-nhien-ngoai-troi-timberman" data-sp=1>Sàn gỗ tự nhiên ngoài trời...</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-san-thuong" data-sp=1>Sàn gỗ sân thượng</span><ul class="ul-tree-lv-2"></ul></li>
                            </ul>
                        </li>
                        <li>
                            <span class="span-tree-node tree-lv-0" data-url="/san-go-thanh-ly">Sàn gỗ thanh lý</span>
                            <ul>
                                <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-victory" data-sp=1>Sàn gỗ Victory</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-prince" data-sp=1>Sàn gỗ Prince</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-thanh-ly-tong-hop" data-sp=1>Sàn Gỗ Thanh lý Tổng Hợp</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-viet-nam-thanh-ly-san-go-thanh-ly" data-sp=1>Sàn gỗ Việt Nam thanh lý</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-viet-nam-thanh-ly-8mm" data-sp=1>Sàn gỗ Việt Nam thanh lý...</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-viet-nam-thanh-ly-12mm" data-sp=1>Sàn gỗ Việt Nam thanh lý...</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-thanh-ly-8mm" data-sp=1>Sàn gỗ thanh lý 8mm</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-thanh-ly-san-go-thanh-ly" data-sp=1>Sàn nhựa thanh lý</span><ul class="ul-tree-lv-2"></ul></li>
                            </ul>
                        </li>
                        <li>
                            <span class="span-tree-node tree-lv-0" data-url="/trang-tri-noi-that">Trang trí nội thất</span>
                            <ul>
                                <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/giay-dan-tuong" data-sp=1>Giấy dán tường</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/giay-dan-tuong-thanh-ly" data-sp=1>Giấy dán tường thanh lý</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/giay-dan-tuong-trung-quoc" data-sp=1>Giấy dán tường Trung Quốc</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-luca" data-sp=1>Giấy dán tường Luca</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-dio" data-sp=1>Giấy dán tường DIO</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-champagne" data-sp=1>Giấy dán tường Champagne</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-piedra" data-sp=1>Giấy dán tường Piedra</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/giay-dan-tuong-han-quoc" data-sp=1>Giấy dán tường Hàn Quốc</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-andante" data-sp=1>Giấy dán tường Andante</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-mida" data-sp=1>Giấy dán tường Mida</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-edroom" data-sp=1>Giấy dán tường Eroom</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-darae" data-sp=1>Giấy dán tường Darae</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-zinnia" data-sp=1>Giấy dán tường Zinnia</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-hera" data-sp=1>Giấy dán tường Hera</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-besti" data-sp=1>Giấy dán tường Besti</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-gracia-ii" data-sp=1>Giấy dán tường Gracia II</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-montana" data-sp=1>Giấy dán tường Montana</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-feliz" data-sp=1>Giấy dán tường Feliz</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-q-pid" data-sp=1>Giấy dán tường Q.PID</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-regina" data-sp=1>Giấy dán tường Regina</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-living" data-sp=1>Giấy dán tường Living</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-symphony" data-sp=1>Giấy dán tường Symphony</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-natural" data-sp=1>Giấy dán tường Natural</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-phoenix" data-sp=1>Giấy dán tường Phoenix</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-classico" data-sp=1>Giấy dán tường Classico</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-place" data-sp=1>Giấy dán tường Place</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-rhapsody" data-sp=1>Giấy dán tường RHAPSODY</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/giay-dan-tuong-nhat-ban" data-sp=1>Giấy dán tường Nhật Bản</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-pinebull-s" data-sp=1>Giấy dán tường Pinebull S</span><ul class="ul-tree-lv-4"></ul></li></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/op-tran-trong-nha" data-sp=1>Ốp trần trong nhà</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-bang-tam-tran-tha-pvc" data-sp=1>Ốp trần bằng tấm trần thả...</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-bang-go-cn-op-tran-trong-nha" data-sp=1>Ốp trần bằng gỗ công nghiệp</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-bang-go-tu-nhien-op-tran-trong-nha" data-sp=1>Ốp trần bằng gỗ tự nhiên</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-tran-gia-re" data-sp=1>Ốp trần giá rẻ</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/tam-op-tran-pvc" data-sp=1>Tấm ốp trần PVC TimberMan</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/op-tran-bang-tam-pvc-timberman" data-sp=1>Ốp trần bằng tấm PVC Timberman</span><ul class="ul-tree-lv-4"></ul></li></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/rem-cua" data-sp=1>Rèm cửa</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/rem-go-wood-blinds-origine-bass" data-sp=1>Rèm gỗ Wood Blinds Origine Bass</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/rem-la-doc-vertical" data-sp=1>Rèm lá dọc Vertical</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/rem-cau-vong-combi" data-sp=1>Rèm cầu vồng - Combi</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/rem-cuon-1-lop-roll-screen" data-sp=1>Rèm cuốn 1 lớp Roll Screen</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/op-tuong-trong-nha" data-sp=1>Ốp tường trong nhà</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-bang-go-cn" data-sp=1>Ốp tường gỗ công nghiệp</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/op-bang-tam-florton" data-sp=1>Ốp tường bằng tấm Florton</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-bang-go-tu-nhien" data-sp=1>Ốp tường gỗ tự nhiên</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-tuong-bang-tam-3d" data-sp=1>Tấm ốp tường 3D</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-tuong-biowood" data-sp=1>Ốp tường Biowood</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/tam-op-tran-tuong" data-sp=1>Tấm ốp trần tường</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-tuong-van-da" data-sp=1>Ốp tường vân đá</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/tam-op-nano" data-sp=1>Tấm ốp Nano TimberMan</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/tam-op-tuong-pvc" data-sp=1>Tấm ốp tường PVC</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/op-bang-tam-pvc-3-song-6-song" data-sp=1>Tấm ốp trần tường PVC Timberman</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/op-tuong-pvc-gia-da" data-sp=1>Ốp tường PVC giả đá</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/tam-nhua-op-tuong" data-sp=1>Tấm nhựa ốp tường</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/tham-trai-san" data-sp=1>Thảm trải sàn</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/tham-tho-nhi-ky" data-sp=1>Thảm Thổ Nhĩ Kỳ</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/tham-bi" data-sp=1>Thảm Bỉ</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/tranh-gach-3d" data-sp=1>Tranh Gạch 3D</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/gach-vi-tinh-3d" data-sp=1>Gạch Vi Tinh 3D</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/gach-3d-cham-khac-noi" data-sp=1>Gạch 3D Chạm Khắc Nổi</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/gach-3d-phu-men-uv" data-sp=1>Gạch 3D Phủ Men UV</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/gach-kinh-5d" data-sp=1>Gạch Kính 5D</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/tranh-kinh-3d" data-sp=1>Tranh Kính 3D</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/bac-cau-thang-go-cong-nghiep" data-sp=1>Bậc cầu thang gỗ công nghiệp</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-noi-that" data-sp=1>Sàn gỗ Nội Thất</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-phong-ngu" data-sp=1>Sàn gỗ phòng ngủ</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-phong-khach" data-sp=1>Sàn gỗ phòng khách</span><ul class="ul-tree-lv-3"></ul></li></ul></li>
                            </ul>
                        </li>
                        <li>
                            <span class="span-tree-node tree-lv-0" data-url="/trang-tri-ngoai-that">Trang trí ngoại thất</span>
                            <ul>
                                <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/go-nhua-ngoai-troi" data-sp=1>Gỗ nhựa ngoài trời</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/gian-hoa-ngoai-troi" data-sp=1>Giàn hoa ngoài trời</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/hang-rao-ngoai-troi" data-sp=1>Hàng rào ngoài trời</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/lan-can-ban-cong" data-sp=1>Lan can - ban công</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/ban-ghe-ngoai-troi" data-sp=1>Bàn ghế ngoài trời</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/go-nhua-ngoai-troi-chau-hoa-go" data-sp=1>Chậu hoa gỗ</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/lam-go-trang-tri" data-sp=1>Lam gỗ trang trí che nắng</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/thung-rac-ngoai-troi-timberman" data-sp=1>Thùng rác ngoài trời TimberMan</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-cot-biowood" data-sp=1>Ốp cột Biowood</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/gach-go" data-sp=1>Gạch Gỗ</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/go-nhua-ngoai-troi-timberman" data-sp=1>Gỗ nhựa ngoài trời TimberMan</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/op-tuong-ngoai-troi" data-sp=1>Ốp tường ngoài trời</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/tieu-canh-vuon-cay" data-sp=1>Tiểu cảnh vườn cây</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/thanh-che-nang" data-sp=1>Thanh che nắng</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/trang-tri-ban-cong" data-sp=1>Trang trí ban công</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/vi-gach-da" data-sp=1>Vỉ gạch đá</span><ul class="ul-tree-lv-2"></ul></li>
                            </ul>
                        </li>
                        <li>
                            <span class="span-tree-node tree-lv-0" data-url="/do-gia-dung">Đồ gia dụng</span>
                            <ul>
                                <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/cham-soc-bao-duong" data-sp=1>Chăm sóc bảo dưỡng</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/nuoc-lau-san-layer-clean" data-sp=1>Nước lau sàn Layer Clean</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/may-loc-nuoc" data-sp=1>Máy lọc nước</span><ul class="ul-tree-lv-2"></ul></li>
                            </ul>
                        </li>
                        <li>
                            <span class="span-tree-node tree-lv-0" data-url="/san-tre">Sàn tre</span>
                            <ul>
                                <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-tre-ali" data-sp=1>Sàn tre ali</span><ul class="ul-tree-lv-2"></ul></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class=" align-self-md-center d-flex  ">
                    <div class="font-weight-bold">
                        Hotline:
                    </div>
                    <img src="images/hot-line-red-icon.svg" class="img-fluid mx-2 icon-nav align-self-center wow tada infinite " style="width: 20px;" />
                    <div class="align-self-center">
                        <a rel="nofollow" href="javascript:void(0)">
                            <div class=" font-weight-bold mb-0">1800 0022</div>
                        </a>
                    </div>
                </div>
            </div>
            <button class=" btn close-popup" onclick="$('.cate-mobile').toggle(100, 'swing');">
            <img src="images/times-icon.svg" />
            </button>
        </section>
        <div class="pt-1   ">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-xl-9">
                        <div class="slide-banner-home mb-4">
                            <div class="swiper-container gallery-top-home">
                                <!--Thêm slide-->
                                <div class="swiper-wrapper">
                                    @foreach ($slide1 as $key=>$product)
                                    <div class="swiper-slide">
                                        <div class="image image-fixed">
                                            <a href="javascript:void(0)">
                                                <img src="{!!$product->getImage()!!}" style="height: 340px; object-fit: contain;"class="d-block w-100" alt="noithathunggia.vn">
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <div class="swiper-container gallery-thumbs-home  ">
                                <div class="swiper-wrapper">
                                    @foreach ($slide1 as $key=>$product)
                                    <div class="swiper-slide">
                                        <div class="box-text">
                                            <div class="text">
                                                {!!$product->button_text!!}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row menu-ngang-2 justify-content-around flex-wrap">
                    <div class="col">
                        <div class="item">
                            <a href="javascript:void(0)">
                                <img src="../noithathunggia/uploads/2020/04/28/giovanggiasoce209.png?v=1.0.0" class="img-fluid mr-2">
                                Giờ vàng giá sốc
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <a href="javascript:void(0)">
                                <img src="../noithathunggia/uploads/2020/04/28/coupon%20(1)e209.png?v=1.0.0" class="img-fluid mr-2">
                                Hàng thanh lý
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <a href="javascript:void(0)">
                                <img src="../noithathunggia/uploads/2020/04/28/shopping-bag%20(2)e209.png?v=1.0.0" class="img-fluid mr-2">
                                Hàng cao cấp
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <a href="javascript:void(0)">
                                <img src="../noithathunggia/uploads/2020/04/28/mobile-storee209.png?v=1.0.0" class="img-fluid mr-2">
                                Bán chạy nhất
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <a href="javascript:void(0)">
                                <img src="../noithathunggia/uploads/2020/04/24/gifte209.png?v=1.0.0" class="img-fluid mr-2">
                                Vòng quay may mắn
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-f6f8f8 pt-3">
            <section class="container">
                <div class="row">
                    @foreach ($banner_mid as $key=>$banner)
                    <div class="col-xl-8 col-md-8 col-sm-12 col-12">
                        <a href="javascript:void(0)" title="">
                            <img src="{!!$banner->getImage()!!}" style="height: 180px; object-fit: cover" class="lazy w-100 mb-3 mb-md-0" />
                        </a>
                    </div>
                    @endforeach
                    <div class="col-xl-4 col-md-4 col-sm-12 col-12">
                        <div class="nd-fast-search h-100 w-100">
                            <form  method="get" action="{{route('product.search')}}" id="product_filter_form">
                                <div class="txt-1-fastsot">Tìm kiếm nhanh</div>
                                <div class="main-fast-search">
                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            <select class="form-control mb-2 mb-lg-0 filter-select zone-value" name="category_id">
                                                <option hidden value="0">Bạn muốn mua gì</option>
                                                <option value="">Tất cả</option>
                                                @foreach ($category as $key=>$category)
                                                <option value="{!!$category->id!!}">{!!$category->title!!}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <select class="form-control mb-2 mb-lg-0 filter-select manufacture-value" name="attribute_id">
                                                <option hidden value="0">Thương hiệu</option>
                                                <option value="">Tất cả</option>
                                                @foreach ($brand as $key=>$brand)
                                                <option value="{!!$brand->id!!}">{!!$brand->title!!}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <select class="form-control mb-2 mb-lg-0 filter-select range-price" name="price">
                                                <option hidden value="">Khung giá</option>
                                                <option value="">Tất cả</option>
                                                <option value="1">Từ 0 - 100.000đ</option>
                                                <option value="2">Từ 200.000 - 300.000đ</option>
                                                <option value="3">Từ 300.000 - 400.000đ</option>
                                                <option value="4">Từ 400.000 - 600.000đ</option>
                                                <option value="5">Từ 600.000 trở lên</option>
                                            </select>
                                        </div>
                                        <div class="col-6 margin-0-auto">
                                            <button class="btn btn-save mb-2 mb-md-0 w-100" type="submit" name="search">Tìm kiếm</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- test lai cho nay phat-->
            <!--best seller-->
            <section class="my-4">
                <div class="container ">
                    <div class="bg-fff pt-3 border-r-4">
                        <div class="px-3">
                            <div class="row mb-3 no-gutters ">
                                <div class="col-8">
                                    <a href="javascript:void(0)" class="h5 font-weight-bold ">Sản phẩm bán chạy 2020</a>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{route('product.show',['alias' => 'san-pham-ban-chay'])}}" class="link-view-more">
                                        Xem thêm <i class="fas fa-chevron-right ml-1 small"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slider main container -->
                        <div class="slide-product slide-1">
                            <div class="swiper-container ">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    @foreach ($product_hl as $key => $product)
                                    <div class="swiper-slide">
                                        <div class="item-product" data-id="20182" data-properties="">
                                            <div class="image">
                                                <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}"><img src="{{$product->getImage()}}" class="img-fluid lazy" style="height: 178.500px; object-fit: cover;"/></a>
                                                <div class="tag-2">
                                                    <img src="" class="img-fluid tag-2-thumb" />
                                                </div>
                                            </div>
                                            <div class="">
                                                <h5 class="title">
                                                <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" >
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
                                                        4,0/5<i class="fas fa-star ml-1"></i>
                                                    </div>
                                                    <div class="color-828282">
                                                        0 đánh giá
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- If we need navigation buttons -->
                            </div>
                            <div class="swiper-button-prev">
                                <button class="btn btn-secondary"><i class="fas fa-chevron-left"></i></button>
                            </div>
                            <div class="swiper-button-next">
                                <button class="btn btn-secondary"><i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Sàn gỗ nổi bật-->
            <section class="my-4 san-go-nb">
                <div class="container ">
                    <div class="bg-fff pt-3 border-r-4" >
                        <div class="container">
                            <div class="row mb-3 no-gutters ">
                                <div class="col-md-3 col-12 mb-2 mb-md-0">
                                    <a href="javascript:void(0)" class="h5 font-weight-bold ">Sàn gỗ công nghiệp</a>
                                </div>
                                <div class="col-md-9 col-12 d-lg-flex justify-content-lg-end align-self-center">
                                    <div class="menu-op align-self-center mr-lg-3">
                                        <!--menu mobile-->
                                        <div class="d-flex flex-wrap d-lg-none">
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region active" data-region-id="1486">Sàn Gỗ công nghiệp bán chạy</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1456">Malaysia</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1427">Việt Nam</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1457">Sàn Đức</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1454">Hàn quốc</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1424">Sàn gỗ EcoFloor</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1455">Thái Lan</a>
                                        </div>
                                        <!--menu mobile end-->
                                        <!--menu pc-->
                                        <div class="swiper-container d-none d-lg-block">
                                            <!-- Additional required wrapper -->
                                            <div class="swiper-wrapper">
                                                <!-- Slides -->
                                                <ul class="nav nav-pills">
                                                    <li><a data-toggle="pill" href="#industry_home" style="color:#007dff">Sàn gỗ công nghiệp bán chạy</a></li>
                                                    &nbsp&nbsp&nbsp&nbsp&nbsp
                                                    @foreach ($origin as $key=>$origin1)
                                                    <li><a data-toggle="pill" href="#industry_{{$key}}" style="color:#007dff">{!!$origin1->title!!}        </a></li>
                                                    &nbsp&nbsp&nbsp&nbsp&nbsp
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <!--menu pc end-->
                                    </div>
                                    <div class=" align-self-center  ">
                                        <a href="{{route('product.show',['alias' => 'san-go-cong-nghiep'])}}" class="link-view-more url-old-link">Xem tất cả</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div id="industry_home" class="tab-pane active">
                                    <div class="_binding_product">
                                        <div class="set-total" data-total="8" data-id="1486" style="display:none"></div>
                                        <div class="row no-gutters mb-3 mb-md-0">
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                @php $i=0; @endphp
                                                @foreach($industry as $key=> $product)
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
                                                @endforeach
                                            </div>
                                            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="row no-gutters h-100 ">
                                                    @foreach($industry as $key=> $product)
                                                    @if($key>$index)
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
                                @foreach($origin as $key => $origin)
                                
                                <div id="industry_{{$key}}" class="tab-pane fade ">
                                    <div class="_binding_product">
                                        <div class="set-total" data-total="8" data-id="1486" style="display:none"></div>
                                        <div class="row no-gutters mb-3 mb-md-0">
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                @php $i=0; @endphp
                                                @foreach($industry_origin as $key=> $product)
                                                @if($origin->id==$product->category_id)
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
                                                    @foreach($industry_origin as $key=> $product)
                                                    @if($origin->id==$product->category_id && $key>$index)
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
                            <a href="javascript:void(0)" class="view-remain-product" data-skip="8" data-size="" data-id="">
                                <div class="see-more"><i class="fas fa-angle-double-right"></i> Xem thêm <span class="remain-product"><b>0</b></span> sản phẩm </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!--Banner-->
            <section class="slide-cate mb-3 mb-lg-4">
                <div class="container">
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach($slide2 as $key => $product)
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="{!!$product->getImage()!!}" class="img-fluid" style="width: 410px; height:170px;object-fit: cover;" />
                                    <a href="javascript:void(0)" class="text text-uppercase">
                                        <small></small>
                                        <h4 class="font-weight-bold"></h4>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!--Sàn nhựa nổi bật-->
            <section class="my-4 san-go-nb">
                <div class="container ">
                    <div class="bg-fff pt-3 border-r-4" >
                        <div class="container">
                            <div class="row mb-3 no-gutters ">
                                <div class="col-md-3 col-12 mb-2 mb-md-0">
                                    <a href="javascript:void(0)" class="h5 font-weight-bold ">Sàn gỗ tự nhiên</a>
                                </div>
                                <div class="col-md-9 col-12 d-lg-flex justify-content-lg-end align-self-center">
                                    <div class="menu-op align-self-center mr-lg-3">
                                        <!--menu mobile-->
                                        <div class="d-flex flex-wrap d-lg-none">
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region active" data-region-id="1483">Sàn gỗ tự nhiên bán chạy</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1449">Gỗ gõ đỏ</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1450">Gỗ Giáng hương</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1448">Gỗ Sồi</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1447">Gỗ Teak </a>
                                        </div>
                                        <!--menu mobile end-->
                                        <!--menu pc-->
                                        <div class="swiper-container d-none d-lg-block">
                                            <!-- Additional required wrapper -->
                                            <div class="swiper-wrapper">
                                                <!-- Slides -->
                                                <ul class="nav nav-pills">
                                                    <li class="active"><a data-toggle="pill" href="#nature_home" style="color:#007dff">Sàn gỗ tự nhiên bán chạy</a></li>
                                                    &nbsp&nbsp&nbsp&nbsp&nbsp
                                                    @foreach ($material as $key=>$material1)
                                                    <li><a data-toggle="pill" href="#nature_{{$key}}" style="color:#007dff">{!!$material1->title!!}</a></li>
                                                    &nbsp&nbsp&nbsp&nbsp&nbsp
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <!--menu pc end-->
                                    </div>
                                    <div class=" align-self-center  ">
                                        <a href="{{route('product.show',['alias' => 'san-go-tu-nhien'])}}" class="link-view-more url-old-link">Xem tất cả</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div id="nature_home" class="tab-pane active">
                                    <div class="_binding_product">
                                        <div class="set-total" data-total="8" data-id="1486" style="display:none"></div>
                                        <div class="row no-gutters mb-3 mb-md-0">
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                @php $i=0; @endphp
                                                @foreach($nature as $key=> $product)
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
                                                @endforeach
                                            </div>
                                            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="row no-gutters h-100 ">
                                                    @foreach($nature as $key=> $product)
                                                    @if($key>$index)
                                                    <div class="col-md-4 col-sm-4 col-6 ">
                                                        <div class="item-product" data-id="95211" data-properties="">
                                                            <div class="image">
                                                                <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}"><img src="{{$product->getImage()}}" style="width: 200px; height: 200px; object-fit: cover;" class="lazy img-fluid" /></a>
                                                            </div>
                                                            <div class="">
                                                                <h5 class="title">
                                                                <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}">
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
                                @foreach($material as $key => $material)
                                
                                <div id="nature_{{$key}}" class="tab-pane fade">
                                    <div class="_binding_product">
                                        <div class="set-total" data-total="8" data-id="1483" style="display:none"></div>
                                        <div class="row no-gutters mb-3 mb-md-0">
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                @php $i=0; @endphp
                                                @foreach($nature_category as $key=> $product)
                                                @if($material->id==$product->category_id)
                                                @if($i <2 )
                                                <div>
                                                    <div class="item-product item-product-large">
                                                        <div class="image">
                                                            <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}">
                                                                <img src="{{$product->getImage()}}" style="height: 250px" class="img-fluid lazy" />
                                                            </a>
                                                        </div>
                                                        <div class="py-1">
                                                            <h5 class="title">
                                                            <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" title="Sàn gỗ Sồi 750 x 90mm">
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
                                                    @foreach($nature_category as $key=> $product)
                                                    @if($material->id==$product->category_id && $key>$index)
                                                    <div class="col-md-4 col-sm-4 col-6 ">
                                                        <div class="item-product" data-id="42173" data-properties="">
                                                            <div class="image">
                                                                <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}"><img src="{{$product->getImage()}}" style="width: 200px; height: 200px; object-fit: cover;" class="lazy img-fluid" /></a>
                                                                <div class="tag-2">
                                                                    <img src="" class="img-fluid tag-2-thumb" />
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <h5 class="title">
                                                                <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" title="Sàn gỗ Óc chó 600mm">
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
                            <a href="javascript:void(0)" class="view-remain-product" data-skip="8" data-size="" data-id="">
                                <div class="see-more"><i class="fas fa-angle-double-right"></i> Xem thêm <span class="remain-product"><b>0</b></span> sản phẩm </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!--Hang thanh ly
            -->
            <section class="my-4">
                <div class="container ">
                    <div class="bg-fff pt-3 pb-2 px-2 border-r-4" style="background: url(images/change/bg-flash.jpg) no-repeat top center;background-size: cover;">
                        <div class="px-3">
                            <div class="row mb-3 no-gutters ">
                                <div class="col-12 d-flex flex-wrap">
                                    <a href="javascript:void(0)" class="align-self-center h5 mr-3 text-uppercase mb-0" style="color: #fff;">
                                        <b>Hàng Thanh lý</b>
                                    </a>
                                    <a href="{{route('product.show',['alias' => 'hang-thanh-ly'])}}">
                                        Xem thêm<i class="fas fa-chevron-right ml-2 "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slider main container -->
                        <div class="slide-product slide-4">
                            <div class="swiper-container ">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    @foreach ($sale as $key => $product)
                                    <div class="swiper-slide">
                                        <div class="item-product" data-id="92883" data-properties="">
                                            <div class="image">
                                                <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}"><img src="{{$product->getImage()}}" style="height: 200px; object-fit:cover;"class="img-fluid lazy"/></a>
                                                <div class="tag-2">
                                                    <img src="" class="img-fluid tag-2-thumb" />
                                                </div>
                                            </div>
                                            <div class="">
                                                <h5 class="title">
                                                <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" title="Sàn gỗ Việt Nam thanh lý TL109">
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
                                    @endforeach
                                </div>
                                <!-- If we need navigation buttons -->
                            </div>
                            <div class="swiper-button-prev">
                                <button class="btn btn-secondary"><i class="fas fa-chevron-left"></i></button>
                            </div>
                            <div class="swiper-button-next">
                                <button class="btn btn-secondary"><i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--ĐỒ trnag trí-->
            <section class="my-4 san-go-nb">
                <div class="container ">
                    <div class="bg-fff pt-3 border-r-4" >
                        <div class="container">
                            <div class="row mb-3 no-gutters ">
                                <div class="col-md-3 col-12 mb-2 mb-md-0">
                                    <a href="javascript:void(0)" class="h5 font-weight-bold ">Sàn nhựa</a>
                                </div>
                                <div class="col-md-9 col-12 d-lg-flex justify-content-lg-end align-self-center">
                                    <div class="menu-op align-self-center mr-lg-3">
                                        <!--menu mobile-->
                                        <div class="d-flex flex-wrap d-lg-none">
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region active" data-region-id="1485">Sàn nhựa bán chạy</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1452">Florton SPC hèm khóa</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1444">Ecofloor Vinyl</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1428">Sàn Railflex</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1451">Sàn Galaxy</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1453">Sàn nhựa Mines</a>
                                        </div>
                                        <!--menu mobile end-->
                                        <!--menu pc-->
                                        <div class="swiper-container d-none d-lg-block">
                                            <!-- Additional required wrapper -->
                                            <div class="swiper-wrapper">
                                                <!-- Slides -->
                                                <ul class="nav nav-pills">
                                                    <li class="active"><a data-toggle="pill" href="#plastic_home" style="color:#007dff">Sàn nhựa bán chạy</a></li>
                                                    &nbsp&nbsp&nbsp&nbsp&nbsp
                                                    @foreach ($plastic_brand as $key=>$plastic_brand1)
                                                    <li><a data-toggle="pill" href="#plastic_{{$key}}" style="color:#007dff">{!!$plastic_brand1->title!!}        </a></li>
                                                    &nbsp&nbsp&nbsp&nbsp&nbsp
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <!--menu pc end-->
                                    </div>
                                    <div class=" align-self-center  ">
                                        <a href="{{route('product.show',['alias' => 'san-nhua'])}}" class="link-view-more url-old-link">Xem tất cả</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div id="plastic_home" class="tab-pane active">
                                    <div class="_binding_product">
                                        <div class="set-total" data-total="8" data-id="1486" style="display:none"></div>
                                        <div class="row no-gutters mb-3 mb-md-0">
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                @php $i=0; @endphp
                                                @foreach($plastic as $key=> $product)
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
                                                @endforeach
                                            </div>
                                            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="row no-gutters h-100 ">
                                                    @foreach($plastic as $key=> $product)
                                                    @if($key>$index)
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
                                @foreach($plastic_brand as $key => $plastic_brand)
                                
                                <div id="plastic_{{$key}}" class="tab-pane fade ">
                                    <div class="_binding_product">
                                        <div class="set-total" data-total="8" data-id="1486" style="display:none"></div>
                                        <div class="row no-gutters mb-3 mb-md-0">
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                @php $i=0; @endphp
                                                @foreach($plastic_category as $key=> $product)
                                                @if($plastic_brand->id==$product->category_id)
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
                                                    @foreach($plastic_category as $key=> $product)
                                                    @if($plastic_brand->id==$product->category_id && $key>$index)
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
                            <a href="javascript:void(0)" class="view-remain-product" data-skip="8" data-size="" data-id="">
                                <div class="see-more"><i class="fas fa-angle-double-right"></i> Xem thêm <span class="remain-product"><b>0</b></span> sản phẩm </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="my-4 san-go-nb">
                <div class="container ">
                    <div class="bg-fff pt-3 border-r-4" >
                        <div class="container">
                            <div class="row mb-3 no-gutters ">
                                <div class="col-md-3 col-12 mb-2 mb-md-0">
                                    <a href="javascript:void(0)" class="h5 font-weight-bold ">Sàn gỗ ngoài trời</a>
                                </div>
                                <div class="col-md-9 col-12 d-lg-flex justify-content-lg-end align-self-center">
                                    <div class="menu-op align-self-center mr-lg-3">
                                        <!--menu mobile-->
                                        <div class="d-flex flex-wrap d-lg-none">
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region active" data-region-id="1488">Sàn gỗ ngoài trời bán chạy</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1462">Sàn Timberman</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1460">Sàn sân vườn</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1459">Sàn bể bơi</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1461">Sàn JANWOOD</a>
                                        </div>
                                        <!--menu mobile end-->
                                        <!--menu pc-->
                                        <div class="swiper-container d-none d-lg-block">
                                            <!-- Additional required wrapper -->
                                            <div class="swiper-wrapper">
                                                <!-- Slides -->
                                                <ul class="nav nav-pills">
                                                    <li class="active"><a data-toggle="pill" href="#outdoor_home" style="color:#007dff">Sàn gỗ ngoài trời bán chạy</a></li>
                                                    &nbsp&nbsp&nbsp&nbsp&nbsp
                                                    @foreach ($outdoor_brand as $key=>$outdoor_brand1)
                                                    <li><a data-toggle="pill" href="#outdoor_{{$key}}" style="color:#007dff">{!!$outdoor_brand1->title!!}</a></li>
                                                    &nbsp&nbsp&nbsp&nbsp&nbsp
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <!--menu pc end-->
                                    </div>
                                    <div class=" align-self-center  ">
                                        <a href="{{route('product.show',['alias' => 'san-go-ngoai-troi'])}}" class="link-view-more url-old-link">Xem tất cả</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div id="outdoor_home" class="tab-pane active">
                                    <div class="_binding_product">
                                        <div class="set-total" data-total="8" data-id="1486" style="display:none"></div>
                                        <div class="row no-gutters mb-3 mb-md-0">
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                @php $i=0; @endphp
                                                @foreach($outdoor as $key=> $product)
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
                                                @endforeach
                                            </div>
                                            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="row no-gutters h-100 ">
                                                    @foreach($outdoor as $key=> $product)
                                                    @if($key>$index)
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
                                @foreach($outdoor_brand as $key => $outdoor_brand)
                                
                                <div id="outdoor_{{$key}}" class="tab-pane fade ">
                                    <div class="_binding_product">
                                        <div class="set-total" data-total="8" data-id="1486" style="display:none"></div>
                                        <div class="row no-gutters mb-3 mb-md-0">
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                @php $i=0; @endphp
                                                @foreach($outdoor_category as $key=> $product)
                                                @if($outdoor_brand->id==$product->category_id)
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
                                                    @foreach($outdoor_category as $key=> $product)
                                                    @if($outdoor_brand->id==$product->category_id && $key>$index)
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
                            <a href="javascript:void(0)" class="view-remain-product" data-skip="8" data-size="" data-id="">
                                <div class="see-more"><i class="fas fa-angle-double-right"></i> Xem thêm <span class="remain-product"><b>0</b></span> sản phẩm </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="my-4 san-go-nb">
                <div class="container ">
                    <div class="bg-fff pt-3 border-r-4" >
                        <div class="container">
                            <div class="row mb-3 no-gutters ">
                                <div class="col-md-3 col-12 mb-2 mb-md-0">
                                    <a href="javascript:void(0)" class="h5 font-weight-bold ">Trang trí nội thất</a>
                                </div>
                                <div class="col-md-9 col-12 d-lg-flex justify-content-lg-end align-self-center">
                                    <div class="menu-op align-self-center mr-lg-3">
                                        <!--menu mobile-->
                                        <div class="d-flex flex-wrap d-lg-none">
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region active" data-region-id="1493">Trang trí nội thất bán chạy</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1491">Ốp Nano TimberMan</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1481">Giấy dán tường</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1489">ốp tường trương nhà</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1463">Thảm trải sàn 2020</a>
                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal mr-3 tab-region " data-region-id="1433">Rèm cửa HOT</a>
                                        </div>
                                        <!--menu mobile end-->
                                        <!--menu pc-->
                                        <div class="swiper-container d-none d-lg-block">
                                            <!-- Additional required wrapper -->
                                            <div class="swiper-wrapper">
                                                <!-- Slides -->
                                                <ul class="nav nav-pills">
                                                    <li class="active"><a data-toggle="pill" href="#decor_home" style="color:#007dff">Trang trí nội thất bán chạy</a></li>
                                                    &nbsp&nbsp&nbsp&nbsp&nbsp
                                                    @foreach ($decor_brand as $key=>$decor_brand1)
                                                    <li><a data-toggle="pill" href="#decor_{{$key}}" style="color:#007dff">{!!$decor_brand1->title!!}</a></li>
                                                    &nbsp&nbsp&nbsp&nbsp&nbsp
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <!--menu pc end-->
                                    </div>
                                    <div class=" align-self-center  ">
                                        <a href="{{route('product.show',['alias' => 'san-go-ngoai-troi'])}}" class="link-view-more url-old-link">Xem tất cả</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div id="decor_home" class="tab-pane active">
                                    <div class="_binding_product">
                                        <div class="set-total" data-total="8" data-id="1486" style="display:none"></div>
                                        <div class="row no-gutters mb-3 mb-md-0">
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                @php $i=0; @endphp
                                                @foreach($decor as $key=> $product)
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
                                                @endforeach
                                            </div>
                                            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="row no-gutters h-100 ">
                                                    @foreach($decor as $key=> $product)
                                                    @if($key>$index)
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
                                @foreach($decor_brand as $key => $decor_brand)
                                
                                <div id="decor_{{$key}}" class="tab-pane fade ">
                                    <div class="_binding_product">
                                        <div class="set-total" data-total="8" data-id="1486" style="display:none"></div>
                                        <div class="row no-gutters mb-3 mb-md-0">
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                @php $i=0; @endphp
                                                @foreach($decor_category as $key=> $product)
                                                @if($decor_brand->id==$product->category_id)
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
                                                    @foreach($decor_category as $key=> $product)
                                                    @if($decor_brand->id==$product->category_id && $key>$index)
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
                            <a href="javascript:void(0)" class="view-remain-product" data-skip="8" data-size="" data-id="">
                                <div class="see-more"><i class="fas fa-angle-double-right"></i> Xem thêm <span class="remain-product"><b>0</b></span> sản phẩm </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="my-4">
                <div class="container ">
                    <div class="bg-fff pt-3 border-r-4">
                        <div class="px-3">
                            <div class="row mb-3 no-gutters ">
                                <div class="col-8">
                                    <a href="javascript:void(0)" class="h5 font-weight-bold ">Sản phẩm gia dụng</a>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{route('product.show',['alias' => 'do-gia-dung'])}}" class="link-view-more">
                                        Xem thêm <i class="fas fa-chevron-right ml-1 small"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slider main container -->
                        <div class="slide-product slide-1">
                            <div class="swiper-container ">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    @foreach ($houseware as $key => $product)
                                    <div class="swiper-slide">
                                        <div class="item-product" data-id="20182" data-properties="">
                                            <div class="image">
                                                <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}"><img src="{{$product->getImage()}}" class="img-fluid lazy" style="height: 178.500px; object-fit: cover;"/></a>
                                                <div class="tag-2">
                                                    <img src="" class="img-fluid tag-2-thumb" />
                                                </div>
                                            </div>
                                            <div class="">
                                                <h5 class="title">
                                                <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" title="Sàn gỗ WOODMAN O127">
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
                                                        4,0/5<i class="fas fa-star ml-1"></i>
                                                    </div>
                                                    <div class="color-828282">
                                                        0 đánh giá
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- If we need navigation buttons -->
                            </div>
                            <div class="swiper-button-prev">
                                <button class="btn btn-secondary"><i class="fas fa-chevron-left"></i></button>
                            </div>
                            <div class="swiper-button-next">
                                <button class="btn btn-secondary"><i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @foreach ($banner_end as $key => $banner)
            <section class="container mb-4">
                <div class="banner-in py-5"
                    style="background: url({!!$banner->getImage()!!}) no-repeat center;background-size: cover;">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-md-8 col-sm-8 col-12">
                            <div>
                                Chúng tôi hỗ trợ bạn 24/7.
                                Hãy liên lạc với chúng tôi theo số
                                {!!$share_config->hotline!!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endforeach
            <!-- <div class="container blog-video">
                <div class="heading pb-2  mb-3 d-flex">
                    <div class="h5 font-weight-600 mb-0 ">
                        Video
                    </div>
                    <div class="ml-auto">
                        <a href="javascript:void(0)" class="link-view-more">
                            Xem thêm <i class="fas fa-chevron-right ml-1 small"></i>
                        </a>
                    </div>
                </div>
                <div class="slide-video">
                    <div class="swiper-container">
                        Additional required wrapper
                        <div class="swiper-wrapper">
                            Slides
                            <div class="swiper-slide">
                                <div class="item">
                                    <div class="video-img">
                                        <a href="javascript:void(0)">
                                            <img src="images/gray3860.jpg?v=1" class="img-fluid lazy w-100"/>
                                            <div class="play-yt">
                                                <img src="images/youtube3860.svg?v=1" class="">
                                            </div>
                                        </a>
                                    </div>
                                    <h5 class="title">
                                    <a rel="nofollow" href="javascript:void(0)">Content Video</a>
                                    </h5>
                                    <div class="time">
                                        Release date
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <section class="blogs-home py-5">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-6">
                            <a href="javascript:void(0)" class="h5 font-weight-bold">TƯ VẤN</a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{route('news.index')}}" class="link-view-more">Xem thêm <i class="fas fa-chevron-right ml-1 small"></i></a>
                        </div>
                    </div>
                    <div class="cust-bg-use">
                        <div class="row">
                            <div class="col-xl-7 col-md-6 col-sm-12 col-12">
                                @foreach ($news_arr as $key => $news)
                                @if($key == 1)
                                @break
                                @endif
                                <div class="item">
                                    <a href="{!! route('news.detail', ['alias' => $news->alias]) !!}" >
                                        <img src="{{$news->getImage()}}" class="img-fluid lazy" width="100%" height="auto" />
                                    </a>
                                    <a href="{!! route('news.detail', ['alias' => $news->alias]) !!}" class="">
                                        <h6 class="title h5 mt-3 ">
                                        {!!$news->title!!}
                                        </h6>
                                    </a>
                                    <div class="des">
                                        <p>{!!$news->description!!}</p>
                                    </div>
                                    <div class="text-right mb-3">
                                        <a href="javascript:void(0)" class="link-view-more">
                                            Đọc tiếp<i class="fas fa-chevron-right ml-1 small"></i>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-xl-5 col-md-6 col-sm-12 col-12 pl-md-0">
                                <div class="list-right">
                                    @foreach ($news_arr as $key => $news)
                                    @if($key == 0)
                                    @continue
                                    @endif
                                    @if($key == 6)
                                    @break
                                    @endif
                                    <div class="item">
                                        <div class="row" style="margin-bottom: 20px">
                                            <div class="col-xl-3 col-md-4 col-sm-3 col-3">
                                                <div class="image">
                                                    <a href="{!! route('news.detail', ['alias' => $news->alias]) !!}" >
                                                        <img src="{{$news->getImage()}}" class="img-fluid lazy" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-md-8 col-sm-9 col-9 pl-0">
                                                <h6 class="title">
                                                <a href="{!! route('news.detail', ['alias' => $news->alias]) !!}" >{!!$news->title!!}</a>
                                                </h6>
                                                <div class="time">
                                                    {!!$news->getPostSchedule()!!}
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="fb-root"></div>
        <section class="service-home py-3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-sm-4 col-12">
                        <div class="d-flex py-3 justify-content-center">
                            <div class="image align-self-center">
                                <img src="{!!asset('/noithathunggia/uploads/2020/04/28/shipment-international 2.png?v=1.0.0')!!}" class="img-fluid lazy" />
                            </div>
                            <div class="px-3 align-self-center">
                                <label style="text-transform: uppercase;">Xuất xứ</label>
                                <div class="small">
                                    Bảo đảm 100% xuất xứ
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-4 col-12">
                        <div class="d-flex py-3 justify-content-center">
                            <div class="image align-self-center">
                                <img src="{!!asset('icon/24-hours-phone-service.png')!!}"  class="img-fluid lazy" />
                            </div>
                            <div class="px-3 align-self-center">
                                <label style="text-transform: uppercase;">Hỗ trợ 24/7</label>
                                <div class="small">
                                    Hệ thống toàn quốc
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-4 col-12">
                        <div class="d-flex py-3 justify-content-center">
                            <div class="image align-self-center">
                                <img src="{!!asset('noithathunggia/uploads/2020/04/28/saving-piggy-dollars 3.png?v=1.0.0')!!}"  class="img-fluid lazy" />
                            </div>
                            <div class="px-3 align-self-center">
                                <label style="text-transform: uppercase;">Loại hình dịch vụ</label>
                                <div class="small">
                                    Nhập khẩu - phân phối - bán lẻ trực tiếp
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 col-12">
                        <h4 class="title-menu">Nội thất Hưng Gia</h4>
                        <ul class="footer-menu ">
                            <li><a href="javascript:void(0)">Giới thiệu công ty</a></li>
                            <li><a href="javascript:void(0)">Tuyển dụng</a></li>
                            <li><a href="javascript:void(0)">Liên hệ &amp; Góp ý</a></li>
                            <li><a href="javascript:void(0)">Hệ thống Showroom</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <h4 class="title-menu">Hỗ trợ khách hàng</h4>
                        <ul class="footer-menu ">
                            <li><a href="javascript:void(0)">Chính sách &amp; Quy định</a></li>
                            <li><a href="javascript:void(0)">Bảo hành - bảo dưỡng</a></li>
                            <li><a href="javascript:void(0)">Quy định thanh toán</a></li>
                            <li><a href="javascript:void(0)">Chính sách bảo mật</a></li>
                            <li><a href="javascript:void(0)">Chính sách đổi trả hàng</a></li>
                            <li><a href="javascript:void(0)">Chính sách giao hàng</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <h4 class="title-menu">Câu hỏi thường gặp</h4>
                        <ul class="footer-menu ">
                            <li><a href="javascript:void(0)">Báo giá thi công lắp đặt</a></li>
                            <li><a href="javascript:void(0)">Categories Sản phẩm</a></li>
                            <li><a href="javascript:void(0)">Tư vấn chuyên sâu</a></li>
                            <li><a href="javascript:void(0)">Chương trình khuyến mãi</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-12 col-sm-12 col-12">
                        <h4 class="title-menu">Đăng ký nhận thông tin</h4>
                        <div class="input-group mb-4">
                            <input type="text" class="form-control email-collection" placeholder="Email" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn input-group-text btn-email-collection">Đăng ký</button>
                            </div>
                        </div>
                        <h4 class="title-menu mb-4">Kết nối với chúng tôi</h4>
                        <div class="social">
                            <a rel="nofollow" href="javascript:void(0)" title="Facebook">
                                <img src="images/fb-cir-ice209.svg?v=1.0.0" class="img-fluid mr-2" />
                            </a>
                            <a rel="nofollow" href="javascript:void(0)" title="Twitter">
                                <img src="images/twitter-ice209.svg?v=1.0.0" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center" style="align-items:center;">
                    <div class="col-12 border-bottom p-3 mb-3" style="border-color: #7F7D7D!important;">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12  pull-left">
                        <div class="font-weight-bold mb-2">Công ty nội thất Hưng Gia</div>
                        <div class="mb-2">
                            Địa chỉ: {!!$share_config->address!!}
                        </div>
                        <div class="mb-4">
                            <div class="d-lg-inline-block mb-2 mb-lg-0">
                                <a rel="nofollow" href="tel:{!!$share_config->hotline!!}"><i class="fas fa-phone-alt mr-2"></i>Hotline: {!!$share_config->hotline!!}</a>
                            </div>
                            <div class="d-lg-inline-block ml-lg-5">
                                <a rel="nofollow" href="mail:{!!$share_config->email!!}"><i class="fas fa-envelope mr-2"></i>Email: {!!$share_config->email!!}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-4  text-center">
                        <a rel="nofollow" href='javascript:void(0)'><img alt='' title='' src='images/logoSaleNoti3860.png?v=1' class="img-fluid" /></a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-4 text-center">
                        <a href="javascript:void(0)">
                            <img src="images/dmcae209.png?v=1.0.0" class="img-fluid" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="bottom-footer py-3 text-right">
                <div class="container">
                    <a rel="nofollow" href="javascript:void(0)">
                        <img src="images/visa-ice209.svg?v=1.0.0" class="img-fluid" />
                    </a>
                    <a rel="nofollow" href="javascript:void(0)">
                        <img src="images/paypal-ice209.svg?v=1.0.0" class="img-fluid" />
                    </a>
                    <a rel="nofollow" href="javascript:void(0)">
                        <img src="images/master-ice209.svg?v=1.0.0" class="img-fluid" />
                    </a>
                    <a rel="nofollow" href="javascript:void(0)">
                        <img src="images/express-ice209.svg?v=1.0.0" class="img-fluid" />
                    </a>
                </div>
            </div>
        </footer>
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
                            <img src="images/logoe209.png?v=1.0.0" class="img-fluid" />
                        </div>
                        <h5 class="mb-3 font-weight-bold">Xách nhận thành công!</h5>
                        <div>
                            <img src="images/checke209.svg?v=1.0.0" class="img-fluid" />
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
                    logged_in_greeting="Nội thất Hưng Gia xin chào ! Chúng tôi có thể giúp gì cho bạn?"
                    logged_out_greeting="Nội thất Hưng Gia xin chào ! Chúng tôi có thể giúp gì cho bạn?">
                </div>
                <a rel="nofollow" target="_blank" href="https://zalo.me/{!!$share_config->phone!!}" class="zalo">
                    <i class="fa" aria-hidden="true">
                    <img src="{!!asset('stc-zaloprofile.zdn.vn/pc/v1/images/zalo_sharelogo.png')!!}" width="25px" />
                    </i>
                    <span>Zalo: {!!$share_config->phone!!}</span>
                </a>
            </div>
        </div>
        @foreach ($banner_left as $key=>$banner)
        <div class="banner-fixed-left">
            <a rel="nofollow" href="javascript:void(0)">
                <img src="{!!$banner->getImage()!!}" class="img-fluid w-100')!!}" />
            </a>
        </div>
        @endforeach
        @foreach ($banner_right as $key=>$banner)
        <div class="banner-fixed-right">
            <a rel="nofollow" href="javascript:void(0)">
                <img src="{!!$banner->getImage()!!}" class="img-fluid w-100" />
            </a>
        </div>
        @endforeach
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
            <meta itemprop="url" content="noithathunggia.vn" />
            <form itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction">
                <meta itemprop="target" content="noithathunggia.vn/Product/Get?keyword={search_term_string}" />
                <input itemprop="query-input" type="text" name="search_term_string" required />
                <input type="submit" />
            </form>
        </div>
        <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Organization",
        "url": "noithathunggia.vn",
        "logo": "/2020/04/28/logo.png"
        }
        </script>
        <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Store",
        "@id": "noithathunggia.vn",
        "name": "noithathunggia",
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
        "url": "noithathunggia.vn",
        "telephone": "1800.0022",
        "servesCuisine": "VietNam",
        "priceRange": "$$$",
        "acceptsReservations": "True"
        }
        </script>
        <script>    document.addEventListener("DOMContentLoaded", function(event) {     gtag('config', 'AW-830211279');       jQuery('[href^="tel:"]').click(function() {          gtag('event', 'conversion', {'send_to': 'AW-830211279/tVQrCMnmsYYBEM-J8IsD'});     });   }); </script>
        <script src="https://kit.fontawesome.com/1560292da9.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{!!asset('js/jquery-3.3.1.mine209.js?v=1.0.0')!!}"></script>
        <script type="text/javascript" src="{!!asset('js/jquery-ui.mine209.js?v=1.0.0')!!}"></script>
        <script type="text/javascript" src="{!!asset('js/popper.mine209.js?v=1.0.0')!!}"></script>
        <script type="text/javascript" src="{!!asset('js/bootstrap.mine209.js?v=1.0.0')!!}"></script>
        <script type="text/javascript" src="{!!asset('js/swiper.mine209.js?v=1.0.0')!!}"></script>
        <script type="text/javascript" src="{!!asset('js/wow.mine209.js?v=1.0.0')!!}"></script>
        <script type="text/javascript" src="{!!asset('js/momentJSe209.js?v=1.0.0')!!}"></script>
        <script type="text/javascript" src="{!!asset('js/daterangepickere209.js?v=1.0.0')!!}"></script>
        <script type="text/javascript" src="{!!asset('js/paginationJSe209.js?v=1.0.0')!!}"></script>
        <script type="text/javascript" src="{!!asset('js/jstree.mine209.js?v=1.0.0')!!}"></script>
        <script type="text/javascript" src="{!!asset('js/appe209.js?v=1.0.0')!!}"></script>
        <script type="text/javascript" src="{!!asset('js/coree209.js?v=1.0.0')!!}"></script>
        <script type="text/javascript" src="{!!asset('js/menuControllere209.js?v=1.0.0')!!}"></script>
        <script type="text/javascript" src="{!!asset('js/orderControllere209.js?v=1.0.0')!!}"></script>
        <script type="text/javascript" src="{!!asset('js/extraControllere209.js?v=1.0.0')!!}"></script>
        <script type="text/javascript" src="{!!asset('js/yall-js/dist/yall.mine209.js?v=1.0.0')!!}"></script>
        <script type="text/javascript" src="{!!asset('js/jquery.lazye209.js?v=1.0.0')!!}"></script>
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
    js.src = "{!!asset('js/xfbml.customerchat.js')!!}";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    }, 1200);
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-98267825-1"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());    gtag('config', 'UA-98267825-1'); </script>
    <script type="text/javascript" src="{!!asset('js/homeControllere209.js?v=1.0.0')!!}"></script>
    <!--             Filter Ajax -->
</body>