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
                    <div class=" nav-center">
                        <div class="container">
                            <nav class="navbar navbar-expand-md py-md-2 px-0">
                                <a class="navbar-brand d-none d-md-block" href="{{route('home.index')}}" title="">
                                    <img src="{!!$share_config->image!!}" alt="Nội thất Hưng Gia.vn"
                                    class="img-fluid" />
                                </a>
                                <a class="navbar-brand d-md-none" href="index.html" title="">
                                    <img src="images/logo_mobile_2e209.png?v=1.0.0" alt="" class="img-fluid" />
                                </a>
                                <div class="d-md-none">
                                    <div class="input-group form-search flex-nowrap mr-2 width-mb" style="width: 210px;">
                                        <input type="text" class="form-control find-product " placeholder="Tìm sản phẩm....">
                                        <div class="input-group-append">
                                            <button class="btn btn-search es-search-button">
                                            <img src="images/searche209.svg?v=1.0.0" class="img-fluid" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse navbar-collapse w-100 align-self-center">
                                    <ul class=" navbar-nav ml-auto mt-4 mt-md-0 w-100 justify-content-xl-around">
                                        <li class="nav-item mr-md-3 align-self-center  d-none d-md-block  ">
                                            <button type="button" class="btn btn-local ">
                                            <div class=" d-flex" data-placement="bottom" data-toggle="modal"
                                                data-target="#modal-khu-vuc">
                                                <div class="align-self-center mr-2" style="width: 18px;">
                                                    <img src="{!!asset('images/Locatione209.svg?v=1.0.0')!!}" class="img-fluid" />
                                                </div>
                                                <div class="align-self-center small text-right">
                                                    <label class="mb-0">Khu vực:</label>
                                                    <div class="local " id="current-local" data-id="22" data-name="Hà Nội">
                                                        Hà Nội
                                                        <i class="fas fa-angle-down small ml-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="onhover only-first-load-location" style="display:none">
                                                <div class="font-weight-bold">Bạn ở đâu?<i class="fas fa-times-circle float-right " onclick="timeIcon()"></i></div>
                                                <div style="color: #828282;">Bạn hãy chọn tỉnh thành nhé...</div>
                                            </div>
                                            </button>
                                        </li>
                                        <li class="nav-item mr-md-3 align-self-center d-none d-md-block position-relative ">
                                            <div class="input-group form-search flex-nowrap mb-1 ">
                                                <input type="text" class="form-control find-product" placeholder="Tìm sản phẩm....">
                                                <div class="input-group-append es-search-button">
                                                    <button class="btn btn-search">
                                                    <img src="images/searche209.svg?v=1.0.0" class="img-fluid" />
                                                    </button>
                                                </div>
                                                <div class="suggest-text suggest-text-1">
                                                    <div class="h6 px-3">
                                                        Gợi ý cho bạn
                                                    </div>
                                                    <div class="color-007DFF  px-3">
                                                        <div class="py-1">
                                                            <a href="san-go-cong-nghiep.html">Sàn gỗ công nghiệp</a>
                                                        </div>
                                                        <div class="py-1">
                                                            <a href="san-nhua.html">Sàn nhựa vinyl</a>
                                                        </div>
                                                        <div class="py-1">
                                                            <a href="san-go-gia-re.html">Sàn gỗ công nghiệp giá rẻ</a>
                                                        </div>
                                                        <div class="py-1">
                                                            <a href="san-go-ngoai-troi.html">Sàn gỗ ngoài trời</a>
                                                        </div>
                                                        <div class="py-1">
                                                            <a href="san-go-thanh-ly.html">Sàn gỗ thanh lý</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="suggest-text suggest-text-2">
                                                    <div class="h6 px-3">
                                                        Sản phẩm gợi ý
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown mr-md-3 align-self-md-center   mb-md-0 cart">
                                            <a rel="nofollow" class="d-flex dropdown-cart-trigger" href="{{route('home.checkout_order')}}">
                                                <div class="icon mr-2">
                                                    <img src="images/cart-icone209.svg?v=1.0.0" class="img-fluid mr-2 icon-nav" />
                                                    <div class="amount" id="cart-count">
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
                                                <a rel="nofollow" href="tel: 18000022">
                                                    <div><span class="font-weight-bold h6 ">1800.0022</span></div>
                                                    <div class="small">(Miễn phí) </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="nav-item mr-md-3  align-self-md-center d-flex d-sm-none d-lg-flex"
                                            style="white-space: nowrap;">
                                            <div>
                                                <a href="javascript:void(0)">
                                                    <div><span class="font-weight-bold h6">Blog Nội thất Hưng Gia</span></div>
                                                    <div class="small">& Tin khuyến mại</div>
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
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdownMenuLink">
                                                    <a rel="nofollow" class="dropdown-item select-language" href="javascript:void(0)" data-lang="vi-VN">
                                                        <img src="images/vietname209.svg?v=1.0.0" class="img-fluid mr-1" />
                                                        <span>Tiếng Việt</span>
                                                    </a>
                                                    <a rel="nofollow" class="dropdown-item select-language" href="javascript:void(0)" data-lang="en-US">
                                                        <img src="images/226-united-statese209.svg?v=1.0.0" class="img-fluid mr-1" />
                                                        <span>English</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="local-mobile container d-flex d-md-none small py-2" style="background: #C8EBFD;">
                        <div><i class="fas fa-map-marker-alt mr-2" style="color: #1A468F;"></i>Bạn đang xem sản phẩm tại Hà Nội</div>
                        <a href="#" rel="nofollow" class="btn-link ml-auto" style="text-decoration: underline;" data-toggle="modal" data-target="#modal-khu-vuc">Đổi</a>
                    </div>
                    <section>
                        <section class="bg-fff  pb-1">
                            <div class="menu-fix home">
                                <div class="container position-relative">
                                    <div class="row flex-md-row-reverse">
                                        <div class="col-lg-9 col-md-8 col-12 pl-md-0">
                                            <div class="menu-ngang d-flex justify-content-between small">
                                                <div>
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-12">
                                            <ul class="list-group list-menu-cate d-none d-md-block " style="height: auto;">
                                                <li class="list-group-item active ">
                                                    <a rel="nofollow" href="javascript:;" class="link">
                                                        <img src="images/listView.svg" class="img-fluid mr-2" />Danh mục
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="san-go-cong-nghiep.html" class="link" title="Sàn gỗ công nghiệp">
                                                        <img src="../noithathunggia/uploads/2020/09/07/gocongnghiepe209.png?v=1.0.0"
                                                        class="img-fluid mr-2" alt="Sàn gỗ công nghiệp" />Sàn gỗ công nghiệp
                                                    </a>
                                                    <div class="subcate">
                                                        <ul class="ul-tree-lv-1">
                                                            
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>
                </section>

                <div class="pt-1   ">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-12">
                            </div>
                            <div class="col-lg-6 col-md-8  col-sm-12 col-12 pl-md-0 pr-lg-0 ">
                                <div class="slide-banner-home mb-4">
                                    <div class="swiper-container gallery-top-home">
                                        <!--Thêm slide-->
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="image image-fixed">
                                                    <a href="javascript:void(0)">
                                                        <img src="../noithathunggia/uploads/2020/09/03/he-thong-ban-le-vat-lieu-hoan-thien-tai-kho-Nội thất Hưng Gia-khuyen-mai-thang-9-2020-san-go-woodmane209.jpg?v=1.0.0" class="d-block w-100" alt="Nội thất Hưng Gia.vn">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="image image-fixed">
                                                    <a href="javascript:void(0)">
                                                        <img data-src="https://noithathunggia//uploads/2020/09/03/he-thong-ban-le-vat-lieu-hoan-thien-tai-kho-Nội thất Hưng Gia-khuyen-mai-thang-9-2020-tam-op-nano-timberman.jpg?v=1.0.0" class="d-block w-100 swiper-lazy" alt="Nội thất Hưng Gia.vn">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="image image-fixed">
                                                    <a href="javascript:void(0)">
                                                        <img data-src="https://noithathunggia//uploads/2020/09/03/he-thong-ban-le-vat-lieu-hoan-thien-tai-kho-Nội thất Hưng Gia-khuyen-mai-thang-9-2020-go-nhua-timberman-tbm01p.jpg?v=1.0.0" class="d-block w-100 swiper-lazy" alt="Nội thất Hưng Gia.vn">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="image image-fixed">
                                                    <a href="javascript:void(0)">
                                                        <img data-src="https://noithathunggia//uploads/2020/07/28/he-thong-ban-le-hoan-thien-tai-kho-Nội thất Hưng Gia-khuyen-mai-san-go-duc.png?v=1.0.0" class="d-block w-100 swiper-lazy" alt="Nội thất Hưng Gia.vn">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    <div class="swiper-container gallery-thumbs-home  ">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="box-text">
                                                    <div class="text">
                                                        Khuyến mại đặc biệt sàn gỗ Malaysia WoodMan
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box-text">
                                                    <div class="text">
                                                        Tấm ốp Nano TimberMan giảm 25%
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box-text">
                                                    <div class="text">
                                                        Ốp tường TimberMan TBM01P
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="box-text">
                                                    <div class="text">
                                                        Miễn phí 100% công lắp đặt
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-8 col-sm-12 col-12 mt-md-3 mt-lg-0 ml-auto px-md-0 px-lg-3">
                                <ul class="list-group list-news-right mb-2 mt-3 mt-md-0">
                                    <li class="list-group-item active">Trải nghiệm cùng Nội thất Hưng Gia</li>
                                    <li class="list-group-item">
                                        <a href="javascript:void(0)" title="Khuyến mãi tháng 8">
                                            Khuyến mãi tháng này
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javascript:void(0)" title="Trải nghiệm không gian phòng khách cùng Nội thất Hưng Gia">
                                            Trải nghiệm không gian phòng khách cùng Nội thất Hưng Gia
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javascript:void(0)" title=" Tư vấn chuyên sâu không gian phòng ngủ từ Nội thất Hưng Gia">
                                            Tư vấn chuyên sâu không gian phòng ngủ từ Nội thất Hưng Gia
                                        </a>
                                    </li>
                                </ul>
                                <!--Thêm class d-none d-md-block-->
                                <a href="javascript:void(0)" title="" class="d-none d-md-block">
                                    <img src="../noithathunggia/uploads/2020/07/22/he-thong-ban-le-san-go-vat-lieu-hoan-thien-tai-kho-Nội thất Hưng Gia-san-nhua-hem-khoa-florton-spce209.jpg?v=1.0.0" class="img-fluid mb-2 w-100" />
                                </a>
                                <a href="javascript:void(0)" title="" class="d-none d-md-block">
                                    <img src="../noithathunggia/uploads/2020/07/24/bannere209.png?v=1.0.0" class="img-fluid mb-2 w-100" />
                                </a>
                                <!--Thêm class d-none d-md-block-->
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
                                        Sàn gỗ thanh lý
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="item">
                                    <a href="javascript:void(0)">
                                        <img src="../noithathunggia/uploads/2020/04/28/shopping-bag%20(2)e209.png?v=1.0.0" class="img-fluid mr-2">
                                        Hàng Châu Âu
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
                            <div class="col-xl-8 col-md-8 col-sm-12 col-12">
                                <a href="javascript:void(0)" title="">
                                    <img src="../noithathunggia/uploads/2020/08/10/he-thong-ban-le-san-go-vat-lieu-hoan-thien-tai-kho-Nội thất Hưng Gia-san-go-sieu-chiu-nuoc-Nội thất Hưng Gia-ecofle209.jpg?v=1.0.0" class="lazy w-100 mb-3 mb-md-0" />
                                </a>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12 col-12">
                                <div class="nd-fast-search h-100 w-100">
                                    <div class="txt-1-fastsot">Tìm kiếm nhanh</div>
                                    <div class="main-fast-search">
                                        <div class="row">
                                            <div class="col-12 mb-2">
                                                <select class="form-control mb-2 mb-lg-0 filter-select zone-value">
                                                    <option hidden value="0">Bạn muốn mua gì</option>
                                                    <option value="15">Sàn gỗ công nghiệp</option>
                                                    <option value="38">Sàn gỗ tự nhiên</option>
                                                    <option value="34">Sàn nhựa vinyl</option>
                                                    <option value="79">Sàn gỗ ngoài trời</option>
                                                    <option value="43">Phụ kiện</option>
                                                    <option value="89">Sàn gỗ thanh lý</option>
                                                    <option value="281">Trang trí nội thất</option>
                                                    <option value="367">Trang trí ngoại thất</option>
                                                    <option value="594">Đồ gia dụng</option>
                                                    <option value="806">Sàn tre</option>
                                                </select>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <select class="form-control mb-2 mb-lg-0 filter-select manufacture-value">
                                                    <option hidden value="0">Thương hiệu</option>
                                                    <option value="1">Janmi</option>
                                                    <option value="2">Florton</option>
                                                    <option value="3">DongWha</option>
                                                    <option value="4">ThaiGreen</option>
                                                    <option value="5">Kronotex</option>
                                                    <option value="6">Newsky</option>
                                                    <option value="7">Classen</option>
                                                    <option value="8">wineo</option>
                                                    <option value="10">Woodman</option>
                                                    <option value="11">Thaixin</option>
                                                    <option value="12">Alsafloor</option>
                                                    <option value="13">Masfloor</option>
                                                    <option value="14">FloorArt</option>
                                                    <option value="15">ThaiRoyal</option>
                                                    <option value="16">Kendax</option>
                                                    <option value="17">Hornitex</option>
                                                    <option value="18">TimberMan</option>
                                                    <option value="19">Nội thất Hưng Gia Floor</option>
                                                    <option value="20">Ecofloor</option>
                                                    <option value="21">Kostlich</option>
                                                </select>
                                            </div>
                                            <div class="col-6 mb-2">
                                                <select class="form-control mb-2 mb-lg-0 filter-select range-price">
                                                    <option hidden value="">Khung giá</option>
                                                    <option value="">Tất cả</option>
                                                    <option value="0-100000">Từ 0 - 100.000đ</option>
                                                    <option value="200000-300000">Từ 200.000 - 300.000đ</option>
                                                    <option value="300000-400000">Từ 300.000 - 400.000đ</option>
                                                    <option value="400000-600000">Từ 400.000 - 600.000đ</option>
                                                    <option value="600000-20000000">Từ 600.000 trở lên</option>
                                                </select>
                                            </div>
                                            <div class="col-6 margin-0-auto">
                                                <button class="btn btn-save mb-2 mb-md-0 filter-home w-100" type="button">Tìm kiếm</button>
                                            </div>
                                        </div>
                                    </div>
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
                                            <a href="danh-muc/san-pham-ban-chay-2020.html" class="link-view-more">
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
                                                    <div class="tag-1">
                                                    </div>
                                                    <div class="image">
                                                        <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}"><img src="{{$product->getImage()}}" class="img-fluid lazy" alt="Sàn gỗ WOODMAN O127" /></a>
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
                                                            <?php echo($product->price)?>
                                                            @else
                                                            <?php echo($product->sale_price)?>
                                                            @endif 
                                                            đ/ m2
                                                        </div>
                                                        <div class="price-old">
                                                            @if($product->sale_price!=0)
                                                            <?php echo($product->price .' đ/ m2')?>
                                                            @else
                                                            <?php echo('')?>
                                                            @endif
                                                        </div>
                                                        @foreach($product->attributes as $key =>$attributes)
                                                        <div class="size small mb-1">
                                                            Kích thước: {!!$attributes->title!!} mm
                                                        </div>
                                                        @endforeach
                                                        <div class="review d-flex">
                                                            <div class="color-FFAB1B mr-2">
                                                                4,0/5<i class="fas fa-star ml-1"></i>
                                                            </div>
                                                            <div class="color-828282">
                                                                1 đánh giá
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
                                            <a href="google.com" class="h5 font-weight-bold ">SÀN GỖ CÔNG NGHIỆP</a>
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
                                                        <div class="swiper-slide">
                                                            <div>
                                                                <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1486">Sàn Gỗ công nghiệp<br>bán chạy </a>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div>
                                                                <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1456">Malaysia</a>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div>
                                                                <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1427">Việt Nam</a>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div>
                                                                <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1457">Sàn Đức</a>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div>
                                                                <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1454">Hàn quốc</a>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div>
                                                                <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1424">Sàn gỗ EcoFloor</a>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div>
                                                                <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1455">Thái Lan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--menu pc end-->
                                            </div>
                                            <div class=" align-self-center  ">
                                                <a href="google.com.html" class="link-view-more url-old-link">Xem tất cả</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_binding_product">
                                        <div class="set-total" data-total="8" data-id="1486" style="display:none"></div>
                                        <div class="row no-gutters mb-3 mb-md-0">
                                            @foreach($industry as $key => $product)
                                            @if($key == 1)
                                            @break
                                            @endif
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                <div class="item-product item-product-large">
                                                    <div class="image">
                                                        <a href="san-go-janmi-o121-12mm.html">
                                                            <img src="{{$product->getImage()}}" style="height: 300px" class="img-fluid lazy" alt="Sàn gỗ JANMI O121 - 12mm" />
                                                        </a>
                                                    </div>
                                                    <div class="py-1">
                                                        <h5 class="title">
                                                        <a href="san-go-janmi-o121-12mm.html" title="Sàn gỗ JANMI O121 - 12mm">
                                                            {!!$product->title!!}
                                                        </a>
                                                        </h5>
                                                        <div class="price-new">
                                                            495.000đ đ / m2
                                                        </div>
                                                        <div class="size small mb-1">
                                                            Kích thước: 12    x    115    x    1283 mm
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
                                            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="row no-gutters h-100 ">
                                                    @foreach($industry as $key => $product)
                                                    @if($key == 0 || $key == 1)
                                                    @continue
                                                    @endif
                                                    @if($key == 5)
                                                    @break
                                                    @endif
                                                    <div class="col-md-4 col-sm-4 col-6 ">
                                                        <div class="item-product" data-id="95211" data-properties="">
                                                            <div class="tag-1">
                                                            </div>
                                                            <div class="image">
                                                                <a href="san-go-florton-fl180805.html"><img src="{{$product->getImage()}}" class="lazy img-fluid" alt="Sàn gỗ Florton FL180805" /></a>
                                                                <div class="tag-2">
                                                                    <img src="" class="img-fluid tag-2-thumb" />
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <h5 class="title">
                                                                <a href="san-go-florton-fl180805.html" title="Sàn gỗ Florton FL180805">
                                                                    {!!$product->title!!}
                                                                </a>
                                                                </h5>
                                                                <div class="price-new">
                                                                    155.000đ đ / m2
                                                                </div>
                                                                <div class="size small mb-1">
                                                                    Kích thước: 8    x    146    x    1221 mm
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
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            @foreach($industry as $key => $product)
                                            @if($key == 0)
                                            @continue
                                            @endif
                                            @if($key == 2)
                                            @break
                                            @endif
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                <div class="item-product item-product-large">
                                                    <div class="image">
                                                        <a href="san-go-wineo-rockngo-la149sysv4.html">
                                                            <img src="{{$product->getImage()}}" style=" height: 300px"class="lazy img-fluid" alt="Sàn gỗ WINEO ROCK&#x27;N&#x27;GO LA149SYSV4" />
                                                        </a>
                                                    </div>
                                                    <div class="py-1">
                                                        <h5 class="title">
                                                        <a href="san-go-wineo-rockngo-la149sysv4.html">
                                                            {!!$product->title!!}
                                                        </a>
                                                        </h5>
                                                        <div class="price-new">
                                                            580.000đ đ / m2
                                                        </div>
                                                        <div class="size small mb-1">
                                                            Kích thước: 9    x    195    x    1288 mm
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
                                            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="row no-gutters h-100 ">
                                                    @foreach($industry as $key => $product)
                                                    @if($key < 5)
                                                    @continue
                                                    @endif
                                                    <div class="col-md-4 col-sm-4 col-6 ">
                                                        <div class="item-product" data-id="72193" data-properties="">
                                                            <div class="tag-1">
                                                            </div>
                                                            <div class="image">
                                                                <a href="san-go-cot-xanh-aqua-Nội thất Hưng Gia-jhg1207.html"><img src="{{$product->getImage()}}" class="lazy img-fluid" alt="Sàn gỗ Nội thất Hưng Gia siêu chịu nước - JHG1207" /></a>
                                                                <div class="tag-2">
                                                                    <img src="" class="img-fluid tag-2-thumb" />
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <h5 class="title">
                                                                <a href="san-go-cot-xanh-aqua-Nội thất Hưng Gia-jhg1207.html" title="Sàn gỗ Nội thất Hưng Gia siêu chịu nước - JHG1207">
                                                                    {!!$product->title!!}
                                                                </a>
                                                                </h5>
                                                                <div class="price-new">
                                                                    325.000đ đ / m2
                                                                </div>
                                                                <div class="size small mb-1">
                                                                    Kích thước: 12    x    114    x    1221 mm
                                                                </div>
                                                                <div class="review d-flex">
                                                                    <div class="color-FFAB1B mr-2">
                                                                        5,0/5<i class="fas fa-star ml-1"></i>
                                                                    </div>
                                                                    <div class="color-828282">
                                                                        1 đánh giá
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
                                    <div class="swiper-slide">
                                        <div class="image">
                                            <img src="https://noithathunggia//uploads/2020/09/04/he-thong-ban-le-vat-lieu-hoan-thien-tai-kho-Nội thất Hưng Gia-khuyen-mai-thang-8-2020-san-go-cot-xanh-sieu-chi.webp?v=1.0.0" class="img-fluid" alt="" />
                                            <a href="san-go-viet-nam-sieu-chiu-nuoc.html" class="text text-uppercase">
                                                <small></small>
                                                <h4 class="font-weight-bold"></h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image">
                                            <img src="../noithathunggia/uploads/2020/08/10/banner-Nội thất Hưng Gia-km1e209.jpg?v=1.0.0" class="img-fluid" alt="" />
                                            <a href="san-go-xuong-ca-Nội thất Hưng Gia.html" class="text text-uppercase">
                                                <small></small>
                                                <h4 class="font-weight-bold"></h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image">
                                            <img src="../noithathunggia/uploads/2020/08/10/banner-Nội thất Hưng Gia-km5e209.jpg?v=1.0.0" class="img-fluid" alt="" />
                                            <a href="san-go-floorart.html" class="text text-uppercase">
                                                <small>CTKM3</small>
                                                <h4 class="font-weight-bold"></h4>
                                            </a>
                                        </div>
                                    </div>
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
                                            <a href="san-go-tu-nhien.html" class="h5 font-weight-bold ">SÀN GỖ TỰ NHIÊN</a>
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
                                                        <div class="swiper-slide">
                                                            <div>
                                                                <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1483">Sàn gỗ tự nhiên<br>bán chạy </a>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div>
                                                                <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1449">Gỗ gõ đỏ</a>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div>
                                                                <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1450">Gỗ Giáng hương</a>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div>
                                                                <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1448">Gỗ Sồi</a>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div>
                                                                <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1447">Gỗ Teak </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--menu pc end-->
                                            </div>
                                            <div class=" align-self-center  ">
                                                <a href="javascript:void(0)" class="link-view-more url-old-link">Xem tất cả</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_binding_product">
                                        <div class="set-total" data-total="8" data-id="1483" style="display:none"></div>
                                        <div class="row no-gutters mb-3 mb-md-0">
                                            @foreach($nature as $key => $product)
                                            @if($key == 1)
                                            @break
                                            @endif
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                <div class="item-product item-product-large">
                                                    <div class="image">
                                                        <a href="san-go-soi-750-x-90mm.html">
                                                            <img src="{{$product->getImage()}}" style="height: 300px" class="img-fluid lazy" alt="Sàn gỗ Sồi 750 x 90mm" />
                                                        </a>
                                                    </div>
                                                    <div class="py-1">
                                                        <h5 class="title">
                                                        <a href="san-go-soi-750-x-90mm.html" title="Sàn gỗ Sồi 750 x 90mm">
                                                            Sàn gỗ Sồi 750 x 90mm
                                                        </a>
                                                        </h5>
                                                        <div class="price-new">
                                                            830.000đ đ / m2
                                                        </div>
                                                        <div class="size small mb-1">
                                                            Kích thước: 15 x 90 x 750 mm
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
                                            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="row no-gutters h-100 ">
                                                    @foreach($nature as $key => $product)
                                                    @if($key == 0 || $key == 1)
                                                    @continue
                                                    @endif
                                                    @if($key == 5)
                                                    @break
                                                    @endif
                                                    <div class="col-md-4 col-sm-4 col-6 ">
                                                        <div class="item-product" data-id="42173" data-properties="">
                                                            <div class="tag-1">
                                                            </div>
                                                            <div class="image">
                                                                <a href="san-go-oc-cho-600mm.html"><img src="{{$product->getImage()}}" class="lazy img-fluid" alt="Sàn gỗ Óc chó 600mm" /></a>
                                                                <div class="tag-2">
                                                                    <img src="" class="img-fluid tag-2-thumb" />
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <h5 class="title">
                                                                <a href="san-go-oc-cho-600mm.html" title="Sàn gỗ Óc chó 600mm">
                                                                    {!!$product->title!!}
                                                                </a>
                                                                </h5>
                                                                <div class="price-new">
                                                                    1.700.000đ đ / m2
                                                                </div>
                                                                <div class="size small mb-1">
                                                                    Kích thước: 15 x 90 x 600 mm
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
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            @foreach($industry as $key => $product)
                                            @if($key == 0)
                                            @continue
                                            @endif
                                            @if($key == 2)
                                            @break
                                            @endif
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                                <div class="item-product item-product-large">
                                                    <div class="image">
                                                        <a href="san-go-giang-huong-fjl.html">
                                                            <img src="{{$product->getImage()}}" style="height: 300px" class="lazy img-fluid" alt="Sàn gỗ Giáng Hương FJL" />
                                                        </a>
                                                    </div>
                                                    <div class="py-1">
                                                        <h5 class="title">
                                                        <a href="san-go-giang-huong-fjl.html" title="Sàn gỗ Giáng Hương FJL">
                                                            {!!$product->title!!}
                                                        </a>
                                                        </h5>
                                                        <div class="price-new">
                                                            1.250.000đ đ / m2
                                                        </div>
                                                        <div class="size small mb-1">
                                                            Kích thước: 15 x 90-150 x 1830 mm
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
                                            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="row no-gutters h-100 ">
                                                    @foreach($industry as $key => $product)
                                                    @if($key < 5)
                                                    @continue
                                                    @endif
                                                    <div class="col-md-4 col-sm-4 col-6 ">
                                                        <div class="item-product" data-id="14325" data-properties="">
                                                            <div class="tag-1">
                                                            </div>
                                                            <div class="image">
                                                                <a href="san-go-giang-huong-900-x-120mm.html"><img src="{{$product->getImage()}}" data-src="https://noithathunggia//uploads/thumb/2017/08/san-go-tu-nhien-giang-huong-900-120mm.jpg?v=1.0.0" class="lazy img-fluid" alt="Sàn gỗ Giáng Hương 900 x 120mm" /></a>
                                                                <div class="tag-2">
                                                                    <img src="#" class="img-fluid tag-2-thumb" />
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <h5 class="title">
                                                                <a href="san-go-giang-huong-900-x-120mm.html" title="Sàn gỗ Giáng Hương 900 x 120mm">
                                                                    Sàn gỗ Giáng Hương 900 x 120mm
                                                                </a>
                                                                </h5>
                                                                <div class="price-new">
                                                                    2.650.000đ đ / m2
                                                                </div>
                                                                <div class="size small mb-1">
                                                                    Kích thước: 15 x 120 x 900 mm
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
                    <!--Hang thanh ly
                    -->
                    <section class="my-4">
                        <div class="container ">
                            <div class="bg-fff pt-3 pb-2 px-2 border-r-4" style="background: url(images/change/bg-flash.jpg) no-repeat top center;background-size: cover;">
                                <div class="px-3">
                                    <div class="row mb-3 no-gutters ">
                                        <div class="col-12 d-flex flex-wrap">
                                            <a href="#" class="align-self-center h5 mr-3 text-uppercase mb-0" style="color: #fff;">
                                                <b>Hàng Thanh lý</b>
                                            </a>
                                            <a href="danh-muc/hang-thanh-l%c3%bd.html" class="btn btn-outline-light btn-sm px-lg-4 align-self-center">
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
                                                    <div class="tag-1">
                                                    </div>
                                                    <div class="image">
                                                        <a href="san-go-viet-nam-thanh-ly-tl109.html"><img src="{{$product->getImage()}}" class="img-fluid lazy" alt="Sàn gỗ Việt Nam thanh lý TL109" /></a>
                                                        <div class="tag-2">
                                                            <img src="" class="img-fluid tag-2-thumb" />
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <h5 class="title">
                                                        <a href="san-go-viet-nam-thanh-ly-tl109.html" title="Sàn gỗ Việt Nam thanh lý TL109">
                                                            {!!$product->title!!}
                                                        </a>
                                                        </h5>
                                                        <div class="price-new">
                                                            98.000đ đ / m2
                                                        </div>
                                                        <div class="price-old-none">
                                                        <pre>&nbsp;</pre>
                                                    </div>
                                                    <div class="size small mb-1">
                                                        Kích thước: 8 x 127 x 1225 mm
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
                                        <a href="san-nhua.html" class="h5 font-weight-bold ">SÀN NHỰA</a>
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
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1485">Sàn nhựa bán chạy</a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1452">Florton SPC hèm khóa</a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1444">Ecofloor Vinyl</a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1428">Sàn Railflex</a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1451">Sàn Galaxy</a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1453">Sàn nhựa Mines</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--menu pc end-->
                                        </div>
                                        <div class=" align-self-center  ">
                                            <a href="javascript:void(0)" class="link-view-more url-old-link">Xem tất cả</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="_binding_product">
                                    <div class="set-total" data-total="8" data-id="1485" style="display:none"></div>
                                    <div class="row no-gutters mb-3 mb-md-0">
                                        @foreach($plastic as $key => $product)
                                        @if($key == 1)
                                        @break
                                        @endif
                                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                            <div class="item-product item-product-large">
                                                <div class="image">
                                                    <a href="san-nhua-ecofloor-vinyl-fy7043-1.html">
                                                        <img src="{{$product->getImage()}}" class="img-fluid lazy" style="height: 300px" alt="Sàn nhựa ECOFLOOR VINYL FY7043-1" />
                                                    </a>
                                                </div>
                                                <div class="py-1">
                                                    <h5 class="title">
                                                    <a href="san-nhua-ecofloor-vinyl-fy7043-1.html" title="Sàn nhựa ECOFLOOR VINYL FY7043-1">
                                                        {!!$product->title!!}
                                                    </a>
                                                    </h5>
                                                    <div class="price-new">
                                                        98.000đ đ / m2
                                                    </div>
                                                    <div class="price-old">
                                                        125.000đđ
                                                    </div>
                                                    <div class="size small mb-1">
                                                        Kích thước: 2 x 152 x 914 mm
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
                                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                            <div class="row no-gutters h-100 ">
                                                @foreach($plastic as $key => $product)
                                                @if($key == 0 || $key == 1)
                                                @continue
                                                @endif
                                                @if($key == 5)
                                                @break
                                                @endif
                                                <div class="col-md-4 col-sm-4 col-6 ">
                                                    <div class="item-product" data-id="26375" data-properties="">
                                                        <div class="tag-1">
                                                        </div>
                                                        <div class="image">
                                                            <a href="san-nhua-ecofloor-vinyl-fy6029-3.html"><img src="{{$product->getImage()}}" class="lazy img-fluid" alt="Sàn nhựa ECOFLOOR VINYL FY6029-3" /></a>
                                                            <div class="tag-2">
                                                                <img src="" class="img-fluid tag-2-thumb" />
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <h5 class="title">
                                                            <a href="san-nhua-ecofloor-vinyl-fy6029-3.html" title="Sàn nhựa ECOFLOOR VINYL FY6029-3">
                                                                {!!$product->title!!}
                                                            </a>
                                                            </h5>
                                                            <div class="price-new">
                                                                125.000đ đ / m2
                                                            </div>
                                                            <div class="size small mb-1">
                                                                Kích thước: 2 x 152 x 914 mm
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
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        @foreach($plastic as $key => $product)
                                        @if($key == 0)
                                        @continue
                                        @endif
                                        @if($key == 2)
                                        @break
                                        @endif
                                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                            <div class="item-product item-product-large">
                                                <div class="image">
                                                    <a href="san-nhua-hem-khoa-florton-spc-fs4809.html">
                                                        <img src="{{$product->getImage()}}" class="lazy img-fluid" style="height: 300px" alt="Sàn nhựa hèm khóa Florton SPC FS4809" />
                                                    </a>
                                                </div>
                                                <div class="py-1">
                                                    <h5 class="title">
                                                    <a href="san-nhua-hem-khoa-florton-spc-fs4809.html" title="Sàn nhựa hèm khóa Florton SPC FS4809">
                                                        {!!$product->title!!}
                                                    </a>
                                                    </h5>
                                                    <div class="price-new">
                                                        265.000đ đ / m2
                                                    </div>
                                                    <div class="size small mb-1">
                                                        Kích thước: 4 x 153 x 1224 mm
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
                                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                            <div class="row no-gutters h-100 ">
                                                @foreach($plastic as $key => $product)
                                                @if($key < 5)
                                                @continue
                                                @endif
                                                <div class="col-md-4 col-sm-4 col-6 ">
                                                    <div class="item-product" data-id="93737" data-properties="">
                                                        <div class="tag-1">
                                                        </div>
                                                        <div class="image">
                                                            <a href="san-nhua-hem-khoa-florton-spc-fs4803.html"><img src="{{$product->getImage()}}" data-src="https://noithathunggia//uploads/thumb/2020/03/san-nhua-hem-khoa-florton-spc-fs4803-1.jpg?v=1.0.0" class="lazy img-fluid" alt="Sàn nhựa hèm khóa Florton SPC FS4803" /></a>
                                                            <div class="tag-2">
                                                                <img src="" class="img-fluid tag-2-thumb" />
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <h5 class="title">
                                                            <a href="san-nhua-hem-khoa-florton-spc-fs4803.html" title="Sàn nhựa hèm khóa Florton SPC FS4803">
                                                                {!!$product->title!!}
                                                            </a>
                                                            </h5>
                                                            <div class="price-new">
                                                                265.000đ đ / m2
                                                            </div>
                                                            <div class="size small mb-1">
                                                                Kích thước: 4 x 153 x 1224 mm
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
                <!--ĐỒ gia dụng-->
                <section class="my-4 san-go-nb">
                    <div class="container ">
                        <div class="bg-fff pt-3 border-r-4" >
                            <div class="container">
                                <div class="row mb-3 no-gutters ">
                                    <div class="col-md-3 col-12 mb-2 mb-md-0">
                                        <a href="san-go-ngoai-troi.html" class="h5 font-weight-bold ">SÀN GỖ NGOÀI TRỜI</a>
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
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1488">Sàn gỗ ngoài trời<br>bán chạy </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1462">Sàn Timberman</a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1460">Sàn sân vườn</a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1459">Sàn bể bơi</a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1461">Sàn JANWOOD</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--menu pc end-->
                                        </div>
                                        <div class=" align-self-center  ">
                                            <a href="javascript:void(0)" class="link-view-more url-old-link">Xem tất cả</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="_binding_product">
                                    <div class="set-total" data-total="11" data-id="1488" style="display:none"></div>
                                    <div class="row no-gutters mb-3 mb-md-0">
                                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                            <div class="item-product item-product-large">
                                                <div class="image">
                                                    <a href="san-go-ngoai-troi-timberman-tm140k25-wood-4-lo.html">
                                                        <img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/2020/07/08/he-thong-ban-le-san-go-vat-lieu-hoan-thien-tai-kho-Nội thất Hưng Gia-banner-san-go-ngoai-troi-timberman-tbm140k25--wood.jpg?v=1.0.0" class="img-fluid lazy" alt="Sàn gỗ ngoài trời Timberman TBM01W2 Wood (4 lỗ)" />
                                                    </a>
                                                </div>
                                                <div class="py-1">
                                                    <h5 class="title">
                                                    <a href="san-go-ngoai-troi-timberman-tm140k25-wood-4-lo.html" title="Sàn gỗ ngoài trời Timberman TBM01W2 Wood (4 lỗ)">
                                                        Sàn gỗ ngoài trời Timberman TBM01W2 Wood (4 lỗ)
                                                    </a>
                                                    </h5>
                                                    <div class="price-new">
                                                        90.000đ đ / M dài
                                                    </div>
                                                    <div class="size small mb-1">
                                                        Kích thước: 25 x 140 x 2200 mm
                                                    </div>
                                                    <div class="review d-flex">
                                                        <div class="color-FFAB1B mr-2">
                                                            1,0/5<i class="fas fa-star ml-1"></i>
                                                        </div>
                                                        <div class="color-828282">
                                                            1 đánh giá
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                            <div class="row no-gutters h-100 ">
                                                <div class="col-md-4 col-sm-4 col-6 ">
                                                    <div class="item-product" data-id="25648" data-properties="">
                                                        <div class="tag-1">
                                                        </div>
                                                        <div class="image">
                                                            <a href="san-go-ngoai-troi-timberman-tm140k25-dark-grey-4-lo.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2017/09/tam-lat-san-ngoai-troi-timberman-tm140k25-dark-grey-.jpg?v=1.0.0" class="lazy img-fluid" alt="Sàn gỗ ngoài trời Timberman TM140K25 Dark Grey (4 lỗ)" /></a>
                                                            <div class="tag-2">
                                                                <img src="#" class="img-fluid tag-2-thumb" />
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <h5 class="title">
                                                            <a href="san-go-ngoai-troi-timberman-tm140k25-dark-grey-4-lo.html" title="Sàn gỗ ngoài trời Timberman TM140K25 Dark Grey (4 lỗ)">
                                                                Sàn gỗ ngoài trời Timberman TM140K25 Dark Grey (4 lỗ)
                                                            </a>
                                                            </h5>
                                                            <div class="price-new">
                                                                90.000đ đ / M dài
                                                            </div>
                                                            <div class="size small mb-1">
                                                                Kích thước: 25 x 140 x 2200 mm
                                                            </div>
                                                            <div class="review d-flex">
                                                                <div class="color-FFAB1B mr-2">
                                                                    5,0/5<i class="fas fa-star ml-1"></i>
                                                                </div>
                                                                <div class="color-828282">
                                                                    1 đánh giá
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-6 ">
                                                    <div class="item-product" data-id="41502" data-properties="">
                                                        <div class="tag-1">
                                                        </div>
                                                        <div class="image">
                                                            <a href="san-go-ngoai-troi-timberman-ban-nguyet-tm140k23.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2018/01/san-go-ngoai-troi-timberman-ban-nguyet-tm140k23.jpg?v=1.0.0" class="lazy img-fluid" alt="Sàn gỗ ngoài trời Timberman bán nguyệt TM140K23" /></a>
                                                            <div class="tag-2">
                                                                <img src="#" class="img-fluid tag-2-thumb" />
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <h5 class="title">
                                                            <a href="san-go-ngoai-troi-timberman-ban-nguyet-tm140k23.html" title="Sàn gỗ ngoài trời Timberman bán nguyệt TM140K23">
                                                                Sàn gỗ ngoài trời Timberman bán nguyệt TM140K23
                                                            </a>
                                                            </h5>
                                                            <div class="price-new">
                                                                135.000đ đ / M dài
                                                            </div>
                                                            <div class="size small mb-1">
                                                                Kích thước: 23 x 140 x 2200 mm
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
                                                <div class="col-md-4 col-sm-4 col-6 d-none d-sm-block">
                                                    <div class="item-product" data-id="54316" data-properties="">
                                                        <div class="tag-1">
                                                        </div>
                                                        <div class="image">
                                                            <a href="san-go-ngoai-troi-timberman-tm105k30-coffee.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2018/05/san-go-ngoai-troi-timberman-105k30-coffee.jpg?v=1.0.0" class="lazy img-fluid" alt="Sàn gỗ ngoài trời TimberMan TM105K30 - Coffee" /></a>
                                                            <div class="tag-2">
                                                                <img src="#" class="img-fluid tag-2-thumb" />
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <h5 class="title">
                                                            <a href="san-go-ngoai-troi-timberman-tm105k30-coffee.html" title="Sàn gỗ ngoài trời TimberMan TM105K30 - Coffee">
                                                                Sàn gỗ ngoài trời TimberMan TM105K30 - Coffee
                                                            </a>
                                                            </h5>
                                                            <div class="price-new">
                                                                98.000đ đ / M dài
                                                            </div>
                                                            <div class="size small mb-1">
                                                                Kích thước: 30 x 105 x 2200 mm
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                            <div class="item-product item-product-large">
                                                <div class="image">
                                                    <a href="san-go-ngoai-troi-timberman-tm140k25-coffee-4-lo.html">
                                                        <img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/2020/07/08/he-thong-ban-le-san-go-vat-lieu-hoan-thien-tai-kho-Nội thất Hưng Gia-banner-san-go-ngoai-troi-timberman-tbm140k25.jpg?v=1.0.0" class="lazy img-fluid" alt="Sàn gỗ ngoài trời Timberman TBM01W1 Coffee (4 lỗ)" />
                                                    </a>
                                                </div>
                                                <div class="py-1">
                                                    <h5 class="title">
                                                    <a href="san-go-ngoai-troi-timberman-tm140k25-coffee-4-lo.html" title="Sàn gỗ ngoài trời Timberman TBM01W1 Coffee (4 lỗ)">
                                                        Sàn gỗ ngoài trời Timberman TBM01W1 Coffee (4 lỗ)
                                                    </a>
                                                    </h5>
                                                    <div class="price-new">
                                                        90.000đ đ / M dài
                                                    </div>
                                                    <div class="size small mb-1">
                                                        Kích thước: 25 x 140 x 2200 mm
                                                    </div>
                                                    <div class="review d-flex">
                                                        <div class="color-FFAB1B mr-2">
                                                            4,5/5<i class="fas fa-star ml-1"></i>
                                                        </div>
                                                        <div class="color-828282">
                                                            2 đánh giá
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                            <div class="row no-gutters h-100 ">
                                                <div class="col-md-4 col-sm-4 col-6 ">
                                                    <div class="item-product" data-id="71601" data-properties="">
                                                        <div class="tag-1">
                                                        </div>
                                                        <div class="image">
                                                            <a href="san-go-ngoai-troi-timberman-nhap-khau-tbm06w2.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2020/08/15/tam-lat-san-timberman-tbm06w2.jpg?v=1.0.0" class="lazy img-fluid" alt="Sàn gỗ ngoài trời Timberman Nhập khẩu TBM06W2" /></a>
                                                            <div class="tag-2">
                                                                <img src="#" class="img-fluid tag-2-thumb" />
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <h5 class="title">
                                                            <a href="san-go-ngoai-troi-timberman-nhap-khau-tbm06w2.html" title="Sàn gỗ ngoài trời Timberman Nhập khẩu TBM06W2">
                                                                Sàn gỗ ngoài trời Timberman Nhập khẩu TBM06W2
                                                            </a>
                                                            </h5>
                                                            <div class="price-new">
                                                                98.000đ đ / M dài
                                                            </div>
                                                            <div class="size small mb-1">
                                                                Kích thước: 25 x 140 x 2200 mm
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
                                                <div class="col-md-4 col-sm-4 col-6 ">
                                                    <div class="item-product" data-id="79054" data-properties="">
                                                        <div class="tag-1">
                                                        </div>
                                                        <div class="image">
                                                            <a href="san-go-ngoai-troi-timberman-nhap-khautm140k25-coffee-4-lo.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2020/08/05/san-go-ngoai-troi-timberman-tbm140k25-nhap-khau.jpg?v=1.0.0" class="lazy img-fluid" alt="Sàn gỗ ngoài trời Timberman Nhập Khẩu TM140K25 Coffee (4 lỗ)" /></a>
                                                            <div class="tag-2">
                                                                <img src="#" class="img-fluid tag-2-thumb" />
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <h5 class="title">
                                                            <a href="san-go-ngoai-troi-timberman-nhap-khautm140k25-coffee-4-lo.html" title="Sàn gỗ ngoài trời Timberman Nhập Khẩu TM140K25 Coffee (4 lỗ)">
                                                                Sàn gỗ ngoài trời Timberman Nhập Khẩu TM140K25 Coffee (4 lỗ)
                                                            </a>
                                                            </h5>
                                                            <div class="price-new">
                                                                98.000đ đ / M dài
                                                            </div>
                                                            <div class="size small mb-1">
                                                                Kích thước: 25 x 140 x 2200 mm
                                                            </div>
                                                            <div class="review d-flex">
                                                                <div class="color-FFAB1B mr-2">
                                                                    2,0/5<i class="fas fa-star ml-1"></i>
                                                                </div>
                                                                <div class="color-828282">
                                                                    1 đánh giá
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-6 d-none d-sm-block">
                                                    <div class="item-product" data-id="79160" data-properties="">
                                                        <div class="tag-1">
                                                        </div>
                                                        <div class="image">
                                                            <a href="san-go-ngoai-troi-dac-timberman-nhap-khau-tm140s25.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2020/08/06/san-go-ngoài-troi-timberman-dac-nhieu-ranh-nho-tbm06w1059.jpg?v=1.0.0" class="lazy img-fluid" alt="Sàn gỗ ngoài trời đặc Timberman Nhập Khẩu TBM06W1059" /></a>
                                                            <div class="tag-2">
                                                                <img src="#" class="img-fluid tag-2-thumb" />
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <h5 class="title">
                                                            <a href="san-go-ngoai-troi-dac-timberman-nhap-khau-tm140s25.html" title="Sàn gỗ ngoài trời đặc Timberman Nhập Khẩu TBM06W1059">
                                                                Sàn gỗ ngoài trời đặc Timberman Nhập Khẩu TBM06W1059
                                                            </a>
                                                            </h5>
                                                            <div class="price-new">
                                                                135.000đ đ / M dài
                                                            </div>
                                                            <div class="price-old">
                                                                165.000đđ
                                                            </div>
                                                            <div class="size small mb-1">
                                                                Kích thước: 25 x 140 x 2200 mm
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
                <section class="my-4 san-go-nb">
                    <div class="container ">
                        <div class="bg-fff pt-3 border-r-4" >
                            <div class="container">
                                <div class="row mb-3 no-gutters ">
                                    <div class="col-md-3 col-12 mb-2 mb-md-0">
                                        <a href="trang-tri-noi-that.html" class="h5 font-weight-bold ">TRANG TRÍ NỘI THẤT</a>
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
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1493">Trang trí nội thất<br>bán chạy </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1491">Ốp Nano TimberMan</a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1481">Giấy dán tường</a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1489">ốp tường trương nhà</a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1463">Thảm trải sàn 2020</a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div>
                                                            <a href="javascript:void(0)" class="link-view-more font-weight-normal tab-region" data-region-id="1433">Rèm cửa HOT</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--menu pc end-->
                                        </div>
                                        <div class=" align-self-center  ">
                                            <a href="javascript:void(0)" class="link-view-more url-old-link">Xem tất cả</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="_binding_product">
                                    <div class="set-total" data-total="8" data-id="1493" style="display:none"></div>
                                    <div class="row no-gutters mb-3 mb-md-0">
                                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                            <div class="item-product item-product-large">
                                                <div class="image">
                                                    <a href="op-tuong-pvc-gia-da-jnd062799.html">
                                                        <img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/2020/07/14/he-thong-ban-le-san-go-vat-lieu-hoan-thien-tai-kho-Nội thất Hưng Gia-tam-op-tuong-pvc-gia-da-jnd62799.jpg?v=1.0.0" class="img-fluid lazy" alt="Ốp tường PVC giả đá JND062799" />
                                                    </a>
                                                </div>
                                                <div class="py-1">
                                                    <h5 class="title">
                                                    <a href="op-tuong-pvc-gia-da-jnd062799.html" title="Ốp tường PVC giả đá JND062799">
                                                        Ốp tường PVC giả đá JND062799
                                                    </a>
                                                    </h5>
                                                    <div class="price-new">
                                                        295.000đ đ / Tấm
                                                    </div>
                                                    <div class="size small mb-1">
                                                        Kích thước: 2.7 x 2440 x 1220 mm
                                                    </div>
                                                    <div class="review d-flex">
                                                        <div class="color-FFAB1B mr-2">
                                                            4,0/5<i class="fas fa-star ml-1"></i>
                                                        </div>
                                                        <div class="color-828282">
                                                            2 đánh giá
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                            <div class="row no-gutters h-100 ">
                                                <div class="col-md-4 col-sm-4 col-6 ">
                                                    <div class="item-product" data-id="90808" data-properties="">
                                                        <div class="tag-1">
                                                        </div>
                                                        <div class="image">
                                                            <a href="tam-op-nano-timerman-tbm14p94020.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2019/12/tam-op-nano-timberman-tbm14p94020.jpg?v=1.0.0" class="lazy img-fluid" alt="Tấm ốp Nano TimerMan TBM14P94020" /></a>
                                                            <div class="tag-2">
                                                                <img src="#" class="img-fluid tag-2-thumb" />
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <h5 class="title">
                                                            <a href="tam-op-nano-timerman-tbm14p94020.html" title="Tấm ốp Nano TimerMan TBM14P94020">
                                                                Tấm ốp Nano TimerMan TBM14P94020
                                                            </a>
                                                            </h5>
                                                            <div class="price-new">
                                                                380.000đ đ / m2
                                                            </div>
                                                            <div class="size small mb-1">
                                                                Kích thước: 9 x 400 x 3000 mm
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
                                                <div class="col-md-4 col-sm-4 col-6 ">
                                                    <div class="item-product" data-id="90817" data-properties="">
                                                        <div class="tag-1">
                                                        </div>
                                                        <div class="image">
                                                            <a href="tam-op-nano-timerman-tbm14p94022.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2019/12/tam-op-nano-timberman-tbm14p94022.jpg?v=1.0.0" class="lazy img-fluid" alt="Tấm ốp Nano TimerMan TBM14P94022" /></a>
                                                            <div class="tag-2">
                                                                <img src="#" class="img-fluid tag-2-thumb" />
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <h5 class="title">
                                                            <a href="tam-op-nano-timerman-tbm14p94022.html" title="Tấm ốp Nano TimerMan TBM14P94022">
                                                                Tấm ốp Nano TimerMan TBM14P94022
                                                            </a>
                                                            </h5>
                                                            <div class="price-new">
                                                                380.000đ đ / m2
                                                            </div>
                                                            <div class="size small mb-1">
                                                                Kích thước: 9 x 400 x 3000 mm
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
                                                <div class="col-md-4 col-sm-4 col-6 d-none d-sm-block">
                                                    <div class="item-product" data-id="96043" data-properties="">
                                                        <div class="tag-1">
                                                        </div>
                                                        <div class="image">
                                                            <a href="tam-op-4-song-phu-phim-timberman-tbm14p49022.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2020/08/08/tam-op-4song-phu-phim-tbm14p49022.jpg?v=1.0.0" class="lazy img-fluid" alt="Tấm ốp 4 sóng phủ phim TimberMan TBM14P49022" /></a>
                                                            <div class="tag-2">
                                                                <img src="#" class="img-fluid tag-2-thumb" />
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <h5 class="title">
                                                            <a href="tam-op-4-song-phu-phim-timberman-tbm14p49022.html" title="Tấm ốp 4 sóng phủ phim TimberMan TBM14P49022">
                                                                Tấm ốp 4 sóng phủ phim TimberMan TBM14P49022
                                                            </a>
                                                            </h5>
                                                            <div class="price-new">
                                                                64.000đ đ / m dài
                                                            </div>
                                                            <div class="size small mb-1">
                                                                Kích thước: 3000 x 155 x 9 mm
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                            <div class="item-product item-product-large">
                                                <div class="image">
                                                    <a href="tam-op-nano-timerman-tbm14p94001.html">
                                                        <img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/2020/07/14/he-thong-ban-le-san-go-vat-lieu-hoan-thien-tai-kho-Nội thất Hưng Gia-tam-op-nano-timberman-tbm14p94001.jpg?v=1.0.0" class="lazy img-fluid" alt="Tấm ốp Nano TimerMan TBM14P94001" />
                                                    </a>
                                                </div>
                                                <div class="py-1">
                                                    <h5 class="title">
                                                    <a href="tam-op-nano-timerman-tbm14p94001.html" title="Tấm ốp Nano TimerMan TBM14P94001">
                                                        Tấm ốp Nano TimerMan TBM14P94001
                                                    </a>
                                                    </h5>
                                                    <div class="price-new">
                                                        380.000đ đ / m2
                                                    </div>
                                                    <div class="size small mb-1">
                                                        Kích thước: 9 x 400 x 3000 mm
                                                    </div>
                                                    <div class="review d-flex">
                                                        <div class="color-FFAB1B mr-2">
                                                            1,0/5<i class="fas fa-star ml-1"></i>
                                                        </div>
                                                        <div class="color-828282">
                                                            1 đánh giá
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                            <div class="row no-gutters h-100 ">
                                                <div class="col-md-4 col-sm-4 col-6 ">
                                                    <div class="item-product" data-id="85525" data-properties="">
                                                        <div class="tag-1">
                                                        </div>
                                                        <div class="image">
                                                            <a href="op-tuong-pvc-gia-da-jnd062705.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2019/08/op-tuong-pvc-gia-da-jnd062705.jpg?v=1.0.0" class="lazy img-fluid" alt="Ốp tường PVC giả đá JND062705" /></a>
                                                            <div class="tag-2">
                                                                <img src="#" class="img-fluid tag-2-thumb" />
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <h5 class="title">
                                                            <a href="op-tuong-pvc-gia-da-jnd062705.html" title="Ốp tường PVC giả đá JND062705">
                                                                Ốp tường PVC giả đá JND062705
                                                            </a>
                                                            </h5>
                                                            <div class="price-new">
                                                                295.000đ đ / Tấm
                                                            </div>
                                                            <div class="size small mb-1">
                                                                Kích thước: 2.7 x 2440 x 1220 mm
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
                                                <div class="col-md-4 col-sm-4 col-6 ">
                                                    <div class="item-product" data-id="85579" data-properties="">
                                                        <div class="tag-1">
                                                        </div>
                                                        <div class="image">
                                                            <a href="op-tuong-pvc-gia-da-jnd062711.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2019/08/op-tuong-pvc-gia-da-jnd062711.jpg?v=1.0.0" class="lazy img-fluid" alt="Ốp tường PVC giả đá JND062711" /></a>
                                                            <div class="tag-2">
                                                                <img src="#" class="img-fluid tag-2-thumb" />
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <h5 class="title">
                                                            <a href="op-tuong-pvc-gia-da-jnd062711.html" title="Ốp tường PVC giả đá JND062711">
                                                                Ốp tường PVC giả đá JND062711
                                                            </a>
                                                            </h5>
                                                            <div class="price-new">
                                                                295.000đ đ / Tấm
                                                            </div>
                                                            <div class="size small mb-1">
                                                                Kích thước: 2.7 x 2440 x 1220 mm
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
                                                <div class="col-md-4 col-sm-4 col-6 d-none d-sm-block">
                                                    <div class="item-product" data-id="85580" data-properties="">
                                                        <div class="tag-1">
                                                        </div>
                                                        <div class="image">
                                                            <a href="op-tuong-pvc-gia-da-jnd062721.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2019/08/op-tuong-pvc-gia-da-jnd062721.jpg?v=1.0.0" class="lazy img-fluid" alt="Ốp tường PVC giả đá JND062721" /></a>
                                                            <div class="tag-2">
                                                                <img src="#" class="img-fluid tag-2-thumb" />
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <h5 class="title">
                                                            <a href="op-tuong-pvc-gia-da-jnd062721.html" title="Ốp tường PVC giả đá JND062721">
                                                                Ốp tường PVC giả đá JND062721
                                                            </a>
                                                            </h5>
                                                            <div class="price-new">
                                                                295.000đ đ / Tấm
                                                            </div>
                                                            <div class="size small mb-1">
                                                                Kích thước: 2.7 x 2440 x 1220 mm
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
                <section class="my-4">
                    <div class="container ">
                        <div class="bg-fff pt-3 border-r-4">
                            <div class="px-3">
                                <div class="row mb-3 no-gutters ">
                                    <div class="col-8">
                                        <a href="javascript:void(0)" class="h5 font-weight-bold ">Sản phẩm gia dụng</a>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a href="danh-muc/san-pham-gia-dung.html" class="link-view-more">
                                            Xem thêm <i class="fas fa-chevron-right ml-1 small"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider main container -->
                            <div class="slide-product slide-8">
                                <div class="swiper-container ">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="swiper-slide">
                                            <div class="item-product" data-id="96090" data-properties="">
                                                <div class="tag-1">
                                                </div>
                                                <div class="image">
                                                    <a href="may-loc-nuoc-ro-kostlich-9-loi-klwf-20092.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2020/08/05/may-loc-nuoc-ro-kostlich-9-loi-klwf-20092.png?v=1.0.0" class="img-fluid lazy" alt="Máy lọc nước RO Kostlich 9 lõi KLWF-20092" /></a>
                                                    <div class="tag-2">
                                                        <img src="#" class="img-fluid tag-2-thumb" />
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <h5 class="title">
                                                    <a href="may-loc-nuoc-ro-kostlich-9-loi-klwf-20092.html" title="Máy lọc nước RO Kostlich 9 lõi KLWF-20092">
                                                        Máy lọc nước RO Kostlich 9 lõi KLWF-20092
                                                    </a>
                                                    </h5>
                                                    <div class="price-new">
                                                        6.800.000đ đ / Chiếc
                                                    </div>
                                                    <div class="price-old-none">
                                                    <pre>&nbsp;</pre>
                                                </div>
                                                <div class="size small mb-1">
                                                    DF: Default Value mm
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
                                    <div class="swiper-slide">
                                        <div class="item-product" data-id="41979" data-properties="">
                                            <div class="tag-1">
                                            </div>
                                            <div class="image">
                                                <a href="cay-lau-nha-phun-suong.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2018/01/cay-lau-nha-phun-suong-chuyen-dung.jpg?v=1.0.0" class="img-fluid lazy" alt="Cây lau nhà phun sương" /></a>
                                                <div class="tag-2">
                                                    <img src="#" class="img-fluid tag-2-thumb" />
                                                </div>
                                            </div>
                                            <div class="">
                                                <h5 class="title">
                                                <a href="cay-lau-nha-phun-suong.html" title="Cây lau nhà phun sương">
                                                    Cây lau nhà phun sương
                                                </a>
                                                </h5>
                                                <div class="price-new">
                                                    621.000đ đ / chiếc
                                                </div>
                                                <div class="price-old-none">
                                                <pre>&nbsp;</pre>
                                            </div>
                                            <div class="size small mb-1">
                                                Kích thước: 80 x 203 x 650 mm
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
                                <div class="swiper-slide">
                                    <div class="item-product" data-id="71837" data-properties="">
                                        <div class="tag-1">
                                        </div>
                                        <div class="image">
                                            <a href="robot-hut-bui-thong-minh.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2019/05/robot-hut-bui-thong-minh.jpg?v=1.0.0" class="img-fluid lazy" alt="Robot Hút bụi Thông Minh" /></a>
                                            <div class="tag-2">
                                                <img src="#" class="img-fluid tag-2-thumb" />
                                            </div>
                                        </div>
                                        <div class="">
                                            <h5 class="title">
                                            <a href="robot-hut-bui-thong-minh.html" title="Robot Hút bụi Thông Minh">
                                                Robot Hút bụi Thông Minh
                                            </a>
                                            </h5>
                                            <div class="price-new">
                                                7.900.000đ đ / Bộ
                                            </div>
                                            <div class="price-old-none">
                                            <pre>&nbsp;</pre>
                                        </div>
                                        <div class="size small mb-1">
                                            Kích thước: 78 x 300 x 300 mm
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
                            <div class="swiper-slide">
                                <div class="item-product" data-id="71843" data-properties="">
                                    <div class="tag-1">
                                    </div>
                                    <div class="image">
                                        <a href="thung-rac-tu-dong.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2019/05/thung-rac-tu-dong.jpg?v=1.0.0" class="img-fluid lazy" alt="Thùng Rác tự động thông minh" /></a>
                                        <div class="tag-2">
                                            <img src="#" class="img-fluid tag-2-thumb" />
                                        </div>
                                    </div>
                                    <div class="">
                                        <h5 class="title">
                                        <a href="thung-rac-tu-dong.html" title="Thùng Rác tự động thông minh">
                                            Thùng Rác tự động thông minh
                                        </a>
                                        </h5>
                                        <div class="price-new">
                                            2.300.000đ đ / Cái
                                        </div>
                                        <div class="price-old-none">
                                        <pre>&nbsp;</pre>
                                    </div>
                                    <div class="size small mb-1">
                                        Kích thước:  mm
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
                        <div class="swiper-slide">
                            <div class="item-product" data-id="91863" data-properties="">
                                <div class="tag-1">
                                </div>
                                <div class="image">
                                    <a href="nuoc-lau-san-layer-clean-huong-gio-bien-125l.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2020/01/nuoc-lau-san-layer-clean-huong-gio-bien-125l.jpg?v=1.0.0" class="img-fluid lazy" alt="Nước lau sàn Layer Clean hương gió Biển 1,25L" /></a>
                                    <div class="tag-2">
                                        <img src="#" class="img-fluid tag-2-thumb" />
                                    </div>
                                </div>
                                <div class="">
                                    <h5 class="title">
                                    <a href="nuoc-lau-san-layer-clean-huong-gio-bien-125l.html" title="Nước lau sàn Layer Clean hương gió Biển 1,25L">
                                        Nước lau sàn Layer Clean hương gió Biển 1,25L
                                    </a>
                                    </h5>
                                    <div class="price-new">
                                        35.000đ đ / Chai
                                    </div>
                                    <div class="price-old-none">
                                    <pre>&nbsp;</pre>
                                </div>
                                <div class="size small mb-1">
                                    Kích thước:  mm
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
                    <div class="swiper-slide">
                        <div class="item-product" data-id="91870" data-properties="">
                            <div class="tag-1">
                            </div>
                            <div class="image">
                                <a href="nuoc-lau-san-layer-clean-huong-que-125l.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2020/01/nuoc-lau-san-layer-clean-huong-que-125l.jpg?v=1.0.0" class="img-fluid lazy" alt="Nước lau sàn Layer Clean hương Quế 1,25L" /></a>
                                <div class="tag-2">
                                    <img src="#" class="img-fluid tag-2-thumb" />
                                </div>
                            </div>
                            <div class="">
                                <h5 class="title">
                                <a href="nuoc-lau-san-layer-clean-huong-que-125l.html" title="Nước lau sàn Layer Clean hương Quế 1,25L">
                                    Nước lau sàn Layer Clean hương Quế 1,25L
                                </a>
                                </h5>
                                <div class="price-new">
                                    38.500đ đ / Chai
                                </div>
                                <div class="price-old-none">
                                <pre>&nbsp;</pre>
                            </div>
                            <div class="size small mb-1">
                                Kích thước:  mm
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
                <div class="swiper-slide">
                    <div class="item-product" data-id="91871" data-properties="">
                        <div class="tag-1">
                        </div>
                        <div class="image">
                            <a href="nuoc-lau-san-layer-clean-huong-nuoc-hoa-125l.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2020/01/nuoc-lau-san-layer-clean-huong-nuoc-hoa-125l.jpg?v=1.0.0" class="img-fluid lazy" alt="Nước lau sàn Layer Clean hương nước Hoa 1,25L" /></a>
                            <div class="tag-2">
                                <img src="#" class="img-fluid tag-2-thumb" />
                            </div>
                        </div>
                        <div class="">
                            <h5 class="title">
                            <a href="nuoc-lau-san-layer-clean-huong-nuoc-hoa-125l.html" title="Nước lau sàn Layer Clean hương nước Hoa 1,25L">
                                Nước lau sàn Layer Clean hương nước Hoa 1,25L
                            </a>
                            </h5>
                            <div class="price-new">
                                35.000đ đ / Chai
                            </div>
                            <div class="price-old-none">
                            <pre>&nbsp;</pre>
                        </div>
                        <div class="size small mb-1">
                            Kích thước:  mm
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
            <div class="swiper-slide">
                <div class="item-product" data-id="91872" data-properties="">
                    <div class="tag-1">
                    </div>
                    <div class="image">
                        <a href="nuoc-lau-san-layer-clean-huong-gio-bien-5lit.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2020/01/nuoc-lau-san-layer-clean-huong-gio-bien-5l.jpg?v=1.0.0" class="img-fluid lazy" alt="Nước lau sàn Layer Clean hương gió Biển 5Lít" /></a>
                        <div class="tag-2">
                            <img src="#" class="img-fluid tag-2-thumb" />
                        </div>
                    </div>
                    <div class="">
                        <h5 class="title">
                        <a href="nuoc-lau-san-layer-clean-huong-gio-bien-5lit.html" title="Nước lau sàn Layer Clean hương gió Biển 5Lít">
                            Nước lau sàn Layer Clean hương gió Biển 5Lít
                        </a>
                        </h5>
                        <div class="price-new">
                            125.000đ đ / Chai
                        </div>
                        <div class="price-old-none">
                        <pre>&nbsp;</pre>
                    </div>
                    <div class="size small mb-1">
                        Kích thước:  mm
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
        <div class="swiper-slide">
            <div class="item-product" data-id="91873" data-properties="">
                <div class="tag-1">
                </div>
                <div class="image">
                    <a href="nuoc-lau-san-layer-clean-huong-que-5-lit.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2020/01/nuoc-lau-san-layer-clean-huong-que-5l.jpg?v=1.0.0" class="img-fluid lazy" alt="Nước lau sàn Layer Clean hương Quế 5 Lít" /></a>
                    <div class="tag-2">
                        <img src="#" class="img-fluid tag-2-thumb" />
                    </div>
                </div>
                <div class="">
                    <h5 class="title">
                    <a href="nuoc-lau-san-layer-clean-huong-que-5-lit.html" title="Nước lau sàn Layer Clean hương Quế 5 Lít">
                        Nước lau sàn Layer Clean hương Quế 5 Lít
                    </a>
                    </h5>
                    <div class="price-new">
                        137.000đ đ / Chai
                    </div>
                    <div class="price-old-none">
                    <pre>&nbsp;</pre>
                </div>
                <div class="size small mb-1">
                    Kích thước:  mm
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
    <div class="swiper-slide">
        <div class="item-product" data-id="91874" data-properties="">
            <div class="tag-1">
            </div>
            <div class="image">
                <a href="nuoc-lau-san-layer-clean-huong-nuoc-hoa-5-lit.html"><img src="images/grayffa5.jpg?v=LPdlHmqT_DsfScf_Vi84uWTSfQQ6uYv1iXL1Wuy6VxM" data-src="https://noithathunggia//uploads/thumb/2020/01/nuoc-lau-san-layer-clean-huong-que-5l.jpg?v=1.0.0" class="img-fluid lazy" alt="Nước lau sàn Layer Clean hương Nước Hoa 5 Lít" /></a>
                <div class="tag-2">
                    <img src="#" class="img-fluid tag-2-thumb" />
                </div>
            </div>
            <div class="">
                <h5 class="title">
                <a href="nuoc-lau-san-layer-clean-huong-nuoc-hoa-5-lit.html" title="Nước lau sàn Layer Clean hương Nước Hoa 5 Lít">
                    Nước lau sàn Layer Clean hương Nước Hoa 5 Lít
                </a>
                </h5>
                <div class="price-new">
                    125.000đ đ / Chai
                </div>
                <div class="price-old-none">
                <pre>&nbsp;</pre>
            </div>
            <div class="size small mb-1">
                Kích thước:  mm
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
<section class="container mb-4">
<div class="banner-in py-5"
style="background: url(../noithathunggia/uploads/2020/06/03/bn-pk-fix.jpg) no-repeat center;background-size: cover;">
<div class="row justify-content-center">
<div class="col-xl-6 col-md-8 col-sm-8 col-12">
<div>
Chúng tôi hỗ trợ bạn 24/7.
Hãy liên lạc với chúng tôi theo số
1800 0022
</div>
</div>
</div>
</div>
</section>
<div class="container blog-video">
<div class="heading pb-2  mb-3 d-flex">
<div class="h5 font-weight-600 mb-0 ">
Video
</div>
<div class="ml-auto">
<a href="video-Nội thất Hưng Gia.html" class="link-view-more">
Xem thêm <i class="fas fa-chevron-right ml-1 small"></i>
</a>
</div>
</div>
<div class="slide-video">
<div class="swiper-container">
<!-- Additional required wrapper -->
<div class="swiper-wrapper">
<!-- Slides -->
<div class="swiper-slide">
<div class="item">
<div class="video-img">
    <a href="5-phut-moi-ngay-voi-Nội thất Hưng Gia-trang-tri-phong-voi-moc-treo-binh-hoa-handmade.html">
        <img src="images/gray3860.jpg?v=1" class="img-fluid lazy w-100" data-src="https://noithathunggia//uploads/thumb/2017/06/5-phut-moi-ngay-voi-Nội thất Hưng Gia-trang-tri.jpg" />
        <div class="play-yt">
            <img src="images/youtube3860.svg?v=1" class="">
        </div>
    </a>
