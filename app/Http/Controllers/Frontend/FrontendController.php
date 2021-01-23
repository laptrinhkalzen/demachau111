<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repositories\CategoryRepository;
use Repositories\ConstructionRepository;
use Repositories\KeywordRepository;
use App\Repositories\ProductRepository;
use Repositories\NewsRepository;
use App\Repositories\ProductAttributeRepository;
use App\Repositories\SlideRepository;
use Repositories\AttributeRepository;
use DB;
use Carbon\Carbon;

class FrontendController extends Controller {

    public function __construct(ProductRepository $productRepo, NewsRepository $newsRepo, ProductAttributeRepository $productAttributeRepo, SlideRepository $slideRepo, CategoryRepository $categoryRepo, AttributeRepository $attributeRepo) {
        $this->productRepo = $productRepo;
        $this->newsRepo = $newsRepo;
        $this->productAttributeRepo = $productAttributeRepo;
        $this->slideRepo = $slideRepo;
        $this->categoryRepo = $categoryRepo;
        $this->attributeRepo = $attributeRepo;
    }
    public function index() {
        //cart
        $total = 0;
      
        $flashsale=DB::table('flashsale')->where('order',1)->first();
        
        $flashsale_products=DB::table('flash_sale_product')->join('product','product.id','=','flash_sale_product.product_id')->get();
        //dd($danh_muc_deal);
        $news = DB::table('news')->orderBy('ordering','asc')->where('status',1)->get();
        $danh_muc_cha=DB::table('category')->where('parent_id',0)->where('type',4)->where('status',1)->get();
        $product_danh_muc_cha=DB::table('product')->join('product_category','product_category.product_id','=','product.id')->get();
        $danh_muc_con=DB::table('category')->where('parent_id','!=',0)->where('type',4)->where('status',1)->get();
        $show = 1;
        $attributes=DB::table('product_attribute')->join('attribute','attribute.id','=','product_attribute.attribute_id')->where('attribute.parent_id','!=','0')->get();
        $product_attributes=DB::table('product_attribute')->join('attribute','attribute.id','=','product_attribute.attribute_id')->where('attribute.parent_id','!=','0')->get();
            foreach ($product_attributes as $key => $value) {
                $value->parent_name=DB::table('attribute')->where('id',$value->parent_id)->pluck('title');
            }
        $product_sale=DB::table('flashsale')->join('flash_sale_product','flash_sale_product.flash_sale_id','=','flashsale.id')->where('status',1)->where('flashsale.start','<', Carbon::now('Asia/Ho_Chi_Minh'))->where('flashsale.end','>',Carbon::now('Asia/Ho_Chi_Minh'))->get();  
          $product_attrs=$product_attributes->groupBy('product_id');
       //dd($product_danh_muc_cha);
     
        return view('frontend/home/index', compact('danh_muc_cha','news','product_danh_muc_cha','danh_muc_con','total','show','attributes','product_attrs','flashsale','flashsale_products','product_sale'));
    }
    
    public function event() {
        return view('frontend/home/event');
    }
}
