<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\ProductAttributeRepository;
use App\Repositories\ProductCategoryRepository;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Repositories\NewsRepository;
use Repositories\AttributeRepository;
use Repositories\CategoryRepository;
use Repositories\KeywordRepository;
use App\Repositories\OrderRepository;
use App\Repositories\OrderDetailRepository;
use Repositories\GalleryRepository;
use App\Product;
use App\Repositories\SlideRepository;
use DB;

class ProductController extends Controller {

    
    
    public function __construct(OrderRepository $orderRepo, OrderDetailRepository $orderdetailRepo, ProductRepository $productRepo,NewsRepository $newsRepo, CategoryRepository $categoryRepo, AttributeRepository $attributeRepo, ProductAttributeRepository $productAttrRepo, ProductCategoryRepository $productCategoryRepo, KeywordRepository $keywordRepo, GalleryRepository $galleryRepo,ProductCategoryRepository $productcategoryRepo, SlideRepository $slideRepo) {
        $this->productRepo = $productRepo;
        $this->newsRepo = $newsRepo;
        $this->categoryRepo = $categoryRepo;
        $this->attributeRepo = $attributeRepo;
        $this->productAttrRepo = $productAttrRepo;
        $this->productCategoryRepo = $productCategoryRepo;
        $this->galleryRepo = $galleryRepo;
        $this->keywordRepo = $keywordRepo;
        $this->orderRepo = $orderRepo;
        $this->orderdetailRepo = $orderdetailRepo;
        $this->productcategoryRepo= $productcategoryRepo;
        $this->slideRepo = $slideRepo;
    }

    public function show(Request $request, $alias) {
        ini_set('memory_limit', '2048M');
        $search_product = $this->productRepo->getProduct($alias, $limit=null);
        $title_category = \DB::table('category')->where('alias', $alias)->first();
        $main_category = $this->categoryRepo->getCategoryByAlias($alias);
        $product_arr = $this->productRepo->getProductByAliasCategory(null, $title_category->alias);
        $parent_category =  $this->categoryRepo->getChildrenCategoryByAlias($alias); 
        $children_category = $this->categoryRepo->getChildrenCategoryByArray($parent_category->pluck('id'));
        $product_category = $this->productRepo->getProductByArrayCategory($children_category->pluck('id'));
        $count = count($search_product);
        $slide1 = $this->slideRepo->getBanner($position=7);
        $category_arr = $this->categoryRepo->getChildrenCategoryByAlias($alias);
        $category_filter =  $this->categoryRepo->getProductCategory();
        $brand =  $this->attributeRepo->getAttributes(null, $parent_id = 2);
        $origin =  $this->attributeRepo->getAttributes(null, $parent_id = 19);
        $color =  $this->attributeRepo->getAttributes(null, $parent_id = 25);
        $price_id = $request->get('price');
        $cat_id = $request->get('category_id');
        $brand_id = $request->get('brand');
        $color_id = $request->get('color');
        $sort_id = $request->get('sort');
       return view('frontend/product/show',compact('search_product','count','title_category','slide1','category_arr','parent_category','children_category','product_category','product_arr','main_category','origin','category_filter','brand','color','cat_id','price_id','brand_id','color_id','sort_id'));
    }

    public function category(Request $request, $alias) {
          $category_id=DB::table('category')->where('alias',$alias)->first();
          if($category_id->parent_id!=0){
          $product_cat = DB::table('product')->join('product_category','product.id','=','product_category.product_id')->where('product_category.category_id',$category_id->id)->get();
          }
          else{
             $children_ids=DB::table('category')->where('parent_id',$category_id->id)->get();
             $id_children[]=$category_id->id;
             foreach($children_ids as $children_id){
                $id_children[]=$children_id->id;
             }
             $product_cat = DB::table('product')->join('product_category','product.id','=','product_category.product_id')->whereIn('product_category.category_id',$id_children)->get();
          }
          //lấy mảng product_id
          $product_ids=$product_cat->groupBy('id');
          foreach($product_ids as $key => $product_id){
              $pro_id[]=$key;
          }
          //lấy mảng attribute_id
          $category_attr= $product_cat->groupBy('category_id');
          foreach($category_attr as $key => $category_attr)
          {
             $attr[]= $key;
          }

          //lấy mảng attribute_id của tất cả sản phẩm
            $attributes=DB::table('product_attribute')->whereIn('product_id',$pro_id)->get()->groupBy('attribute_id');
            foreach ($attributes as $key => $attribute) {
                $cat[]=$key;
            }
          $attributes=DB::table('attribute')->where('parent_id','!=','0')->whereIn('id',$cat)->get()->groupBy('parent_id');
   
          $parent_attributes=DB::table('attribute')->where('parent_id',0)->get();
          return view('frontend/category/show',compact('product_cat','attributes','parent_attributes','category_id'));
    }

