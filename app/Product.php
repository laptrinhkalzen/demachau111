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
        dd($category);
        if(is_null($category))
        return "";
        else
        return $category->value;
    }
}
