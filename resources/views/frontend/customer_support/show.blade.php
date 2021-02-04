@extends('frontend.layouts.master')
@section('content')

<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<ul class="bread-list">
						<li><a href="{{route('home.index')}}">Trang chủ<i class="ti-arrow-right"></i></a></li>
						<li class="active"><a href="">{{$customer_sp->name}}</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="product-area shop-sidebar shop section">
<!-- 	<div class="icon-filter container" >
		<div class="row"><i class="fa fa-filter fa-2x" aria-hidden="true" style="margin:auto;" onclick="w3_open()"><span style="font-size: 22px;">Lọc</span></i></div>
	</div> -->

	<div class="container" >
		<div class="row">
			<i class="fa fa-times fa-2x" onclick="w3_close()" style="display:none;position:fixed;top: 25px;right: 10px;z-index: 1000" id="closeFilter"></i>
		</div>
	</div>

	<div class="container">
		<div class="row">	
			
			<div class="col-lg-12 col-md-12 col-12">
				<h3>{{$customer_sp->name}}</h3>
				<div style="margin-top: 20px;">{!!$customer_sp->content!!}</div>
			
		</div>
	</div>
</div>


</section>



@stop