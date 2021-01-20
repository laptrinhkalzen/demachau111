<?php

namespace Repositories;

use Repositories\Support\AbstractRepository;

class CategoryRepository extends AbstractRepository {

    public function __construct(\Illuminate\Container\Container $app) {
        parent::__construct($app);
    }

    public function model() {
        return 'App\Category';
    }

    public function validateCreate() {
        return $rules = [
            'name' => 'required',
            'alias' => 'required'
        ];
    }

    public function validateUpdate($id) {
        return $rules = [
            'name' => 'required',
            'alias' => 'required'
        ];
    }

    public function readCategoryByType($type) {
        return $this->model->where('type', $type)->orderBy('created_at', 'desc')->get();
    }

    public function getCategoryProduct() {
        return $this->model->where('type', $type)->orderBy('created_at', 'desc')->get();
    }

    public function getChildrenCategory($parent_id) {
        return $this->model->where('type', '4')->where('parent_id',$parent_id)->orderBy('created_at', 'desc')->get();
    }

    public function getChildrenCategoryByArray($parent_id=array()) {
        return $this->model->where('type', '4')->whereIn('parent_id',$parent_id)->orderBy('created_at', 'desc')->get();
    }

    public function getChildrenCategoryByAlias($alias) {
        $parent_id = \Db::table('category')->where('alias', $alias)->pluck('id');
        return $this->model->where('type', '4')->where('parent_id',$parent_id)->orderBy('created_at', 'desc')->get();
    }

    public function getProductCategory() {
        return $this->model->where('status', '1')->where('parent_id', '0')->where('type', '4')->orderBy('ordering', 'asc')->get();
    }

    public function readParentCategory($type, $parent_id) {
        return $this->model->where('type', $type)->where('id', $parent_id)->first();
    }

    public function getAllCategoryNews($alias,$parent_id) {
        return $this->model->where('type', $alias)->where('parent_id',0)->get();
    }

    public function readHomeProductCategory() {
        return $this->model->where('type', \App\Category::TYPE_PRODUCT)->where('parent_id', \App\Category::PRODUCT_SHOP_ID)->get();
    }

    public function readHomeGalleryCategory($limit = 10) {
        return $this->model->where('type', \App\Category::TYPE_GALLERY)->where('parent_id', \App\Category::GALLERY_ALBUM)->take($limit)->get();
    }

    public function getCurrentCategory($id) {
        $data = $this->model->where('id', $id)->first();
        return $data;
    }

    public function getArrayCurrentCategory($id) {
        $data = $this->model->whereIn('id', $id)->where('parent_id',0)->get();
        return $data;
    }

    public function getArrayCurrentCategory2($id) {
        $data = $this->model->whereIn('id', $id)->where('parent_id','!=',0)->get();
        return $data;
    }
    
    public function getParentArrayCurrentCategory($id) {
        dd($id);
        $data = $this->model->whereIn('id', $id)->where('parent_id',0)->get();
        return $data;
    }

    public function getParent($parent_id, $type = 'product') {
        $item = $this->model->where('id', $parent_id)->first();        
        $item->parent = $this->getParent($item->parent_id, $type);
        return $item;
    }
    public function getChildren($id, $type = 'product') {
        $item = $this->model->where('parent_id', $id)->get(); 
        foreach($item as $value){
            $value->children = $this->getChildren($value->id, $type);
        }      
        return $item;
    }

    public function readVideoCategory() {
        return $this->model->where('type', \App\Category::TYPE_VIDEO)->where('parent_id', '!=', 0)->orderBy('ordering','asc')->get();
    }

    public function readHomeNewsCategory($limit = 10) {
        return $this->model->where('type', \App\Category::TYPE_NEWS)->where('is_home', 1)->take($limit)->get();
    }

    public function getCategoryNews($alias) {
        return $this->model->where('type', \App\Category::TYPE_NEWS)->where('alias',$alias)->first();
    }

    public function getCategoryByAlias($alias) {
        return $this->model->where('type', \App\Category::TYPE_PRODUCT)->where('alias',$alias)->first();
    }

    public function getCategoryByIdProduct($id) {
        $id = \Db::table('product_category')->whereIn('product_id', $id)->pluck('category_id');
        return $this->model->where('type', \App\Category::TYPE_PRODUCT)->whereIn('id',$id)->get();
    }



}