    public function search(Request $request) {
         ini_set('memory_limit', '2048M');

        $search_product = $this->productRepo->readFE($request);
        $count = count($search_product);
        $slide1 = $this->slideRepo->getBanner($position=7);
        $category_filter =  $this->categoryRepo->getProductCategory();
        $brand =  $this->attributeRepo->getAttributes(null, $parent_id = 2);
        $origin =  $this->attributeRepo->getAttributes(null, $parent_id = 19);
        $color =  $this->attributeRepo->getAttributes(null, $parent_id = 25);
        //paginate
        $price_id = $request->get('price');
        $cat_id = $request->get('category_id');
        $brand_id = $request->get('brand');
        $color_id = $request->get('color');
        $sort_id = $request->get('sort');
       return view('frontend/home/search',compact('search_product','count','slide1','origin','category_filter','brand','color','cat_id','price_id','brand_id','color_id','sort_id'));
    } 

      public function search_product(Request $request) {
         
     
        $product_arr=DB::table('product')->where('status',1)->where('alias','LIKE','%'.$request->search.'%')->orWhere('meta_keywords','LIKE','%'.$request->search.'%')->paginate(12);
       return view('frontend/category/show',compact('product_arr'));
    } 



    public function filter(Request $request){
        $search_product = $this->productRepo->readFE($request);
        $count = count($search_product);
        $slide1 = $this->slideRepo->getSlide1();
        return view('frontend/home/search',compact('search_product','count','slide1'));
    }
    public function detail(Request $request,$alias) {
            $id=DB::table('product')->where('alias',$alias)->pluck('id')->first();
            $benefit = DB::table('benefit')->orderBy('order','asc')->get();
            $detail_product =  $this->productRepo->getDetailProduct($alias);
            $attributes=DB::table('product_attribute')->join('attribute','attribute.id','=','product_attribute.attribute_id')->where('product_id',$id)->where('attribute.parent_id','!=','0')->where('product_attribute.is_variant',1)->get();
            $parent_ids=DB::table('product_attribute')->join('attribute','attribute.id','=','product_attribute.attribute_id')->where('product_id',$id)->where('attribute.parent_id','!=','0')->get()->pluck('parent_id')->unique();
            foreach ($parent_ids as $key => $value) {
                $input[$key]['id']=$value;
                $input[$key]['name']=DB::table('attribute')->where('id',$value)->pluck('title')->first();
            }


           
             
            // $tags = $this->categoryRepo->getCategoryByIdProduct($detail_products->pluck('id'));
            // $similar_products=  $this->productRepo->getSimilarProduct(6,$id);
            // $news_arr = $this->newsRepo->getAllNews($limit = 7);
            // $hl_products=  $this->productRepo->getProductByAliasCategory2(5,'san-pham-ua-chuong');

            return view('frontend/product/detail',compact('detail_product','attributes','parent_ids','input','benefit'));

        }      