</div>
<h5 class="title">
<a rel="nofollow" href="javascript:void(0)" title="5 phút mỗi ngày với Nội thất Hưng Gia: Trang trí phòng với Móc treo bình hoa handmade">5 phút mỗi ngày với Nội thất Hưng Gia: Trang trí phòng với Móc treo bình hoa handmade</a>
</h5>
<div class="time">
    16/06/2017 04:31;
</div>
</div>
</div>
<div class="swiper-slide">
<div class="item">
<div class="video-img">
    <a href="-phut-moi-ngay-voi-Nội thất Hưng Gia-trang-tri-phong-voi-day-den-tu-tao.html">
        <img src="images/gray3860.jpg?v=1" class="img-fluid lazy w-100" data-src="../noithathunggia/uploads/thumb/2020/06/27/video-2-3-4.jpg" />
        <div class="play-yt">
            <img src="images/youtube3860.svg?v=1" class="">
        </div>
    </a>
</div>
<h5 class="title">
<a rel="nofollow" href="javascript:void(0)" title="5 phút mỗi ngày với Nội thất Hưng Gia: Trang trí phòng với Dây Đèn tự tạo">5 phút mỗi ngày với Nội thất Hưng Gia: Trang trí phòng với Dây Đèn tự tạo</a>
</h5>
<div class="time">
    15/06/2017 02:00;
