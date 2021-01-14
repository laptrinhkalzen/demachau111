
@extends('backend.layouts.master')
@section('content')
<div class="content">  
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Cập nhật</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form action="{!!route('admin.flashsale.update', ['id' => $flashsale->id])!!}" class="form-validate-jquery" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                        <fieldset>
                           <div class="col-md-10">
                            <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Tiêu đề<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="{!!is_null(old('name'))?$flashsale->name:old('name')!!}">
                                        {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                
                            </div>
                            
                                

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Ghi chú: </label>
                                    <div class="col-md-9">
                                        <textarea class="form-control ckeditor" id="note" name="note">{!!is_null(old('note'))?$flashsale->note:old('note')!!}</textarea>
                                    </div>
                                </div>
                            
                            
                              
                               <div class="form-group row">
                                <label for="example-datetime-local-input" class="col-md-3 col-form-label text-right">Thời gian bắt đầu <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <input type="datetime-local" class="form-control" name="start" value="{{ date('Y-m-d\TH:i', strtotime($flashsale->start)) }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-datetime-local-input" class="col-md-3 col-form-label text-right">Thời gian kết thúc <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <input type="datetime-local" class="form-control" name="end" value="{{ date('Y-m-d\TH:i', strtotime($flashsale->end)) }}">
                                </div>
                            </div>
                        

                            
                            <div class="form-group row">
                                     <label class="col-md-3 col-form-label text-right">Thứ tự: <span class="text-danger">*</span></label>
                                    <div class="col-md-3">
                                        <input type="text" name="order" class="form-control touchspin text-center" value="{!!is_null(old('order'))?$flashsale->order:old('order')!!}">{!!old('order')!!}
                                       
                                    </div>
                                </div>
                            </div>

                       
                       

                        </fieldset>
                        <div class="text-right">
                            <a type="button" href="{{route('admin.flashsale.index')}}" class="btn btn-secondary legitRipple">Hủy</a>
                            <button type="submit" class="btn btn-primary legitRipple">Lưu lại <i class="icon-arrow-right14 position-right"></i></button>
                        </div>


                    </form>
                </div>  
            </div>
        </div>
    </div>
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

<script src="{!! asset('assets/backend/js/custom.js') !!}"></script>

<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js') !!}"></script>
@stop