    public function index(Request $request) {
        ini_set('memory_limit', '2048M');
        $category_arr = $this->categoryRepo->readHomeProductCategory();
        $search = $request->all();
        $records = $this->productRepo->readFE($request);
        if ($request->get('keyword')) {
            $this->keywordRepo->create(['keyword' => $request->get('keyword')]);
            $category = \App\Category::where('title','like',$request->get('keyword'))->first();
        }
        if (isset($search['attribute_id'])) {
            $search['attribute_arr'] = explode(',', $search['attribute_id']);
        }
        $new_products = $this->productRepo->readNewProduct();
        if (config('global.device') !== 'pc') {
            $product_ids = \DB::table('product_category')->where('category_id', $request->get('category_id') ?: \App\Category::PRODUCT_SHOP_ID)->pluck('product_id');
            Session::put('category_id', $request->get('category_id') ?: \App\Category::PRODUCT_SHOP_ID);
            $attribute_arr = $this->attributeRepo->readAttributeByParent($module = 'product', $parent = 0, $type = 'select', $product_ids);
            if(isset($category)){
                $search['category_id'] = $category->id;
            }
            $current_category = $this->categoryRepo->getCurrentCategory(isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID);
            if (!$current_category->children->toArray()) {
                $current_category = $this->categoryRepo->getCurrentCategory($current_category->parent_id);
            }
            if(isset($search['category_id'])){
                 $category_arr = $this->categoryRepo->getChildren($search['category_id']);
                 if(count($category_arr) == 0){
                     $cate = $this->categoryRepo->find($search['category_id']);
                     $category_arr = $this->categoryRepo->getChildren($cate->parent_id);
                 }
            }
            return view('mobile/product/list', compact('records', 'category_arr', 'attribute_arr', 'new_products', 'search', 'current_category'));
        } else {
            $parent_cat = \App\Category::where('id', isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID)
                    ->with('parentCategories')
                    ->first();
            Session::put('category_id', isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID);
            $parent_arr[] = ['title' => $parent_cat->title, 'url' => route('product.index', ['category_id' => $parent_cat->id])];
            if ($parent_cat->parentCategories) {
                $parent_arr[] = ['title' => $parent_cat->parentCategories->title, 'url' => route('product.index', ['category_id' => $parent_cat->parentCategories->id])];
                if ($parent_cat->parentCategories->parents) {
                    $parent_arr = array_merge($parent_arr, $this->getParent($parent_cat->parentCategories->parents));
                }
            }
            $parent_arr = array_reverse($parent_arr);
             if(isset($category)){
                $search['category_id'] = $category->id;
            }
            $current_category = $this->categoryRepo->getCurrentCategory(isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID);
            if (!$current_category->children->toArray()) {
                $current_category = $this->categoryRepo->getCurrentCategory($current_category->parent_id);
            }
            if (!isset($search['paginate'])) {
                $search['paginate'] = 80;
            }
            return view('frontend/product/list', compact('records', 'category_arr', 'search', 'current_category', 'parent_arr'));
        }
    }

    public function sale(Request $request) {
        ini_set('memory_limit', '2048M');
        $category_arr = $this->categoryRepo->readHomeProductCategory();
        $search = $request->all();
        $records = $this->productRepo->readSale($request);
        if ($request->get('keyword')) {
            $this->keywordRepo->create(['keyword' => $request->get('keyword')]);
        }
        if (isset($search['attribute_id'])) {
            $search['attribute_arr'] = explode(',', $search['attribute_id']);
        }
        $new_products = $this->productRepo->readNewProduct();
        if (config('global.device') !== 'pc') {
            $product_ids = \DB::table('product_category')->where('category_id', $request->get('category_id') ?: \App\Category::PRODUCT_SHOP_ID)->pluck('product_id');
            $attribute_arr = $this->attributeRepo->readAttributeByParent($module = 'product', $parent = 0, $type = 'select', $product_ids);

            $current_category = $this->categoryRepo->getCurrentCategory(isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID);
            if (!$current_category->children->toArray()) {
                $current_category = $this->categoryRepo->getCurrentCategory($current_category->parent_id);
            }
            return view('mobile/product/list', compact('records', 'category_arr', 'attribute_arr', 'new_products', 'search', 'current_category'));
        } else {
            $parent_cat = \App\Category::where('id', isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID)
                    ->with('parentCategories')
                    ->first();
            $parent_arr[] = ['title' => $parent_cat->title, 'url' => route('product.index', ['category_id' => $parent_cat->id])];
            if ($parent_cat->parentCategories) {
                $parent_arr[] = ['title' => $parent_cat->parentCategories->title, 'url' => route('product.index', ['category_id' => $parent_cat->parentCategories->id])];
                if ($parent_cat->parentCategories->parents) {
                    $parent_arr = array_merge($parent_arr, $this->getParent($parent_cat->parentCategories->parents));
                }
            }
            $parent_arr = array_reverse($parent_arr);
            $current_category = $this->categoryRepo->getCurrentCategory(isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID);
            if (!$current_category->children->toArray()) {
                $current_category = $this->categoryRepo->getCurrentCategory($current_category->parent_id);
            }
            if (!isset($search['paginate'])) {
                $search['paginate'] = 80;
            }
            $sale = true;
            return view('frontend/product/list', compact('sale', 'records', 'category_arr', 'search', 'current_category', 'parent_arr'));
        }
    }