</div>
</div>
</div>
<div class="swiper-slide">
<div class="item">
<div class="video-img">
    <a href="5-phut-moi-ngay-voi-Nội thất Hưng Gia-trang-tri-phong-voi-gia-treo-anh-va-hop-cay-day-thung-handmade.html">
        <img src="images/gray3860.jpg?v=1" class="img-fluid lazy w-100" data-src="../noithathunggia/uploads/thumb/2017/06/maxresdefault-1.jpg" />
        <div class="play-yt">
            <img src="images/youtube3860.svg?v=1" class="">
        </div>
    </a>
</div>
<h5 class="title">
<a rel="nofollow" href="javascript:void(0)" title="5 phút mỗi ngày với Nội thất Hưng Gia: Trang trí phòng với Giá treo ảnh và Hộp cây dây thừng">5 phút mỗi ngày với Nội thất Hưng Gia: Trang trí phòng với Giá treo ảnh và Hộp cây dây thừng</a>
</h5>
<div class="time">
    15/06/2017 01:56;
</div>
</div>
</div>
<div class="swiper-slide">
<div class="item">
<div class="video-img">
    <a href="5-phut-moi-ngay-voi-Nội thất Hưng Gia-trang-tri-phong-voi-gia-treo-tuong-bang-que-kem.html">
        <img src="images/gray3860.jpg?v=1" class="img-fluid lazy w-100" data-src="../noithathunggia/uploads/thumb/2017/06/1-1-1.jpg" />
        <div class="play-yt">
            <img src="images/youtube3860.svg?v=1" class="">
        </div>
    </a>
