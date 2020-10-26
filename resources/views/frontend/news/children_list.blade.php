@extends('frontend.layouts.master')
@section('content')
<body>
    <div class="banner-page py-3 mb-4" style="margin-top:30px">
        <div class="container align-self-center">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-12 ">
                    <h1 class="text-center">{{$category_title->title}}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row flex-md-row-reverse">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                
                <div class="list-menu-right">
                    <div class="heading">
                        <img src="{!!asset('images/menu-icon8bd3.svg?v=qef7cssZHgAquLTKdp4RlX3HxrirbSXXNcb4nv352dM')!!}" class="img-fluid mr-2" />Danh mục
                    </div>
                    <ul class="list">
                        <li><a href="tin-khuyen-mai.html" title="TIN KHUYẾN MẠI">TIN KHUYẾN MẠI</a></li>
                        <li><a href="bao-gia-thi-cong-lap-dat.html" title="BÁO GIÁ THI CÔNG LẮP ĐẶT">BÁO GIÁ THI CÔNG LẮP ĐẶT</a></li>
                        <li><a href="tu-van.html" title="TƯ VẤN">TƯ VẤN</a></li>
                        <li><a href="tai-catalogue.html" title="Tải Catalogue">TẢI CATALOGUE</a></li>
                        <li><a href="nha-cung-cap-vat-lieu.html" title="NHÀ CUNG CẤP VẬT LIỆU">NHÀ CUNG CẤP VẬT LIỆU</a></li>
                        <li><a href="thu-vien-3d-kien-truc-su.html" title="Thư viện 3D kiến trúc sư">THƯ VIỆN 3D KIẾN TRÚC SƯ</a></li>
                        <li><a href="video-janhome.html" title="VIDEO JANHOME">VIDEO JANHOME</a></li>
                        <li><a href="he-thong-san-go-vat-lieu-hoan-thien-janhome.html" title="Hệ thống sàn gỗ - vật liệu hoàn thiện JANHOME">HỆ THỐNG SÀN GỖ - VẬT LIỆU HOÀN THIỆN JANHOME</a></li>
                        <li><a href="tuyen-dung.html" title="TUYỂN DỤNG">TUYỂN DỤNG</a></li>
                        <li><a href="tin-janhome.html" title="TIN JANHOME">TIN JANHOME</a></li>
                    </ul>
                </div>
                <div class="list-menu-right">
                    <div class="heading mb-md-3">
                        <img src="{!!asset('images/giftc829.svg?v=9SyPI8n17F7AMeX1L1ifHuyq4N7RRpl6-lxBALqXHbM')!!}" class="img-fluid mr-2" />Khuyến mại
                    </div>
                    <div class="list lastest-news">
                        <div class="item">
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="image mb-3">
                                        <a href="mung-ngay-doc-lap-giam-gia-cuc-soc-tai-janhome-he-thong-ban-le-san-go-vat-lieu-hoan-thien-tai-kho.html" title="Mừng ngày độc lập, giảm giá cực sốc tại JanHome, hệ thống bán lẻ sàn gỗ, vật liệu hoàn thiện tại kho">
                                            <img src="../cms.janhome.vn/uploads/thumb/2020/09/04/khuyen-mai-thang-9-2020-tai-janhome.jpg" class="img-fluid" alt="Mừng ngày độc lập, giảm giá cực sốc tại JanHome, hệ thống bán lẻ sàn gỗ, vật liệu hoàn thiện tại kho">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h6 class="title">
                                    <a href="mung-ngay-doc-lap-giam-gia-cuc-soc-tai-janhome-he-thong-ban-le-san-go-vat-lieu-hoan-thien-tai-kho.html" title="Mừng ngày độc lập, giảm giá cực sốc tại JanHome, hệ thống bán lẻ sàn gỗ, vật liệu hoàn thiện tại kho">Mừng ngày độc lập, giảm giá cực sốc tại JanHome, hệ thống bán lẻ sàn gỗ, vật liệu hoàn thiện tại kho</a>
                                    </h6>
                                    <div class="des ">
                                        <p>Trong th&aacute;ng 9/2020, JanHome đưa ra rất nhiều chương tr&igrave;nh khuyến m&atilde;i hấp dẫn, vừa giảm gi&aacute;, vừa tặng qu&agrave;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="title">
                                    <a href="khuyen-mai-thang-8-nhieu-bat-ngo-tai-janhome-he-thong-ban-le-vat-lieu-hoan-thien-tai-kho.html" title="Khuyến mãi tháng 8 nhiều bất ngờ tại JanHome, hệ thống bán lẻ vật liệu hoàn thiện tại kho.">Khuyến mãi tháng 8 nhiều bất ngờ tại JanHome, hệ thống bán lẻ vật liệu hoàn thiện tại kho.</a>
                                    </h6>
                                    <div class="time ">
                                        2020/08/03
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="title">
                                    <a href="chao-don-thang-7-voi-con-mua-khuyen-mai-tai-janhome-he-thong-ban-le-vat-lieu-hoan-thien-tai-kho.html" title="Chào đón tháng 7 với cơn mưa khuyến mãi tại JanHome, hệ thống bán lẻ vật liệu hoàn thiện tại kho">Chào đón tháng 7 với cơn mưa khuyến mãi tại JanHome, hệ thống bán lẻ vật liệu hoàn thiện tại kho</a>
                                    </h6>
                                    <div class="time ">
                                        2020/07/03
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="title">
                                    <a href="vui-tet-thieu-nhi-1-6-hoan-hi-nhan-qua-khuyen-mai-lon-cua-janhome-he-thong-ban-le-vat-lieu-hoan-thien-tai-kho.html" title="Vui tết thiếu nhi (1/6), hoan hỉ nhận quà khuyến mãi lớn của JanHome, hệ thống bán lẻ vật liệu hoàn thiện tại kho">Vui tết thiếu nhi (1/6), hoan hỉ nhận quà khuyến mãi lớn của JanHome, hệ thống bán lẻ vật liệu hoàn thiện tại kho</a>
                                    </h6>
                                    <div class="time ">
                                        2020/07/02
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-menu-right">
                    <div class="heading mb-3">
                        <img src="images/flag-iconf002.svg?v=GoDAQeasQ5QDI54pnNLz0oiRudBV9A0ehf63EdEb_1Y" class="img-fluid mr-2" />Mới cập nhật
                    </div>
                    <div class="list lastest-news">
                        <div class="item">
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="image mb-3">
                                        <a href="vi-gach-go-nhua-lat-san-nha-tam-ban-cong-san-thuong-sieu-chiu-nuoc.html" title="Vỉ gạch gỗ nhựa lát sàn nhà tắm, ban công, sân thượng siêu chịu nước">
                                            <img src="../cms.janhome.vn/uploads/thumb/2020/09/18/vi-gach-go-nhua-lat-san-ban-cong-san-thuong-sieu-chiu-nuoc.jpg" class="img-fluid" alt="Vỉ gạch gỗ nhựa lát sàn nhà tắm, ban công, sân thượng siêu chịu nước">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h6 class="title">
                                    <a href="vi-gach-go-nhua-lat-san-nha-tam-ban-cong-san-thuong-sieu-chiu-nuoc.html" title="Vỉ gạch gỗ nhựa lát sàn nhà tắm, ban công, sân thượng siêu chịu nước">Vỉ gạch gỗ nhựa lát sàn nhà tắm, ban công, sân thượng siêu chịu nước</a>
                                    </h6>
                                    <div class="des ">
                                        <p>Vỉ gạch gỗ nhựa l&agrave; vật liệu l&aacute;t s&agrave;n hiện đại, được tạo n&ecirc;n từ sợi gỗ, nhựa c&ugrave;ng c&aacute;c...
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class=" col-md-12 ">
                                        <h6 class="title">
                                        <a href="6-bi-quyet-tao-nen-mot-khong-gian-song-yen-binh-de-chiu.html" title="6 bí quyết tạo nên một không gian sống yên bình, dễ chịu">6 bí quyết tạo nên một không gian sống yên bình, dễ chịu</a>
                                        </h6>
                                        <div class="time ">
                                            2020/09/16
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class=" col-md-12 ">
                                        <h6 class="title">
                                        <a href="chi-tiet-ve-tieu-chuan-e0-e1-cua-san-go-cong-nghiep.html" title="Chi tiết về tiêu chuẩn E0, E1 của sàn gỗ công nghiệp">Chi tiết về tiêu chuẩn E0, E1 của sàn gỗ công nghiệp</a>
                                        </h6>
                                        <div class="time ">
                                            2020/09/15
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class=" col-md-12 ">
                                        <h6 class="title">
                                        <a href="thi-cong-san-go-janmi-o120-12mm-ban-nho-tai-can-ho-cao-cap-khu-do-thi-ecopark.html" title="Thi công sàn gỗ Janmi O120 12mm bản nhỏ tại căn hộ cao cấp khu đô thị Ecopark">Thi công sàn gỗ Janmi O120 12mm bản nhỏ tại căn hộ cao cấp khu đô thị Ecopark</a>
                                        </h6>
                                        <div class="time ">
                                            2020/09/14
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class=" col-md-12 ">
                                        <h6 class="title">
                                        <a href="ve-dep-thuc-te-cua-san-go-floorart-r09c-tai-p1803-toa-nha-legacy-106-nguy-nhu-kon-tum.html" title="Vẻ đẹp thực tế của sàn gỗ floorart R09c tại P1803 tòa nhà LeGacy - 106 Nguy Như Kon Tum">Vẻ đẹp thực tế của sàn gỗ floorart R09c tại P1803 tòa nhà LeGacy - 106 Nguy Như Kon Tum</a>
                                        </h6>
                                        <div class="time ">
                                            2020/09/12
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class=" col-md-12 ">
                                        <h6 class="title">
                                        <a href="tim-hieu-ve-tieu-chuan-ac-cua-san-go-thong-so-ac3-ac4-ac5-co-y-nghia-gihtml.html" title="Tìm hiểu về tiêu chuẩn AC của sàn gỗ. Thông số AC3, AC4, AC5 có ý nghĩa gì?">Tìm hiểu về tiêu chuẩn AC của sàn gỗ. Thông số AC3, AC4, AC5 có ý nghĩa gì?</a>
                                        </h6>
                                        <div class="time ">
                                            2020/09/11
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                    <div class="heading pb-2 border-bottom mb-3 d-flex">
                        <div class="h5 font-weight-600 mb-0 ">
                            {{$category_title->title}}
                        </div>
                    </div>
                    <div class="slide-blog-cate swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach($news_arr as $key=> $news)
                            <div class="swiper-slide">
                                <div class="item mb-3">
                                    <a href="{!! route('news.detail', ['alias' => $news->alias]) !!}">
                                        <img src="{{$news->getImage()}}" style="height: 450px"class="w-100" />
                                    </a>
                                    <h2 class="title">
                                    <a href="{!! route('news.detail', ['alias' => $news->alias]) !!}" >{!!$news->title!!}</a>
                                    </h2>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                    <div class="list-blog-cate-2 binding-blog">
                        @foreach($news_arr as $key=>$news)
                        <div class="item item-blog-km">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                    <div class="image mb-3 mb-sm-0">
                                        <a href="{!! route('news.detail', ['alias' => $news->alias]) !!}">
                                            <img src="{{$news->getImage()}}" class="img-fluid" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8  col-12 ">
                                    <h5 class="title">
                                    <a href="{!! route('news.detail', ['alias' => $news->alias]) !!}">{!!$news->title!!}</a>
                                    </h5>
                                    <div style="display:flex; align-items:center">
                                        <div class="time">
                                            {!!$news->getPostSchedule()!!}  <img src="{!!asset('images/eyecda8.svg?v=0XeLHLM8IpYLOQugNrIb_MnFyB1ai4jM4Sj5aZ6mtfw')!!}" class="img-fluid mr-2" style=" margin-bottom: .1rem;" />0 lượt xem
                                        </div>
                                        <div class="small mr-3" ></div>
                                    </div>
                                    
                                    <div class="des">
                                        {!!$news->description!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="jan-pagination text-right mb-4 ">
                        
                        <select class="select-page mr-2">
                            <option value="/phong-bep/page/1" selected >1</option></select>
                            <span class="color-828282">/1</span>
                        </div>
                    </div>
                </div>
            </div>
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
                        logged_in_greeting="Janhome xin chào ! Chúng tôi có thể giúp gì cho bạn?"
                        logged_out_greeting="Janhome xin chào ! Chúng tôi có thể giúp gì cho bạn?">
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
        
    </body>
    @stop