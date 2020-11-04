<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'product';
    protected $fillable = [
        'created_by', 'is_hot', 'is_new', 'content', 'price', 'sale_price', 'images', 'videos', 'title', 'description', 'keywords', 'meta_title', 'meta_description', 'meta_keywords', 'view_count', 'status', 'alias', 'ordering', 'post_schedule', 'size'
    ];

    public function attributes() {
        return $this->belongsToMany('\App\Attribute', 'product_attribute', 'product_id', 'attribute_id')->withPivot('value');
    }

    public function categories() {
        return $this->belongsToMany('\App\Category', 'product_category', 'product_id', 'category_id');
    }

    public function product_attributes() {
        return $this->hasMany('App\ProductAttribute', 'product_id');
    }

    public function getPostSchedule() {
        return date('d/m/Y', strtotime($this->post_schedule));
    }

    public function getImage() {
        $image_arr = explode(',', $this->images);
        return $image_arr[0];
    }

    public function getPrice() {
        return $this->price > 0 ? number_format($this->price) . ' đ/m2' : 'Liên hệ';
    }

    public function getSalePrice() {
        return number_format($this->sale_price) . ' đ/m2';
    }

    public function createdBy() {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function url() {
        return route('product.detail', ['alias' => $this->alias]);
    }

    public function getSize() {
        $size = $this->hasMany('App\ProductAttribute', 'product_id')->where('attribute_id', 5)->first();
        if(is_null($size))
        return "";
        else
        return $size->value;
    }
    public function getCategory() {
        $category = $this->hasMany('App\ProductAttribute', 'product_id')->where('attribute_id', 4)->first();
        if(is_null($category))
        return "";
        else
        return $category->value;
    }
    public function getValueText($id,$attributes) {
        $category = \DB::table('product_attribute')->where('product_id',$id)->where('attribute_id', $attributes)->first();
        if(is_null($category))
        return "";
        else
        return $category->value;
    }

    public function getValueSelect($id,$attributes) {
        $children_attribute = \DB::table('attribute')->where('parent_id',$attributes)->pluck('id');
        if(is_null($children_attribute))
        return "";
        else
        $category = \DB::table('product_attribute')->where('product_id',$id)->whereIn('attribute_id', $children_attribute)->first();
        if(is_null($category))
        return "";
        $value = \DB::table('attribute')->where('id',$category->attribute_id)->first()->title;
        return $value;
    }
    public function getThickness() {
        $category = $this->hasMany('App\ProductAttribute', 'product_id')->where('attribute_id', 30)->first();
        if(is_null($category))
        return "";
        else
        return $category->value;
    }
    public function getApplication() {
        $category = $this->hasMany('App\ProductAttribute', 'product_id')->where('attribute_id', 29)->first();
        if(is_null($category))
        return "";
        else
        return $category->value;
    }
    public function getAmount() {
        $category = $this->hasMany('App\ProductAttribute', 'product_id')->where('attribute_id', 27)->first();
        if(is_null($category))
        return "";
        else
        return $category->value;
    }
    public function getStandard() {
        $category = $this->hasMany('App\ProductAttribute', 'product_id')->where('attribute_id', 28)->first();
        if(is_null($category))
        return "";
        else
        return $category->value;
    }

}
