<?php

/**
 * Created by PhpStorm.
 * User: Hien
 * Date: 12/09/2019
 * Time: 11:03 AM
 */

namespace App\Repositories;

use Repositories\Support\AbstractRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
class ProductRepository extends AbstractRepository {

    public function __construct(\Illuminate\Container\Container $app) {
        parent::__construct($app);
    }

    public function model() {
        return 'App\Product';
    }

    public function validateCreate() {
        return $rules = [
            'title' => 'required|unique:product',
            'alias' => 'required',
            'category_id' => 'required',
            'images' => 'required',

            'keywords' => 'required'
        ];
    }

    public function validateUpdate($id) {
        return $rules = [
            'title' => 'required|unique:product,title,' . $id . ',id',
            'alias' => 'required',
            'category_id' => 'required',
            'images' => 'required',

            'keywords' => 'required'
        ];
    }

    public function readFE($request) {
        $model = $this->model;
        if ($request->get('category_id')) {
            $product_ids = \Db::table('product_category')->where('category_id', $request->get('category_id'))->pluck('product_id');
            $model = $model->whereIn('id', $product_ids);
        }
        if ($request->get('attribute_id')) {
            $attribute_ids = explode(',', $request->get('attribute_id'));
            $product_ids = \Db::table('product_attribute')->whereIn('attribute_id', $attribute_ids)->pluck('product_id');
            $model = $model->whereIn('id', $product_ids);
        }
        if ($request->get('category')) {
            $product_ids = \Db::table('product_category')->where('category_id', $request->get('category_id'))->pluck('product_id');
            $model = $model->whereIn('id', $product_ids);
        }
        if ($request->get('brand')) {
            $attribute_ids = explode(',', $request->get('brand'));
            $product_ids = \Db::table('product_attribute')->whereIn('attribute_id', $attribute_ids)->pluck('product_id');
            $model = $model->whereIn('id', $product_ids);
        }
        if ($request->get('color')) {
            $attribute_ids = explode(',', $request->get('color'));
            $product_ids = \Db::table('product_attribute')->whereIn('attribute_id', $attribute_ids)->pluck('product_id');
            $model = $model->whereIn('id', $product_ids);
        }
        if ($request->get('price')) {
            $price = $request->get('price');
            switch ($price) {
                case '1':
                    $model=$model->where('price','<',100000);
                    break;
                case '2':
                    $model=$model->whereBetween('price',[200000,300000]);
                    break;
                case '3':
                    $model=$model->whereBetween('price',[300000,400000]);
                    break;
                case '4':
                    $model=$model->whereBetween('price',[400000,600000]);
                    break;
                case '5':
                    $model=$model->where('price','>',600000);
                    break;
            }

        }
        if ($request->get('sort')) {
            $sort = $request->get('sort');
            switch ($sort) {
                case '1':
                    $model=$model->orderby('price','asc');
                    break;
                case '2':
                    $model=$model->orderby('price','desc');
                    break;
            }

        }
        if ($request->get('keyword')) {
            $category = \App\Category::where('title','like',$request->get('keyword'))->first();
            if($category){
                $product_ids1 = \Db::table('product_category')->where('category_id', $category->id)->pluck('product_id');
                $model = $model->whereIn('id', $product_ids1);
            }else{
                $model = $model->where(function ($query) use ($request) {
                    return $query->where('title', 'like', '%' . $request->get('keyword') . '%')
                                    ->orWhere('keywords', 'like', '%' . $request->get('keyword') . '%');
                });
            }
        }
        if ($request->get('count_product')) {
            $limit = $request->get('count_product');
        }

        else{
            $limit = 6;
        }
        return $model->where('status', 1)->orderBy('created_at', 'desc')->paginate($limit);
    }
    public function readSale($request) {
        $model = $this->model;
        if ($request->get('category_id')) {
            $product_ids = \Db::table('product_category')->where('category_id', $request->get('category_id'))->pluck('product_id');
            $model = $model->whereIn('id', $product_ids);
        }
        if ($request->get('attribute_id')) {
            $attribute_ids = explode(',', $request->get('attribute_id'));
            $product_ids = \Db::table('product_attribute')->whereIn('attribute_id', $attribute_ids)->pluck('product_id');
            $model = $model->whereIn('id', $product_ids);
        }
        if ($request->get('keyword')) {
            $model = $model->where(function ($query) use ($request) {
                return $query->where('title', 'like', '%' . $request->get('keyword') . '%')
                                ->orWhere('content', 'like', '%' . $request->get('keyword') . '%');
            });
        }
        if ($request->get('count_product')) {
            $limit = $request->get('count_product');
        }
        else{
            $limit = 80;
        }
        return $model->where('sale_price','>',0)->where('status', 1)->orderBy('created_at', 'desc')->paginate($limit);
    }
    public function getCategorySale($product_id){
        $model = $this->model;
        $category_ids = \Db::table('product_category')->where('product_id', $product_id)->where('category_id','<>',80)->pluck('category_id');
        $product_ids = \Db::table('product_category')->whereIn('category_id', $category_ids)->pluck('product_id');
        $model = $model->whereIn('id', $product_ids);
        return $model->where('sale_price','>',0)->where('status', 1)->orderBy('created_at', 'desc')->get();
    }
    public function allProduct() {
        return $this->model->where('status', 1)->get();
    }

