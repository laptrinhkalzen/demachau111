@extends('frontend.layouts.master')
@section('content')
<body>
  
  <div class="container my-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb jan-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
      </ol>
    </nav>
  </div>
  <form id="order-form">
    <section class="list-product-cart">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
            <div class="table-responsive">
              <table class="table table-borderless jan-table-cart mb-4">
                <thead>
                  <tr>
                    <th>
                      <label class="label-checkbox mb-0 ">
                        Sản phẩm
                        <input type="checkbox" class="cbx-affectedd-all" checked>
                        <span class="checkmark"></span>
                      </label>
                    </th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                  </tr>
                </thead>
                <tbody class="_binding_order">
                  <tr class="item" id="item-20182" data-id="20182" data-sale-price="250000" data-name="Sàn gỗ WOODMAN O127" data-is-flash-sale="0">
                    <td>
                      <label class="label-checkbox label-2 mb-0 ">
                        <input type="checkbox" class="choosen-item">
                        <span class="checkmark"></span>
                        <div class="d-flex">
                          <div class="image-product mr-3">
                            <img src="./gio-hang_files/san-go-woodman-o127-1.jpg" class="" alt="Sàn gỗ WOODMAN O127">
                          </div>
                          <div class="text align-self-center">
                            <h6 class="name-product">Sàn gỗ WOODMAN O127</h6>
                            <div>Kích thước: 8    x    193    x    1283</div>
                            <div class="color-828282" style="display:none">Màu:
                              <select class="item-color-code">
                              </select>
                            </div>
                            <div class="item-promotion" id="item-promotion-20182" data-product-id="20182">
                              <label class="label-checkbox mb-2 ">
                                Miễn phí công TƯ VẤN, KHẢO SÁT tại nhà
                                <input type="checkbox" checked="" class="choose-promotion" data-is-discount-price="0" data-value="5" data-type="free-setup" data-id="2" data-name="Miễn phí công TƯ VẤN, KHẢO SÁT tại nhà">
                                <span class="checkmark" style="border-radius: 50%;"></span>
                              </label>
                              <label class="label-checkbox mb-2 ">
                                Đơn hàng trên 15tr hoặc trên 70m2 thì miễn phí vận chuyển bán kính 15km
                                <input type="checkbox" checked="" class="choose-promotion" data-is-discount-price="0" data-value="0" data-type="free-setup" data-id="8" data-name="Đơn hàng trên 15tr hoặc trên 70m2 thì miễn phí vận chuyển bán kính 15km">
                                <span class="checkmark" style="border-radius: 50%;"></span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </label>
                    </td>
                    <td>
                      <div class="price-new " data-sale-price="250000" data-is-flash-sale="0">
                        250.000đ đ/m2
                      </div>
                      <div class="price-old">315.000đ đ</div>
                    </td>
                    <td>
                      <div class="group-amount d-flex mb-3">
                        <button class="btn minus" type="button">
                        <i class="fas fa-minus"></i>
                        </button>
                        <input type="number" class="form-control mx-2 quantity" value="">
                        <button class="btn plus" type="button">
                        <i class="fas fa-plus"></i>
                        </button>
                      </div>
                    </td>
                    <td>
                      <div class="sum">
                        <span class="item-sum" data-item-sum="">250,000</span> đ
                      </div>
                    </td>
                    <td><a href="javascript:void(0)" class="remove-cart-item"><small>x</small></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-12">
            <div class="total-pay">
              <div class="d-flex ">
                <label class="mr-2">Tổng tiền:</label>
                <div class="ml-auto"><span id="order-sum" data-price="">0</span> đ</div>
              </div>
              <div class="d-flex mb-2">
                <label class="mr-2">Giảm:</label>
                <div class="ml-auto"><span id="order-discount" data-price="">0</span> đ</div>
              </div>
              <div class="d-flex">
                <label class="mr-2">Thanh toán:</label>
                <div class="ml-auto color-EE7D22 font-weight-600"><span id="order-price" data-price="">0</span> đ</div>
              </div>
              <button class="btn btn-save w-100 my-2" type="submit">Đặt hàng</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="infor-customer">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 col-lg-9 col-md-8 col-12">
            <div>
              <div class="heading">
                Thông tin khách hàng
              </div>
              <div>
                <label class="label-checkbox d-inline-block mr-3">
                  Nam
                  <input type="radio" name="gender-radio" value="male" checked />
                  <span class="checkmark" style="border-radius: 50%;"></span>
                </label>
                <label class="label-checkbox d-inline-block">
                  Nữ
                  <input type="radio" name="gender-radio" value="female" />
                  <span class="checkmark" style="border-radius: 50%;"></span>
                </label>
              </div>
              <div class="form-row mb-4">
                <div class="col-sm-6 col-12">
                  <input type="text" class="form-control mb-3 name" placeholder="Họ và tên" required>
                </div>
                <div class="col-sm-6 col-12">
                  <input type="text" class="form-control mb-3 phone-number" placeholder="Số điện thoại" required>
                </div>
                <div class="col-sm-12 col-12">
                  <textarea rows="4" type="text" class="form-control mb-3 note"
                  placeholder="Ghi chú" minlength="10"></textarea>
                </div>
              </div>
              <div class="heading">
                Chọn địa chỉ và thời gian nhận hàng
              </div>
              <div class="form-row mb-4">
                <div class="col-sm-6 col-12">
                  <select class="form-control mb-3 tinh-thanh" required>
                    <option hidden value="">Chọn Tỉnh/Thành</option>
                    <option value="92">Cần Thơ</option>
                    <option value="95">Bạc Liêu</option>
                    <option value="27">Bắc Ninh</option>
                    <option value="83">Bến Tre</option>
                    <option value="52">Bình Định</option>
                    <option value="74">Bình Dương</option>
                    <option value="70">Bình Phước</option>
                    <option value="60">Bình Thuận</option>
                    <option value="96">Cà Mau</option>
                    <option value="04">Cao Bằng</option>
                    <option value="66">Đắk Lắk</option>
                    <option value="48">Đà Nẵng</option>
                    <option value="67">Đắk Nông</option>
                    <option value="11">Điện Biên</option>
                    <option value="75">Đồng Nai</option>
                    <option value="87">Đồng Tháp</option>
                    <option value="64">Gia Lai</option>
                    <option value="02">Hà Giang</option>
                    <option value="35">Hà Nam</option>
                    <option value="42">Hà Tĩnh</option>
                    <option value="30">Hải Dương</option>
                    <option value="93">Hậu Giang</option>
                    <option value="01">Hà Nội</option>
                    <option value="17">Hoà Bình</option>
                    <option value="33">Hưng Yên</option>
                    <option value="56">Khánh Hòa</option>
                    <option value="91">Kiên Giang</option>
                    <option value="62">Kon Tum</option>
                    <option value="12">Lai Châu</option>
                    <option value="68">Lâm Đồng</option>
                    <option value="20">Lạng Sơn</option>
                    <option value="10">Lào Cai</option>
                    <option value="80">Long An</option>
                    <option value="31">Hải Phòng</option>
                    <option value="36">Nam Định</option>
                    <option value="40">Nghệ An</option>
                    <option value="37">Ninh Bình</option>
                    <option value="58">Ninh Thuận</option>
                    <option value="25">Phú Thọ</option>
                    <option value="54">Phú Yên</option>
                    <option value="44">Quảng Bình</option>
                    <option value="49">Quảng Nam</option>
                    <option value="51">Quảng Ngãi</option>
                    <option value="22">Quảng Ninh</option>
                    <option value="79">Hồ Chí Minh</option>
                    <option value="45">Quảng Trị</option>
                    <option value="94">Sóc Trăng</option>
                    <option value="14">Sơn La</option>
                    <option value="72">Tây Ninh</option>
                    <option value="34">Thái Bình</option>
                    <option value="19">Thái Nguyên</option>
                    <option value="38">Thanh Hóa</option>
                    <option value="46">Thừa Thiên Huế</option>
                    <option value="82">Tiền Giang</option>
                    <option value="84">Trà Vinh</option>
                    <option value="89">An Giang</option>
                    <option value="08">Tuyên Quang</option>
                    <option value="86">Vĩnh Long</option>
                    <option value="26">Vĩnh Phúc</option>
                    <option value="15">Yên Bái</option>
                    <option value="77">Bà Rịa - Vũng Tàu</option>
                    <option value="24">Bắc Giang</option>
                    <option value="06">Bắc Kạn</option>
                  </select>
                </div>
                <div class="col-sm-6 col-12">
                  <select class="form-control mb-3 quan-huyen" disabled required>
                    <option hidden value="">Chọn Quận/Huyện</option>
                    <option value="Tân Phú">Tân Phú</option>
                  </select>
                </div>
                <div class="col-sm-6 col-12">
                  <select class="form-control mb-3 phuong-xa" disabled required>
                    <option hidden value="">Chọn Phường/Xã</option>
                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                  </select>
                </div>
                <div class="col-sm-6 col-12">
                  <input type="text" class="form-control mb-3 so-nha" placeholder="Số nhà">
                </div>
              </div>
              <div class="mb-5">
                <label class="label-checkbox ">
                  Cà thẻ khi nhận hàng
                  <input type="checkbox" class="extra-infomation" data-content="Cà thẻ khi nhận hàng">
                  <span class="checkmark"></span>
                </label>
                <label class="label-checkbox ">
                  Xuất hóa đơn công ty
                  <input type="checkbox" class="extra-infomation" data-content="Xuất hóa đơn công ty">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>
  <!-- Modal đơn hàng -->
  <div class="modal jan-modal fade" id="modal-don-hang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h6 class="modal-title font-weight-bold">Đơn hàng</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body  pt-0" style="color: #4f4f4f;">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <p> Mã số đơn hàng: <span class="font-weight-600 order-code">1029xxx2833</span></p>
              <div class="row">
                <div class="mb-3 col-lg-6 col-md-12 col-12">
                  <label class="font-weight-bold mb-1 ">Thông tin khách hàng</label>
                  <div class="customer-id" data-id="0" style="display:none;"></div>
                  <div>- Anh/ Chị: <span class="font-weight-600 customer-name">Nguyễn Tiến Đức</span></div>
                  <div>- SĐT: <span class="font-weight-600 customer-phone"> 0292938333</span></div>
                  <div>- Địa chỉ:<span class="font-weight-600 customer-address"> Tân Triều - Hà Đông - Hà Nội</span></div>
                </div>
                <div class="mb-3 col-lg-6 col-md-12 col-12">
                  <label class="font-weight-bold mb-1">Thông tin khác </label>
                <ul class="list_extra_infomation"></ul>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-12">
            <p> Thời gian đặt hàng: <span class="font-weight-600 order-time">10 - 02 - 2019 </span></p>
            <div class="mb-3">
              <label class="font-weight-bold mb-1 ">Thông tin đơn hàng</label>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá bán</th>
                    <th>Tổng tiền</th>
                    <th>KM đi kèm</th>
                  </tr>
                </thead>
                <tbody class="table-infomation-product">
                  <tr class="table-report-item" style="display:none">
                    <td class="product-id" hidden>1</td>
                    <td class="product-name">SP A</td>
                    <td class="product-quantity">5</td>
                    <td class="product-price">1.000.000 đ</td>
                    <td class="product-total-price">5.000.000 đ</td>
                    <td class="product-promotion">
                    <ul class="product-promotion-ul"></ul>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <hr />
          <div class="d-flex">
            <div>Số tiền cần thanh toán: </div>
            <div class="ml-auto font-weight-600 color-EE7D22 total-payment"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer justify-content-end">
      <button type="button" class="btn btn-save">Hoàn thành</button>
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