</div>
<h5 class="title">
<a rel="nofollow" href="javascript:void(0)" title="5 phút mỗi ngày với Nội thất Hưng Gia: Trang trí phòng với Giá treo tường bằng que kem">5 phút mỗi ngày với Nội thất Hưng Gia: Trang trí phòng với Giá treo tường bằng que kem</a>
</h5>
<div class="time">
    15/06/2017 01:50;
</div>
</div>
</div>
<div class="swiper-slide">
<div class="item">
<div class="video-img">
    <a href="5-phut-moi-ngay-voi-Nội thất Hưng Gia-trang-tri-can-phong-voi-hop-dung-do-tai-che.html">
        <img src="images/gray3860.jpg?v=1" class="img-fluid lazy w-100" data-src="../noithathunggia/uploads/thumb/2017/05/maxresdefault-3.jpg" />
        <div class="play-yt">
            <img src="images/youtube3860.svg?v=1" class="">
        </div>
    </a>
</div>
<h5 class="title">
<a rel="nofollow" href="javascript:void(0)" title="5 phút mỗi ngày với Nội thất Hưng Gia: Trang trí căn phòng với Hộp đựng đồ tái chế">5 phút mỗi ngày với Nội thất Hưng Gia: Trang trí căn phòng với Hộp đựng đồ tái chế</a>
</h5>
<div class="time">
    04/05/2017 07:29;
