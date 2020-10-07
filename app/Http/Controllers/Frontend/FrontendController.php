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

class FrontendController extends Controller {

    public function __construct(ProductRepository $productRepo, NewsRepository $newsRepo, ProductAttributeRepository $productAttributeRepo, SlideRepository $slideRepo) {
        $this->productRepo = $productRepo;
        $this->newsRepo = $newsRepo;
        $this->productAttributeRepo = $productAttributeRepo;
        $this->slideRepo = $slideRepo;
    }
    public function index() {
        //cart
        $total = 0;
        if (!is_null(session('cart'))) {
            foreach (session('cart') as $key => $val) {
                $total += ($val['price'] * $val['quantity']);
            }
        }
        $slide1 = $this->slideRepo->getSlide1();
        $slide2 = $this->slideRepo->getSlide2();
        $banner_mid = $this->slideRepo->getBannerMid();
        $banner_left = $this->slideRepo->getBannerLeft();
        $banner_right = $this->slideRepo->getBannerRight();
        $banner_end = $this->slideRepo->getBannerEnd();
        $product_new = $this->productRepo->readNewProduct($limit = 10);
        $hot_products_slide = $this->productRepo->readHlProduct($limit = 4);
        $product_all = $this->productRepo->readAllProduct($limit = 10);
        $product_hl = $this->productRepo->readHlProduct($limit = 10);
        $industry = $this->productRepo->getIndustryProduct($limit = 8);
        $nature = $this->productRepo->getNatureProduct($limit = 8);
        $sale = $this->productRepo->getSaleProduct($limit = 10);
        $plastic = $this->productRepo->getPlasticProduct($limit = 8);
        $outdoor = $this->productRepo->getOutdoorProduct($limit = 8);
        $decor = $this->productRepo->getDecorProduct($limit = 8);
        $houseware = $this->productRepo->getHousewareProduct($limit = 8);
        $news_arr = $this->newsRepo->getAllNews($limit = 7);
        if (config('global.device') != 'pc') {
            return view('mobile/home/index', compact('total','hot_products_slide','product_new', 'product_hl', 'industry', 'nature', 'sale', 'plastic', 'news_arr','slide1','slide2','banner_mid', 'banner_left', 'banner_right', 'banner_end','product_all','outdoor','decor','houseware'));
        } else {
            return view('frontend/home/index', compact('total','hot_products_slide','product_new', 'product_hl', 'industry', 'nature' , 'sale', 'plastic', 'news_arr','slide1','slide2','banner_mid', 'banner_left', 'banner_right', 'banner_end','product_all','outdoor','decor','houseware'));
        }
    }
    
}
