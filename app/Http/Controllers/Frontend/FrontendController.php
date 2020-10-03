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

class FrontendController extends Controller {

    public function __construct(ProductRepository $productRepo, NewsRepository $newsRepo, ProductAttributeRepository $productAttributeRepo) {
        $this->productRepo = $productRepo;
        $this->newsRepo = $newsRepo;
        $this->productAttributeRepo = $productAttributeRepo;
    }
    public function index() {
        //cart
        $total = 0;
        if (!is_null(session('cart'))) {
            foreach (session('cart') as $key => $val) {
                $total += ($val['price'] * $val['quantity']);
            }
        }

        $product_new = $this->productRepo->readNewProduct($limit = 10);
        $hot_products_slide = $this->productRepo->readHlProduct($limit = 4);
        $product_hl = $this->productRepo->readHlProduct($limit = 6);
        $industry = $this->productRepo->getIndustryProduct($limit = 8);
        $nature = $this->productRepo->getIndustryProduct($limit = 8);
        $sale = $this->productRepo->getIndustryProduct($limit = 6);
        $plastic = $this->productRepo->getIndustryProduct($limit = 8);
        $news_arr = $this->newsRepo->getAllNews($limit = 7);
        if (config('global.device') != 'pc') {
            return view('mobile/home/index', compact('total','hot_products_slide','product_new', 'product_hl', 'industry', 'nature', 'sale', 'plastic', 'news_arr'));
        } else {
            return view('frontend/home/index', compact('total','hot_products_slide','product_new', 'product_hl', 'industry', 'nature' , 'sale', 'plastic', 'news_arr'));
        }
    }
    
}