</div>
</div>
</div>
<div class="swiper-slide">
<div class="item">
<div class="video-img">
    <a href="5-phut-moi-ngay-voi-Nội thất Hưng Gia-trang-tri-phong-ngu-voi-da-thuy-tinh.html">
        <img src="images/gray3860.jpg?v=1" class="img-fluid lazy w-100" data-src="../noithathunggia/uploads/thumb/2017/05/maxresdefault-2.jpg" />
        <div class="play-yt">
            <img src="images/youtube3860.svg?v=1" class="">
        </div>
    </a>
</div>
<h5 class="title">
<a rel="nofollow" href="javascript:void(0)" title="5 phút mỗi ngày với Nội thất Hưng Gia: trang trí phòng ngủ với đá thủy tinh">5 phút mỗi ngày với Nội thất Hưng Gia: trang trí phòng ngủ với đá thủy tinh</a>
</h5>
<div class="time">
    04/05/2017 07:09;
</div>
</div>
</div>
<div class="swiper-slide">
<div class="item">
<div class="video-img">
    <a href="5-phut-moi-ngay-voi-Nội thất Hưng Gia-trang-tri-phong-voi-den-nen-hoa-sen.html">
        <img src="images/gray3860.jpg?v=1" class="img-fluid lazy w-100" data-src="../noithathunggia/uploads/thumb/2017/05/maxresdefault-4.jpg" />
        <div class="play-yt">
            <img src="images/youtube3860.svg?v=1" class="">
        </div>
    </a>
