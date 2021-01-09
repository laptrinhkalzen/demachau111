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
     
        $danh_muc_cha=DB::table('category')->where('parent_id',0)->where('type',4)->get();
        $product_danh_muc_cha=DB::table('product')->join('product_category','product_category.product_id','=','product.id')->get();
        $danh_muc_con=DB::table('category')->where('parent_id','!=',0)->get();
        $show = 1;
       
        return view('frontend/home/index', compact('danh_muc_cha','product_danh_muc_cha','danh_muc_con','total','show'));
    }
    
    public function event() {
        return view('frontend/home/event');
    }
}