    public function getDetailProduct($alias) {

        return $this->model->where('alias', $alias)->first();

    }

    public function findByAlias($alias) {
        return $this->model->where('alias', '=', $alias)->first();
    }
    public function findByID($id) {
        return $this->model->where('id', '=', $id)->first();
    }

    public function readRelatedProduct($limit = 15, $category) {
        $product_ids = \DB::table('product_category')->where('category_id', $category->id)->pluck('product_id');
        return $this->model->where('status', 1)->whereIn('id', $product_ids)->orderBy('created_at', 'desc')->take($limit)->get();
    }

    public function readRelatedProducts($keywords, $limit = 15) {
        $query = $this->model->where('status', 1);
        $keyword_arr = explode(',', $keywords);
        $query = $query->where(function($que) use($keyword_arr) {
            foreach ($keyword_arr as $val) {
                if($val != 'alagreen'){
                    $que = $que->orWhere('title', 'LIKE', '%' . trim($val) . '%')->orWhere('keywords', 'LIKE', '%' . trim($val) . '%');
                }
            }
            return $que;
        });
        $data = $query->select('price', 'alias', 'images', 'title', 'created_by', 'view_count')->take($limit)->get();
        return $data;
    }

    public function readAllProduct($limit) {
        return $this->model->where('status', 1)->where('post_schedule' ,'<=', Carbon::now('Asia/Ho_Chi_Minh'))->orderBy('post_schedule', 'desc')->take($limit)->paginate(10);
    }

    public function readEmptyProduct() {
        return $this->model->where('status', 3)->get();
    }

    public function readNewProduct($limit = 10) {
        return $this->model->where('status', 1)->where('is_new', 1)->where('post_schedule' ,'<=', Carbon::now('Asia/Ho_Chi_Minh'))->orderBy('post_schedule', 'desc')->take($limit)->get();
    }

    public function readHlProduct($limit = 10) {
        $category = \DB::table('category')->where('alias', 'san-pham-ban-chay')->pluck('id');
        $highlight = \DB::table('product_category')->where('category_id', $category)->pluck('product_id');
        return $this->model->where('status', 1)->where('post_schedule' ,'<=', Carbon::now('Asia/Ho_Chi_Minh'))->whereIn('id', $highlight)->orderBy('post_schedule', 'desc')->take($limit)->get();
    }

    public function getProduct($alias, $limit) {
        $category = \DB::table('category')->where('alias', $alias)->pluck('id');
        $product = \DB::table('product_category')->where('category_id', $category)->pluck('product_id');
        return $this->model->where('status', 1)->where('post_schedule' ,'<=', Carbon::now('Asia/Ho_Chi_Minh'))->whereIn('id', $product)->orderBy('post_schedule', 'desc')->take($limit)->paginate(12);
    }