</div>
<h5 class="title">
<a rel="nofollow" href="javascript:void(0)" title="5 phút mỗi ngày với Nội thất Hưng Gia trang trí phòng với đèn nến hoa sen">5 phút mỗi ngày với Nội thất Hưng Gia trang trí phòng với đèn nến hoa sen</a>
</h5>
<div class="time">
    04/05/2017 06:54;
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<section class="blogs-home py-5">
<div class="container">
<div class="row mb-4">
<div class="col-6">
<a href="tu-van.html" class="h5 font-weight-bold">TƯ VẤN</a>
</div>
<div class="col-6 text-right">
<a href="tu-van.html" class="link-view-more">Xem thêm <i class="fas fa-chevron-right ml-1 small"></i></a>
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
    <img src="{{$news->getImage()}}" data-src="https://noithathunggia//uploads/2020/08/17/4-dieu-ban-can-biet-truoc-khi-lua-chon-san-go-cong-nghiep-cho-gia-dinh.jpg?v=1.0.0" alt="4 điều bạn nhất định phải biết trước khi chọn mua sàn gỗ công nghiệp cho gia đình" class="img-fluid lazy" width="100%" height="auto" />
</a>
<a href="{!! route('news.detail', ['alias' => $news->alias]) !!}" title="4 điều bạn nhất định phải biết trước khi chọn mua sàn gỗ công nghiệp cho gia đình" class="">
    <h6 class="title h5 mt-3 ">
    {!!$news->title!!}
    </h6>
