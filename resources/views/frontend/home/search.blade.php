@extends('frontend.layouts.master')
@section('content')
<body>
    <section class=" pt-3 pb-4">
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
                        <img src="{!!$product->getImage()!!}" style="width: 336px; height:200px; object-fit:cover; " />
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="loc-kq">
        &nbsp
        <div class="container">
            <div class="d-flex align-items-center" style="margin-top: 5px;">
                <div>
                    Tìm thấy <span class="nuber-kq">{!!$count!!}</span> kết quả :
                </div>
                <div>
                    <ul class="nav cust-navtab1" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#news" role="tab" aria-controls="home" aria-selected="true">
                                <label class="label-checkbox mb-0">
                                    Sản phẩm
                                    <input type="checkbox" checked="" data-name="Sản phẩm">
                                    <span class="checkmark"></span>
                                </label>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="form-book">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" style="font-size: 15px;" id="news" role="tabpanel" aria-labelledby="home-tab">
                        <div class="container mb-3 client-cate">
                            <div class="bg-fff border-r-4">
                                <div class="row no-gutters">
                                    <div class="col-lg-3 col-md-4 col-12 align-self-center ">
                                        <div class="px-3 py-2" style="font-size: 13px;line-height: 1.1;">Tìm kiếm theo thương hiệu</div>
                                    </div>
                                    <div class="col-lg-8 col-md-11 col-10">
                                        <div class="swiper-container slide-brand">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="1">
                                                        <img src="../noithathunggia/uploads/2020/06/09/jan-mi-logo-thuong-hieu.jpg" class="img-fluid" alt="Janmi" title="Janmi" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="2">
                                                        <img src="../noithathunggia/uploads/2020/06/09/san-go-florton.jpg" class="img-fluid" alt="Florton" title="Florton" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="3">
                                                        <img src="../noithathunggia/uploads/2020/06/09/logo-dongwha.jpg" class="img-fluid" alt="DongWha" title="DongWha" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="4">
                                                        <img src="../noithathunggia/uploads/2020/06/09/thai-green-janhome-logo.png" class="img-fluid" alt="ThaiGreen" title="ThaiGreen" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="5">
                                                        <img src="../noithathunggia/uploads/2020/06/09/Kronotex_Logo_janhome.jpg" class="img-fluid" alt="Kronotex" title="Kronotex" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="6">
                                                        <img src="../noithathunggia/uploads/2020/06/09/newsky-san-go-logo-thuong-hieu.jpg" class="img-fluid" alt="Newsky" title="Newsky" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="7">
                                                        <img src="../noithathunggia/uploads/2020/06/09/28976-600x800-1.jpg" class="img-fluid" alt="Classen" title="Classen" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="8">
                                                        <img src="../noithathunggia/uploads/2020/06/09/logo--tablet.png" class="img-fluid" alt="wineo" title="wineo" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="10">
                                                        <img src="../noithathunggia/uploads/2020/06/09/logo-woodman_.png" class="img-fluid" alt="Woodman" title="Woodman" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="11">
                                                        <img src="../noithathunggia/uploads/2020/06/09/thai-xin.png" class="img-fluid" alt="Thaixin" title="Thaixin" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="12">
                                                        <img src="../noithathunggia/uploads/2020/06/09/logo-alsafloor-janhome.png" class="img-fluid" alt="Alsafloor" title="Alsafloor" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="13">
                                                        <img src="../noithathunggia/uploads/2020/06/09/vZZ8ngVm.jpg" class="img-fluid" alt="Masfloor" title="Masfloor" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="14">
                                                        <img src="../noithathunggia/uploads/2020/06/09/floorart-logo-janhome-1.png" class="img-fluid" alt="FloorArt" title="FloorArt" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="15">
                                                        <img src="../noithathunggia/uploads/2020/06/09/thai-royal-logo.png" class="img-fluid" alt="ThaiRoyal" title="ThaiRoyal" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="16">
                                                        <img src="../noithathunggia/uploads/2020/06/09/san-go-kendax-8mm-k8204-2.jpg" class="img-fluid" alt="Kendax" title="Kendax" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="17">
                                                        <img src="../noithathunggia/uploads/2020/06/09/hornitex-logo-san-go.jpg" class="img-fluid" alt="Hornitex" title="Hornitex" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="18">
                                                        <img src="../noithathunggia/uploads/2020/08/03/logo%20timberman.png" class="img-fluid" alt="TimberMan" title="TimberMan" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="19">
                                                        <img src="../noithathunggia/uploads/2020/08/03/janhome%20aqua.png" class="img-fluid" alt="JanHome Floor" title="JanHome Floor" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="20">
                                                        <img src="../noithathunggia/uploads/2020/08/03/logo%20ecofloor.png" class="img-fluid" alt="Ecofloor" title="Ecofloor" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border-right border-left py-1 px-3 filter-picking choose-manufacture" data-manu-id="21">
                                                        <img src="../noithathunggia/uploads/2020/08/05/logo%20kostlich.png" class="img-fluid" alt="Kostlich" title="Kostlich" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-2 text-center">
                                        <a href="javascript:;" onclick="expandClient()" class="btn btn-sm pt-2 "><i class="fas fa-chevron-down"></i></a>
                                    </div>
                                </div>
                                <div class="full-client">
                                    <div class="row no-gutters">
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="1">
                                                <img src="../noithathunggia/uploads/2020/06/09/jan-mi-logo-thuong-hieu.jpg" class="img-fluid" alt="Janmi" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="2">
                                                <img src="../noithathunggia/uploads/2020/06/09/san-go-florton.jpg" class="img-fluid" alt="Florton" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="3">
                                                <img src="../noithathunggia/uploads/2020/06/09/logo-dongwha.jpg" class="img-fluid" alt="DongWha" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="4">
                                                <img src="../noithathunggia/uploads/2020/06/09/thai-green-janhome-logo.png" class="img-fluid" alt="ThaiGreen" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="5">
                                                <img src="../noithathunggia/uploads/2020/06/09/Kronotex_Logo_janhome.jpg" class="img-fluid" alt="Kronotex" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="6">
                                                <img src="../noithathunggia/uploads/2020/06/09/newsky-san-go-logo-thuong-hieu.jpg" class="img-fluid" alt="Newsky" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="7">
                                                <img src="../noithathunggia/uploads/2020/06/09/28976-600x800-1.jpg" class="img-fluid" alt="Classen" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="8">
                                                <img src="../noithathunggia/uploads/2020/06/09/logo--tablet.png" class="img-fluid" alt="wineo" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="10">
                                                <img src="../noithathunggia/uploads/2020/06/09/logo-woodman_.png" class="img-fluid" alt="Woodman" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="11">
                                                <img src="../noithathunggia/uploads/2020/06/09/thai-xin.png" class="img-fluid" alt="Thaixin" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="12">
                                                <img src="../noithathunggia/uploads/2020/06/09/logo-alsafloor-janhome.png" class="img-fluid" alt="Alsafloor" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="13">
                                                <img src="../noithathunggia/uploads/2020/06/09/vZZ8ngVm.jpg" class="img-fluid" alt="Masfloor" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="14">
                                                <img src="../noithathunggia/uploads/2020/06/09/floorart-logo-janhome-1.png" class="img-fluid" alt="FloorArt" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="15">
                                                <img src="../noithathunggia/uploads/2020/06/09/thai-royal-logo.png" class="img-fluid" alt="ThaiRoyal" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="16">
                                                <img src="../noithathunggia/uploads/2020/06/09/san-go-kendax-8mm-k8204-2.jpg" class="img-fluid" alt="Kendax" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="17">
                                                <img src="../noithathunggia/uploads/2020/06/09/hornitex-logo-san-go.jpg" class="img-fluid" alt="Hornitex" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="18">
                                                <img src="../noithathunggia/uploads/2020/08/03/logo%20timberman.png" class="img-fluid" alt="TimberMan" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="19">
                                                <img src="../noithathunggia/uploads/2020/08/03/janhome%20aqua.png" class="img-fluid" alt="JanHome Floor" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="20">
                                                <img src="../noithathunggia/uploads/2020/08/03/logo%20ecofloor.png" class="img-fluid" alt="Ecofloor" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                            <div class="border py-1 px-3 filter-picking choose-manufacture" data-manu-id="21">
                                                <img src="../noithathunggia/uploads/2020/08/05/logo%20kostlich.png" class="img-fluid" alt="Kostlich" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-cate">
                            <div class="container ">
                                <div class="bg-fff border-r-4 px-3 py-2 mb-3">
                                    <div class="row">
                                        <div class="col-xl-2 col-md-6 col-sm-12 col-12">
                                            <div class="form-group d-flex mb-2 mb-lg-0 small py-2">
                                                <label for="formControlRange " class="mb-0 mr-3 ">Tìm kiếm theo</label>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-md-6 col-sm-12 col-12">
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
                                        <div class="col-xl-8 col-md-12 col-12 align-self-center">
                                            <form>
                                                <div class="form-row">
                                                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                        <select class="form-control mb-2 mb-lg-0 filter-select dynamic-filter" data-spec-id="17">
                                                            <option hidden value="">Bảo hành</option>
                                                            <option value="">Tất cả</option>
                                                            <option value="10 năm">10 năm</option>
                                                            <option value="15 năm">15 năm</option>
                                                            <option value="20 Năm">20 Năm</option>
                                                            <option value="5 năm">5 năm</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                        <select class="form-control mb-2 mb-lg-0 filter-select dynamic-filter" data-spec-id="70">
                                                            <option hidden value="">Độ dày</option>
                                                            <option value="">Tất cả</option>
                                                            <option value="10 mm">10 mm</option>
                                                            <option value="10mm">10mm</option>
                                                            <option value="12">12</option>
                                                            <option value="12 mm">12 mm</option>
                                                            <option value="12mm">12mm</option>
                                                            <option value="7 mm">7 mm</option>
                                                            <option value="8 mm">8 mm</option>
                                                            <option value="8mm">8mm</option>
                                                            <option value="9 mm">9 mm</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                        <select class="form-control mb-2 mb-lg-0 filter-select dynamic-filter" data-spec-id="45">
                                                            <option hidden value="">Độ Mài Mòn</option>
                                                            <option value="">Tất cả</option>
                                                            <option value="8mm">8mm</option>
                                                            <option value="AC4">AC4</option>
                                                            <option value="AC5">AC5</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                        <select class="form-control mb-2 mb-lg-0 filter-select dynamic-filter" data-spec-id="1">
                                                            <option hidden value="">Kích thước</option>
                                                            <option value="">Tất cả</option>
                                                            <option value=" 12 x 114 x 1221 "> 12 x 114 x 1221 </option>
                                                            <option value=" x  120  x 1200 "> x  120  x 1200 </option>
                                                            <option value=" x  190  x 1200 "> x  190  x 1200 </option>
                                                            <option value=" x  x "> x  x </option>
                                                            <option value="10    x    194    x    1292">10    x    194    x    1292</option>
                                                            <option value="10    x    195    x    1845">10    x    195    x    1845</option>
                                                            <option value="10 x 123 x 1285">10 x 123 x 1285</option>
                                                            <option value="11 x 132 x 809">11 x 132 x 809</option>
                                                            <option value="12    x    102    x    600">12    x    102    x    600</option>
                                                            <option value="12    x    110    x    802">12    x    110    x    802</option>
                                                            <option value="12    x    113    x    1207">12    x    113    x    1207</option>
                                                            <option value="12    x    114    x    1221">12    x    114    x    1221</option>
                                                            <option value="12    x    115    x    1283">12    x    115    x    1283</option>
                                                            <option value="12    x    120    x    1200">12    x    120    x    1200</option>
                                                            <option value="12    x    122    x    1286">12    x    122    x    1286</option>
                                                            <option value="12    x    123    x    1208">12    x    123    x    1208</option>
                                                            <option value="12    x    123    x    802">12    x    123    x    802</option>
                                                            <option value="12    x    124    x    1206">12    x    124    x    1206</option>
                                                            <option value="12    x    128    x    1221">12    x    128    x    1221</option>
                                                            <option value="12    x    130    x    808">12    x    130    x    808</option>
                                                            <option value="12    x    136    x    1292">12    x    136    x    1292</option>
                                                            <option value="12    x    141    x    1208">12    x    141    x    1208</option>
                                                            <option value="12    x    144    x    1218">12    x    144    x    1218</option>
                                                            <option value="12    x    145    x    1210">12    x    145    x    1210</option>
                                                            <option value="12    x    160    x    1286">12    x    160    x    1286</option>
                                                            <option value="12    x    161    x    1205">12    x    161    x    1205</option>
                                                            <option value="12    x    188    x    1375">12    x    188    x    1375</option>
                                                            <option value="12    x    188    x    1845">12    x    188    x    1845</option>
                                                            <option value="12    x    191    x    1205">12    x    191    x    1205</option>
                                                            <option value="12    x    193    x    1205">12    x    193    x    1205</option>
                                                            <option value="12    x    193    x    1283">12    x    193    x    1283</option>
                                                            <option value="12    x    194    x    1286">12    x    194    x    1286</option>
                                                            <option value="12    x    195    x    1210">12    x    195    x    1210</option>
                                                            <option value="12    x    198    x    1210">12    x    198    x    1210</option>
                                                            <option value="12    x    94    x    604">12    x    94    x    604</option>
                                                            <option value="12 x 105 x 810">12 x 105 x 810</option>
                                                            <option value="12 x 107 x 810">12 x 107 x 810</option>
                                                            <option value="12 x 113 x 803">12 x 113 x 803</option>
                                                            <option value="12 x 114 x 1221 ">12 x 114 x 1221 </option>
                                                            <option value="12 x 117 x 803">12 x 117 x 803</option>
                                                            <option value="12 x 124 x 1208">12 x 124 x 1208</option>
                                                            <option value="12 x 127 x 1208">12 x 127 x 1208</option>
                                                            <option value="12 x 128 x 1221 ">12 x 128 x 1221 </option>
                                                            <option value="12 x 150 x 810">12 x 150 x 810</option>
                                                            <option value="12 x 192 x 1285">12 x 192 x 1285</option>
                                                            <option value="12 x 197 x 1218">12 x 197 x 1218</option>
                                                            <option value="12 x 198 x 1219">12 x 198 x 1219</option>
                                                            <option value="12 x 199 x 1218">12 x 199 x 1218</option>
                                                            <option value="12.3 x 108 x 810">12.3 x 108 x 810</option>
                                                            <option value="12.3 x 130 x 808">12.3 x 130 x 808</option>
                                                            <option value="1283x193x8">1283x193x8</option>
                                                            <option value="1847 x 246 x 10">1847 x 246 x 10</option>
                                                            <option value="604 x 94 x 12">604 x 94 x 12</option>
                                                            <option value="7    x    194    x    1286">7    x    194    x    1286</option>
                                                            <option value="8    x    123    x    802">8    x    123    x    802</option>
                                                            <option value="8    x    132    x    813">8    x    132    x    813</option>
                                                            <option value="8    x    136    x    1292">8    x    136    x    1292</option>
                                                            <option value="8    x    146    x    1221">8    x    146    x    1221</option>
                                                            <option value="8    x    160    x    1286">8    x    160    x    1286</option>
                                                            <option value="8    x    160    x    1380">8    x    160    x    1380</option>
                                                            <option value="8    x    190    x    1200">8    x    190    x    1200</option>
                                                            <option value="8    x    191    x    1205">8    x    191    x    1205</option>
                                                            <option value="8    x    192    x    1205">8    x    192    x    1205</option>
                                                            <option value="8    x    193    x    1205">8    x    193    x    1205</option>
                                                            <option value="8    x    193    x    1283">8    x    193    x    1283</option>
                                                            <option value="8    x    194    x    1286">8    x    194    x    1286</option>
                                                            <option value="8    x    195    x    1210">8    x    195    x    1210</option>
                                                            <option value="8    x    195    x    1288">8    x    195    x    1288</option>
                                                            <option value="8    x    196    x    1207">8    x    196    x    1207</option>
                                                            <option value="8    x    198    x    1210">8    x    198    x    1210</option>
                                                            <option value="8 x 130 x 808">8 x 130 x 808</option>
                                                            <option value="8 x 150 x 810">8 x 150 x 810</option>
                                                            <option value="8 x 192 x 1285">8 x 192 x 1285</option>
                                                            <option value="8 x 195 x 1215">8 x 195 x 1215</option>
                                                            <option value="8 x 199 x 1219">8 x 199 x 1219</option>
                                                            <option value="9    x    195    x    1288">9    x    195    x    1288</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                        <select class="form-control mb-2 mb-lg-0 filter-select color">
                                                            <option hidden value="">Màu sắc</option>
                                                            <option value="">Tất cả</option>
                                                            <option value="#0000ff">
                                                                <div class="d-flex">
                                                                    <div class="color-circle" style="background-color:#0000ff">
                                                                    </div>
                                                                    <div class="align-self-md-end" style="margin:auto">
                                                                        Hệ ánh vàng <span class="color-828282"></span>
                                                                    </div>
                                                                </div>
                                                            </option>
                                                            <option value="#514343">
                                                                <div class="d-flex">
                                                                    <div class="color-circle" style="background-color:#514343">
                                                                    </div>
                                                                    <div class="align-self-md-end" style="margin:auto">
                                                                        Óc chó sẫm <span class="color-828282"></span>
                                                                    </div>
                                                                </div>
                                                            </option>
                                                            <option value="#705c5c">
                                                                <div class="d-flex">
                                                                    <div class="color-circle" style="background-color:#705c5c">
                                                                    </div>
                                                                    <div class="align-self-md-end" style="margin:auto">
                                                                        Hệ Nâu <span class="color-828282"></span>
                                                                    </div>
                                                                </div>
                                                            </option>
                                                            <option value="#827d7d">
                                                                <div class="d-flex">
                                                                    <div class="color-circle" style="background-color:#827d7d">
                                                                    </div>
                                                                    <div class="align-self-md-end" style="margin:auto">
                                                                        Ghi đen <span class="color-828282"></span>
                                                                    </div>
                                                                </div>
                                                            </option>
                                                            <option value="#ad5252">
                                                                <div class="d-flex">
                                                                    <div class="color-circle" style="background-color:#ad5252">
                                                                    </div>
                                                                    <div class="align-self-md-end" style="margin:auto">
                                                                        Hệ đỏ <span class="color-828282"></span>
                                                                    </div>
                                                                </div>
                                                            </option>
                                                            <option value="#c2c2c2">
                                                                <div class="d-flex">
                                                                    <div class="color-circle" style="background-color:#c2c2c2">
                                                                    </div>
                                                                    <div class="align-self-md-end" style="margin:auto">
                                                                        Hệ Xám <span class="color-828282"></span>
                                                                    </div>
                                                                </div>
                                                            </option>
                                                            <option value="#fafafa">
                                                                <div class="d-flex">
                                                                    <div class="color-circle" style="background-color:#fafafa">
                                                                    </div>
                                                                    <div class="align-self-md-end" style="margin:auto">
                                                                        Hệ trắng <span class="color-828282"></span>
                                                                    </div>
                                                                </div>
                                                            </option>
                                                            <option value="#ff8040">
                                                                <div class="d-flex">
                                                                    <div class="color-circle" style="background-color:#ff8040">
                                                                    </div>
                                                                    <div class="align-self-md-end" style="margin:auto">
                                                                        Hệ cam <span class="color-828282"></span>
                                                                    </div>
                                                                </div>
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                        <select class="form-control mb-2 mb-lg-0 filter-select extra">
                                                            <option hidden value="">Bổ sung</option>
                                                            <option value="2">Giá tăng dần</option>
                                                            <option value="1">Giá giảm dần</option>
                                                            <option value="3">Nổi bật nhất</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                     <div class="list-prod-search bg-fff">
                            <div class="container">
                                <p class="txt-all-sp">Tất cả sản phẩm : <strong class="tk-keyword"></strong></p>
                            </div>
                        </div>  -->
                        <div class="row no-gutters _binding_product_query_db">
                            <div class="_get-info" data-total="41" data-keyword="Tất cả danh mục" style="display:none;"></div>
                            @foreach($search_product as $key => $product)
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                                <div class="item-product">
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
                                            <?php echo($product->getPrice())?>
                                            @else
                                            <?php echo($product->getSalePrice())?>
                                            @endif
                                        </div>
                                        @if($product->sale_price!=0)
                                        <div class="price-old">
                                            <?php echo($product->getPrice())?>
                                        </div>
                                        @else
                                        &nbsp
                                        @endif
                                        <div class="size small mb-1">
                                            Kích thước: {!!$product->size!!} mm
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
                        <div class="text-center my-5 pb-4">
                            <a href="javascript:void(0)" class="btn btn-outline-view-more _view-more-product-query-db">Xem thêm<i class="fas fa-chevron-down ml-2 " aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
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
            logged_in_greeting="Xin chào ! Chúng tôi có thể giúp gì cho bạn?"
            logged_out_greeting="Xin chào ! Chúng tôi có thể giúp gì cho bạn?">
        </div>
        <a rel="nofollow" target="_blank" href="https://zalo.me/0902480222" class="zalo">
            <i class="fa" aria-hidden="true">
            <img src="../stc-zaloprofile.zdn.vn/pc/v1/images/zalo_sharelogo.png" width="25px" />
            </i>
            <span>Zalo: 0902480222</span>
        </a>
    </div>
</div>
<div class="btn-fixed">
    <div class="text-center mb-3">
        <a rel="nofollow" href="javascript:;" onclick=" topFunction() " class="">
            <img src="images/scroll3860.svg?v=1" class="img-fluid " />
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
js.src = '../connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
}, 1200);
</script>
<!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-98267825-1"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());    gtag('config', 'UA-98267825-1'); </script>

<script type="text/javascript" src="{!!asset('js/esSearchController.js?v=1.0.0')!!}"></script>
</body>
@stop