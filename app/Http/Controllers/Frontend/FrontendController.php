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
        $industry = $this->productRepo->getIndustryProduct($limit);
        $industry_origin = $this->productRepo->getIndustryOrigin($limit);
        $nature = $this->productRepo->getNatureProduct($limit = 8);
        $nature_category = $this->productRepo->getNatureCategory($limit);
        $sale = $this->productRepo->getProduct($alias= 'hang-thanh-ly', $limit = 10);
        $plastic = $this->productRepo->getPlasticProduct($limit = 8);
        $plastic_category = $this->productRepo->getPlasticCategory($limit);
        $outdoor = $this->productRepo->getOutdoorProduct($limit = 8);
        $outdoor_category = $this->productRepo->getOutdoorCategory($limit);
        $decor = $this->productRepo->getDecorProduct($limit = 8);
        $decor_category = $this->productRepo->getDecorCategory($limit);
        $houseware = $this->productRepo->getHousewareProduct($limit = 8);
        $news_arr = $this->newsRepo->getAllNews($limit = 7);
        $category =  $this->categoryRepo->getProductCategory();
        foreach($category as $value){
            $value->children = $this->categoryRepo->getChildren($value->id);
        } 
        $brand =  $this->attributeRepo->getAttributes($limit, $parent_id = 2);
        $origin =  $this->attributeRepo->getAttributes($limit = 5, $parent_id = 19);
        $material =  $this->categoryRepo->getChildrenCategory($parent_id = 3);
        $plastic_brand = $this->categoryRepo->getChildrenCategory($parent_id = 4);
        $outdoor_brand = $this->categoryRepo->getChildrenCategory($parent_id = 5);
        $decor_brand = $this->categoryRepo->getChildrenCategory($parent_id = 6);    
        return view('frontend/home/index', compact('total','hot_products_slide','product_new', 'product_hl', 'industry', 'nature' , 'sale', 'plastic', 'news_arr','slide1','slide2','banner_mid', 'banner_left', 'banner_right', 'banner_end','product_all','outdoor','decor','houseware','category','brand','origin','industry_origin','material','nature_category','plastic_brand','plastic_category','outdoor_category','outdoor_brand','decor_category','decor_brand'));
    }
    
}
