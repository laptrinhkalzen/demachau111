@extends('frontend.layouts.master')
@section('content')
<style type="text/css">
    #content_news{
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* number of lines to show */
        -webkit-box-orient: vertical;
    }
.product-price  ul,ul li{
  list-style:disc;
  padding:0;
  margin-left:7px;
}
.category ul li{
    list-style:none;
    padding:0;
    margin:0;
}
    .breadcrumbs{
        padding: 10px;
    }
    </style>
<div class="breadcrumbs">
            <div class="container">
                
            </div>
        </div>
        <!-- End Breadcrumbs -->
        
        <!-- Product Style -->
        <section class="product-area shop-sidebar shop section">
            <div class="container">
                <div class="row">
                    @foreach($detail_news as $key => $news) 
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="shop-sidebar">
                                <!-- Single Widget -->
                                <div class="single-widget category" style="background-color: white;">
                                    <h3 style="margin-bottom: 3px;" class="title">Danh mục tin tức</h3>
                                    <ul class="categor-list">
                                        @foreach($category as $key => $categories)
                                        <li style="border-bottom: 1px solid #d2d4d2;"><a style="line-height: 1.5;" href="{{route('news.category',['alias'=>$categories->alias])}}">{{$categories->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="single-widget category" style="background-color: white;">
                                    <h3 style="margin-bottom: 3px;" class="title">Tin tức mới nhất</h3>
                                    <ul class="categor-list">
                                        @foreach($some_news as $some_new)
                                        <li style="border-bottom: 1px solid #d2d4d2;"><a style="font-size: 12px; line-height: 1.5;" href="{{route('news.detail',['alias'=>$some_new->alias])}}">{{$some_new->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!--/ End Single Widget -->
                        </div>
                    </div>
                    
                               
                                
                                
                                
                                
                        
                    <div class="col-lg-9 col-md-8 col-12" style="background-color: white;">
                       <h6 class="entry-category is-xsmall mt-4">
                        <a href="{{route('news.list')}}" rel="category tag">Tin tức</a></h6>

                    <h1 style="font-size: 30px;" class="entry-title mt-4">{{$news->title}}</h1>
                    <div class="product-content">
                                        <a style="color: lightgray;" >{!!date('d-m-Y', strtotime($news->date))!!}</a>
                                        <div class="fb-like" data-href="{!!$news->url()!!}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>


                                    </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="single-product">
                                
                                    <div class="product-content">
                                        <div class="product-price">
                                            <span>{!!$news->content!!}</span>
                                        </div>
                                    </div>
                                </div>
                    <div class="alert alert-no-border alert-share d-flex mb-6" role="alert">
                        <span class="flex-1 fw-600 text-uppercase">Share:</span>
                        <div  class="social-buttons text-unset" >

                            <a class="social-twitter mx-2" href="javascript:void(0)" onclick="window.open('https://twitter.com/share?text=&url={!! $news->url() !!}', 'Twitter', 'width=600,height=400')"><i class="fa fa-twitter"></i></a>
                            <a class="social-dribbble mx-2" href="javascript:void(0)" onclick="window.open('http://pinterest.com/pin/create/button/?url={!! $news->url() !!}', 'Pinterest', 'width=600,height=400')"><i class="fa fa-dribbble"></i></a>
                            <a class="social-instagram ml-2" href="javascript:void(0)" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url={!! $news->url() !!}', 'Linkedin', 'width=600,height=400')"><i class="fa fa-instagram"></i></a>  
                        </div>
                    </div>
                    <h3>Bình luận</h3>
                    <div style="margin-bottom: 10px;" class="fb-comments" data-href="{!!$news->url()!!}" data-width="" data-numposts="7"></div>
                            </div>
                        </div>

                        
                    </div>

                    @endforeach

                </div>
            </div>
        </section>
        <!--/ End Product Style 1  -->  

    
</div><!-- .entry-content2 -->
        
       
        
       
@stop