</a>
<div class="des">
    <p>Nếu kh&ocirc;ng hiểu r&otilde; về s&agrave;n gỗ c&ocirc;ng nghiệp, kh&aacute;ch h&agrave;ng sẽ dễ mua phải v&aacute;n s&agrave;n c&ocirc;ng nghiệp kh&ocirc;ng ph&ugrave; hợp với nhu cầu, mục đ&iacute;ch sử dụng của m&igrave;nh.&nbsp;</p>
</div>
<div class="text-right mb-3">
    <a href="4-dieu-ban-nhat-dinh-phai-biet-truoc-khi-chon-mua-san-go-cong-nghiep-cho-gia-dinh.html" class="link-view-more">
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
                    <img src="{{$news->getImage()}}" data-src="https://noithathunggia//uploads/thumb/2020/08/03/khuyen-mai-thang-8-2020-Nội thất Hưng Gia.jpg?v=1.0.0" class="img-fluid lazy" alt="Khuyến mãi tháng 8 nhiều bất ngờ tại Nội thất Hưng Gia, hệ thống bán lẻ vật liệu hoàn thiện tại kho." />
                </a>
            </div>
        </div>
        <div class="col-xl-9 col-md-8 col-sm-9 col-9 pl-0">
            <h6 class="title">
            <a href="{!! route('news.detail', ['alias' => $news->alias]) !!}" title="Khuyến mãi tháng 8 nhiều bất ngờ tại Nội thất Hưng Gia, hệ thống bán lẻ vật liệu hoàn thiện tại kho.">{!!$news->title!!}</a>
            </h6>
            <div class="time">
                03/08/2020 05:29
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
</section>
</div>
<div id="fb-root"></div>
<section class="service-home py-3">
<div class="container">
<div class="row">
<div class="col-xl-4 col-md-4 col-sm-4 col-12">
<div class="d-flex py-3 justify-content-center">
<div class="image align-self-center">
<img src="{!!asset('/noithathunggia/uploads/2020/04/28/shipment-international 2.png?v=1.0.0')!!}" data-src="https://noithathunggia//uploads/2020/04/28/shipment-international 2.png?v=1.0.0" class="img-fluid lazy" />
</div>
<div class="px-3 align-self-center">
<label>Xuất xứ</label>
<div class="small">
Bảo đảm 100% xuất xứ
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-4 col-sm-4 col-12">
<div class="d-flex py-3 justify-content-center">
<div class="image align-self-center">
<img src="{!!asset('noithathunggia//uploads/2020/04/28/Group.png?v=1.0.0')!!}" data-src="https://noithathunggia//uploads/2020/04/28/Group.png?v=1.0.0" class="img-fluid lazy" />
</div>
<div class="px-3 align-self-center">
<label>Hỗ trợ 24/7</label>
<div class="small">
Hệ thống toàn quốc
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-4 col-sm-4 col-12">
<div class="d-flex py-3 justify-content-center">
<div class="image align-self-center">
<img src="{!!asset('noithathunggia//uploads/2020/04/28/saving-piggy-dollars 3.png?v=1.0.0')!!}" data-src="https://noithathunggia//uploads/2020/04/28/saving-piggy-dollars 3.png?v=1.0.0" class="img-fluid lazy" />
</div>
<div class="px-3 align-self-center">
<label>Loại hình dịch vụ</label>
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
<div class="font-weight-bold mb-2">Công ty Cổ Phần Xuất Nhập Khẩu Tháng Giêng</div>
<div class="mb-2">
Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.
</div>
<div class="font-weight-bold mb-2">Trụ sở tại miền Nam</div>
<div class="mb-2">
QQ18 Ba Vì, Cư xá Bắc Hải, Phường 15, Quận 10, Hồ Chí Minh
</div>
<div class="mb-4">
<div class="d-lg-inline-block mb-2 mb-lg-0">
<a rel="nofollow" href="tel:18000022"><i class="fas fa-phone-alt mr-2"></i>Hotline: 1800 0022</a>
</div>
<div class="d-lg-inline-block ml-lg-5">
<a rel="nofollow" href="mail:info@janco.com.vn"><i class="fas fa-envelope mr-2"></i>Email: info@janco.com.vn</a>
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
<a rel="nofollow" href="tel: 1800.0022" class="call-icon" rel="nofollow">
<i class="fas fa-mobile-alt"></i>
<div class="animated alo-circle"></div>
<div class="animated alo-circle-fill"></div>
<span>1800.0022</span>
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
<a rel="nofollow" target="_blank" href="https://zalo.me/0902480222" class="zalo">
<i class="fa" aria-hidden="true">
<img src="{!!asset('stc-zaloprofile.zdn.vn/pc/v1/images/zalo_sharelogo.png')!!}" width="25px" />
</i>
<span>Zalo: 0902480222</span>
</a>
</div>
</div>
<div class="banner-fixed-left">
<a rel="nofollow" href="javascript:void(0)">
<img src="{!!asset('noithathunggia/uploads/2020/08/25/he-thong-ban-le-vat-lieu-hoan-thien-tai-kho-Nội thất Hưng Gia-banner-san-go-han-quoc-floorarte209.jpg?v=1.0.0" class="img-fluid w-100')!!}" />
</a>
</div>
<div class="banner-fixed-right">
<a rel="nofollow" href="javascript:void(0)">
<img src="{!!asset('noithathunggia/uploads/2020/06/03/banner-doc-1-fixe209.jpg?v=1.0.0')!!}" class="img-fluid w-100" />
</a>
</div>
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
<meta itemprop="url" content="Nội thất Hưng Gia.vn" />
<form itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction">
<meta itemprop="target" content="Nội thất Hưng Gia.vn/Product/Get?keyword={search_term_string}" />
<input itemprop="query-input" type="text" name="search_term_string" required />
<input type="submit" />
</form>
</div>

<script>    document.addEventListener("DOMContentLoaded", function(event) {     gtag('config', 'AW-830211279');       jQuery('[href^="tel:"]').click(function() {          gtag('event', 'conversion', {'send_to': 'AW-830211279/tVQrCMnmsYYBEM-J8IsD'});     });   }); </script>
<script src="https://kit.fontawesome.com/1560292da9.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="{!!asset('js/jquery-3.3.1.mine209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/jquery-ui.mine209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/popper.mine209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/bootstrap.mine209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/swiper.mine209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/wow.mine209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/libs/momentjs/momentJSe209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/libs/daterangepicker-master/daterangepickere209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/libs/paginationjs/paginationJSe209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/libs/vakata-jstree-6dce227/jstree.mine209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/appe209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/core/coree209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/controller/menuControllere209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/controller/orderControllere209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/controller/extraControllere209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/libs/yall-js/dist/yall.mine209.js?v=1.0.0')!!}"></script>
<script type="text/javascript" src="{!!asset('js/libs/jquery.lazy-master/jquery.lazye209.js?v=1.0.0')!!}"></script>
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
</body>