    public function getParent($parent) {
        $parent_arr[] = ['title' => $parent->title, 'url' => route('product.index', ['category_id' => $parent->id])];
        if ($parent->parents) {
            $parent_arr = array_merge($parent_arr, $this->getParent($parent->parents));
        }
        return $parent_arr;
    }

//     public function detail($alias) {
//         if (isset($_GET['ref'])) {
//             session(['ref' => $_GET['ref']]);
//         }
//         $record = $this->productRepo->findByAlias($alias);
//         $sale_product = $this->productRepo->getCategorySale($record->id);
//         $this->productRepo->updateViewCount($record->id, $record->view_count);
//         $image_arr = explode(',', $record->images);
//         $gallery = $this->galleryRepo->getImageByKeyword($record->keywords);
// //        $product_arr = $this->productCategoryRepo->getCategory($record->categories);
//         $related_product = $this->productRepo->readRelatedProduct(15, $record->categories()->orderBy('id', 'desc')->first());
//         $url = \Illuminate\Support\Facades\Request::url();
//         if (!session('id')) {
//             session(['id' => [$record->id]]);
//         } else {
//             $ids = array_merge(session('id'), [$record->id]);
//             session(['id' => $ids]);
//         }
//         $config = $this->productRepo->getConfig($record->id);
//         $viewed_products = $this->productRepo->getViewedProduct();
//         $attribute_arr = $this->attributeRepo->readAttributes($record->attributes, 'product');
//         $product = $record;
//         $category_id = $record->categories()->orderBy('id', 'desc')->first()->id;
//         if (config('global.device') !== 'pc') {
//             return view('mobile/product/detail', compact('category_id','record', 'product', 'config', 'gallery', 'image_arr', 'attribute_arr', 'related_product', 'url', 'viewed_products'));
//         } else {
//             return view('frontend/product/detail', compact('category_id','sale_product','record', 'product', 'gallery', 'config', 'image_arr', 'attribute_arr', 'related_product', 'url', 'viewed_products'));
//         }
//     }

    public function cart() {
        $total = 0;
        if (!is_null(session('cart'))) {
            foreach (session('cart') as $key => $val) {
                $total += ($val['price'] * $val['quantity']);
            }
        }
        if (config('global.device') !== 'pc') {
            return view('mobile/cart/index', compact('total'));
        } else {
            return view('frontend/cart/index', compact('total'));
        }
    }

    public function checkout() {
        $total = 0;
        foreach (session('cart') as $val) {
            $total += ($val['price'] * $val['quantity']);
        }
        if (config('global.device') !== 'pc') {
            return view('mobile/cart/checkout', compact('total'));
        } else {
            return view('frontend/cart/checkout', compact('total'));
        }
    }

    public function checkoutSuccess(Request $request) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->orderRepo->validateCreate());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $total = 0;
        foreach (session('cart') as $key => $val) {
            $total += ($val['price'] * $val['quantity']);
        }
        if (!is_null(session('ref'))) {
            $input['ref'] = session('ref');
        }
        $input['total'] = $total;
        $order = $this->orderRepo->create($input);
        foreach (session('cart') as $key => $val) {
            $detail['order_id'] = $order->id;
            $detail['product_id'] = $key;
            $detail['quantity'] = $val['quantity'];
            $detail['price'] = $val['price'];
            $detail['sub_total'] = $val['price'] * $val['quantity'];
            $this->orderdetailRepo->create($detail);
        }
        $request->session()->flush('cart');
        if (config('global.device') !== 'pc') {
            return view('mobile/cart/success');
        } else {
            return view('frontend/cart/success');
        }
    }

}
