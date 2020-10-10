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
                <div class="d-md-none">
                    <div class="input-group form-search flex-nowrap mr-2 width-mb" style="width: 210px;">
                        <input type="text" class="form-control find-product " placeholder="Tìm sản phẩm....">
                        <div class="input-group-append">
                            <button class="btn btn-search es-search-button">
                            <img  src="{!!asset('images/searche209.svg?v=1.0.0')!!}" class="img-fluid" />
                            </button>
                        </div>
                    </div>
                </div>
                <!--22-4 Thêm btn giỏ hàng-->
                <div class="nav-item align-self-md-center mb-0 cart d-md-none">
                    <button class="btn p-0 dropdown-cart-trigger-mobile" @*onclick="$('.cart-mobile').toggle(100, 'swing');" *@>
                    <div class="icon ">
                        <img src="{!!asset('images/cart-icone209.svg?v=1.0.0')!!}" class="img-fluid mr-2 icon-nav" />
                        <div id="cart-count-mobile" class="amount">
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
                            <form action="{{route('games.search')}}" method="post">
                            {{csrf_field()}}
                            <div class="input-group form-search flex-nowrap mb-1 ">
                                <input type="text" class="form-control find-product" placeholder="Tìm sản phẩm...." name="key" id="search" autocomplete="off">
                                <div class="input-group-append es-search-button">
                                    <button class="btn btn-search"  type="submit">
                                    <img  src="{!!asset('images/searche209.svg?v=1.0.0')!!}" class="img-fluid" />
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
                                    <img src="{!!asset('images/cart-icone209.svg?v=1.0.0')!!}" class="img-fluid mr-2 icon-nav" />
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
                                        <a rel="nofollow" href="{{route('home.checkout_order')}}"  id="link-clear-cart" class="btn-link link-view-more text-uppercase"><small>Xóa giỏ hàng</small></a><br />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item mr-md-3  align-self-md-center d-flex d-sm-none d-lg-flex"
                            style="white-space: nowrap;">
                            <div>
                                <a rel="nofollow" href="tel: 18000022">
                                    <div><span class="font-weight-bold h6 ">{!!$share_config->hotline!!}</span></div>
                                    <div class="small">(Miễn phí) </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item mr-md-3  align-self-md-center d-flex d-sm-none d-lg-flex"
                            style="white-space: nowrap;">
                            <div>
                                <a href="javascript:void(0)">
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
                                    <img src="{!!asset('images/vietname209.svg?v=1.0.0')!!}" class="img-fluid " />
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
<!--     <div class="local-mobile container d-flex d-md-none small py-2" style="background: #C8EBFD;">
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
<!--                                 <div>
                                    <a rel="nofollow" href="javascrip:;" class="btn-sm btn-link last-seen-link">
                                        <img  src="{!!asset('images/spvx-ice209.svg?v=1.0.0')!!}" class="img-fluid icon mr-2" />Sản phẩm vừa
                                        xem
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)" class="btn-sm btn-link">
                                        <img  src="{!!asset('images/location-icn.svg')!!}"  class="img-fluid icon mr-2" />Hệ thống
                                        <span class="px-1 font-weight-bold" style="color:#007DFF;"></span>
                                        Showroom
                                    </a>
                                </div>
                                <div>
                                    <a rel="nofollow" href="javascript:void(0)" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-sm btn-link">
                                        <img  src="{!!asset('images/spvx-ic3.svg?v=1.0.0')!!}"  class="img-fluid icon mr-2" />Tải
                                        Catalogue
                                    </a>
                                    <div class="dropdown-menu cust-downl-cate" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="tai-catalogue.html">Tải Catalogue</a>
                                        <a class="dropdown-item" href="thu-vien-3d-kien-truc-su.html">Thư viện 3D kiến trúc sư</a>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" rel="nofollow" class="btn-sm btn-link _btn-lien-he-bh" data-toggle="modal"
                                        data-target="#modal-lien-he">
                                        <img  src="{!!asset('images/spvx-ic4e209.svg?v=1.0.0')!!}" class="img-fluid icon mr-2" />Liên hệ bảo
                                        hành
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)" class="btn-sm btn-link">
                                        <img  src="{!!asset('images/spvx-ic5e209.svg?v=1.0.0')!!}" class="img-fluid icon mr-2" />Dự toán công
                                        trình
                                    </a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <ul class="list-group list-menu-cate d-none d-md-block un-expand   " style="">
                                <li class="list-group-item active ">
                                    <a rel="nofollow" href="javascript:;" class="link">
                                        <img  src="{!!asset('images/listView.svg')!!}" class="img-fluid mr-2" />Danh mục
                                    </a>
                                </li>
                                <li class="list-group-item">
                                                    <a href="javascript:void(0)" class="link" title="Sàn gỗ công nghiệp">
                                                        <img src="../noithathunggia/uploads/2020/09/07/gocongnghiepe209.png?v=1.0.0"
                                                        class="img-fluid mr-2" alt="Sàn gỗ công nghiệp" />Sàn gỗ công nghiệp
                                                    </a>
                                                    <div class="subcate">
                                                        <ul class="ul-tree-lv-1">
                                                            <li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-malaysia">Sàn gỗ Malaysia</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-janmi">Sàn gỗ Janmi</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-woodman">Sàn gỗ Woodman</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-masfloor">Sàn gỗ Masfloor</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-viet-nam">Sàn gỗ Việt Nam</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-xuong-ca">Sàn Gỗ xương Cá</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-cot-xanh">Sàn gỗ cốt xanh</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-viet-nam-sieu-chiu-nuoc">Sàn gỗ Việt Nam Siêu chịu...</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-kendax">Sàn gỗ Kendax</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-florton">Sàn gỗ Florton</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-newsky">Sàn gỗ Newsky</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-janwood">Sàn gỗ Janwood</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-gia-re">Sàn gỗ công nghiệp giá rẻ</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-ecofloor">Sàn gỗ EcoFloor</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-wilson">Sàn gỗ Wilson</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-harotex">Sàn gỗ Harotex</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-kosmos">Sàn gỗ Kosmos</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-eurohome">Sàn gỗ Eurohome</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-glomax">Sàn gỗ Glomax</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-galamax">Sàn gỗ Galamax</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-kronomax">Sàn gỗ Kronomax</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-royal-floor">Sàn gỗ Royal Floor</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-han-quoc">Sàn gỗ Hàn Quốc</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-han-quoc-san-go-dongwha">Sàn Gỗ DongWha</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-floorart">Sàn gỗ FloorArt</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-thai-lan">Sàn gỗ Thái Lan</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-thairoyal">Sàn gỗ ThaiRoyal</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-thaigreen">Sàn gỗ ThaiGreen</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-thaixin">Sàn gỗ Thaixin</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-an-do">Sàn gỗ Ấn Độ</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-trung-quoc">Sàn gỗ Trung Quốc</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-chau-au">Sàn gỗ Châu Âu</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-duc">Sàn gỗ Đức</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-phap">Sàn gỗ Pháp</a><ul class="ul-tree-lv-3"></ul></li></ul></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0)" class="link" title="Sàn gỗ tự nhiên">
                                                        <img src="../noithathunggia/uploads/2020/05/21/gotunhiene209.png?v=1.0.0"
                                                        class="img-fluid mr-2" alt="Sàn gỗ tự nhiên" />Sàn gỗ tự nhiên
                                                    </a>
                                                    <div class="subcate">
                                                        <ul class="ul-tree-lv-1">
                                                            <li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-chiu-liu">Sàn gỗ Chiu Liu</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-cam-xe">Sàn gỗ Căm xe</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-go-do">Sàn gỗ gõ đỏ</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-giang-huong">Sàn gỗ Giáng Hương</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-soi">Sàn gỗ Sồi</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-teak">Sàn gỗ Teak</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-oc-cho">Sàn gỗ Óc chó</a><ul class="ul-tree-lv-2"></ul></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0)" class="link" title="Sàn nhựa vinyl">
                                                        <img src="../noithathunggia/uploads/2020/05/21/sannhuae209.png?v=1.0.0"
                                                        class="img-fluid mr-2" alt="Sàn nhựa vinyl" />Sàn nhựa vinyl
                                                    </a>
                                                    <div class="subcate">
                                                        <ul class="ul-tree-lv-1">
                                                            <li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-nhua-hem-khoa">Sàn nhựa hèm khóa</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-nhua-florton-spc">Sàn nhựa hèm khóa Florton SPC</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-nhua-hem-khoa-mines">Sàn nhựa hèm khóa mines</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-nhua-7mm-mega">Sàn nhựa 7mm MEGA</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-nhua-bpc">Sàn nhựa BPC</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-nhua-gia-re">Sàn nhựa giá rẻ</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-nhua-ecofloor">Sàn nhựa Ecofloor Vinyl</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-nhua-gia-re-mines">Sàn nhựa giá rẻ Mines</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-nhua-railflex">Sàn nhựa Railflex</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-nhua-dan-keo-railflex">Sàn nhựa dán keo Railflex</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-nhua-hem-khoa-railflex-4-2mm">Sàn nhựa hèm khóa Railflex 4.2mm</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-nhua-chong-tinh-dien">Sàn nhựa chống tĩnh điện</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-nhua-hem-khoa-railflex-5mm">Sàn nhựa hèm khóa RailFlex 5mm</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-nhua-vinyl-railflex-dang-cuon">Sàn nhựa vinyl Railflex dạng cuộn</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-nhua-the-thao-railflex">Sàn nhựa thể thao Railflex</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-nhua-ibt">Sàn nhựa IBT</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-nhua-ecost">Sàn nhựa ECO'ST</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-nhua-ecost-tu-dan">Sàn nhựa ECO’ST tự dán</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-nhua-ecost-dan-keo">Sàn nhựa ECO’ST dán keo</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-nhua-ecost-hem-khoa">Sàn nhựa ECO’ST hèm khóa</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-nhua-thanh-ly">Sàn nhựa thanh lý</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-nhua-dongwha-han-quoc-khuyen-mai">Sàn nhựa dongwha hàn quốc khuyến...</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-nhua-van-go">Sàn nhựa vân gỗ</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-nhua-van-da">Sàn nhựa vân đá</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-nhua-van-tham">Sàn nhựa vân thảm</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-nhua-tu-dan">Sàn nhựa tự dán</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-nhua-van-da-san-nhua">Sàn nhựa vân da</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-nhua-aimaru">Sàn nhựa AIMARU</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-nhua-galaxy">Sàn nhựa Galaxy</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-nhua-galaxy-plus">Sàn nhựa GALAXY Plus</a><ul class="ul-tree-lv-3"></ul></li></ul></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0)" class="link" title="Sàn gỗ ngoài trời">
                                                        <img src="../noithathunggia/uploads/2020/05/21/Go%20Ngoai%20troie209.png?v=1.0.0"
                                                        class="img-fluid mr-2" alt="Sàn gỗ ngoài trời" />Sàn gỗ ngoài trời
                                                    </a>
                                                    <div class="subcate">
                                                        <ul class="ul-tree-lv-1">
                                                            <li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-timberman">Sàn gỗ TimberMan</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-timberman-nhap-khau">Sàn gỗ Timberman Nhập khẩu</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-timberman-trong-nuoc">Sàn gỗ Timberman Trong nước</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-ban-cong">Sàn gỗ ban công</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-be-boi">Sàn gỗ bể bơi</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-san-vuon">Sàn gỗ sân vườn</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-tu-nhien-ngoai-troi-timberman">Sàn gỗ tự nhiên ngoài trời...</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-san-thuong">Sàn gỗ sân thượng</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-ngoai-troi-biowood">Sàn gỗ ngoài trời Biowood</a><ul class="ul-tree-lv-2"></ul></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0)" class="link" title="Phụ kiện">
                                                        <img src="../noithathunggia/uploads/2020/05/21/cleane209.png?v=1.0.0"
                                                        class="img-fluid mr-2" alt="Phụ kiện" />Phụ kiện
                                                    </a>
                                                    <div class="subcate">
                                                        <ul class="ul-tree-lv-1">
                                                            <li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/keo-dan">Keo dán</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/keo-dan-san-nhua">Keo dán sàn nhựa giá rẻ</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/phao-nhua-janmi">Phào nhựa JANMI</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/phao-go-tu-nhien">Phào gỗ tự nhiên</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/xop-foam-san-go">Xốp, Foam sàn gỗ</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/phu-kien-phao-nhua-chan-tuong">Phào nhựa chân tường</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/op-bang-phao-nhua-op-tran-trong-nha">Phụ kiện ốp trần trong nhà</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/phao-nep-thanh-ly">Phào nẹp thanh lý</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/tam-hdf">Tấm HDF</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/phu-kien-op-tuong-op-tran">Phụ kiện ốp tường - ốp...</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/phu-kien-tam-op-nano-timberman">Phụ kiện tấm Ốp Nano TimberMan</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/phao-nep-kim-loai">Phào nẹp kim loại</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/nep-nhua">Nẹp nhựa</a><ul class="ul-tree-lv-2"></ul></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0)" class="link" title="Sàn gỗ thanh lý">
                                                        <img src="../noithathunggia/uploads/2020/05/21/gocongnghiepe209.png?v=1.0.0"
                                                        class="img-fluid mr-2" alt="Sàn gỗ thanh lý" />Sàn gỗ thanh lý
                                                    </a>
                                                    <div class="subcate">
                                                        <ul class="ul-tree-lv-1">
                                                            <li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-thanh-ly-tong-hop">Sàn Gỗ Thanh lý Tổng Hợp</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-viet-nam-thanh-ly-san-go-thanh-ly">Sàn gỗ Việt Nam thanh lý</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-viet-nam-thanh-ly-8mm">Sàn gỗ Việt Nam thanh lý...</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-viet-nam-thanh-ly-12mm">Sàn gỗ Việt Nam thanh lý...</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-thanh-ly-8mm">Sàn gỗ thanh lý 8mm</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-nhua-thanh-ly-san-go-thanh-ly">Sàn nhựa thanh lý</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-victory">Sàn gỗ Victory</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-prince">Sàn gỗ Prince</a><ul class="ul-tree-lv-2"></ul></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0)" class="link" title="Trang trí nội thất">
                                                        <img src="../noithathunggia/uploads/2020/05/21/bede209.png?v=1.0.0"
                                                        class="img-fluid mr-2" alt="Trang trí nội thất" />Trang trí nội thất
                                                    </a>
                                                    <div class="subcate">
                                                        <ul class="ul-tree-lv-1">
                                                            <li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/op-tuong-trong-nha">Ốp tường trong nhà</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/tam-op-nano">Tấm ốp Nano TimberMan</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/tam-op-tuong-pvc">Tấm ốp tường PVC</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/tam-op-tran-tuong">Tấm ốp trần tường</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/op-tuong-van-da">Ốp tường vân đá</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/op-bang-go-cn">Ốp tường gỗ công nghiệp</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/op-bang-go-tu-nhien">Ốp tường gỗ tự nhiên</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/op-tuong-bang-tam-3d">Tấm ốp tường 3D</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/tam-nhua-op-tuong">Tấm nhựa ốp tường</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/op-tuong-biowood">Ốp tường Biowood</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/giay-dan-tuong">Giấy dán tường</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/giay-dan-tuong-trung-quoc">Giấy dán tường Trung Quốc</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/giay-dan-tuong-han-quoc">Giấy dán tường Hàn Quốc</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/giay-dan-tuong-nhat-ban">Giấy dán tường Nhật Bản</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/giay-dan-tuong-thanh-ly">Giấy dán tường thanh lý</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/op-tran-trong-nha">Ốp trần trong nhà</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/tam-op-tran-pvc">Tấm ốp trần PVC TimberMan</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/op-bang-tam-tran-tha-pvc">Ốp trần bằng tấm trần thả...</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/op-bang-go-cn-op-tran-trong-nha">Ốp trần bằng gỗ công nghiệp</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/op-bang-go-tu-nhien-op-tran-trong-nha">Ốp trần bằng gỗ tự nhiên</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/op-tran-gia-re">Ốp trần giá rẻ</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/rem-cua">Rèm cửa</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/rem-go-wood-blinds-origine-bass">Rèm gỗ Wood Blinds Origine Bass</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/rem-la-doc-vertical">Rèm lá dọc Vertical</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/rem-cau-vong-combi">Rèm cầu vồng - Combi</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/rem-cuon-1-lop-roll-screen">Rèm cuốn 1 lớp Roll Screen</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/bac-cau-thang-go-cong-nghiep">Bậc cầu thang gỗ công nghiệp</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/tham-trai-san">Thảm trải sàn</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/tham-tho-nhi-ky">Thảm Thổ Nhĩ Kỳ</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/tham-bi">Thảm Bỉ</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/tranh-gach-3d">Tranh Gạch 3D</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/gach-vi-tinh-3d">Gạch Vi Tinh 3D</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/gach-3d-cham-khac-noi">Gạch 3D Chạm Khắc Nổi</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/gach-3d-phu-men-uv">Gạch 3D Phủ Men UV</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/gach-kinh-5d">Gạch Kính 5D</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/tranh-kinh-3d">Tranh Kính 3D</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-go-noi-that">Sàn gỗ Nội Thất</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-phong-ngu">Sàn gỗ phòng ngủ</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/san-go-phong-khach">Sàn gỗ phòng khách</a><ul class="ul-tree-lv-3"></ul></li></ul></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0)" class="link" title="Trang trí ngoại thất">
                                                        <img src="../noithathunggia/uploads/2020/05/21/homee209.png?v=1.0.0"
                                                        class="img-fluid mr-2" alt="Trang trí ngoại thất" />Trang trí ngoại thất
                                                    </a>
                                                    <div class="subcate">
                                                        <ul class="ul-tree-lv-1">
                                                            <li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/vi-gach-da">Vỉ gạch đá</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/thanh-che-nang">Thanh che nắng</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/go-nhua-ngoai-troi">Gỗ nhựa ngoài trời</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/go-nhua-ngoai-troi-timberman">Gỗ nhựa ngoài trời TimberMan</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/gach-go">Gạch Gỗ</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/gian-hoa-ngoai-troi">Giàn hoa ngoài trời</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/hang-rao-ngoai-troi">Hàng rào ngoài trời</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/lan-can-ban-cong">Lan can - ban công</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/ban-ghe-ngoai-troi">Bàn ghế ngoài trời</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/go-nhua-ngoai-troi-chau-hoa-go">Chậu hoa gỗ</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/lam-go-trang-tri">Lam gỗ trang trí che nắng</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/thung-rac-ngoai-troi-timberman">Thùng rác ngoài trời TimberMan</a><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/op-cot-biowood">Ốp cột Biowood</a><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/op-tuong-ngoai-troi">Ốp tường ngoài trời</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/tieu-canh-vuon-cay">Tiểu cảnh vườn cây</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/trang-tri-ban-cong">Trang trí ban công</a><ul class="ul-tree-lv-2"></ul></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0)" class="link" title="Đồ gia dụng">
                                                        <img src="../noithathunggia/uploads/2020/05/21/cleane209.png?v=1.0.0"
                                                        class="img-fluid mr-2" alt="Đồ gia dụng" />Đồ gia dụng
                                                    </a>
                                                    <div class="subcate">
                                                        <ul class="ul-tree-lv-1">
                                                            <li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/may-loc-nuoc">Máy lọc nước</a><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/cham-soc-bao-duong">Chăm sóc bảo dưỡng</a><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><a class="span-tree-node tree-lv-2" href="javascript:void(0)" data-url="/nuoc-lau-san-layer-clean">Nước lau sàn Layer Clean</a><ul class="ul-tree-lv-3"></ul></li></ul></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0)" class="link" title="Sàn tre">
                                                        <img src="../noithathunggia/uploads/2020/05/21/sannhuae209.png?v=1.0.0"
                                                        class="img-fluid mr-2" alt="Sàn tre" />Sàn tre
                                                    </a>
                                                    <div class="subcate">
                                                        <ul class="ul-tree-lv-1">
                                                            <li class="li-tree-lv-1"><a class="span-tree-node tree-lv-1" href="javascript:void(0)" data-url="/san-tre-ali">Sàn tre ali</a><ul class="ul-tree-lv-2"></ul></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!--Nút xem thêm-->
                                                <li class="list-group-item" style="cursor: pointer;">
                                                    <i class="fas fa-plus mr-3"></i>Xem thêm
                                                </li>
                            </ul>
                            <ul class="row menu-cate-mobile  d-md-none no-gutters">
                                <div class="col-3 px-1">
                                    <a href="san-go-cong-nghiep.html" class="btn btn-cate">
                                        <img src="{!!asset('noithathunggia/uploads/2020/09/07/gocongnghiepe209.png?v=1.0.0')!!}"
                                        class="img-fluid mb-2" />
                                        <div>
                                            Sàn gỗ công nghiệp
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 px-1">
                                    <a href="san-go-tu-nhien.html" class="btn btn-cate">
                                        <img src="{!!asset('noithathunggia/uploads/2020/05/21/gotunhiene209.png?v=1.0.0')!!}"
                                        class="img-fluid mb-2" />
                                        <div>
                                            Sàn gỗ tự nhiên
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 px-1">
                                    <a href="san-nhua.html" class="btn btn-cate">
                                        <img src="{!!asset('noithathunggia/uploads/2020/05/21/sannhuae209.png?v=1.0.0')!!}"
                                        class="img-fluid mb-2" />
                                        <div>
                                            Sàn nhựa vinyl
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 px-1">
                                    <a href="san-go-ngoai-troi.html" class="btn btn-cate">
                                        <img src="{!!asset('noithathunggia/uploads/2020/05/21/Go%20Ngoai%20troie209.png?v=1.0.0')!!}"
                                        class="img-fluid mb-2" />
                                        <div>
                                            Sàn gỗ ngoài trời
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 px-1">
                                    <a href="phu-kien.html" class="btn btn-cate">
                                        <img src="{!!asset('noithathunggia/uploads/2020/05/21/cleane209.png?v=1.0.0')!!}"
                                        class="img-fluid mb-2" />
                                        <div>
                                            Phụ kiện
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 px-1">
                                    <a href="san-go-thanh-ly.html" class="btn btn-cate">
                                        <img src="{!!asset('noithathunggia/uploads/2020/05/21/gocongnghiepe209.png?v=1.0.0')!!}"
                                        class="img-fluid mb-2" />
                                        <div>
                                            Sàn gỗ thanh lý
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 px-1">
                                    <a href="trang-tri-noi-that.html" class="btn btn-cate">
                                        <img src="{!!asset('noithathunggia/uploads/2020/05/21/bede209.png?v=1.0.0')!!}"
                                        class="img-fluid mb-2" />
                                        <div>
                                            Trang trí nội thất
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 px-1">
                                    <a href="trang-tri-ngoai-that.html" class="btn btn-cate">
                                        <img src="{!!asset('noithathunggia/uploads/2020/05/21/homee209.png?v=1.0.0')!!}"
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