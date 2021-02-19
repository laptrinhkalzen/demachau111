@extends('backend.layouts.master')
@section('content')
<script type="text/javascript">
if ($('.ckeditor').length) {
    if(typeof (CKEDITOR) !== 'undefined' && $('#content_mac').length)
        CKEDITOR.replace('content_mac');
}
</script>
       <script>          
function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("image1");
    preview.src = src;
    preview.style.fontSize ="1px";
  }
}
</script>
<div class="content">
   



    <form action="{!!route('admin.bank.update',['id'=>$bank->id])!!}" method="POST" enctype="multipart/form-data">
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
                     <li class="nav-item"><a href="#left-icon-tab2" class="nav-link" data-toggle="tab"><i class="icon-stack2 mr-2"></i>Thông tin tài khoản</a></li> 
                    <li class="nav-item"><a href="#left-icon-tab3" class="nav-link" data-toggle="tab"><i class="icon-mention mr-2"></i> Thẻ meta</a></li>

                </ul>

                <div class="tab-content">
                   
                        <div class="row">
                            <div class="col-md-10">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                           
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">Tiêu đề: <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="title" value="{!!is_null(old('title'))?$bank->title:old('title')!!}" required="">
                                    {!! $errors->first('title', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                            </div>
                            <div class="col-md-10">
                                
                           
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Hình ảnh: <span class="text-danger">*</span></label>
                                        <div class="col-md-10">
                                            <img src="{{url('upload/config/'.$bank->images)}}" style="height: 170px; width: 200px;" class="img-thumbnail" id="image1">
                                             <input name="images" type="file"  onchange="showPreview(event);">
                                            {!! $errors->first('images', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                    </div>
      
                            </div>

                            
                            <div class="col-md-10">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                           
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">Số tài khoản: <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="number" required="" value="{!!is_null(old('number'))?$bank->number:old('number')!!}" >
                                    {!! $errors->first('number', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                           
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">Chủ tài khoản: <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" required="" name="host_name" value="{!!is_null(old('host_name'))?$bank->host_name:old('host_name')!!}" >
                                    {!! $errors->first('host_name', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                           
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">Chi nhánh: <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="branch" required="" value="{!!is_null(old('branch'))?$bank->branch:old('branch')!!}" >
                                    {!! $errors->first('branch', '<span class="text-danger">:message</span>') !!}
                                </div>
                            </div>
                        </div>


                            <div class="col-md-10">

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-right">Nội dung: </label>
                                    <div class="col-md-10">
                                        <textarea class="form-control ckeditor" id="content" name="content">{!!is_null(old('content'))?$bank->content:old('content')!!}</textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-10">
                            <div class="form-group row">
                                     <label class="col-md-2 col-form-label text-right">Thứ tự: <span class="text-danger">*</span></label>
                                    <div class="col-md-3">
                                        <input type="text" name="order" class="form-control touchspin text-center" value="{!!is_null(old('order'))?$bank->order:old('order')!!}">
                                    </div>
                                </div>
                            </div>
                           
                             
                   
                    </div>

                     
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <a type="button" href="{{route('admin.bank.index')}}" class="btn btn-secondary legitRipple">Hủy</a>
                            <button type="submit" class="btn btn-primary legitRipple">Lưu lại <i class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </div>
                </div>
            
        </div>
    </form>
</div>
@stop
@section('script')
@parent
<script src="{!! asset('assets/global_assets/js/plugins/forms/selects/select2.min.js') !!}"></script>

<script src="{!! asset('assets/global_assets/js/plugins/forms/styling/uniform.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/styling/switchery.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/styling/switch.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/validation/validate.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/inputs/touchspin.min.js') !!}"></script>

<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js') !!}"></script>
<!-- Theme JS files -->
<script src="{!! asset('assets/global_assets/js/plugins/forms/tags/tagsinput.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/tags/tokenfield.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/ui/prism.min.js') !!}"></script>

<!-- Theme JS files -->
<script src="{!! asset('assets/global_assets/js/plugins/ui/moment/moment.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/daterangepicker.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/anytime.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/pickadate/picker.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/pickadate/picker.date.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/pickadate/picker.time.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/pickadate/legacy.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/notifications/jgrowl.min.js') !!}"></script>
<script src="{!! asset('assets/backend/ckeditor/ckeditor.js') !!}"></script>
<script src="{!! asset('assets/backend/js/custom.js') !!}"></script>

@stop
