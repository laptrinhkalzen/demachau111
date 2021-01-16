@extends('backend.layouts.master')
@section('content')
<script type="text/javascript">
if ($('.ckeditor').length) {
    if(typeof (CKEDITOR) !== 'undefined' && $('#content_mac').length)
        CKEDITOR.replace('content_mac');
}
</script>

<script type="text/javascript">
 
                
function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("image1");
    preview.src = src;
    preview.style.fontSize ="1px";
  }
}
</script>
<body>

<div class="content">
   



    <form action="{!!route('admin.flashsale.update',['id' => $flashsales->id])!!}" method="POST" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title">Cập nhật</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-highlight">
                    <li class="nav-item"><a href="#left-icon-tab1" class="nav-link active" data-toggle="tab"><i class="icon-menu7 mr-2"></i> Thông tin cơ bản</a></li>
                     <li class="nav-item"><a href="#left-icon-tab2" class="nav-link" data-toggle="tab"><i class="icon-stack2 mr-2"></i>Sản phẩm khuyến mãi</a></li> 
                    <!-- <li class="nav-item"><a href="#left-icon-tab3" class="nav-link" data-toggle="tab"><i class="icon-mention mr-2"></i> Thẻ meta</a></li> -->

                </ul>
                @if(Session('success'))
                        <p>Tạo sản phẩm thành công</p>
                    @elseif(Session('error'))
                    @endif
                <div class="tab-content">
                   <div class="tab-pane fade show active" id="left-icon-tab1">
                        <div class="row">
                            <div class="col-md-10">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                           
                                    <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Tiêu đề<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="{!!is_null(old('name'))?$flashsales->name:old('name')!!}">
                                        {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                
                            </div>
      
                            </div>

                            <div class="col-md-10">

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Ghi chú: </label>
                                    <div class="col-md-9">
                                        <textarea class="form-control ckeditor" id="note" name="note">{!!is_null(old('note'))?$flashsales->note:old('note')!!}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-10">
                            <div class="form-group row">
                                <label for="example-datetime-local-input" class="col-md-3 col-form-label text-right">Thời gian bắt đầu <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <input type="datetime-local" class="form-control" name="start" value="{{ date('Y-m-d\TH:i', strtotime($flashsales->start)) }}">
                                </div>
                            </div>       
                             </div>

                            <div class="col-md-10">
                            <div class="form-group row">
                                <label for="example-datetime-local-input" class="col-md-3 col-form-label text-right">Thời gian kết thúc <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <input type="datetime-local" class="form-control" name="end" value="{{ date('Y-m-d\TH:i', strtotime($flashsales->end)) }}">
                                </div>
                            </div>
                            </div>
                            
                            <div class="col-md-10">
                            <div class="form-group row">
                                     <label class="col-md-3 col-form-label text-right">Thứ tự: <span class="text-danger">*</span></label>
                                    <div class="col-md-3">
                                        <input type="text" name="order" class="form-control touchspin text-center" value="{!!is_null(old('order'))?$flashsales->order:old('order')!!}">{!!old('order')!!}
                                       
                                    </div>
                                </div>
                                <span class="help-block">&nbsp;Flash sale có thứ tự "1" sẽ được hiển thị. Và chỉ <code>duy nhất</code> 1 flash sale được để thứ tự "1"&nbsp;</span>
                            </div>
                           
                    </div>
                </div>

                <div class="tab-pane fade" id="left-icon-tab2">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                           
                                <fieldset>
                                   <table class="table ">
                                      <thead>
                                        <tr>
                                          <th style="width: 24%;">Sản phẩm</th>
                                          <th style="width: 17%;">Giá gốc</th>
                                          <th style="width: 17%;">Giảm theo</th>
                                          <th style="width: 8%;">Số tiền giảm</th>
                                          <th style="width: 8%;">Số lượng</th>
                                          <th style="width: 17%;" >Tiền sau giảm</th>
                                          <th scope="col"></th>
                                        </tr>
                                      </thead>
                                     

                                  
                                 </table>
                                 <div class="load_delete">
                                   @foreach($flash_sale_product as $key => $flashsale)
                                    <div class="form-row form-row_{{$key}}"  style="margin-left: 0px; margin-top: 10px;">
                                        
                                   <div class="form-group col-md-3" id="vehicle-type">
                                      <select class="select2 form-control" name="product[]">
                                        <option id="product_{{$key}}"  data-price="{{$flashsale->price}}" selected="" value="{{$flashsale->product_id}}">{{$flashsale->product_name}}</option>
                                        @foreach($products as $product)
                                        <option data-price="{{$product->price}}" value="{{$product->id}}">{{$product->title}}</option>
                                         @endforeach
                                           
                                      </select>
                                  </div> 
                                     <div class="form-group col-md-2" >
                                       <input  readonly  type="number" name="price[]" value="{{$flashsale->price}}" class="price_input form-control quantity-input" required="">
                                     </div>

                                     <div class="form-group col-md-2" >
                                      <select class="select2 form-control discount_type" name="discount_type[]">
                                        @if($flashsale->discount_type==1)
                                            <option selected value="1">Tiền</option>
                                             <option  value="0">%</option>
                                            @else
                                             <option selected value="0">%</option>
                                             <option value="1">Tiền</option>
                                             @endif
                                           
                                      </select>
                                  </div> 

                                     <div id="discount_value" class="form-group col-md-1" >
                                     <input  type="text" value="{{$flashsale->discount_value}}"  name="discount_value[]" min="1" class="form-control discount_value" required="">
                                     </div>

                                     <div id="quantity" class="form-group col-md-1" >
                                     <input  type="number" value="{{$flashsale->quantity}}"  name="quantity[]" min="1" class="form-control quantity" required="">
                                     </div>

                                     <div class="form-group col-md-2" >
                                     <input readonly type="text" value="{{$flashsale->price_decrease}}"  name="price_decrease[]" min="1" class="price_reduce form-control price price-input" required="">
                                     </div>
                                     <div data-remove="{{$key}}" id="remove_{{$key}}" style="cursor:pointer; background-color:red; height:35px;" class="remove_field remove btn btn-info xoa">Xóa</div>
                                    </div>
                                    @endforeach
                                  </div>
                                  </fieldset>
                                    <button class="add_field_button btn btn-info active" style="height: 35px;">Thêm</button>
                                      <div class="input_fields_wrap">
                                    </div>
                               
                                 
                                </fieldset>
      
                            </div>

                            
                           
                           
                            
                             
                   
                    </div>
                </div>

                     
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <a type="button" href="{{route('admin.flashsale.index')}}" class="btn btn-secondary legitRipple">Hủy</a>
                            <button type="submit" class="btn btn-primary legitRipple">Lưu lại <i class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </div>
                </div>
            
        </div>
    </form>
</div>
</body>
@stop
@section('script')
@parent
   <script>
                                $(document).ready(function() {
                                var max_fields = 15; //maximum input boxes allowed
                                var wrapper = $(".input_fields_wrap"); //Fields wrapper
                                var add_button = $(".add_field_button"); //Add button ID
                                var x = 1; //initlal text box count
                                $(add_button).click(function(e){ //on add input button click
                                e.preventDefault();
                                if(x < max_fields){ //max input box allowed
                                x++; //text box increment
                                $(wrapper).append('<div class="form-row" style="margin-left: 0px; margin-top: 10px;"><div class="form-group col-md-3" id="vehicle-type"><select id="select_product" class="select2 form-control" name="product[]"><option value="">------Chọn------</option>@foreach($products as $product)<option data-price="{{$product->price}}" value="{{$product->id}}">{{$product->title}}</option>@endforeach</select></div><div class="form-group col-md-2" ><input  readonly name="price[]" type="number"  class="price_input form-control quantity-input" required=""></div><div class="form-group col-md-2 discount_type" ><select class="select2 form-control" name="discount_type[]"><option data-type="0" value="0">%</option><option data-type="1" value="1">Tiền</option></select></div><div id="discount_value" class="form-group col-md-1" ><input  type="text"   name="discount_value[]" min="1" class="form-control discount_value" required=""></div><div id="quantity" class="form-group col-md-1" ><input  type="text"  name="quantity[]" min="1" class="form-control quantity" required=""></div><div class="form-group col-md-2" ><input readonly type="text"   name="price_decrease[]" min="1" class="price_reduce form-control price price-input" required=""></div><div style="cursor:pointer; background-color:red; height:35px;" class="remove_field btn btn-info xoa">Xóa</div></div>'); 
                                     $('.select2').select2({
     //configuration
                                     });
                                }
                                });
                             
                                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                                e.preventDefault(); $(this).parent('div').remove(); x--;
                                })
                                });
                              
                            
                    
                </script>
                <script type="text/javascript">
                  $(document).ready(function () {
                               
                              $('body').delegate('#vehicle-type','change',function (){
                                 $(this).parents('.form-row').find('.price_input').val(
                                  $(this).find('.select2').find(":selected").data("price")
                                );
                                 
                                 var check = ($(this).parents('.form-row').find('.discount_type :selected').val());
                                 var price = $(this).find('.select2').find(":selected").data("price");
                                 var discount_value = $(this).parents('.form-row').find('.discount_value').val();
                                 if (check == 0) {
                                   $(this).parents('.form-row').find('.price_reduce').val(
                                      price - (discount_value/100)*price
                                      );
                                  }
                                  else{
                                    $(this).parents('.form-row').find('.price_reduce').val(
                                price - discount_value
                                );
                                }
                                });
                                 
                            

                              $('body').delegate('#discount_value','change',function (){
                                 var check = ($(this).parents('.form-row').find('.discount_type :selected').val());
                                 var price = $(this).parents('.form-row').find('.price_input').val()
                                 var discount_value = $(this).parents('.form-row').find('.discount_value').val();

                                    if (check == 0) {
                                   $(this).parents('.form-row').find('.price_reduce').val(
                                      price - (discount_value/100)*price
                                      );
                                  }
                                  else{
                                    $(this).parents('.form-row').find('.price_reduce').val(
                                price - discount_value
                                );
                                }
                                }); 
                              });
                      
                        
                </script>
<script type="text/javascript">
       $(document).ready(function() {
$('.select2').select2();
 //configuration

});

</script>
<script type="text/javascript">
  $(document).ready(function() {

      $('.remove').click(function(e){
        var remove_key=$(this).data('remove');
        var product_id=$('#product_'+remove_key).val(); 
        var flashsale_id={{$flashsales->id}}; 
      
        $.ajax({
          url:'{{route('admin.flashsale.remove')}}',
          method: 'GET',
          data:{product_id:product_id,flashsale_id:flashsale_id},
          success:function(data){
            //alert(data.success);
            if (data.success==1) {
              $('.form-row_'+ remove_key).fadeOut(200);
            }
   
          }
        });
      });

    });
</script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/selects/select2.min.js') !!}"></script>

<script src="{!! asset('assets/global_assets/js/plugins/forms/styling/uniform.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/styling/switchery.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/styling/switch.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/validation/validate.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/inputs/touchspin.min.js') !!}"></script>

<script src="{!! asset('assets/backend/js/custom.js') !!}"></script>

<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js') !!}"></script>
@stop