    public function getProductByParentIdCategory($limit,$parent_id) {
        $category = \DB::table('category')->where('parent_id', $parent_id)->pluck('id');

        return $this->model->where('status', 1)->where('post_schedule' ,'<=', Carbon::now('Asia/Ho_Chi_Minh'))->join('product_category','product_category.product_id','=','product.id')->whereIn('category_id',$category)->orderBy('post_schedule', 'desc')->take($limit)->get();
    }

    public function getProductByAliasCategory($alias) {
        $limit = null;
        $category = \DB::table('category')->where('alias', $alias)->pluck('id');
        $product_id = \DB::table('product_category')->where('category_id', $category)->pluck('product_id');
        return $this->model->where('status', 1)->where('post_schedule' ,'<=', Carbon::now('Asia/Ho_Chi_Minh'))->join('product_category','product_category.product_id','=','product.id')->whereIn('id', $product_id)->orderBy('post_schedule', 'desc')->take($limit)->paginate(26);
    }
    
    public function getProductByAliasCategory2($limit,$alias) {
        $category = \DB::table('category')->where('alias', $alias)->pluck('id');
        $product_id = \DB::table('product_category')->where('category_id', $category)->pluck('product_id');
        return $this->model->where('status', 1)->where('post_schedule' ,'<=', Carbon::now('Asia/Ho_Chi_Minh'))->whereIn('id', $product_id)->orderBy('post_schedule', 'desc')->take($limit)->get();
    }


    public function readSearchProduct($keywords) {
        return $this->model->where('title','like', '%'.$keywords.'%')->get();
    }

    public function getFilterProduct($attribute,Request $request){
             $i=0;
             $i1=0;
            $product_ids = \DB::table('product_attribute')->whereIn('attribute_id', $attribute)->pluck('product_id');
             $product = \DB::table('product_attribute')->whereIn('attribute_id',$attribute)->get();   

            foreach($request->filter as $fil){
                if($fil>0){
                    $i++;
                }
                }
            foreach($product as  $pro){  
                foreach ($product as $key => $pro1) {
                    if($pro->product_id==$pro1->product_id){
                          $i1++;
                    }  
                }
               if($i1==$i){
                   $data[]=$pro->product_id;
               }
               $i1=0;      
            }
           if(!empty($data)){
             return $this->model->whereIn('id', $data)->where('post_schedule' ,'<=', Carbon::now('Asia/Ho_Chi_Minh'))->orderBy('post_schedule', 'desc')->paginate(10); 
            }
    }
    public function readRecentProduct($page = 0, $limit = 3) {
        $data = $this->model->where('status', 1)->orderBy('updated_at', 'desc')->skip($page * $limit)->take($limit)->get();
        return $data;
    }
    public function getViewedProduct() {
        return $this->model->whereIn('id', session('id'))->get();
    }
    public function getProductByKeyword($keyword, $limit = 50) {
        return $this->model->where('status', 1)->where('title', 'like', '%' . $keyword . '%')->take($limit)->pluck('title');
    }
    public function getProductsByTag($tag_title, $limit = 20) {
        return $this->model->select('title', 'alias', 'images')->where('title', 'like', '%' . $tag_title . '%')->orWhere('keywords', 'like', '%' . $tag_title . '%')->take($limit)->get();
    }
    public function getConfig($id) {
        return $this->model->select('title', 'description','keywords', 'meta_title', 'meta_keywords', 'meta_description')->where('id', $id)->first();
    }

    public function getSimilarProduct($limit,$id) {
        $category = \DB::table('product_category')->where('product_id', $id)->pluck('category_id');

        $product_id = \DB::table('product_category')->whereIn('category_id',$category)->pluck('product_id');

        $similar_product = array_unique($product_id->toArray());
        return $this->model->whereIn('id', $similar_product)->orderBy('post_schedule', 'desc')->take($limit)->get();
    }

    public function getProductByArrayCategory($category=array()) {
        $product_id = \DB::table('product_category')->whereIn('category_id', $category)->pluck('product_id');
        return $this->model->where('status', 1)->where('post_schedule' ,'<=', Carbon::now('Asia/Ho_Chi_Minh'))->whereIn('id',$product_id)->join('product_category','product_category.product_id','=','product.id')->whereIn('category_id',$category)->orderBy('post_schedule', 'desc')->get();
    }
}
